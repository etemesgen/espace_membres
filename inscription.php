<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="./css/style.css">
    <title>Inscription</title>
</head>
<body>
    <header>
        <h1>Formulaire d'inscription</h1>
    </header>
    <main>
        <form action="">
           <label for="pseudo">Pseudo</label>
           <input type="text" id="pseudo" name="pseudo"><br><br>
           <label for="mot_de_passe">Mot de passe</label>
           <input type="password" id="mot_de_passe" name="mot_de_passe"><br><br>
           <label for="retapez_mp">Retapez votre mot de passe</label>
           <input type="password" id="retapez_mp" name="retapez_mp"><br><br> 
           <label for="adresse_mail">Adresse email</label>
           <input type="email" id="adresse_mail" name="adresse_mail"><br><br><br>
           <input type="submit" id="button" value="S'inscrire">
        </form>
    </main>
    <footer>
        <?php echo "PHP & EDO - 2021";?>
    </footer>
</body>
</html>