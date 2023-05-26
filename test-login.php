<?php
    session_start();

    if(isset($_POST['submit']) && !empty($_POST['email']) && !empty(md5($_POST['senha'])))
    {

        include_once('config.php');
        $email = $_POST['email'];
        $senha = md5($_POST['senha']);

        $sql = "SELECT * FROM usuarios WHERE email = '$email' and senha = '$senha'";

        $result =$conn->query($sql);

        if(mysqli_num_rows($result) < 1)
        {
            unset($_SESSION['email']);
            unset($_SESSION['senha']);
            header('Location: index.php?page=login');
        }
        else
        {
            $_SESSION['email'] = $email;
            $_SESSION['senha'] = $senha;
            header('Location: home.php');
        }
    }
    else
    {

        header('Location: index.php?page=login');
        
    }
?>