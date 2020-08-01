

<div id="add" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="myModalLabel"><img class="icon-colored" src="/admin/assets/images/icons/good_decision.svg" title="edit_image.svg"> Add Employee</h4>
            </div>
            <div class="modal-body">
                <form class="form-horizontal" method="POST" action="{{ route('employees.store') }}">
                    @csrf

                    <div class="form-group row">
                        <label for="type" class="col-3 col-form-label">Badge</label>
                        <div class="col-9">
                            <input type="text" class="form-control" name="badge" required>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="type" class="col-3 col-form-label">Name</label>
                        <div class="col-9">
                            <input type="text" class="form-control" name="name" required>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="type" class="col-3 col-form-label">Designation</label>
                        <div class="col-9">
                            <input type="text" class="form-control" name="designation">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="type" class="col-3 col-form-label">Location</label>
                        <div class="col-9">
                            <input type="text" class="form-control" name="location">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="type" class="col-3 col-form-label">Unit Code</label>
                        <div class="col-9">
                            <input type="text" class="form-control" name="unit_code" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="type" class="col-3 col-form-label">Remarks</label>
                        <div class="col-9">
                            <input type="text" class="form-control" name="remarks">
                        </div>
                    </div>

                    </div>

                    <div class="modal-footer">
                
                        <button type="submit" class="btn btn-primary waves-effect waves-light">Submit</button>
                        <button type="button" class="btn btn-secondary waves-effect" data-dismiss="modal">Cancel</button>
        
                        </form>
                        
                    </div>
                </div><!-- /.modal-content -->
            </div><!-- /.modal-dialog -->
        </div><!-- /.modal -->

