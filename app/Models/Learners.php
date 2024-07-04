<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Learners extends Model
{
    use HasFactory;
    protected $table = 'students';

    public function streams(){
        return $this->belongsTo(Streams::class, 'stream_id');
    }

    public function classes(){
        return $this->belongsTo(Classes::class, 'classes_id');
    }

    public function branches() {
        return $this->belongsTo(Branch::class);
    }

   

}