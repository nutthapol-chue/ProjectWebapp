<div class="col-12">
    <?php foreach ($users as $user) { ?>
        <?php $count =  $this->chat->getCommentCount($user['id']); ?>
        <button class="btn btn-success mx-auto mb-2 text-white" onclick="chatFrom(<?= $user['id'] ?>)">
            <i class="mdi mdi-account"></i> <?= $user['first_name'] . " " . $user['last_name']; ?>
            <?php if($count > 0){ ?>
            <span class="badge badge-pill badge-danger"><?= $count ?> </span>
            <?php } ?>
        </button>
    <?php } ?>
</div>