@extends('common\mainmaster')
@section('datadisplay')
<div class="content-w">
               <div class="content-i">
                  <div class="content-box">
                     <div class="element-wrapper">
                        <h6 class="element-header">Recent Transactions</h6>
                        <div class="element-box-tp">
                           <div class="table-responsive">
                              <table class="table table-padded">
                                 <thead>
                                    <tr>
                                       <th>Status</th>
                                       <th>Date</th>
                                       <th>Description</th>
                                       <th class="text-center">Category</th>
                                       <th class="text-right">Amount</th>
                                    </tr>
                                 </thead>
                                 <tbody>
                                    <tr>
                                       <td class="nowrap">
                                          <span class="status-pill smaller green">
                                          </span>
                                          <span>Complete
                                          </span>
                                       </td>
                                       <td>
                                          <span>Today
                                          </span>
                                          <span class="smaller lighter">1:52am
                                          </span>
                                       </td>
                                       <td class="cell-with-media"><img alt="" src="img/company1.png" style="height: 25px;">
                                          <span>Banana Shakes LLC
                                          </span>
                                       </td>
                                       <td class="text-center"><a class="badge badge-success" href="#">Shopping</a></td>
                                       <td class="text-right bolder nowrap">
                                          <span class="text-success">+ 1,250 USD
                                          </span>
                                       </td>
                                    </tr>
                                    <tr>
                                       <td class="nowrap">
                                          <span class="status-pill smaller red">
                                          </span>
                                          <span>Declined
                                          </span>
                                       </td>
                                       <td>
                                          <span>Jan 19th
                                          </span>
                                          <span class="smaller lighter">3:22pm
                                          </span>
                                       </td>
                                       <td class="cell-with-media"><img alt="" src="img/company2.png" style="height: 25px;">
                                          <span>Stripe Payment Processing
                                          </span>
                                       </td>
                                       <td class="text-center"><a class="badge badge-danger" href="#">Cafe</a></td>
                                       <td class="text-right bolder nowrap">
                                          <span class="text-success">+ 952.23 USD
                                          </span>
                                       </td>
                                    </tr>
                                    <tr>
                                       <td class="nowrap">
                                          <span class="status-pill smaller yellow">
                                          </span>
                                          <span>Pending
                                          </span>
                                       </td>
                                       <td>
                                          <span>Yesterday
                                          </span>
                                          <span class="smaller lighter">7:45am
                                          </span>
                                       </td>
                                       <td class="cell-with-media"><img alt="" src="img/company3.png" style="height: 25px;">
                                          <span>MailChimp Services
                                          </span>
                                       </td>
                                       <td class="text-center"><a class="badge badge-warning" href="#">Restaurants</a></td>
                                       <td class="text-right bolder nowrap">
                                          <span class="text-danger">- 320 USD
                                          </span>
                                       </td>
                                    </tr>
                                    <tr>
                                       <td class="nowrap">
                                          <span class="status-pill smaller yellow">
                                          </span>
                                          <span>Pending
                                          </span>
                                       </td>
                                       <td>
                                          <span>Jan 23rd
                                          </span>
                                          <span class="smaller lighter">2:12pm
                                          </span>
                                       </td>
                                       <td class="cell-with-media"><img alt="" src="img/company1.png" style="height: 25px;">
                                          <span>Starbucks Cafe
                                          </span>
                                       </td>
                                       <td class="text-center"><a class="badge badge-primary" href="#">Shopping</a></td>
                                       <td class="text-right bolder nowrap">
                                          <span class="text-success">+ 17.99 USD
                                          </span>
                                       </td>
                                    </tr>
                                    <tr>
                                       <td class="nowrap">
                                          <span class="status-pill smaller green">
                                          </span>
                                          <span>Complete
                                          </span>
                                       </td>
                                       <td>
                                          <span>Jan 12th
                                          </span>
                                          <span class="smaller lighter">9:51am
                                          </span>
                                       </td>
                                       <td class="cell-with-media"><img alt="" src="img/company4.png" style="height: 25px;">
                                          <span>Ebay Marketplace
                                          </span>
                                       </td>
                                       <td class="text-center"><a class="badge badge-danger" href="#">Groceries</a></td>
                                       <td class="text-right bolder nowrap">
                                          <span class="text-danger">- 244 USD
                                          </span>
                                       </td>
                                    </tr>
                                    <tr>
                                       <td class="nowrap">
                                          <span class="status-pill smaller yellow">
                                          </span>
                                          <span>Pending
                                          </span>
                                       </td>
                                       <td>
                                          <span>Jan 9th
                                          </span>
                                          <span class="smaller lighter">12:45pm
                                          </span>
                                       </td>
                                       <td class="cell-with-media"><img alt="" src="img/company2.png" style="height: 25px;">
                                          <span>Envato Templates Inc
                                          </span>
                                       </td>
                                       <td class="text-center"><a class="badge badge-primary" href="#">Business</a></td>
                                       <td class="text-right bolder nowrap">
                                          <span class="text-success">+ 340 USD
                                          </span>
                                       </td>
                                    </tr>
                                 </tbody>
                              </table>
                           </div>
                        </div>
                     </div>
                    
                    
                     
                  </div>
               </div>
            </div>
@endsection
