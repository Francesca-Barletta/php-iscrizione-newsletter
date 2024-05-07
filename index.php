<?php
// var_dump($_POST);
$email = $_POST['email'] ?? '';

include __DIR__ . '/utilities.php';
// var_dump("email: ,$email");
// var_dump(isset($_POST['email']));
// clicco invia e $_POST['email'] diventa true, a quel punto verifico la mail e escono gli alert di conseguenza,
//se ancora non ho cliccato e $_POST['email'] è ancora falso non devo vedere nessun alert
// function validEmail($email){
//       //se il pulsante invia è stato cliccato
//     if(isset($_POST['email']) === true){
//         //se la mail è lunga più di 5 e contiene sia '@' che '.' allora la email è valida (true)
//             if(strlen($email) > 5 && str_contains($email,'@') && str_contains($email, '.')){
//                 // var_dump("la mail $email è valida");
//                 return true;
//                 //altrimenti (false)    
//          }else{
//                 // var_dump("la mail $email non è valida");
//                 return false;
//          };
//     };
    
// };
// var_dump(validEmail($email));

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Newsletter</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
</head>
<body>
    <header>
        <?php include __DIR__ . '/header.php';?>
    </header>
    <main class="mh-100">
      <div class="container">
        <div class="row h-100 justify-content-center">
            <form action="" class="col-4 mb-3" method="POST">
              <div class="mb-3" >
                <label for="email" class="form-label">Iscriviti alla newsletter:</label>
                <input type="text" class="form-control" name="email" id="email" placeholder="example@gmail.com">
              </div>
              <button type="submit" class="btn btn-primary">Invia</button>
            </form>
        </div>
      </div>
      <div class="container">
            <div class="row justify-content-center">
                    <?php if(validEmail($email) === true) { ?>
                        <div class="alert alert-primary col-3 text-center" role="alert">
                        email valida
                      </div>
                    <?php }elseif(validEmail($email) === false){ ?>
                        <div class="alert alert-danger col-3 text-center" role="alert">
                        email non valida
                      </div>
                     <?php } ?>
             </div>
      </div>
 
    </main>
    <footer>
        <?php include __DIR__ . '/footer.php';?>
    </footer>


</body>
</html>