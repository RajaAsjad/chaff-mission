
<?php $__env->startSection('content'); ?>
     <!-- BANNER SEC -->
        <section class="Login-sec">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <div class="iner-baner-head">
                            <h3>WELCOME TO</h3>
                            <h1>chaff missions</h1>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna alion.</p>
                        </div>    
                    </div>
                    <div class="col-md-6 form-bg">
                        <div class="log-forms">
                            <h1>LOGIN</h1>
                            <p>Customer Login Panel</p>
                            <?php if(Session::has('error')): ?>
                                <p class="alert alert-danger"><?php echo e(Session::get('error')); ?></p>
                            <?php endif; ?>
                            <form method="POST" action="<?php echo e(route('admin.authenticate')); ?>">
                                <?php echo csrf_field(); ?>
                                <input type="hidden" name="user_type" value="Customer">
                                <div class="form-group">
                                    <input class="form-control" name="email" value="<?php echo e(old('email')); ?>" type="email" placeholder="Email Address">
                                    <span style="color: red"><?php echo e($errors->first('email')); ?></span>
                                </div>
                                <div class="form-group">
                                    <input class="form-control" type="password" placeholder="Password" name="password" required autocomplete="current-password">
                                    <span style="color: red"><?php echo e($errors->first('password')); ?></span>
                                </div>
                                <div class="form-group">
                                    <button type="submit" class="form-control btn-sub" name="form1">Login</button>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                    <label class="form-check-label" for="flexCheckDefault">
                                    Keep me logged in
                                    </label>
                                </div>
                            </form>
                            <div class="form-under-btn">
                                <div class="forgot"><a href="">Forgot Password?</a></div>
                                <p>Don't have an account? <a href="">Register</a> </p>
                            </div>    
                        </div>
                    </div>
                </div>
            </div>
        </section>
    <!-- BANNER SEC -->
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.website.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\chaff_mission\resources\views/auth/login.blade.php ENDPATH**/ ?>