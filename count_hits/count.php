<?php 
    
    session_start();

    if(empty($_SESSION["counter"])) {
        
        $_SESSION["counter"] = 1;
    
    } else {

        file_put_contents('count_document.txt', $_SESSION["counter"]);
        
        $_SESSION["counter"]++;
    }

    

    echo "Страница была загружена " . $_SESSION["counter"] . " раз. "; 
    
    echo "Текущее время " . date('H-y');

?>