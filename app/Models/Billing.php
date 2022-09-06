<?php

namespace App\Models;

use App\Models\Client;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Billing extends Model
{
    use HasFactory;
    public $table = "transactions";

     protected $fillable = ['package','amount','payment',"until",'client_id'];

     //Relationship to client
    public function client()
    {
        return $this->belongsTo(Client::class, 'client_id');
    }
     

}
