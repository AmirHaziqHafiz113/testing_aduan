<!DOCTYPE html>
<html dir="ltr" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="assets/images/favicon.png">
    <title>Adminmart Template - The Ultimate Multipurpose admin template</title>
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
    <div id="main-wrapper" data-theme="light" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full" data-sidebar-position="fixed" data-header-position="fixed" data-boxed-layout="full">
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
                        <h4 class="page-title text-truncate text-dark font-weight-medium mb-1">Form Input Grid</h4>
                        <div class="d-flex align-items-center">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb m-0 p-0">
                                    <li class="breadcrumb-item"><a href="index.html" class="text-muted">Home</a></li>
                                    <li class="breadcrumb-item text-muted active" aria-current="page">Library</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                    <div class="col-5 align-self-center">
                        <div class="customize-input float-right">
                            <select class="custom-select custom-select-set form-control bg-white border-0 custom-shadow custom-radius">
                                <option selected>Aug 19</option>
                                <option value="1">July 19</option>
                                <option value="2">Jun 19</option>
                            </select>
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
                                <h4 class="card-title">Horizontal Grid</h4>
                                <form action="#">
                                    <div class="form-body">
                                        <div class="row">
                                            <div class="col-md-1">
                                                <div class="form-group">
                                                    <input type="text" class="form-control" placeholder="1">
                                                </div>
                                            </div>
                                            <div class="col-md-11">
                                                <div class="form-group">
                                                    <input type="text" class="form-control" placeholder="col-md-11">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-2">
                                                <div class="form-group">
                                                    <input type="text" class="form-control" placeholder="col-md-2">
                                                </div>
                                            </div>
                                            <div class="col-md-10">
                                                <div class="form-group">
                                                    <input type="text" class="form-control" placeholder="col-md-10">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <input type="text" class="form-control" placeholder="col-md-3">
                                                </div>
                                            </div>
                                            <div class="col-md-9">
                                                <div class="form-group">
                                                    <input type="text" class="form-control" placeholder="col-md-9">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <input type="text" class="form-control" placeholder="col-md-4">
                                                </div>
                                            </div>
                                            <div class="col-md-8">
                                                <div class="form-group">
                                                    <input type="text" class="form-control" placeholder="col-md-8">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-5">
                                                <div class="form-group">
                                                    <input type="text" class="form-control" placeholder="col-md-5">
                                                </div>
                                            </div>
                                            <div class="col-md-7">
                                                <div class="form-group">
                                                    <input type="text" class="form-control" placeholder="col-md-7">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <input type="text" class="form-control" placeholder="col-md-6">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <input type="text" class="form-control" placeholder="col-md-6">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-actions">
                                        <div class="text-right">
                                            <button type="submit" class="btn btn-info">Submit</button>
                                            <button type="reset" class="btn btn-dark">Reset</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Grid With Row Label</h4>
                                <form action="#">
                                    <div class="form-body">
                                        <label>Row Label </label>
                                        <div class="row">
                                            <div class="col-md-1">
                                                <div class="form-group">
                                                    <input type="text" class="form-control" placeholder="1">
                                                </div>
                                            </div>
                                            <div class="col-md-11">
                                                <div class="form-group">
                                                    <input type="text" class="form-control" placeholder="col-md-11">
                                                </div>
                                            </div>
                                        </div>
                                        <label>Row Label </label>
                                        <div class="row">
                                            <div class="col-md-2">
                                                <div class="form-group">
                                                    <input type="text" class="form-control" placeholder="col-md-2">
                                                </div>
                                            </div>
                                            <div class="col-md-10">
                                                <div class="form-group">
                                                    <input type="text" class="form-control" placeholder="col-md-10">
                                                </div>
                                            </div>
                                        </div>
                                        <label>Row Label </label>
                                        <div class="row">
                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <input type="text" class="form-control" placeholder="col-md-3">
                                                </div>
                                            </div>
                                            <div class="col-md-9">
                                                <div class="form-group">
                                                    <input type="text" class="form-control" placeholder="col-md-9">
                                                </div>
                                            </div>
                                        </div>
                                        <label>Row Label </label>
                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <input type="text" class="form-control" placeholder="col-md-4">
                                                </div>
                                            </div>
                                            <div class="col-md-8">
                                                <div class="form-group">
                                                    <input type="text" class="form-control" placeholder="col-md-8">
                                                </div>
                                            </div>
                                        </div>
                                        <label>Row Label </label>
                                        <div class="row">
                                            <div class="col-md-5">
                                                <div class="form-group">
                                                    <input type="text" class="form-control" placeholder="col-md-5">
                                                </div>
                                            </div>
                                            <div class="col-md-7">
                                                <div class="form-group">
                                                    <input type="text" class="form-control" placeholder="col-md-7">
                                                </div>
                                            </div>
                                        </div>
                                        <label>Row Label </label>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <input type="text" class="form-control" placeholder="col-md-6">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <input type="text" class="form-control" placeholder="col-md-6">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-actions">
                                        <div class="text-right">
                                            <button type="submit" class="btn btn-info">Submit</button>
                                            <button type="reset" class="btn btn-dark">Reset</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Grid With Label</h4>
                                <form action="#">
                                    <div class="form-body">
                                        <div class="row">
                                            <div class="col-md-1">
                                                <div class="form-group">
                                                    <label>Label</label>
                                                    <input type="text" class="form-control" placeholder="1">
                                                </div>
                                            </div>
                                            <div class="col-md-11">
                                                <div class="form-group">
                                                    <label>Label</label>
                                                    <input type="text" class="form-control" placeholder="col-md-11">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-2">
                                                <div class="form-group">
                                                    <label>Label</label>
                                                    <input type="text" class="form-control" placeholder="col-md-2">
                                                </div>
                                            </div>
                                            <div class="col-md-10">
                                                <div class="form-group">
                                                    <label>Label</label>
                                                    <input type="text" class="form-control" placeholder="col-md-10">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <label>Label</label>
                                                    <input type="text" class="form-control" placeholder="col-md-3">
                                                </div>
                                            </div>
                                            <div class="col-md-9">
                                                <div class="form-group">
                                                    <label>Label</label>
                                                    <input type="text" class="form-control" placeholder="col-md-9">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label>Label</label>
                                                    <input type="text" class="form-control" placeholder="col-md-4">
                                                </div>
                                            </div>
                                            <div class="col-md-8">
                                                <div class="form-group">
                                                    <label>Label</label>
                                                    <input type="text" class="form-control" placeholder="col-md-8">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-5">
                                                <div class="form-group">
                                                    <label>Label</label>
                                                    <input type="text" class="form-control" placeholder="col-md-5">
                                                </div>
                                            </div>
                                            <div class="col-md-7">
                                                <div class="form-group">
                                                    <label>Label</label>
                                                    <input type="text" class="form-control" placeholder="col-md-7">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label>Label</label>
                                                    <input type="text" class="form-control" placeholder="col-md-6">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label>Label</label>
                                                    <input type="text" class="form-control" placeholder="col-md-6">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-actions">
                                        <div class="text-right">
                                            <button type="submit" class="btn btn-info">Submit</button>
                                            <button type="reset" class="btn btn-dark">Reset</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12 col-md-6">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Right Offset</h4>
                                <form action="#">
                                    <div class="form-body">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <input type="text" class="form-control" placeholder="col-md-12">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-11">
                                                <div class="form-group">
                                                    <input type="text" class="form-control" placeholder="col-md-11">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-10">
                                                <div class="form-group">
                                                    <input type="text" class="form-control" placeholder="col-md-10">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-9">
                                                <div class="form-group">
                                                    <input type="text" class="form-control" placeholder="col-md-9">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-8">
                                                <div class="form-group">
                                                    <input type="text" class="form-control" placeholder="col-md-8">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-7">
                                                <div class="form-group">
                                                    <input type="text" class="form-control" placeholder="col-md-7">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <input type="text" class="form-control" placeholder="col-md-6">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-5">
                                                <div class="form-group">
                                                    <input type="text" class="form-control" placeholder="col-md-5">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <input type="text" class="form-control" placeholder="col-md-4">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <input type="text" class="form-control" placeholder="col-md-3">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-2">
                                                <div class="form-group">
                                                    <input type="text" class="form-control" placeholder="col-md-2">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-1">
                                                <div class="form-group">
                                                    <input type="text" class="form-control" placeholder="1">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-actions">
                                        <div class="text-left">
                                            <button type="submit" class="btn btn-info">Submit</button>
                                            <button type="reset" class="btn btn-dark">Reset</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-6">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Left Offset</h4>
                                <form action="#">
                                    <div class="form-body">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <input type="text" class="form-control" placeholder="col-md-12">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-11 ml-auto">
                                                <div class="form-group">
                                                    <input type="text" class="form-control"
                                                        placeholder="col-md-11 ml-auto">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-10 ml-auto">
                                                <div class="form-group">
                                                    <input type="text" class="form-control"
                                                        placeholder="col-md-10 ml-auto">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-9 ml-auto">
                                                <div class="form-group">
                                                    <input type="text" class="form-control"
                                                        placeholder="col-md-9 ml-auto">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-8 ml-auto">
                                                <div class="form-group">
                                                    <input type="text" class="form-control"
                                                        placeholder="col-md-8 ml-auto">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-7 ml-auto">
                                                <div class="form-group">
                                                    <input type="text" class="form-control"
                                                        placeholder="col-md-7 ml-auto">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6 ml-auto">
                                                <div class="form-group">
                                                    <input type="text" class="form-control"
                                                        placeholder="col-md-6 ml-auto">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-5 ml-auto">
                                                <div class="form-group">
                                                    <input type="text" class="form-control"
                                                        placeholder="col-md-5 ml-auto">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-4 ml-auto">
                                                <div class="form-group">
                                                    <input type="text" class="form-control"
                                                        placeholder="col-md-4 ml-auto">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-3 ml-auto">
                                                <div class="form-group">
                                                    <input type="text" class="form-control"
                                                        placeholder="col-md-3 ml-auto">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-2 ml-auto">
                                                <div class="form-group">
                                                    <input type="text" class="form-control"
                                                        placeholder="col-md-2 ml-auto0">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-1 ml-auto">
                                                <div class="form-group">
                                                    <input type="text" class="form-control" placeholder="11">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-actions">
                                        <div class="text-right">
                                            <button type="submit" class="btn btn-info">Submit</button>
                                            <button type="reset" class="btn btn-dark">Reset</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12 col-md-6">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Centered Input</h4>
                                <form action="#">
                                    <div class="form-body">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <input type="text" class="form-control" placeholder="col-md-12">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-10 m-auto">
                                                <div class="form-group">
                                                    <input type="text" class="form-control"
                                                        placeholder="col-md-10 m-auto">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-8 m-auto">
                                                <div class="form-group">
                                                    <input type="text" class="form-control"
                                                        placeholder="col-md-8 m-auto">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6 m-auto">
                                                <div class="form-group">
                                                    <input type="text" class="form-control"
                                                        placeholder="col-md-6 m-auto">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-4 m-auto">
                                                <div class="form-group">
                                                    <input type="text" class="form-control"
                                                        placeholder="col-md-4 m-auto">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-2 m-auto">
                                                <div class="form-group">
                                                    <input type="text" class="form-control"
                                                        placeholder="col-md-2 m-auto">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <label class="col-md-4 text-right">Label</label>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <input type="text" class="form-control" placeholder="col-md-4">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <label class="col-md-3 text-right">Label</label>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <input type="text" class="form-control" placeholder="col-md-6">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <label class="col-md-2 text-right">Label</label>
                                            <div class="col-md-8">
                                                <div class="form-group">
                                                    <input type="text" class="form-control" placeholder="col-md-8">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <label class="col-md-1 text-right">Label</label>
                                            <div class="col-md-10">
                                                <div class="form-group">
                                                    <input type="text" class="form-control" placeholder="col-md-10">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-actions">
                                        <div class="text-center">
                                            <button type="submit" class="btn btn-info">Submit</button>
                                            <button type="reset" class="btn btn-dark">Reset</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-6">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Centered Input with Default label</h4>
                                <form action="#">
                                    <div class="form-body">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label>Label</label>
                                                    <input type="text" class="form-control" placeholder="col-md-12">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-10 m-auto">
                                                <div class="form-group">
                                                    <label>Label</label>
                                                    <input type="text" class="form-control"
                                                        placeholder="col-md-10 m-auto">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-9 m-auto">
                                                <div class="form-group">
                                                    <label>Label</label>
                                                    <input type="text" class="form-control"
                                                        placeholder="col-md-8 m-auto">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6 m-auto">
                                                <div class="form-group">
                                                    <label>Label</label>
                                                    <input type="text" class="form-control"
                                                        placeholder="col-md-6 m-auto">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-4 m-auto">
                                                <div class="form-group">
                                                    <label>Label</label>
                                                    <input type="text" class="form-control"
                                                        placeholder="col-md-4 m-auto">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-2 m-auto">
                                                <div class="form-group">
                                                    <label>Label</label>
                                                    <input type="text" class="form-control"
                                                        placeholder="col-md-2 m-auto">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-actions mt-4">
                                        <div class="text-center">
                                            <button type="submit" class="btn btn-info">Submit</button>
                                            <button type="reset" class="btn btn-dark">Reset</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Grid With Row Label</h4>
                                <form action="#">
                                    <div class="form-body">
                                        <div class="form-group">
                                            <div class="row">
                                                <label class="col-lg-1">Label</label>
                                                <div class="col-lg-11">
                                                    <div class="row">
                                                        <div class="col-md-1">
                                                            <input type="text" class="form-control"
                                                                placeholder="col-md-1">
                                                        </div>
                                                        <div class="col-md-11">
                                                            <input type="text" class="form-control"
                                                                placeholder="col-md-11">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="row">
                                                <label class="col-lg-1">Label</label>
                                                <div class="col-lg-11">
                                                    <div class="row">
                                                        <div class="col-md-2">
                                                            <input type="text" class="form-control"
                                                                placeholder="col-md-2">
                                                        </div>
                                                        <div class="col-md-10">
                                                            <input type="text" class="form-control"
                                                                placeholder="col-md-10">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="row">
                                                <label class="col-lg-1">Label</label>
                                                <div class="col-lg-11">
                                                    <div class="row">
                                                        <div class="col-md-3">
                                                            <input type="text" class="form-control"
                                                                placeholder="col-md-3">
                                                        </div>
                                                        <div class="col-md-9">
                                                            <input type="text" class="form-control"
                                                                placeholder="col-md-9">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="row">
                                                <label class="col-lg-1">Label</label>
                                                <div class="col-lg-11">
                                                    <div class="row">
                                                        <div class="col-md-4">
                                                            <input type="text" class="form-control"
                                                                placeholder="col-md-4">
                                                        </div>
                                                        <div class="col-md-8">
                                                            <input type="text" class="form-control"
                                                                placeholder="col-md-8">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="row">
                                                <label class="col-lg-1">Label</label>
                                                <div class="col-lg-11">
                                                    <div class="row">
                                                        <div class="col-md-5">
                                                            <input type="text" class="form-control"
                                                                placeholder="col-md-5">
                                                        </div>
                                                        <div class="col-md-7">
                                                            <input type="text" class="form-control"
                                                                placeholder="col-md-7">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="row">
                                                <label class="col-lg-1">Label</label>
                                                <div class="col-lg-11">
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <input type="text" class="form-control"
                                                                placeholder="col-md-6">
                                                        </div>
                                                        <div class="col-md-6">
                                                            <input type="text" class="form-control"
                                                                placeholder="col-md-6">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-actions">
                                        <div class="text-right">
                                            <button type="submit" class="btn btn-info">Submit</button>
                                            <button type="reset" class="btn btn-dark">Reset</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Grid With Inline Input Label</h4>
                                <form action="#">
                                    <div class="form-body">
                                        <div class="form-group">
                                            <div class="row">
                                                <div class="col-md-2">
                                                    <div class="row">
                                                        <div class="col-md-8">
                                                            <input type="text" class="form-control"
                                                                placeholder="col-md-2">
                                                        </div>
                                                        <label class="col-md-4">Label </label>
                                                    </div>
                                                </div>
                                                <div class="col-md-10">
                                                    <div class="row">
                                                        <label class="col-md-4 text-right">Label </label>
                                                        <div class="col-md-8">
                                                            <input type="text" class="form-control"
                                                                placeholder="col-md-10">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="row">
                                                <div class="col-md-3">
                                                    <div class="row">
                                                        <div class="col-md-8">
                                                            <input type="text" class="form-control"
                                                                placeholder="col-md-3">
                                                        </div>
                                                        <label class="col-md-4">Label </label>
                                                    </div>
                                                </div>
                                                <div class="col-md-9">
                                                    <div class="row">
                                                        <label class="col-md-4 text-right">Label </label>
                                                        <div class="col-md-8">
                                                            <input type="text" class="form-control"
                                                                placeholder="col-md-9">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="row">
                                                <div class="col-md-4">
                                                    <div class="row">
                                                        <div class="col-md-8">
                                                            <input type="text" class="form-control"
                                                                placeholder="col-md-4">
                                                        </div>
                                                        <label class="col-md-4">Label </label>
                                                    </div>
                                                </div>
                                                <div class="col-md-8">
                                                    <div class="row">
                                                        <label class="col-md-4 text-right">Label </label>
                                                        <div class="col-md-8">
                                                            <input type="text" class="form-control"
                                                                placeholder="col-md-8">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="row">
                                                <div class="col-md-5">
                                                    <div class="row">
                                                        <div class="col-md-8">
                                                            <input type="text" class="form-control"
                                                                placeholder="col-md-5">
                                                        </div>
                                                        <label class="col-md-4">Label </label>
                                                    </div>
                                                </div>
                                                <div class="col-md-7">
                                                    <div class="row">
                                                        <label class="col-md-4 text-right">Label </label>
                                                        <div class="col-md-8">
                                                            <input type="text" class="form-control"
                                                                placeholder="col-md-7">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="row">
                                                        <div class="col-md-8">
                                                            <input type="text" class="form-control"
                                                                placeholder="col-md-6">
                                                        </div>
                                                        <label class="col-md-4">Label </label>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="row">
                                                        <label class="col-md-4 text-right">Label </label>
                                                        <div class="col-md-8">
                                                            <input type="text" class="form-control"
                                                                placeholder="col-md-6">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-actions">
                                        <div class="text-right">
                                            <button type="submit" class="btn btn-info">Submit</button>
                                            <button type="reset" class="btn btn-dark">Reset</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Multiple Input With Default Label</h4>
                                <form action="#">
                                    <div class="form-body">
                                        <label>Label </label>
                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <input type="text" class="form-control"
                                                        placeholder="First Input &amp; First Row">
                                                </div>
                                                <div class="form-group">
                                                    <input type="text" class="form-control"
                                                        placeholder="First Input &amp; Second Row">
                                                </div>
                                            </div>
                                            <div class="col-md-8">
                                                <div class="form-group">
                                                    <input type="text" class="form-control"
                                                        placeholder="Second Input &amp; First Row">
                                                </div>
                                                <div class="form-group">
                                                    <input type="text" class="form-control"
                                                        placeholder="Second Input &amp; Second Row">
                                                </div>
                                            </div>
                                        </div>
                                        <label>Multiple width Input Label</label>
                                        <div class="row">
                                            <div class="col-md-7">
                                                <div class="form-group">
                                                    <input type="text" class="form-control"
                                                        placeholder="First Input &amp; First Row">
                                                </div>
                                            </div>
                                            <div class="col-md-5">
                                                <div class="form-group">
                                                    <input type="text" class="form-control"
                                                        placeholder="Second Input &amp; First Row">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-8">
                                                <div class="form-group">
                                                    <input type="text" class="form-control"
                                                        placeholder="First Input &amp; Second Row">
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <input type="text" class="form-control"
                                                        placeholder="Second Input &amp; Second Row">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-actions">
                                        <div class="text-right">
                                            <button type="submit" class="btn btn-info">Submit</button>
                                            <button type="reset" class="btn btn-dark">Reset</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Multiple Input With Inline Label</h4>
                                <form action="#">
                                    <div class="form-body">
                                        <div class="form-group row">
                                            <label class="col-md-2">Label </label>
                                            <div class="col-md-10">
                                                <div class="row">
                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <input type="text" class="form-control"
                                                                placeholder="First Input &amp; First Row">
                                                        </div>
                                                        <div class="form-group">
                                                            <input type="text" class="form-control"
                                                                placeholder="First Input &amp; Second Row">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-8">
                                                        <div class="form-group">
                                                            <input type="text" class="form-control"
                                                                placeholder="Second Input &amp; First Row">
                                                        </div>
                                                        <div class="form-group">
                                                            <input type="text" class="form-control"
                                                                placeholder="Second Input &amp; Second Row">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-md-2">Multiple width Input Label </label>
                                            <div class="col-md-10">
                                                <div class="row">
                                                    <div class="col-md-7">
                                                        <div class="form-group">
                                                            <input type="text" class="form-control"
                                                                placeholder="First Input &amp; First Row">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-5">
                                                        <div class="form-group">
                                                            <input type="text" class="form-control"
                                                                placeholder="Second Input &amp; First Row">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-8">
                                                        <div class="form-group">
                                                            <input type="text" class="form-control"
                                                                placeholder="First Input &amp; Second Row">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <input type="text" class="form-control"
                                                                placeholder="Second Input &amp; Second Row">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-actions">
                                        <div class="text-right">
                                            <button type="submit" class="btn btn-info">Submit</button>
                                            <button type="reset" class="btn btn-dark">Reset</button>
                                        </div>
                                    </div>
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

</html>