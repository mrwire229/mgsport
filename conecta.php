<?php

$hostname = "sql303.infinityfree.com";
$user = "if0_38539205";
$pass = "Cb2upaDl3yy95fB";
$db = "if0_38539205_mgsport";

$conexao = mysqli_connect($hostname, $user , $pass, $db);

if (!$conexao) {
    die("falha de conexão: " .mysqli_connect_error());
}

$nomeusr = mysqli_real_escape_string($conexao, $_POST['nomeusr']);
$senhausr = mysqli_real_escape_string($conexao, $_POST['senhausr']);

$sql = "SELECT codusr, nomeusr, senhausr FROM usuarios WHERE nomeusr = '$nomeusr' AND senhausr = '$senhausr'";
$resultado = mysqli_query($conexao, $sql);

if (mysqli_num_rows($resultado)>0) {
    echo "Login realizado com sucesso!";

    header("Location: controle.html");
    session_start();
    $_SESSION['nomeusr'] = $nomeusr;

}
else {
    echo "<p> Acesso Negado! Senha ou Usuario Incorretos!</p>";
}

mysqli_close($conexao);
?>