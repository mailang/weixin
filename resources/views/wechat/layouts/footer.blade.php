<footer class="footer">
    <div class="weui-tabbar">
        <a href="{{route('weixin.index')}}" class="weui-tabbar__item">
                    <span style="display: inline-block;position: relative;">
                        <img src="{{asset('wechat/images/foot-1.svg')}}" alt="" class="weui-tabbar__icon">
                    </span>
            <p class="weui-tabbar__label">首页</p>
        </a>
        <a href="#" class="weui-tabbar__item">
            <img src="{{asset('wechat/images/foot-2.svg')}}" alt="" class="weui-tabbar__icon">
            <p class="weui-tabbar__label">信用报告</p>
        </a>
        <a href="{{route('weixin.my')}}" class="weui-tabbar__item weui-bar__item_on">
            <img src="{{asset('wechat/images/foot-5-1.svg')}}" alt="" class="weui-tabbar__icon">
            <p class="weui-tabbar__label">个人中心</p>
        </a>
    </div></footer>
<script src="{{asset('wechat/js/jquery.min.js')}}"></script>
<script src="{{asset('wechat/js/zepto.min.js')}}"></script>
<script src="//res.wx.qq.com/open/libs/weuijs/1.0.0/weui.min.js"></script>
<script src="//res.wx.qq.com/open/js/jweixin-1.4.0.js"></script>
<script src="http://res2.wx.qq.com/open/js/jweixin-1.4.0.js"></script>
<script type="text/javascript">
    wx.config(<?php echo app('wechat.official_account')->jssdk->buildConfig(array('hideMenuItems'), false) ?>);
    wx.ready(function () {
        wx.hideMenuItems({
            menuList: [ "menuItem:share:qq","menuItem:share:weiboApp", "menuItem:share:facebook","menuItem:share:QZone", "menuItem:copyUrl","menuItem:originPage","menuItem:openWithQQBrowser","menuItem:openWithSafari", "menuItem:share:email"] // 要隐藏的菜单项，只能隐藏“传播类”和“保护类”按钮，所有menu项见附录3
        });
    });
</script>