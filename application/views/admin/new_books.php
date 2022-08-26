<div id="content-page" class="content-page">
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="iq-card">
                    <div class="iq-card-header d-flex justify-content-between">
                        <div class="iq-header-title">
                            <h4 class="card-title">Add Books</h4>
                        </div>
                    </div>
                    <div class="iq-card-body">
                        <form action="<?= site_url('admin/add-book') ?>" method="POST" enctype="multipart/form-data">
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
                                <div class="custom-file">
                                    <input type="file" name="image" class="custom-file-input" accept="image/png, image/jpeg">
                                    <label class="custom-file-label">Choose file</label>
                                </div>
                            </div>
                            <div class="form-group">
                                <label>PDF:</label>
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
                            <button type="submit" class="btn btn-primary">Submit</button>
                            <button type="reset" class="btn btn-danger">Reset</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>