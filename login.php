<!DOCTYPE html>
<html lang="fr">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Connexion</title>
        <link rel="stylesheet" type="text/css" href="css/style.css">
    </head>

    <body>
    <div>
        <h1>
            WiseTreeBank
        </h1>
        <h2 id="connexion_title">
            Connectez-vous:
        </h2>
        <form action="./accounts.php">
            <label for="accountnumber">Numéro de compte*:</label><br>
            <input type="text" id="accountnumber" name="accountnumber" placeholder="04123456789" pattern="[0-9]{11}" required><br>
            <small>Format: 04123456789</small><br>

            <label for="password">Code Personnel*:</label><br>
            <input type="password" id="pwd" name="password" placeholder="123456" pattern="[0-9]{6}" required><br><br>
            
            <input type="submit" value="Login" id="command_button">
        </form>
        <p id="obligatory">
            * : Champ obligatoire
        </p>
    </div>
    </body>
</html>