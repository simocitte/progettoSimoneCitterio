<?php
//-----------------------------------------Functions to define method behavior---------------------------------//
function get($uri){
    $headers = apache_request_headers();
    $array = explode('?',$uri);
    $uri = $array[0 ];
    switch ($uri) {
        case '/':
        index($headers);
        break;

        case '/listaEsercenti':
        ListaEsercente($headers);
        break;

        case '/aggiungiEsercente':
            AggiungiEsercente($headers);
            break;
        
        default:
        notFound();
        break;
    }
}

function post($uri){
    $headers = apache_request_headers();
    switch ($uri) {
        case '/aggiungiEsercente':
        postAggiungiEsercente();
        break;
        
        default:
        notFound();
        break;
    }
}

function notFound(){
    http_response_code(404);
    echo "404 Classico Not Found";
}

function badRequest(){
    http_response_code(400);
    echo "Method not implemented";
}

//-----------------------------------------Functions to get the work done---------------------------------//

function ListaEsercente($headers){
    if(strpos($headers["Accept"], 'html') !== false){
        require __DIR__ . '/../view/listaEsercenti.php';
    }

}
function index($headers){
    if(strpos($headers["Accept"], 'html') !== false){
        require __DIR__ . '/../view/dashboardApertamente.php';
    }

}
function AggiungiEsercente($headers){
    if(strpos($headers["Accept"], 'html') !== false){
        require __DIR__ . '/../view/aggiungiEsercente.php';
    }

}

function postAggiungiEsercente()
{
        require ('../model/backEnd_json/aggiunta_esercente.php');


}
?>