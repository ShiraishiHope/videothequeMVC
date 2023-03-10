<div class="mainPage">


        <h2 class="series">Series</h2>
        <h2 class="movie">Movie</h2>
        <h2 class="production">Production Studios</h2>


        <?php for ($i = 0; $i <= 2; $i++) { ?>
            <div class ="series card" style="grid-row: <?php echo $i+2; ?> / <?php echo $i+3; ?>;">
                <h3>

                    <a href="/series/detail/<?= $series[$i]->id ?>">
                        <img src="<?= $series[$i]->image ?>" alt="Image">
                        <?= $series[$i]->name ?>
                    </a>
                </h3>
                <p>
                    <?= $series[$i]->rating ?>
                </p>
            </div>
            <div class="movie card" style="grid-row: <?php echo $i+2; ?> / <?php echo $i+3; ?>;">
                <h3>
                    <a href="/movie/detail/<?= $movies[$i]->id ?>">
                        <img src="<?= $movies[$i]->image ?>" alt="Image">
                        <?= $movies[$i]->name ?>
                    </a>
                </h3>
                <p>
                    <?= $movies[$i]->rating ?>
                </p>
            </div>
            <div class="production card" style="grid-row: <?php echo $i+2; ?> / <?php echo $i+3; ?>;">
                <h3>

                    <a href="/production/detail/<?= $productions[$i]->id ?>">
                        <img src="<?= $productions[$i]->image ?>" alt="Image">
                        <?= $productions[$i]->name ?>
                    </a>
                </h3>

            </div>
        <?php } ?>

    <a class="series seeMore" href="/series/list" style="grid-row: 5 / 6;">See More</a>
    <a class="movie seeMore" href="/movie/list" style="grid-row: 5 / 6;">See More</a>
    <a class="production seeMore" href="/production/list" style="grid-row: 5 / 6;">See More</a>


    </div>

