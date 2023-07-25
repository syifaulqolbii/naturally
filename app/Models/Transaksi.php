<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaksi extends Model
{

    protected $fillable = ['user_id', 'event_id'];

    use HasFactory;

    public function user(){
        return $this->belongsTo(User::class, 'user_id');
    }
    public function event(){
        return $this->belongsTo(Event::class, 'event_id');
    }
}
