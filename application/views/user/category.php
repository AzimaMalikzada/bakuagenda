<?php $this->load->view('user/includes/headerStyle'); ?>
<?php $this->load->view('user/includes/header'); ?>


    <!-- News With Sidebar Start -->
    <div class="container-fluid py-3">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="row">
                        <div class="col-12">
                            <div class="d-flex align-items-center justify-content-between bg-light py-2 px-4 mb-3">
                                <h3 class="m-0"><?php echo $this->lang->line('categoryyy')?>: <?php echo $category['c_name_'.$this->session->userdata('site_lang')]; ?></h3>
                             </div>
                        </div>
                    </div>
                    
                    <div class="row">
                        <div class="col-lg-12">

                        <?php foreach($category_of as $item){ ?>
                            <div class="d-flex mb-3">
                                <img src="<?php echo base_url('uploads/news/'.$item['n_file']); ?>" style="width: 250px; height: 100px; object-fit: cover;">
                                <div class="w-100 d-flex flex-column justify-content-center bg-light px-3" style="height: 100px;">
                                       <div class="mb-1" style="font-size: 15px;">
                                       <a href="<?php echo base_url('category/'.$item['c_id']); ?>"><?php echo $item['c_name_'.$this->session->userdata('site_lang')]; ?></a>
                                             <span class="px-1">/</span>
                                                 <span><?php echo date("M d, Y",strtotime($item['n_date'])) ; ?></span>
                                </div>
                                <?php if (strlen($item['n_title_'.$this->session->userdata('site_lang')]) > 60) { ?>
                                    <a class="h6 m-0" href="<?php echo base_url('single/'.$item['n_id']); ?>"><?php echo mb_substr(($item['n_title_'.$this->session->userdata('site_lang')]), 0, 60, 'UTF-8') . '...'; ?></a>
                                    <?php } else {?>
                                    <a class="h6 m-0" href="<?php echo base_url('single/'.$item['n_id']); ?>"><?php echo mb_substr(($item['n_title_'.$this->session->userdata('site_lang')]), 0, 60, 'UTF-8') . '...'; ?></a>
                                    <?php } ?>

                            </div>
                        </div>

                        <?php } ?>

                        
                        </div>
                       
                    </div>
                    <!-- <div class="row">
                        <div class="col-12">
                            <nav aria-label="Page navigation">
                              <ul class="pagination justify-content-center">
                                <li class="page-item disabled">
                                  <a class="page-link" href="#" aria-label="Previous">
                                    <span class="fa fa-angle-double-left" aria-hidden="true"></span>
                                    <span class="sr-only">Previous</span>
                                  </a>
                                </li>
                                <li class="page-item active"><a class="page-link" href="#">1</a></li>
                                <li class="page-item"><a class="page-link" href="#">2</a></li>
                                <li class="page-item"><a class="page-link" href="#">3</a></li>
                                <li class="page-item">
                                  <a class="page-link" href="#" aria-label="Next">
                                    <span class="fa fa-angle-double-right" aria-hidden="true"></span>
                                    <span class="sr-only">Next</span>
                                  </a>
                                </li>
                              </ul>
                            </nav>
                        </div>
                    </div> -->
                </div>

                <div class="col-lg-4 pt-3 pt-lg-0">
                    <!-- Social Follow Start -->
                    
                    <!-- Social Follow End -->

                    
                    <!-- Ads Start -->
                    <div class="mb-3 pb-3">
                    <div class="bg-light py-2 px-4 mb-3">
                            <h3 class="m-0"><?php echo $this->lang->line('reclamm')?></h3>
                        </div>
                        <a href=""><img class="img-fluid" src="<?php echo base_url('public/user/'); ?>img/news-500x280-4.jpg" alt=""></a>
                    </div>
                    <!-- Ads End -->

                    <!-- Popular News Start -->
                    <div class="pb-3">
                        <div class="bg-light py-2 px-4 mb-3">
                            <h3 class="m-0"><?php echo $this->lang->line('last')?></h3>
                        </div>



                        <?php foreach($limit_5_news as $item){ ?>
                            <div class="d-flex mb-3">
                                <img src="<?php echo base_url('uploads/news/'.$item['n_file']); ?>" style="width: 250px; height: 100px; object-fit: cover;">
                                <div class="w-100 d-flex flex-column justify-content-center bg-light px-3" style="height: 100px;">
                                       <div class="mb-1" style="font-size: 15px;">
                                       <a href="<?php echo base_url('category/'.$item['c_id']); ?>"><?php echo $item['c_name_'.$this->session->userdata('site_lang')]; ?></a>
                                             <span class="px-1">/</span>
                                                 <span><?php echo date("M d, Y",strtotime($item['n_date'])) ; ?></span>
                                </div>
                                <?php if (strlen($item['n_title_'.$this->session->userdata('site_lang')]) > 40) { ?>
                                    <a class="h6 m-0" href="<?php echo base_url('single/'.$item['n_id']); ?>"><?php echo mb_substr(($item['n_title_'.$this->session->userdata('site_lang')]), 0, 40, 'UTF-8') . '...'; ?></a>
                                    <?php } else {?>
                                    <a class="h6 m-0" href="<?php echo base_url('single/'.$item['n_id']); ?>"><?php echo $item['n_title_'.$this->session->userdata('site_lang')]; ?></a>
                                    <?php } ?>
                            </div>
                        </div>
                        <?php } ?>
                

                    <!-- Tags Start -->
                    <div class="pb-3">
                        <div class="bg-light py-2 px-4 mb-3">
                            <h3 class="m-0"><?php echo $this->lang->line('categoryyy_')?></h3>
                        </div>
                        <div class="d-flex flex-wrap m-n1">

                        <?php foreach($category_list as $item){ ?>
                            <a href="<?php echo base_url('category/'.$item['c_id']); ?>" class="btn btn-sm btn-outline-secondary m-1"><?php echo $item['c_name_'.$this->session->userdata('site_lang')]; ?></a>
                            <?php } ?>
                        </div>
                    </div>
                    <!-- Tags End -->
                </div>
            </div>
        </div>
    </div>
    </div>
    <!-- News With Sidebar End -->


    
<?php $this->load->view('user/includes/footer'); ?>
<?php $this->load->view('user/includes/footerScript'); ?>
