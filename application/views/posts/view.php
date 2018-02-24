<div class="container jumbotron">
    <h1><?php echo $post['titolo'];?></h1>
    <p><?php echo $post['corpo'];?></p>
    <span class="badge badge-success"><strong>Creato il </strong><?php echo $post['creatoAlle'];?></span>
</div>
<?php echo form_open('posts/delete/'.$post['idAnnuncio']); ?>
  <input type="submit" value="Elimina" class="btn btn-danger">
</form>


<div class="container">
  <h1>Collegamenti: <span class="badge badge-secondary mr-2"><?php echo $image['nome'];?></span></h1>
  <?php echo form_open('posts/link/'.$post['idAnnuncio']); ?>
  <div class="input-group mb-3">
    <select class="custom-select" id="idImmagine" name="idImmagine">
      <option selected>Immagini...</option>
      <?php foreach ($images as $image) : ?>
        <option value="<?php echo $image['idImmagine']?>"><?php echo $image['nome']?></option>
      <?php endforeach; ?>
    </select>
    <button type="submit" class="btn btn-secondary mb-2">Assegna</button>
  </div>
  </form>
</div>
