<?php
function pp($data)
{
    echo "<pre>";
    print_r($data);
    echo "</pre>";
}

function getCategories($con)
{

    $sql = "SELECT * FROM category";
    $result = mysqli_query($con, $sql);
    return $result;
}
function getCategroyById($con, $id)
{
    $sql = "SELECT * FROM category WHERE id = $id";
    $result = mysqli_query($con, $sql);
    $category = mysqli_fetch_assoc($result);
    return $category;
}
 function getProducts($con, $category = null , $id = null){
  $sql = "SELECT * FROM products ";
  if( $category != null){
     $sql.= " WEHERE category = '$category' ";

  }
  if( $category != null && $id != null){
    $sql.= " AND id = '$id' ";
  }else if($id != null && $category == null){
    $sql .= "WHERE id = '$id' ";
}

  $result = mysqli_query($con , $sql);

  return $result;

 }


// image url Get

function imageUrl($folder, $image)
{

    return "admin/images/$folder/$image";
}
