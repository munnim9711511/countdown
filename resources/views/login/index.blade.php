@extends('layout.login')
@section('body')
    <div class="col-md-3 container">
        <form action="/login" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="row" style="margin-top:10px">
                <div class="col-md-12 form-group">
                    <input type="text" name="UserName" placeholder="user name" class="dh form-control"
                        style="border-radius:18px;text-align:center" />
                </div>
            </div>
            <div class="row" style="margin-top:10px">
                <div class="col-md-12 form-group">
                    <input type="password" name="Password" placeholder=" password" class="dh form-control"
                        style="border-radius:18px;text-align:center" />
                </div>
            </div>
            <div class="row" style="margin-top:10px">
                <div class="col-md-12 form-group">
                    <input type="submit" value="login" class="dh btn "
                        style="border-radius:18px;width:100%;background-color:#339999;color:black;height:45px" />
                </div>
            </div>
        </form>
    @endsection
