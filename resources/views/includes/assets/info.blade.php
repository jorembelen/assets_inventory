

<div id="asset{{ $asset->id }}" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="myModalLabel"><img class="icon-colored" src="/admin/assets/images/icons/multiple_devices.svg" title="multiple_devices.svg"> {{ $asset->description}}</h4>
            </div>
            <div class="modal-body">
                <div class="form-group row">
                    <label for="inputEmail3" class="col-3 col-form-label">Assigned to: </label>
                    <div class="col-9">
                        <h5>{{ $asset->emp_id}} - {{ $asset->employees->name}}</h5>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="inputEmail3" class="col-3 col-form-label">Asset ID - </label>
                    <div class="col-9">
                        <h5>{{ $asset->id}}</h5>
                    </div>
                </div>

                <div class="form-group row">
                    <label for="inputEmail3" class="col-3 col-form-label">Ritcco -</label>
                    <div class="col-9">
                        <h5>{{ $asset->ritcco}}</h5>
                    </div>
                </div>

                <div class="form-group row">
                    <label for="inputEmail3" class="col-3 col-form-label">Type -</label>
                    <div class="col-9">
                        <h5>{{ $asset->type}}</h5>
                    </div>
                </div>

                <div class="form-group row">
                    <label for="inputEmail3" class="col-3 col-form-label">Description -</label>
                    <div class="col-9">
                        <h5>{{ $asset->description}}</h5>
                    </div>
                </div>

                <div class="form-group row">
                    <label for="inputEmail3" class="col-3 col-form-label">Serial No. -</label>
                    <div class="col-9">
                        <h5>{{ $asset->serial_number}}</h5>
                    </div>
                </div>

                <div class="form-group row">
                    <label for="inputEmail3" class="col-3 col-form-label">Mobile No. -</label>
                    <div class="col-9">
                        <h5>{{ $asset->mobile_number}}</h5>
                    </div>
                </div>

                <div class="form-group row">
                    <label for="inputEmail3" class="col-3 col-form-label">Asset No. -</label>
                    <div class="col-9">
                        <h5>{{ $asset->asset_number}}</h5>
                    </div>
                </div>

                <div class="form-group row">
                    <label for="inputEmail3" class="col-6 col-form-label"> Purchased Date -</label>
                    <div class="col-9">
                        <h5>{{ $asset->purchased_date ? $asset->purchased_date->format('M-d-Y') : null }}</h5>
                    </div>
                </div>

                <div class="form-group row">
                <!-- <label for="inputEmail3" class="col-3 col-form-label">Asset Photo<label> -->
                    <div class="col-sm-6">
                    <a href="{{url('../')}}/images/uploads/{{ $asset->image ? $asset->image : 'no_image.jpg'}}" target="_blank" rel="noopener noreferrer">
                    <img src="{{url('../')}}/images/uploads/{{ $asset->image ? $asset->image : 'no_image.jpg'}}" alt="" class="img-fluid"></a>
                    </div>
                </div>
                
                <div class="form-group row">
                    <label for="inputEmail3" class="col-3 col-form-label">Remarks -</label>
                    <div class="col-9">
                        <h5>{{ $asset->remarks}}</h5>
                    </div>
                </div>

              
                <div class="form-group row">
                    <label for="inputEmail3" class="col-3 col-form-label">Updated by -</label>
                    <div class="col-9">
                        <h5>{{ $asset->updated_by}}  ({{ $asset->updated_at ? $asset->updated_at->format('M-d-Y') : null }})</h5>
                    </div>
                </div>
              
            </div>
            <div class="modal-footer">
                
                <button type="button" class="btn btn-secondary waves-effect" data-dismiss="modal">Close</button>
                
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

