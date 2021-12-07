<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function post(){

          
              $produto = $request ->input('produto');
               $preco = $request ->input('preco');
          

        return view ('Produtos');
    }

   public function get(){
      $produto="cama";
        $preco="R$700,00";
        $id="2";

        return view('Produtos');
   }

   
};