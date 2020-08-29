

<div id="edit{{ $user->id }}" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="myModalLabel"><img class="icon-colored" src="/admin/assets/images/icons/good_decision.svg" title="edit_image.svg"> Add User</h4>
            </div>
            <div class="modal-body">
                <form class="form-horizontal" method="POST" action="{{ route('users.update', $user->id) }}">
                    @csrf
                    <input type="hidden" name="_method" value="PUT">

                    <div class="form-group row">
                        <label for="type" class="col-3 col-form-label">Name</label>
                        <div class="col-9">
                            <input type="text" value="{{ $user->name }}" class="form-control" name="name" required>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="type" class="col-3 col-form-label">Username</label>
                        <div class="col-9">
                            <input type="text" class="form-control" value="{{ $user->username }}" name="username" required>
                        </div>
                    </div>

                    @if ( Auth()->user()->role == 1 )

                    <div class="form-group row">
                        <label for="type" class="col-3 col-form-label">Role</label>
                        <div class="col-9">
                            <select name="role" class="form-control" required>
                            <option value="{{ $user->role }}">
                                                    @if ( $user->role == 0 )
                                                        User
                                                    @else
                                                        Admin
                                                    @endif
                            </option>
                            <option value="0">User</option>
                                <option value="1">Admin</option>
                            </select>
                        </div>
                    </div>
                    @else

                    <div class="form-group row">
                        <label for="type" class="col-3 col-form-label">Role</label>
                        <div class="col-9">
                            <select name="role" class="form-control" readonly>
                            <option value="{{ $user->role }}">
                                                    @if ( $user->role == 0 )
                                                        User
                                                    @else
                                                        Admin
                                                    @endif
                            </option>
                            </select>
                        </div>
                    </div>
                   
                    @endif

                    <div class="form-group row">
                        <label for="type" class="col-3 col-form-label">Password</label>
                        <div class="col-9">
                            <input type="password"  class="form-control" name="password">
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

        <div id="delete{{ $user->id }}" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title" id="myModalLabel"><img class="icon-colored" src="/admin/assets/images/icons/disapprove.svg" title="edit_image.svg"> Delete {{ $user->name }}</h4>
                    </div>
                    <div class="modal-body">
                        <form class="form-horizontal" method="POST" action="{{ route('users.destroy', $user->id) }}">
                            @csrf
                            {{ method_field('DELETE') }}
                            <h4>
                                Are you sure you want to delete this user?
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