

<div id="checkIn{{ $checkOut->id }}" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="myModalLabel">Return {{ $checkOut->assets->description}} ?</h4>
            </div>
            <div class="modal-body">
                <form class="form-horizontal" method="POST" action="{{ route('checkIns.store') }}">
                    @csrf
                
                    <div class="form-group row">
                        <label for="inputEmail3" class="col-3 col-form-label">Type: </label>
                        <div class="col-9">
                            <h5>{{ $checkOut->assets->type}}</h5>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="inputEmail3" class="col-3 col-form-label">Description: </label>
                        <div class="col-9">
                            <h5>{{ $checkOut->assets->description}}</h5>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="inputEmail3" class="col-3 col-form-label">Serial No.: </label>
                        <div class="col-9">
                            <h5>{{ $checkOut->assets->serial_number}}</h5>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="inputEmail3" class="col-3 col-form-label">User: </label>
                        <div class="col-9">
                            <h5>{{ $checkOut->employees->badge}} - {{ $checkOut->employees->name}}</h5>
                        </div>
                    </div>

                <input type="hidden" name="checkOut_id" value="{{ $checkOut->id}}">
                <input type="hidden" name="asset_id" value="{{ $checkOut->assets->id}}">
                <input type="hidden" name="emp_id" value="{{ $checkOut->employees->badge}}">
              
                <div class="form-group row">
                    <label for="inputEmail3" class="col-3 col-form-label">Date Return: </label>
                    <div class="col-9">
                        <input class="form-control" id="date_issued" type="date" name="date_issued">
                    </div>
                </div>

                <div class="form-group row">
                    <label for="inputEmail3" class="col-3 col-form-label">Remarks: </label>
                    <div class="col-9">
                        <input type="text" class="form-control" name="notes" id="notes" placeholder="Enter Remarks">
                    </div>
                </div>

            </div>

            <div class="modal-footer">
                
                <button type="submit" class="btn btn-primary waves-effect waves-light">Yes</button>
                <button type="button" class="btn btn-secondary waves-effect" data-dismiss="modal">No</button>

                </form>
                
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->