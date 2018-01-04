<!DOCTYPE html>
<html>
    <head>
        <title>TP 3</title>
        <link rel="stylesheet" href="bootstrap.min.css" />
        <script src="bootstrap.js"></script>
        <link rel="stylesheets" href="style.css" />
    </head>
    <body>
        <h1>TP 3</h1>
        <div class="container">
            <?php

            function arrayPortrait()
            {
                $portrait1 = array('name' => 'Victor', 'firstname' => 'Hugo', 'portrait' => 'http://upload.wikimedia.org/wikipedia/commons/5/5a/Bonnat_Hugo001z.jpg');
                $portrait2 = array('name' => 'Jean', 'firstname' => 'de La Fontaine', 'portrait' => 'http://upload.wikimedia.org/wikipedia/commons/e/e1/La_Fontaine_par_Rigaud.jpg');
                $portrait3 = array('name' => 'Pierre', 'firstname' => 'Corneille', 'portrait' => 'http://upload.wikimedia.org/wikipedia/commons/2/2a/Pierre_Corneille_2.jpg');
                $portrait4 = array('name' => 'Jean', 'firstname' => 'Racine', 'portrait' => 'http://upload.wikimedia.org/wikipedia/commons/d/d5/Jean_racine.jpg');

                for ($i = 0; $i <= 0; $i++)
                {
                    echo '<div><img src="' . $portrait1['portrait'] . '" alt="Victor Hugo" title="Portrait de Victor Hugo">' . '<p> ' . $portrait1['name'] . ' ' . $portrait1['firstname'] . '</p></div>';
                    echo '<div><img src="' . $portrait2['portrait'] . '" alt="Jean de la Fontaine" title="Portrait de Jean de la Fontaine">' . '<p> ' . $portrait2['name'] . ' ' . $portrait2['firstname'] . '</p></div>';
                    echo '<div><img src="' . $portrait3['portrait'] . '" alt="Pierre Corneille" title="Portrait de Pierre Corneille">' . '<p> ' . $portrait3['name'] . ' ' . $portrait3['firstname'] . '</p></div>';
                    echo '<div><img src="' . $portrait4['portrait'] . '" alt="Jean Racine" title="Portrait de Jean Racine">' . '<p> ' . $portrait4['name'] . ' ' . $portrait4['firstname'] . '</p></div>';
                }
            };

            arrayPortrait();
            ?>
        </div>
    </form>
</body>
</html>