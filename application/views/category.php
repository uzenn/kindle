<div id="content-page" class="content-page">
            <div class="container-fluid">
               <div class="row">
                  <div class="col-lg-12">
                     <div class="iq-card-transparent mb-0">
                        <div class="d-block text-center">
                           <h2 class="mb-3">Look the Book You Need</h2>    
                           <div class="w-100 iq-search-filter">
                              <ul class="list-inline p-0 m-0 row justify-content-center search-menu-options">
                                 <li class="search-menu-opt">
                                    <div class="iq-search-bar search-book d-flex align-items-center">
                                       <form action="<?= site_url('search') ?>" class="searchbox">
                                          <input type="text" name="keyword" class="text search-input" placeholder="Search...">
                                          <a class="search-link" href="#"><i class="ri-search-line"></i></a>
                                       </form>
                                       <!-- <button type="submit" class="btn btn-primary search-data ml-2">Search</button> -->
                                    </div>
                                 </li>
                              </ul>
                           </div> 
                        </div>
                     </div>
                     <div class="iq-card">
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