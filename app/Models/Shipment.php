<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasManyThrough;

class Shipment extends Model
{
    use HasFactory;
    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
    ];

    /**
     * belongsTo
     */

    public function nationalities()
    {
        return $this->belongsTo(Nationality::class, 'nationality_id');
    }

    public function supplier()
    {
        return $this->belongsTo(Supplier::class, 'supplier_id');
    }

    public function store()
    {
        return $this->belongsTo(Store::class, 'store_id');
    }

    public function paymentMethod()
    {
        return $this->belongsTo(PaymentMethod::class, 'payment_method_id');
    }

    public function paymentStatus()
    {
        return $this->belongsTo(PaymentStatus::class, 'payment_status_id');
    }

    public function category()
    {
        return $this->belongsTo(Category::class, 'category_id');
    }

    public function currency()
    {
        return $this->belongsTo(Currency::class, 'currency_id');
    }

    /**
     * hasMany
     */
    public function shipmentFiles(): HasMany
    {
        return $this->hasMany(ShipmentFile::class);
    }
    //
    public function costs(): HasMany
    {
        return $this->hasMany(ShipmentFile::class);
    }
    //
    public function shipmentPaymentDetails(): HasMany
    {
        return $this->hasMany(ShipmentPaymentDetail::class);
    }

    /**
     * .
     */
    public function paymentStatusDetails(): HasManyThrough
    {
        return $this->hasManyThrough(PaymentStatusFeild::class, ShipmentPaymentDetail::class);
    }
}
