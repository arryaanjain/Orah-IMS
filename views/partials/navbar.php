<?php
    session_start();
    if(!isset($_SESSION['username'])) {
        header('location: LoginRegisterNew/login.php');
        exit();
    }
    require 'head.php';
?>
<nav class="navbar navbar-expand-lg bg-body-tertiary" data-bs-theme="dark">
    <div class="container-fluid">
        <a class="navbar-brand" href="index.php">Orah</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="index.php">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="views/add.php">Add New Product</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="views/order.php">Order Book</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="views/sales.php">Sales Book</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="views/rm_purchase.autocomplete/index.php">Raw Material Purchase</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="views/rm-master.php">Raw Material Master</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="views/records.php">Records</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Welcome, <?=$_SESSION['username']?></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="LoginRegisterNew/logout.php">Logout</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
</body>
</html>
