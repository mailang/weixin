<?php
/*我的*/
Route::get("/chat/my",['uses'=>"MyController@mine",'as'=>'weixin.my']);
Route::get("/chat/index",['uses'=>"IndexController@index",'as'=>'weixin.index']);
/*授权接口*/
Route::get("/credit/apply",['uses'=>"CreditController@apply",'as'=>'credit.apply']);
Route::get("/credit/code",['uses'=>"CreditController@validate_code",'as'=>'validate.code']);//获取验证码
Route::post("/credit/authorization",['uses'=>"CreditController@validate_store",'as'=>'authorization.store']);//认证
Route::post("/apply/store",['uses'=>"CreditController@apply_store",'as'=>'apply.store']);//认证
/*协议*/
Route::get("/credit/xieyi",function(){return view('wechat.credit.xieyi');});
Route::get("/test/apply",['uses'=>"CreditController@testapply",'as'=>'test.apply']);

/*订单支付配置*/
Route::get("/get/pay",['uses'=>"PayController@order_create",'as'=>'order.create']);//认证
