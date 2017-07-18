<?php


function category_all($link)
{

    $query = "SELECT * FROM product_category ORDER BY id DESC";
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

function category_get($link, $id_category)
{
    $query = "SELECT * FROM product_category WHERE id = %d";
    $query = sprintf($query, (int)$id_category);

    $result = mysqli_query($link, $query);

    if (!$result) {
        die(mysqli_error($link));
    }

    return mysqli_fetch_assoc($result);
}
