@extends('layout.blank')
@section('body')
    <div class="" style="padding: 15px">
        <h5>Edit</h5>
        <form action="/notice/update" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="row">
                <div class="col-md-4 form-group">
                    <input type="text" value="{{$notice->id}}" name="id" class="d-none">
                    <input name="title" value="{{ $notice->title }}" type="text" class="form-control" placeholder="title">
                </div>
            </div>
            <div class="row" style="margin-top: 10px">
                <div class="col-md-4 form-group">
                    <input name="published" type="date"
                        value="{{ \Carbon\Carbon::parse($notice->date_published)->format('Y-m-d') }}" class="form-control"
                        placeholder="publish">
                </div>

            </div>
            <div class="row" style="margin-top: 10px">
                <div class="col-md-4 form-group">
                    {{-- <trix-editor name="detail" input="x" style="height: 260px"></trix-editor> --}}
                    <textarea style="text-align: left" name="detail" class="form-control" cols="30" rows="10">
                {{ $notice->detail }}
            </textarea>
                </div>
            </div>
            <div class="row" style="margin-top: 10px">
                <div class="col-md-4 form-group">
                    <button class="btn btn-outline-dark">Update</button>
                </div>
            </div>
        </form>

    </div>
@endsection
