<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\User;

// importar libreria Guzzle
// En Laravel V7.* Guzzle ya viene incorporado y proporciona un Cliente Http más sencillo de usar
use Http;

class UsersBetController extends Controller
{
    public function showUser($ani)
    {
        $url = 'http://localhost/sports.vrainz/public/api/v1/info/'.$ani;
        
        //peticion HTTP tipo GET a la url indicada y devuelve un json y se guarda en variable
        $response = Http::get($url);
        
        //se guarda en variable el código de respuesta del servidor (ej: 200 , 500 , etc..)
        $status = $response->status();
        
        if($status >= 200 && $status <= 299){
            //si devuelve OK se consulta por la categoria
            //categoria -> Beta=2
            $userData = $response->json();
            if($userData['data']['category_id'] == 2){
                return view('user')->with(['user' => $userData , 'status' => $status]);
            }else{
                //Es Ok pero no es la categoria
                abort(403, "Usuario no pertenece a categoría Beta");
            }

        }elseif($status >= 404 && $status <= 599){
            
            //Si la request HTTP falla entonces se consulta la DB
            $user = DB::table('users')->where('ani' , $ani)->first();
            if($user != "null"){
                return view('error')->with(['status' => $status , 'msg' => 'El usuario no pertenece a la categoría Beta']);
            }else{
                return view('error')->with(['status' => $status , 'msg' => 'Datos solicitados no existen en los registros.']);
            }
        }
    }
    
}
