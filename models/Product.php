<?php


function product_all($link)
{

    $query = "SELECT * FROM product ORDER BY id DESC";
    $result = mysqli_query($link, $query);

    if (!$result) {
        die(mysqli_error($link));
    }

    $count = mysqli_num_rows($result);
    $articles = array();

    for ($i = 0; $i < $count; $i++) {
        $row = mysqli_fetch_assoc($result);
        $articles[] = $row;
    }

    return $articles;
}

function product_get($link, $id_product)
{
    $query = "SELECT * FROM product WHERE id = %d";
    $query = sprintf($query, (int)$id_product);

    $result = mysqli_query($link, $query);

    if (!$result) {
        die(mysqli_error($link));
    }

    return mysqli_fetch_assoc($result);
}

function getProductListByCategory($link, $category_id){
    $query = "SELECT * FROM product WHERE category_id = %d";
    echo $query;
    $query = sprintf($query, (int)$category_id);

    $result = mysqli_query($link, $query);

    if (!$result) {
        die(mysqli_error($link));
    }

    return mysqli_fetch_assoc($result);
}
