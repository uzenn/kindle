<div id="content-page" class="content-page">
   <div class="container-fluid">
      <div class="row">
         <div class="col-sm-12">
            <div class="iq-card iq-card-block iq-card-stretch iq-card-height">
               <div class="iq-card-header d-flex justify-content-between align-items-center">
                  <h4 class="card-title mb-0">Books Description</h4>
               </div>
               <div class="iq-card-body pb-0">
                  <div class="description-contens align-items-top row">
                     <div class="col-md-4">
                        <div class="iq-card-transparent iq-card-block iq-card-stretch iq-card-height">
                           <div class="iq-card-body p-0">
                              <img src="<?= $desc->image ?>" class="img-fluid rounded" alt="" width="500px">
                           </div>
                        </div>
                     </div>
                     <div class="col-md-8">
                        <div class="iq-card-transparent iq-card-block iq-card-stretch iq-card-height">
                           <div class="iq-card-body p-0">
                              <h3 class="mb-3"><?= $desc->title ?></h3>
                              <div class="price d-flex align-items-center font-weight-500 mb-2">
                                 <span class="font-size-24 text-primary"><?= $desc->subscription ?></span>
                              </div>
                              <span class="text-dark mb-4 pb-4 iq-border-bottom d-block"><?= $desc->description ?></span>
                              <div class="text-primary mb-4">
                                 Author: <span class="text-body"><?= $desc->author ?></span><br>
                                 Category: <span class="text-body"><?= $desc->category ?></span>
                              </div>
                              <div class="mb-4 d-flex align-items-center">
                                 <?php 
                                    if ($desc->subscription == 'Nerd+' && $this->session->userdata('status') == 'nerd+' || $desc->subscription == 'Basic' && $this->session->userdata('status') == 'basic') {
                                       echo '<a target="_blank" href="'. $desc->file .'" class="btn btn-primary view-more mr-2">Read</a>';
                                    } else if ($desc->subscription == 'Nerd+' && $this->session->userdata('status') == 'basic') {
                                       echo '<a href="'. site_url('subscription') .'" class="btn btn-primary view-more mr-2">Subscribe</a>';
                                    } else {
                                       echo '<a href="'.site_url('sign-in').'" class="btn btn-primary view-more mr-2">Sign in</a>';
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
      </div>
   </div>
</div>
</div>