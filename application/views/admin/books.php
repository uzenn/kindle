<div id="content-page" class="content-page">
  <div class="container-fluid">
    <div class="row">
      <div class="col-sm-12">
        <div class="iq-card">
          <div class="iq-card-header d-flex justify-content-between">
            <div class="iq-header-title">
              <h4 class="card-title">Books List</h4>
            </div>
            <div class="iq-card-header-toolbar d-flex align-items-center">
              <a href="<?= site_url('admin/new-books') ?>" class="btn btn-primary">Add New book</a>
            </div>
          </div>
          <div class="iq-card-body">
            <div class="table-responsive">
              <table id="data" class="data-tables table table-striped table-bordered" style="width:100%">
                <thead>
                  <tr>
                    <th style="width: 3%;">No</th>
                    <th style="width: 12%;">Image</th>
                    <th style="width: 15%;">Title</th>
                    <th style="width: 15%;">Catrgory</th>
                    <th style="width: 15%;">Author</th>
                    <th style="width: 18%;">Description</th>
                    <th style="width: 7%;">Subscription</th>
                    <th style="width: 7%;">File</th>
                    <th style="width: 15%;">Action</th>
                  </tr>
                </thead>
                <tbody>
                  <?php
                  $no = 1;
                  foreach ($books as $item) {
                    if ($item->subscription == 1) {
                      $subs = 'Nerd+';
                    } else {
                      $subs = 'Basic';
                    }
                    echo '
                      <tr>
                          <td>' . $no . '</td>
                          <td><img class="img-fluid rounded" src="' . $item->image . '" alt=""></td>
                          <td>' . $item->title . '</td>
                          <td>' . $item->category . '</td>
                          <td>' . $item->author . '</td>
                          <td>
                            <p class="mb-0">' . $item->description . '</p>
                          </td>
                          <td>' . $subs . '</td>
                          <td><a target="_blank" href="' . $item->file . '"><i class="ri-file-fill text-primary font-size-18"></i></a></td>                                        
                          <td>
                            <div class="flex align-items-center list-user-action">
                              <a class="mdEdit" href="#" data-id="' . $item->id . '" data-image="' . $item->image . '" data-title="' . $item->title . '" data-category="' . $item->category . '" data-author="' . $item->author . '" data-description="' . $item->description . '" data-subs="' . $item->subscription . '" data-file="' . $item->file . '" data-toggle="modal" data-target="#mdEdit"><i class="ri-pencil-line"></i></a>
                              <a class="mdDelete" href="#" data-id="' . $item->id . '" data-image="' . $item->image . '" data-title="' . $item->title . '" data-toggle="modal" data-target="#mdDelete"><i class="ri-delete-bin-line"></i></a>
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
        <h5 class="modal-title">Edit Book</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="<?= site_url('admin/edit-book') ?>" method="POST" enctype="multipart/form-data">
        <div class="modal-body">
          <div class="form-group">
            <label>Title:</label>
            <input type="text" name="title" class="form-control">
          </div>
          <div class="form-group">
            <label>Category:</label>
            <input type="text" name="category" class="form-control">
          </div>
          <div class="form-group">
            <label>Author:</label>
            <input type="text" name="author" class="form-control">
          </div>
          <div class="form-group">
            <label>Image:</label>
            <a class="image" target="_blank" href=""><i class="ri-image-fill text-primary font-size-18"></i></a>
            <div class="custom-file">
              <input type="file" name="image" class="custom-file-input" accept="image/png, image/jpeg">
              <label class="custom-file-label">Choose file</label>
            </div>
          </div>
          <div class="form-group">
            <label>PDF:</label>
            <a class="file" target="_blank" href=""><i class="ri-file-fill text-primary font-size-18"></i></a>
            <div class="custom-file">
              <input type="file" name="file" class="custom-file-input" accept="application/pdf">
              <label class="custom-file-label">Choose file</label>
            </div>
          </div>
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
          <div class="form-group">
            <label>Description:</label>
            <textarea class="form-control" name="description" rows="4"></textarea>
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
<div id="mdDelete" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Delete Confirmation</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="<?= site_url('admin/delete-book') ?>" method="POST" enctype="multipart/form-data">
        <div class="modal-body">
          <img class="img-fluid rounded image" src="" alt="" width="400px">
          <br><br>
          <p>Delete <strong class="text-danger title"></strong> ?</p>
        </div>
        <div class="modal-footer">
          <input type="hidden" id="mdID" class="form-control" name="id">
          <button type="submit" class="btn btn-danger">Delete</button>
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        </div>
      </form>
    </div>
  </div>
</div>