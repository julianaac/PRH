<?php 

class Usuario{
    public function login($email, $senha){
        global $pdo;
        $sql = "SELECT * FROM usuario WHERE emailUsuario = :email AND senhaUsuario = :senha";
        $sql = $pdo->prepare($sql);
        $sql->bindValue("email", $email);
        $sql->bindValue("senha", md5($senha));
        $sql->execute();
        if($sql->rowCount() > 0){
            $dado = $sql->fetch();
            echo $dado['idUsuario'];
            $_SESSION['idUser'] = $dado['idUsuario'];
            return true;
        }else{
            return false;
        }
    }


}





?>