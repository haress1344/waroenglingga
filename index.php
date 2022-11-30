<?php

require_once("controller/ViewController.php");

if (isset($_GET['page']) && isset($_GET['aksi'])) {

    session_start();

    $page = $_GET['page']; // Berisi nama page
    $aksi = $_GET['aksi']; // Aksi Dari setiap page

    // require_once akan Dirubah Saat Modul 2
    if ($page == "index") {
        $view = new ViewController();
        if ($aksi == 'view') {
            $view->index();
        } else {
            echo "Method Not Found";
        }
    } else {
        echo "Page Not Found";
    }
} else {
    header("location: index.php?page=index&aksi=view"); //Jangan ada spasi habis location
}
