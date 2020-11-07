<style>
    #chat_history {
        height: 300px;
        overflow-y: scroll;
    }
</style>

<div class="modal-header">
    <h5 class="modal-title" id="exampleModalLabel"><?= $user['first_name'] . " " . $user['last_name'] ?></h5>
    <button type="button" class="close" onclick="stopChat()">
        <span aria-hidden="true">&times;</span>
    </button>
</div>
<div class="modal-body" id="chat_history">

</div>
<div class="modal-footer">
    <div class="input-group mb-3">
        <input type="text" class="form-control" id="comment" placeholder="ข้อความ" aria-describedby="basic-addon2">
        <div class="input-group-append">
            <button type="button" class="btn btn-primary" onclick="chat_submit(<?= $user['id'] ?>)">ส่ง</button>
        </div>
    </div>
</div>