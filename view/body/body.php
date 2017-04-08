<?php
switch ($page){
        
    case "index":
        include_once($page.".html");
    break;
        
    case "index2":
        include_once($page.".html");
    break;
        
    case "empresa":
        include_once($page.".html");
    break;
        
    case "contato":
        include_once($page.".html");
    break;
        
    case "cauda_fritz_dobbert_detalhes":
        include_once($page.".html");
    break;
    
    case "cauda_kawai_detalhes":
        include_once($page.".html");
    break;
    
    case "cauda_ritmuller_detalhes":
        include_once($page.".html");
    break;
        
    case "vertical_fritz_dobbert_detalhes":
        include_once($page.".html");
    break;
    
    case "vertical_kawai_detalhes":
        include_once($page.".html");
    break;
    
    case "vertical_ritmuller_detalhes":
        include_once($page.".html");
    break;
        
    case "digital_kawai_detalhes":
        include_once($page.".html");
    break;
    
    case "digital_kawai_portatil_detalhes":
        include_once($page.".html");
    break;
    
    default:
        include_once($page.".php");
    break;
        
}
?>