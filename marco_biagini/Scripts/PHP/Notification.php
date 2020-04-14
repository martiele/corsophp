<div id="toast_area">

<?php for($i = 0; $i < $toasts.length; $i++) { ?>

    <div class="<?= "toast" . $toasts[$i]->$type ?>">
        <a class="btn-close" onclick="closepopup($(this).parent());">&times;</a>
        <?php if ($toasts[$i]->$title) { ?>
        <p class="title"><?= $toasts[$i]->$title?></p>
        <?php } ?>
        <p><?= $toasts[$i]->$message?></p>
    </div>

<?php } ?>

</div>