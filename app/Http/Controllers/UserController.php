<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

class UserController extends Controller
{
     public function get(){
        $usuario="Joao";
        $id="1";

      $dados=[
         $usuario="Joao",
            $id="1"
         ];

         
        return view('User', $dados);
     }
     
    

}