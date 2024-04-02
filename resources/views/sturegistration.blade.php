@extends('common\mainmaster')
@section('datadisplay')
<div class="content-box">
<div class="row">
<div class="col-lg-12">
   <div class="element-wrapper">
      <h6 class="element-header">Default Form Layout</h6>
      <div class="element-box">
      @if($errors->any())
			   @foreach($errors->all() as $error)
		      <p style="color:red; text-align:center; margin-bottom: 0.1rem;">{{ $error }}</p>
		      @endforeach
		      @endif
            @if(Session::has('sucess'))
				<p style="color:green; text-align:center;">{{ Session::get('sucess') }}</p>
			    @endif
            <form action="{{route('studentregister')}}" method="post">
            @csrf
            <h5 class="form-header">Default Layout</h5>
            <div class="form-desc">Discharge best employed your phase each the of shine. Be met even reason consider logbook redesigns. Never a turned interfaces among asking</div>
            
			<fieldset class="form-group">
              
               <div class="row">
                  <div class="col-sm-6">
                     <div class="form-group"><label for="">Name</label><input class="form-control" name="name" placeholder="First Name"></div>
                  </div>
                  <div class="col-sm-6">
                     <div class="form-group"><label for="">Father Name</label><input class="form-control" name="fname" placeholder="Father's Name"></div>
                  </div>
               </div>
			   
			    <div class="row">
                  <div class="col-sm-6">
                     <div class="form-group"><label for="">Phone</label><input class="form-control" name="phone" placeholder="Phone"></div>
                  </div>
                  <div class="col-sm-6">
                     <div class="form-group"><label for="">Email</label><input class="form-control" placeholder="email" type="email"></div>
                  </div>
               </div>
			   
			    <div class="row">
                  <div class="col-sm-6">
                     <div class="form-group"><label for="">Fees</label><input class="form-control" name="fee" placeholder="Fee"></div>
                  </div>
                  <div class="col-sm-6">
                     <div class="form-group"><label for="">Payment Mode</label>
					  <select class="form-control" name="pmode">
					  <option>Online</option>
					  <option>Off Line</option>
                      </select>
					 </div>
                  </div>
               </div>
			   
			    <div class="row">
                  <div class="col-sm-6">
                     <div class="form-group"><label for="">Due Fee</label><input class="form-control" name="dfee" placeholder="Due fee"></div>
                  </div>
                  <div class="col-sm-6">
                     <div class="form-group"><label for="">Duration</label><input class="form-control" name="duration" placeholder="Duration"></div>
                  </div>
               </div>
               <div class="row">
               <div class="col-sm-6">
                  <div class="form-group">
                        <label for="intime">IN Time</label>
                        <div class="row">
                           <div class="col">
                              <select class="form-control" name="in_hour">
                              @for ($hour = 1; $hour <= 12; $hour++)
                                 @for ($minute = 0; $minute < 60; $minute += 15)
                                       <option value="{{ sprintf('%02d', $hour) }}:{{ sprintf('%02d', $minute) }}">{{ sprintf('%02d', $hour) }}:{{ sprintf('%02d', $minute) }}</option>
                                 @endfor
                              @endfor
                              </select>
                           </div>
                           <div class="col">
                              <select class="form-control" name="in_ampm">
                                    <option value="AM">AM</option>
                                    <option value="PM">PM</option>
                              </select>
                           </div>
                        </div>
                  </div>
               </div>
               <div class="col-sm-6">
                  <div class="form-group">
                        <label for="outtime">OUT Time</label>
                        <div class="row">
                           <div class="col">
                              <select class="form-control" name="out_hour">
                              @for ($hour = 1; $hour <= 12; $hour++)
                                 @for ($minute = 0; $minute < 60; $minute += 15)
                                       <option value="{{ sprintf('%02d', $hour) }}:{{ sprintf('%02d', $minute) }}">{{ sprintf('%02d', $hour) }}:{{ sprintf('%02d', $minute) }}</option>
                                 @endfor
                              @endfor
                              </select>
                           </div>
                           <div class="col">
                              <select class="form-control" name="out_ampm">
                                    <option value="AM">AM</option>
                                    <option value="PM">PM</option>
                              </select>
                           </div>
                        </div>
                  </div>
               </div>
            </div>


			   <div class="row">
                  <div class="col-sm-4">
                     <div class="form-group"><label for="">Enter Aadhaar Number</label><input class="form-control" name="adhaar" placeholder="Enter Adhaar Number"></div>
                  </div>
                  <div class="col-sm-4">
				  <div class="form-group"><label for="">Upload Aadhaar</label><br /> <input type="file" name="adharimage"></div>
                  </div>
				  <div class="col-sm-4">
				  <div class="form-group"><label for="">Upload Your Photo</label><br /> <input type="file"  name="image"></div>
                  </div>
               </div>
			   <div class="form-group"><label> Enter Your Current Address</label><textarea class="form-control" name="address" rows="3"></textarea></div>
            </fieldset>	
            <div class="form-buttons-w"><button class="btn btn-primary" type="submit"> Submit</button></div>
         </form>
      </div>
   </div>
</div>
</div>
</div>
@endsection
