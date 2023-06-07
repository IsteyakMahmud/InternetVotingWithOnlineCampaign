<div class="card">
    <div class="card-header">
        <h3 class="card-title">Folders</h3>
        <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse">
                <i class="fas fa-minus"></i>
            </button>
        </div>
    </div>
    <div class="card-body p-0">
        <ul class="nav nav-pills flex-column">
            <li class="nav-item active">
                <a href="inbox.php" class="nav-link">
                    <i class="fas fa-inbox"></i> Inbox
                    <span class="badge bg-primary float-right"><?= $_SESSION['inboxes'] ?></span>
                </a>
            </li>
            <li class="nav-item">
                <a href="post.php" class="nav-link">
                    <i class="far fa-envelope"></i> Post
                    <span class="badge bg-primary float-right"><?= $_SESSION['posts'] ?></span>
                </a>
            </li>
            <li class="nav-item">
                <a href="announcement.php" class="nav-link">
                    <i class="far fa-file-alt"></i> Announcement
                    <span class="badge bg-primary float-right"><?= $_SESSION['announcements'] ?></span>
                </a>
            </li>
            <li class="nav-item">
                <a href="#" class="nav-link">
                    <i class="fas fa-filter"></i> Junk
                    <span class="badge bg-warning float-right"><?=$_SESSION['announcements']?></span>
                </a>
            </li>
            <li class="nav-item">
                <a href="#" class="nav-link">
                    <i class="far fa-trash-alt"></i> Trash
                </a>
            </li>
        </ul>
    </div>
</div>