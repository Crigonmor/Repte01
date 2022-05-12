<div class="post_main_img">
  <div class="post_main_image_image">
    <img id="imatge"src="../res/img/img_posts/<?php echo $post[0]["img_post"]; ?>.png" alt="<?php echo $post[0]["name"]; ?>">
  </div>
</div>
<div class="post_main_body">
  <h1><?php echo $post[0]["name"]; ?></h1>

  <p>
    <?php echo date("d-m-Y", $post[0]["created_ad"]); ?> - <?php echo $post[0]["username"]; ?>
  </p>


  <p><?php echo $post[0]["body"]; ?></p>
</div>
