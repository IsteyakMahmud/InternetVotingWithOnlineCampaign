<?php

?>

<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Sidebar -->
    <div class="sidebar">
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="<?php echo (!empty($user['photo'])) ? '../img/'.$user['photo'] : '../img/profile.jpg'; ?>" class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
                <a href="#" class="d-block"><?php echo $user['firstname'].' '.$user['lastname']; ?></a>
            </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <li class="nav-item menu-open">
                    <a href="../admin/home.php" class="nav-link active">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>Dashboard</p>
                    </a>
                </li>
<!--                <li class="nav-header">EXAMPLES</li>-->

                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon far fa-envelope"></i>
                        <p>
                            Mailbox
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="../admin/inbox.php" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Inbox</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="../admin/compose.php" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Compose</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="../admin/read-mail.php" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Read</p>
                            </a>
                        </li>
                    </ul>
                </li>


                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon far fa-envelope"></i>
                        <p>
                            Elections
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <?php
                        $sql = "SELECT * FROM elections";
                        $query = $conn->query($sql);
                        while ($row = $query->fetch_assoc()){
                        ?>
                        <li class="nav-item">
                            <a href="result.php?id=<?=$row['id']?>" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p><?=$row['title']?></p>
                            </a>
                        </li>
                        <?php
                        }
                        ?>
                    </ul>
                </li>

                <li class="nav-header">Manage Users</li>
                <li class="nav-item">
                    <a href="users.php" class="nav-link">
                        <i class="nav-icon fas fa-user"></i>
                        <p>Users</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-tools"></i>
                        <p>Settings</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="../admin/logout.php" class="nav-link">
                        <i class="nav-icon fas fa-home"></i>
                        <p>Logout</p>
                    </a>
                </li>

            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>
