<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class kategoriPengumuman extends Model
{
    protected $table='kategori_galeri';
    protected $fillable=[
        'nama','users_id'
    ];
}
