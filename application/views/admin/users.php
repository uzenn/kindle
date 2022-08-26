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
                              <th style="width: 12%;">Name</th>
                              <th style="width: 15%;">Email</th>
                              <th style="width: 15%;">Status</th>
                              <th style="width: 15%;">Join Date</th>
                              <th style="width: 15%;">Action</th>
                           </tr>
                        </thead>
                        <tbody>
                           <?php
                           $no = 1;
                           foreach ($users as $item) {
                              if ($item->status == 1) {
                                 $subs = 'Nerd+';
                               } else {
                                 $subs = 'Basic';
                               }
                              echo '
                                 <tr>
                                    <td>' . $no . '</td>
                                    <td>' . $item->name . '</td>
                                    <td>' . $item->email . '</td>
                                    <td>' . $subs . '</td>
                                    <td>' . date("d F Y H:i:s", strtotime($item->join_date)) . '</td>                                      
                                    <td>
                                       <div class="flex align-items-center list-user-action">
                                          <a class="mdEdit" href="#" data-id="' . $item->id . '" data-subs="' . $item->status . '" data-toggle="modal" data-target="#mdEdit"><i class="ri-pencil-line"></i></a>
                                       </div>
                                    </td>
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
<div id="mdEdit" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Edit User's Status</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="<?= site_url('admin/edit-user') ?>" method="POST" enctype="multipart/form-data">
        <div class="modal-body">
          <div class="form-group">
            <label>Subscription:</label>
            <br>
            <div class="custom-control custom-radio custom-radio-color-checked custom-control-inline">
              <input type="radio" id="customRadio-1" name="subscription" class="custom-control-input bg-primary" value="0" checked>
              <label class="custom-control-label" for="customRadio-1"> Basic </label>
            </div>
            <div class="custom-control custom-radio custom-radio-color-checked custom-control-inline">
              <input type="radio" id="customRadio-2" name="subscription" class="custom-control-input bg-primary" value="1">
              <label class="custom-control-label" for="customRadio-2"> Nerd+ </label>
            </div>
          </div>
        </div>
        <div class="modal-footer">
          <input type="hidden" id="mdID" class="form-control" name="id">
          <button type="submit" class="btn btn-primary">Save changes</button>
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        </div>
      </form>
    </div>
  </div>
</div>