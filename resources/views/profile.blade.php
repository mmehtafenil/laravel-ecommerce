@extends('master')
@section('content')

<div class="custom-product">
     <div class="col-sm-10">
        <div class="trending-wrapper">
            <h4>My Profile </h4>
             <div class="col-sm-4">
                    <div class="">
                      <h2>Name : {{Session::get('user')['name']}}</h2>
                      <h5>Contact : {{Session::get('user')['contact']}}</h5>
                      <h5>Email ID : {{Session::get('user')['email']}}</h5>
                      <a class="btn btn-primary" href="/edit">Edit</a>
                      <a class="btn btn-danger" href="/edit">Delete</a>
                    </div>
             </div>
            
          </div>

     </div>
</div>

@endsection