<?php include "app/app.php"; $page = 1; head($page); ?>
<body> 
    <header> 
        <?php navbar($page); ?>
        <?php top(); ?>
    </header>

<main>

    <?php generation(); ?>

</main>

    <?php footer(); ?>

</body> </html>