@extends('layout.blank')
@section('body')
    <div class="row">
        <div class="col-md-12">

             <x-notice-component />
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>
                            ID
                        </th>
                        <th>
                            Date
                        </th>
                        <th>
                            Info
                        </th>
                        <th>
                            More
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @if ($notices !== null)
                    @foreach ($notices as $notice)
                    <tr>
                        <td>{{$notice->id}}</td>
                        <td>{{ \Carbon\Carbon::parse($notice->date_published)->format('d/m/Y')}}</td>
                        <td>{{$notice->detail}}</td>
                        <td>

                            <a href="/notice/{{$notice->id}}" class="btn"><i class="material-icons danger">delete</i></a>

                            <a href="/notice/edit/{{$notice->id}}" class="btn">
                                <i class="material-icons danger">edit</i>
                            </a>
                        </td>

                    </tr>
                @endforeach
                    @endif

                </tbody>
            </table>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            {{ $notices->links() }}

        </div>
    </div>
@endsection
