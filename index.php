<?php
// var_dump($_POST);
$email = $_POST['email'] ?? '';
var_dump("email: ,$email");
var_dump(isset($_POST['email']));
// clicco invia e $_POST['email'] diventa true, a quel punto verifico la mail e escono gli alert di conseguenza,
//se ancora non ho cliccato e $_POST['email'] è ancora falso non devo vedere nessun alert
function validEmail($email){
    if(isset($_POST['email']) === true){
        //se il pulsante invia è stato cliccato, la mail è lunga più di 5 e contiene sia '@' che '.' allora la email è valida (true)
            if(strlen($email) > 5 && str_contains($email,'@') && str_contains($email, '.')){
                // var_dump("la mail $email è valida");
                return true;
                //se la il pulsante invia è stato cliccato e la mail è vuota allora inserisci email (false)    
         }else{
                // var_dump("la mail $email non è valida");
                return false;
         };
    };
    
};
var_dump(validEmail($email));

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
</head>
<body>
    <div class="container">
        <div class="row">
        <!-- <form action="" method="GET">
          <div class="mb-3 col-4" >
            <label for="email" class="form-label">Iscriviti alla newsletter:</label>
            <input type="text" class="form-control" id="email" placeholder="example@gmail.com">
          </div>
          <button type="submit" class="btn btn-primary">Invia</button>
        </form> -->
        <form action="" method="POST">
            <div>
                <input type="text" name="email">
            </div>
            <div>
                <button>invia</button>
            </div>

        </form>
        <div class>
                <?php if(validEmail($email) === true) { ?>
                    <div class="alert alert-primary col-4" role="alert">
                    email valida
                  </div>
                <?php }elseif(validEmail($email) === false){ ?>
                    <div class="alert alert-danger col-4" role="alert">
                    email non valida
                  </div>
                 <?php } ?>
            </div>
    </div>
   
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>  
</body>
</html>