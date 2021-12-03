<?
  require('db.php');
  $sql = 'SELECT * FROM items ORDER BY date DESC';
  $res = mysqli_query($link, $sql);
  $ar = [];
  for($i = 0; $i < mysqli_num_rows($res); ++$i){
    $ar[] = mysqli_fetch_assoc($res);
  }
  echo json_encode($ar);

?>
