<!-- ## Snack 2
Passare come parametri GET name, mail e age e verificare (cercando i metodi che non conosciamo nella documentazione) che name sia più lungo di 3 caratteri, che mail contenga un punto e una chiocciola e che age sia un numero. Se tutto è ok stampare “Accesso riuscito”, altrimenti “Accesso negato” -->

<?php
    if(empty($_GET)){
      echo "<h1>Inserisci query: name, email, age</h1>";
    }else if (array_key_exists("name", $_GET) && array_key_exists("email", $_GET) && array_key_exists("age", $_GET)){
      $name = $_GET["name"];
      $email = $_GET["email"];
      $age = $_GET["age"];
      if(strlen($name)>3 && strpos($email, "@") !==false && strpos($email, ".") !==false && is_numeric($age) == true){
        echo "Accesso riuscito";
      }else{
        echo "Accesso negato";
      }
    }
?>