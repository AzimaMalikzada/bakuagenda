<?php $this->load->view('user/includes/headerStyle'); ?>
<?php $this->load->view('user/includes/header'); ?>


<!-- <script>alert("You are hacked by Azima ;)")</script> -->

    <!-- Main News Slider Start -->
    <div class="container-fluid py-3">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="owl-carousel owl-carousel-2 carousel-item-1 position-relative mb-3 mb-lg-0">

                    <?php foreach ($slider_left_side as $left_slider){ ?>
                        <div class="position-relative overflow-hidden" style="height: 435px;">
                            <img class="img-fluid h-100" src="<?php echo base_url('uploads/news/'.$left_slider['n_file']); ?>" style="object-fit: cover;">
                            <div class="overlay">
                                <div class="mb-1">
                                    <a class="text-white" href=""><?php echo $left_slider['c_name_'.$this->session->userdata('site_lang')]; ?></a>
                                    <span class="px-2 text-white">/</span>
                                    <a class="text-white" href=""><?php echo date("M d, Y",strtotime($left_slider['n_date'])) ; ?></a>
                                </div>
                                <a class="h2 m-0 text-white font-weight-bold" href="<?php echo base_url('single/'.$left_slider['n_id']); ?>"><?php echo $left_slider['n_title_'.$this->session->userdata('site_lang')]; ?></a>
                            </div>
                        </div>
                        <?php } ?>
                        
                    </div>
                </div>
               
            </div>
        </div>
    </div>
    <!-- Main News Slider End -->


    <!-- Featured News Slider Start -->
    <div class="container-fluid py-3">
        <div class="container">
            <div class="d-flex align-items-center justify-content-between bg-light py-2 px-4 mb-3">
                <h3 class="m-0"><?php echo $this->lang->line('featured')?></h3>
            </div>
            <div class="owl-carousel owl-carousel-2 carousel-item-4 position-relative">

                <?php foreach($slider_left_side as $item){ ?>
                <div class="position-relative overflow-hidden" style="height: 300px;">
                           <img class="img-fluid w-100 h-100" src="<?php echo base_url('uploads/news/'.$item['n_file']); ?>" style="object-fit: cover;">
                        <div class="overlay">
                             <div class="mb-1" style="font-size: 13px;">
                                 <a class="text-white" href=""><?php echo $item['c_name_'.$this->session->userdata('site_lang')];?></a>
                                  <span class="px-1 text-white">/</span>
                                 <a class="text-white" href=""><?php echo date("d-m-Y",strtotime($item['n_date'])) ; ?></a>
                             </div>
                                  <a class="h4 m-0 text-white" href="<?php echo base_url('single/'.$item['n_id']); ?>"><?php echo $item['n_title_'.$this->session->userdata('site_lang')];?></a>
                        </div>
                </div>
                <?php } ?>
                
                
            </div>
        </div>
    </div>
    </div>
    <!-- Featured News Slider End -->


    <!-- Category News Slider Start -->



    <!-- Category News Slider Start -->


    <!-- News With Sidebar Start -->

    <?php foreach($slider_left_side_next as $item){ ?>

        <?php } ?>


    <div class="container-fluid py-3">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="row mb-3">
                        <div class="col-12">
                            <div class="d-flex align-items-center justify-content-between bg-light py-2 px-4 mb-3">

                                <h3 class="m-0"><?php echo $this->lang->line('popular')?></h3>
                            </div>
                        </div>

                        <?php foreach($slider_left_side_next as $item){ ?>
                            <div class="col-lg-6">
                            <div class="position-relative mb-3">
                                <img class="img-fluid w-100" src="<?php echo base_url('uploads/news/'.$item['n_file']); ?>"style="object-fit: cover;">
                                <div class="overlay position-relative bg-light">
                                    <div class="mb-2" style="font-size: 14px;">
                                        <a href=""><?php echo $item['c_name_'.$this->session->userdata('site_lang')];?></a>
                                        <span class="px-1">/</span>
                                        <span><?php echo date("d-m-Y",strtotime($item['n_date'])) ; ?> </span>
                                    </div>

                                    <?php if (strlen($item['n_title_'.$this->session->userdata('site_lang')]) > 60) { ?>
                                    <a class="h4" href="<?php echo base_url('single/'.$item['n_id']); ?>"><?php echo mb_substr(($item['n_title_'.$this->session->userdata('site_lang')]), 0, 60, 'UTF-8') . '...'; ?></a>
                                    <?php } else {?>
                                    <a class="h4" href="<?php echo base_url('single/'.$item['n_id']); ?>"><?php echo mb_substr(($item['n_title_'.$this->session->userdata('site_lang')]), 0, 60, 'UTF-8') . '...'; ?></a>
                                    <?php } ?>

                            </div>
                            </div>
                        </div>

                        <?php } ?>
                    </div>
                    
                    <div class="row">
                        <div class="col-lg-6">
                        </div>

                        <div class="col-lg-6">
                        </div>
                    </div>
                </div>
                
                <div class="col-lg-4 pt-3 pt-lg-0">
                    <!-- Social Follow Start -->
                    <div class="pb-3">
                        <div class="bg-light py-2 px-4 mb-3">
                            <h3 class="m-0"><?php echo $this->lang->line('follow')?></h3>
                        </div>
                        <div class="d-flex mb-3">
                            <a href="https://www.facebook.com/profile.php?id=100087234054827" class="d-block w-50 py-2 px-3 text-white text-decoration-none mr-2" style="background: #39569E;">
                                <small class="fab fa-facebook-f mr-2"></small><small>16,475 Fans</small>
                            </a>
                            <a href="https://twitter.com/MalikzadaAzima" class="d-block w-50 py-2 px-3 text-white text-decoration-none ml-2" style="background: #52AAF4;">
                                <small class="fab fa-twitter mr-2"></small><small>84,236 Followers</small>
                            </a>
                        </div>
                        <div class="d-flex mb-3">
                            <a href="https://www.linkedin.com/in/ezime-melikzade-191247256/" class="d-block w-50 py-2 px-3 text-white text-decoration-none mr-2" style="background: #0185AE;">
                                <small class="fab fa-linkedin-in mr-2"></small><small>24,812 Connects</small>
                            </a>
                            <a href="https://www.instagram.com/azima_malikzada/" class="d-block w-50 py-2 px-3 text-white text-decoration-none ml-2" style="background: #C8359D;">
                                <small class="fab fa-instagram mr-2"></small><small>96,741 Followers</small>
                            </a>
                        </div>
                        <div class="d-flex mb-3">
                            <a href="https://www.youtube.com/@sethub3879" class="d-block w-50 py-2 px-3 text-white text-decoration-none mr-2" style="background: #DC472E;">
                                <small class="fab fa-youtube mr-2"></small><small>32,954 Subscribers</small>
                            </a>
                            <a href="https://github.com/AzimaMalikzada" class="d-block w-50 py-2 px-3 text-white text-decoration-none ml-2" style="background: #24292F;">
                                <small class="fab fa-github mr-2"></small><small>119,217 Followers</small>
                            </a>
                        </div>
                    </div>
                    <!-- Social Follow End -->

                    <!-- Newsletter Start -->
                    <div class="pb-3">
                        <div class="bg-light py-2 px-4 mb-3">
                            <h3 class="m-0"><?php echo $this->lang->line('letter')?></h3>
                        </div>
                        <div class="bg-light text-center p-4 mb-3">
                            <!-- <p>Aliqu justo et labore at eirmod justo sea erat diam dolor diam vero kasd</p> -->
                            <div class="input-group" style="width: 100%;">
                            <form action="<?php echo base_url('send_message'); ?>" method="post">
                            <input name="email" type="text" class="form-control form-control-lg" placeholder="<?php echo $this->lang->line('sey')?>" style="width:210px;float:left">
                                <div class="input-group-append" style="float:left;height:48px">
                                    <button type="submit" class="btn btn-primary"><?php echo $this->lang->line('send')?></button>
                                </div>
                        </form>
                        

                        <?php if($this->session->flashdata('err')){ ?>
                             <div class="alert alert-danger alert-dismissible">
                             <small><?php echo $this->session->flashdata('err'); ?></small>
                             </div>
                         <?php } ?>

                         <?php if($this->session->flashdata('Əla')){ ?>
                             <div class="alert alert-success alert-dismissible">
                             <small><?php echo $this->session->flashdata('Əla'); ?></small>
                             </div>
                         <?php } ?>
                                
                            </div>
                        </div>
                    </div>
                    <!-- Newsletter End -->

                    <!-- Ads Start -->
                    <div class="bg-light py-2 px-4 mb-3">
                            <h3 class="m-0"><?php echo $this->lang->line('reclam')?></h3>
                        </div>
                    <div class="mb-3 pb-3">
                        <a href=""><img class="img-fluid" src="<?php echo base_url('public/user/'); ?>img/news-500x280-4.jpg" alt=""></a>
                    </div>
                    <!-- Ads End -->

               

                    <!-- Tags Start -->
                    <div class="pb-3">
                        <div class="bg-light py-2 px-4 mb-3">
                            <h3 class="m-0"><?php echo $this->lang->line('categoryy')?></h3>
                        </div>
                        <div class="d-flex flex-wrap m-n1">
                            <?php foreach($category as $item){ ?>
                            <a href="" class="btn btn-sm btn-outline-secondary m-1"><?php echo $item['c_name_'.$this->session->userdata('site_lang')]; ?></a>
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


    <!-- Footer Start -->
<?php $this->load->view('user/includes/footer'); ?>
<?php $this->load->view('user/includes/footerScript'); ?>

    <!-- Footer End -->

