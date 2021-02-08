@extends('layouts.header_dashboard')

@section('content')

<div id="page-wrapper">

<div class="table-responsive bs-example widget-shadow">
					
                     
        @if(count($notifications) >0 )
        @foreach($notifications as $notification)
        <div class="col-sm-4 w3-agileits-crd widgettable">
						
                            <div class="card card-contact-list">
							<div class="agileinfo-cdr">
                                <div class="card-header">
                                    <h3>Notifications</h3>
                                </div>
                                <hr class="widget-separator">
                                <div class="card-body p-b-20">
                                    <div class="list-group">

                                        <a class="list-group-item media" href="">
                                             <div class="pull-left">
                                                <img class="lg-item-img" src="{{Auth::user()->photo}}" alt="">
                                            </div>
                                            <div class="media-body">
                                                <div class="pull-left">
                                                	<div class="lg-item-heading">{{$notification->username}}</div>
                                                	<small class="lg-item-text">{{$notification->message}}</small>
                                                </div>
                                                <div class="pull-right">
                              
                                                    <form action="/notifications/{{$notification->id}}" method="POST">
                                                    @csrf
                                                    @method("DELETE")
                                                     <button type="submit" class="btn btn-danger btn-sm"> Delete </button> 
                                                    </form>

                                                </div>
                                            </div>
                                        </a>
                                   
                                  
                                       
                                        
                                   	</div>
                                </div>
                            </div>
							</div>
                      	</div>            
       @endforeach
       @else 
       <p class="alert alert-danger"> No notification found</p> 
       @endif
                            
    </div> 
    </div>
     <!--Main  Close-->


				


    @endsection            