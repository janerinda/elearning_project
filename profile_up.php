<?php 

    session_start();
    require_once 'config/db.php';
    if (!isset($_SESSION['user_login'])) {
        $_SESSION['error'] = 'กรุณาเข้าสู่ระบบ!';
        header('location: login.php');
    }

?>
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

<body>
<?php 

if (isset($_SESSION['user_login'])) {
    $user_id = $_SESSION['user_login'];
    $stmt = $conn->query("SELECT * FROM users WHERE id = $user_id");
    $stmt->execute();
    $row = $stmt->fetch(PDO::FETCH_ASSOC);
}
?>
    <!-- Spinner Start -->
    <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
            <span class="sr-only">Loading...</span>
        </div>
    </div>
    <!-- Spinner End -->
    <?php
    include 'hbt/head.php';
    ?>

    <section style="background-color: #eee;" ><br>

    <div class="container py-5 wow fadeInUp">
    <div class="row ">
      <div class="col-lg-4">
        <div class="card mb-4">
            <div class="card-body text-center"><h2 class="mb-5">Profile</h2>
            <img src="img/team-4.jpg" alt="avatar" class="rounded-circle img-fluid" style="width: 300px;">
            <h5 class="my-3"><?php echo $row['firstname'] . ' ' . $row['lastname'] ?></h5>
            <div class="mb-3">
            <input type="file"></input>
            </div>
            <div class="d-flex justify-content-center mb-2">
              <button type="button" class="btn btn-warning bi bi-box-arrow-in-down"> อัพโหลด</button>
            </div>
          </div>
        </div>
    </div>
<!-- ข้อมูลโปรไฟล์ -->
                <div class="col-lg-8">
                    <div class="card mb-4">
                    <div class="card-body">
                        <div ><h3>ข้อมูลผู้ใช้</h3></div><br>
                        <div class="row">
                        <div class="col-sm-3">
                        <p class="mb-0">ชื่อ</p>
                        </div>
                        <div class="col-sm-7">
                        <input type="text" class="form-control"  placeholder="<?php echo $row['firstname'] ?>" name="password"></p>
                        <p class="text-muted mb-0"></p>
                    </div>
                    </div>
                        <hr>
                    <div class="row">
                    <div class="col-sm-3">
                        <p class="mb-0">สกุล</p>
                        </div>
                        <div class="col-sm-7">
                        <p class="text-muted mb-0">
                            <input type="text" class="form-control"  placeholder="<?php echo $row['lastname']?>" name="password"></p>
                    </div>
                    </div>
                        <hr>
                        <div class="row">
                    <div class="col-sm-3">
                        <p class="mb-0">Email</p>
                        </div>
                        <div class="col-sm-7">
                        <p class="text-muted mb-0">
                            <input type="Email" class="form-control"  placeholder="<?php echo $row['email']?>" name="password"></p>
                    </div>
                    </div>
                        <hr>
<!-- ข้อมูลโปรไฟล์ -->
              </div>
            </div>
            <button class="bi bi-save2 btn btn-warning float-right float-end "> Save</button><br>
<!-- คะแนน -->    
</section>

<?php
    include 'hbt/footer.php';
 ?>


    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>


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