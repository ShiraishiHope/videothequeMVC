<!--<p>Welcome to the home page. </p>

<?php /*foreach ($series as $singularSeries): */?>
    <div>
        <h2><a href="/anime/detail/<?php /*= $singularSeries->id */?>"><?php /*=$singularSeries->name */?></a></h2>
        <p><?php /*=$singularSeries->synopsis */?></p>
    </div>
<?php /*endforeach; */?>
<?php /*foreach ($movies as $movie): */?>
    <div>
        <h2><a href="/anime/detail/<?php /*= $movie->id */?>"><?php /*=$movie->name */?></a></h2>
        <p><?php /*=$movie->synopsis */?></p>
    </div>
--><?php /*endforeach; */?>

<div style="display: grid; grid-template-columns: 1fr 1fr 1fr; grid-template-rows: repeat(5, (1/3)fr 3fr);">

    <h1 style="grid-row: 1 / 2; grid-column: 1 / 2;">Series</h1>
    <h1 style="grid-row: 1 / 2; grid-column: 2 / 3;">Movie</h1>
    <h1 style="grid-row: 1 / 2; grid-column: 3 / 4;">Production Studios</h1>


    <?php for ($i = 2; $i <= 4; $i++) { ?>
        <div style="grid-row: <?php echo $i; ?> / <?php echo $i + 1; ?>; grid-column: 1 / 2;">
            <h2>

                <a href="/anime/detail/<?= $series[$i-2]->id ?>">
                    <?= $series[$i-2]->name ?>
                </a>
            </h2>
            <p>
                <?= $series[$i-2]->rating ?>
            </p>
        </div>
        <div style="grid-row: <?php echo $i; ?> / <?php echo $i + 1; ?>; grid-column: 2 / 3;">
            <h2>
                <a href="/anime/detail/<?= $movies[$i-2]->id?>">
                    <?= $movies[$i-2]->name ?>
                </a>
            </h2>
            <p>
                <?= $movies[$i-2]->rating ?>
            </p>
        </div>
        <div style="grid-row: <?php echo $i; ?> / <?php echo $i + 1; ?>; grid-column: 3 / 4;">
            <h2>
                <a href="/production/detail/<?= $studios[$i-2]->id?>">
                    <?= $studios[$i-2]->name ?>
                </a>
            </h2>
            <p>
                <?= $studios[$i-2]->name ?>
            </p>
        </div>
    <?php } ?>

    <a href="/series/list" style="grid-row: 5 / 6; grid-column: 1 / 2;">See More</a>
    <a href="/movie/list" style="grid-row: 5 / 6; grid-column: 2 / 3;">See More</a>
    <a href="/production/list" style="grid-row: 5 / 6; grid-column: 3 / 4;">See More</a>

</div>
