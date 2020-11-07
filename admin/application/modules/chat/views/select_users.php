<div class="col-12">
    <?php foreach ($users as $user) { ?>
        <button class="btn btn-success mx-auto mb-2 text-white" onclick="chatFrom(<?= $user['id'] ?>)">
            <i class="mdi mdi-account"></i> <?= $user['first_name'] . " " . $user['last_name']; ?>
            <span class="badge badge-pill badge-danger"><?= $this->chat->getCommentCount($user['id']); ?> </span>
        </button>
    <?php } ?>
</div>