<?


function articles_all($link)
{

    $query = "SELECT * FROM post ORDER BY id DESC";
    $result = mysqli_query($link, $query);

    if (!$result) {
        die(mysqli_error($link));
    }

    $count = mysqli_num_rows($result);
    $articles = array();

    for($i = 0; $i < $count; $i++)
    {
        $row = mysqli_fetch_assoc($result);
        $articles[] = $row;
    }

    return $articles;
}

function articles_last($link)
{

    $query = "SELECT * FROM post ORDER BY id LIMIT 3";
    $result = mysqli_query($link, $query);

    if (!$result) {
        die(mysqli_error($link));
    }

    $count = mysqli_num_rows($result);
    $articles = array();

    for($i = 0; $i < $count; $i++)
    {
        $row = mysqli_fetch_assoc($result);
        $articles[] = $row;
    }

    return $articles;
}

function articles_get($link, $id_article)
{
    $query = "SELECT * FROM post WHERE id = %d";
    $query = sprintf($query, (int)$id_article);

    $result = mysqli_query($link, $query);

    if (!$result) {
        die(mysqli_error($link));
    }

    return mysqli_fetch_assoc($result);
}

function articles_new($link, $title, $date, $content)
{
    $title = trim($title);
    $content = trim($content);

    if ($title === '') {
        return false;
    }

     $query = "INSERT INTO post (title, date, content) 
               VALUES ('%s', '%s', '%s')";

     $query = sprintf($query,
         mysqli_real_escape_string($link, $title),
         mysqli_real_escape_string($link, $content),
         mysqli_real_escape_string($link, $date)
         );

     echo $query;

     $result = mysqli_query($link, $query);

    if (!$result) {
        die(mysqli_error($link));
    }

    return true;
}

function articles_edit($link, $id, $title, $date, $content)
{
    $title = trim($title);
    $content = trim($content);
    $date = trim($date);
    $id = (int)$id;

    if ($title == '') {
        return false;
    }

    $query = "UPDATE post SET title = '%s', content = '%s', date ='%s' WHERE id = '%d'";

    $query = sprintf(
        $query,
        mysqli_real_escape_string($link, $title),
        mysqli_real_escape_string($link, $content),
        mysqli_real_escape_string($link, $date),
        $id
    );

    $result = mysqli_query($link, $query);

    if (!$result) {
        die(mysqli_error($link));
    }

    return mysqli_affected_rows($link);
}

function articles_delete($link, $id)
{
    $id = (int)$id;

    if ($id == 0) {
        return false;
    }

    $query = sprintf("DELETE FROM post WHERE id='%d'", $id);
    $result = mysqli_query($link, $query);

    if (!$result) {
        die(mysqli_error($link));
    }

    return mysqli_affected_rows($link);
}

?>