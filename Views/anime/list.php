<?php for ($i = 0; $i <= 4; $i++) { ?>
<div>
    <h2>

        <a href="/anime/detail/<?= $data[$i]->id ?>">
            <?= $data[$i]->name ?>
        </a>
    </h2>
    <p>
        <!--to fix -->
        <?php if(!isset($studio)) { ?>
        <?= $data[$i]->rating ?>
        <?php } ?>
    </p>
</div>
<?php } ?>