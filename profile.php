<?php
session_start();
include "config.inc.php";
include "connect.inc.php";
include "session.inc.php";
include "user.inc.php";
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta http-equiv='cache-control' content='no-cache'>
    <meta http-equiv='expires' content='0'>
    <meta http-equiv='pragma' content='no-cache'>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />

    <!-- Favicon -->
    <link rel="icon" href="vendor/assets/img/brand/favicon.png" type="image/png">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Kanit:wght@200;300;400&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.min.css" >
    <link rel="stylesheet" href="vendor/assets/vendor/nucleo/css/nucleo.css" type="text/css">
    <link rel="stylesheet" href="vendor/assets/vendor/@fortawesome/fontawesome-free/css/all.min.css" type="text/css">
    <link rel="stylesheet" href="node_modules/@fortawesome/fontawesome-free/css/all.css">
    <link rel="stylesheet" href="vendor/assets/css/argon.css?v=1.2.0" type="text/css">
    <link rel="stylesheet" href="vendor/assets/custom/1.0.1/css/style.css?v=1.2.0" type="text/css">
    <link rel="stylesheet" href="node_modules/preload.js/dist/css/preload.css">

    <title>Hit the Desk</title>
  </head>
  <body>

    <div class="dn">
      <input type="hidden" name="txtUid" id="txtUid" value="<?php echo $uid; ?>">
    </div>

    <div class="header">
      <!-- Main content -->
      <div class="main-content" id="panel">
        <!-- Topnav -->
        <nav class="navbar navbar-top fixed-top navbar-expand navbar-dark bg-primary border-bottom">
          <div class="container">
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <a class="mr-3 pl-2" href="./?uid=<?php echo $uid; ?>">
                <i class="fas fa-home text-white" style="font-size: 1.3em;"></i>
              </a>

              <!-- Search form -->
              <form class="navbar-search navbar-search-light form-inline mr-sm-3" id="navbar-search-main">
                <div class="form-group mb-0">
                  <div class="input-group input-group-alternative input-group-merge">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="fas fa-search"></i></span>
                    </div>
                    <input class="form-control th" placeholder="ค้นหาสินค้า / ร้านค้า / ผู้ขาย" type="text">
                  </div>
                </div>
                <button type="button" class="close" data-action="search-close" data-target="#navbar-search-main" aria-label="Close">
                  <span aria-hidden="true">×</span>
                </button>
              </form>
              <!-- Navbar links -->
              <ul class="navbar-nav align-items-center  ml-md-auto ">
                <li class="nav-item d-none">
                  <!-- Sidenav toggler -->
                  <div class="pr-3 sidenav-toggler sidenav-toggler-dark" data-action="sidenav-pin" data-target="#sidenav-main">
                    <div class="sidenav-toggler-inner">
                      <i class="sidenav-toggler-line"></i>
                      <i class="sidenav-toggler-line"></i>
                      <i class="sidenav-toggler-line"></i>
                    </div>
                  </div>
                </li>
                <li class="nav-item d-sm-none">
                  <a class="nav-link" href="#" data-action="search-show" data-target="#navbar-search-main">
                    <i class="ni ni-zoom-split-in"></i>
                  </a>
                </li>
                <li class="nav-item dropdown">
                  <a class="nav-link" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="ni ni-bell-55"></i>
                  </a>
                  <div class="dropdown-menu dropdown-menu-xl  dropdown-menu-right  py-0 overflow-hidden">
                    <!-- Dropdown header -->
                    <div class="px-3 py-3">
                      <h6 class="text-sm text-muted m-0">You have <strong class="text-primary">13</strong> notifications.</h6>
                    </div>
                    <!-- List group -->
                    <div class="list-group list-group-flush">
                      <a href="#!" class="list-group-item list-group-item-action">
                        <div class="row align-items-center">
                          <div class="col-auto">
                            <!-- Avatar -->
                            <img alt="Image placeholder" src="vendor/assets/img/theme/team-1.jpg" class="avatar rounded-circle">
                          </div>
                          <div class="col ml--2">
                            <div class="d-flex justify-content-between align-items-center">
                              <div>
                                <h4 class="mb-0 text-sm">John Snow</h4>
                              </div>
                              <div class="text-right text-muted">
                                <small>2 hrs ago</small>
                              </div>
                            </div>
                            <p class="text-sm mb-0">Let's meet at Starbucks at 11:30. Wdyt?</p>
                          </div>
                        </div>
                      </a>
                      <a href="#!" class="list-group-item list-group-item-action">
                        <div class="row align-items-center">
                          <div class="col-auto">
                            <!-- Avatar -->
                            <img alt="Image placeholder" src="vendor/assets/img/theme/team-2.jpg" class="avatar rounded-circle">
                          </div>
                          <div class="col ml--2">
                            <div class="d-flex justify-content-between align-items-center">
                              <div>
                                <h4 class="mb-0 text-sm">John Snow</h4>
                              </div>
                              <div class="text-right text-muted">
                                <small>3 hrs ago</small>
                              </div>
                            </div>
                            <p class="text-sm mb-0">A new issue has been reported for Argon.</p>
                          </div>
                        </div>
                      </a>
                      <a href="#!" class="list-group-item list-group-item-action">
                        <div class="row align-items-center">
                          <div class="col-auto">
                            <!-- Avatar -->
                            <img alt="Image placeholder" src="vendor/assets/img/theme/team-3.jpg" class="avatar rounded-circle">
                          </div>
                          <div class="col ml--2">
                            <div class="d-flex justify-content-between align-items-center">
                              <div>
                                <h4 class="mb-0 text-sm">John Snow</h4>
                              </div>
                              <div class="text-right text-muted">
                                <small>5 hrs ago</small>
                              </div>
                            </div>
                            <p class="text-sm mb-0">Your posts have been liked a lot.</p>
                          </div>
                        </div>
                      </a>
                      <a href="#!" class="list-group-item list-group-item-action">
                        <div class="row align-items-center">
                          <div class="col-auto">
                            <!-- Avatar -->
                            <img alt="Image placeholder" src="vendor/assets/img/theme/team-4.jpg" class="avatar rounded-circle">
                          </div>
                          <div class="col ml--2">
                            <div class="d-flex justify-content-between align-items-center">
                              <div>
                                <h4 class="mb-0 text-sm">John Snow</h4>
                              </div>
                              <div class="text-right text-muted">
                                <small>2 hrs ago</small>
                              </div>
                            </div>
                            <p class="text-sm mb-0">Let's meet at Starbucks at 11:30. Wdyt?</p>
                          </div>
                        </div>
                      </a>
                      <a href="#!" class="list-group-item list-group-item-action">
                        <div class="row align-items-center">
                          <div class="col-auto">
                            <!-- Avatar -->
                            <img alt="Image placeholder" src="vendor/assets/img/theme/team-5.jpg" class="avatar rounded-circle">
                          </div>
                          <div class="col ml--2">
                            <div class="d-flex justify-content-between align-items-center">
                              <div>
                                <h4 class="mb-0 text-sm">John Snow</h4>
                              </div>
                              <div class="text-right text-muted">
                                <small>3 hrs ago</small>
                              </div>
                            </div>
                            <p class="text-sm mb-0">A new issue has been reported for Argon.</p>
                          </div>
                        </div>
                      </a>
                    </div>
                    <!-- View all -->
                    <a href="#!" class="dropdown-item text-center text-primary font-weight-bold py-3">View all</a>
                  </div>
                </li>
              </ul>
              <ul class="navbar-nav align-items-center  ml-auto ml-md-0 ">
                <li class="nav-item dropdown">
                  <a class="nav-link pr-0" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <div class="media align-items-center">
                      <span class="avatar avatar-sm rounded-circle">
                        <img alt="Image placeholder" src="vendor/assets/img/theme/team-4.jpg">
                      </span>
                      <div class="media-body  ml-2  d-none d-lg-block">
                        <span class="mb-0 text-sm  font-weight-bold"><?php echo $userData['fullname']; ?></span>
                      </div>
                    </div>
                  </a>
                  <div class="dropdown-menu  dropdown-menu-right ">
                    <div class="dropdown-header noti-title">
                      <h6 class="text-overflow m-0">สวัสดี</h6>
                    </div>
                    <a href="profile?uid=<?php echo $uid; ?>" class="dropdown-item">
                      <i class="ni ni-single-02"></i>
                      <span>โปรไฟล์</span>
                    </a>
                    <a href="settings?uid=<?php echo $uid; ?>" class="dropdown-item">
                      <i class="ni ni-settings-gear-65"></i>
                      <span>ตั้งค่า</span>
                    </a>
                    <a href="activities?uid=<?php echo $uid; ?>" class="dropdown-item">
                      <i class="ni ni-calendar-grid-58"></i>
                      <span>กิจกรรม</span>
                    </a>
                    <div class="dropdown-divider"></div>
                    <a href="Javascript:user.logout()" class="dropdown-item">
                      <i class="ni ni-user-run"></i>
                      <span>ออกจากระบบ</span>
                    </a>
                  </div>
                </li>
              </ul>
            </div>
          </div>
        </nav>

        <div class="container mt-7">
          <div class="row">
            <div class="col-12 col-sm-6 d-none d-sm-block">
              <div class="card mb-3">
                <div class="card-header">
                  <h3 class="th400 mb-0">ข้อมูลส่วนตัว</h3>
                </div>
                <div class="card-body p-3">

                </div>
              </div>
              <!-- .card -->

              <div class="card mb-3">
                <div class="card-header">
                  <h3 class="th400 mb-0">ร้านขายของ</h3>
                </div>
                <div class="card-body p-3">

                </div>
              </div>
              <!-- .card -->

              <div class="card mb-3">
                <div class="card-header">
                  <h3 class="th400 mb-0">รูปภาพ</h3>
                </div>
                <div class="card-body p-3">

                </div>
              </div>
              <!-- .card -->

              <div class="card mb-3">
                <div class="card-header">
                  <h3 class="th400 mb-0">เพื่อน</h3>
                </div>
                <div class="card-body p-3">

                </div>
              </div>
              <!-- .card -->

            </div>

            <div class="col-12 col-sm-6">
              <div class="pb-3">
                <button type="button" class="btn btn-gray"><img src="./img/pencil.png" alt="" style="width: 20px;"> เขียนบทความ</button>
              </div>
              <div class="card mb-3">
                <div class="card-body p-3">
                  <div class="row">
                    <div class="col-12">
                      <a class="nav-link pr-0" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <div class="media align-items-center">
                          <span class="avatar avatar-sm rounded-circle">
                            <img alt="Image placeholder" src="vendor/assets/img/theme/team-4.jpg">
                          </span>
                          <div class="media-body  ml-2  d-none d-lg-block">
                            <span class="mb-0 text-sm  font-weight-bold"><?php echo $userData['fullname']; ?></span>
                          </div>
                        </div>
                      </a>
                    </div>
                    <div class="col-9">

                    </div>
                  </div>
                </div>
                <div class="card-body pl-3 pr-3 pt-0 pb-0">
                  <textarea name="txtMessage" id="txtMessage" rows="8" cols="80" style="font-size: 1.5em;">ฝากร้านหรือสินค้าที่นี่ได้เลย</textarea>
                </div>
                <div class="card-body p-3">
                  <div class="row">
                    <div class="col-5 th text-left pr-0">
                      <img src="./img/photo.png" alt="" style="width: 20px;"> อัพโหลดรูป
                    </div>
                    <div class="col-4 th text-left pl-0 pr-0">
                      <img src="./img/map.png" alt="" style="width: 20px;"> ใส่แผนที่
                    </div>
                    <div class="col-2 offset-1 th text-right">
                      <ul class="navbar-nav align-items-center  ml-auto ml-md-0 ">
                        <li class="nav-item dropdown pt-0">
                          <a class="nav-link pr-0" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <div class="media align-items-right">
                              <img src="./img/menu.png" alt="" style="width: 20px;">
                            </div>
                          </a>
                          <div class="dropdown-menu  dropdown-menu-right ">
                            <a href="profile?uid=<?php echo $uid; ?>" class="dropdown-item th">
                              <i class="ni ni-single-02"></i>
                              <span>โปรไฟล์</span>
                            </a>
                            <a href="settings?uid=<?php echo $uid; ?>" class="dropdown-item th">
                              <i class="ni ni-settings-gear-65"></i>
                              <span>ตั้งค่า</span>
                            </a>
                            <a href="activities?uid=<?php echo $uid; ?>" class="dropdown-item th">
                              <i class="ni ni-calendar-grid-58"></i>
                              <span>กิจกรรม</span>
                            </a>
                            <div class="dropdown-divider"></div>
                            <a href="Javascript:user.logout()" class="dropdown-item">
                              <i class="ni ni-user-run"></i>
                              <span>ออกจากระบบ</span>
                            </a>
                          </div>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>

              <div class="card mb-3">
                <div class="card-body p-3">
                  <div class="row">
                    <div class="col-10">
                      <a class="nav-link pr-0" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <div class="media align-items-center">
                          <span class="avatar avatar-sm rounded-circle">
                            <img alt="Image placeholder" src="vendor/assets/img/theme/team-4.jpg">
                          </span>
                          <div class="media-body  ml-2">
                            <span class="mb-0 text-sm  font-weight-bold">John Snow</span>
                            <div class="fx08">
                              asd
                            </div>
                          </div>
                        </div>
                      </a>
                    </div>
                    <div class="col-2">

                    </div>
                  </div>
                </div>
              </div>

              <div class="card mb-3">
                <div class="card-body p-3">
                  <div class="row">
                    <div class="col-10">
                      <a class="nav-link pr-0" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <div class="media align-items-center">
                          <span class="avatar avatar-sm rounded-circle">
                            <img alt="Image placeholder" src="vendor/assets/img/theme/team-4.jpg">
                          </span>
                          <div class="media-body  ml-2">
                            <span class="mb-0 text-sm  font-weight-bold">John Snow</span>
                            <div class="fx08">
                              asd
                            </div>
                          </div>
                        </div>
                      </a>
                    </div>
                    <div class="col-2">

                    </div>
                  </div>
                </div>
              </div>

              <div class="card mb-3">
                <div class="card-body p-3">
                  <div class="row">
                    <div class="col-10">
                      <a class="nav-link pr-0" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <div class="media align-items-center">
                          <span class="avatar avatar-sm rounded-circle">
                            <img alt="Image placeholder" src="vendor/assets/img/theme/team-4.jpg">
                          </span>
                          <div class="media-body  ml-2">
                            <span class="mb-0 text-sm  font-weight-bold">John Snow</span>
                            <div class="fx08">
                              asd
                            </div>
                          </div>
                        </div>
                      </a>
                    </div>
                    <div class="col-2">

                    </div>
                  </div>
                </div>
              </div>

            </div>

          </div>
        </div>

      </div>



    </div>
    <!-- .header -->


    <!-- Core -->
    <!-- <script src="node_modules/jquery/dist/jquery.min.js"></script>
    <script src="node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script> -->
    <script src="vendor/assets/vendor/jquery/dist/jquery.min.js"></script>
    <script src="vendor/assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <script src="vendor/assets/vendor/js-cookie/js.cookie.js"></script>
    <script src="vendor/assets/vendor/jquery.scrollbar/jquery.scrollbar.min.js"></script>
    <script src="vendor/assets/vendor/jquery-scroll-lock/dist/jquery-scrollLock.min.js"></script>
    <script src="node_modules/ckeditor_lite/ckeditor.js"></script>
    <script src="node_modules/preload.js/dist/js/preload.js"></script>
    <!-- Argon JS -->
    <script src="vendor/assets/js/argon.js?v=1.2.0"></script>
    <script src="vendor/assets/custom/1.0.1/js/config.js?v=1.0.1"></script>
    <script src="vendor/assets/custom/1.0.1/js/script.js?v=1.0.1"></script>
    <script src="vendor/assets/custom/1.0.1/js/user.js?v=1.0.1"></script>

    <script type="text/javascript">
      var msg  = CKEDITOR.replace( 'txtMessage', { height: '150px' });
      $(document).ready(function(){
        setTimeout(function(){
          $('#cke_1_top').hide()
          $('.cke_chrome').css('border-width', '1px 0px 1px 0px')
          $('.cke_chrome').css('border-color', 'rgb(231, 231, 231)')
          preload.hide()
        }, 1000)
      })

      $(function(){

      })
    </script>
  </body>
</html>
