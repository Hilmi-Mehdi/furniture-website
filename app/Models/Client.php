<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    use HasFactory;

    protected $table = 'clients';
    protected $primaryKey = 'ClientID';

    protected $fillable = ['Name', 'Email', 'Address'];

    public function orders()
    {
        return $this->hasMany(Order::class, 'ClientID');
    }

}
