<?php

namespace App\Entities;

use Illuminate\Database\Eloquent\Model;
use App\Entities\Pessoa;

class Email extends Model {

    protected $table = 'emails';
    protected $fillable = ['email', 'pessoa_id'];

    public function pessoa() {
        return $this->belongsTo(Pessoa::class);
    }

}
