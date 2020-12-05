<?php
include 'account_header.php';
?>

<div class="dashboard-content">
    <div class="row">
        <!-- Listings -->
        <div class="col-lg-12 col-sm-12">
            <div id="add-listing">
                <form action="upload_post.php" method="post" enctype="multipart/form-data">
                    <!-- Section -->
                    <div class="add-listing-section">

                        <!-- Headline -->
                        <div class="add-listing-headline">
                            <h3><i class="sl sl-icon-doc"></i> Basic Informations</h3>
                        </div>

                        <!-- Title -->
                        <div class="row with-forms">
                            <div class="col-md-12">
                                <label>Title <i class="tip" data-tip-content="Name of your business"></i></label>
                                <input class="search-field" name="title" type="text" value="" />
                            </div>
                        </div>

                        <!-- Row -->
                        <div class="row with-forms">

                            <!-- Status -->
                            <div class="col-md-6">
                                <label>Category</label>
                                <select class="chosen-select-no-single" name="category">
                                    <option value="blank">Select Category</option>
                                    <option value="sports">Sports</option>
                                    <option value="music">Music</option>
                                    <option value="health">Health</option>
                                    <option value="news">News</option>
                                    <option value="events"> Events </option>

                                </select>
                            </div>

                            <!-- Type -->
                            <div class="col-md-6">
                                <label>Image<i class="tip" data-tip-content="Maximum of 15 keywords related with your business"></i></label>
                                <input type="file" name="image" accept="image/*" required>
                            </div>

                            <!-- Description -->
                            <div class="form">
                                <label>Description</label>
                                <textarea class="WYSIWYG" name="content" cols="40" rows="3" id="summary" spellcheck="true"></textarea>
                            </div>

                        </div>
                        <!-- Row / End -->
                    </div>
                    <button class="button">Save</button>
                </form>
            </div>

        </div>
    </div>
</div>

<!-- Content / End -->
<?php
include 'account_footer.php';
?>