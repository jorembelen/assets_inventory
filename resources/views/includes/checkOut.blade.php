

<div id="checkOut{{ $asset->id }}" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="myModalLabel">Assign {{ $asset->description}} to User?</h4>
            </div>
            
            <div class="modal-body">
                <form class="form-horizontal" method="POST" action="{{ route('checkOuts.store') }}">
                    @csrf
                    
                    <div class="form-group row">
                        <label for="inputEmail3" class="col-3 col-form-label">Type: </label>
                        <div class="col-9">
                            <h5>{{ $asset->type}}</h5>
                        </div>
                    </div>
                    
                    <div class="form-group row">
                        <label for="inputEmail3" class="col-3 col-form-label">Description: </label>
                        <div class="col-9">
                            <h5>{{ $asset->description}}</h5>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="inputEmail3" class="col-3 col-form-label">Serial No.: </label>
                        <div class="col-9">
                            <h5>{{ $asset->serial_number}}</h5>
                        </div>
                    </div>

                    <input type="hidden" name="asset_id" value="{{ $asset->id}}">

                    <div class="form-group row">
                        <label for="inputEmail3" class="col-3 col-form-label">Select Employee: </label>
                        <div class="col-9">
                            <select name="emp_id" class="form-control select2">
                                <option value="">Select</option>
                                @foreach ($employees as $employee)
                                <option value="{{ $employee->badge}}">
                                    {{ $employee->badge}} - {{ $employee->name}}
                                </option>
                                @endforeach
                               
                            </select>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="inputEmail3" class="col-3 col-form-label">Date Issued: </label>
                        <div class="col-9">
                            <input class="form-control" id="date_issued" type="date" name="date_issued" >
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="inputEmail3" class="col-3 col-form-label">Remarks: </label>
                        <div class="col-9">
                            <input type="text" class="form-control" name="notes" id="notes" placeholder="Enter Remarks">
                        </div>
                    </div>

                    
              <input type="hidden" name="badge" value="{{ $asset->employees->badge}}">
              <input type="hidden" name="name" value="{{ $asset->employees->name}}">

            </div>
            
            <div class="modal-footer">
                
                <button type="submit" class="btn btn-primary waves-effect waves-light">Submit</button>
                <button type="button" class="btn btn-secondary waves-effect" data-dismiss="modal">Cancel</button>

                </form>
                
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->