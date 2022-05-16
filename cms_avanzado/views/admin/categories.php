<div id="new_post_container" class="ui form new_post_container">
<h1>Categories</h1>
<p><b>Nom De La Categoria</b></p>
<div class="ui input">
  <input type="text" class="txtNameCategory"  placeholder="Nombre De La Categoria">
</div>




  <button class="ui blue basic button btnSaveCategory">Guardar Categoria</button>
  <p class="clearfix"></p>
  <h3>Categories Existents</h3>
  <table class="ui single line table tblCategories">
      <thead>
        <tr>
        <th>Nom de la Categoria</th>
        <th>Acci&oacute;n</th>
        </tr>
      </thead>
      <tbody>
        <?php foreach($categories as $category): ?>

          <tr>
            <td><?php echo $category['category']; ?></td>
            <td><i class="fa fa-remove btnRemoveCategory" data-categoryId="<?php echo $category['category_id']; ?>" style="color:red;cursor:pointer;"title="Eliminar Categoria"></i></td>
          </tr>
        <?php endforeach; ?>
      </tbody>
  </table>
</div>
