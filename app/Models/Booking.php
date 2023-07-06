<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    use HasFactory;
    protected $fillable = ['nama','code','pesawat_id','from','to', 'date','time','email'];

    public function pesawat ()
{
return $this->belongsTo('App\Models\Pesawat');
}
}


