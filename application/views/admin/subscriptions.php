<div id="content-page" class="content-page">
   <div class="container-fluid">
      <div class="row">
         <div class="col-sm-12">
            <div class="iq-card">
               <div class="iq-card-header d-flex justify-content-between">
                  <div class="iq-header-title">
                     <h4 class="card-title">User List</h4>
                  </div>
               </div>
               <div class="iq-card-body">
                  <div class="table-responsive">
                     <table id="data" class="data-tables table table-striped table-bordered" style="width:100%">
                        <thead>
                           <tr>
                              <th style="width: 3%;">No</th>
                              <th style="width: 12%;">Receipt</th>
                              <th style="width: 15%;">User</th>
                              <th style="width: 15%;">Image</th>
                              <th style="width: 15%;">Transaction Date</th>
                              <th style="width: 18%;">Price</th>
                           </tr>
                        </thead>
                        <tbody>
                           <?php
                           $no = 1;
                           foreach ($subs as $item) {
                              echo '
                                 <tr>
                                    <td>' . $no . '</td>
                                    <td>' . $item->receipt . '</td>
                                    <td>' . $item->name . '</td>
                                    <td><a target="_blank" href="' . $item->image . '"><i class="ri-file-fill text-primary font-size-18"></i></a></td>                                        
                                    
                                    <td>' . date("d F Y H:i:s", strtotime($item->transaction_date)) . '</td>
                                    <td>' . $item->price . '</td>
                                 </tr>
                              ';
                              $no++;
                           }
                           ?>
                        </tbody>
                     </table>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
</div>