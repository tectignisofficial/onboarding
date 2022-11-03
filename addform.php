<?php 
include("include/config.php");
$id=$_GET['eid'];

if(isset($_POST['update'])){
$employee_id=$_POST['employee_id'];
$name=$_POST['name'];
$current_address=$_POST['current_address'];
$permanant_address=$_POST['permanant_address'];
$mobile=$_POST['mobile'];
$aadhar_no=$_POST['aadhar_no'];
$pan_no=$_POST['pan_no'];
$email=$_POST['email'];
$job_post=$_POST['job_post'];
$probation=$_POST['probation'];
$salary=$_POST['salary'];
$notice_period=$_POST['notice_period'];
$reporting_manager=$_POST['reporting_manager'];
$father_name=$_POST['father_name'];
$joiningdate=$_POST['joiningdate'];


$sql=mysqli_query($conn,"UPDATE `employee` SET `employee_id`='$employee_id',`name`='$name',`current_address`='$current_address',`permanant_address`='$permanant_address',`mobile`='$mobile',`aadhar_no`='$aadhar_no',`pan_no`='$pan_no',`email`='$email',`job_post`='$job_post',`probation`='$probation',`salary`='$salary',`notice_period`='$notice_period',`reporting_manager`='$reporting_manager',`father_name`='$father_name',`joiningdate`='$joiningdate' WHERE id='$id'");
  
  if($sql==1){
     header("location:table.php");
  }else{
      mysqli_error($conn);
  }

}

?>

<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">
<!-- BEGIN: Head-->

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width,initial-scale=1.0,user-scalable=0,minimal-ui" />
  <meta name="description"
    content="Vuexy admin is super flexible, powerful, clean &amp; modern responsive bootstrap 4 admin template with unlimited possibilities." />
  <meta name="keywords"
    content="admin template, Vuexy admin template, dashboard template, flat admin template, responsive admin template, web app" />
  <meta name="author" content="PIXINVENT" />
  <title>DataTables - Vuexy - Bootstrap HTML admin template</title>
  <link rel="apple-touch-icon" href="app-assets/images/ico/apple-icon-120.png" />
  <link rel="shortcut icon" type="image/x-icon" href="app-assets/images/ico/favicon.ico" />
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,300;0,400;0,500;0,600;1,400;1,500;1,600"
    rel="stylesheet" />

  <!-- BEGIN: Vendor CSS-->
  <link rel="stylesheet" type="text/css" href="app-assets/vendors/css/vendors.min.css" />
  <link rel="stylesheet" type="text/css" href="app-assets/vendors/css/tables/datatable/dataTables.bootstrap5.min.css" />
  <link rel="stylesheet" type="text/css" href="app-assets/vendors/css/tables/datatable/responsive.bootstrap5.min.css" />
  <link rel="stylesheet" type="text/css" href="app-assets/vendors/css/tables/datatable/buttons.bootstrap5.min.css" />
  <link rel="stylesheet" type="text/css" href="app-assets/vendors/css/tables/datatable/rowGroup.bootstrap5.min.css" />
  <link rel="stylesheet" type="text/css" href="app-assets/vendors/css/pickers/flatpickr/flatpickr.min.css" />
  <!-- END: Vendor CSS-->

  <!-- BEGIN: Theme CSS-->
  <link rel="stylesheet" type="text/css" href="app-assets/css/bootstrap.css" />
  <link rel="stylesheet" type="text/css" href="app-assets/css/bootstrap-extended.css" />
  <link rel="stylesheet" type="text/css" href="app-assets/css/colors.css" />
  <link rel="stylesheet" type="text/css" href="app-assets/css/components.css" />
  <link rel="stylesheet" type="text/css" href="app-assets/css/themes/dark-layout.css" />
  <link rel="stylesheet" type="text/css" href="app-assets/css/themes/bordered-layout.css" />
  <link rel="stylesheet" type="text/css" href="app-assets/css/themes/semi-dark-layout.css" />

  <!-- BEGIN: Page CSS-->
  <link rel="stylesheet" type="text/css" href="app-assets/css/core/menu/menu-types/vertical-menu.css" />
  <!-- END: Page CSS-->

  <!-- BEGIN: Custom CSS-->
  <link rel="stylesheet" type="text/css" href="assets/css/style.css" />
  <!-- END: Custom CSS-->
</head>
<!-- END: Head-->

<!-- BEGIN: Body-->

