<!DOCTYPE html>
<html dir="ltr" lang="en">
<?php
include_once('middleware.php');
$connection = new mysqli("localhost", "root", "", "aduan");

if (!isset($_SESSION['sessionname'])) {
    echo "<script>window.open('login.php','_self')</script>";
}

if ($_GET['id']) {
    $id = $_GET['id'];
    $q = "SELECT * FROM aduan_tb WHERE Aduan_ID = $id";
    $result = mysqli_query($connection, $q);

    $row = mysqli_fetch_array($result);

    $q_pembetulan = "SELECT * FROM pembetulan WHERE Aduan_ID = $id";
    $result_pembetulan = mysqli_query($connection, $q_pembetulan);
    $row_pembetulan = mysqli_fetch_array($result_pembetulan);

    $q_pencegahan = "SELECT * FROM pencegahan WHERE Aduan_ID = $id";
    $result_pencegahan = mysqli_query($connection, $q_pencegahan);
    $row_pencegahan = mysqli_fetch_array($result_pencegahan);

    $query_category = "SELECT * FROM category";
    $result_category = mysqli_query($connection, $query_category);
}

?>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="assets/images/logo2.png">
    <title>Admin - Isi Aduan</title>
    <!-- Custom CSS -->
    <link href="dist/css/style.min.css" rel="stylesheet">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
</head>

