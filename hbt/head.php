   <!-- Navbar Start -->
   <nav class="navbar navbar-expand-lg bg-white navbar-light shadow sticky-top p-0">
        <a href="index.php" class="navbar-brand d-flex align-items-center px-4 px-lg-5">
            <h2 class="m-0 text-primary"><i class="fa fa-book me-3"></i>eLEARNING </h2>

        </a>
        <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav ms-auto p-4 p-lg-0">
                <a href="index.php" class="nav-item nav-link active">หน้าแรก</a>
                <a href="lesson.php" class="nav-item nav-link">หลักสูตร</a>
                <a href="regester.php" class="nav-item nav-link">สมัครสมาชิก</a>
                <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><?php echo $row['firstname'] . ' ' . $row['lastname'] ?></a>
                    <div class="dropdown-menu fade-down m-0">
                        <a href="profile.php" class="dropdown-item">Profile</a> 
                        <a href="logout.php" class="dropdown-item">Logout</a>
                    </div>
                </div> 
            </div>
                <a href="lesson.php" class="btn btn-primary py-4 px-lg-5 d-none d-lg-block">เข้าเรียน<i class="fa fa-arrow-right ms-3"></i></a>
        </div>
    </nav>
    <!-- Navbar End -->