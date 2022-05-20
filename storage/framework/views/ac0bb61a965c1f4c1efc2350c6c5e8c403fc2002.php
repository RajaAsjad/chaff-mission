
<?php $__env->startSection('content'); ?>
    <!-- BANNER SEC -->
        <section class="banner">
            <div class="container">
                <div class="row">
                  <div class="col-md-3"></div>
                  <div class="col-md-6">
                    <div class="banner-heading">
                        <h1>CAREERS</h1>
                        <span class="para" >HOME > CAREERS</span>
                        <P>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna alion.</P>
                    </div>
                  </div>
                  <div class="col-md-3"></div>
                </div>
            </div>
        </section>
    <!-- BANNER SEC -->
    <!-- CHAFF TEAM HTML  -->
        <section class="chaff-team">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <div class="chaff-team-head">
                            <h1><span>JOIN OUR</span>CHAFF TEAM!</h1>
                                <div class="form-ad">
                                    <form action="<?php echo e(route('career.store')); ?>"  id="regform" class="form-horizontal" enctype="multipart/form-data" method="post" accept-charset="utf-8">
                                        <?php echo csrf_field(); ?>
                                        <div class="row my-career-form">
                                            <div class="form-group col-md-6">
                                                <label for="">First Name</label>
                                                <input type="text" name="first_name" placeholder="First Name" class="form-control">
                                            </div>
                                            <div class="col-md-6">
                                                <label for="">Last Name</label>
                                                <input type="text" name="last_name" placeholder="Last Name" class="form-control">
                                            </div>
                                        </div>
                                        <div class="row my-career-form">
                                            <div class="form-group col-md-12">
                                                <label for="">Email</label>
                                                <input type="email" name="email" placeholder="Email" class="form-control">
                                            </div>
                                        </div>
                                        <div class="row my-career-form">
                                            <div class="form-group col-md-12">
                                                <label for="">Phone</label>
                                                <input type="number" name="phone" placeholder="Phone" class="form-control">
                                            </div>
                                        </div>
                                        <div class="row my-career-form">
                                            <div class="form-group col-md-6">
                                                <label for="">Address</label>
                                                <input type="text" name="address" placeholder="Address" class="form-control">
                                            </div>
                                            <div class="col-md-6">
                                                <label for="">City</label>
                                                <input type="text" name="city" placeholder="City" class="form-control">
                                            </div>
                                        </div>
                                        <div class="row my-career-form">
                                            <div class="form-group col-md-6">
                                                <label for="">State</label>
                                                <input type="text" name="state" placeholder="State" class="form-control">
                                            </div>
                                            <div class="col-md-6">
                                                <label for="">Postal</label>
                                                <input type="text"  name="postal" placeholder="Postal" class="form-control">
                                            </div>
                                        </div>
                                        <div class="input-group file-input-group" data-controller="file-input">
                                            <label for="">Select your CV file to upload</label>
                                            <input class="form-control" name="CV_file" type="text" placeholder="No file chosen" readonly data-target="file-input.value">
                                            <input type="file" name="CV_file" class="form-control" id="customFile" data-target="file-input.input" data-action="file-input#display" accept="application/pdf">
                                            <div class="input-group-append">
                                                <label class="btn btn-secondary mb-0" for="customFile">CHOOSE FILE</label>
                                            </div>
                                        </div>
                                        <!-- <div class="input-group file-input-group" data-controller="file-input">
                                        <div class="file-select-button input-group-append" >Choose File</div>
                                        </div> -->
                                        <div class="row mt-3">
                                            <div class="form-group col-md-12">
                                                <button type="submit" class="application-a">SUBMIT APPLICATION</button>
                                            </div>
                                        </div>        
                                    </form>
                                </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="chaff-team-image">
                            <img src="<?php echo e(asset('public/assets/website')); ?>/images/career.png" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </section>
    <!-- CHAFF TEAM HTML  -->
    <!-- PERSPICIATIS HTML  -->
        <section class="perspiciaties" >
            <div class="container">
                <div class="row">
                    <div class="col-md-5">
                        <div class="perspiciaties-image">
                            <img src="<?php echo e(asset('public/assets/website')); ?>/images/career-2.png" alt="">
                        </div>
                    </div>
                    <div class="col-md-7">
                        <div class="perspiciaties-para">
                            <h1><span>Duis aute irure dolor</span>Sed ut perspiciatis</h1>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                            <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    <!-- PERSPICIATIS HTML  -->
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.website.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\chaff_mission\resources\views/website/career.blade.php ENDPATH**/ ?>