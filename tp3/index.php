<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>php part 10 - TP 3</title>
        <style>
            img { max-height: 6em;}
            div { display: inline-block; margin: 2em; padding: 2em;
                  width: 8em; height: 12em; }
            p { margin: 0; }
            .for { background-color: lightgrey; }
            .while { background-color: lightblue; }
        </style>
    </head>
    <body>
        <h1>Fonctions</h1>
        <h2>Généré avec une fonction et une boucle while</h2>
        <?php
        $portrait1 = array('name' => 'Victor', 'firstname' => 'Hugo', 'portrait' => 'http://upload.wikimedia.org/wikipedia/commons/5/5a/Bonnat_Hugo001z.jpg');
        $portrait2 = array('name' => 'Jean', 'firstname' => 'de La Fontaine', 'portrait' => 'http://upload.wikimedia.org/wikipedia/commons/e/e1/La_Fontaine_par_Rigaud.jpg');
        $portrait3 = array('name' => 'Pierre', 'firstname' => 'Corneille', 'portrait' => 'http://upload.wikimedia.org/wikipedia/commons/2/2a/Pierre_Corneille_2.jpg');
        $portrait4 = array('name' => 'Jean', 'firstname' => 'Racine', 'portrait' => 'http://upload.wikimedia.org/wikipedia/commons/d/d5/Jean_racine.jpg');
        //fonction qui génère le html des vignettes
        function thumbs($author) {
            ?>                
            <div class="while">
                <img src="<?php echo $author['portrait']; ?>" alt="<?php echo $author['name'] . ' ' . $author['firstname']; ?>"/>
                <p><?php echo $author['name'] ?><br><?php echo $author['firstname']; ?></p>
            </div>
            <?php
        }
        thumbs($portrait1);
        thumbs($portrait2);
        thumbs($portrait3);
        thumbs($portrait4);
        ?>
<h2>BONUS : Généré avec juste une boucle for</h2>
        <?php
        $i = 1;
        $portrait = 'portrait' . $i;
        for ($index = 1; isset($$portrait); $index++) {
            $portrait = 'portrait' . $index;
            if (isset($$portrait)) {
                ?>                
                <div class="for">
                    <img src="<?php echo $$portrait['portrait']; ?>" alt="<?php echo $$portrait['name'] . ' ' . $$portrait['firstname']; ?>"/>
                    <p><?php echo $$portrait['name'] ?><br><?php echo $$portrait['firstname']; ?></p>
                </div>
                <?php
            }
        }
        ?>
    </body>
</html>