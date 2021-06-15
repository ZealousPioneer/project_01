<?php
$conn = mysqli_connect('localhost', 'root', 'wallabe', 'opentutorials');

$info = array(
  'name' => mysqli_real_escape_string($conn, $_POST['name']),
  'title' =>mysqli_real_escape_string($conn, $_POST['title']),
  'information' => mysqli_real_escape_string($conn, $_POST['information'])
);

$sql = "
        INSERT INTO example
          (name,title,created,information)
        VALUES
          (
            '{$info['name']}',
            '{$info['title']}',
            NOW(),
            '{$info['information']}'
            )
        ";

$result = mysqli_query($conn, $sql);

if($result === false){
  error_log(mysqli_error($conn));
}else{
  header('Location: index.php');
}
 ?>
