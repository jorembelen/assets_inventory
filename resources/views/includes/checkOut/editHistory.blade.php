

<div id="editHistory{{ $checkOut->id }}" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="myModalLabel"><img class="icon-colored" src="/admin/assets/images/icons/edit_image.svg" title="edit_image.svg"> Update {{ $checkOut->assets->description}}</h4>
            </div>
            <div class="modal-body">
                <form class="form-horizontal" method="POST" action="{{ route('checkOuts.update', $checkOut->id) }}">
                    @csrf
                    <input type="hidden" name="_method" value="PUT">
                    <input type="hidden" name="user" value="{{ Auth::user()->name }}">
                    <div class="form-group row">
                        <label for="type" class="col-3 col-form-label">Type:</label>
                        <div class="col-9">
                            <input type="text" class="form-control" value="{{ $checkOut->assets->type }}" name="description" readonly>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="inputEmail3" class="col-3 col-form-label">Name: </label>
                        <div class="col-9">
                            <select name="emp_id" class="form-control select2" readonly>
                                <option value="{{ $checkOut->employees->badge}}">{{ $checkOut->employees->name}}</option>
                                @foreach ($employees as $employee)
                                <option value="{{ $employee->badge}}">
                                    {{ $employee->badge}} - {{ $employee->name}}
                                </option>
                                @endforeach
                               
                            </select>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="type" class="col-3 col-form-label">Description</label>
                        <div class="col-9">
                            <input type="text" class="form-control" value="{{ $checkOut->assets->description }}" name="description" readonly>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="type" class="col-3 col-form-label">Serial No.</label>
                        <div class="col-9">
                            <input type="text" class="form-control" value="{{ $checkOut->assets->serial_number }}" name="serial_number" readonly>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="type" class="col-3 col-form-label">Mobile No.</label>
                        <div class="col-9">
                            <input type="text" class="form-control" value="{{ $checkOut->assets->mobile_number }}" name="mobile_number" readonly>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="type" class="col-3 col-form-label">Assets No.</label>
                        <div class="col-9">
                            <input type="text" class="form-control" value="{{ $checkOut->assets->assets_number }}" name="assets_number" readonly>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="date_issued" class="col-3 col-form-label">Date Issued: </label>
                        <div class="col-9">
                            <input class="form-control" value="{{ $checkOut->date_issued->toDateString() }}"  type="date" name="date_issued" readonly>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="type" class="col-3 col-form-label">Remarks</label>
                        <div class="col-9">
                            <input type="text" class="form-control" value="{{ $checkOut->notes }}" name="notes">
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

        