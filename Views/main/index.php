<div class="mainPage">


        <h2 class="series">Series</h2>
        <h2 class="movie">Movie</h2>
        <h2 class="studio">Production Studios</h2>


        <?php for ($i = 0; $i <= 2; $i++) { ?>
            <div class ="series card" style="grid-row: <?php echo $i+2; ?> / <?php echo $i+3; ?>;">
                <h3>

                    <a href="/anime/detail/<?= $series[$i]->id ?>">
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
                    <a href="/anime/detail/<?= $movies[$i]->id ?>">
                        <img src="<?= $movies[$i]->image ?>" alt="Image">
                        <?= $movies[$i]->name ?>
                    </a>
                </h3>
                <p>
                    <?= $movies[$i]->rating ?>
                </p>
            </div>
            <div class="studio card" style="grid-row: <?php echo $i+2; ?> / <?php echo $i+3; ?>;">
                <h3>
                    <a href="/production/detail/<?= $studios[$i]->id ?>">
                        <img src="<?= $studios[$i]->image ?>" alt="Image">
                        <?= $studios[$i]->name ?>
                    </a>
                </h3>
                <p>
                    <?= $studios[$i]->name ?>
                </p>
            </div>
        <?php } ?>

    <a class="series seeMore" href="/series/list" style="grid-row: 5 / 6;">See More</a>
    <a class="movie seeMore" href="/movie/list" style="grid-row: 5 / 6;">See More</a>
    <a class="studio seeMore" href="/production/list" style="grid-row: 5 / 6;">See More</a>


    </div>

