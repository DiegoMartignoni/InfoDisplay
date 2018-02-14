<div class="container jumbotron">
    <h1><?php echo $post['titolo'];?></h1>
    <p><?php echo $post['corpo'];?></p>
    <span class="badge badge-success"><strong>Creato il </strong><?php echo $post['creatoAlle'];?></span>
</div>
<?php echo form_open('posts/delete/'.$post['idAnnuncio']); ?>
  <input type="submit" value="Elimina" class="btn btn-danger">
</form>
