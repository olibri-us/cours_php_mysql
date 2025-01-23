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
