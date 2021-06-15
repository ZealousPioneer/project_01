<?php
$conn = mysqli_connect('localhost', 'root', 'wallabe', 'opentutorials');

settype($_POST['id'],'integer');
$filtered = array(
  'id' => mysqli_real_escape_string($conn, $_POST['id']),
  'name' => mysqli_real_escape_string($conn, $_POST['name']),
  'title' => mysqli_real_escape_string($conn, $_POST['title']),
  'information' => mysqli_real_escape_string($conn, $_POST['information'])
);
$sql = "
        UPDATE example
          SET
        name = '{$filtered['name']}',
        title = '{$filtered['title']}',
        information = '{$filtered['information']}'
        WHERE
          id = '{$filtered['id']}'
        ";

$result = mysqli_query($conn, $sql);

if($result === false){
  error_log(mysqli_error($conn));
} else {
  header('Location: index.php');
}
 ?>
