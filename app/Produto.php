<?php

namespace estoque;

use Illuminate\Database\Eloquent\Model;

class Produto extends Model
{
	protected $table = 'produtos';//nesse casso é opcional
    public $timestamps = false;//obrigatorio


    //esses campos poderao ser gravados em massa no banco
    protected $fillable = array('nome','descricao','quantidade','valor','tamanho','categoria_id');

    //esse metodo diz que a classe produto pertence a uma categoria (Relacionamento)
    public function categoria(){
    	return $this->belongsTo('estoque\Categoria');
    }
}
