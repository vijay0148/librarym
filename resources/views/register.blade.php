    @extends('common\autmaster')
	@section('register')
	
	 <div class="auth-box-w wider">
            <h4 class="auth-header" style="padding-top:20px;">Create new account</h4>

            @if($errors->any())
			   @foreach($errors->all() as $error)
		      <p style="color:red; text-align:center; margin-bottom: 0.1rem;">{{ $error }}</p>
		      @endforeach
		      @endif

            @if(Session::has('sucess'))
				<p style="color:green; text-align:center;">{{ Session::get('sucess') }}</p>
			    @endif

            <form action="{{route('Userregister')}}" method="post">
               @csrf
               <div class="form-group">
                  <label for=""> Your Name
                  </label>
                  <input class="form-control" name="name" placeholder="Enter Name" type="text">
                  <div class="pre-icon os-icon os-icon-user-male-circle"></div>
               </div>
			   <div class="form-group">
                  <label for=""> Email address
                  </label>
                  <input class="form-control" name="email" placeholder="Enter email" type="email">
                  <div class="pre-icon os-icon os-icon-email-2-at2"></div>
               </div>
               <div class="row">
                  <div class="col-sm-6">
                     <div class="form-group">
                        <label for=""> Password
                        </label>
                        <input class="form-control" name="password" placeholder="Password" type="password">
                        <div class="pre-icon os-icon os-icon-fingerprint"></div>
                     </div>
                  </div>
                  <div class="col-sm-6">
                     <div class="form-group">
                        <label for="">Confirm Password
                        </label>
                        <input class="form-control" placeholder="Password" type="password" name="password_confirmation">
                     </div>
                  </div>
               </div>
               <div class="buttons-w"><button class="btn btn-primary">Register Now</button></div>
            </form>
         </div>
	
	@endsection
	
      