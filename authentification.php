<!DOCTYPE html>
<html>
<meta charset="utf-8">
<head>
    <title>Site d'enchères - Page de connexion </title>
    <?php include("./include/Dependances.html") ?>
</head>
<body>
        <div class="col-md-12 text-center">
            <iframe src="iframepanel.php?titre=Se connecter" height="100" width="100%" name="panel" frameborder="0" ></iframe>
    </div>
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-body">
                    <div class="row">&nbsp;</div>
                    <div class="row"></div>
                        <form action="./verificationauth.php" method="post">
                            <div class="form-group">
                                <div class="col-md-2 col-md-offset-2 text-center"><label class="control-label" >Pseudonyme:</label></div>
                                <div class="col-md-6 text-center"><input class="form-control" type="text" id="pseudo" name="pseudo" required="required" placeholder="Veuillez entrer votre pseudonyme ici"/></div>
                                <div class="col-md-2"></div>
                            </div>

                            <div class="form-group">
                                <div class="col-md-2 col-md-offset-2 text-center"><label class="control-label">Mot de passe:</label></div>
                                <div class="col-md-6 text-center"><input class="form-control" type="password" name="password" required="required" placeholder="Veuillez entrer votre mot de passe ici"/></div>
                                <div class="col-md-2"></div>
                            </div>
                            <div class="form-group">
                                <div class="col-md-offset-4 col-md-8 text-center">
                                    <button type="submit" name="Valider" class="btn btn-success  text-center">Se connecter</button>
                                    <button type="reset" name="Effacer" class="btn btn-danger  text-center">Effacer</button>

                                </div>
                             </div>


                        </form>
                    </div>
                </div>
            </div>
        </div>
</body>
</html>