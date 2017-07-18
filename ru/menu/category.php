<?

include_once($_SERVER['DOCUMENT_ROOT'] . '/template/include/base.php');

require_once($_SERVER['DOCUMENT_ROOT'] . '/component/database.php');
require_once($_SERVER['DOCUMENT_ROOT'] . '/models/Product.php');
require_once($_SERVER['DOCUMENT_ROOT'] . '/models/Category.php');

$link = getConnection(LANGUAGE_ID);
$productCategory = category_get($link, $_GET['id']);

include_once('views/category.php');
?>