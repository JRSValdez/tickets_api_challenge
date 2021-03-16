<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ticket extends Model
{
    use HasFactory;

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function comments(){
        return $this->hasMany(Comment::class);
    }

    public function attachments(){
        return $this->hasMany(Attachment::class);
    }

    public function state(){
        return $this->belongsTo(State::class);
    }

    public function priority(){
        return $this->belongsTo(Priority::class);
    }
}
