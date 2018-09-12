  <?php

  $left_sb_name = 'standart';
  $right_sb_name = 'standart';
   ?>

<div id="wrapper">

  <div id="page">
<?php
$i=COUNT($data['articles']);
if ($i == 0) {
  echo "No articles yet.";
} else {
  $i--;
  while ($i >= 0) {
    $row = $data['articles'][$i];

    echo '<div class="article-output">

    <div class="name-and-desc">
    <div class="article-name"><a href="/blog/article/'.$row['id'].'" style="text-decoration:none;">'.$row['name'].'</a></div>
    <div class="artcile-name">'.$row['short_desc'].'</div>
    </div>

    <a href="/blog/article/'.$row['id'].'"><div class="lil-poster" style="background: url('. $row['poster'] .');background-position: center center;
    background-repeat: no-repeat; background-size: cover;"></div></a>

    </div>';

    //<img class="article-image" src="'.$row['poster'].'" width="100%" style="">
    $i--;
  }
}
?>
  <br class="clearfix" />
  </div>
</div>
