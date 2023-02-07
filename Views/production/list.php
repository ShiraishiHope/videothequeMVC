<?php for ($i = 0; $i <= count($production)-1; $i++) { ?>
    <div>
        <h2>
            <div class="card">
                <a href="/anime/detail/<?= $production[$i]->id ?>">
                    <img src="<?= $production[$i]->image ?>" alt="Image">
                    <?= $production[$i]->name ?>

                </a>
            </div>
            <!--to redo-->
            <br>
        </h2>

    </div>
<?php } ?>