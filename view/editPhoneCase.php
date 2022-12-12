<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no">
    <title>Add/Edit Product | Equation - Multipurpose Bootstrap Dashboard Template </title>
    <link rel="icon" type="image/x-icon"
        href="https://designreset.com/preview-equation/default/assets/img/favicon.icoo" />
    <!-- BEGIN GLOBAL MANDATORY STYLES -->
    <link href="https://designreset.com/preview-equation/default/assets/css/loader.css" rel="stylesheet"
        type="text/css" />
    <link href="https://designreset.com/preview-equation/default/bootstrap/css/bootstrap.min.css" rel="stylesheet"
        type="text/css" />
    <link href="https://designreset.com/preview-equation/default/assets/css/plugins.css" rel="stylesheet"
        type="text/css" />
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700' rel='stylesheet' type='text/css'>
    <!-- END GLOBAL MANDATORY STYLES -->

    <!--  BEGIN CUSTOM STYLE FILE  -->
    <link href="https://designreset.com/preview-equation/default/plugins/jquery-ui/jquery-ui.min.css" rel="stylesheet"
        type="text/css">
    <link href="https://designreset.com/preview-equation/default/assets/css/ecommerce/addedit_product.css"
        rel="stylesheet" type="text/css">
    <style>
        #content {
            width: 100% !important;
            flex-grow: 8;
            margin-top: 59px;
            margin-bottom: 67px;
        }
    </style>
    <!--  END CUSTOM STYLE FILE  -->
</head>

<body>
    <div id="eq-loader">
        <div class="eq-loader-div">
            <div class="eq-loading dual-loader mx-auto mb-5"></div>
        </div>
    </div>
    <!-- Tab Mobile View Header -->
    <header class="tabMobileView header navbar fixed-top d-lg-none">
        <div class="nav-toggle">
            <a href="javascript:void(0);" class="nav-link sidebarCollapse" data-placement="bottom">
                <i class="flaticon-menu-line-2"></i>
            </a>
            <a href="index.html" class=""> <img src="assets/img/logo-3.png" class="img-fluid" alt="logo"></a>
        </div>
        <ul class="nav navbar-nav">
            <li class="nav-item d-lg-none">
                <form class="form-inline justify-content-end" role="search">
                    <input type="text" class="form-control search-form-control mr-3">
                </form>
            </li>
        </ul>
    </header>


    <div id="content" class="main-content">
        <div class="container">
            <div class="row">
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 layout-spacing">
                    <div class="statbox widget box box-shadow">
                        <div class="widget-header">
                            <div class="row">
                                <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                    <h4 style="text-align: center;">EDIT PHONE CASE</h4>

                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <div class="widget-content widget-content-area add-manage-product-2">
                <form class="row" action="./phonecaseRoute.php?post=True" method="post">
                    <div class="col-xl-6 col-md-12">
                        <div class="card card-default">
                            <div class="card-heading">
                                <h2 class="card-title"><span>GENERAL</span></h2>
                            </div>
                            <div class="card-body">
                                <div class="card-body">
                                    <div class="form-horizontal">
                                        <div class="form-group mb-4">
                                            <div class="row">
                                                <label class="col-md-4"><span>Name: </span></label>
                                                <div class="col-md-8">
                                                    <input class="form-control" value="<?php echo $phonecasedata["name"]; ?>" name="name" type="text">
                                                    <input class="form-control" value="<?php echo $phonecasedata["id"]; ?>" name="id" type="hidden">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group mb-4">
                                            <div class="row">
                                                <label class="col-md-4"><span>Description: </span></label>
                                                <div class="col-md-8">
                                                    <textarea rows="4" cols="5" name="description"
                                                        class="form-control"><?php echo $phonecasedata["description"]; ?></textarea>
                                                </div>
                                            </div>
                                        </div>


                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 col-md-12">
                        <div class="card card-default">
                            <div class="card-heading">
                                <h2 class="card-title"><span>PRICING</span></h2>
                            </div>
                            <div class="card-body">
                                <div class="form-horizontal">
                                    <div class="form-group mb-4">
                                        <div class="row">
                                            <label class="col-md-4"><span>Price: </span></label>
                                            <div class="col-md-8">
                                                <input class="form-control"  value="<?php echo $phonecasedata["price"]; ?>" name="price" type="text">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group mb-4">
                                        <div class="row">
                                            <label class="col-md-4"><span>Quantity: </span></label>
                                            <div class="col-md-8">
                                                <input class="form-control" name="value" value="<?php echo $phonecasedata["value"]; ?>" type="text">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="row">
                                            <label class="col-md-4"><span>Image: </span></label>
                                            <div class="col-md-8">
                                                <input class="form-control" value="<?php echo $phonecasedata["image"]; ?>" name="image" type="text">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="align-center">
                            <input value="Insert Phone Case" class="btn" type="submit">
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!--  END CONTENT PART  -->
    </div>

    <script src="https://designreset.com/preview-equation/default/assets/js/libs/jquery-3.1.1.min.js"></script>
    <script src="https://designreset.com/preview-equation/default/assets/js/loader.js"></script>
    <script src="https://designreset.com/preview-equation/default/plugins/jquery-ui/jquery-ui.min.js"></script>
    <script src="https://designreset.com/preview-equation/default/bootstrap/js/popper.min.js"></script>
    <script src="https://designreset.com/preview-equation/default/bootstrap/js/bootstrap.min.js"></script>
    <script
        src="https://designreset.com/preview-equation/default/plugins/scrollbar/jquery.mCustomScrollbar.concat.min.js"></script>
    <script src="https://designreset.com/preview-equation/default/plugins/blockui/jquery.blockUI.min.js"></script>
    <script src="https://designreset.com/preview-equation/default/assets/js/app.js"></script>

    <script>
        $(document).ready(function () {
            App.init();
        });
    </script>
    <script src="https://designreset.com/preview-equation/default/assets/js/custom.js"></script>
    <!-- END GLOBAL MANDATORY STYLES -->

    <!--  BEGIN CUSTOM SCRIPT FILES  -->
    <script
        src="https://designreset.com/preview-equation/default/assets/js/ecommerce/autocomplete-addedit_product.js"></script>
    <!--  END CUSTOM SCRIPT FILES  -->
</body>

</html>