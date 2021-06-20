<!DOCTYPE html>
<html lang="en">
<head>
    <title>Sistem Informasi</title>
    <link rel="stylesheet" href="<?php echo ASSET; ?>css/style.css">
</head>
    <body>
        <main>
            <header>
                <img src="<?php echo ASSET; ?>images/logo3.png" alt="(IMG)">
            </header>

            <nav>
                <ul>
                <li>
                        <a href="index.php" class="active">Dashboard</a>
                    </li>
                    <li>
                        <a href="index.php?page=category_tampil">Category</a>
                    </li>
                    <li>
                        <a href="index.php?page=post_tampil">Post</a>
                    </li>
                    <li>
                        <a href="index.php?page=foto_tampil">Photo</a>
                    </li>
                    <li>
                        <a href="index.php?page=album_tampil">Album</a>
                    </li>
                    <li>
                        <a href="login_logout.php">Logout</a>
                    </li>
                </ul>
        </nav>

        <section>
            <?php
                if (isset($_GET['page'])){
                    include $_GET['page'] . ".php";
                } else{
                    include "main_dashboard.php";
                }
            ?>
        </section>


    </main>
</body>
</html>