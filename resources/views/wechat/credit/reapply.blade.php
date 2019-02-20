@include('wechat.layouts.header')
<body ontouchstart>
<form id="form1">
    <section class="qyc_container">
        <div class="weui-tab__panel"> <input type="hidden" name="_token" value="{{csrf_token()}}">
            <input id="auth_id" type="hidden" value="{{$oauth->id}}" name="auth_id">
            <input id="order_id" type="hidden" value="{{$order_id}}" name="order_id">
            <div class="weui-cells__title"><img src="{{asset('wechat/images/arrow.png')}}" width="30px" alt=""><font style="color:#484646; font-weight: bold;">&nbsp;基本信息</font></div>
            <div class="weui-cell white-bgcolor">
                <div class="weui-cell__hd"><label class="weui-label">真实姓名</label></div>
                <div class="weui-cell__bd">
                    <input class="weui-input" id="name" name="name" type="text" value="{{$oauth->name}}" disabled="disabled" placeholder="请输入文本">
                </div>
            </div>
            <div class="weui-cell white-bgcolor"> <div class="weui-cell__hd">
                    <label class="weui-label">身份证号码</label></div>
                <div class="weui-cell__bd"> <input id="cardNo" name="cardNo" class="weui-input" disabled="disabled" value="{{$oauth->cardNo}}" required="" pattern="REG_IDNUM" maxlength="18" placeholder="输入你的身份证号码" emptytips="请输入身份证号码" notmatchtips="请输入正确的身份证号码" type="text">
                </div>
            </div>
            <div class="weui-cell white-bgcolor">
                <div class="weui-cell__hd">
                    <label class="weui-label">手机号</label>
                </div>
                <div class="weui-cell__bd">
                    <input id="phone" name="phone" class="weui-input" type="tel" disabled="disabled" value="{{$oauth->phone}}"  placeholder="输入你现在的手机号">            </div>
            </div>
            <div class="weui-cells__title"><img src="{{asset('wechat/images/arrow.png')}}" width="30px" alt=""><font style="color:#484646; font-weight: bold;">&nbsp;银行卡</font></div>
            <div class="weui-cell white-bgcolor">
                <div class="weui-cell__hd">
                    <label class="weui-label">银行卡号</label>
                </div>
                <div class="weui-cell__bd">
                    <input id="bankcard" name="bankcard" class="weui-input" type="number" pattern="[0-9]*" value="" notmatchtips="请输入银行卡号" placeholder="请输入银行卡号">
                </div>
            </div>
            <div class="weui-cells__title"><img src="{{asset('wechat/images/arrow.png')}}" width="30px" alt=""><font style="color:#484646; font-weight: bold;">&nbsp;企业</font></div>
            <div class="weui-cell white-bgcolor">
                <div class="weui-cell__hd">
                    <label class="weui-label">企业名称</label>
                </div>
                <div class="weui-cell__bd">
                    <input class="weui-input" id="entname" name="entname" type="text" placeholder="企业名称">
                </div>
            </div>
            <div class="weui-cell white-bgcolor">
                <div class="weui-cell__hd">
                    <label class="weui-label">企业信用代码</label>
                </div>
                <div class="weui-cell__bd">
                    <input class="weui-input" id="creditCode" name="creditCode" type="text" placeholder="企业信用代码">
                </div>
            </div>
        <!--
        <div class="weui-cells__title"><img src="{{asset('wechat/images/arrow.png')}}" width="30px" alt=""><font style="color:#484646; font-weight: bold;">&nbsp;车辆</font></div>

        <div class="weui-cell white-bgcolor">
            <div class="weui-cell__hd">
                <label class="weui-label">车牌号</label>
            </div>
            <div class="weui-cell__bd white-bgcolor">
                <input class="weui-input" id="licensePlate" name="licensePlate" type="text" placeholder="车牌号">
            </div>
        </div>
        <div class="weui-cell white-bgcolor">
            <div class="weui-cell__hd">
                <label class="weui-label">车型</label>
            </div>
            <div class="weui-cell__bd">
                <select id="carType" name="carType"  class="weui-select">
                    <option value="00" selected>--请选择--</option>
                    <option value="01">大型汽车 </option>
                    <option value="02">家用小型汽车 </option>
                    <option value="03">使馆汽车  </option>
                    <option value="04">领馆汽车 </option>
                    <option value="05">境外汽车 </option>
                    <option value="06">外籍汽车 </option>
                    <option value="07">普通摩托车</option>
                    <option value="08">轻便摩托车 </option>
                    <option value="09">使馆摩托车 </option>
                    <option value="10">领馆摩托车 </option>
                    <option value="11">境外摩托车 </option>
                    <option value="12">外籍摩托车 </option>
                    <option value="13">低速车 </option>
                    <option value="14">拖拉机 </option>
                    <option value="15">挂车 </option>
                    <option value="16">教练汽车 </option>
                    <option value="17">教练摩托车 </option>
                    <option value="20">临时入境汽车 </option>
                    <option value="21">临时入境摩托车</option>
                    <option value="22">临时行驶车</option>
                    <option value="23">警用汽车</option>
                    <option value="24">警用摩托</option>
                    <option value="51">新能源大型车</option>
                    <option value="52">新能源小型车</option>
                </select>
            </div>
        </div>
        <div class="weui-cell white-bgcolor">
            <div class="weui-cell__hd">
                <label class="weui-label">车架号</label>
            </div>
            <div class="weui-cell__bd">
                <input id="vin" name="vin" class="weui-input" type="text" placeholder="车架号">
            </div>
        </div>
        <div class="weui-cell white-bgcolor">
            <div class="weui-cell__hd">
                <label class="weui-label">发动机号</label>
            </div>
            <div class="weui-cell__bd">
                <input id="engineNo" name="engineNo" class="weui-input" type="text" placeholder="发动机号">
            </div>
        </div>-->
            <div class="weui-cell">
                <input type="submit" value="提交" id="btnsubmit"  class="weui-btn weui-btn_primary" /></div>
        </div></section>
</form>
@include('wechat.layouts.footer')
<script src="{{asset('wechat/js/jquery.form.js')}}"></script>
<script>

    $(function () {
        var regexp = {
            regexp: {
                IDNUM: /(?:^\d{15}$)|(?:^\d{18}$)|^\d{17}[\dXx]$/
            }
        }
        $("#btnsubmit").click(function ()
        {
            weui.form.validate('#form1', function(error){
                if (!error) {
                    var loading = weui.loading('提交中...');
                    $("#form1").ajaxForm({
                        url:'{{route('apply.store')}}',
                        type:"post",
                        datatype:'text',
                        success:function (data) {
                            loading.hide();
                            location.href="/weixin/apply/success/"+$("#order_id").val();
                            //weui.toast('提交成功', 3000);
                        },
                        error:function () {
                            weui.toast('服务出错', 3000);
                        }
                    });

                }},regexp);
        });
    });
</script>
</body>
</html>