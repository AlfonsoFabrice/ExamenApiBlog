<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\BlogModel;
use App\Models\Publicacion;


class ApiController extends Controller
{
    //
    public function inicio(){

        return view('index');
    }

    public function nytApi(){
        //Api
        $cliente = new \GuzzleHttp\Client();
        $response = $cliente->request('GET', 'https://api.nytimes.com/svc/news/v3/content/nyt/world.json?api-key=0zk1wcGaHBy6ND2mybUTDypxGPSBf60b');
        $datos = json_decode($response->getBody()->getContents(), true);
     

        //obtener elementos
        $elementos = [];
        foreach($datos['results'] as $item){
           $elementos[] = [
                'titulo' => $item['title'],
                'resumen' => $item['abstract'],
                'url' => $item['url']
            ];
        }

       return view('index', ['elementos' => $elementos]);
    }

    public function seedBlog(){
        $elementos = BlogModel::all();
        
        return view('seederView', ['elementos' => $elementos]);
    }

    public function blog(){
        $elementos = Publicacion::all();
        //echo $elementos;
        return view('blog', ['elementos' => $elementos]);
    }
}
