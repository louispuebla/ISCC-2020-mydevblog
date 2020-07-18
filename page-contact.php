<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Contactez-nous</title>
        <?php 
echo'<link href="style/style-contact.css" rel="stylesheet" type = "text/css">'; ?>
    </head> 
    <center>
        <body>
    <a href="page-accueil.php">Accueil</a>
        &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp;
        <a href="page-article.php">Articles</a>
        &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp;
        <a href="connexion-admin.php">Admin</a>

    
<div class="contact">
        <h1><a href="http://localhost:8888/ISCC-2020/ISCC-2020-mydevblog/">Contact</a></h1>

        <form method="POST" action="contact-form.php">
            <p>
                <label>Nom</label>:<input class="hauteur" type="text" name="nom" id="nom" autofocus required/>
            </p>
            <p>
                <label>Prénom</label>:<input class="hauteur" type="text" name="prénom" id="prénom" required>
            </p>
            <p>
                <label>E-mail</label>:<input class="hauteur" type="text" name="e-mail" id="e-mail" required>
            </p>
            <p>
                <label>Message: <br/> </label> <input class="large" type="text" name="message" id="message" required>
            </p>
            <div class="bouton">
                <p>
                    <button type="submit" value="Envoyer">Envoyer</button>
                </p>
            </div>
        </form>
    </div>
</center>

    </body>
</html>