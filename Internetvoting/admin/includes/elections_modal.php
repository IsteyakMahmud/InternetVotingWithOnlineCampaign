<!-- Add -->
<div class="modal fade" id="addnew">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title"><b>Add New Election</b></h4>
            </div>
            <div class="modal-body">
                <form class="form-horizontal" method="POST" action="elections_add.php">

                    <div class="form-group">
                        <label for="title" class="col-sm-3 control-label">Title</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="title" name="title" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="positions" class="col-sm-3 control-label">Positions</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="positions" name="positions" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="candidates" class="col-sm-3 control-label">Candidates</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="candidates" name="candidates">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="voters" class="col-sm-3 control-label">Voters</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="voters" name="voters">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="started_date" class="col-sm-3 control-label">Start Date</label>
                        <div class="col-sm-9">
                            <input type="datetime-local" class="form-control" id="started_date" name="started_date">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="end_date" class="col-sm-3 control-label">Voters:</label>
                        <div class="col-sm-9">
                            <input type="datetime-local" class="form-control" id="end_date" name="end_date">
                        </div>
                    </div>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default btn-flat pull-left" data-dismiss="modal"><i
                            class="fa fa-close"></i> Close
                </button>
                <button type="submit" class="btn btn-primary btn-flat" name="add"><i class="fa fa-save"></i> Save
                </button>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- Edit -->
<div class="modal fade" id="edit">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title"><b>Edit Voter</b></h4>
            </div>
            <div class="modal-body">
                <form class="form-horizontal" method="POST" action="elections_edit.php">
                    <input type="hidden" class="id" name="id">
                    <div class="form-group">
                        <label for="edit_election_id" class="col-sm-3 control-label">Election ID</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="edit_election_id" name="election_id" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="edit_title" class="col-sm-3 control-label">Title</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="edit_title" name="title" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="edit_positions" class="col-sm-3 control-label">Positions</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="edit_positions" name="positions" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="edit_candidates" class="col-sm-3 control-label">Candidates</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="edit_candidates" name="candidates">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="edit_voters" class="col-sm-3 control-label">Voters</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="edit_voters" name="voters">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="edit_started_date" class="col-sm-3 control-label">Start Date</label>
                        <div class="col-sm-9">
                            <input type="datetime-local" class="form-control" id="edit_started_date" name="started_date">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="edit_end_date" class="col-sm-3 control-label">Voters:</label>
                        <div class="col-sm-9">
                            <input type="datetime-local" class="form-control" id="edit_end_date" name="end_date">
                        </div>
                    </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default btn-flat pull-left" data-dismiss="modal"><i
                            class="fa fa-close"></i> Close
                </button>
                <button type="submit" class="btn btn-success btn-flat" name="edit"><i class="fa fa-check-square-o"></i>
                    Update
                </button>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- Delete -->
<div class="modal fade" id="delete">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title"><b>Deleting...</b></h4>
            </div>
            <div class="modal-body">
                <form class="form-horizontal" method="POST" action="voters_delete.php">
                    <input type="hidden" class="id" name="id">
                    <div class="text-center">
                        <p>DELETE VOTER</p>
                        <h2 class="bold fullname"></h2>
                    </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default btn-flat pull-left" data-dismiss="modal"><i
                            class="fa fa-close"></i> Close
                </button>
                <button type="submit" class="btn btn-danger btn-flat" name="delete"><i class="fa fa-trash"></i> Delete
                </button>
                </form>
            </div>
        </div>
    </div>
</div>