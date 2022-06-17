<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
    
<head>
    <meta charset="utf-8">
    <title>eLEARNING - eLearning HTML Template</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600&family=Nunito:wght@600;700;800&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
</head>

<body class="bg-secondary">
    <!-- error -->
                <form action="signin_db.php" method="post">
                        <?php if(isset($_SESSION['error'])) { ?>
                            <div class="alert alert-danger" role="alert">
                                <?php 
                                    echo $_SESSION['error'];
                                    unset($_SESSION['error']);
                                ?>
                            </div>
                        <?php } ?>
                        <?php if(isset($_SESSION['success'])) { ?>
                            <div class="alert alert-success" role="alert">
                                <?php 
                                    echo $_SESSION['success'];
                                    unset($_SESSION['success']);
                                ?>
                            </div>
                        <?php } ?>
    <!-- error end-->

    <!-- Spinner Start -->
                <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
                    <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
                        <span class="sr-only">Loading...</span>
                    </div>
                </div>
 <!-- Spinner End -->
<!-- Contact Start -->
            <section class="vh-100" style="background-color: #6495ED;">
            <div class="container py-6 h-100 wow fadeInUp">
                <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col col-xl-7">
                    <div class="card" style="border-radius: 1rem;">
                        <div class="col-md-6 col-lg-12 d-flex align-items-center">
                        <div class="card-body p-4 p-lg-5 text-black">

                            <form>
                            <div class="d-flex align-items-center mb-3 pb-1">
                                <i class="fas fa-cubes fa-2x me-3" style="color: #ff6219;"></i>
                                <span class="h1 fw-bold mb-0">เข้าสู่ระบบ</span>
                            </div>

                            <h5 class="fw-normal mb-3 pb-3" style="letter-spacing: 1px;">ลงชื่อเข้าใช้บัญชีของคุณ</h5>

                            <div class="form-outline mb-4">
                                <input type="email" id="form2Example17" class="form-control form-control-lg" name="email" aria-describedby="email" />     
                                <label class="form-label" for="email">Email address</label>
                            </div>

                            <div class="form-outline mb-4">
                                <input type="password" id="form2Example27" class="form-control form-control-lg" name="password" />
                                <label class="form-label" for="password">Password</label>
                            </div>
                            <div class="col-12">
                                <button class="btn btn-dark btn-lg btn-block w-100 py-3" type="submit" name="signin" class="btn btn-primary">เข้าสู่ระบบ</button>
                            </div>

                            <a class="small text-muted" href="#!">Forgot password?</a>
                            <p class="mb-5 pb-lg-2" style="color: #393f81;">ยังไม่เป็นสมาชิกใช่ไหม คลิ๊กที่นี่เพื่อ <a href="regester.php"
                                style="color: #0d6efd;">สมัครสมาชิก</a></p>
                            <a href="#!" class="small text-muted">Terms of use.</a>
                            <a href="#!" class="small text-muted">Privacy policy</a>
                            </form>

                        </div>
                        </div>
                    </div>
                    </div>
                </div>
                </div>
            </div>
            </section>
                                
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- Contact End -->



    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>

</html>