<body class="vertical-layout vertical-menu-modern navbar-floating footer-static" data-open="click"
  data-menu="vertical-menu-modern" data-col="">
  <!-- BEGIN: Header-->
  <?php include("include/header.php")?>
  <?php include("include/sidebar.php")?>
  </div>
  <!-- END: Main Menu-->

  <!-- BEGIN: Content-->
  <div class="app-content content">
    <div class="content-overlay"></div>
    <div class="header-navbar-shadow"></div>
    <div class="content-wrapper container-xxl p-0">
      <div class="content-header row">
        <div class="content-header-left col-md-9 col-12 mb-2">
          <div class="row breadcrumbs-top">
            <div class="col-12">
              <h2 class="content-header-title float-start mb-0">
                Form
              </h2>
              <div class="breadcrumb-wrapper">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item">
                    <a href="index.html">Home</a>
                  </li>
                  <li class="breadcrumb-item"><a href="#">Forms</a></li>
                  <li class="breadcrumb-item active">
                    <a href="#">Form</a>
                  </li>
                </ol>
              </div>
            </div>
          </div>
        </div>
        <div class="content-header-right text-md-end col-md-3 col-12 d-md-block d-none">
          <div class="mb-1 breadcrumb-right">
            <div class="dropdown">
              <button class="btn-icon btn btn-primary btn-round btn-sm dropdown-toggle" type="button"
                data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i data-feather="grid"></i>
              </button>
              <div class="dropdown-menu dropdown-menu-end">
                <a class="dropdown-item" href="app-todo.html"><i class="me-1" data-feather="check-square"></i><span
                    class="align-middle">Todo</span></a><a class="dropdown-item" href="app-chat.html"><i class="me-1"
                    data-feather="message-square"></i><span class="align-middle">Chat</span></a><a class="dropdown-item"
                  href="app-email.html"><i class="me-1" data-feather="mail"></i><span
                    class="align-middle">Email</span></a><a class="dropdown-item" href="app-calendar.html"><i
                    class="me-1" data-feather="calendar"></i><span class="align-middle">Calendar</span></a>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="content-body">
        <!-- Basic multiple Column Form section start -->
        <section id="multiple-column-form">
          <div class="row">
            <div class="col-12">
              <div class="card">
                <div class="card-header">
                  <h4 class="card-title">Complete Form</h4>
                </div>
                <?php 
                $sql=mysqli_query($conn,"SELECT * FROM `employee` WHERE id='$id'");
                $row=mysqli_fetch_array($sql);
                ?>
                <div class="card-body">
                  <form class="form" method="post" enctype="multipart/form-data">
                    <div class="row">
                      <div class="col-md-6 col-12">
                        <div class="mb-1">
                          <label class="form-label" for="">Employee Id</label>
                          <input type="number" id="employee_id" class="form-control" placeholder="Employee Id"
                          value="<?php echo $row['employee_id']?>" name="employee_id" />
                        </div>
                      </div>
                      <div class="col-md-6 col-12">
                        <div class="mb-1">
                          <label class="form-label" for="">Date of Joining</label>
                          <input type="date" id="joiningdate" class="form-control" name="joiningdate"
                          value="<?php echo $row['joiningdate']?>" placeholder="Date of Joining" />
                        </div>
                      </div>
                      <div class="col-md-12 col-12">
                        <div class="mb-1">
                          <label class="form-label" for="name">Full Name</label>
                          <input type="text" id="name" class="form-control" placeholder="First Name" value="<?php echo $row['name']?>" name="name" />
                        </div>
                      </div>
                      <div class="col-md-6 col-12">
                        <div class="mb-1">
                          <label class="form-label" for="">Mobile No.</label>
                          <input type="tel" minlength="10" maxlength="10" id="mobile" class="form-control"
                          value="<?php echo $row['mobile']?>" placeholder="Mobile No." name="mobile" />
                        </div>
                      </div>
                      <div class="col-md-6 col-12">
                        <div class="mb-1">
                          <label class="form-label" for="email-id-column">Email</label>
                          <input type="email" id="email" class="form-control" value="<?php echo $row['email']?>" name="email" placeholder="Email" />
                        </div>
                      </div>
                      <div class="col-md-12 col-12">
                        <div class="mb-1">
                          <label class="form-label" for="">Current Address</label>
                          <textarea id="current_address" class="form-control" placeholder="Current Address"
                          value="<?php echo $row['current_address']?>" name="current_address"><?php echo $row['current_address']?></textarea>
                        </div>
                      </div>
                      <div class="col-md-12 col-12">
                        <div class="mb-1">
                          <label class="form-label" for="">Permanent Address</label>
                          <textarea id="permanant_address" class="form-control" placeholder="Permanent Address"
                          value="<?php echo $row['permanant_address']?>" name="permanant_address"><?php echo $row['permanant_address']?></textarea>
                        </div>
                      </div>
                      <div class="col-md-6 col-12">
                        <div class="mb-1">
                          <label class="form-label" for="">Aadhar Card</label>
                          <input type="tel" minlength="12" maxlength="12" id="aadhar_no" class="form-control" placeholder="Aadhar Card No."
                          value="<?php echo $row['aadhar_no']?>"  name="aadhar_no" />
                        </div>
                      </div>
                      <div class="col-md-6 col-12">
                        <div class="mb-1">
                          <label class="form-label" for="">Pan Card</label>
                          <input type="text" minlength="10" maxlength="10" id="pan_no" class="form-control" name="pan_no"
                          value="<?php echo $row['pan_no']?>" placeholder="Pan Card No." />
                        </div>
                      </div>
                      <div class="col-md-6 col-12">
                        <div class="mb-1">
                          <label class="form-label" for="">Job Post</label>
                          <input type="text" id="job_post" class="form-control" name="job_post"
                          value="<?php echo $row['job_post']?>" placeholder="Job Post" />
                        </div>
                      </div>
                      <div class="col-md-6 col-12">
                        <div class="mb-1">
                          <label class="form-label" for="">Probation Period ( In Days )</label>
                          <input type="number" id="probation" class="form-control" name="probation"
                          value="<?php echo $row['probation']?>" placeholder="Probation Period" />
                        </div>
                      </div>
                      <div class="col-md-6 col-12">
                        <div class="mb-1">
                          <label class="form-label" for="">Salary</label>
                          <input type="number" id="salary" class="form-control" name="salary" value="<?php echo $row['salary']?>" placeholder="Salary" />
                        </div>
                      </div>
                      <div class="col-md-6 col-12">
                        <div class="mb-1">
                          <label class="form-label" for="">Notice Period ( In Days )</label>
                          <input type="number" id="notice_period" class="form-control" name="notice_period"
                          value="<?php echo $row['notice_period']?>" placeholder="Notice Period" />
                        </div>
                      </div>
                      <div class="col-md-6 col-12">
                        <div class="mb-1">
                          <label class="form-label" for="">Repoting Manager</label>
                          <input type="text" id="reporting_manager" class="form-control" name="reporting_manager"
                          value="<?php echo $row['reporting_manager']?>" placeholder="Repoting Manager" />
                        </div>
                      </div>
                      <div class="col-md-6 col-12">
                        <div class="mb-1">
                          <label class="form-label" for="">Fathers Name</label>
                          <input type="text" id="father_name" class="form-control" name="father_name"
                          value="<?php echo $row['father_name']?>"  placeholder="Fathers Name" />
                        </div>
                      </div>
                      <div class="col-12">
                        <button type="submit" name="update" class="btn btn-primary me-1">
                          Submit
                        </button>
                        <button type="reset" class="btn btn-outline-secondary">
                          Reset
                        </button>
                      </div>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </section>
        <!-- Basic Floating Label Form section end -->
      </div>
    </div>
  </div>
  <!-- END: Content-->

  <div class="sidenav-overlay"></div>
  <div class="drag-target"></div>

  <?php include("include/footer.php")?>
  <button class="btn btn-primary btn-icon scroll-top" type="button">
    <i data-feather="arrow-up"></i>
  </button>
  <!-- END: Footer-->

  <!-- BEGIN: Vendor JS-->
  <script src="app-assets/vendors/js/vendors.min.js"></script>
  <!-- BEGIN Vendor JS-->

  <!-- BEGIN: Page Vendor JS-->
  <script src="app-assets/vendors/js/tables/datatable/jquery.dataTables.min.js"></script>
  <script src="app-assets/vendors/js/tables/datatable/dataTables.bootstrap5.min.js"></script>
  <script src="app-assets/vendors/js/tables/datatable/dataTables.responsive.min.js"></script>
  <script src="app-assets/vendors/js/tables/datatable/responsive.bootstrap5.min.js"></script>
  <script src="app-assets/vendors/js/tables/datatable/datatables.checkboxes.min.js"></script>
  <script src="app-assets/vendors/js/tables/datatable/datatables.buttons.min.js"></script>
  <script src="app-assets/vendors/js/tables/datatable/jszip.min.js"></script>
  <script src="app-assets/vendors/js/tables/datatable/pdfmake.min.js"></script>
  <script src="app-assets/vendors/js/tables/datatable/vfs_fonts.js"></script>
  <script src="app-assets/vendors/js/tables/datatable/buttons.html5.min.js"></script>
  <script src="app-assets/vendors/js/tables/datatable/buttons.print.min.js"></script>
  <script src="app-assets/vendors/js/tables/datatable/dataTables.rowGroup.min.js"></script>
  <script src="app-assets/vendors/js/pickers/flatpickr/flatpickr.min.js"></script>
  <!-- END: Page Vendor JS-->

  <!-- BEGIN: Theme JS-->
  <script src="app-assets/js/core/app-menu.js"></script>
  <script src="app-assets/js/core/app.js"></script>
  <!-- END: Theme JS-->

  <!-- BEGIN: Page JS-->
  <script src="app-assets/js/scripts/tables/table-datatables-basic.js"></script>
  <!-- END: Page JS-->

  <script>
    $(window).on("load", function () {
      if (feather) {
        feather.replace({
          width: 14,
          height: 14,
        });
      }
    });
  </script>
</body>
<!-- END: Body-->

</html>