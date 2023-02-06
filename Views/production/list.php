<?php for ($i = 0; $i<count($production); $i++) { ?>
    <div>

        <h2>

            <a href="/production/detail/<?= $production[$i]->id ?>">
                <?= $production[$i]->name ?>
            </a>
        </h2>
        <p>

        </p>
    </div>
<?php } ?>