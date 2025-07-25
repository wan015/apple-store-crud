<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
    /**
     * fillable
     *
     * @var array
     */
    protected $fillable = [
        'invoice_id', 'invoice', 'product_id', 'product_name', 'image', 'qty', 'price'
    ];

     /**
     * invoice
     *
     * @return void
     */
    public function invoice()
    {
        return $this->belongsTo(Invoice::class);
    }
}
