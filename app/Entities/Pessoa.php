<?php



namespace App\Entities;

use Illuminate\Database\Eloquent\Model;
use App\Entities\Telefone;
use App\Entities\Email;

class Pessoa extends Model{
    protected $table = 'pessoas';
    protected $fillable = ['nome', 'apelido', 'sexo'];
    
    public function telefones() {
        return $this->hasMany(Telefone::class);
    }
        public function emails() {
        return $this->hasMany(Email::class);
    }

}