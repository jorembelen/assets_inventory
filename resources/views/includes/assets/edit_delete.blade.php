

<div id="edit{{ $asset->id }}" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="myModalLabel"><img class="icon-colored" src="/admin/assets/images/icons/multiple_devices.svg" title="edit_image.svg"> Update {{ $asset->description}}</h4>
            </div>
            <div class="modal-body">
                <form class="form-horizontal" method="POST" action="{{ route('assets.update', $asset->id) }}" enctype="multipart/form-data">
                    
                {{ method_field('PUT') }}
                    <input type="hidden" name="_method" value="PUT">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <input type="hidden" name="user" value="{{ Auth::user()->name }}">

                    <div class="form-group row">
                        <label for="type" class="col-3 col-form-label">Type</label>
                        <div class="col-9">
                            <select name="type" class="form-control" required>
                                <option value="{!! $asset->type !!}" selected> {!! $asset->type !!}</option>
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
                        <label for="type" class="col-3 col-form-label">RITCCO No.</label>
                        <div class="col-9">
                            <input type="text" class="form-control" value="{{ $asset->ritcco }}" name="ritcco">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="type" class="col-3 col-form-label">Description</label>
                        <div class="col-9">
                            <input type="text" class="form-control" value="{{ $asset->description }}" name="description" required>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="type" class="col-3 col-form-label">Serial No.</label>
                        <div class="col-9">
                            <input type="text" class="form-control" value="{{ $asset->serial_number }}" name="serial_number" required>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="type" class="col-3 col-form-label">Mobile No.</label>
                        <div class="col-9">
                            <input type="text" class="form-control" value="{{ $asset->mobile_number }}" name="mobile_number">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="type" class="col-3 col-form-label">Asset No.</label>
                        <div class="col-9">
                            <input type="text" class="form-control" value="{{ $asset->asset_number }}" name="asset_number">
                        </div>
                    </div>

                    <div class="form-group row">
                    <div class="col-6">
                    <a href="{{url('../')}}/images/uploads/{{ $asset->image ? $asset->image : 'no_image.jpg'}}" target="_blank" rel="noopener noreferrer">
                    <img src="{{url('../')}}/images/uploads/{{ $asset->image ? $asset->image : 'no_image.jpg'}}" alt="image" class="img-fluid img-thumbnail" width="200"></a>
                    </div>
                    </div>

                    <div class="form-group row">
                        <label for="type" class="col-3 col-form-label">Asset Image</label>
                        <div class="col-9">
                            <input type="file" class="form-control" value="{{ $asset->image }}" name="image">
                        </div>
                        
                    </div>

                    <div class="form-group row">
                        <label for="type" class="col-3 col-form-label"> Purchased Date</label>
                        <div class="col-9">
                            <input type="date" class="form-control" value="{{ $asset->purchased_date ? $asset->purchased_date->toDateString() : null }}" name="purchased_date">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="type" class="col-3 col-form-label">Remarks</label>
                        <div class="col-9">
                            <textarea class="form-control" rows="3"  name="remarks">{{ $asset->remarks }}</textarea>
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




        <div id="delete{{ $asset->id }}" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title" id="myModalLabel"><img class="icon-colored" src="/admin/assets/images/icons/multiple_devices.svg" title="edit_image.svg"> Delete {{ $asset->description }}</h4>
                    </div>
                    <div class="modal-body">
                        <form class="form-horizontal" method="POST" action="{{ route('assets.destroy', $asset->id) }}">
                            @csrf
                            {{ method_field('DELETE') }}
                            <h4>
                                Are you sure you want to delete this asset?
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


  