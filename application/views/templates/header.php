<?php
  $cookie = 1;
  setcookie ("messaggio", $cookie, time() + (86400 * 7));
?>
<html class="w-100 h-100">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://bootswatch.com/4/darkly/bootstrap.min.css">
    <title>CodeIgniter Tutorial</title>
    <script>
      function NomeFile(){
        var nome = document.getElementById('userfile').value.split( '\\' ).pop();
        document.getElementById('qualeFile').innerHTML = "<a class='btn btn-secondary btn-lg mt-2' style='border-top-left-radius: 0px; border-bottom-left-radius: 0px;''>"+nome+"</a>";
      }
    </script>
  </head>
  <body class="w-100 h-100 text-center">
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <a class="navbar-brand" href="/ci">InfoDisplay</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor03" aria-controls="navbarColor03" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarColor03">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active">
            <a class="nav-link" href="<?php echo base_url();?>">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?php echo base_url();?>about">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?php echo base_url();?>posts">Annunci</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?php echo base_url();?>categories">Categorie</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?php echo base_url();?>upload">Immagini</a>
          </li>
          <li class="nav-item d-flex justify-content-center align-items-center ml-2">
            <a class="nav-link p-0" href="<?php echo base_url();?>posts/create"><span class="btn bg-white text-secondary btn-sm">Nuovo</span></a>
          </li>
        </ul>
      </div>
    </nav>

    <div class="d-flex justify-content-center mt-4">
    	<div class="align-self-center container">
