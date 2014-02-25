<!DOCTYPE html>
<html>
<head>
    <title>Site d'enchères - Ajouter Produit </title>
    <?php include("./include/Dependances.html") ?>
</head>
<body>
<iframe src="iframepanel.php?titre=Nouveau Produit" height="100" width="100%" name="panel" frameborder="0" ></iframe>
<head>
    <script type="text/javascript" src="./ckeditor/ckeditor.js"></script>
</head>
<form action="./verificationproduit.php" method="post" onSubmit="return validation(this)" enctype="multipart/form-data">
    <label>Nom ...............................:</label><input type="text" name="nom" maxlength="25"/>
    <label>Prix de Départ ....................:</label><input type="text" name="prix" maxlength="10"/>
    <label>Durée de l'offre...................:</label><input type="text" name="duree" maxlength="10"/>
    <label>Description .......................:</label><textarea class="ckeditor" name="description"  rows="10" cols="25"></textarea>
    <label>Etat ..............................:</label><textarea class="ckeditor" name="etat" rows="10" cols="25"></textarea>
    <input type="hidden" name="MAX_FILE_SIZE" value="1000000" />
    <label>Image .............................:</label><input type="file" name="image" />
    <input type="submit" name="Valider"/><input type="reset" name="Effacer"/>
</form>
</body>
<div id="alerts">
    <noscript>
        <p>
            <strong>CKEditor requires JavaScript to run</strong>. In a browser with no JavaScript support, like yours, you should still see the contents (HTML data) and you should be able to edit it normally, without a rich editor interface.
        </p>
    </noscript>
</div>
</html>
<script type="text/javascript">
function validation(f) {
var ck_number=/^\$?\d+(\.\d+)?$/;
var ck_jour=/^\$?\d+?$/;
if (!ck_number.test(f.prix.value) ){
alert('Le prix est incorrect');
return false;
}
if (!ck_jour.test(f.duree.value) ){
alert('Veuillez entrer un nombre entier de jour pour la durée de l\'offre');
return false;
}
if (f.description.value.length <= 10 ){
alert('La description doit être complete');
return false;
}
if (f.etat.value.length <= 10){
alert('Vous devez indiquer l\'état de l\'objet');
return false;
}
return true;
}
</script>