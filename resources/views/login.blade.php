@extends('common\autmaster')
@section('login')
<div class="auth-box-w">
            <h4 class="auth-header" style="padding-top:20px;">Login Form</h4>

            @if($errors->any())
			   @foreach($errors->all() as $error)
		      <p style="color:red; text-align:center; margin-bottom: 0.1rem;">{{ $error }}</p>
		      @endforeach
		      @endif

            <form action="{{route('userlogin')}}" method="post">
              @csrf
               <div class="form-group">
                  <label for="">Username
                  </label>
                  <input class="form-control" name="email" placeholder="Enter your username">
                  <div class="pre-icon os-icon os-icon-user-male-circle"></div>
               </div>
               <div class="form-group">
                  <label for="">Password
                  </label>
                  <input class="form-control" name="password" placeholder="Enter your password" type="password">
                  <div class="pre-icon os-icon os-icon-fingerprint"></div>
               </div>
               <div class="buttons-w">
                  <button class="btn btn-primary">Log me in</button>
                  <div class="form-check-inline">
                     <label class="form-check-label">
                     <input class="form-check-input" type="checkbox">Remember Me
                     </label>
                  </div>
               </div>
            </form>
         </div>
@endsection
