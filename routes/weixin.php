<?php
/*我的*/
Route::get("/chat/my",['uses'=>"MyController@mine",'as'=>'weixin.my']);
/*首页*/
Route::get("/chat/index",['uses'=>"IndexController@index",'as'=>'weixin.index']);
Route::get("/product/info/{id}",['uses'=>"IndexController@product",'as'=>'weixin.product']);
/*征信查询接口*/
Route::get("/apply",['uses'=>"CreditController@apply",'as'=>'credit.apply']);
Route::get("/reapply/{order_id}",['uses'=>"CreditController@reapply",'as'=>'credit.reapply']);
Route::post("/apply/store",['uses'=>"CreditController@apply_store",'as'=>'apply.store']);
Route::get("/apply/success/{id}",['uses'=>"CreditController@success",'as'=>'credit.success']);
/*认证*/
Route::get("/credit/authpage",['uses'=>"CreditController@validate_auth",'as'=>'validate.auth']);//实名认证页面
Route::get("/credit/code",['uses'=>"CreditController@validate_code",'as'=>'validate.code']);//获取验证码
Route::post("/credit/authorization",['uses'=>"CreditController@validate_store",'as'=>'authorization.store']);//认证保存
/*协议*/
Route::get("/credit/xieyi",function(){return view('wechat.credit.xieyi');})->name('wechat.xieyi');
Route::get("/test/apply",['uses'=>"CreditController@testapply",'as'=>'test.apply']);
/*订单支付配置*/
Route::get("/get/pay/{id}",['uses'=>"PayController@order_create",'as'=>'order.create']);//统一下单
Route::get("/get/repay/{order_id}",['uses'=>"PayController@re_create",'as'=>'order.recreate']);//重新下单
Route::get("/order/payback/{orderid}",['uses'=>"PayController@order_payback",'as'=>'order.payback']);//订单回调
/*信用报告*/
Route::get("/order/report/{id}",['uses'=>"ReportController@report",'as'=>'order.report']);
Route::get("/enterprise/{id}/{name}/{page?}",['uses'=>"InquiryController@enterprise",'as'=>'enterprise.inquiry']);
Route::get("/person/{id}/{name}/{page?}",['uses'=>"InquiryController@person",'as'=>'person.inquiry']);
Route::get("/company/{id}/{name}",['uses'=>"ReportController@enterprise",'as'=>'enterprise.info']);
/*退款*/
Route::get("/get/signature",['uses'=>"PayController@configSignature",'as'=>'get.signature']);
Route::get("/order/refund/{id}",['uses'=>"PayController@refund",'as'=>'order.refund']);
/*订单管理*/
Route::get("/order/info/{id}",['uses'=>"OrderController@order_info",'as'=>'order.info']);
Route::get("/order/list/{time}",['uses'=>"OrderController@orderlist",'as'=>'order.list']);


