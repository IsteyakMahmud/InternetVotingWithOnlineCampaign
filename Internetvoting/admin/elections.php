<?php include 'includes/session.php'; ?>
<?php include 'includes/header.php'; ?>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

    <?php include 'includes/navbar.php'; ?>
    <?php include 'includes/menubar.php'; ?>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                Election List
            </h1>
            <ol class="breadcrumb">
                <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                <li class="active">Elections</li>
            </ol>
        </section>
        <!-- Main content -->
        <section class="content">
            <?php
            if (isset($_SESSION['error'])) {
                echo "
            <div class='alert alert-danger alert-dismissible'>
              <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
              <h4><i class='icon fa fa-warning'></i> Error!</h4>
              " . $_SESSION['error'] . "
            </div>
          ";
                unset($_SESSION['error']);
            }
            if (isset($_SESSION['success'])) {
                echo "
            <div class='alert alert-success alert-dismissible'>
              <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
              <h4><i class='icon fa fa-check'></i> Success!</h4>
              " . $_SESSION['success'] . "
            </div>
          ";
                unset($_SESSION['success']);
            }
            ?>
            <div class="row">
                <div class="col-xs-12">
                    <div class="box">
                        <div class="box-header with-border">
                            <a href="#addnew" data-toggle="modal" class="btn btn-primary btn-sm btn-flat"><i
                                    class="fa fa-plus"></i> New</a>
                            <a href="#reset" data-toggle="modal" class="btn btn-danger btn-sm btn-flat"><i
                                        class="fa fa-refresh"></i> Reset</a>
                        </div>
                        <div class="box-body">
                            <table id="example1" class="table table-bordered">
                                <thead>
                                <th>Election ID</th>
                                <th>Election Tile</th>
                                <th>Total Positions</th>
                                <th>Total Candidates</th>
                                <th>Total Voters</th>
                                <th>Start Time</th>
                                <th>End Time</th>
                                <th>Action</th>
                                <th>Result</th>
                                </thead>
                                <tbody>
                                <?php
                                $sql = "SELECT * FROM elections";
                                $query = $conn->query($sql);
                                while ($row = $query->fetch_assoc()) {
                                    //$image = (!empty($row['photo'])) ? '../images/' . $row['photo'] : '../images/profile.jpg';
                                    echo "
                        <tr>
                          <td>" . $row['id'] . "</td>
                          <td>" . $row['title'] . "</td>
                          <td>" . $row['positions'] . "</td>
                          <td>" . $row['candidates'] . "</td>
                          <td>" . $row['voters'] . "</td>
                          <td>" . $row['started_date'] . "</td>
                          <td>" . $row['end_date'] . "</td>
                          <td>
                            <button class='btn btn-success btn-sm edit btn-flat' data-id='" . $row['id'] . "'><i class='fa fa-edit'></i> Edit</button>
                            <button class='btn btn-danger btn-sm delete btn-flat' data-id='" . $row['id'] . "'><i class='fa fa-trash'></i> Delete</button>
                          </td>
                          <td>
                            <form action='is_published.php' method='post'>
                                <input type='text' value=".$row['id']." name='election_id' hidden>
                                <button class='btn btn-primary btn-sm btn-flat' type='submit'><i class='fa fa-book'></i> Publish</button>
                            </form>
                          </td>
                        </tr>
                      ";
                                }
                                ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>

    <?php include 'includes/footer.php'; ?>
    <?php include 'includes/elections_modal.php'; ?>
</div>
<?php include 'includes/scripts.php'; ?>
<script>
    $(function () {
        $(document).on('click', '.edit', function (e) {
            e.preventDefault();
            $('#edit').modal('show');
            var id = $(this).data('id');
            getRow(id);
        });

        $(document).on('click', '.delete', function (e) {
            e.preventDefault();
            $('#delete').modal('show');
            var id = $(this).data('id');
            getRow(id);
        });

        $(document).on('click', '.photo', function (e) {
            e.preventDefault();
            var id = $(this).data('id');
            getRow(id);
        });

    });

    function getRow(id) {
        $.ajax({
            type: 'POST',
            url: 'elections_row.php',
            data: {id: id},
            dataType: 'json',
            success: function (response) {
                $('.id').val(response.id);
                $('#edit_election_id').val(response.election_id);
                $('#edit_title').val(response.title);
                $('#edit_positions').val(response.positions);
                $('#edit_candidates').val(response.candidates);
                $('#edit_voters').val(response.voters);
                $('#edit_started_date').val(response.started_date);
                $('#edit_end_date').val(response.end_date);
            }
        });
    }
</script>
</body>
</html>
