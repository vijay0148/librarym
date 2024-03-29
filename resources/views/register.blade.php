    @extends('common\autmaster')
	@section('register')
	
	 <div class="auth-box-w wider">
            <h4 class="auth-header" style="padding-top:20px;">Create new account</h4>
            <form action="#">
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
                        <input class="form-control" placeholder="Password" type="password">
                     </div>
                  </div>
               </div>
               <div class="buttons-w"><button class="btn btn-primary">Register Now</button></div>
            </form>
         </div>
	
	@endsection
	
      