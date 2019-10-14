<?php

function getURL(){
    return "//".@getEnv(URL);
}

function conecta(){
    try{
        return new PDO( "mysql:host=".@getenv(BDHOST).";dbname=".@getenv(BDNAME),@getenv(BDUSER),@getenv(BDPASS));
    }catch(PDOException $e ){
        echo 'Erro ao conectar com o MySQL: '.$e->getMessage();
    }
}
?>
