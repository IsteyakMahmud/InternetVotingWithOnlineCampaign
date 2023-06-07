<?php

?>
<nav class="container-fluid navbar navbar-expand-lg navbar-white bg-light font-weight-bold">
    <div class="container-fluid">
        <a href="home.php" class="navbar-brand">
            <span>Internet Voting System with<br>Online Campaign</span>
        </a>
        <button class="navbar-toggler order-1" type="button" data-toggle="collapse" data-target="#navbarCollapse"
                aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse order-3" id="navbarCollapse">
            <!-- Left navbar links -->
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a href="home.php" class="nav-link">Home</a>
                </li>
                <li class="nav-item">
                    <a href="contact-us.php" class="nav-link">Contact</a>
                </li>
                <li class="nav-item">
                    <a href="candidate_list.php" class="nav-link">Candidates List</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Elections
                    </a>
                    <ul class="dropdown-menu">
                        <?php
                        $sql = "SELECT * FROM elections";
                        $query = $conn->query($sql);
                        while ($row = $query->fetch_assoc()){
                            echo "<li><a href='#'>" . $row['title'] . "</a></li>";
                        }
                        ?>
                    </ul>
                </li>
            </ul>

            <!-- SEARCH FORM -->
            <form class="form-inline ml-0 ml-md-3">
                <div class="input-group input-group-sm">
                    <input class="form-control form-control-navbar" type="search" placeholder="Search"
                           aria-label="Search">
                    <div class="input-group-append">
                        <button class="btn btn-navbar" type="submit">
                            <i class="fas fa-search"></i>
                        </button>
                    </div>
                </div>
            </form>
        </div>

        <!-- Right navbar links -->
        <ul class="order-1 order-md-3 navbar-nav navbar-no-expand ml-auto">
            <li class="nav-item">
                <a href="faq.php" class="nav-link">F.A.Q</a>
            </li>
            <li class="nav-item">
                <a href="logout.php" class="nav-link">Logout</a>
            </li>
            <li class="nav-item">
                <button type="button" class="btn btn-outline-primary">Voting Panel</button>
            </li>
        </ul>
    </div>
</nav>