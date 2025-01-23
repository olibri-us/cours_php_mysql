<?php
  //Demarre une session
  session_start();
  //Recupere l'id de l'auteur envoyé par le client (client choisis l'auteur)
  $author_id = $_POST["author_id"];
  // Donne le author_id au tableau de session
  $_SESSION["author_id"] = $author_id;
  //Redirige vers l'index
  header('Location: /index.php');
?>
