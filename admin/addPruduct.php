<?php
session_start();
include_once ('../dbconnection.php');
$error= false;
if(isset($_POST['btn-add']))
{  //clean user input
    $name=$_POST['name'];
    $name=strip_tags($name);
    $name=htmlspecialchars($name);

    $category=$_POST['category'];
    $category=strip_tags($category);
    $category=htmlspecialchars($category);

    $quantity=$_POST['quantity'];
    $quantity=strip_tags($quantity);
    $quantity=htmlspecialchars($quantity);

    $price=$_POST['price'];
    $price=strip_tags($price);
    $price=htmlspecialchars($price);

    $description=$_POST['description'];
    $description=strip_tags($description);
    $description=htmlspecialchars($description);

    $imagenm=$_FILES['image']['name'];
    //$image= addslashes(file_get_contents($image));




    // validate
    if (empty($name)){
        $error=true;
        $errorName = 'Please input your product name' ;
    }
    if (empty($category)){
        $error=true;
        $errorCategory = 'Please input your product category' ;
    }
    if (empty($quantity)){
        $error=true;
        $errorQuantity = 'Please input your product quantity' ;
    }
    if (empty($price)){
        $error=true;
        $errorPrice = 'Please input your product price' ;
    }
    if(!empty($imagenm)){
        $fileName = basename($imagenm);
        $fileType = pathinfo($fileName, PATHINFO_EXTENSION);
        echo $fileType;
        // Allow certain file formats
        $allowTypes = array('jpg','png','jpeg','gif');
        if(in_array($fileType, $allowTypes)){
            $imagetmp = $_FILES['image']['tmp_name'];
            $imgContent = addslashes(file_get_contents($imagetmp));
            $folder="images/";
            move_uploaded_file($imagetmp,$folder.$imagenm);
        }else{
            $error=true;
            $errorImage= 'Sorry, only JPG, JPEG, PNG, & GIF files are allowed to upload';
        }

    }else{
        $error=true;
        $errorImage='Please select an image file to upload.';
    }

    // insert data no error
    if (!$error){
        $sql="insert into products( name , category , quantity , price , description , image ) values ('$name' ,'$category','$quantity','$price','$description','$imagenm' );";
        if (mysqli_query($conn,$sql)){
            $succesMsg='Registered succesfully' ;
        }

    }

}

?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title> Admin</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body id="page-top">

