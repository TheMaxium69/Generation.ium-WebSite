<?php include "app/app.php"; $page = 1; head($page); ?>
<body> 
    <header> 
        <?php navbar($page); ?>
    </header>

<main>

    <section id="bg-index">
        <div class="flags"></div>
        <div class="join-container">
            <?php joinForm(); ?>
        </div>
    </section>

    <?php generation(); ?>

    <div class="generation-border-bottom"></div>

    <?php badge(); ?>
    <?php goals(); ?>
    <?php socialNetworks(); ?>


</main>

    <?php footer(); ?>

</body> </html>