<!DOCTYPE html>
<html dir="ltr" lang="en">
<?php
include_once('middleware.php');
$connection = new mysqli("localhost", "root", "", "aduan");
$query = "SELECT aduan_tb.Aduan_ID, aduan_tb.Service_ID, aduan_tb.Nama_Pengadu, aduan_tb.Email, aduan_tb.No_Tel, aduan_tb.Status_Desc, aduan_tb.Aduan_Info, aduan_tb.Timestamp_New, service.Service_ID, service.Description
FROM aduan_tb INNER JOIN
service ON service.Service_ID = aduan_tb.Service_ID";
$result = mysqli_query($connection, $query);

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
    <title>Admin - List aduan</title>
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
                    <h4 class="page-title text-truncate text-dark font-weight-medium mb-1">Aduan</h4>
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
                            <div class="table-responsive">
                                <table id="example" class="table table-striped table-bordered" cellspacing="0"
                                    width="100%">
                                    <thead>
                                        <tr style="text-align:center">
                                            <th>Nama Pengadu</th>
                                            <th>Email</th>
                                            <th>No. Telefon Pengadu</th>
                                            <th>Info aduan</th>
                                            <th>Status</th>
                                            <th>Timestamp</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php

                                        while ($row = mysqli_fetch_assoc($result)) {
                                            if (hasServices($row['Service_ID']) === 'TRUE') {
                                                if (isset($_GET['del'])) {
                                                    $del_id = $_GET['del'];
                                                    $delete = "DELETE FROM Aduan_tb WHERE Aduan_ID='$del_id'";
                                                    $run_delete = mysqli_query($connection, $delete);
                                                    if (($run_delete === true) && (hasPermission('Delete') === 'TRUE')) {
                                                        echo "<script>alert('record deleted succesfully'); window.open('display_data.php','_self');</script>";
                                                    } else {
                                                        echo "Failed, try again.";
                                                    }
                                                }

                                                echo "<tr>";
                                                echo "<td>" . $row['Nama_Pengadu'] . "</td>";
                                                echo "<td>" . $row['Email'] . "</td>";
                                                echo "<td>" . $row['No_Tel'] . "</td>";
                                                echo "<td>" . $row['Aduan_Info'] . "</td>";
                                                echo "<td>" . $row['Status_Desc'] . "</td>";
                                                echo "<td>" . $row['Timestamp_New'] . "</td>";
                                                echo "<td><center>
                                                    <a class='btn btn-info' onclick='modDisp(" . $row['Aduan_ID'] . ");' style='color:white'>View</a>&nbsp;&nbsp;";
                                                if (hasPermission('Delete') === 'TRUE') {
                                                    echo "<a class='btn btn-danger' href='display_data.php?del=" . $row['Aduan_ID'] . "'>Delete</a>&nbsp;&nbsp;";
                                                }
                                                echo "<a class='btn btn-primary' href='form.php?id=" . $row['Aduan_ID'] . "'>Insert</a></center></td>";
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
            document.title = "Aduan - Form";
            // DataTable initialisation
            $("#example").DataTable({
                order: [[5, 'desc']],
                paging: true,
                autoWidth: true,
                initComplete: function (settings, json) {

                }
            });
        });

        function modDisp(id) {
            /*$("#exampleModal #bookId").val(id.toString());
            $("#exampleModal").modal('show'); */
            /* $('#exampleModal').load('modal.php?id=2',function(){
             $('#exampleModal').modal('show');
             });*/

            $('#exampleModal').load("modal.php?did=" + id, function (response, status, xhr) {
                if (status == "success") {
                    $('#exampleModal').modal('show');
                }
            });

        }


    </script>
</body>

</html>