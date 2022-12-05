
<?php
    $type = $_GET["types"];
?>
       
<div class="modal-dialog" role="document">
    <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Add <?= $type == 'role' ? 'Roles' :( $type == 'permission' ? 'Permissions' : ($type == 'user' ? 'Users' : 'Blank')) ?></h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="modal-body">
            <form method="POST" action='modal_roles_action.php?type=<?= $type ?>'>
                <?php 
                    if ($type == 'role') { ?>
                        <div class='form-group'>
                            <label for='role-name' class='col-form-label'>Name:</label>
                            <input type='text' class='form-control' id='role-name' name="role_name" placeholder="Please Input Role Name" required>
                        </div>
                        <div class='form-group'>
                            <label for='role-desc' class='col-form-label'>Description:</label>
                            <input type='text' class='form-control' id='role-desc' name="role_description" placeholder="Please Input Description" required>
                        </div>
                        <div class='form-group'>
                            <button class='form-control btn btn-success' type="submit">Submit</button>
                        </div>
                    
                <?php } ?>
            </form>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        </div>
    </div>
</div>
        