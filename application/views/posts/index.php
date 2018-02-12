<h1>Annunci</h1>
  <div class="container mt-4">
    <div class="row">
      <?php foreach ($posts as $post) : ?>
        <div class="col-md-4">
          <a href="<?php echo site_url('posts/'.$post['slug']);?>" style="text-decoration: none" class="text-white">
            <div class="container jumbotron" style="width: 18rem;">
              <small><?php echo $post['creattoAlle']?></small>
              <h6><strong><?php echo $post['titolo']?></strong></h6>
              <small><?php $taglio = substr($post['corpo'],0,100).'...'; echo $taglio?></small>
            </div>
          </a>
        </div>
      <?php endforeach; ?>
    </div>
  <div>
