<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

//Site_Contato
//site_contato
//site_contatos

class SiteContato extends Model
{
    protected $fillable = ['nome', 'telefone', 'email', 'mensagem', 'motivo_contatos_id'];
}
