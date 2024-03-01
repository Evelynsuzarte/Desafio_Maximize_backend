<?php
    $connect = mysqli_connect("localhost","root","") or die("Falha ao conectar o servidor"); /*conectar ao servidor */
    $db = mysqli_select_db($connect,"desafio_maximize") or die("Falha ao selecionar o banco de dados"); /* Selecionando o banco de dados */
?>