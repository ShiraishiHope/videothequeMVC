<?php for ($i = 0; $i <= 4; $i++) { ?>
    <div>
        <h2>

            <a href="/anime/detail/<?= $movie[$i]->id ?>">
                <?= $movie[$i]->name ?>
            </a>
        </h2>
        <p>
            <?= $movie[$i]->rating ?>
        </p>
    </div>
<?php } ?>