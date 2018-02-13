<h1>Creazione annuncio</h1>
<div class="form-group text-left">
  <div id="save">
    <?php
      if($_COOKIE['messaggio']==1)
        echo '<div style="padding: 5px;"><div id="inner-message" class="alert alert-dismissible alert-success"><button type="button" class="close" data-dismiss="alert">&times;</button> <strong>Suggerimento:</strong> per salvare <a href="#salva" class="alert-link" style="text-decoration:none">clicca sul bottone <kbd class="bg-white text-success">Crea</kbd></a></div></div>';
        $cookie = ++$_COOKIE['messaggio'];
        setcookie ("messaggio", $cookie, time() + (86400 * 7));
     ?>
  </div>
  <input type="text" class="d-inline form-control bg-secondary text-white" id="titoloInput" placeholder="Titolo" maxlength="50">
  <textarea class="form-control mt-2 bg-secondary text-white" id="corpoInput" rows="17" placeholder="Scrivi il testo qui..."></textarea>
  <button type="submit" id="salva" class="d-inline btn btn-success mt-2">Crea</button>
</div>
