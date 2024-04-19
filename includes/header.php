<?php
    require_once 'db_connection.php';
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Online Bookstore</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <header>
        <nav>
            <ul>
                <?php if (!isset($_SESSION['logged_in'])): ?>
                    <li><a href="index.php">Home</a></li>
                <?php endif; ?>
                <?php if (!isset($_SESSION['role']) || $_SESSION['role'] !== 'admin'): ?>
                    <li><a href="browse_books.php">Browse Books</a></li>
                    <li><a href="cart.php">Cart</a></li>
                <?php else: ?>
                    <li><a href="admin_panel.php">Admin Panel</a></li>
                    <li><a href="add_book.php">Add Book</a></li>
                    <li><a href="add_admin.php">Add Admin</a></li>
                <?php endif; ?>
                <?php if (isset($_SESSION['role']) && $_SESSION['role']  == 'user'): ?>
                    <li><a href="myorders.php">My Orders</a></li>
                <?php endif;?>
                <?php if (!isset($_SESSION['logged_in'])): ?>
                    <li><a href="register.php">Register</a></li>
                    <li><a href="login.php">Login</a></li>
                <?php else: ?>
                    <li><a href="logout-process.php">Logout</a></li>
                <?php endif; ?>
            </ul>
        </nav>
    </header>
