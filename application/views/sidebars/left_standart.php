<div class="menu-buttons">

      <a class="menu-button" href="/" title="Портфолио">П</a>
      <a class="menu-button" href="/blog" title="Блог">Б</a>

</div>

<div class="left-sidebar sb">

  <form class="" action="/search" name="searchingForm" method="post">
    <input type="text" name="query" placeholder="Найти" id="searching-query">
  </form>

  <div class="item">
    <div class="item-name">
      Категории
    </div>
    <div class="categories item-body">
      <ul>
        <?php

        $MAINBD = mysqli_connect(HOST, USER, PASS, DB) or die("Ошибка MySQL: " . mysql_error());

$query = "SELECT * FROM `categories`";
     $result = mysqli_query($MAINBD, $query);
     $cat= array();

     while ($categories = mysqli_fetch_assoc($result)) {
       $cat[] = $categories;
     }
     $data['categories'] = $cat;
     $catsnum = mysqli_fetch_array(mysqli_query($MAINBD , "SELECT COUNT(*) FROM `categories`"));
     $data['catsnum'] = $catsnum[0];
          $i = $data['catsnum'] - 1;

          while($i >= 0) {
            echo '<a href="/blog/cat/'.$data['categories'][$i]['URL'].'" title="'.$data['categories'][$i]['desc'].'"><li class="first ';
            if ($routes[3] == $data['categories'][$i]['URL']) echo "active";
            echo '">'.$data['categories'][$i]['name'].'</li></a>';
              $i--;
          }
        ?>
      </ul>
    </div>
  </div>
</div>
