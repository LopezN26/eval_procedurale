<?php
$titrepage='Répertoire';
include 'header.php';


if (!empty($_POST))
{
    $contact = [ "Nom" => $_POST['nom'],
                "Prenom" => $_POST['prenom'],
                "Email"  =>$_POST['email'],
                "Num"  =>$_POST['num']];
    foreach($contact as $key=>$donnees)
    {
        echo $key.' : '.$donnees.' ';
    }
}

?>
<form method="POST" action="eval.php">
    <div>
        <label for="nom">Nom</label>
        <input type="text" id = "nom" name="nom"/>
    </div>
    <div>
        <label for="Prenom">prenom</label>
        <input type="text" id = "prenom" name="prenom"/>
    </div>
    <div>
        <label for="email">Email</label>
        <input type="text" id = "email" name="email"/>
    </div>
    <div>
        <label for="num">Numéro de téléphone</label>
        <input type="text" id = "num" name="num"/>
    </div>
    <div>
        <input type="submit" value="Créer contact"/>
    </div>
</form>
<?php


include 'footer.php'
?>
