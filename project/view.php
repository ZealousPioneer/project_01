<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>모두의 게시판</title>

    <link rel="stylesheet" href="assets/css/bootstrap.css">

    <link rel="stylesheet" href="assets/vendors/perfect-scrollbar/perfect-scrollbar.css">
    <link rel="stylesheet" href="assets/css/app.css">
    <link rel="shortcut icon" href="assets/images/favicon.svg" type="image/x-icon">
</head>

<body>
    <div id="app">
        <div id="sidebar" class='active'>
            <div class="sidebar-wrapper active">
                <div class="sidebar-header">
                    <img src="assets/images/logo.svg" alt="" srcset="">
                </div>
                <div class="sidebar-menu">
                    <ul class="menu">

                        <li class="sidebar-item active ">
                            <a href="/index.html" class='sidebar-link'>
                                <i data-feather="grid" width="20"></i>
                                <span>모두의 게시판</span>
                            </a>
                        </li>
                    </ul>
                </div>
                <button class="sidebar-toggler btn x"><i data-feather="x"></i></button>
            </div>
        </div>
        <div id="main">
          <?php
            $conn = mysqli_connect('localhost', 'root', 'wallabe', 'opentutorials');

            $filtered_id = mysqli_real_escape_string($conn, $_GET['id']);
            settype($filtered_id, 'integer');
            $sql = "SELECT * FROM example WHERE id = {$filtered_id}";
            $result = mysqli_query($conn, $sql);
            $row = mysqli_fetch_array($result);
              $script = array(
                'name' => htmlspecialchars($row['name']),
                'title' => htmlspecialchars($row['title']),
                'created' => htmlspecialchars($row['created']),
                'information' => htmlspecialchars($row['information'])
            );
           ?>
            <div class="main-content container-fluid">

                <div class="page-title">
                    <div class="row">
                        <div class="col-12 col-md-6">
                            <h3><?=$script['title']?></h3>
                            <p class="text-subtitle text-muted"><?=$script['name']?> <br /><?=$script['created']?></p>
                        </div>
                        <div class="col-12 col-md-6">
                            <nav aria-label="breadcrumb" class='breadcrumb-header text-right'>
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="index.php">Dashboard</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">모두의 게시판</li>
                                </ol>
                            </nav>
                        </div>
                    </div>

                </div>

                <section class="section">
                    <div class="row">
                        <div class="card">
                            <div class="card-body">
                                <p><?=$script['information']?></p>
                            </div>
                        </div>
                    </div>
                </section>
                <?php
                $conn = mysqli_connect('localhost', 'root', 'wallabe', 'opentutorials');
                $sql = "SELECT * FROM comment WHERE example_id = {$filtered_id}";
                $result = mysqli_query($conn, $sql);
                $count = mysqli_num_rows($result);
                 ?>
                <h2>댓글<?=$count?>개</h2>
                <?php
                while($row = mysqli_fetch_array($result)){
                  $insert = array(
                    'id' => htmlspecialchars($row['id']),
                    'name' => htmlspecialchars($row['name']),
                    'information' => htmlspecialchars($row['information']),
                  );
                  ?>

                  <div class="row">
                      <div class="card">
                          <div class="card-header">
                              <p><?=$insert['name']?></p>
                          </div>
                          <div class="card-body">
                              <p><?=$insert['information']?></p>
                          </div>
                      </div>
                  </div>
                  <?php
                }
                 ?>


                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">댓글 쓰기</h4>
                            </div>
                            <div class="card-content">
                                <div class="card-body">
                                    <form class="form" action="view_create.php" method="post">
                                        <input type="hidden" name="id" value="<?=$filtered_id?>">
                                        <div class="row">
                                            <div class="col-md-2 col-12">
                                                <div class="form-group">
                                                    <label for="first-name-column">이름</label>
                                                    <input name="name" type="text" id="first-name-column" class="form-control"
                                                        placeholder="" name="fname-column">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-12 col-12">
                                            <div class="form-group">

                                                <label for="exampleFormControlTextarea1" class="form-label">내용</label>
                                                <textarea name="information" class="form-control" id="exampleFormControlTextarea1"
                                                    rows="3"></textarea>
                                            </div>
                                        </div>
                                        <div class="col-12 d-flex justify-content-end">
                                            <button type="submit" class="btn btn-primary me-1 mb-1">쓰기</button>
                                            <button type="reset" class="btn btn-light-secondary me-1 mb-1">취소</button>
                                        </div>
                                </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    </div>
    <script src="assets/js/feather-icons/feather.min.js"></script>
    <script src="assets/vendors/perfect-scrollbar/perfect-scrollbar.min.js"></script>
    <script src="assets/js/app.js"></script>

    <script src="assets/js/main.js"></script>
</body>

</html>
