<?php
ob_start();
$pagetitle = 'الرئيسية';
session_start();
include 'init.php';
?>
<div id="pcoded" class="pcoded">
    <div class="pcoded-overlay-box"></div>
    <div class="pcoded-container navbar-wrapper">
        <?php include $tem . "top_navbar.php"; ?>
        <!-- Sidebar inner chat end-->
        <div class="pcoded-main-container">
            <div class="pcoded-wrapper">
                <?php include $tem . "navbar.php"; ?>
                <div class="pcoded-content">
                    <div class="pcoded-inner-content">
                        <div class="main-body">
                            <div class="page-wrapper">
                                <div class="page-body">
                                    <?php
                                    $page = '';
                                    if (isset($_GET['page']) && isset($_GET['dir'])) {
                                        $page = $_GET['page'];
                                        $dir = $_GET['dir'];
                                    } else {
                                        $page = 'manage';
                                    }
                                    // start Website Routes 
                                    // STRAT DASHBAORD
                                    if ($dir == 'dashboard' && $page == 'dashboard') {
                                        include 'index.php';
                                    }
                                    // END DASHBAORD
                                    // START Category
                                    if ($dir == 'categories' && $page == 'add') {
                                        include "categories/add.php";
                                    } elseif ($dir == 'categories' && $page == 'edit') {
                                        include "categories/edit.php";
                                    } elseif ($dir == 'categories' && $page == 'delete') {
                                        include 'categories/delete.php';
                                    } elseif ($dir == 'categories' && $page == 'report') {
                                        include "categories/report.php";
                                    }
                                    ?>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php
    include $tem . "footer.php";
    ?>