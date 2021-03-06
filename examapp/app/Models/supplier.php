<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Supplier extends Model
{
    use HasFactory;
    public function prodects()
    {
        return $this->belongsToMany(Prodect::class);
    }
    public function orders()
    {
        return $this->belongsToMany(Order::class);
    }
    public function purchases()
    {
        return $this->belongsToMany(Purchase::class);
    }
}
