<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
class Product extends Model
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [     
        'Name',
        'Author',
        'Price',
        'Quantity',
        'Description',
        'Category_Id',
        'Publishing_Company_Id',    
        'Date',
        'Avatar',
        'SKU',
    ];
    public function cat()
    {
        return $this->hasOne(Category::class,'Category_id','Category_Id');
    }
    public function nxb()
    {
        return $this->hasOne(Publishing_company::class,'Publishing_Company_ID','Publishing_Company_Id');
    }
}
