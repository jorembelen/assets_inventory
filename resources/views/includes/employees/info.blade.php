

<div id="info{{ $employee->badge }}" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="myModalLabel"><img class="icon-colored" src="/admin/assets/images/icons/decision.svg" title="multiple_devices.svg"> {{ $employee->name}}</h4>
            </div>
            <div class="modal-body">
                <div class="form-group row">
                    <label for="inputEmail3" class="col-3 col-form-label">Badge - </label>
                    <div class="col-9">
                        <h5>{{ $employee->badge}}</h5>
                    </div>
                </div>

                <div class="form-group row">
                    <label for="inputEmail3" class="col-3 col-form-label">Name -</label>
                    <div class="col-9">
                        <h5>{{ $employee->name}}</h5>
                    </div>
                </div>

                <div class="form-group row">
                    <label for="inputEmail3" class="col-3 col-form-label">Designation -</label>
                    <div class="col-9">
                        <h5>{{ $employee->designation}}</h5>
                    </div>
                </div>

                <div class="form-group row">
                    <label for="inputEmail3" class="col-3 col-form-label">Location -</label>
                    <div class="col-9">
                        <h5>{{ $employee->location}}</h5>
                    </div>
                </div>

                <div class="form-group row">
                    <label for="inputEmail3" class="col-3 col-form-label">Unit Code -</label>
                    <div class="col-9">
                        <h5>{{ $employee->unit_code}}</h5>
                    </div>
                </div>

                <div class="form-group row">
                    <label for="inputEmail3" class="col-3 col-form-label">Remarks -</label>
                    <div class="col-9">
                        <h5>{{ $employee->remarks}}</h5>
                    </div>
                </div>

              
            </div>
            <div class="modal-footer">
                
                <button type="button" class="btn btn-secondary waves-effect" data-dismiss="modal">Close</button>
                
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

