<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TypeKamar extends Model
{
    protected $table = 'type_kamar';

    protected $fillable = [
    	'type_kamar',
    	'keterangan'
    ];

	public function kamar()
    {
    	return $this->hasMany(Kamar::class);
    }
}

