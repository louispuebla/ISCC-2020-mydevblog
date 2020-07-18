<!doctype html>
<html>
    <link rel="stylesheet" href="Style/style-connexion-admin.css">
    <title>Connexion admin</title>
  <center>
  <a href="page-accueil.php">Accueil</a>
        &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp;
        <a href="page-article.php">Articles</a>
        &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp;
        <a href="page-contact.php">Contact</a>

    <h1><a href="http://localhost:8888/ISCC-2020/ISCC-2020-mydevblog/">Connexion admin</a></h1>
    <meta charset="utf-8">
<body>
<form method="POST" action="securite.php">
        <label for="login">Login</label>
    <div id="login">
        <input type="text" name="login" id="login">
    </div>
    
        <label for="password">Password</label>
    <div id="password">
        <input type="password" name="password" id="password">  
    </div>
    <BR>
    <input type="submit" value="Envoyer">
  </center>
    </form>
</body>


</html>