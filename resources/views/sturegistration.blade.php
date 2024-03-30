@extends('common\mainmaster')
@section('datadisplay')
<div class="content-box">
<div class="row">
<div class="col-lg-12">
   <div class="element-wrapper">
      <h6 class="element-header">Default Form Layout</h6>
      <div class="element-box">
         <form>
            <h5 class="form-header">Default Layout</h5>
            <div class="form-desc">Discharge best employed your phase each the of shine. Be met even reason consider logbook redesigns. Never a turned interfaces among asking</div>
            
			<fieldset class="form-group">
             
               <div class="row">
                  <div class="col-sm-6">
                     <div class="form-group"><label for="">Name</label><input class="form-control" placeholder="First Name"></div>
                  </div>
                  <div class="col-sm-6">
                     <div class="form-group"><label for="">Father Name</label><input class="form-control" placeholder="Last Name"></div>
                  </div>
               </div>
			   
			    <div class="row">
                  <div class="col-sm-6">
                     <div class="form-group"><label for="">Phone</label><input class="form-control" placeholder="First Name"></div>
                  </div>
                  <div class="col-sm-6">
                     <div class="form-group"><label for="">Email</label><input class="form-control" placeholder="Enter email" type="email"></div>
                  </div>
               </div>
			   
			    <div class="row">
                  <div class="col-sm-6">
                     <div class="form-group"><label for="">Fees</label><input class="form-control" placeholder="First Name"></div>
                  </div>
                  <div class="col-sm-6">
                     <div class="form-group"><label for="">Payment Mode</label>
					  <select class="form-control">
					  <option>Online</option>
					  <option>Off Line</option>
                      </select>
					 </div>
                  </div>
               </div>
			   
			    <div class="row">
                  <div class="col-sm-6">
                     <div class="form-group"><label for="">Due Fee</label><input class="form-control" placeholder="First Name"></div>
                  </div>
                  <div class="col-sm-6">
                     <div class="form-group"><label for="">Duration</label><input class="form-control" placeholder="Last Name"></div>
                  </div>
               </div>
			   
			    <div class="row">
                  <div class="col-sm-6">
                     <div class="form-group"><label for="">IN Time</label><input class="form-control" placeholder="First Name"></div>
                  </div>
                  <div class="col-sm-6">
                     <div class="form-group"><label for="">OUT Time</label><input class="form-control" placeholder="Last Name"></div>
                  </div>
               </div>
			   
			   <div class="row">
                  <div class="col-sm-4">
                     <div class="form-group"><label for="">Enter Aadhaar Number</label><input class="form-control" placeholder="First Name"></div>
                  </div>
                  <div class="col-sm-4">
				  <div class="form-group"><label for="">Upload Aadhaar</label><br /> <input type="file" id="myFile" name="filename"></div>
                  </div>
				  <div class="col-sm-4">
				  <div class="form-group"><label for="">Upload Your Photo</label><br /> <input type="file" id="myFile" name="filename"></div>
                  </div>
               </div>
			   <div class="form-group"><label> Enter Your Current Address</label><textarea class="form-control" rows="3"></textarea></div>
            </fieldset>
			
			
			
            <div class="form-buttons-w"><button class="btn btn-primary" type="submit"> Submit</button></div>
         </form>
      </div>
   </div>
</div>
</div>
</div>
@endsection
