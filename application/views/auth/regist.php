<div class="container regist" style="margin-top: 100px;">

    <div class="card o-hidden border-0 shadow-lg my-5 col-lg-6 mx-auto" style="background-color: rgba(255, 255, 255, .5)">
        <div class="card-body p-0 ">
            <!-- Nested Row within Card Body -->
            <div class="row">
                <div class="col-lg">
                    <div class="p-5">
                        <div class="text-center">
                            <h1 class="h4 text-gray-900 mb-4">Create an Account!</h1>
                        </div>
                        <form class="user">

                            <div class="form-group">
                                <input type="text" class="form-control form-control-user rounded-sm" id="name" name="name" placeholder="Full Name..">
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control form-control-user rounded-sm" id="email" name="email" placeholder="Enter Email Address...">
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-6 mb-3 mb-sm-0">
                                    <input type="password" class="form-control form-control-user rounded-sm" id="password1" name="password1" placeholder="Password">
                                </div>
                                <div class="col-sm-6">
                                    <input type="password" class="form-control form-control-user rounded-sm" id="password2" name="password2" placeholder="Repeat Password">
                                </div>
                            </div>
                            <button type="submit" class="btn btn-us btn-user btn-block text-light rounded-sm">
                                Register Account
                            </button>
                        </form>
                        <hr>
                        <div class="text-center">
                            <a class="small text-decoration-none text-dark text-us" href="forgot-password.html">Forgot Password?</a>
                        </div>
                        <div class="text-center">
                            <a class="small text-decoration-none text-dark text-us" href="<?= base_url('auth'); ?>">Already have an account? Login!</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>