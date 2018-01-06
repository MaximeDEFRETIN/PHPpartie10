<!DOCTYPE html>
<html>
    <head>
        <title>TP 1</title>
        <script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/css/materialize.min.css">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/js/materialize.min.js"></script>
        <link rel="stylesheets" href="style.css" />
    </head>
    <body>
        <div class="row">
        <h1 class="col offset-s3 s6 center-align">TP 1</h1>
        </div>
        <?php
        $nameRegex = '/^[A-ZÉÈÀÊÀÙÎÏÜË]{1}[a-zéèàêâùïüë]+[-]{0,}[A-ZÉÈÀÊÀÙÎÏÜË]{0,1}[a-zéèàêâùïüë]{0,}/';
        $dateRegex = '/^(([0-2][0-9])|([3]{1}[0-1]{1}))[\/]{1}(([0][1-9])|([1]{1}[0-2]{1}))[\/]{1}([0-9]){4}$/';
        $phoneRegex = '/[0]{1}[0-9]([\ ]{0,}[0-9][0-9]){4}/';
        $emailRegex = '/[a-zA-Z0-9_\-.]{1,}[@]{1}[a-zA-Z0-9_\-.]{1,}[.]{1}[a-zA-Z]{1,}/';
        $qualificationRegex = '/[A-Z]{1}[a-z]{1,}([\ +0-9]){0,}/';
        $jobCenterRegex = '/^[0-9]{7}[A-Z]{1}$/';
        $badgesRegex = '/^[0-9]{0,}$/';
        $textRegex = '/[A-ZÉÈÀÊÀÙÎÏÜËa-zéèàêâùïüë\-.\ ]{5,}/';
        $urlRegex = '/(?:http|https):\/\/((?:[\w-]+)(?:\.[\w-]+)+)(?:[\w.,@?^=%&amp;:\/~+#-]*[\w@?^=%&amp;\/~+#-])?/';
        /* Si il y a des valeurs dans les input, alors on affiche une phrase */
        if (!empty($_POST['dateBorn']) && !empty($_POST['name']) && !empty($_POST['firstName']) && !empty($_POST['bornCountry']) && !empty($_POST['nationality']) && !empty($_POST['adress']) && !empty($_POST['mail']) && !empty($_POST['numberPhone']) && !empty($_POST['urlCodecademy']) && !empty($_POST['hero']) && !empty($_POST['hack']) && preg_match($nameRegex, $_POST['bornCountry']) && preg_match($textRegex, $_POST['adress']) && preg_match($emailRegex, $_POST['mail']) && preg_match($qualificationRegex, $_POST['qualification']) && preg_match($jobCenterRegex, $_POST['numberJobCenter']) && preg_match($urlRegex, $_POST['urlCodecademy']) && preg_match($textRegex, $_POST['hero']) && preg_match($textRegex, $_POST['hack']) && preg_match($textRegex, $_POST['experiences'])/* && preg_match($dateRegex, $_POST['dateBorn']) */)
        {
            echo 'Vous êtes ' . strip_tags($_POST['name']) . ' ' . strip_tags($_POST['firstName']) . '. Vous êtes né dans le pays suivant :' . strip_tags($_POST['bornCountry']) . ' et vous avez la nationnalité ' . strip_tags($_POST['nationality']) . '. Votre adrresse est la suivante : ' . strip_tags($_POST['adress']) . '. Votre URL Codecademy est la suivante : ' . strip_tags($_POST['urlCodecademy']) . '. Voici votre hack : ' . strip_tags($_POST['hack']) . '. Et voici votre expériences en informatique/programmation : ' . strip_tags($_POST['experiences']);
            /* Si il n'y a aucune valeur dans les input, on affiche le formulaire */
        }
        else
        {
            ?>
            <div class="row">
                <form method="post" action="index.php" role="form" class="col offset-s3 s6">
                    <fieldset>
                        <legend>Vos coordonnées</legend>
                        <div class="row">
                            <label for="name">Nom </label>
                            <div class="intput-field">
                                <input type="text" name="name" placeholder="Nom" required/>
                            </div>
                        </div>
                        <div class="row">
                            <label for="firstName">Prénom </label>
                            <div class="intput-field">
                                <input type="text" name="firstName" placeholder="Prénom" required/>
                            </div>
                        </div>
                        <div class="row">
                            <label for="dateBorn">Date de naissance </label>
                            <div class="intput-field">
                                <input type="date" name="dateBorn" placeholder="Date de naissance" required/>
                            </div>
                        </div>
                        <div class="row">
                            <label for="bornCountry">Pays de naissance </label>
                            <div class="intput-field">
                                <input type="text" name="bornCountry" placeholder="Pays de naissance" required/>
                            </div>
                        </div>
                        <div class="row">
                            <label for="nationality">Nationalité </label>
                            <div class="intput-field">
                                <input type="text" name="nationality" placeholder="Nationalité" required/>
                            </div>
                        </div>
                        <div class="row">
                            <label for="adress">Adresse </label>
                            <div class="intput-field">
                                <input type="text" name="adress" placeholder="Adresse" required/>
                            </div>
                        </div>
                        <div class="row">
                            <label for="mail">Email </label>
                            <div class="intput-field">
                                <input type="email" name="mail" placeholder="Email" required/>
                            </div>
                        </div>
                        <div class="row">
                            <label for="numberPhone">Téléphone</label>
                            <div class="intput-field">
                                <input type="tel" name="numberPhone" placeholder="Téléphone" required/>

                            </div>
                            <div class="row">
                                <label for="qualification">Diplôme (sans, Bac, Bac+2, Bac+3 ou supérieur) </label>
                                <div class="intput-field">
                                    <input type="text" name="qualification" placeholder="Sans, Bac, Bac+2, Bac+3 ou +" required/>
                                </div>
                            </div>
                            <div class="row">
                                <label for="numberJobCenter">Numéro Pôle Emploi </label>
                                <div class="intput-field">
                                    <input type="text" name="numberJobCenter" placeholder="Numéro Pôle Emploi" required />
                                </div>
                            </div>
                            <div class="row">
                                <label for="numberBadges">Nombre de badges </label>
                                <div class="intput-field">
                                    <input type="number" name="numberBadges" placeholder="Nombre de badges" required/>
                                </div>
                            </div>
                            <div class="row">
                                <label for="urlCodecademy">Liens codecademy </label>
                                <div class="intput-field">
                                    <input type="url" name="urlCodecademy" placeholder="Liens codecademy" required/>
                                </div>
                            </div>
                            <div class="row">
                                <label for="hero">Si vous étiez un super héros/une super héroïne, qui seriez-vous et pourquoi? </label>
                                <div class="intput-field">
                                    <input type="text" name="hero" placeholder="Si vous étiez un héros ..." required/>
                                </div>
                            </div>
                            <div class="row">
                                <label for="hack">Racontez-nous un de vos "hacks" (pas forcément technique ou informatique) </label>
                                <div class="intput-field">
                                    <input type="text" name="hack" placeholder="Vos hacks ..." required/>
                                </div>
                            </div>
                            <div class="row">
                                <label for="experiences">Avez vous déjà eu une expérience avec la programmation et/ou l'informatique avant de remplir ce formulaire ? </label>
                                <div class="intput-field">
                                    <input type="text" name="experiences" placeholder="Vos expériences dans l'informatique/programmation ..." required/>
                                </div>
                            </div>
                            <div  class="input-field center-align">
                            <input type="submit" value="Envoie"/>
                            </div>
                    </fieldset>
<?php } ?>
            </form>
        </div>
        <script src="script.js"></script>
    </body>
</html>