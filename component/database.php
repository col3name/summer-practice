<?

function getConnection($db_name)
{
    $mysqli = new mysqli('localhost', 'root', '', $db_name);
    if ($mysqli->connect_error) {
        die('Connect Error (' . $mysqli->connect_errno . ') ' . $mysqli->connect_error);
    }

    return $mysqli;
}
