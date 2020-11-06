<?php

if (!empty($error)) {
    echo $error;
} else {

?>
    <div class="modal-header">
        <h5 class="modal-title"> <?= $work['title']; ?> <code class="text-right" id="detailSubmit"></code></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
    <div class="modal-body">
        <div class="form-group">
            <textarea id="detail_work" class="form-control" rows="10" <?= $work['status'] == '2' ? 'disabled' : ''; ?>><?= $work['detail']; ?></textarea>
        </div>
    </div>
    <div class="modal-footer">
        <div class="input-group mb-3">
            <h5 class="card-subtitle "></h5>
            <?php if ($work['status'] == 0 || $work['status'] == 1) { ?><button type="button" class="btn btn-block btn-primary" onclick="saveDetailFrom(<?= $work['id']; ?>)">บันทึก</button><?php } ?>
        </div>
    </div>
<?php } ?>