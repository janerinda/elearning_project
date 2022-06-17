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
    <!-- Spinner Start -->
    <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
            <span class="sr-only">Loading...</span>
        </div>
    </div>
    <!-- Spinner End -->


    <?php
    include 'hbt/head_Ad.php';
    ?>
    <!-- Contact Start -->
    <div class="container-xxl py-5">
        <div class="container">
                <div class="col-lg-12 col-md-12 wow fadeInUp" data-wow-delay="0.5s">
                    <h2><u>เพิ่มเนื้อหาบทเรียน</u></h2><br>
                    <form>
                        <div class="row g-3">
                        <div class="col-md-12">   
                        <select class="custom-select-lg mb-3 col-md-3">
                            <option selected>หลักสูตร</option>
                            <option value="1">หลักสูตร 1</option>
                            <option value="2">หลักสูตร 2</option>
                            <option value="3">หลักสูตร 3</option>
                        </select>
                        <select class="custom-select-lg mb-3 col-md-3">
                            <option selected>เลือกบทเรียน</option>
                            <option value="1">บทที่ 1</option>
                            <option value="2">บทที่ 2</option>
                            <option value="3">บทที่ 3</option>
                        </select>
                            </div>
                            <div class="col-md-12">
                            <div class="form-group row">
                                <label for="colFormLabelLg" class="col-sm-2 col-form-label col-form-label-lg">คำถาม</label>
                                <div class="col-sm-10">
                                <div class="form-floating">
                                    <textarea class="form-control" placeholder="Leave a message here" id="message" style="height: 100px"></textarea>
                                </div>
                                </div>
                            </div>
                            </div>
                            <div class="col-md-12">
                            <div class="form-group row">
                                <label for="colFormLabelLg" class="col-sm-2 col-form-label col-form-label-lg">ตัวเลือกที่1</label>
                                <div class="col-sm-10">
                                <input type="email" class="form-control form-control-lg" id="colFormLabelLg">
                                </div>
                            </div>
                            </div>
                            <div class="col-md-12">
                            <div class="form-group row">
                                <label for="colFormLabelLg" class="col-sm-2 col-form-label col-form-label-lg">ตัวเลือกที่2</label>
                                <div class="col-sm-10">
                                <input type="email" class="form-control form-control-lg" id="colFormLabelLg" >
                                </div>
                            </div>
                            </div>
                            <div class="col-md-12">
                            <div class="form-group row">
                                <label for="colFormLabelLg" class="col-sm-2 col-form-label col-form-label-lg">ตัวเลือกที่3</label>
                                <div class="col-sm-10">
                                <input type="email" class="form-control form-control-lg" id="colFormLabelLg">
                                </div>
                            </div>
                            </div>
                            <div class="col-md-12">
                            <div class="form-group row">
                                <label for="colFormLabelLg" class="col-sm-2 col-form-label col-form-label-lg">ตัวเลือกที่4</label>
                                <div class="col-sm-10">
                                <input type="email" class="form-control form-control-lg" id="colFormLabelLg">
                                </div>
                            </div>
                            </div>

                            <div class="col-6">
                                <button class="btn btn-success w-100 py-6" type="submit">บันทึก</button>
                            </div>
                            <div class="col-6">
                                <button class="btn btn-danger w-100 py-6" type="submit">ล้าง</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- Contact End -->
 
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