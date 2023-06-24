<?php $this->load->view('admin/includes/headerStyle'); ?>
<?php $this->load->view('admin/includes/leftMenu'); ?>
<?php $this->load->view('admin/includes/navbar'); ?>

<style>
    .fLeft{
        float: left;
    }
</style>



          <!-- Content wrapper -->
        <div class="content-wrapper">
            <div class="container-xxl flex-grow-1 container-p-y">
                <div class="row">
                   <div class="col-lg-12 mb-4 order-0">
                        <div class="card">
                            <div class="d-flex align-items-end row">
                                <div class="col-sm-12">
                                    <div class="card-body">
                                            <!-- ----------------------------------------------------------------------------------------------- -->
                                                 <h1>Edit</h1>
                                            <form action="<?php echo base_url('a_news_update_act/'.$single_news->n_id); ?>" method="post" enctype="multipart/form-data">

                                                 <label for="title"> Title</label>
                                                 <input type="text" name="title" id="title" class="form-control" placeholder="Enter title" value="<?php echo $single_news->n_title; ?>">
                                                 <br>
                                                 <label for="desc"> Description</label>
                                                 <textarea name="description" id="desc" cols="30" rows="10" class="form-control" placeholder="Enter description"><?php echo $single_news->n_description; ?></textarea>
                                                 <br>

                                                 <div class="col-xs-12 col-sm-3 col-md-3 col-lg-2 fLeft mt-2 me-2">
                                                 <label for="date"> Date</label>
                                                 <input type="datetime-local" name="date" class="form-control" id="date" value="<?php echo $single_news->n_date; ?>" >
                                                 </div>

                                                 <div class="col-xs-12 col-sm-2 col-md-2 col-lg-2 fLeft mt-2 me-2">
                                                 <label for="category"> Category</label>
                                                 <select name="category" id="category" class="form-control" >
                                                    <option <?php if($single_news->n_category == ""){ echo "SELECTED"; } ?> value="">-SELECT-</option>
                                                    <option <?php if($single_news->n_category == "sport"){ echo "SELECTED"; } ?> value="sport">Sport</option>
                                                    <option <?php if($single_news->n_category == "finance"){ echo "SELECTED"; } ?> value="finance">Finance</option>
                                                    <option <?php if($single_news->n_category == "education"){ echo "SELECTED"; } ?> value="education">Education</option>
                                                    <option <?php if($single_news->n_category == "technology"){ echo "SELECTED"; } ?> value="technology">Technology</option>
                                                    <option <?php if($single_news->n_category == "business"){ echo "SELECTED"; } ?> value="business">Business</option>
                                            

                                                 </select>
                                                 </div>

                                                 <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3 fLeft mt-2 me-2">
                                                 <label for="status"> Status</label>
                                                 <select name="status" id="status" class="form-control" >
                                                    <option <?php if($single_news->n_status == ""){ echo "SELECTED"; } ?> value="">-SELECT-</option>
                                                    <option <?php if($single_news->n_status == "Active"){ echo "SELECTED"; } ?> value="Active">Active</option>
                                                    <option <?php if($single_news->n_status == "Deactive"){ echo "SELECTED"; } ?> value="Deactive">Deactive</option>
                                                 </select>
                                                 </div>

                                                 <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3 fLeft mt-2 me-2">
                                                 <label for="img"> Image </label>
                                                 <input type="file" name="image" class="form-control" id="image">
                                                 </select>
                                                 </div>

                                                 <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3 fleft m-lg-2">
                                                 <label for="img">Current Image</label>
                                                 <img width="100%" src="<?php echo base_url('uploads/news/'.$single_news->n_file); ?>" alt="">
                                                </div>

                                                 <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 fLeft mt-2 me-2 d-grid">
                                                    <button type="submit" class="btn btn-success">Update</button>
                                                 </div>
                                                </form>

                                           <!-- ----------------------------------------------------------------------------------------------- -->

                                    </div>
                                </div>
                           </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
<?php $this->load->view('admin/includes/footer'); ?>
<?php $this->load->view('admin/includes/footerScript'); ?>
    
    