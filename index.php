<html>
  <head>
    <title>PHP Test</title>
  </head>
  <body>
<?php
//Variables prédéfinies:
$user = 'utilisateur' ;
$pass = 'mdp123';

echo  "<form method='POST' action='index.php'>
       <label for='username'>Nom utilisateur :</label><br>
       <input type='text' id='username' name='username'><br><br>
       <label for='password'>Mot de passe :</label><br>
       <input type='password' id='password' name='password'><br><br>
       <input type='submit' value='Se connecter'>
       </form>" ;
// Vérification de la connection ;
if(isset($_POST['username']) && isset($_POST['password'])) {
  $username = $_POST['username'];
  $password = $_POST['password'];
   if($username === $user && $password === $pass) {
     echo "Bienvenue, $user !"
   }else{
     echo "Nom d'utilisateur ou mot de passe incorrect !" ;
   }
};






?>

 
  <script src="https://replit.com/public/js/replit-badge-v2.js" theme="dark" position="bottom-right"></script>
  </body>
</html>