<?php

namespace App\Http\Middleware;

use Illuminate\Foundation\Http\Middleware\VerifyCsrfToken as Middleware;

class VerifyCsrfToken extends Middleware
{
    /**
     * The URIs that should be excluded from CSRF verification.
     *  'weixin/apply/store'
     * @var array
     */
    protected $except = [
        '/chat/wechat',
        '/chat/notify',
    ];
}
