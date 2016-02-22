<?php



namespace App\Entities;

use Illuminate\Database\Eloquent\Model;
use App\Entities\Pessoa;

class Telefone extends Model{
    protected $table = "telefones";
    protected $fillable = ['descricao', 'codpais', 'ddd', 'prefixo', 'sufixo', 'pessoa_id'];
    
    public function pessoa() {
        return $this->belongsTo(Pessoa::class);
    }
    
    public function getNumeroAttribute() {
        return "{$this->codpais} ({$this->ddd}) {$this->prefixo}-{$this->sufixo}";        
    }
}
