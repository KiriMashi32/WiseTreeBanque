<?php
session_start();
// var_dump($_SESSION['userid']); // A enlever si nécéssaire
if(isset($_POST['Deco']))
    {
        unset($_SESSION['userid']);
    }

if(!isset($_SESSION['userid']))
    {
        header('Location: index.php');
    }
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Ma banque</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="icon" type="image/jpg" href="logo.jpg" />
    <style>
        h1, h2{
        text-align: center;
    }
    </style>   
</head>

<body>
    <header>
        <div class="nav_bar">
            <form method="POST" action="lescomptes.php">
                <button name="lescomptes">Vos comptes</button>
            </form>
            <form method="POST" action="index.php">
                <button name="Deco">Deconnexion</button>
            </form>
        </div>
        
    </header>
    <?php
    echo "<h1>Bonjour \"Nom\"</h1>";
    echo "<h2>Compte n° " . htmlspecialchars($_SESSION['userid']). "</h2>"; ?>
    <h2><u>Bienvenue sur la Wise Tree Bank</u></h2>
    <h3><u>Votre compte</u></h3>
    <p>
        <ul>
            <li><a href="dépenses.php">Solde : ___ €</a></li>
            <li>Découvert autorisé : ___ €</li>
        </ul>
    </p>
    <h3>RIB</h3>
    <?php
        $ribuser = "FR1312739000706433417217M62";
        echo "<p><u>$ribuser</u></p>";
    ?>
    

</body>
</html>