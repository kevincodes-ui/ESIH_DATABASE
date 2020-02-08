<?php
include("eras_nav.php");

if(isset($_POST['lister_par_type']))
{
    $type_personne = htmlspecialchars($_POST['type_personne']);

    if(!empty($type_personne)){
        $employee = array(
            // etudiant agira comme une cle 
            "etudiant" => array(
                "code"=>"01",
                "nom"=>"Germain",
                "prenom"=>"Kevin",
                "sexe"=>"masculin",
                "nationalite"=>"Haitien",
                "tel"=>"48126868",
                "email"=>"kgermain150@gmail.com",
                "type_personne"=>"Etudiant"),
            "professeur" => array(
                "code"=>"05",
                "nom"=>"Charlemagne",
                "prenom"=>"Ralph Alex",
                "sexe"=>"masculin",
                "nationalite"=>"Haitien",
                "tel"=>"48484858",
                "email"=>"ralphalexx43@gmail.com",
                "type_personne"=>"Professeur"),
            "administration" => array(
                "code"=>"05",
                "nom"=>"St-Preux",
                "prenom"=>"Willio",
                "sexe"=>"masculin",
                "nationalite"=>"Haitien",
                "tel"=>"48126867",
                "email"=>"stpreuxwillio04@gmail.com",
                "type_personne"=>"Administration")
        );
        print("
        <div class='container-fluid'>
        <h4>Liste de tout les ".$type_personne."s de l'ESIH</h4><br>
            <table class='table table-hover'>
                <thead class='thead-light'>
                    <tr>
                    <th scope='col'>ID</th>
                    <th scope='col'>Nom</th>
                    <th scope='col'>Prenom</th>
                    <th scope='col'>Sexe</th>
                    <th scope='col'>Nationalite</th>
                    <th scope='col'>Tel</th>
                    <th scope='col'>Email</th>
                    <th scope='col'>Type Personne</th>
                    </tr>
                </thead>
                <tbody>
        ");
        foreach ($employee as $key) {
            print("
                <tr>
                <th scope='row'>".$key['code']."</th> 
                <td>".$key['nom']."</td>
                <td>".$key['prenom']."</td>
                <td>".$key['sexe']."</td>
                <td>".$key['nationalite']."</td>
                <td>".$key['tel']."</td>
                <td>".$key['email']."</td>
                <td>".$key['type_personne']."</td>
                </tr>
                ");
        }
        print("</tbody></table></div>");
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="bootstrap/bootstrap/css/bootstrap.min.css">
    <title>Lister par type</title>
</head>
<body>
    <?php include_once("footer.php");?>
</body>
</html>