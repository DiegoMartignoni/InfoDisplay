<h1>Categorie</h1>
<div class="jumbotron mt-3 text-left p-2">
  <h2>Crea categoria</h2>
  <?php
  echo validation_errors();
  echo form_open_multipart('categories/create');
   ?>
    <div class="form-group">
      <input type="text" class="form-control bg-secondary text-white" name="name" placeholder="Nome">
      <button type="submit" class="btn btn-success mt-2">Crea</button>
    </div>
  </form>
</div>
