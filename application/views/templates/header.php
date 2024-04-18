<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Note App</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js">
</head>
<body>
    <div class="container">
        <header class="d-flex flex-wrap justify-content-center py-3 mb-4 border-bottom">
        <a href="/" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto link-body-emphasis text-decoration-none">
            <svg class="bi me-2" width="40" height="32"><use xlink:href="#bootstrap"/></svg>
            <span class="fs-4">Note App</span>
        </a>

        <ul class="nav nav-pills">
            <li class="nav-item"><a href="<?php echo site_url('/'); ?>" class="nav-link <?php if($page === 'home') echo 'active' ?>">Home</a></li>
            <li class="nav-item"><a href="<?php echo site_url('main/about'); ?>" class="nav-link <?php if($page === 'about') echo 'active' ?>">About</a></li>
            <li class="nav-item"><a href="<?php echo site_url('note/index'); ?>" class="nav-link <?php if($page === 'note') echo 'active' ?>">Note</a></li>
        </ul>
        </header>
    </div>

