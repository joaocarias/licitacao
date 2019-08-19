<?php

namespace App\Model\Licitacao;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Licitacao extends Model
{
    use SoftDeletes;
    protected $dates = ['deleted_at'];
}
