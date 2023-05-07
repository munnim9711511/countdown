<div>
    <div>
        <!-- Button trigger modal -->
        <button type="button" class="btn " style="float: right" data-bs-toggle="modal" data-bs-target="#exampleModal">
            <i class="material-icons" style="vertical-align: bottom">add</i>User
        </button>

        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="exampleModalLabel">New User</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <form action="/settings/create" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="modal-body">
                            <div class="row">
                                <div class="col-md-12 form-group">
                                    <input required name="user" type="text" class="form-control" placeholder="user name">
                                </div>
                            </div>
                            <div class="row" style="margin-top: 10px">
                                <div class="col-md-12 form-group">
                                    <select required name="roles[]" multiple class="form-control" id="">
                                        <option value="Admin">Admin</option>
                                        <option value="Staff">Staff</option>
                                    </select>
                                </div>
                            </div>
                            <div class="row" style="margin-top: 10px">
                                <div class="col-md-12 form-group">
                                    <input required type="text"  name="password" class="form-control" placeholder="password">
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Save changes</button>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>

</div>
