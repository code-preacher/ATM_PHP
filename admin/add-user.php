
<?php
require_once '../library/lib.php';
require_once '../classes/crud.php';
?>

<?php
$lib=new Lib;
$crud=new Crud;
if (isset($_POST['register'])) {
$crud->addUser($_POST);
}
?>

<?php
include 'inc/header.php';
include 'inc/sidebar.php';
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
                    <div class="col-12 d-flex no-block align-items-center">
                        <h4 class="page-title">REGISTER CUSTOMER</h4>
                        <div class="ml-auto text-right">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Registration</li>
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
            <div class="container-fluid">
                 <!-- Start Page Content -->
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-title">
                                <p><?php $lib->msg();   ?></p>

                            </div>
                            <div class="card-body">
                                <div class="basic-form">
                                 <form action="add-user.php" method="POST">

                                     
                                        <input type="hidden" class="form-control input-rounded" name="ano" value="<?php echo $lib->gen_random_num($length = 10);   ?>">
                                   

                                     <div class="form-group">
                                        <p class="text-muted m-b-15 f-s-12">Name :</p>
                                        <input type="text" class="form-control input-rounded" name="name" required="required">
                                    </div>

                                    <div class="form-group">
                                        <p class="text-muted m-b-15 f-s-12">Email :</p>
                                        <input type="email" class="form-control input-rounded" name="email" required="required">
                                    </div>

                                    <div class="form-group">
                                        <p class="text-muted m-b-15 f-s-12">Password :</p>
                                        <input type="password" class="form-control input-rounded" name="password" required="required">
                                    </div>

                                    <div class="form-group">
                                        <p class="text-muted m-b-15 f-s-12">Phone Number :</p>
                                        <input type="text" class="form-control input-rounded" name="phone" required="required">
                                    </div>

                                    <div class="form-group">
                                        <p class="text-muted m-b-15 f-s-12">Address:</p>
                                        <input type="text" class="form-control input-rounded" name="address" required="required">
                                    </div>

                                    <div class="form-group">
                                        <p class="text-muted m-b-15 f-s-12">Gender :</p>
                                        <select class="form-control input-rounded" name="gender" required="required">
                                                        <option value="MALE">MALE</option>
                                                        <option value="FEMALE">FEMALE</option>
                                                    </select>
                                    </div>

                   

                                    <div class="form-actions">
                                        <button type="submit" name="register" class="btn btn-primary col-md-4 offset-md-4"> Register Customer</button>
                                        
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /# column -->
            </div>
            </div>
            <!-- End Container fluid  -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- footer -->
            <!-- ============================================================== -->
 <?php
include 'inc/footer.php';
?>
 
    <script>
        //***********************************//
        // For select 2
        //***********************************//
        $(".select2").select2();

        /*colorpicker*/
        $('.demo').each(function() {
        //
        // Dear reader, it's actually very easy to initialize MiniColors. For example:
        //
        //  $(selector).minicolors();
        //
        // The way I've done it below is just for the demo, so don't get confused
        // by it. Also, data- attributes aren't supported at this time...they're
        // only used for this demo.
        //
        $(this).minicolors({
                control: $(this).attr('data-control') || 'hue',
                position: $(this).attr('data-position') || 'bottom left',

                change: function(value, opacity) {
                    if (!value) return;
                    if (opacity) value += ', ' + opacity;
                    if (typeof console === 'object') {
                        console.log(value);
                    }
                },
                theme: 'bootstrap'
            });

        });
        /*datwpicker*/
        jQuery('.mydatepicker').datepicker();
        jQuery('#datepicker-autoclose').datepicker({
            autoclose: true,
            todayHighlight: true
        });
        var quill = new Quill('#editor', {
            theme: 'snow'
        });

    </script>
</body>

</html>