<?php
include_once 'account_header.php';
include_once 'auth.php'
?>
<div class="dashboard-content">
    <div class="dashboard-form">
        <div class="row">
            <form action="update_profile.php" method="POST" enctype="multipart/form-data">
                <!-- Profile -->
                <div class="col-lg-6 col-md-6 col-xs-12 padding-right-30">
                    <div class="dashboard-list-box">
                        <h4 class="gray">Profile Details</h4>
                        <div class="dashboard-list-box-static">

                            <!-- Avatar -->

                            <div class="edit-profile-photo">
                                <img src="<?php echo '../pictures/'.$auth_user['picture']?>" alt="">
                                <div class="change-photo-btn">
                                    <div class="photoUpload">
                                        <span><i class="fa fa-upload"></i> Upload Photo</span>
                                    <input type="file" class="upload" name="picture" accept="images/*">
                                    </div>
                                </div>
                            </div>

                            <!-- Details -->
                            <div class="my-profile">

                                <label>Your Name </label>
                            
                                <input value="<?php echo  $auth_user['name'] ?>" name="name" type="text">

                                <label>Phone Number *</label>
                                <input value="<?php echo  $auth_user['phone'] ?>" name="phone" type="text">

                                <label>Email Address *</label>
                                <input readonly value="<?php echo  $auth_user['email'] ?>" name="email" type="text">

                                <label>Your Bio *</label>
                                <textarea name="bio" id="notes" cols="30" rows="10"> <?php echo  $auth_user['bio'] ?></textarea>

                                <label class="twitter-input"><i class="fa fa-twitter"></i> Twitter</label>
                                <input placeholder="https://www.twitter.com/" type="text">

                                <label class="fb-input"><i class="fa fa-facebook-square"></i> Facebook</label>
                                <input placeholder="https://www.facebook.com/" type="text">

                            </div>

                            <button class="button">Save Changes</button>

                        </div>
                    </div>
                </div>

                <!-- Change Password -->
                <div class="col-lg-6 col-md-6 col-xs-12 padding-left-30">
                    <div class="dashboard-list-box margin-top-0">
                        <h4 class="gray">Your Address</h4>
                        <div class="dashboard-list-box-static">

                            <!-- Change Password -->
                            <div class="my-profile">
                                <label class="margin-top-0">Company Name</label>
                                <input type="text" name="companyname" value="<?php echo  $auth_user['companyname'] ?>" placeholder="optional">

                                <label>Address *</label>
                                <input type="text" name="address" value="<?php echo  $auth_user['address'] ?>">

                                <label>Zip Code *</label>
                                <input type="number" name="zipcode" value="<?php echo  $auth_user['zipcode'] ?>">

                                <label>Country *</label>
                                <input type="text" name="country" value="<?php echo  $auth_user['country'] ?>">

                                <label>City *</label>
                                <input type="text" name="city" value="<?php echo  $auth_user['city'] ?>">

                                <label>Region/State *</label>
                                <input type="text" name="region_state" value="<?php echo  $auth_user['region_state'] ?>">
                            </div>
                            <button class="button">Save Changes</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- Content / End -->
<?php
include_once 'account_footer.php';
?>