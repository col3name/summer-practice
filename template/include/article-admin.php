<h1>Мой Первый Блог</h1>
<div>
  <form id="form" method="post" action="index.php?action=<?= $_GET['action'] ?>&id=<?= $_GET['id'] ?>">
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <label> Название <input type="text" name="title" value="<?= $article['title'] ?>" class="form-item" autofocus
                                  required> </label>
        </div>
        <div class="col-md-6">
          <label> Дата <input type="date" name="date" value="<?= $article['date'] ?>" class="form-item"
                              required></label>
        </div>
        <div class="col-md-12">
          <label> Содержимое| <textarea class="form-item" name="content" required><?= $article['content'] ?></textarea>
          </label>
        </div>
      </div>
    </div>
    <input id="form-btn" type="submit" placeholder="Cохранить" class="btn">
  </form>
  <a href="/admin/">назад</a>
  <script src="/js/ajax.js"></script>
</div>