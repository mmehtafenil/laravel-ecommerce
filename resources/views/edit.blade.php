@extends('master')
@section('content')

<nav>Edit Profile</nav>
<a class="btn btn-primary" href="/profile">Back</a>

    @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Warning!</strong> Please check input field code<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="update, '{{Session::get('user')['id']}}'">
        @csrf
        @method('PUT')
         <div>
            <div class="col-sm-4">
                <div class="form-group">
                <strong>Name</strong>
                    <input type="text" name="name" value="{{Session::get('user')['name']}}" class="form-control" placeholder="Name">
                </div><br>
            </div>
            <div class="col-sm-4">
                <div class="form-group">
                <strong>Contact</strong>
                    <input type="text" name="contact" value="{{Session::get('user')['contact']}}" class="form-control" placeholder="Contact">
                </div>
            </div>
            <div class="col-sm-4">
              <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>

    </form>

@endsection