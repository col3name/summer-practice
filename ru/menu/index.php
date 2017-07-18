
//require_once($_SERVER['DOCUMENT_ROOT'] . '/template/include/base.php');
//require_once($_SERVER['DOCUMENT_ROOT'] . '/template/header.php');
//require_once($_SERVER['DOCUMENT_ROOT'] . '/template/include/menu.php');
//require_once($_SERVER['DOCUMENT_ROOT'] . '/template/footer.php');

<?



require_once($_SERVER['DOCUMENT_ROOT'] . '/template/include/base.php');

require_once($_SERVER['DOCUMENT_ROOT'] . '/component/database.php');
require_once($_SERVER['DOCUMENT_ROOT'] . '/models/Product.php');
require_once($_SERVER['DOCUMENT_ROOT'] . '/models/Category.php');

$link = getConnection(LANGUAGE_ID);
$product = product_all($link);
$productCategory = category_all($link);
//print_r($product);

include_once('views/several-categories.php');