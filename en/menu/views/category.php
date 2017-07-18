<?


//include_once($_SERVER['DOCUMENT_ROOT'] . '/template/include/base.php');
include_once($_SERVER['DOCUMENT_ROOT'] . '/template/include/base.php');

require_once($_SERVER['DOCUMENT_ROOT'] . '/component/database.php');
require_once($_SERVER['DOCUMENT_ROOT'] . '/models/Product.php');

//$link = getConnection(LANGUAGE_ID);
//$product = getProductListByCategory($link, $_GET['id']);

//print_r($product);
include_once($_SERVER['DOCUMENT_ROOT'] . '/template/header.php');
include_once($_SERVER['DOCUMENT_ROOT'] . '/template/include/category.php');
include_once($_SERVER['DOCUMENT_ROOT'] . '/template/footer.php');