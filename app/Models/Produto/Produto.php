<?php
namespace App\Models\Produto;
use Iluminate\Database\Eloquent\Model;

class Produto extends Model 
{
    protected  $fillable = ['nome','descricao', 'uniMedida'];
    //protected  $guarded = [''];
    
    public $rules = [
        'nome' => 'required|min:2|max:100',
        'descricao' => 'required|min:1|max:150',
        'uniMedida' => 'required',
    ];
    
}

