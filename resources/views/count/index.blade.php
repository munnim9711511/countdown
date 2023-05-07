@extends('layout.login')
@section('body')
   <div class="row" style="margin-top: 20px">
    <div class="col-md-12">
        <img src="{{ asset('./img/logo_ppm.png') }}" alt="" class="mx-auto d-block">
    </div>
    
   </div>
   <div class="row" style="margin-top: 20px">
    <div class="col-md-12">
       <h2 class="text-center" style="font-weight: bolder;">
        Voting Day
       </h2>
       <h3 class="text-center" style="font-weight: bolder;color: #f8319c;">
       {{\Carbon\Carbon::parse($count->e_date)->format('d  M  Y')}}
       </h3>
    </div>
    
   </div>
   <div class="row" style="margin-top: 20px">
    <div class="col-md-2 container">
        <div class="card" ">
            <div class="card-body">
             <h2 class="text-center" style="
             font-size: 6em;
             font-weight: bolder;
             color: #f8319c;">{{$count->remaining_days}}</h2>
            </div>
          </div> 
          <p style="font-weight: bolder;
          font-size: 22px;"  class="text-center"> Remaining Days</p>
    </div>
    
   </div>
   <div class="row" style="margin-top: 20px">
    <div class="col-md-6 container">
        <div class="card" ">
            <div class="card-body">
                <div class="row">
                    <div class="col-md-2" style="    background-color: #f8319c;
                    border-radius: 18px;
                    position: relative;
                    top: -36px;">
                        <h4 class="text-center" style="color: white">Notice</h4>
                    </div>
                </div>
                <div class="row">
                    @if ($notice !==null)
                    <div class="col-md-12">
                        <span class="h4" id="noTitlte">
                            {{$notice->title}}
                        </span>
                        <span class="h6" style="float:right">
                            <i class="material-icons" style="vertical-align: bottom">date_range</i>  {{\Carbon\Carbon::parse($count->e_date)->format('D, M Y')}}
                        </h3>
                        </span>
                        <hr>
                        <h5>
                            {{$notice->detail}}
                        </h5>
                    </div>
                    @endif
                    
                </div>
            
          </div> 
          
    </div>
    
   </div>
@endsection