<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    use HasFactory;
    protected $fillable = ['title','status','category','country_id', 'content'];

    public function country ()
{
return $this->belongsTo('App\Models\Country');
}
}
