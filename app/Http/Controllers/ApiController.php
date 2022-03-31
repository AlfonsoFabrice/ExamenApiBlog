<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ApiController extends Controller
{
    //
    public function inicio(){

        return view('inicio');
    }

    public function arts(){
        //Api
        $cliente = new \GuzzleHttp\Client();
        $response = $cliente->request('GET', 'https://api.nytimes.com/svc/topstories/v2/arts.json?api-key=0zk1wcGaHBy6ND2mybUTDypxGPSBf60b');
        $datos = json_decode($response->getBody()->getContents(), true);
     

        //obtener elementos
        $elementos = [];
        foreach($datos['results'] as $item){
           $elementos[] = [
                'titulo' => $item['title'],
                'resumen' => $item['abstract'],
                'url' => $item['url'],
            ];
        }

       return view('vistas.arte', ['elementos' => $elementos]);
    }

    public function science(){
        //Api
        $cliente = new \GuzzleHttp\Client();
        $response = $cliente->request('GET', 'https://api.nytimes.com/svc/topstories/v2/science.json?api-key=0zk1wcGaHBy6ND2mybUTDypxGPSBf60b');
        $datos = json_decode($response->getBody()->getContents(), true);
     

        //obtener elementos
        $elementos = [];
        foreach($datos['results'] as $item){
           $elementos[] = [
                'titulo' => $item['title'],
                'resumen' => $item['abstract'],
                'url' => $item['url'],
            ];
        }
        

       return view('vistas.science', ['elementos' => $elementos]);
    }

    public function world(){
        //Api
        $cliente = new \GuzzleHttp\Client();
        $response = $cliente->request('GET', 'https://api.nytimes.com/svc/topstories/v2/world.json?api-key=0zk1wcGaHBy6ND2mybUTDypxGPSBf60b');
        $datos = json_decode($response->getBody()->getContents(), true);
     

        //obtener elementos
        $elementos = [];
        foreach($datos['results'] as $item){
           $elementos[] = [
                'titulo' => $item['title'],
                'resumen' => $item['abstract'],
                'url' => $item['url'],
            ];
        }
        

       return view('vistas.world', ['elementos' => $elementos]);
    }
}
