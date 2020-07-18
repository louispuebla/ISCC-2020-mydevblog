<html>
<link rel="stylesheet" href="Style/style-securite.css">
<?php
    $login=$_POST['login'];
    $password=$_POST['password'];


        if ($password ==  "1234567890"){
            session_start();
            $_SESSION['id']=$login;
            setcookie('id', $_SESSION['id'], time() +365*24*3600, null, null, false, true);
            header('Location: ajout-article.php?');
            exit();
        }
            

        else{
            echo '<h1>L\'accès est réservé aux admins</h1>';
            echo '<a href="utilisateur.php">Vous n\'êtes pas admin ?</a>';
        }
?>

</html> 

