<div class="background_main">
  <div class="overlay"> </div>
<h1 class="main_title">Què estàs buscant avui?</h1>
</div>
<div class="ui grid stackable container" style="margin-top: 25px;">
  <div class="sixteen wide column">
    <h2 style="text-align:center;">Publicacions Recents</h2>
  </div>

  <?php foreach($posts as $post): ?>
  <a href="post/<?php echo $post["post_id"]; ?>" class="four wide column">
    <div class="post_container">
        <img src="res/img/img_posts/<?php echo $post["img_post"]; ?>.png" class="post_img" alt="<?php echo $post["name"]; ?>">
        <h2 class="post_title"><?php echo $post["name"]; ?></h2>
        <p class="post_date"><?php echo date("d-m-Y", $post["created_ad"]); ?></p>
    </div>
  </a>
<?php endforeach; ?>


</div>
