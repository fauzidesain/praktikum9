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
                        <a href="index.php" class="active">Home</a>
                    </li>
                    <li>
                        <a href="index.php?page=login_form">Login</a>
                    </li>
                </ul>
        </nav>

        <section>
            <?php
                if (isset($_GET['page'])){
                    include $_GET['page'] . ".php";
                } else{
                    include "main_index.php";
                }
            ?>
        </section>


    </main>
</body>
</html>