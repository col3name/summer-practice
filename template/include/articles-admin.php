<div class="admin-wrapper" style="min-width: 1000px;">
  <header
    style="text-align: center; text-transform:capitalize ; margin-bottom: 40px;padding: 20px 0; border-bottom: 1px solid #ff6975;">
    <ul>
      <li style="list-style-type: none">
        <a href="/en/blog/">посты</a>
      </li>
    </ul>
  </header>
  <a href="/admin/">Админ панель</a>
  <a href="index.php?action=add">Добавить пост</a>
  <table border="0" style="width: 100%;">
    <tr style="height: 40px;margin-bottom:10px; padding:20px 0 ; background: blanchedalmond">
      <th>№</th>
      <th>Дата</th>
      <th>ЗАГОЛОВОК</th>
      <th>КОНТЕНТ</th>
      <th></th>
      <th></th>
    </tr>
      <? foreach ($articles as $articleItem) { ?>
        <tr>
          <td><?= $articleItem['id'] ?></td>
          <td><?= $articleItem['date'] ?></td>
          <td><?= $articleItem['title'] ?></td>
          <td><?= $articleItem['content'] ?></td>
          <td>
            <a href="index.php?action=edit&id=<?= $articleItem['id'] ?>">редактировать</a>
          </td>
          <td>
            <a id="delete" href="index.php?action=delete&id=<?= $articleItem['id'] ?>">удалить</a>
          </td>
        </tr>
      <? } ?>
  </table>
  <script src="../js/ajax.js"></script>