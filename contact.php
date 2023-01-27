<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>

<?php
$nom = $_GET['nom'];
$prenom = $_GET['prenom'];
$email = $_GET['email'];
$telephone = $_GET['telephone'];
$adresse = $_GET['adresse'];

$questionnaire = [$nom, $prenom, $email, $telephone, $adresse];

foreach($questionnaire as $key=>$val);

if(!empty($_GET['nom'])&& !empty($_GET['prenom'])&& !empty($_GET['email'])&& !empty($_GET['telephone'])&& !empty($_GET['adresse'])){
    echo "<table>
    <thead>
        <tr>
            <th>Nom<br></th>
            <th>Prénom<br></th>
            <th>E-mail<br></th>
            <th>Téléphone<br></th>
            <th>Adresse<br></th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>$nom</td>
            <td>$prenom</td>
            <td>$email</td>
            <td>$telephone</td>
            <td>$adresse</td>
        </tr>
    </tbody>
</table>";
} else {
    echo "Vous devez remplir tous les champs pour valider le questionnaire";
}
?>