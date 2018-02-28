<div class="container jumbotron">
    <h1><?php echo $post['titolo'];?></h1>
    <p><?php echo $post['corpo'];?></p>
    <span class="badge badge-success"><strong>Creato il </strong><?php echo $post['creatoAlle'];?></span>
</div>
<?php echo form_open('posts/delete/'.$post['idAnnuncio']); ?>
  <input type="submit" value="Elimina" class="btn btn-danger">
</form>


<div class="container ">
  <h1>Collegamenti: <span class="badge badge-secondary mr-2"><?php echo $image['nome'];?></span></h1>
  <?php echo form_open('posts/link/'.$post['idAnnuncio']); ?>
  <div class="input-group mb-3 mt-4">
    <select class="custom-select" id="idImmagine" name="idImmagine">
      <option selected>Scegli tramite titolo</option>
      <?php foreach ($images as $image) : ?>
        <option value="<?php echo $image['idImmagine']?>"><?php echo $image['nome']?></option>
      <?php endforeach; ?>
    </select>
    <button type="submit" class="btn btn-secondary mb-2">Assegna</button>
  </div>
  </form>

  <h2>... Oppure scegli dalla galleria</h2>
  <div class="container jumbotron mt-4">
    <?php
      if(empty($images)){
        echo "<h3 class='text-muted mb-0'>La galleria è vuota, prova a <a style='text-decoration:none' href='".base_url()."upload/'><kbd>caricare</kbd></a> un'immagine.</h3>";
      }
    ?>
    <div class="row">
      <?php foreach ($images as $image) : ?>
        <div class="col-md-3">
          <div class="container" style="width: 15rem;">
            <?php echo form_open('posts/link/'.$post['idAnnuncio']); ?>
              <button type="submit" style="padding: 0; border: none; background: none;">
                <img src="<?php echo base_url().'uploads/'.$image['nome']; ?>" alt="<?php echo $image['nome']?>" class="img-thumbnail">
                <input type="hidden" value="<?php echo $image['idImmagine']?>" name="idImmagine" id="idImmagine">
              </button>
            </form>
          </div>
        </div>
      <?php endforeach; ?>
    </div>
  </div>
</div>
