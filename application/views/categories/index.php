<h2>Lista delle tue categorie</h2>
<?php foreach ($categories as $category) { ?>
<a href="<?php echo site_url('categories/posts/'.$category['idCategoria']);?>" class="badge badge-secondary text-muted p-2 mr-2 mt-2"><h3 class="font-weight-bold">#<?php echo $category['nome'];?></h3></a>
<?php } ?>
