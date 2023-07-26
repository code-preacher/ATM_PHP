<?php
ob_start();
require_once '../library/lib.php';
require_once '../classes/crud.php';

$lib=new Lib;
$crud=new Crud;

$lib->check_login2();

?>


<?php
include 'inc/header.php';
include 'inc/sidebar.php';
?>

<div class="page-wrapper">
    <!-- ============================================================== -->
    <!-- Bread crumb and right sidebar toggle -->
    <!-- ============================================================== -->
    <div class="page-breadcrumb">
        <div class="row">
            <div class="col-12 d-flex no-block align-items-center">
                <h4 class="page-title">Dashboard</h4>
                <div class="ml-auto text-right">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Dashboard</li>
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
        <!-- Sales Cards  -->
        <!-- ============================================================== -->
        <div class="row">
            
            <!-- Column -->
            <div class="col-md-6 col-lg-6 col-xlg-3">
                <div class="card card-hover">
                    <div class="box bg-primary text-center">
                        <h1 class="font-light text-white"><i class="mdi mdi-account"></i></h1>
                        <h6 class="text-white">All Customer: <?php echo $crud->countAll('customer');  ?></h6>
                    </div>
                </div>                                                                                                                                                                                                                                                            
            </div>
            <!-- Column -->
            <div class="col-md-6 col-lg-6 col-xlg-3">
                <div class="card card-hover">
                    <div class="box bg-danger text-center">
                        <h1 class="font-light text-white"><i class="mdi mdi-receipt"></i></h1>
                        <h6 class="text-white">All Transaction Info: <?php echo $crud->countAll('transaction');  ?></h6>
                    </div>
                </div>
            </div>
            
        </div>
        <!-- ============================================================== -->
       
   
<!-- ============================================================== -->
<!-- Recent comment and chats -->
<!-- ============================================================== -->
</div>
<!-- ============================================================== -->
<!-- End Container fluid  -->
<!-- ============================================================== -->
<!-- ============================================================== -->
<?php
include 'inc/footer.php';
?>

</body>

</html>