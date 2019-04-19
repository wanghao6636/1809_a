<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <script src="js/jquery-1.11.2.min.js"></script>
    <style>li{float:left;margin:10px; list-style:none}</style>
</head>
<body>
<form action="demo" method="get">
    商品名称:&nbsp;&nbsp;<input type="text" name="goods_name" placeholder="请输入要查询的商品名称">
    是否热卖:&nbsp;&nbsp;<select name="goods_hot" id="">
        <option value="0">请选择</option>
        <option value="2">是</option>
        <option value="1">否</option>
    </select>
    <input type="submit" value="搜索">
</form>
<table border=1>
    <tr>
        <td>id</td>
        <td>名字</td>
        <td>价格</td>
        <td>是否热卖</td>
        <td>时间</td>
       
    </tr>
    <?php foreach($data as $v){?>
    <tr>

        <td>
            <?php echo $v['goods_id']?>
        </td>
        <td>
            <?php echo $v['goods_name']?>
        </td>
        <td>
            <?php echo $v['goods_selfprice']?>
        </td>

        <td>
            <?php   if(   $v['goods_hot']==2){?>
                是
          <?php   }else{ ?>
            否
         <?php  }?>
        </td>
        <td>
            <?php echo $v['create_time']?>
        </td>

    </tr>
    <?php }?>
    <tr>
        <td colspan="7" >{{$data->links()}}</td>
    </tr>
</table>

 {{--<input type="button" value="删除缓存" id="del">--}}
</body>
</html>
<script>
    $("#del").click(function(){
        var url = "clear";
        if(confirm("您确定要删除么?")){
            $.ajax({
                type:"post",
                data:"",
                url : url,
                success :function( msg ){
                    if(msg==1){
                        alert("删除成功");
                    }else{
                        alert("出现未知错误,删除失败");
                    }
                }
            })
        }

    })
</script>