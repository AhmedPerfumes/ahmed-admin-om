<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ActiveCoupon extends Model
{
    use HasFactory;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'active_coupon';

    /**
     * Indicates if the model should be timestamped.
     *
     * @var bool
     */
    public $timestamps = false;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'order_id',
        'couponRegistrationId',
        'couponCode',
        'promotionName',
        'baseOn',
        'value',
        'registrationDate',
        'validTo',
        'status',
        'active',
        'salesType',
        'company',
        'whsCode',
        'column1',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'registrationDate' => 'date',
        'validTo'          => 'date',
        'active'           => 'boolean',
        'value'            => 'integer',
        'couponRegistrationId' => 'integer',
    ];
}