<?php

    if(isset($_GET['p'])){
        $page = $_GET['p'];
    } else {
        $page = "index";
    }

$home =  "";
$empresa = ""; 
$galeria = ""; 
$contato = "";


switch ($page){
        
    case "index":
        $home = "active";
    break;
        
    case "index2":
        $home = "active";
    break;
        
    case "empresa":
        $empresa = "active";
    break;
        
    case "catalogo":
        $catalogo = "active";
    break;
        
    case "piano_cauda":
        $catalogo = "active";
    break;
    case "cauda_fritz_dobbert_detalhes":
        $catalogo = "active";
    break; 
    case "cauda_kawai_detalhes":
        $catalogo = "active";
    break;
    case "cauda_ritmuller_detalhes":
        $catalogo = "active";
    break;

    case "piano_vertical":
        $catalogo = "active";
    break;
    case "vertical_fritz_dobbert_detalhes":
        $catalogo = "active";
    break;
    case "vertical_kawai_detalhes":
        $catalogo = "active";
    break;
    case "vertical_ritmuller_detalhes":
        $catalogo = "active";
    break;

    case "piano_digital":
        $catalogo = "active";
    break;
    case "digital_kawai_detalhes":
        $catalogo = "active";
    break;
    case "digital_kawai_portatil_detalhes":
        $catalogo = "active";
    break;
        
    case "galeria":
        $galeria = "active";
    break;
        
    case "contato":
        $contato = "active";
    break;
        
    default:
        $page = "index";
        $home = "active";
    break;
}


?>