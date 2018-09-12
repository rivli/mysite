<?php

class categories {


  public function getAll()
  {
    $cat= array();
					$MAINBD = mysqli_connect(HOST, USER, PASS, DB) or die("Ошибка MySQL: " . mysql_error());
					$query = "SELECT * FROM `categories`";
					$result = mysqli_query($MAINBD, $query);
					while ($categories = mysqli_fetch_assoc($result)) {
						$cat[] = $categories;
					}
					$catsnum = mysqli_fetch_array(mysqli_query($MAINBD , "SELECT COUNT(*) FROM `categories`"));
          return $cat;
  }

  public function getByURL($url)
  {
    $cat= array();
          $MAINBD = mysqli_connect(HOST, USER, PASS, DB) or die("Ошибка MySQL: " . mysql_error());
          $query = "SELECT * FROM `categories` WHERE `URL` = ".$url;
          $result = mysqli_fetch_assoc(mysqli_query($MAINBD, $query));
          return $result;
  }

}


class sbItem {
  public $name;
  public $body;
  public $nameClass;
  public $bodyClass;

  public function __construct($name, $body, $nameClass, $bodyClass) {
    $this->name = $name;
    $this->body = $body;
    $this->nameClass = $nameClass;
    $this->bodyClass = $bodyClass;
  }


  public function returnIt()
  {
    return '<div class="item">
      <div class="item-name '.$this->nameClass.'">
        '.$this->name.'
      </div>
      <div class="item-body '.$this->bodyClass.'">
        '.$this->body.'
      </div>
    </div>';
  }
}



/*$cats = new sbItem('Категории', '', '', 'categories');
$cats->body =  '<ul>';

          $i = $data['catsnum'] - 1;

          while($i >= 0) {
             $cats->body .=  '<a href="/blog/cat/'.$data['categories'][$i]['URL'].'" title="'.$data['categories'][$i]['desc'].'"><li class="first ';
            if ($routes[3] == $data['categories'][$i]['name'])  $cats->body .=  "active";
             $cats->body .=  '">'.$data['categories'][$i]['name'].'</li></a>';
              $i--;
          }

 $cats->body .=   '</ul>';

*/