<body>
    <!-- ============================================================== -->
    <!-- Preloader - style you can find in spinners.css -->
    <!-- ============================================================== -->
    <div class="preloader">
        <div class="lds-ripple">
            <div class="lds-pos"></div>
            <div class="lds-pos"></div>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- Main wrapper - style you can find in pages.scss -->
    <!-- ============================================================== -->
    <div id="main-wrapper" data-theme="light" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full"
        data-sidebar-position="fixed" data-header-position="fixed" data-boxed-layout="full">
        <?php
        include_once('header.php');
        ?>
        <!-- ============================================================== -->
        <!-- End Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Page wrapper  -->
        <!-- ============================================================== -->
        <div class="page-wrapper">
            <!-- ============================================================== -->
            <!-- Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <div class="page-breadcrumb">
                <div class="row">
                    <div class="col-7 align-self-center">
                        <h4 class="page-title text-truncate text-dark font-weight-medium mb-1">Isi pencegahan dan
                            pembetulan</h4>
                        <div class="d-flex align-items-center">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb m-0 p-0">
                                    <li class="breadcrumb-item"><a href="display_data.php" class="text-muted">Home</a>
                                    </li>
                                    <li class="breadcrumb-item text-muted active" aria-current="page">Insert</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ============================================================== -->
            <!-- End Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- Container fluid  -->
            <!-- ============================================================== -->
            <div class="container-fluid">
                <!-- ============================================================== -->
                <!-- Start Page Content -->
                <!-- ============================================================== -->
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Section A</h4>
                                <form action="update.php" method="POST">
                                    <div class="form-body">
                                        <label>Aduan </label>
                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <input type="text" class="form-control" name="Aduan_ID"
                                                        placeholder="" value="<?php echo $row['Aduan_ID'] ?>" readonly>
                                                </div>
                                            </div>
                                        </div>
                                        <input type="hidden" name="user_id" value="<?= $_SESSION['id'] ?>">
                                        <label>Nama Pengadu</label>
                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <input type="text" class="form-control" name="Nama_Pengadu"
                                                        placeholder="" value="<?php echo $row['Nama_Pengadu'] ?>"
                                                        readonly>
                                                </div>
                                            </div>
                                        </div>
                                        <label>No Telefon</label>
                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <input type="text" class="form-control" name="No_Tel" placeholder=""
                                                        value="<?php echo $row['No_Tel'] ?>" readonly>
                                                </div>
                                            </div>
                                        </div>
                                        <label>Email </label>
                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <input type="text" class="form-control" name="Email" placeholder=""
                                                        value="<?php echo $row['Email'] ?>" readonly>
                                                </div>
                                            </div>
                                        </div>
                                        <?php if (hasPermission('can_category') == 'TRUE' || hasPermission('can_category') == 'TRUE') { ?>
                                        <label>Category </label>
                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <select name="category" class="form-control" id="role_id">
                                                        <?php
                                                            if ($result_category) {
                                                                while ($row_category = mysqli_fetch_assoc($result_category)) { ?>
                                                                    <option value="<?= $row_category['Category_ID'] ?>" <?= $row_category['Category_ID'] == $row['Category_ID'] ? 'selected' : '' ?>><?= $row_category['Description'] ?></option>
                                                                <?php }
                                                            }
                                                        ?>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <?php } ?>
                                        <h4 class="card-title">Section B</h4>
                                        <label>Pencegahan </label>
                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <?php if (((hasPermission('Edit') === 'TRUE') && ($row['Status_Desc'] == 'Pending')) || ($row['complaint_cond'] != 'Closed' && hasRole('SuperAdmin') == 'TRUE' || hasRole('Admin') == 'TRUE')) { ?>
                                                    <input type="text" class="form-control" name="pencegahan"
                                                        placeholder="Isi langkah pencegahan"
                                                        value="<?= isset($row_pencegahan['Description']) ? $row_pencegahan['Description'] : '' ?>"
                                                        required>
                                                    <?php } else { ?>
                                                    <input type="text" class="form-control" name="pencegahan"
                                                        placeholder="Isi langkah pencegahan"
                                                        value="<?= isset($row_pencegahan['Description']) ? $row_pencegahan['Description'] : '' ?>"
                                                        readonly>
                                                    <?php } ?>
                                                </div>
                                            </div>
                                        </div>
                                        <label>Pembetulan </label>
                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <?php if ((hasPermission('Edit') === 'TRUE' && ($row['Status_Desc'] == 'Pending')) || ($row['complaint_cond'] != 'Closed' && hasRole('SuperAdmin') == 'TRUE' || hasRole('Admin') == 'TRUE')) { ?>
                                                    <input type="text" class="form-control" name="pembetulan"
                                                        placeholder="Isi langkah pembetulan"
                                                        value="<?= isset($row_pembetulan['Description']) ? $row_pembetulan['Description'] : '' ?>"
                                                        required>
                                                    <?php } else { ?>
                                                    <input type="text" class="form-control" name="pembetulan"
                                                        placeholder="Isi langkah pembetulan"
                                                        value="<?= isset($row_pembetulan['Description']) ? $row_pembetulan['Description'] : '' ?>"
                                                        readonly>
                                                    <?php } ?>
                                                </div>
                                            </div>
                                        </div>
                                        <h4 class="card-title">Section C</h4>
                                        <label>Langkah berkesan? </label>
                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <?php if ((hasPermission('Verify') === 'TRUE' && ($row['Status_Desc'] == 'Pending')) || ($row['complaint_cond'] != 'Closed' && hasRole('SuperAdmin') == 'TRUE')) { ?>
                                                    <input type="radio" id="Ya" name="langkah" value="Ya" <?php if
                                                        ($row['langkah'] == 'Ya') { ?> checked
                                                    <?php } ?> required>
                                                    <label for="Ya">Ya</label><br>
                                                    <input type="radio" id="Tidak" name="langkah" value="Tidak" <?php if
                                                        ($row['langkah'] == 'Tidak') { ?> checked
                                                    <?php } ?> required>
                                                    <label for="Tidak">Tidak</label>
                                                    <?php } else { ?>
                                                    <input type="radio" id="Ya" name="langkah" value="Ya" <?php if
                                                        ($row['langkah'] == 'Ya') { ?> checked
                                                    <?php } ?> disabled>
                                                    <label for="Ya">Ya</label><br>
                                                    <input type="radio" id="Tidak" name="langkah" value="Tidak" <?php if
                                                        ($row['langkah'] == 'Tidak') { ?> checked
                                                    <?php } ?> disabled>
                                                    <label for="Tidak">Tidak</label>
                                                    <?php } ?>
                                                </div>
                                            </div>
                                        </div>
                                        <h4 class="card-title">Section D</h4>
                                        <label>Complaint condition</label>
                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <?php if (($row['complaint_cond'] == null) || hasRole('SuperAdmin') == 'TRUE' || hasRole('Admin') == 'TRUE') { ?>
                                                    <?php if (hasPermission('Complaint') === 'TRUE') { ?>
                                                    <?php if ($row['complaint_cond'] != 'Closed') { ?>
                                                    <input type="submit" name="btn_val" value="Close"
                                                        class="btn btn-danger">
                                                    <?php } else { ?>
                                                    <input type="submit" name="btn_val" value="Amend"
                                                        class="btn btn-warning">
                                                    <?php } ?>
                                                    <?php } else { ?>
                                                    <input type="submit" name="btn_val" value="Close"
                                                        class="btn btn-danger" disabled>
                                                    &nbsp;&nbsp;&nbsp;
                                                    <input type="submit" name="btn_val" value="Amend"
                                                        class="btn btn-warning" disabled>
                                                    <?php } ?>
                                                    <?php } else { ?>
                                                    <h4 <?php if ($row['complaint_cond'] == 'Amend') { ?>
                                                        style='color:green;'
                                                        <?php } else { ?> style='color:red;'
                                                        <?php } ?> >
                                                        <?= $row['complaint_cond'] ?>
                                                    </h4>
                                                    <?php } ?>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <?php if (($row['Status_Desc'] == 'Pending' || $row['Status_Desc'] == 'New' || $row['Status_Desc'] == 'In Progress')) { ?>
                                    <div class="form-actions">
                                        <div class="text-right">
                                            <input type="submit" name="btn_val" value="submit" class="btn btn-info">
                                            <button type="reset" class="btn btn-dark">Reset</button>
                                            <a class="btn btn-success" href="display_data.php">Home</a>
                                        </div>
                                    </div>
                                    <?php } ?>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- ============================================================== -->
                <!-- End PAge Content -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- Right sidebar -->
                <!-- ============================================================== -->
                <!-- .right-sidebar -->
                <!-- ============================================================== -->
                <!-- End Right sidebar -->
                <!-- ============================================================== -->
            </div>
            <!-- ============================================================== -->
            <!-- End Container fluid  -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- footer -->
            <!-- ============================================================== -->
            <footer class="footer text-center text-muted">
                All Rights Reserved by Adminmart. Designed and Developed by <a
                    href="https://wrappixel.com">WrapPixel</a>.
            </footer>
            <!-- ============================================================== -->
            <!-- End footer -->
            <!-- ============================================================== -->
        </div>
        <!-- ============================================================== -->
        <!-- End Page wrapper  -->
        <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- End Wrapper -->
    <!-- ============================================================== -->
    <!-- End Wrapper -->
    <!-- ============================================================== -->
    <!-- All Jquery -->
    <!-- ============================================================== -->
    <script src="assets/libs/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="assets/libs/popper.js/dist/umd/popper.min.js"></script>
    <script src="assets/libs/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- apps -->
    <!-- apps -->
    <script src="dist/js/app-style-switcher.js"></script>
    <script src="dist/js/feather.min.js"></script>
    <!-- slimscrollbar scrollbar JavaScript -->
    <script src="assets/libs/perfect-scrollbar/dist/perfect-scrollbar.jquery.min.js"></script>
    <script src="assets/extra-libs/sparkline/sparkline.js"></script>
    <!--Wave Effects -->
    <!-- themejs -->
    <!--Menu sidebar -->
    <script src="dist/js/sidebarmenu.js"></script>
    <!--Custom JavaScript -->
    <script src="dist/js/custom.min.js"></script>
</body>