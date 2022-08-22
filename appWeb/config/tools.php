<?php

if (!isset($_SESSION)){
    session_start();
}

function checkUserCanAccess(){
    if (!isset($_SESSION['ID'])) {
        header("Location: index.php");
    }
}

?>