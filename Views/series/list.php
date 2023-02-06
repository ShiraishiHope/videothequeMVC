<?php for ($i = 0; $i <= 4; $i++) { ?>
    <div>
        <h2>

            <a href="/anime/detail/<?= $series[$i]->id ?>">
                <?= $series[$i]->name ?>
            </a>
        </h2>
        <p>
                <?= $series[$i]->rating ?>
        </p>
    </div>
<?php } ?>