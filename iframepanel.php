<head>
    <base target="_parent" />
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/Projet.css">
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery-2.0.3.min.js"></script>

</head>
</head>
<body>
    <div class="navbar">
        <div class="navbar-inner">

<?php
session_start();
$Titre = $_GET['titre'];
$Session = $_SESSION['pseudo'];

echo "<a class='brand' href='#'>$Titre</a>";
echo"<ul class='nav'>";
if (isset($_SESSION['userid'])){
        echo "<a class='brand' href='#'>$Session</a>";
        echo "<li><h2>".$_SESSION['argent']."$</h2></li>";
        echo "<li><a href=ajouterauportemonaie.php><button class='btn btn-warning text-center'>Aprovisionner</button></a></li>";
        echo "<li><a href=deconnexion.php><button class='btn btn-danger text-center'>Se déconnecter</button></a></li>";
} else {
    echo "<li><a href=authentification.html><button class='btn btn-success '>Se connecter</button></a></li>";
    echo "<li><a href=inscription.html><button class='btn btn-info text-center'>Inscription</button></a></li>";
}
?>
    </div>
        </div>
</body>




