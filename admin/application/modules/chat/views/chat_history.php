<?php if ($msgs != null) { ?>
    <?php foreach ($msgs as $msg) { ?>
        <?php if ($msg['respondent_status'] == 'user') { ?>
            <div class="text-left">
                <div class="text-left">
                    <strong class="mr-auto"><?= $user['first_name'] ?></strong>
                </div>
                <div class="toast-body">
                    <?= $msg['comment'] ?>
                </div>
            </div>
        <?php } else { ?>
            <div class="text-right">
                <div class="text-right">
                    <strong class="mr-auto">You</strong>
                </div>
                <div class="toast-body">
                    <?= $msg['comment'] ?>
                </div>
            </div>
        <?php } ?>
    <?php } ?>
<?php } else {
    echo "error";
} ?>