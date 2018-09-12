

  <?php if ($_SESSION['upost'] == 'admin') { ?>
    <div class="right-sidebar sb">
  <div class="item">
    <div class="item-name">
      Админ панель
    </div>
    <div class="categories item-body">
      <ul>
        <a href="/blog/addpost"><li>Добавить статью</li></a>
        <a href="/blog/addcat"><li>Добавить категорию</li></a>
          <a href="/blog/drafts"><li>Drafts</li></a>
          <a href="/blog/deleted"><li>Deleted</li></a>
        <a href="/blog/signout"><li>Выйти</li></a>
      </ul>
    </div>
  </div>
    </div>
  <?php } /* ?>


  <div class="right-sidebar sb">
  <form class="" action="/search" name="searchingForm" method="post">
    <input type="text" name="query" placeholder="Найти" id="searching-query">
  </form>

  <div class="item">
    <div class="item-name">
      Топ статей
    </div>
    <div class="item-body bg-inh">
<?php $TopArticles = TopArticles(3);

$i=COUNT($TopArticles);
if ($i == 0) {
  echo "No articles yet.";
} else {
  $i--;
  while ($i >= 0) {
    $row = $TopArticles[$i];

    echo '<div class="article-output mb-10">
    <img class="article-image" src="'.$row['poster'].'" width="100%">

    <div class="article-name"><a href="/blog/article/'.$row['id'].'" style="text-decoration:none;">'.$row['name'].'</a></div>
    </div>';
    $i--;
  }
}

 ?>
     </div>
  </div>

</div>
<?php */ ?>
