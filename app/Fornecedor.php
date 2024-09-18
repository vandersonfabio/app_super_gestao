<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Fornecedor extends Model
{
    //mudança necessária para que o laravel não procure pela tabela 'fornecedors' (sem o 'E')
    protected $table = 'fornecedores';
}
