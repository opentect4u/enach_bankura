<div class="row w-100 mx-0">
    <div class="col-lg-4 mx-auto">
        <div class="auth-form-light text-left py-5 px-4 px-sm-5">
            <div class="brand-logo">
                <img src="<?= base_url() ?>assets/images/logo.jpg" style="width: 80px;" alt="logo">
            </div>
            <h4>Hello! let's get started</h4>
            <h6 class="font-weight-light">Sign in to continue.</h6>
            <form class="pt-3" action="<?= site_url() ?>/login_post" method="POST">
                <div class="form-group">
                    <input type="text" name="email" class="form-control form-control-lg" id="email"
                        placeholder="Username">
                </div>
                <div class="form-group">
                    <input type="password" name="pass" id="pass" class="form-control form-control-lg" placeholder="Password">
                </div>
                <div class="mt-3">
                    <button class="btn btn-block btn-primary btn-lg font-weight-medium auth-form-btn" type="submit">SIGN IN</button>
                </div>
                <!-- <div class="my-2 d-flex justify-content-between align-items-center">
                    <div class="form-check">
                        <label class="form-check-label text-muted">
                            <input type="checkbox" class="form-check-input">
                            Keep me signed in
                        </label>
                    </div>
                    <a href="#" class="auth-link text-black">Forgot password?</a>
                </div>
                <div class="mb-2">
                    <button type="button" class="btn btn-block btn-facebook auth-form-btn">
                        <i class="ti-facebook mr-2"></i>Connect using facebook
                    </button>
                </div>
                <div class="text-center mt-4 font-weight-light">
                    Don't have an account? <a href="register.html" class="text-primary">Create</a>
                </div> -->
            </form>
        </div>
    </div>
</div>