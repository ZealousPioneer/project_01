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
        <!-- // Basic multiple Column Form section start -->
        <section id="multiple-column-form">
          <div class="row match-height">
            <div class="col-12">
              <div class="card">
                <div class="card-header">
                  <h4 class="card-title">새 글 쓰기</h4>
                </div>
                <div class="card-content">
                  <div class="card-body">
                    <?php
                      $conn = mysqli_connect('localhost', 'root', 'wallabe', 'opentutorials');
                     ?>
                    <form action="create.php" class="form" method="post">
                      <div class="row">
                        <div class="col-md-2 col-12">
                          <div class="form-group">
                            <label for="first-name-column">이름</label>
                            <input type="text" name="name" class="form-control" placeholder=""
                              name="fname-column">
                          </div>
                        </div>
                        <div class="col-md col-12">
                          <div class="form-group">
                            <label for="last-name-column">제목</label>
                            <input type="text" name="title" class="form-control" placeholder=""
                              name="lname-column">
                          </div>
                        </div>
                        <div class="col-md-12 col-12">
                          <div class="form-group">

                            <label for="exampleFormControlTextarea1" class="form-label">내용</label>
                            <textarea class="form-control" name="information" rows="3"></textarea>
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
        </section>
        <!-- Table head options start -->
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
