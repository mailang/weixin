<?php

namespace App\Http\Controllers\chat;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use EasyWeChat\Factory;
use EasyWeChat\Work\Application;
use Illuminate\Support\Facades\Log;
use  App\Src\chatevent;
use App\Models\Wxuser;

class WechatController extends Controller
{
    /**
     *微信接入使用，不向其他人提供使用
     *
     * @return string
     */


    public function serve()
    {
        Log::info('request arrived.'); # 注意：Log 为 Laravel 组件，所以它记的日志去 Laravel 日志看，而不是 EasyWeChat 日志
        $app = app('wechat.official_account');
        if (strtolower($_SERVER['REQUEST_METHOD'])=='post') {
            $app->server->push(function ($message) use ($app) {
                Log::info(var_export($message));
                switch ($message['MsgType']) {
                    case 'event':
                        $result = chatevent::handle_event($message);
                        return $result;
                        break;
                    case 'text':
                        return '收到文字消息';
                        break;
                    case 'image':
                        return '收到图片消息';
                        break;
                    case 'voice':
                        return '收到语音消息';
                        break;
                    case 'video':
                        return '收到视频消息';
                        break;
                    case 'location':
                        return '收到坐标消息';
                        break;
                    case 'link':
                        return '收到链接消息';
                        break;
                    case 'file':
                        return '收到文件消息';
                    default:
                        return '收到其它消息';
                        break;
                }
            });
        }
        return $app->server->serve();

    }

    function  chat_callback()
    {
        $app = app('wechat.official_account');
        $oauth = $app->oauth;
        // 获取 OAuth 授权结果用户信息
        $user = $oauth->user();
        Session_start();
        $_SESSION['wechat_user'] = $user->toArray();
        /*保存用户信息*/
        $user=Wxuser::where('openid',$_SESSION['wechat_user']['id'])->first();
        $wx= $_SESSION['wechat_user']['original'];
        if ($user)
        {
            $user["nickname"]=$wx['nickname'];
            $user["sex"]=$wx['sex'];
            $user["province"]=$wx['province'];
            $user["city"]=$wx['city'];
            $user["country"]=$wx['country'];
            $data["headimgurl"]=$wx['headimgurl'];
            //$user["referee"]=empty($_SESSION['referee'])?'':$_SESSION['referee'];
            $user->save();
        }
        else
        {
            $data["openid"]=$wx['openid'];
            $data["nickname"]=$wx['nickname'];
            $data["sex"]=$wx['sex'];
            $data["province"]=$wx['province'];
            $data["city"]=$wx['city'];
            $data["country"]=$wx['country'];
            $data["headimgurl"]=$wx['headimgurl'];
            $refreecode = isset($_GET["refereecode"])?$_GET["refereecode"]:"";
            $refereeuser = where('code',$refreecode)->first();
            $data["referee"] = $refereeuser?$refereeuser->id:0;
            $base=new base();
            $data["code"]=$base->code();
            Wxuser::create($data);
        }
        $targetUrl = empty($_SESSION['target_url']) ? '/home' : $_SESSION['target_url'];
        header('location:'. $targetUrl);
    }

}