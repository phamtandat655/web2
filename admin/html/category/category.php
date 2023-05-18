<?php
// session_start();
// $useremail = $_SESSION['useremail'];
?>
<!DOCTYPE html>

<!-- =========================================================
* Sneat - Bootstrap 5 HTML Admin Template - Pro | v1.0.0
==============================================================

* Product Page: https://themeselection.com/products/sneat-bootstrap-html-admin-template/
* Created by: ThemeSelection
* License: You must have a valid license purchased in order to legally use the theme for your project.
* Copyright ThemeSelection (https://themeselection.com)

=========================================================
 -->
<!-- beautify ignore:start -->
<html
  lang="en"
  class="light-style layout-menu-fixed"
  dir="ltr"
  data-theme="theme-default"
  data-assets-path="../../assets/"
  data-template="vertical-menu-template-free"
>
  <head>
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0"
    />

    <title>Fluid - Layouts | Sneat - Bootstrap 5 HTML Admin Template - Pro</title>

    <meta name="description" content="" />

    <?php require_once("../template/header.php") ?>
  </head>

  <body>
    <!-- Layout wrapper -->
    <div class="layout-wrapper layout-content-navbar">
      <div class="layout-container">
        <!-- Menu -->
        <?php require_once("../template/sidebar.php") ?>

        <!-- Layout container -->
        <div class="layout-page">
          <!-- Navbar -->

          <nav
            class="layout-navbar container-fluid navbar navbar-expand-xl navbar-detached align-items-center bg-navbar-theme"
            id="layout-navbar"
          >
            <div class="layout-menu-toggle navbar-nav align-items-xl-center me-3 me-xl-0 d-xl-none">
              <a class="nav-item nav-link px-0 me-xl-4" href="javascript:void(0)">
                <i class="bx bx-menu bx-sm"></i>
              </a>
            </div>

            <div class="navbar-nav-right d-flex align-items-center" id="navbar-collapse">
              <ul class="navbar-nav flex-row align-items-center ms-auto">
                <!-- Add new brand -->
                <li class="nav-item lh-1 me-3">
                <a href="form_add_category.php">
                    <button class="btn btn-primary">Add new brand</button>
                  </a>
                </li>

                <!-- User -->
                <li class="nav-item navbar-dropdown dropdown-user dropdown">
                  <a class="nav-link dropdown-toggle hide-arrow" href="javascript:void(0);" data-bs-toggle="dropdown">
                    <div class="avatar avatar-online">
                      <img src="../../assets/img/avatars/cowboy.png" alt class="w-px-40 h-auto rounded-circle" />
                    </div>
                  </a>
                  <ul class="dropdown-menu dropdown-menu-end">
                    <li>
                      <a class="dropdown-item" href="#">
                        <div class="d-flex">
                          <div class="flex-shrink-0 me-3">
                            <div class="avatar avatar-online">
                              <img src="../../assets/img/avatars/cowboy.png" alt class="w-px-40 h-auto rounded-circle" />
                            </div>
                          </div>
                          <div class="flex-grow-1">
                            <span class="fw-semibold d-block"><?php echo $useremail; ?></span>
                            <small class="text-muted">Admin</small>
                          </div>
                        </div>
                      </a>
                    </li>
                    <li>
                      <div class="dropdown-divider"></div>
                    </li>
                    <li>
                      <a class="dropdown-item" href="#">
                        <i class="bx bx-user me-2"></i>
                        <span class="align-middle">My Profile</span>
                      </a>
                    </li>
                    <li>
                      <a class="dropdown-item" href="auth-login-basic.html">
                        <i class="bx bx-power-off me-2"></i>
                        <span class="align-middle">Log Out</span>
                      </a>
                    </li>
                  </ul>
                </li>
                <!--/ User -->
              </ul>
            </div>
          </nav>

          <!-- / Navbar -->

          <!-- Content wrapper -->
          <div class="content-wrapper">
            <!-- Content -->

            <div class="container-fluid flex-grow-1 container-p-y">
              <!-- Layout Demo -->
               <!-- Basic Bootstrap Table -->
               <div class="card">
                <!-- Message Receive -->
               <?php
               if (isset($_GET['message'])) {
                 if ($_GET['message'] == "Delete brand success!") {
                   echo '<div id="alert" class="alert alert-primary"><i class="bx bxs-like">   ' . urldecode($_GET['message']) . '</i></div>';
                 } else if ($_GET['message'] == "Can't delete brand!") {
                   echo '<div id="alert" class="alert alert-danger"><i class="bx bx-error-alt">   ' . urldecode($_GET['message']) . '</i></div>';
                 } else if ($_GET['message'] == "Add brand success!") {
                   echo '<div id="alert" class="alert alert-primary"><i class="bx bx-check-double">   ' . urldecode($_GET['message']) . '</i></div>';
                 } else if ($_GET['message'] == "Edit brand success!") {
                   echo '<div id="alert" class="alert alert-primary"><i class="bx bx-check-circle">   ' . urldecode($_GET['message']) . '</i></div>';
                 }
               }
               ?>
               <!-- End Message Receive -->

               <!-- Table brand -->
                <div class="table text-nowrap table-borderless">
                  <table class="table table-borderless table-hover" id="brand_table">
                    <thead>
                      <tr class="table-primary">
                        <th>ID</th>
                        <th class="text-center">Brand</th>
                        <th class="text-center">Quantity</th>
                        <th class="text-center">Actions</th>
                      </tr>
                    </thead>
                    <tbody class="table-border-bottom-0">
                    <?php
                    require("../../SQL/sql_admin.php");

                    $array_color = array("bg-label-primary", "bg-label-danger", "bg-label-success", "bg-label-secondary", "bg-label-warning", "bg-label-info", "bg-label-dark");

                    $result = mysqli_query($con, get_all_category());
                    while ($row = mysqli_fetch_array($result)) {
                      $num = rand(0, 6);

                      ?>
                                <tr>
                                  <td class="col-1"><strong><?= $row['id'] ?></strong></td>
                                  <td class="col-2 text-center"><a class="text-dark badge <?= $array_color[$num] ?> me-1" href="../phone/all_phone.php?category=<?= $row['id'] ?>">
                                    <?= $row['name'] ?> 
                                    </a>
                                    </ul>
                                  </td>
                                  <td class="col-1 text-center">
                                    <?= $row['quantity'] ?>
                                  </td>
                              

                            <!-- Dropdown button -->
                                  <td class="col-1 text-center">
                                    <div class="dropdown">
                                      <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                                        <i class="bx bx-dots-vertical-rounded"></i>
                                      </button>
                                      <div class="dropdown-menu">
                                        <a class="dropdown-item text-warning" href="form_edit_category.php?brandID=<?= $row["id"] ?>"
                                          ><i class="bx bx-edit-alt me-1"></i> Edit</a
                                        >
                                        <a class="dropdown-item text-danger" onclick="deleteBrand(<?= $row['id'] ?>,<?= $row['quantity'] ?>)"
                                          ><i class="bx bx-trash me-1"></i> Delete</a
                                        >
                                      </div>
                                    </div>
                                  </td>
                            <!-- End Dropdown button -->
                                </tr>
                      <?php }
                    mysqli_close($con);
                    ?>
                    </tbody>
                  </table>
                  <!-- End Table brand -->
                </div>
                
              </div>
              <!--/ Basic Bootstrap Table -->
              <!--/ Layout Demo -->
            </div>
            <!-- / Content -->



            <!-- Footer -->
            <footer class="content-footer footer bg-footer-theme">
              <div class="container-fluid d-flex flex-wrap justify-content-between py-2 flex-md-row flex-column">
                <div class="mb-2 mb-md-0">
                  ©
                  <script>
                    document.write(new Date().getFullYear());
                  </script>
                  , made with ❤️ by
                  <a href="https://themeselection.com" target="_blank" class="footer-link fw-bolder">ThemeSelection</a>
                </div>
                <div>
                  <a href="https://themeselection.com/license/" class="footer-link me-4" target="_blank">License</a>
                  <a href="https://themeselection.com/" target="_blank" class="footer-link me-4">More Themes</a>

                  <a
                    href="https://themeselection.com/demo/sneat-bootstrap-html-admin-template/documentation/"
                    target="_blank"
                    class="footer-link me-4"
                    >Documentation</a
                  >

                  <a
                    href="https://github.com/themeselection/sneat-html-admin-template-free/issues"
                    target="_blank"
                    class="footer-link me-4"
                    >Support</a
                  >
                </div>
              </div>
            </footer>
            <!-- / Footer -->

            <div class="content-backdrop fade"></div>
          </div>
          <!-- Content wrapper -->
        </div>
        <!-- / Layout page -->
      </div>

      <!-- Overlay -->
      <div class="layout-overlay layout-menu-toggle"></div>
    </div>
    <!-- / Layout wrapper -->

    

    <?php require_once("../template/tail.php") ?>
    <!-- Page JS -->

    <!-- Place this tag in your head or just before your close body tag. -->
    <script async defer src="https://buttons.github.io/buttons.js"></script>
    <script>

      $(document).ready(function () {
        $('#brand_table').DataTable({
          "info": false,
          "bLengthChange": true,
          "dom": '<"your-search-container"f><tr><"pagination justify-content-center mt-2"p>',
        });
      });
    </script>
  </body>
</html>