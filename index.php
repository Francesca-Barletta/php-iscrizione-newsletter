<?php

$email = $_POST['email'] ?? null;

include __DIR__ . '/utilities.php';

if($email !== null){
    session_start();
    $_SESSION['email'] = $email;
    header('Location: ./subscription.php');

};

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
  <div class="vh-100 d-flex flex-column">
  <header>
        <?php include_once __DIR__ . '/header.php';?>
    </header>
    <main class="flex-grow-1">
       <div class="container">
          <div class="row flex-column align-items-center">
            <form action="" class="col-4 m-3" method="POST">
              <div class="mb-3" >
                <label for="email" class="form-label">Iscriviti alla newsletter:</label>
                <input type="text" class="form-control" name="email" id="email" placeholder="example@gmail.com" >
              </div>
              <button type="submit" class="btn btn-primary">Invia</button>
            </form>
      
                
          </div> 
       </div> 
      
 
    </main>
    <footer>
        <?php include_once __DIR__ . '/footer.php';?>
    </footer>
  </div>
</body>
</html>