<?php

function format_sql_date($sql_date)
{
  return date('d/m/Y', strtotime($sql_date));
}

function handle_img_upload($uploadedFileName)
{
  $filePath = $_FILES[$uploadedFileName]['tmp_name'];
  $fileName = $_FILES[$uploadedFileName]['name'];
  $newFileName = "/uploads/" . $fileName;
  if (isset($filePath)) {
    move_uploaded_file($filePath, $_SERVER['DOCUMENT_ROOT'] . $newFileName);
  }
  return $newFileName;
}

function get_connected_author()
{
  session_start();
  $session_author = $_SESSION["author"] ?? null;
  if (!$session_author) {
    //Redirection ver l'url de connexion
    header('Location: /views/connexion.php');
    die;
  }
  return $session_author;
}

function check_connexion()
{
  session_start();
  $session_author = $_SESSION["author"] ?? null;
  if (!$session_author) {
    //Redirection ver l'url de connexion
    header('Location: /views/connexion.php');
    die;
  }
}
