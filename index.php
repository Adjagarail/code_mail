<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>

<body>

    <div class="container">

        <div class="row">

            <div class="col-md-6">

                <form method="POST">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Destinataire</label>
                        <input type="email" class="form-control" name="destinataire" id="exampleInputEmail1" aria-describedby="emailHelp">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Objet</label>
                        <input type="text" name="objet" class="form-control" id="exampleInputPassword1">
                    </div>  
                    <div class="form-group">
                        <label for="exampleFormControlTextarea1">Ecrivez votre message</label>
                        <textarea class="form-control" name="message" id="exampleFormControlTextarea1" rows="3"></textarea>
                    </div>

                    <button type="submit" name="envoyer" class="btn btn-primary ds"> Envoyer </button>
                </form>

            </div>

        </div>

    </div>

<?php

$destinataire = $_POST['destinataire'];
$objet = $_POST['objet'];
$message = $_POST['message'];
$envoyer = $_POST['envoyer'];
if(isset($envoyer) && !empty($destinataire) && !empty($objet) && !empty($message)){
    $to= $destinataire;
    $subject=$objet;
    $messages=$message;
    $headers="Message de Yaya";
    mail($to, $subject,$messages,$headers);
    echo('Votre message a ete bien envoyer');    
}
else{
    echo('Erreur lors de l\'envoi du message');
}

?>

    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>

</html>