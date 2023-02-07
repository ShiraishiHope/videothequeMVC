<?php for ($i = 0; $i <= count($series)-1; $i++) { ?>
    <div>
        <h2>
            <div class="series card">
            <a href="/series/detail/<?= $series[$i]->id ?>">
                <img src="<?= $series[$i]->image ?>" alt="Image">
                <?= $series[$i]->name ?>
                <p><?= $series[$i]->rating ?></p>
            </a>
            </div>
            <!--to redo-->
            <br>
        </h2>

    </div>
<?php } ?>