<!-- Page Wrapper -->
<div id="wrapper">

    <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

        <!-- Sidebar - Brand -->
        <a class="sidebar-brand d-flex align-items-center justify-content-center" href="blank.php">
            <div class="sidebar-brand-icon rotate-n-15">
                <i class="fas fa-laugh-wink"></i>
            </div>
            <div class="sidebar-brand-text mx-3"> Admin </div>
        </a>

        <!-- Divider -->
        <hr class="sidebar-divider my-0">

        <!-- Nav Item - Dashboard -->
        <li class="nav-item">
            <a class="nav-link" href="blank.php">
                <img src="https://img.icons8.com/windows/32/000000/window-secured.png"/>
                <span>Dashboard</span></a>
        </li>

        <!-- Divider -->
        <hr class="sidebar-divider">

        <!-- Heading -->
        <div class="sidebar-heading">
            Interface
        </div>

        <!-- Nav Item - Pages Collapse Menu -->
        <li class="nav-item">
            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
                <!--<i class="fas fa-fw fa-cog"></i>-->
                <span><img src="https://img.icons8.com/metro/26/000000/new-product.png"/> Products</span>
            </a>
            <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                <div class="bg-white py-2 collapse-inner rounded">
                    <h6 class="collapse-header">Action:</h6>

                    <a class="collapse-item" href="addPruduct.php"><svg class="bi bi-plus-circle-fill" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" d="M16 8A8 8 0 110 8a8 8 0 0116 0zM8.5 4a.5.5 0 00-1 0v3.5H4a.5.5 0 000 1h3.5V12a.5.5 0 001 0V8.5H12a.5.5 0 000-1H8.5V4z" clip-rule="evenodd"/>
                        </svg>  Add product</a>

                    <a class="collapse-item" href="consultProduct.php"><svg class="bi bi-card-list" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" d="M14.5 3h-13a.5.5 0 00-.5.5v9a.5.5 0 00.5.5h13a.5.5 0 00.5-.5v-9a.5.5 0 00-.5-.5zm-13-1A1.5 1.5 0 000 3.5v9A1.5 1.5 0 001.5 14h13a1.5 1.5 0 001.5-1.5v-9A1.5 1.5 0 0014.5 2h-13z" clip-rule="evenodd"/>
                            <path fill-rule="evenodd" d="M5 8a.5.5 0 01.5-.5h7a.5.5 0 010 1h-7A.5.5 0 015 8zm0-2.5a.5.5 0 01.5-.5h7a.5.5 0 010 1h-7a.5.5 0 01-.5-.5zm0 5a.5.5 0 01.5-.5h7a.5.5 0 010 1h-7a.5.5 0 01-.5-.5z" clip-rule="evenodd"/>
                            <circle cx="3.5" cy="5.5" r=".5"/>
                            <circle cx="3.5" cy="8" r=".5"/>
                            <circle cx="3.5" cy="10.5" r=".5"/>
                        </svg>  Consult product</a>
                </div>
            </div>
        </li>

        <!-- Nav Item - Utilities Collapse Menu -->
        <li class="nav-item">
            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities" aria-expanded="true" aria-controls="collapseUtilities">

                <span><img src="https://img.icons8.com/small/32/000000/run-command.png"/> Command</span>
            </a>
            <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
                <div class="bg-white py-2 collapse-inner rounded">
                    <h6 class="collapse-header">Action:</h6>
                    <a class="collapse-item" href="command.php"><svg class="bi bi-card-list" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" d="M14.5 3h-13a.5.5 0 00-.5.5v9a.5.5 0 00.5.5h13a.5.5 0 00.5-.5v-9a.5.5 0 00-.5-.5zm-13-1A1.5 1.5 0 000 3.5v9A1.5 1.5 0 001.5 14h13a1.5 1.5 0 001.5-1.5v-9A1.5 1.5 0 0014.5 2h-13z" clip-rule="evenodd"/>
                            <path fill-rule="evenodd" d="M5 8a.5.5 0 01.5-.5h7a.5.5 0 010 1h-7A.5.5 0 015 8zm0-2.5a.5.5 0 01.5-.5h7a.5.5 0 010 1h-7a.5.5 0 01-.5-.5zm0 5a.5.5 0 01.5-.5h7a.5.5 0 010 1h-7a.5.5 0 01-.5-.5z" clip-rule="evenodd"/>
                            <circle cx="3.5" cy="5.5" r=".5"/>
                            <circle cx="3.5" cy="8" r=".5"/>
                            <circle cx="3.5" cy="10.5" r=".5"/>
                        </svg>  Consult command</a>
                </div>
            </div>
        </li>

        <!-- Divider -->
        <hr class="sidebar-divider">


        <!-- Nav Item - Charts -->
        <!-- Sidebar Toggler (Sidebar) -->
        <div class="text-center d-none d-md-inline">
            <button class="rounded-circle border-0" id="sidebarToggle"></button>
        </div>

    </ul>
    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

        <!-- Main Content -->
        <div id="content">

            <!-- Topbar -->
            <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                <!-- Sidebar Toggle (Topbar) -->
                <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                    <i class="fa fa-bars"></i>
                </button>

                <!-- Topbar Search -->
                <form class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
                    <div class="input-group">
                        <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
                        <div class="input-group-append">
                            <button class="btn btn-primary" type="button">
                                <i class="fas fa-search fa-sm"></i>
                            </button>
                        </div>
                    </div>
                </form>

                <!-- Topbar Navbar -->
                <ul class="navbar-nav ml-auto">

                    <!-- Nav Item - Search Dropdown (Visible Only XS) -->
                    <li class="nav-item dropdown no-arrow d-sm-none">
                        <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="fas fa-search fa-fw"></i>
                        </a>

                    </li>

                    <!-- Nav Item - Alerts -->


                    <div class="topbar-divider d-none d-sm-block"></div>

                    <!-- Nav Item - User Information -->
                    <li class="nav-item dropdown no-arrow">
                        <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <span class="mr-2 d-none d-lg-inline text-gray-600 small">Administrator</span>
                            <img class="img-profile rounded-circle" src="https://img.icons8.com/ios-filled/50/000000/microsoft-admin.png"/>
                        </a>
                        <!-- Dropdown - User Information -->
                        <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="../login.php" data-toggle="modal" data-target="#logoutModal">
                                <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                Logout
                            </a>
                        </div>
                    </li>

                </ul>

            </nav>
            <!-- End of Topbar -->

            <!-- Begin Page Content -->
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-8">
                        <div class="card">
                            <div class="card-header">Add product</div>
                            <div class="card-body">
                                <?php if (isset($succesMsg)){ ?>
                                    <div class="alert alert-success">
                                        <span class="glyphicon glyphicon-info-sign"></span>
                                        <?php echo $succesMsg ; ?>
                                    </div>
                                <?php } ?>
                                <?php if (isset($errorMsg)){ ?>
                                    <div class="alert alert-failure">
                                        <span class="glyphicon glyphicon-info-sign"></span>
                                        <?php echo $errorMsg ; ?>
                                    </div>
                                <?php } ?>

                                <form class="form-horizontal" method="post" action="addPruduct.php" id="formu" enctype="multipart/form-data">

                                    <div class="form-group">
                                        <label for="name" class="cols-sm-2 control-label">Product Name</label>
                                        <div class="cols-sm-10">
                                            <div class="input-group">
                                                <span class="input-group-addon"><img src="https://img.icons8.com/windows/32/000000/autograph.png"/></span>
                                                <input type="text" class="form-control" name="name" id="name" placeholder="Enter Your Product Name" />
                                                <span class="text-danger" ><br><?php if (isset($errorName)) echo "<br>".$errorName;?></span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="category" class="cols-sm-2 control-label">Category</label>
                                        <div class="cols-sm-10">
                                            <div class="input-group">
                                                <span class="input-group-addon"><img src="https://img.icons8.com/small/32/000000/category.png"/></span>
                                                <!--<input type="text" class="form-control" name="category" id="category"   placeholder="Enter Your Product Category" />-->
                                                <select id="category" class="form-control" name="category" >
                                                    <option value="Soin de visage">Soin de visage</option>
                                                    <option value="Soin de corps">Soin de corps</option>
                                                    <option value="Soin de cheuveux">Soin de cheuveux</option>
                                                    <option value="Maquillage des yeux">Maquillage des yeux</option>
                                                    <option value="Maquillage des levres">Maquillage des lévres</option>
                                                    <option value="Maquillage des teints">Maquillage des teints</option>
                                                    <option value="Bain de bebe">Bain de bébé</option>
                                                    <option value="Soin de bebe">Soin de bébé</option>
                                                    <option value="Soin du visage pour homme">Soin du visage pour homme</option>
                                                    <option value="Soin du capillaire pour homme">Soin du capillaire pour homme</option>
                                                    <option value="Soin pour la barbe">Soin pour la barbe</option>

                                                </select>
                                                <span class="text-danger" ><br><?php if (isset($errorCategory)) echo "<br>".$errorCategory;?></span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="quantity" class="cols-sm-2 control-label">Quantity</label>
                                        <div class="cols-sm-10">
                                            <div class="input-group">
                                                <span class="input-group-addon"><img src="https://img.icons8.com/small/32/000000/estimates.png"/></span>
                                                <input type="number" class="form-control" name="quantity" id="quantity" placeholder="Enter Your Product Quantity" />
                                                <span class="text-danger" ><br><?php if (isset($errorQuantity)) echo "<br>".$errorQuantity;?></span>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="price" class="cols-sm-2 control-label">Price</label>
                                        <div class="cols-sm-10">
                                            <div class="input-group">
                                                <span class="input-group-addon"><img src="https://img.icons8.com/small/32/000000/expensive-2.png"/></span>
                                                <input type="number" class="form-control" name="price" id="price" placeholder="Enter Your Product Price" />
                                                <span class="text-danger" ><br><?php if (isset($errorPrice)) echo "<br>".$errorPrice;?></span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="description" class="cols-sm-2 control-label">Description</label>
                                        <div class="cols-sm-10">
                                            <div class="input-group">
                                                <span class="input-group-addon"><img src="https://img.icons8.com/windows/32/000000/create-new.png"/></span>
                                                <textarea class="form-control" name="description" id="description" form="formu">Enter text here...</textarea>
                                                <span class="text-danger" ><br><?php// if (isset($errorQuantity)) echo $errorQuantity;?></span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="image" class="cols-sm-2 control-label">Image</label>
                                        <div class="cols-sm-10">
                                            <div class="input-group">
                                                <span class="input-group-addon"><img src="https://img.icons8.com/ios-filled/30/000000/picture.png"/></span>
                                                <input type="file" class="form-control" name="image" id="image" placeholder="Upload Your Product Image" required/>
                                                <span class="text-danger" ><br><?php if (isset($errorImage)) echo "<br>".$errorImage;?></span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group ">
                                            <hr/><input type="submit" class="btn btn-primary " name="btn-add" value="add">
                                    </div>

                                    </div>
                                </form>
                                    <!-- Page Heading -->
        </div>
        <!-- End of Main Content -->

        <!-- Footer -->
        <footer class="sticky-footer bg-white">
            <div class="container my-auto">
                <div class="copyright text-center my-auto">
                    <span>admin dashbord</span>
                </div>
            </div>
        </footer>
        <!-- End of Footer -->

    </div>
    <!-- End of Content Wrapper -->

</div>
<!-- End of Page Wrapper -->

<!-- Scroll to Top Button-->
<a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
</a>

<!-- Logout Modal-->
<div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
            <div class="modal-footer">
                <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                <a class="btn btn-primary" href="../login.php">Logout</a>
            </div>
        </div>
    </div>
</div>

<!-- Bootstrap core JavaScript-->
<script src="vendor/jquery/jquery.min.js"></script>
<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

<!-- Core plugin JavaScript-->
<script src="vendor/jquery-easing/jquery.easing.min.js"></script>

<!-- Custom scripts for all pages-->
<script src="js/sb-admin-2.min.js"></script>

<!-- Page level plugins -->
<script src="vendor/chart.js/Chart.min.js"></script>

<!-- Page level custom scripts -->
<script src="js/demo/chart-area-demo.js"></script>
<script src="js/demo/chart-pie-demo.js"></script>
<script src="js/demo/chart-bar-demo.js"></script>


</body>

</html>

