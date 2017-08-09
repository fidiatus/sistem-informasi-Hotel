<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pelanggan extends Model
{
    protected $table = 'pelanggan';

    protected $fillable = [
    	'id_pelanggan',
    	'nama',
    	'email',
    	'no_telp',
    	'alamat'
    ];
     public function booking()
    {
    	return $this->hasMany(Booking::class);
    }
    
    public $timestamps = true;
}
