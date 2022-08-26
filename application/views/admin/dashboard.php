<div id="content-page" class="content-page">
   <div class="container-fluid">
      <div class="row">
         <div class="col-md-6 col-lg-4">
            <div class="iq-card iq-card-block iq-card-stretch iq-card-height">
               <div class="iq-card-body">
                  <div class="d-flex align-items-center">
                     <div class="rounded-circle iq-card-icon bg-primary"><i class="ri-user-line"></i></div>
                     <div class="text-left ml-3">
                        <h2 class="mb-0"><span class="counter"><?= empty($users->total) ? "0" : number_format($users->total) ?></span></h2>
                        <h5 class="">Users</h5>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div class="col-md-6 col-lg-4">
            <div class="iq-card iq-card-block iq-card-stretch iq-card-height">
               <div class="iq-card-body">
                  <div class="d-flex align-items-center">
                     <div class="rounded-circle iq-card-icon bg-danger"><i class="ri-book-line"></i></div>
                     <div class="text-left ml-3">
                        <h2 class="mb-0"><span class="counter"><?= empty($books->total) ? "0" : number_format($books->total) ?></span></h2>
                        <h5 class="">Books</h5>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div class="col-md-6 col-lg-4">
            <div class="iq-card iq-card-block iq-card-stretch iq-card-height">
               <div class="iq-card-body">
                  <div class="d-flex align-items-center">
                     <div class="rounded-circle iq-card-icon bg-warning"><i class="ri-shopping-cart-2-line"></i></div>
                     <div class="text-left ml-3">
                        <h2 class="mb-0">Rp. <span class="counter"><?= empty($sales->total) ? "0" : number_format($sales->total) ?></span></h2>
                        <h5 class="">Sale</h5>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div class="col-sm-12">
            <div class="iq-card iq-card-block iq-card-stretch iq-card-height">
               <div class="iq-card-header d-flex justify-content-between">
                  <div class="iq-header-title">
                     <h4 class="card-title">Invoices</h4>
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