<?php

require_once ($_SERVER['DOCUMENT_ROOT'].'/eshop/system/classes/autoload.php');
   //файлек обработчек
  //  $table = $_POST['table'];
   //create the keys that we'll send to DB from POST

   var_dump($_POST);

   $className = $_POST['class_name'];
//   $title =  $_POST['title'];
//   $description = $_POST['description'];
//   $code = $_POST['code'];
//   $price = $_POST['price'];

  $fields = [];
  $values = [];
  foreach ($_POST as $field=>$value) {
      if ($field != 'class_name') {
          $fields[] = $field;
          $values[] = "'".$value."'";
      }
  }

$className::createLine($fields, $values);
// Good:: createLine($fields, $values);
//   $fields_str =  implode( ',',$fields);
//   $values_str = implode (',', $values);

//    //create a key to connect to dB
//   $link = mysqli_connect('localhost', 'root', '','eshop');
//    //create encoding
//   mysqli_set_charset($link, 'utf8');
//    //create query text
//   $request_text = "INSERT INTO $table ($fields_str) VALUES ($values_str)";
//    //send query text to DB and get result
//   mysqli_query($link,$request_text);
//   echo $request_text;
//   //делаем перенаправление обратно
 header('location:'.$_SERVER['HTTP_REFERER']);
