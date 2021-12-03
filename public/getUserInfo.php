<?
  require('db.php');
  $data = json_decode(file_get_contents('php://input'));
  $userID = mysqli_real_escape_string($link, $data->{'userID'});
  $sql='SELECT * FROM users WHERE id = ' . $userID;
  if($res = mysqli_query($link, $sql)){
    $ar = [];
    $row=mysqli_fetch_assoc($res);
    $ar['name'] = $row['name'];
    $ar['avatar'] = $row['avatar'];
    $ar['joined'] = $row['joined'];
    $ar['id'] = $row['id'];
    $sql = 'SELECT id FROM items WHERE userID = ' . $userID;
    $res = mysqli_query($link, $sql);
    $numItems = mysqli_num_rows($res);
    $ar['numItems'] = $numItems;
    echo json_encode([1, $ar]);
    die();
  }
  echo json_encode([0]);
  
?>
