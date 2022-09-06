<?php

namespace App\Models;

use App\Models\User;
use App\Models\Billing;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Client extends Model
{
    use HasFactory, SoftDeletes;

    public $table = "clients";

    protected $fillable = ['name', 'email', 'phone', 'apartment','houseno','street','avatar','user_id'];


    //Relationship to user
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    // // //Relationship to billing
    // public function bills(){
    //     return $this->hasMany(Billing::class, 'client_id');
    // }
}
