<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8" />
        <title>TP 2</title>
    </head>
    <body>
        <?php
        $nameRegex = '/^[A-Z]{1}[a-z]+$/';
        $ageRegex = '/[0-9]{1,}/';
        // si on envoie le formulaire
        if (!empty($_POST['name']) && !empty($_POST['firstName']) && !empty($_POST['civility']) && preg_match($nameRegex, $_POST['name']) && preg_match($nameRegex, $_POST['firstName']) && preg_match($nameRegex, $_POST['society']) && preg_match($ageRegex, $_POST['age']))
        {// si les input ne sont pas vides et existent
            ?>
            <p><?php
                echo 'Bonjour ' . strip_tags($_POST['civility']) . ' ' . strip_tags($_POST['firstName']) . ' ' . strip_tags($_POST['name']) . '. Vous avez ' . $_POST['age'] . ' ans et vous travaillez chez ' . $_POST['society'] . '.'; //on affiche les valeurs
                ?>
            </p><?php
        }
        else
        {//sinon on affiche le formulaire
            ?>
            <form method="post" action="index.php" role="form">
                <fieldset>
                    <legend>Votre identité</legend>
                        <label for="civility">Civilité </label>
                        <select class="form-control" id="select" name="civility">
                            <option selected disabled>Choisissez votre civilité</option>
                            <option value="Monsieur">Monsieur</option>
                            <option value="Madame">Madame</option>
                        </select>
                    <div class="form-group">
                        <label for="name">Nom </label>
                        <div class="input-group">
                            <input type="text" name="name" placeholder="Nom" required/>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="firstName">Prénom </label>
                        <div class="input-group">
                            <input type="text" name="firstName" placeholder="Prénom" required/>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="age">Quel âge avez-vous ? </label>
                        <div class="input-group">
                            <input type="text" name="age" placeholder="Votre âge ..." required/>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="society">Avez vous déjà eu une expérience avec la programmation et/ou l'informatique avant de remplir ce formulaire ? </label>
                        <div class="input-group">
                            <input type="text" name="society" placeholder="Votre société ..." required/>
                        </div>
                    </div>
                    <input type="submit" value="Envoie"/>
                </fieldset>
            <?php } ?>
    </body>
</html>