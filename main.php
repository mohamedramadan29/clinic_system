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

                                    // START Items
                                    if ($dir == 'items' && $page == 'add') {
                                        include "items/add.php";
                                    } elseif ($dir == 'items' && $page == 'edit') {
                                        include "items/edit.php";
                                    } elseif ($dir == 'items' && $page == 'delete') {
                                        include 'items/delete.php';
                                    } elseif ($dir == 'items' && $page == 'report') {
                                        include "items/report.php";
                                    }

                                    // START Menus Options
                                    if ($dir == 'menus' && $page == 'add') {
                                        include "menus/add.php";
                                    } elseif ($dir == 'menus' && $page == 'edit') {
                                        include "menus/edit.php";
                                    } elseif ($dir == 'menus' && $page == 'delete') {
                                        include 'menus/delete.php';
                                    } elseif ($dir == 'menus' && $page == 'report') {
                                        include "menus/report.php";
                                    }
                                    // START Main Menu 
                                    if ($dir == 'main_menu' && $page == 'add') {
                                        include "main_menu/add.php";
                                    } elseif ($dir == 'main_menu' && $page == 'edit') {
                                        include "main_menu/edit.php";
                                    } elseif ($dir == 'main_menu' && $page == 'delete') {
                                        include 'main_menu/delete.php';
                                    } elseif ($dir == 'main_menu' && $page == 'report') {
                                        include "main_menu/report.php";
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