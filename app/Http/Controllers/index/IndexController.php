<?php

namespace App\Http\Controllers\index;
use App\Model\Index\Goods;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
class IndexController extends Controller
{
    public function index(){
        $sql=DB::table('shop_goods')->where('goods_hot',1)->take(2)->get();
        //var_dump($sql);exit;

        //var_dump($page);
        return view('index.index',['sql'=>$sql]);
    }


    public function loading(Request $request){
        $arr=array();
        $page=$request->input('page',1);
         $pageNum=2;
        $offset=($page-1)*$pageNum;
       // var_dump($res);exit;
        $arrDataInfo=DB::table("shop_goods")->offset($offset)->limit($pageNum)->get();//每页的数据
        $totalData=DB::table("shop_goods")->count();//总条数
        $pageTotal=ceil($totalData/$pageNum);//总页数
        $objview=view("index.show",['info'=>$arrDataInfo]);
        $countent=response($objview)->getContent();
        $arr['info']=$countent;
        $arr['page']=$pageTotal;
       return $arr;
    }
    public function user(){
        return view('index.user');
    }
    public function demo(Request $request){
        header("content-type:text/html;charset=utf-8");
        $page=empty($request->input('page'))?1:$request->input('page');
        $goods_name=empty($request->input('goods_name'))?"":$request->input('goods_name');
        $goods_hot=empty($request->input('goods_hot'))?"":$request->input('goods_hot');
        $key=$page.$goods_name.$goods_hot;

        $memcache=new \memcache();
        $memcache->connect('127.0.0.1',11211);
        if($memcache->get($key)){
           // echo $key;
           $data=$memcache->get($key);
        }else{
            $data=Goods::where("goods_name","like","%$goods_name%");
           // var_dump($data);
            if($goods_hot){
                $goods_hot = $goods_hot== $page? $goods_name : $goods_hot;
                $data=$data->where("goods_hot",$goods_hot);
            }
            $time=time()+60;
            $data = $data->paginate(5);
            $memcache->set($key,$data,MEMCACHE_COMPRESSED,$time);
            //$memcache->flush();
        }
        return view('index.demo',['data'=>$data]);
    }

    public function clear(){
        $memcache = new \memcache();

        $memcache->connect("127.0.0.1",11211);

        $bol = $memcache->flush();

        if($bol){
            return 1;
        }

    }






}
