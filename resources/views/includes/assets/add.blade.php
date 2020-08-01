

<div id="add" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="myModalLabel"><img class="icon-colored" src="/admin/assets/images/icons/add_image.svg" title="add_image.svg"> Add Asset</h4>
            </div>
            <div class="modal-body">
                <form class="form-horizontal" method="POST" action="{{ route('assets.store') }}">
                    @csrf
                    <div class="form-group row">
                        <label for="type" class="col-3 col-form-label">Type</label>
                        <div class="col-9">
                            <select name="type" class="form-control" required>
                                <option value="Accessories">Accessories</option>
                                <option value="Copier">Copier</option>
                                <option value="Desktop">Desktop</option>
                                <option value="Hard Disk">Hard Disk</option>
                                <option value="Laptop">Laptop</option>
                                <option value="Mobile Phone">Mobile Phone</option>
                                <option value="Modem">Modem</option>
                                <option value="Monitor">Monitor</option>
                                <option value="Printer">Printer</option>
                                <option value="Projector">Projector</option>
                                <option value="Simcard">Simcard</option>
                                <option value="Tools">Tools</option>
                                <option value="Accessories">Accessories</option>
                                <option value="USB">USB</option>
                            </select>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="type" class="col-3 col-form-label">Description</label>
                        <div class="col-9">
                            <input type="text" class="form-control" name="description" required>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="type" class="col-3 col-form-label">Serial No.</label>
                        <div class="col-9">
                            <input type="text" class="form-control" name="serial_number" required>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="type" class="col-3 col-form-label">Mobile No.</label>
                        <div class="col-9">
                            <input type="text" class="form-control" name="mobile_number">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="type" class="col-3 col-form-label">Asset No.</label>
                        <div class="col-9">
                            <input type="text" class="form-control" name="asset_number">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="type" class="col-3 col-form-label">Date Purchased</label>
                        <div class="col-9">
                            <input type="date" class="form-control" name="date_purchased">
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

