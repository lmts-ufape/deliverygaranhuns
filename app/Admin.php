<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Admin extends Model
{

    protected $table = "admins";

    protected $fillable = [
        'user_id', 'cidade_id',
    ];

    public function cidade() {
        return $this->belongsTo("\App\Cidade");
    }

    public function user() {
        return $this->belongsTo("\App\User");
    }
}
