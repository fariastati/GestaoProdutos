<?php
namespace App\Http\Controllers;

use Iluminate\Html\Request;
use App\Http\Controllers\Controller;

class ProdutoControler extends Controller 
{
    public function index(){
        return view('gerencia');
    }
    
    public function criar(Request $request){
        
    }
    public function adicionar(){
        
    }
    public function exibir($id){
        return "produto a editar: {$id}";
    }
    public function editar(Request $request, $id){
        return "produto a editar: {$id}";
    }
    public function deletar($id){
         return "produto a deletar: {$id}";
    }
}


