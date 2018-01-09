<?php
$degrees = ['Sans', 'BAC', 'BAC +2', 'BAC +3', 'Supérieur'];
//Déclaration des variables regex;
//accepte des chaines comportant au moins 2 caractères attachées ou nom. 
$regexText = '#^[a-z ÂÊÎÔÛÄËÏÖÜÀÆæÇÉÈŒœÙğ_-]{2,}$#i';
//Accepte tous les numéros de téléphone français, format national ou international. Pas les numéros spéciaux. 
$regexTelephone = '/^0[1-79][0-9]{8}$/'; //téléphone portable France.
$regexEmail = '#^(\w[-._+\w]*\w@\w[-._\w]*\w\.\w{2,3})$#';
$regexDate = '#^(19|20)\d\d[- /.](0[1-9]|1[012])[- /.](0[1-9]|[12][0-9]|3[01])$#'; //date format yyyy/mm/dd
//Accepte les codes postaux comportant 5 chiffres seulement.
$regexZipCode = '#^[0-9]{5}$#';
$regexUrl = '/^(https:\/\/www.codecademy.com\/)[a-z]{2,3}[\/]{1}[\w]{4,20}/i'; //url
$regexNumber = '#^[0-9]+$#';
//Accepte 7 chiffres et une lettre majuscule à la fin.
$regexPoleEmploi = '#^[0-9]{7}+[A-Z]{1}$#';
?>
<!DOCTYPE html>
<html lang="fr">
    <head>
        <!--Encondage des caractères-->
        <meta charset="utf-8">
        <!--Concerne uniquement Internet Explorer. Elle permet de s'assurer qu'il utilise la dernière version du moteur de rendu-->
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <!--On demande que l'affichage occupe tout l'espace disponible sans zoom-->
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>TP 1 partie 10</title>
    </head>
    <body>
        <h1>Formulaire d'inscription</h1>
        <?php
        if (count($_POST) > 0) {
            if (!empty($_POST['name']) && !empty($_POST['surname']) && !empty($_POST['birthDate']) && !empty($_POST['birthPlace']) && !empty($_POST['nationality']) && !empty($_POST['address']) && !empty($_POST['telephone']) && !empty($_POST['email']) && isset($_POST['degree']) && !empty($_POST['poleEmploi']) && !empty($_POST['badge']) && !empty($_POST['codecademyLink']) && !empty($_POST['superhero']) && !empty($_POST['hack']) && !empty($_POST['experiences'])) {

                if (preg_match($regexText, $_POST['name']) && preg_match($regexText, $_POST['surname']) && preg_match($regexText, $_POST['birthPlace']) && preg_match($regexText, $_POST['nationality']) && preg_match($regexText, $_POST['address']) && preg_match($regexTelephone, $_POST['telephone']) && preg_match($regexEmail, $_POST['email']) && preg_match($regexNumber, $_POST['degree']) && preg_match($regexPoleEmploi, $_POST['poleEmploi']) && preg_match($regexNumber, $_POST['badge']) && preg_match($regexUrl, $_POST['codecademyLink']) && preg_match($regexText, $_POST['superhero']) && preg_match($regexText, $_POST['hack']) && preg_match($regexText, $_POST['experiences']) && preg_match($regexDate, $_POST['birthDate'])) {
                    ?>
                    <p>Nom : <?php echo strip_tags($_POST['name']); ?></p>
                    <p>Prénom : <?php echo strip_tags($_POST['surname']); ?></p>
                    <p>Date de naissance : <?php echo strip_tags($_POST['birthDate']); ?></p>
                    <p>Pays de naissance : <?php echo strip_tags($_POST['birthPlace']); ?></p>
                    <p>Nationalité : <?php echo strip_tags($_POST['nationality']); ?></p>    
                    <p>Adresse : <?php echo strip_tags($_POST['address']); ?></p>    
                    <p>E-mail : <?php echo strip_tags($_POST['email']); ?></p>
                    <p>Numéro de téléphone : <?php echo strip_tags($_POST['telephone']); ?></p>    
                    <p>Votre diplome : <?php echo $degrees[$_POST['degree']]; ?></p>
                    <p>Identifiant pôle emploi : <?php echo strip_tags($_POST['poleEmploi']); ?></p>    
                    <p>Nombre de badges : <?php echo strip_tags($_POST['badge']); ?></p>    
                    <p>Lien codecademy : <?php echo strip_tags($_POST['codecademyLink']); ?></p>    
                    <p>Votre superhero : <?php echo strip_tags($_POST['superhero']); ?></p>    
                    <p>Votre hack : <?php echo strip_tags($_POST['hack']); ?></p>
                    <p>Votre expérience : <?php echo strip_tags($_POST['experiences']); ?></p>
                        
                        <?php
                }
            }
        } else {
            ?>
            <form action="#" method="POST">
                <label for="name">Nom : </label> <input type="text" name="name" placeholder="Nom" />
                <label for="surname">Prénom : </label> <input type="text" name="surname" placeholder="Prénom" />
                <label for="birthDate">Date de naissance : </label> <input type="date" name="birthDate" placeholder="Date de naissance" />
                <label for="birthPlace">Pays de naissance : </label> <input type="text" name="birthPlace" placeholder="Pays de naissance" />
                <label for="nationality">Nationalité : </label> <input type="text" name="nationality" placeholder="Nationalité" />
                <label for="address">Adresse : </label> <input type="text" name="address" placeholder="Adresse" />
                <label for="email">Email : </label> <input type="email" name="email" placeholder="Email" />
                <label for="telephone">Téléphone : </label> <input type="tel" name="telephone" placeholder="Téléphone" />
                <label for="degree">Diplôme : </label> 
                <select name="degree">
                    <option value="0">Sans</option>
                    <option value="1">Bac</option>
                    <option value="2">Bac+2</option>
                    <option value="3">Bac+3</option>
                    <option value="4">Supérieur</option>
                </select>
                <label for="poleEmploi">N° Pôle Emploi : </label> <input type="text" name="poleEmploi" placeholder="N° Pôle Emploi" /> 
                <label for="badge">Nombre de badges : </label> <input type="number" name="badge" placeholder="Nombre de badges" />
                <label for="codecademyLink">Lien codecademy : </label> <input type="url" name="codecademyLink" placeholder="Lien codecademy" />
                <label for="superhero">Si vous étiez un super héros/une super héroïne, qui seriez-vous et pourquoi ? </label> <textarea name="superhero" placeholder="Ex : Superman, ..."></textarea>
                <label for="hack">Racontez-nous un de vos "hacks" (pas forcément technique ou informatique) : </label> <textarea name="hack" placeholder="Ex : J'ai modifié..."></textarea>
                <label for="experiences">Avez vous déjà eu une expérience avec la programmation et/ou l'informatique avant de remplir ce formulaire ? </label> <textarea name="experiences" placeholder="Ex : J'ai déjà..."></textarea>
                <input type="submit" value="Envoyer" />
            </form>
            <?php
        }
        ?>
    </body>
</html>