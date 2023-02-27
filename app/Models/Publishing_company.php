<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class Publishing_company extends Model
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'Publishing_Company_ID',
        'Publishing_Company_Name',
    ];
    public function products()
    {
        return $this->hasMany(Product::class,'Publishing_Company_Id','Publishing_Company_ID');
    }
}
