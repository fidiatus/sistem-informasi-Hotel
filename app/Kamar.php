<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kamar extends Model
{
    protected $table = 'kamar';

    protected $fillable = [
    	'no_kamar',
    	'nama_kamar',
    	'type_id',
    	'harga_kamar'
    ];
     public function booking()
    {
    	return $this->hasMany(Booking::class);
    }
    
    public $timestamps = true;
}
