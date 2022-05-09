<form enctype="multipart/form-data" id="new_post_container" class="ui form new_post_container">
<h1>Nueva Publicaci&oacute;n</h1>
<p><b>Nombre De La Publicaci&oacute;n</b></p>
<div class="ui input">
  <input type="text" class="txtNamePost" name="txtNamePost" placeholder="Nombre De La Publicaci&oacute;n">
</div>

<p><b>Categoria</b></p>
<div class="field">
      <select class="txtCategoryPost" name="txtCategoryPost">
        <option value="0">-- SELECIONAR UNA CATEGORIA --</option>
        <?php foreach($categories as $category): ?>
        <option value="<?php echo $category['category_id']; ?>"><?php echo $category['category']; ?></option>
        <?php endforeach; ?>
      </select>
  </div>

  <p><b>Seleccione Una Imagen</b></p>
  <div class="ui input">
    <input type="file" class="image_file" name="image_file">
  </div>

  <p><b>Publicaci&oacute;n</b></p>
  <textarea name="txtDescription" id="txtDescription"></textarea>
  <button class="ui blue basic button btnSavePost">Subir Publicacion</button>
  <p class="clearfix"></p>
</form>
