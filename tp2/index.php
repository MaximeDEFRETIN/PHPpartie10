<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/css/materialize.min.css">
        <link rel="stylesheet" href="style.css">
        <title>TP 2</title>
    </head>
    <body>
        <div class="row">
            <h1 class="col offset-s3 s6 center-align">TP 2</h1>
        </div>
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
            <div class="row">
                <form method="post" action="index.php" role="form" class="col offset-s3 s6">
                    <fieldset>
                        <legend>Votre identité</legend>
                        <label for="civility">Civilité </label>
                        <div class="input-field">
                            <select name="civility">
                                <option value="" disabled selected>Choisissez votre genre</option>
                                <option value="Mr">Mr</option>
                                <option value="Madame">Madame</option>
                            </select>
                        </div>
                        <div class="intput-field">
                            <label for="name">Nom </label>
                            <div class="">
                                <input type="text" name="name" placeholder="Nom" required/>
                            </div>
                        </div>
                        <div class="intput-field">
                            <label for="firstName">Prénom </label>
                            <div class="">
                                <input type="text" name="firstName" placeholder="Prénom" required/>
                            </div>
                        </div>
                        <div class="intput-field">
                            <label for="age">Quel âge avez-vous ? </label>
                            <div class="">
                                <input type="text" name="age" placeholder="Votre âge ..." required/>
                            </div>
                        </div>
                        <div class="intput-field">
                            <label for="society">Dans quel société travaillez-vous ? </label>
                            <div class="">
                                <input type="text" name="society" placeholder="Votre société ..." required/>
                            </div>
                        </div>
                        <input type="submit" value="Envoie"/>
                    </fieldset>
                </form>
            </div>
        <?php } ?>
        <script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/js/materialize.min.js"></script>
        <script src="script.js"></script>
    </body>
</html>