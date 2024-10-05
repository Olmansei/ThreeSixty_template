<div class="card m-4" style="max-width: 300px; min-width: 300px">
    <?php the_post_thumbnail("preview-images")   ?>
  <div class="card-body">
    <h5 class="card-title"><?php the_title() ?></h5>
    <p class="card-text"><?php the_excerpt() ?></p>
    <a href="<?php the_permalink() ?>" class="btn btn-primary">Read more</a>
  </div>
</div>