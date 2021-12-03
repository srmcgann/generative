<?
  require('db.php');
  $sql = 'SELECT * FROM items';
  $res = mysqli_query($link, $sql);
  $row = mysqli_fetch_assoc($res);
  for($i=50; $i--;){
    $sql = "INSERT INTO items (title, description, address, userID, image) VALUES(\"{$row['title']}\",\"{$row['description']}\",\"{$row['address']}\",{$row['userID']},\"{$row['image']}\")";
    mysqli_query($link, $sql);
  }
?>
