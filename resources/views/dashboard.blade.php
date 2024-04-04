@extends('common\mainmaster')
@section('datadisplay')

<div class="content-w">
               <div class="content-i">
                  <div class="content-box">

                  <div class="row pt-2">
   <div class="col-6 col-sm-4 col-xxl-2">
      <a class="element-box el-tablo centered trend-in-corner smaller" href="#">
         <div class="value">{{ $stquantity }}</div>
         <div><h5>Total Students</h5></div>
         <div class="trending trending-up"><span>12%</span><i class="os-icon os-icon-arrow-up6"></i></div>
      </a>
   </div>
   <div class="col-6 col-sm-4 col-xxl-2">
      <a class="element-box el-tablo centered trend-in-corner smaller" href="#">
         <div class="value">50</div>
         <div><h5>Enrolled This Month</h5></div>
         <div class="trending trending-down"><span>12%</span><i class="os-icon os-icon-arrow-down6"></i></div>
      </a>
   </div>
   <div class="col-6 col-sm-4 col-xxl-2">
      <a class="element-box el-tablo centered trend-in-corner smaller" href="#">
      <div class="value">500</div>
         <div><h5>Total Earn</h5></div>
         <div class="trending trending-up"><span>12%</span><i class="os-icon os-icon-arrow-up6"></i></div>
      </a>
   </div>

 
 
</div>
                  
                     <div class="element-wrapper">
                        <h6 class="element-header">Enrolled Students</h6>
                        <div class="element-box-tp">
                           <div class="table-responsive">
                              <table class="table table-padded">
                                 <thead>
                                    <tr>
                                       <th class="text-center">ID</th>
                                       <th class="text-center">Name</th>
                                       <th class="text-center">Father's Name</th>
                                       <th class="text-center">Contact</th>
                                       <th class="text-center">Fee</th>
                                       <th class="text-center">Batch Hours</th>
                                       <th class="text-center">In Time</th>
                                       <th class="text-center">Out Time</th>
                                       <th class="text-center">Adhaar</th>
                                       <th class="text-center">Actions</th>
                                    </tr>
                                 </thead>
                                 <tbody>
                                 @php $counter = 1; @endphp
                                 @foreach($stdetail as $student)
                                    <tr>
                                       <td>
                                          <span class="status-pill smaller green"></span>
                                          <span>{{ $counter }}</span>   
                                       </td>
                                       <td class="nowrap">
                                       {{$student->name}}
                                       </td>
                                       <td class="nowrap">
                                       {{$student->fname}}
                                       </td>
                                       <td class="cell-with-media">
                                       {{$student->phone}}
                                       </td>
                                       <td class="cell-with-media">
                                       {{$student->fee}}
                                       </td>
                                       <td class="cell-with-media">
                                       {{$student->duration}}
                                       </td>
                                       <td class="cell-with-media">
                                       {{$student->intime}}
                                       </td>
                                       <td class="cell-with-media">
                                       {{$student->outtime}}
                                       </td>
                                       <td class="cell-with-media">
                                       {{$student->adhaar}}
                                       </td>
                                       <td>
                                       <!-- <button class="mr-2 mb-2 btn btn-primary" type="button"> view</button> -->
                                       <button class="mr-2 mb-2 btn btn-primary" data-toggle="modal" data-target="#viewModal" data-student="{{ json_encode($student) }}">View</button>
                                       </td>
                                    </tr>
                                    @php $counter++; @endphp
                                    @endforeach
                                 </tbody>
                              </table>
                           </div>
                        </div>
                     </div>
                     </div> 
                     <!-- Modal -->
                     <div class="modal fade" id="viewModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                     <div class="modal-dialog" role="document">
                        <div class="modal-content">
                           <div class="modal-header">
                           <h5 class="modal-title" id="exampleModalLabel">Student Details</h5>
                           <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                           </button>
                           </div>
                           <div class="modal-body">
                           <div id="studentDetails">
                           <!-- Details will be populated here -->
                           </div>
                           </div>
                           <div class="modal-footer">
                           <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                           </div>
                        </div>
                     </div>
                     </div>

                     

                  </div>
               </div>
            </div>
@endsection
