<?php
$titrepage='Répertoire';
include 'header.php';
?>
    <div>
        <a class="lienAncre" href="eval.php#ancre">Aller au formulaire de création de contact</a>
    </div>
<?php
session_start();
if (empty($_SESSION))
{
    $_SESSION['repertoire']=[];
}
if (!empty($_POST))
{
    $contact = ["Nom" => $_POST['nom'],
        "Prenom" => $_POST['prenom'],
        "Email" => $_POST['email'],
        "Num" => $_POST['num']];
    /*foreach($contact as $key=>$donnees)
    {
        echo $key.' : '.$donnees.' ';
    }*/

    array_push($_SESSION['repertoire'], $contact);
    if ($_POST['nom'] == 'suppr') {
        $_SESSION['repertoire'] = [];
        $contact = [];
    }
}
if(!empty($_SESSION))
{

    foreach($_SESSION['repertoire'] as $value)
    {
        ?><div class="contact"><?php
        foreach ($value as $key=>$info) //Oui je sais, c'est le mal, désolé.
        {
            ?>

                    <p>
                        <?php echo $key." : ".$info ?>
                    </p>

            <?php
        }
        ?></div><?php
    }
}



?>
<form id="ancre" method="POST" action="eval.php">
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
<div id="italic">
(Tapez "suppr" dans le champ "Nom" pour vider le répertoire)
</div>
<?php


include 'footer.php'
?>
