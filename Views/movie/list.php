<?php for ($i = 0; $i <= count($movie)-1; $i++) { ?>
    <div>
        <h2>
            <div class="series card">
                <a href="/anime/detail/<?= $movie[$i]->id ?>">
                    <img src="<?= $movie[$i]->image ?>" alt="Image">
                    <?= $movie[$i]->name ?>
                    <p><?= $movie[$i]->rating ?></p>
                </a>
            </div>
            <!--to redo-->
            <br>
        </h2>

    </div>
<?php } ?>