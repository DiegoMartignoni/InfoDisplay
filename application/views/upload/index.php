<?php
  if($_COOKIE['messaggio']==1){
    echo '<div style="padding: 5px;"><div id="inner-message" class="alert alert-dismissible alert-success"><button type="button" class="close" data-dismiss="alert">&times;</button> <strong>Suggerimento:</strong> Dopo aver scelto il file, per caricare <a href="#salva" class="alert-link" style="text-decoration:none">clicca sul bottone <kbd class="bg-white text-success">Carica</kbd></a></div></div>';
    $cookie = ++$_COOKIE['messaggio'];
    setcookie ("messaggio", $cookie, time() + (86400 * 7));
  }
  if($error!=null){
    echo '<div style="padding: 5px;"><div id="inner-message" class="alert alert-dismissible alert-danger"><button type="button" class="close" data-dismiss="alert">&times;</button> <strong>Errore:</strong> '. $error .'</div></div>';
  }

  echo form_open_multipart('upload/upload_file');
 ?>
<label class="btn btn-lg bg-white text-dark btn-file mb-0 " id="file">
  Scegli il file<input class="btn btn-secondary" id="userfile" type="file" name="userfile" size="20" hidden onchange="NomeFile()"/>
</label>
<input class="btn btn-lg btn-success font-weight-bold" id="upload" type="submit" value="Carica" />
</form>
