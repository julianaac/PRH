<?php
require 'conexao2.php';
if(isset($_SESSION['idUser']) && !empty($_SESSION['idUser'])):


?>

seja bem vindo ao sistema

<div>
    <a href="logout.php">sair</a>
</div>

<?php else: header("Location: login.php"); endif;?>