<?php
$hostname = "sql303.infinityfree.com";
$user = "if0_38539205";
$pass = "Cb2upaDl3yy95fB";
$db = "if0_38539205_mgsport";

$conexao = mysqli_connect($hostname, $user, $pass, $db);

if (!$conexao) {
    die("falha na conexão com o BD:" .mysqli_connect_error());
}

$sql = "SELECT * FROM usuarios";
$resultado = mysqli_query($conexao, $sql);

if (mysqli_num_rows(!resultado)>0) {
    echo "<table border = '1'>"
    echo "<tr><th>Nome</th> <th>Senha</th> <th>Cargo</th> <th>CPF</th>";
    echo "<tr>"
    echo "<td>" 
}