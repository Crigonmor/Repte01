$(document).ready(function(){
  var root = "http://localhost/Projects/00 PHP/cms_avanzado/";

try{
  CKEDITOR.replace('txtDescription');
}catch(e){}

  //login
  $(".btnAdminLogIn").on("click", function(){
    var email = $(".txtEmailLogin").val().trim(),
      pass = $(".txtPassLogin").val().trim();


      $.ajax({
        type: "POST",
        url: root + "res/php/admin_actions/login.php",
        data: {
            email: email,
            pass: pass
        },
        success: function(data){
        if(data != "false"){

          window.location.href = "http://localhost/Projects/00 PHP/cms_avanzado/admin/";
          //rederigeix a
        }else if(data == "false") {
            alert("Sus credenciales no son correctas");

          }
          //agafa les dades de la informacio data
          //un cop el servidor processi les dades
        }
      });

    //trim elimina espais en blanc
  });
  //quant fasin click al buto de categoria guardar
  $('.btnSaveCategory').on("click",function(){
    var category = $('.txtNameCategory').val().trim()
    self    = this;
    //self fa refarencia al buto
    $.ajax({
      type: "POST",
      url: root + "res/php/admin_actions/save_category.php",
      data: {
        category: category
      },
      //amb BeforeSend fa alguna cosa abans que comensi la peticio al servidor
      BeforeSend: function(){
        //mostrara animacio carregant mentres no s axi guardat
        $(self).addClass("loading");
      },
      //un cop sa fet la petico es posa success
      success: function(data){
        $(self).removeClass("loading");
        if(data > 0){
          alert("Se guardo correctamente");
          $('.txtNameCategory').val("");
          //id mes grant que 0
          $('.tblCategories tr:last').after('<tr><td>'+category+'</td><td><i class="fa fa-remove btnRemoveCategory" data-categoryId="'+data+'" style="color:red;cursor:pointer;"title="Eliminar Categoria"></i></td></tr>');
          //despres de la ultima tr elimina despres del click
        }else {
          alert("Hubo un error");
        }
      },
      error: function(){
        //si i a un error s executara
        alert("Se ha producido un error");
      }
    });
  });
//fer click per borrar categoria i obtenir la id de la categoria
  $(".tblCategories").on("click", ".btnRemoveCategory",function(){
    var category_id = $(this).attr("data-categoryId"),
    self        = this;

    $.ajax({
      type: "POST",
      url: root + "res/php/admin_actions/delete_category.php",
      data: {
        category_id: category_id
      },

      success: function(data){
        console.log(data);
        if (data > 0){
          $(self).parent().parent().remove();
          alert("Se ha eliminado.");
        }else {
          alert("Hubo un error no se pudo borrar ");
        }


      },
      error: function(){
        //si i a un error s executara
        alert("Se ha producido un error");
      }
    });

  });
  $('.btnSavePost').on("click", function(e){
    e.preventDefault();
    //guarda en html
    var description = CKEDITOR.instances.txtDescription.getData(),
    name  = $('.txtNamePost').val().trim(),
    category_id = $('.txtCategoryPost').val().trim();

    if(description !== "" && name !== "" && category_id > 0){
// si no es igual a vuit i
//Ajax para subir la publicacion
var formData = new FormData($("#new_post_container")[0]);
formData.append("description",description );
//form data agreguem la descripcio amb el plugin CKEDITOR append agregar
//la variable tindra tota la informacio
$.ajax({
  xhr: function(){
    var xhr = new window.XMLHttpRequest();
    //xhr es una peticio de http
    xhr.upload.addEventListener("progress", function(evt){
        if(evt.lengthComputable){
          var percentComplete =  evt.loaded / evt.total;
          percentComplete = parseInt(percentComplete * 100);
          console.log(percentComplete);
          // variable percentcomplete ens indica el porcentage de la publicacio
          //lenght computable retorna un verdeder o fals
          //dona verdeder quan podem calular cuant pesa el arxiu
        }
    }, false);
    return xhr;
    //ens servira per veure el progres de la publicacio
  },
  type: "POST",
  url: root + "res/php/admin_actions/new_post.php",
  data:formData,
//data la informacio que li estem enviant
processData: false,
contentType: false,
BeforeSend: function(){
  //nada
},
success: function(data){
  $('.txtNamePost, .image_file').val("");
  $('#txtDescription').val("");
  CKEDITOR.instances['txtDescription'].setData("");
  alert("Se subio la publicacion ");

  //un cop hagui pujat la publicacio borra el text i la image que hi a a la caixa
},
error: function(){
  alert("Error...");
}
});
}else {
  alert("Llene todos los campos");
}

  });
});
