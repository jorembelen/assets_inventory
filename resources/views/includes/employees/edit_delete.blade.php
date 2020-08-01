

<div id="editEmp{{ $employee->badge }}" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="myModalLabel"><img class="icon-colored" src="/admin/assets/images/icons/bad_decision.svg" title="edit_image.svg"> Update {{ $employee->name }}</h4>
            </div>
            <div class="modal-body">
                <form class="form-horizontal" method="POST" action="{{ route('employees.update', $employee->badge) }}">
                    @csrf
                    <input type="hidden" name="_method" value="PUT">

                    <div class="form-group row">
                        <label for="type" class="col-3 col-form-label">Badge</label>
                        <div class="col-9">
                            <input type="text" class="form-control" value="{{ $employee->badge }}" name="badge" required>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="type" class="col-3 col-form-label">Name</label>
                        <div class="col-9">
                            <input type="text" class="form-control" value="{{ $employee->name }}" name="name" required>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="type" class="col-3 col-form-label">Designation</label>
                        <div class="col-9">
                            <input type="text" class="form-control" value="{{ $employee->designation }}" name="designation">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="type" class="col-3 col-form-label">Location</label>
                        <div class="col-9">
                            <input type="text" class="form-control" value="{{ $employee->location }}" name="location">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="type" class="col-3 col-form-label">Unit Code</label>
                        <div class="col-9">
                            <input type="text" class="form-control" value="{{ $employee->unit_code }}" name="unit_code" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="type" class="col-3 col-form-label">Remarks</label>
                        <div class="col-9">
                            <input type="text" class="form-control" value="{{ $employee->remarks }}" name="remarks">
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



        {{-- Delete --}}

        <div id="delete{{ $employee->badge }}" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title" id="myModalLabel"><img class="icon-colored" src="/admin/assets/images/icons/disapprove.svg" title="edit_image.svg"> Delete {{ $employee->name }}</h4>
                    </div>
                    <div class="modal-body">
                        <form class="form-horizontal" method="POST" action="{{ route('employees.destroy', $employee->badge) }}">
                            @csrf
                            {{ method_field('DELETE') }}
                            <h4>
                                Are you sure you want to delete this employee?
                            </h4>

                            </div>
        
                            <div class="modal-footer">
                        
                                <button type="submit" class="btn btn-primary waves-effect waves-light">Yes</button>
                                <button type="button" class="btn btn-secondary waves-effect" data-dismiss="modal">No</button>
                
                                </form>
                                
                            </div>
                        </div><!-- /.modal-content -->
                    </div><!-- /.modal-dialog -->
                </div><!-- /.modal -->