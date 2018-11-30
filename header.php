<?php
declare(strict_types=1);

$language = 'En';

if (isset($_GET['language'])) {
  $language = $_GET['language'];

  if ($language == 'En') {
    require __DIR__.'/english.php';
  }
  elseif ($language == 'Sv') {
    require __DIR__.'/swedish.php';
  }
}
else {
  require __DIR__.'/english.php';
}
 ?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css">
  <link rel="stylesheet" href="style.css" type="text/css" />

  <link rel="stylesheet" type="text/css" href="slick/slick.css"/>
  <!-- <link rel="stylesheet" type="text/css" href="slick/slick-theme.css"/> -->
  <title>FastSecurity</title>
</head>
