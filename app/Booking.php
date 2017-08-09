<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    protected $table = 'booking';

    protected $fillable = [
    	'tgl_booking',
    	'pelanggan_id',
    	'kamar_id',
    	'lama'
    ];
    public function pelanggan()
	{
		return $this->belongsTo(Pelanggan::class);
	}
	public function kamar()
	{
		return $this->belongsTo(Kamar::class);
	}
	
    public $timestamps = true;
}
