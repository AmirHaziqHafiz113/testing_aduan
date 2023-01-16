
<?php
    if(!isset($_SESSION)) 
    { 
        session_start(); 
    } 

    $type = $_GET["types"];
    $connection = new mysqli("localhost", "root", "", "aduan");

    $query_perm = "SELECT * FROM permissions ORDER BY name DESC";
    $result_perm = mysqli_query($connection, $query_perm);

    $query_role = "SELECT * FROM roles ORDER BY name DESC";
    $result_role = mysqli_query($connection, $query_role);

    $query_user = "SELECT * FROM users ORDER BY U_Name DESC";
    $result_user = mysqli_query($connection, $query_user);

    $query_service = "SELECT * FROM service";
    $result_service = mysqli_query($connection, $query_service);
?>
       
<div class="modal-dialog" role="document">
    <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Add <?= $type == 'role' ? 'Roles' :( $type == 'permission' ? 'Permissions' : ($type == 'user' ? 'User Role' : ($type == 'role_perm' ? 'Roles/Permission' : ($type == 'service' ? 'Service' : ($type == 'user_list' ? 'User' : ($type == 'service_assign' ? 'Service to Role' : 'Blank')))))) ?></h5>
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
                <?php } else if ($type == 'permission') { ?>
                        <div class='form-group'>
                            <label for='permission-name' class='col-form-label'>Name:</label>
                            <input type='text' class='form-control' id='permission-name' name="permission_name" placeholder="Please Input Permission Name" required>
                        </div>
                        <div class='form-group'>
                            <label for='permission-desc' class='col-form-label'>Description:</label>
                            <input type='text' class='form-control' id='permission-desc' name="permission_description" placeholder="Please Input Description" required>
                        </div>
                <?php } else if ($type == 'role_perm') { ?>
                        <div class='form-group'>
                            <label for='permission-name' class='col-form-label'>Role:</label>
                            <select name="role_id" class="form-control" id="role_id">
                                <?php
                                    if ($result_role) {
                                        while ($row = mysqli_fetch_assoc($result_role)) { ?>
                                           <option value="<?= $row['id'] ?>"><?= $row['name'] ?></option>
                                        <?php }
                                    }
                                ?>
                            </select>
                        </div>
                        <div class='form-group'>
                            <label for='permission-desc' class='col-form-label'>Permission:</label>
                            <select name="perm_id" class="form-control" id="perm_id">
                                <?php
                                    if ($result_perm) {
                                        while ($row = mysqli_fetch_assoc($result_perm)) { ?>
                                           <option value="<?= $row['id'] ?>"><?= $row['name'] ?></option>
                                        <?php }
                                    }
                                ?>
                            </select>
                        </div>
                <?php } else if ($type == 'user') { ?>
                    <div class='form-group'>
                        <label for='permission-name' class='col-form-label'>User:</label>
                        <select name="user_id" class="form-control" id="user_id">
                            <?php
                                if ($result_user) {
                                    while ($row = mysqli_fetch_assoc($result_user)) { ?>
                                        <option value="<?= $row['id'] ?>"><?= $row['U_Name'] ?></option>
                                    <?php }
                                }
                            ?>
                        </select>
                    </div>
                    <div class='form-group'>
                        <label for='permission-name' class='col-form-label'>Role:</label>
                        <select name="role_id" class="form-control" id="role_id">
                            <?php
                                if ($result_role) {
                                    while ($row = mysqli_fetch_assoc($result_role)) { ?>
                                        <option value="<?= $row['id'] ?>"><?= $row['name'] ?></option>
                                    <?php }
                                }
                            ?>
                        </select>
                    </div>
                <?php } else if ($type == 'user_list') { ?>
                    <div class='form-group'>
                        <label for='user_name' class='col-form-label'>User Name:</label>
                        <input type='text' class='form-control' id='user_name' name="user_name" placeholder="Please Input User Name" required>
                    </div>
                    <div class='form-group'>
                        <label for='email' class='col-form-label'>Email:</label>
                        <input type='email' class='form-control' id='email' name="email" placeholder="Please Input Email" required>
                    </div>
                    <div class='form-group'>
                        <label for='password' class='col-form-label'>Password:</label>
                        <input type='password' class='form-control' id='password' name="password" placeholder="Please Input Password" required>
                    </div>
                    <div class='form-group'>
                        <label for='department' class='col-form-label'>Department:</label>
                        <input type='text' class='form-control' id='department' name="department" placeholder="Please Input Department" required>
                    </div>
                    <div class='form-group'>
                        <label for='permission-name' class='col-form-label'>Role:</label>
                        <select name="role_id" class="form-control" id="role_id">
                            <?php
                                if ($result_role) {
                                    while ($row = mysqli_fetch_assoc($result_role)) { ?>
                                        <option value="<?= $row['id'] ?>"><?= $row['name'] ?></option>
                                    <?php }
                                }
                            ?>
                        </select>
                    </div>
                    <input type="hidden" name="add_by" value="<?= $_SESSION['sessionname'] ?>">
                <?php } else if ($type == 'service') { ?>
                    <div class='form-group'>
                        <label for='description' class='col-form-label'>Description:</label>
                        <input type='description' class='form-control' id='description' name="description" placeholder="Please Input Description" required>
                    </div>
                    <input type="hidden" name="add_by" value="<?= $_SESSION['sessionname'] ?>">
                <?php } else if ($type == 'service_assign') { ?>
                    <label for='permission-name' class='col-form-label'>Role:</label>
                    <select name="role_id" class="form-control" id="role_id">
                        <?php
                            if ($result_role) {
                                while ($row = mysqli_fetch_assoc($result_role)) { ?>
                                    <option value="<?= $row['id'] ?>"><?= $row['name'] ?></option>
                                <?php }
                            }
                        ?>
                    </select>
                    <label for='service' class='col-form-label'>Service:</label>
                    <select name="service_id" class="form-control" id="service_id">
                        <?php
                            if ($result_service) {
                                while ($row = mysqli_fetch_assoc($result_service)) { ?>
                                    <option value="<?= $row['Service_ID'] ?>"><?= $row['Description'] ?></option>
                                <?php }
                            }
                        ?>
                    </select>
                    <br>
                <?php }?>

                <div class='form-group'>
                    <button class='form-control btn btn-success' type="submit">Submit</button>
                </div>
            </form>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        </div>
    </div>
</div>
        