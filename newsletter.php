<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <title>Envoi d'un email par formulaire</title>
</head>

<body>

    <?php

    foreach ($_POST['invention'] as $inventions) {
      if ($total_invention) $total_invention = $total_invention.', '.$inventions;
      else $total_invention = $inventions ;
      }


    $retour = mail($_POST['mail'], '[EMITIME] Nice to meet you, darling',
    'Salut '.$_POST['prenom'].', on bien reçu votre inscription pour la newsletter des machine : '.$total_invention,
     'From : contact@emitime.com');

    if ($retour) {
        echo "<p>Votre inscription a bien été enregistrée, vous devriez recevoir un mail d'ici peu.</p>";
    }

    ?>
</body>

</html>
