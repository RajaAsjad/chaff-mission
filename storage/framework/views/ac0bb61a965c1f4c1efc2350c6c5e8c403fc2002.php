
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
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                                <div class="form-ad">
                                    <form action="">
                                        <label for="email">Your Email Address</label>
                                        <input type="email" id="email">
                                        <div class="input-group file-input-group" data-controller="file-input">
                                            <label for="">Select your CV file to upload</label>
                                            <input class="form-control" type="text" placeholder="No file chosen" readonly data-target="file-input.value">
                                            <input type="file" class="form-control" id="customFile" data-target="file-input.input" data-action="file-input#display">
                                            <div class="input-group-append">
                                                <label class="btn btn-secondary mb-0" for="customFile">CHOOSE FILE</label>
                                            </div>
                                        </div>
                                        <label for="">Industries of your interest</label>  
                                            <div class="select-wrapper">
                                                <select class="basic">
                                                    <option value="" ></option>
                                                    <option value="usa" >Usa</option>
                                                    <option value="ca" selected="selected" >Company Management</option>
                                                    <option value="me" >Mexico</option>
                                                </select>
                                            </div>
                                        <label for="">Location</label>  
                                            <div class="select-wrapper">
                                                <select class="basic">
                                                    <option value="" ></option>
                                                    <option value="usa" >Usa</option>
                                                    <option value="ca" selected="selected" >United States</option>
                                                    <option value="me" >Mexico</option>
                                                </select>
                                            </div>
                                    </form>
                                </div>
                            <div class="application">
                                <a href="" class="application-a">Submit Application</a>
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