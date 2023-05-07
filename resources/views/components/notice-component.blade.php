<div>
    <!-- Button trigger modal -->
    <button type="button" class="btn " style="float: right" data-bs-toggle="modal" data-bs-target="#exampleModal">
        <i class="material-icons" style="vertical-align: bottom">add</i>Notice
    </button>

    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">New Notice</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form action="/notice" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-md-12 form-group">
                                <input name="title" type="text" class="form-control" placeholder="title">
                            </div>
                        </div>
                        <div class="row" style="margin-top: 10px">
                            <div class="col-md-12 form-group">
                                <input name="published" type="date" class="form-control" placeholder="publish">
                            </div>
                        </div>
                        <div class="row" style="margin-top: 10px">
                            <div class="col-md-12 form-group">
                                {{-- <trix-editor name="detail" input="x" style="height: 260px"></trix-editor> --}}
                                <textarea name="detail" class="form-control" cols="30" rows="10"></textarea>
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
