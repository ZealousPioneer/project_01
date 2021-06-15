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

      <div class="main-content container-fluid">
        <div class="page-title">
          <div class="row">
            <div class="col-12 col-md-6 order-md-1 order-last">
              <h3>모두의 게시판</h3>
            </div>
            <div class="col-12 col-md-6 order-md-2 order-first">
              <nav aria-label="breadcrumb" class='breadcrumb-header'>
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="index.php">Dashboard</a></li>
                  <li class="breadcrumb-item active" aria-current="page">모두의 게시판</li>
                </ol>
              </nav>
            </div>
          </div>

        </div>
        <!-- Table head options start -->
        <div class="row" id="table-head">
          <div class="col-12">
            <div class="card">
                <!-- table head dark -->

              <div class="card-header" style="text-align: right;">
              <a href="write.php" class="btn icon icon-left btn-primary">
                <i data-feather="edit"></i>
                새 글 쓰기</a>
              </div>
                <div class="table-responsiv-e">
                  <table class="table mb-0">
                    <thead class="thead-dark">
                      <tr>
                        <th>NO</th>
                        <th>이름</th>
                        <th>제목</th>
                        <th>작성 시간</th>
                        <th></th>

                        <?php
                          $conn = mysqli_connect('localhost', 'root', 'wallabe', 'opentutorials');
                          $sql = "SELECT * FROM example";
                          $result = mysqli_query($conn, $sql);
                          while($row = mysqli_fetch_array($result)){
                            $filtered = array(
                              'id' => htmlspecialchars($row['id']),
                              'name' => htmlspecialchars($row['name']),
                              'title' => htmlspecialchars($row['title']),
                              'created' => htmlspecialchars($row['created'])
                            );
                            ?>
                            <tr>
                              <td><?=$filtered['id']?></td>
                              <td><?=$filtered['name']?></td>
                              <td><a href="view.php?id=<?=$filtered['id']?>"><?=$filtered['title']?></a></td>
                              <td><?=$filtered['created']?></td>
                              <td>
                                <a href="write_update.php?id=<?=$filtered['id']?>"><i class="badge-circle badge-circle-light-secondary font-medium-1" data-feather="edit"></i></a>
                                  <a href="delete.php?id=<?=$filtered['id']?>"><i class="badge-circle badge-circle-light-secondary font-medium-1" data-feather="trash"></i></a>
                              </td>
                            </tr>
                            <?php
                          }
                        ?>
                      </tr>
                    </thead>
                    <tbody>
                    </tbody>
                  </table>
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
