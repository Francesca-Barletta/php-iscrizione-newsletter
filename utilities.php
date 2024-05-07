<?php
function validEmail($email){
    //se il pulsante invia è stato cliccato
  if(isset($_POST['email']) === true){
      //se la mail è lunga più di 5 e contiene sia '@' che '.' allora la email è valida (true)
          if(strlen($email) > 5 && str_contains($email,'@') && str_contains($email, '.')){
              // var_dump("la mail $email è valida");
              return true;
              //altrimenti (false)    
       }else{
              // var_dump("la mail $email non è valida");
              return false;
       };
  };
  
};