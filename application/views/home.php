<div id="content-page" class="content-page">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="iq-card iq-card-block iq-card-stretch iq-card-height">
                    <div class="iq-card-header d-flex justify-content-between align-items-center position-relative">
                        <div class="iq-header-title">
                            <h4 class="card-title mb-0">Browse Books</h4>
                        </div>
                        <div class="iq-card-header-toolbar d-flex align-items-center">
                            <a href="<?= site_url('category') ?>" class="btn btn-sm btn-primary view-more">View More</a>
                        </div>
                    </div>
                    <div class="iq-card-body">
                        <div class="row">
                            <?php
                            foreach ($books as $item) {
                                if ($item->subscription == 1) {
                                    $subs = 'Nerd+';
                                } else {
                                    $subs = 'Basic';
                                }
                                echo '
                                    <div class="col-sm-6 col-md-4 col-lg-3">
                                    <div class="iq-card iq-card-block iq-card-stretch iq-card-height browse-bookcontent">
                                        <div class="iq-card-body p-0">
                                            <div class="d-flex align-items-center">
                                                <div class="col-6 p-0 position-relative image-overlap-shadow">
                                                    <a href="javascript:void();"><img class="img-fluid rounded w-100" src="' . $item->image . '" alt=""></a>
                                                    <div class="view-book">
                                                        <a href="'.site_url('book/'.$item->id).'" class="btn btn-sm btn-white">View Book</a>
                                                    </div>
                                                </div>
                                                <div class="col-6">
                                                    <div class="mb-2">
                                                        <h6 class="mb-1">' . $item->title . '</h6>
                                                        <p class="font-size-13 line-height mb-1">' . $item->author . '</p>
                                                    </div>
                                                    <div class="price d-flex align-items-center">
                                                        <h6 class="text-primary">' . $subs . '</h6>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>';
                            }
                            ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>