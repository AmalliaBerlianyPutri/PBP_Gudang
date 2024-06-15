<?php
include "../config/koneksi.php";
?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Material Dash</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="../assets/vendors/mdi/css/materialdesignicons.min.css" />
    <link rel="stylesheet" href="../assets/vendors/css/vendor.bundle.base.css" />
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <!-- End plugin css for this page -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="../assets/css/demo/style.css" />
    <!-- End layout styles -->
    <link rel="shortcut icon" href="../assets/images/favicon.png" />
    <style>
        body {
            background-image: url("bg.jpg");
            /* Ganti 'path_to_your_image.jpg' dengan path gambar latar belakang Anda */
            background-size: cover;
            background-position: center;
            height: 100vh;
        }
    </style>
</head>

<body>
    <script src="../assets/js/preloader.js"></script>
    <div class="body-wrapper">
        <div class="main-wrapper">
            <div class="page-wrapper full-page-wrapper d-flex align-items-center justify-content-center">
                <main class="auth-page">
                    <div class="mdc-layout-grid">
                        <div class="mdc-layout-grid__inner">
                            <div class="stretch-card mdc-layout-grid__cell--span-4-desktop mdc-layout-grid__cell--span-1-tablet"></div>
                            <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-4-desktop mdc-layout-grid__cell--span-6-tablet">
                                <div class="mdc-card">
                                    <form action="aksi_login.php" method="POST">
                                        <div class="mdc-layout-grid">
                                            <div class="mdc-layout-grid__inner">
                                                <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-12">
                                                    <div class="mdc-text-field w-100">
                                                        <input class="mdc-text-field__input" id="text-field-hero-input" name="username" />
                                                        <div class="mdc-line-ripple"></div>
                                                        <label for="text-field-hero-input" class="mdc-floating-label">Username</label>
                                                    </div>
                                                </div>
                                                <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-12">
                                                    <div class="mdc-text-field w-100">
                                                        <input class="mdc-text-field__input" type="password" id="text-field-hero-input" name="password" />
                                                        <div class="mdc-line-ripple"></div>
                                                        <label for="text-field-hero-input" class="mdc-floating-label">Password</label>
                                                    </div>
                                                </div>
                                                <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-12">
                                                    <button class="mdc-button mdc-button--raised w-100" type="submit" name="login">
                                                        Login
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <div class="stretch-card mdc-layout-grid__cell--span-4-desktop mdc-layout-grid__cell--span-1-tablet"></div>
                        </div>
                    </div>
                </main>
            </div>
        </div>
    </div>
    <!-- plugins:js -->
    <script src="../assets/vendors/js/vendor.bundle.base.js"></script>
    <!-- endinject -->
    <!-- Plugin js for this page-->
    <!-- End plugin js for this page-->
    <!-- inject:js -->
    <script src="../assets/js/material.js"></script>
    <script src="../assets/js/misc.js"></script>
    <!-- endinject -->
    <!-- Custom js for this page-->
    <!-- End custom js for this page-->
</body>


</html>