<?php
session_start();
if($_SESSION['user']['id_role']!=='2'){

    header('Location: /entrance.php');
}
?>
<html lang="en">


<?php require_once 'includes/head.php'; ?>

<body>
<div class="page">
    <?php require_once 'includes/header.php'; ?>
    <main class="main">
        <div class="container">

            <div class="main-content">
                <div class="title">Вы администратор</div>
                <hr>
            </div>
        </div>
    </main>
    <?php require_once 'includes/footer.php'; ?>
</div>

</body>

</html>
