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
           <label for="pass">Mot de passe</label>
           <input type="password" id="pass" name="pass"><br><br>
           <label for="retapez_mp">Retapez votre mot de passe</label>
           <input type="password" id="retapez_mp" name="retapez_mp"><br><br> 
           <label for="email">Adresse email</label>
           <input type="email" id="email" name="email"><br><br><br>
           <input type="submit" id="button" value="S'inscrire">
        </form>
    </main>

    <?php 
    // Connexion à la base de données
    try{
        $bdd=new PDO('mysql:host=localhost;dbname=espace_membres;charset=utf8', 'root', '');
        }
        catch(Exception $e)
        {
            die('Erreur : '.$e->getMessage());
        }
    // Vérification de la validité des informations
    if(isset($_POST['pseudo']) || isset($_POST['pass'])){
        $email = $_POST["email"];
       
        if(!isset($_POST['pseudo']) || !isset($_POST['pass']) || !isset($_POST['email'])){
            echo '<p>Vos données sont incomplètes !</p>';
        }
        elseif(!filter_var($email, FILTER_VALIDATE_EMAIL)){
            echo 'Email invalide';
        }
        else{
            // Hachage du mot de passe
            $pass_hache = password_hash($_POST['pass'], PASSWORD_DEFAULT);

            // Insertion
            $req = $bdd->prepare('INSERT INTO membre(pseudo, pass, email, date_inscription) VALUES(:pseudo, :pass, :email, CURDATE())');
            $req->execute(array(
            'pseudo' => $pseudo,
            'pass' => $pass_hache,
            'email' => $email));
            echo 'Inscription réussi';
        }
    }
    ?>
    <footer>
        <?php echo "PHP & EDO - 2021";?>
    </footer>
</body>
</html>