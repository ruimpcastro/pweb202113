<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Nanigans\SingleTableInheritance\SingleTableInheritanceTrait;

class Utilizador extends Model
{
    use SingleTableInheritanceTrait;

    protected $table = "utilizadores";
    protected static $singleTableTypeField = 'tipo';
    protected static $persisted = ['nome','email','telemovel'];
    protected static $singleTableSubclasses = [
        Orientador::class,
        Estagiario::class
    ];
}
