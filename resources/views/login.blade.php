@extends('master')
@section('content')

    
    <div class="container">
      
        <div class="row justify-content-center">
           <div class="col-sm-4">
            <form action="login" method="POST">
              @csrf
                <div class="mb-3">
                  <label for="exampleInputEmail1" class="form-label">Email address</label>
                  <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp">
                  
                </div>
                <div class="mb-3">
                  <label for="exampleInputPassword1" class="form-label">Password</label>
                  <input type="password" class="form-control" id="password" name="password">
                </div>
                
                <button type="submit" class="btn btn-success">Login</button>
              </form>
           </div>
        </div>
    </div>
@endsection
