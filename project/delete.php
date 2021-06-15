<?php
$conn = mysqli_connect('localhost', 'root', 'wallabe', 'opentutorials');

settype($_GET['id'], 'integer');
$filtered_id = array(
  'id' => mysqli_real_escape_string($conn, $_GET['id'])
);

$sql =
      "DELETE FROM example
        WHERE id = {$filtered_id['id']}
        ";

$result = mysqli_query($conn, $sql);

if($result === false){
  error_log(mysqli_error($conn));
}else{
  header('Location: index.php');
}
 ?>
