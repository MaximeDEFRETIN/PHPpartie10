<!DOCTYPE HTML>
<html lang="fr">
  <head>
    <title>TP 2</title>
    <meta charset="UTF-8" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" />
    <link rel="stylesheet" href="style.css" />
  </head>
  <body>
    <div class="container-fluid">
      <div class="row">
        <div class="col-lg-12">
          <form action="index.php" method="POST" class="inscriptionForm">
            <div class="row">
              <div class="col-lg-offset-6 col-lg-1">
                <label for="civility">Civilité : </label>
                <select class="civility" name="civility">
                  <option value="Monsieur" <?= !empty($_POST['civility']) && $_POST['civility'] == 'Monsieur' ? 'selected' : ''; ?>>Monsieur</option>   
                  <option value="Madame" <?= !empty($_POST['civility']) && $_POST['civility'] == 'Madame' ? 'selected' : ''; ?>>Madame</option>
                </select>
              </div>
            </div>
            <div class="row">
              <div class="form-group col-lg-offset-3 col-lg-3">
                <label for="nom" class="h3">Votre nom : </label>
                <input type="text" class="form-control" id="lastname"  value="<?= !empty($_POST['lastname']) ? $_POST['lastname'] : ''; ?>" placeholder="Nom" name="lastname" required />
              </div>
              <div class="form-group col-lg-4 col-lg-offset-1">
                <label for="firstname" class="h3">Votre prénom : </label>
                <input type="text" class="form-control" id="firstname" value="<?= !empty($_POST['firstname']) ? $_POST['firstname'] : ''; ?>" placeholder="Prénom" name="firstname" required />
              </div>
            </div>
            <div class="row">
              <div class="form-group col-lg-offset-3 col-lg-3">
                <label for="age" class="h3">Votre âge : </label>
                <input type="text" class="form-control" value="<?= !empty($_POST['age']) ? $_POST['age'] : ''; ?>" placeholder="Age" name="age" required />
              </div>
              <div class="form-group col-lg-4 col-lg-offset-1">
                <label for="society" class="h3">Votre société : </label>
                <input type="text" class="form-control" id="society" value="<?= !empty($_POST['corporation']) ? $_POST['corporation'] : ''; ?>" placeholder="Société" name="corporation" required />
              </div>
            </div>
            <div class="row col-lg-offset-3 col-lg-5">
              <button class="btn btn-primary" id="validate" type="submit" name="validate" class="validate">Valider</button>
            </div>
          </form>
        </div>
      </div>
    </div>
    <div class="container-fluid">
      <div class="row col-lg-offset-3">
        <p id="text"><?php
          if (!empty($_POST['lastname']) && !empty($_POST['firstname']) && !empty($_POST['civility']) && !empty($_POST['age']) && !empty($_POST['corporation'])) {
              echo 'Bonjour ' . $_POST['civility'] . ' ' . $_POST['lastname'] . ' ' . $_POST['firstname'] . '. Tu as ' . $_POST['age'] . ' ans et ta société est : ' . $_POST['corporation'] . '.';
          } else {
              echo 'Oui';
          }
          ?></p>
      </div>
    </div>
  </body>
  <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <script src="projet.js"></script>
</html>