<?php 
if (isset($_POST["nome"]) && isset($_POST["idade"]) && isset($_POST["genero"])) {
    $nome = $_POST["nome"];
    $idade = $_POST["idade"];
    $genero = $_POST["genero"];
    
}else{
    unset($nome);
    unset($idade);
    unset($genero);
}

if(isset($nome) && isset($idade) && isset($genero)){
    echo "<p>Olá $nome você tem $idade anos</p>";
    echo "<p><strong>Gênero:</strong> $genero.</p>";
   }
   ?>
