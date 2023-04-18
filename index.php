<?php
// index.php

// Start session
session_start();

// Include database connection
require_once('config/database.php');

// Include functions
require_once('includes/functions.php');

// Get current page
$page = isset($_GET['page']) ? $_GET['page'] : 'daftar-mobil';

// Set allowed pages
$allowedPages = array('daftar-mobil', 'tambah-mobil', 'edit-mobil');

// Check if page is allowed
if (!in_array($page, $allowedPages)) {
    header('Location: 404.php');
    exit();
}

// Include header
require_once('templates/header.php');

// Include sidebar
require_once('templates/sidebar.php');

// Include footer
require_once('templates/footer.php');
