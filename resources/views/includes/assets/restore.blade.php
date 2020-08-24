 {{-- Restore --}}

 <div id="restore{{ $asset->id }}" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="myModalLabel"><img class="icon-colored" src="/admin/assets/images/icons/multiple_devices.svg" title="edit_image.svg"> Restore {{ $asset->description }} to IT</h4>
            </div>
            <div class="modal-body">
                <form class="form-horizontal" method="POST" action="{{ route('restore.asset', $asset->id) }}">
                    @csrf
                    <input type="hidden" name="_method" value="PUT">
                    <h4>
                        Are you sure you want to restore this asset?
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