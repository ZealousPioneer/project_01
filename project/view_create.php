<?php
$conn = mysqli_connect('localhost', 'root', 'wallabe', 'opentutorials');

$read = array(
  'id' => mysqli_real_escape_string($conn, $_POST['id']),
  'name' => mysqli_real_escape_string($conn, $_POST['name']),
  'information' => mysqli_real_escape_string($conn, $_POST['information'])
);
$sql = "
        INSERT INTO comment
          (name, information, example_id)
        VALUES
        (
          '{$read['name']}',
          '{$read['information']}',
          '{$read['id']}'
          )
        ";

$result = mysqli_query($conn, $sql);

if($result === false){
  error_log(mysqli_error($conn));
}else{
  header('Location: view.php?id='.$read['id']);
}


?>
