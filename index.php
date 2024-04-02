<?php include "app/app.php"; $page = 1; head($page); ?>
<body> 
    <header> 
        <?php navbar($page); ?>
    </header>

<main>

    <section id="bg-index" class="container-fluid">
        <div class="flags"></div>
        <div class="join-container">
            <?php joinForm(); ?>
        </div>
    </section>

    <?php generation(); ?>
    <?php badge(); ?>

</main>

    <?php footer(); ?>

</body> </html>