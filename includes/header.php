<div class="header sticky-top">
    <nav class="navbar navbar-expand-md navbar-light">
        <a class="navbar-brand" href="index.php">
            <img src="img/logo.png" />
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#my-navbar">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse justify-content-end" id="my-navbar">
            <ul class="navbar-nav">
                <?php
                //Check if user is loging or not
                if (!isset($_SESSION["user_id"])) {
                ?>
                    <li class="nav-item">
                        <a class="nav-link" href="#" data-toggle="modal" data-target="#signup-modal">
                            <i class="fas fa-user"></i>Signup
                        </a>
                    </li>
                    <div class="nav-vl"></div>
                    <li class="nav-item">
                        <a class="nav-link" href="#" data-toggle="modal" data-target="#login-modal">
                            <i class="fas fa-sign-in-alt"></i>Login
                        </a>
                    </li>
                <?php
                } else {
                ?>
                    <div class='nav-name'>
                        Hi, <?php echo $_SESSION["full_name"] ?>
                    </div>
                    <li class="nav-item">
                        <a class="nav-link" href="dashboard.php">
                            <i class="fas fa-user"></i>Dashboard
                        </a>
                    </li>
                    <div class="nav-vl"></div>
                    <li class="nav-item">
                        <a class="nav-link" href="logout.php">
                            <i class="fas fa-sign-out-alt"></i>Logout
                        </a>
                    </li>
                <?php
                }
                ?>
                <div class="nav-vl"></div>
                <li class="nav-item" style="list-style:none">
                    <a class="nav-link" style="color:rgba(0,0,0,.7) !important" href="https://github.com/shivv004" target="_blank">
                        <i class="fab fa-github"></i>Github
                    </a>
                </li>
                <div class="nav-vl"></div>
                <li class="nav-item" style="list-style:none">
                    <a class="nav-link" style="color:rgba(0,0,0,.7) !important" href="https://www.linkedin.com/in/shiv-shankar04" target="_blank">
                        <i class="fab fa-linkedin"></i>Linkedin
                    </a>
                </li>
            </ul>
        </div>
    </nav>
</div>

<div id="loading">
</div>
