<a href="/admin/">Панель администратора</a>
<h1>Первый Блог</h1>
<? foreach ($article as $articlesItem): ?>
  <div class="article">
    <h3>
      <a href="article.php?id=<?= $articlesItem['id'] ?>"><?= $articlesItem['title'] ?></a>
    </h3>
    <em>0пу6ликовано: <?= $articlesItem['date'] ?></em>
  </div>
<?php endforeach ?>