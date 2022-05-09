<?php
  require 'init.php';

  class User_Actions{
    //obtenir posts recents
    public function  getRecentPosts(){
      global $database;

      $posts = $database->select("posts",[
        "post_id",
        "name",
        "img_post",
        "created_ad"
        //mosta el nom la data i la id i tambe la imatge
      ], [
          "ORDER" => ["posts.post_id" => "DESC"],
          //ORDENA DE FORMA DESCENDENT
          "LIMIT" => "8"
          //Limit de publicacions a mostrar
      ]);
      return $posts;
    }
    //informacio de adintre de una poblicacio
    public function getPostInfo($post_id){
      global $database;

      $posts = $database->select("posts", [
          "[>]categories" => ["category_id" => "category_id"],
          "[>]admins" => ["admin_id" => "admin_id"],

        //join a categorys per posar el nom de la categoria a la pagina de la poblicacio
      ], [
        "posts.name",
        "posts.body",
        "posts.img_post",
        "posts.created_ad",
        "categories.category",
        "admins.username"
        //mosta el nom la data i la id i tambe la imatge
      ], [
          "posts.post_id" => $post_id
      ]);
      return $posts;
    }

  }
  class Admin_Actions{
    //login
    public function logIn($username_email, $pass){
      global $database;
      //variable global dintra de init.php
      $data = $database->select("admins", [
          "password"
      ],[
          "OR" => [
              "username" =>  $username_email,
              "email" => $username_email
          ]
      ]);

      $password_db = $data[0]["password"];
//contresenya base de dades
      if(password_verify($pass, $password_db)){
        return true;
      }else{
        return false;
      }
    }
    //verificar el usuari admin
    public function getProfile($email){
      global $database;

      $admin = $database->select("admins",[
        "admin_id",
        "username"
      ], [
        "email" => $email
      ]);
      return $admin;
    }

    //funcio obtenir categories
    public function getCategories(){
      global $database;

      $categories = $database->select("categories",[
        "category_id",
        "category"
      ]);
      return $categories;
    }


    //funcio guardar categoria
    public function save_Category($category){
      global $database;
      //database llegueix la base de dades
      $database->insert("categories",[
        "category" => htmlentities ($category)
        //inserta a categoria
      ]);
      return $database->id();
    }
//funcio per borrar categoria
    public function deleteCategory($category_id){
      global $database;
      //database llegueix la base de dades
      $delete = $database->delete("categories", [
        "category_id" => $category_id
        //inserta a categoria
      ]);
      return $delete->rowCount();
    }
    //funcio per guardar el post
    public function savePost($name, $category_id, $description,$name_img, $admin_id){
      global $database;
      //database llegueix la base de dades
      $database->insert("posts",[
        "name" => htmlentities ($name),
        "body" => $description,
        "category_id" => htmlentities ($category_id),
        "admin_id"    => $admin_id,
        "created_ad"  => time(),
        "img_post"    => $name_img


        //inserta a categoria
      ]);
      return $database->id();
    }
  }
 ?>
