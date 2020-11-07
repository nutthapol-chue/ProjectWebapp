<?php if ($msgs != null) {  ?>

    <?php foreach ($msgs as $msg) { $admin = $this->user->getAdmin($msg['admin_id']); ?>
        <?php if ($msg['respondent_status'] == 'admin') {  ?>
            <div class="text-left">
                <div class="text-left">
                    <strong class="mr-auto">Admin <?= $admin['first_name'] ?></strong>
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