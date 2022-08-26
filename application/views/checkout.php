<div id="content-page" class="content-page">
    <div class="container-fluid checkout-content">
        <div class="row">
            <div id="cart" class="card-block show p-0 col-12">
                <div class="row align-item-center">
                    <div class="col-lg-8">
                        <div class="iq-card">
                            <div class="iq-card-header d-flex justify-content-between iq-border-bottom mb-0">
                                <div class="iq-header-title">
                                    <h4 class="card-title">Subscription</h4>
                                </div>
                            </div>
                            <div class="iq-card-body">
                                <ul class="list-inline p-0 m-0">
                                    <li class="checkout-product">
                                        <div class="row align-items-center">
                                            <div class="col-sm-2">
                                                <span class="checkout-product-img">
                                                    <a href="javascript:void();"><img class="img-fluid rounded" src="<?= base_url('assets/images/logo.png') ?>" alt=""></a>
                                                </span>
                                            </div>
                                            <div class="col-sm-4">
                                                <div class="checkout-product-details">
                                                    <h5>NERD+</h5>
                                                    <p class="text-success">Available</p>
                                                    <div class="price">
                                                        <h5>Rp. 50,000</h5>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="iq-card">
                            <div class="iq-card-body">
                                <p><b>Price Details</b></p>
                                <div class="d-flex justify-content-between mb-1">
                                    <span>Total MRP</span>
                                    <span>Rp. 50,000</span>
                                </div>
                                <hr>
                                <div class="d-flex justify-content-between">
                                    <span class="text-dark"><strong>Total</strong></span>
                                    <span class="text-dark"><strong>Rp. 50,000</strong></span>
                                </div>
                                <a id="place-order" href="javascript:void();" class="btn btn-primary d-block mt-3 next">Place order</a>
                            </div>
                        </div>
                        <div class="iq-card ">
                            <div class="card-body iq-card-body p-0 iq-checkout-policy">
                                <ul class="p-0 m-0">
                                    <li class="d-flex align-items-center">
                                        <div class="iq-checkout-icon">
                                            <i class="ri-checkbox-line"></i>
                                        </div>
                                        <h6>Security policy (Safe and Secure Payment.)</h6>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div id="address" class="card-block p-0 col-12">
                <div class="row align-item-center">
                    <div class="col-lg-8">
                        <div class="iq-card">
                            <div class="iq-card-header d-flex justify-content-between">
                                <div class="iq-header-title">
                                    <h4 class="card-title">Payment Options</h4>
                                </div>
                            </div>
                            <div class="iq-card-body">
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="d-flex justify-content-between align-items-center">
                                        <img src="<?= base_url('assets/images/bca.png') ?>" alt="" width="100">
                                    </div>
                                </div>
                                <h5 style="margin-top: 10px;">8240683343</h5>
                                <h5>Liman Calvin Sanjaya</h5>
                                <hr>
                                <form action="<?= site_url('payment') ?>" method="POST" enctype="multipart/form-data">
                                    <div class="form-group" style="margin-bottom: 20px;">
                                        <label>Payment Proof:</label>
                                        <div class="custom-file">
                                            <input type="file" class="custom-file-input" name="image" id="customFile">
                                            <label class="custom-file-label" for="customFile">Choose file</label>
                                        </div>
                                    </div>
                                    <input type="hidden" name="id" value="<?= $this->session->userdata('id') ?>">
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                    <button type="reset" class="btn btn-danger">Reset</button>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="iq-card">
                            <div class="iq-card-body">
                                <h4 class="mb-2">Price Details</h4>
                                <div class="d-flex justify-content-between">
                                    <span>Price 1 Item</span>
                                    <span>Rp. 50,000.00</span>
                                </div>
                                <hr>
                                <div class="d-flex justify-content-between">
                                    <span>Amount Payable</span>
                                    <span><strong>Rp. 50,000.00</strong></span>
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