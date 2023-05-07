@extends('layout.blank')
@section('body')
    <form style="margin-top: 20px" action="/set-counter" method="post" enctype="multipart/form-data">

        <div class="row">
            @csrf
           
            <div class="col-md-2 form-group">
                <label for="">Set Start Date</label>
                <input required name="sdate" type="date" class="form-control">
            </div>
            <div class="col-md-2 ">
                <label for="">Set End Date</label>
                <input required name="edate" type="date" class="form-control">
            </div>
            <div class="col-md-1 form-group">
                <button class="btn btn-outline-dark" type="submit" style="margin-top: 24px">save</button>
            </div>

        </div>
    </form>

    <div class="row" style="margin-top: 20px">
        <div class="col-md-12">
            <table class="table table-striped">
@if ($count !== null)
<tbody>
    <tr>
        <td>
            Started Date
        </td>
        <td>
           {{ \Carbon\Carbon::parse($count->s_date)->format('Y-m-d')}}
        </td>
        <td>
            End Date
        </td>
        <td>
           {{ \Carbon\Carbon::parse($count->e_date)->format('Y-m-d')}}
        </td>
        <td>
            remaining
        </td>
        <td>
           {{$count->remaining_days}}
        </td>
    </tr>
</tbody>@endif

            </table>
        </div>
    </div>
@endsection
