
<div id="cuadrat">

<div id="dos">
<div class="quatra">
<img id="imatge"src="../res/img/img_posts/<?php echo $post[0]["img_post"]; ?>.png" alt="<?php echo $post[0]["name"]; ?>">
</div>
</div>
  <div id="tres">
<h1><?php echo $post[0]["name"]; ?></h1>
<h3><?php echo date("d-m-Y", $post[0]["created_ad"]); ?> - <?php echo $post[0]["username"]; ?></h3>
<?php echo $post[0]["body"]; ?>
    <div>
</div>

</div>
</div>
