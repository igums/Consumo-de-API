<?php
                //PAGINA 01
       $url = "https://rickandmortyapi.com/api/character";
       $ch = curl_init($url);
       curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
       curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
       curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "GET");
       $resultado = json_decode(curl_exec($ch));

    
    
    
    
    
    
