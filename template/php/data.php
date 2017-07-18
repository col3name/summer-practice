<?

// Получить данные и запиать в массив

require_once('OurTeam.php');
require_once 'data.php';

$team = array();

$connection = mysqli_connect('localhost', 'root', '', 'claude_monet');
if (mysqli_connect_errno()) {
    die('Connect Error (' . $connection->connect_errno . ') ' . $connection->connect_error);
}

$query = "SELECT * FROM our_team";
$result = mysqli_query($connection, $query);

$row = mysqli_fetch_all($result);
//print_r($row);

//foreach ($row as $item) {
//    $ourTeam = new OurTeam($item);
//    $ourTeam->printPersont();
//    foreach ($item as $value){
//        print($value . '<br>');
//    }
//}

//
//$ourTeam = new OurTeam($getResult);
////print_r($ourTeam);
////$ourTeam->printPerson();
//foreach ($getResult as $row) {
//    echo '<ul>';
//    print_r($row);
////    foreach($row as $person)
////    {
////        echo '<li>';
////        print_r($person);
//////        print($person->name);
////        echo '</li>';
////    }
//    echo '</ul>';
//}
