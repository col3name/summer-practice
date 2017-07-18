<?
    include_once($_SERVER['DOCUMENT_ROOT'] . '/template/include/base.php');

    require_once('../component/database.php');
    require_once('../models/articles.php');


    var_dump(LANGUAGE_ID);
    $link = getConnection(LANGUAGE_ID);

    if (isset($_GET['action'])) {
        $action = $_GET['action'];
    } else {
        $action = "";
    }

    if ($action === "add") {
        if (!empty($_POST)) {
            articles_new(
                $link,
                $_POST['title'],
                $_POST['content'],
                $_POST['date']
            );

            header("Location: index.php");
        }

        include($_SERVER['DOCUMENT_ROOT'] . "/en/blog/views/article-Admin.php");
    }
    elseif ($action === "edit")
    {
        if (!isset($_GET['id'])) {
            header("Location: index.php");
        }

        $id = (int)$_GET['id'];

        if (!empty($_POST) && $id > 0) {
            echo 'edit';
            articles_edit(
                $link,
                $id,
                $_POST['title'],
                $_POST['date'],
                $_POST['content']
            );

            header("Location: index.php");
        }

        $article = articles_get($link, $id);
        include($_SERVER['DOCUMENT_ROOT'] . "/en/blog/views/article-Admin.php");
    }
    elseif ($action === "delete")
    {
        $id = $_GET['id'];
        $article = articles_delete($link, $id);
        header("Location: index.php");
    }
    else
    {
        echo 'end';
        $articles = articles_all($link);
        include($_SERVER['DOCUMENT_ROOT'] . "/en/blog/views/articlesAdmin.php");
    }

?>