<?php
$config = array (	
		//应用ID,您的APPID。
		'app_id' => "2016092200571838",

		//商户私钥，您的原始格式RSA私钥
		'merchant_private_key' => "MIIEvQIBADANBgkqhkiG9w0BAQEFAASCBKcwggSjAgEAAoIBAQDNd+O75AMoeTb2Lb4e12lBPjiiIXWxNwm8aOPjoX144lrPDVb0DDLKS6GS/hrrWE68IAU5LY0GBImLqMqia5KBmx572vQWBHlwr2xTNc1/7KMm2TxWCVOxSR13jpFmIGxRorV0UCBLKrEdU18Afplc42q5J01TEk84ldT7f7lLDZgVU92WnzqV5AvApKIk9N/84NLHATAgBtaysEHOyBpPdutxd/vuDW4OojQGy0qDwO6yGSeaJTnldq7aiQQYAzx/ukzP0BTFuY4MX+zL7U1xLpxg7mj2eHLxiNE+Zm91scJjssEcE2XibjaYoNGGUScnZVm4a6Kfk1cgjDYCe8L5AgMBAAECggEAHPzTFkj+4RDo3iZp8jP114yNtOH/lrbrGre5nv3Dk/BrW1bIc7nc2Il/DBvpdFaLFSN3WS/B+51cQmXX4L5IdxyJWnPzh7+t2mYFZF/s1CVwhySSzJiYRCTKkXl9rejZH1NTQkujorctMbP3bTxvKpmzDtgqopOstZD98VV9sMbDcBXY5jMPUdvgKhr3PzOLRsJZY7uzdhQiARQwqzT47jUVosZrL/p4GasV2+1aF5AtcHPR6bMgb83hELLXm/6tAfPqPOPJdhz1hjv+DH4Mx1XnEvOU1Eg5Gxvhxi8lsp68NPyYVK0vgpdPaUNqZXJAK9ZvVvoZFnx5XtfKaO4fYQKBgQDutVJnlxNsjBB07rpyKey4guO/N2X4Xmqv7t0ooeQHswB+WmJ+U3DK64n98FCKi0qWjpt4GDYq2DcqjRdFSoyqO3nKDHEjh/hNuoNL5nRukC8ca2fwXHO9YhR2XIkSdTTxACS/YznfS0gv+TyJHu4S0AsWo+zctzqnhXF0WdVFbQKBgQDcWifdN2vBf4V0NgCFh+J8W8OXvVDtK/9FWpstII1Z5uL3T5Czo6XFodDYebve5mcIb6cKcnSQmqr551W3hnbSCqLaH4PB173wUyYaiuAcQHI54rwixhFoODYIiZIqukJ8Hl5nImiOEoCCUK434M6g/fXHVSI9OaZFTeETe8gYPQKBgQCdbP2EjdDklFbCFzLk2ZthcAjs8YcRTotDrd8yzdmJ7lZT/h3YvAS1/rKJw3QKeqRdOH11rVoD1YZETLpdGzY7im/efWgcC68I7AltA/YjeHlpX7gzf3VhH47pJEvN3XhlvDd/9NuU1Jwt70wqDjjqNUQq0T8DrN9E3a+eESSi3QKBgACI23Xm74T9qTY591BbnwoMMvJITEz3AVyKtruqS41/SOeusrws1ncfSGFuEi2dQ3y6wJ3+3xeGuIl4rTWPxvQFgJWk4+3xdw2BNiN0WMzYvy4yxaAT+PDWyhLFOqyN3SFt9W6sn7JQiy1FwtZx3i53z0PXigi5/hRG9xfUAg1FAoGARs82IJrOn6vOGQI19HNIewETjH39b4tDAP8mM8O7UaFMGNcre/QQ0rLFwS/A+QBHVbERP6WlnEUJjx8Bv5R01HnmwgV/BACoi/FoFM6hUJgASDBGPQfxk89uw6BgauQ38wX0wS9PekeUIqhGsB526Xx2fFZD+/FJBbg8jexzScw=",
		
		//异步通知地址
		'notify_url' => "http://123.56.221.235",
		
		//同步跳转
		'return_url' => "http://123.56.221.235/laravel56/public/index.php/order/notifysuccess",

		//编码格式
		'charset' => "UTF-8",

		//签名方式
		'sign_type'=>"RSA2",

		//支付宝网关
		'gatewayUrl' => "https://openapi.alipaydev.com/gateway.do",

		//支付宝公钥,查看地址：https://openhome.alipay.com/platform/keyManage.htm 对应APPID下的支付宝公钥。
		'alipay_public_key' => "MIIBIjANBgkqhkiG9w0BAQEFAAOCAQ8AMIIBCgKCAQEAplShmY13dXH9S6AAudWTPbxcaT0/MOM7fkUfGlfrFl+OnAedp7pGrGPet7XpT5xV7VRjbslxTppk02l2Nuxz1hRlI3s+E5kGlje9AaE++vnLc1w+IAADdcILyK6Fq8/tkeKfPNBeoNSnX2IELalKFfwmm+keNFFaJ8MNMCKFeLJAFvRETnzivBsLcI31WxbVXrcqOzaypbvlR9HJvQPXzI+x34bDDGZDOSaq7KHNYZnE110ocsv6mzJuPpGxWNPI83WY3YiwlB++nBHh3MeWEQDOdMe1jlf6DLYv5llUT/RtKiF+tfHIAKnbFi7rR3wAJutLnRlOXawubE72fOy6zwIDAQAB",
		
	
);
