<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <title>Envoi d'un email par formulaire</title>
</head>

<body>

    <?php

    $total_invention = foreach ($_POST['invention'] as $inventions) {
      echo $inventions.', ';
    }

    echo 'Salut '.$_POST['prenom'].', on bien reçu votre inscription pour la newsletter des machine : '.$total_invention;
    // $retour = mail($_POST['mail'], '[EMITIME] Nice to meet you, darling',t
    // 'Salut '.$_POST['prenom'].', on bien reçu votre inscription pour la newsletter des machine : '.$inventions,
    //  'From : contact@emitime.com');
    //
    // if ($retour) {
    //     echo '<p>Votre message a bien été envoyé !</p>';
    // }

    ?>
</body>

</html>
