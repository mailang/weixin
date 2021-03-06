<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $table='order';
    protected $fillable=['wxuser_id','openid','out_trade_no',
        'transaction_id','body','total_fee','cash_fee','state','time_start','time_expire','time_pay','pro_id','pid','name'];
}
