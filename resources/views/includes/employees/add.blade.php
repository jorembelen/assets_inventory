

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
                        <label for="type" class="col-3 col-form-label">Nationality</label>
                        <div class="col-9">
                            <select name="nationality" class="form-control" required>
                            <option value="">Select Nationality</option>
                            <option value="SA">Saudi</option>
                                <option value="PH">Filipino</option>
                                <option value="BD">Bangladesh</option>
                                <option value="IN">India</option>
                                <option value="SL">Sri Lanka</option>
                                <option value="EG">Egyptian</option>
                                <option value="NP">Nepal</option>
                                <option value="JO">Jordanian</option>
                                <option value="PK">Paskistan</option>
                                <option value="KE">Kenian</option>
                            </select>
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

