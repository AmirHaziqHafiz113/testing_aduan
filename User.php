<!DOCTYPE html>
<html dir="ltr" lang="en">
<?php
$connection = new mysqli("localhost", "root", "", "aduan");
$query = "SELECT user_role.id as id, user_role.role_id, user_role.user_id, roles.name AS role_name, users.U_Name as username
FROM user_role INNER JOIN
roles ON user_role.role_id = roles.id INNER JOIN
users ON user_role.user_id = users.id";

$result = mysqli_query($connection, $query);
if(!isset($_SESSION)) 
{ 
    session_start(); 
} 
if (!isset($_SESSION['sessionname'])) {
    echo "<script>window.open('login.php','_self')</script>";
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
    <link rel="icon" type="image/png" href="assets/images/logo2.png">
    <title>Admin - User Role & Permission</title>
    <!-- This page plugin CSS -->
    <link href="assets/extra-libs/datatables.net-bs4/css/dataTables.bootstrap4.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="dist/css/style.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->
</head>

<body>
    <!-- ============================================================== -->
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
                    <h4 class="page-title text-truncate text-dark font-weight-medium mb-1">Permission</h4>
                    <div class="d-flex align-items-center">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb m-0 p-0">
                                <li class="breadcrumb-item"><a href="display_data.php" class="text-muted">Home</a></li>
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
            <!-- order table -->
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-12" style="text-align: right;">
                                    <a class='btn btn-success' onclick='modDisp("user");' style='color:white'>Add User Roles</a>
                                </div>
                            </div>
                            <br>
                            <div class="table-responsive">
                                <table id="example" class="table table-striped table-bordered" cellspacing="0"
                                    width="100%">
                                    <thead>
                                        <tr style="text-align:center">
                                            <th>User</th>
                                            <th>Role</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                            if ($result) {
                                                while ($row = mysqli_fetch_assoc($result)) {
                                                    $query1 = "SELECT * FROM user_role";
                                                    $result1 = mysqli_query($connection, $query1);
                                                    $row1 = mysqli_fetch_assoc($result1);
                                                    if (isset($_GET['del'])) {
                                                        $del_id = $_GET['del'];
                                                        $delete = "DELETE FROM user_role WHERE id='$del_id'";
                                                        $run_delete = mysqli_query($connection, $delete);
                                                        if ($run_delete === true) {
                                                            echo "<script>alert('record deleted succesfully'); window.open('user.php','_self');</script>";
                                                        } else {
                                                            echo "Failed, try again.";
                                                        }
                                                    }

                                                    echo "<tr>";
                                                    echo "<td>" . $row['username'] . "</td>";
                                                    echo "<td>" . $row['role_name'] . "</td>";
                                                    echo "<td><center>
                                                            <a class='btn btn-danger' href='user.php?del=" . $row['id'] . "'>Delete</a>";
                                                    echo "</tr>";
                                                }
                                            }
                                        ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ============================================================== -->
            <!-- End PAge Content -->
            <!-- ============================================================== -->
        </div>

        <div class="modal fade text-center" name="exampleModal" id="exampleModal" tabindex="-1" role="dialog"
            aria-labelledby="exampleModalLabel" aria-hidden="false">
        </div>

    </div>
    <!-- ============================================================== -->
    <!-- End Page wrapper  -->
    <!-- ============================================================== -->
    </div>
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
    <!--This page plugins -->
    <script src="assets/extra-libs/datatables.net/js/jquery.dataTables.min.js"></script>
    <script src="dist/js/pages/datatable/datatable-basic.init.js"></script>
    <script>
        $(document).ready(function () {
            //Only needed for the filename of export files.
            //Normally set in the title tag of your page.

            // DataTable initialisation
            $("#example").DataTable({
                dom: '<"dt-buttons"Bf><"clear">lirtp',
                paging: true,
                autoWidth: true,
                buttons: [
                    "colvis",
                    "copyHtml5",
                    "csvHtml5",
                    "excelHtml5",
                    "pdfHtml5",
                    "print"
                ],
                initComplete: function (settings, json) {
                    $(".dt-buttons .btn-group").append(
                        '<a id="cv" href="#">CARD VIEW</a>'
                    );

                    $("#cv").on("click", function () {
                        if ($("#example").hasClass("card")) {
                            $(".colHeader").remove();
                        } else {
                            var labels = [];
                            $("#example thead th").each(function () {
                                labels.push($(this).text());
                            });
                            $("#example tbody tr").each(function () {
                                $(this)
                                    .find("td")
                                    .each(function (column) {
                                        $("<span class='colHeader'>" + labels[column] + ":</span>").prependTo(
                                            $(this)
                                        );
                                    });
                            });
                        }
                        $("#example").toggleClass("card");

                    });
                }
            });
        });

        function modDisp(type) {
            $('#exampleModal').load("modal_roles.php?types=" + type, function (response, status, xhr) {
                if (status == "success") {
                    $('#exampleModal').modal('show');
                }
            });

        }
    </script>
</body>

</html>