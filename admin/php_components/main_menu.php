<?php
  require('./../config/root_url.php');
?>
<header>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark py-3">
        <a class="navbar-brand" href="<?php echo $root_url; ?>"><i class="fa fa-bars" aria-hidden="true"></i>NK Bhawan: <span>Admin</span></a>
        <button
        class="navbar-toggler"
        type="button"
        data-toggle="collapse"
        data-target="#navbarNavDropdown"
        aria-controls="navbarNavDropdown"
        aria-expanded="false"
        aria-label="Toggle navigation"
        >
        <span class="navbar-toggler-icon"></span>
        </button>
        <div
        class="collapse navbar-collapse d-flex justify-content-end"
        id="navbarNavDropdown"
        >
        <ul class="navbar-nav">
            <li class="nav-item active">
            <a class="nav-link px-3">
                Home <span class="sr-only">(current) </span>
            </a>
            </li>
            <li class="nav-item">
            <a class="nav-link px-3" href="<?php echo $root_url; ?>/about-navakur-kala-bhawan.php"
                >About us</a
            >
            </li>
            <li class="nav-item">
            <a class="nav-link px-3" href="<?php echo $root_url; ?>/art_tools.php">Art Tools</a>
            </li>
            <li class="nav-item dropdown">
            <a
                class="nav-link dropdown-toggle px-3"
                href="#"
                id="creativeBoxDropDown"
                data-toggle="dropdown"
                aria-haspopup="true"
                aria-expanded="false"
            >
                Color Wings
            </a>
            <div
                class="dropdown-menu bg-dark"
                aria-labelledby="creativeBoxDropDown"
            >
                <a class="dropdown-item text-light px-3 py-2" href="<?php echo $root_url; ?>">
                Art Organization
                </a>
                <a class="dropdown-item text-light px-3 py-2" href="<?php echo $root_url; ?>">
                Art Founder
                </a>
            </div>
            </li>
            <li class="nav-item dropdown">
            <a
                class="nav-link dropdown-toggle px-3"
                href="#"
                id="servicesDropDown"
                data-toggle="dropdown"
                aria-haspopup="true"
                aria-expanded="false"
            >
                Services
            </a>
            <div
                class="dropdown-menu bg-dark"
                aria-labelledby="servicesDropDown"
            >
                <a class="dropdown-item text-light px-3 py-2" href="<?php echo $root_url; ?>">
                Interior Design
                </a>
                <a class="dropdown-item text-light px-3 py-2" href="<?php echo $root_url; ?>">
                Degital Design
                </a>
                <a class="dropdown-item text-light px-3 py-2" href="<?php echo $root_url; ?>">
                Promotion & event
                </a>
            </div>
            </li>
            <li class="nav-item">
            <a class="nav-link px-3" href="<?php echo $root_url; ?>">Our Art School</a>
            </li>
            <li class="nav-item">
            <a class="nav-link px-3" href="<?php echo $root_url; ?>">Gallery</a>
            </li>
            <li class="nav-item">
            <a class="nav-link px-3" href="<?php echo $root_url; ?>/how-to-sell.php">How to sell</a>
            </li>
            <li class="nav-item">
            <a class="nav-link px-3" href="<?php echo $root_url; ?>/user/login.php"
                ><span class="d-none d-sm-inline">Login / Register</span
                ><i class="fa fa-sign-out ml-2"></i
            ></a>
            </li>
        </ul>
        </div>
    </nav>
</header>