<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = [
        'receipt_number',
        'quantity_count',
        'order_total_price',
        'first_name',
        'last_name',
        'company_name',
        'country_name',
        'street_address',
        'apartment_suite_unit',
        'town_city',
        'state_province',
        'zip_postal_code',
        'phone',
        'email',
        'additional_information',
        'product_count'
    ];
}
