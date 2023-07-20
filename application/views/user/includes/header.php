<?php 

$category = $this->db->get('category')->result_array();


// print_r("<pre>");
// print_r($category);

?>

<div class="container-fluid">
        <div class="row align-items-center bg-light px-lg-5">
            <div class="col-12 col-md-8">
                <div class="d-flex justify-content-between">
                    <div class="owl-carousel owl-carousel-1 tranding-carousel position-relative d-inline-flex align-items-center ml-3" style="width: calc(100% - 100px); padding-left: 90px;">
                       </div>
                </div>
            </div>
            
        </div>
        <div class="row align-items-center py-2 px-lg-5">
            <div class="col-lg-4">
                <a href="<?php echo base_url('index'); ?>" class="navbar-brand d-none d-lg-block">
                    <h1 class="m-0 display-5 text-uppercase"><span class="text-primary">Baku</span>Agenda</h1>
                </a>
            </div>
            <div class="col-lg-8 text-center text-lg-right">
            </div>
        </div>
    </div>
    <!-- Topbar End -->


    <!-- Navbar Start -->
    <div class="container-fluid p-0 mb-3">
        <nav class="navbar navbar-expand-lg bg-light navbar-light py-2 py-lg-0 px-lg-5">
            <a href="" class="navbar-brand d-block d-lg-none">
                <h1 class="m-0 display-5 text-uppercase"><span class="text-primary">Baku</span>Agenda</h1>
            </a>
            <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-between px-0 px-lg-3" id="navbarCollapse">
                <div class="navbar-nav mr-auto py-0">
                    <a href="<?php echo base_url('index'); ?>" class="nav-item nav-link active"><?php echo $this->lang->line("home") ?></a>

                    <?php foreach($category as $item){ ?>
                    <a href="<?php echo base_url('category/'.$item['c_id']); ?>" class="nav-item nav-link"><?php echo $item['c_name_'.$this->session->userdata('site_lang')]; ?></a>
                    <?php } ?>

                    <!-- <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Dropdown</a>
                        <div class="dropdown-menu rounded-0 m-0">
                            <a href="#" class="dropdown-item">Menu item 1</a>
                            <a href="#" class="dropdown-item">Menu item 2</a>
                            <a href="#" class="dropdown-item">Menu item 3</a>
                        </div>
                    </div> -->
                    <a href="<?php echo base_url('contact'); ?>" class="nav-item nav-link"><?php echo $this->lang->line('contact'); ?></a>
                </div>

                
                
                <div class="input-group ml-auto" style="width: 100%; max-width: 300px;"><select style="margin-right:15px;" onchange="javascript:window.location.href='<?php echo base_url(); ?>LanguageSwitcher/switchLang/'+this.value;">
                        <option value="az" <?php if($this->session->userdata('site_lang') == 'az') echo 'selected="selected"'; ?>>AZ</option>
                        <option value="en" <?php if($this->session->userdata('site_lang') == 'en') echo 'selected="selected"'; ?>>EN</option>
                        <option value="ru" <?php if($this->session->userdata('site_lang') == 'ru') echo 'selected="selected"'; ?>>RU</option>   
                    </select>
                    <input type="text" class="form-control" placeholder="<?php echo $this->lang->line("search") ?>">
                    <div class="input-group-append">
                        <button class="input-group-text text-secondary"><i
                                class="fa fa-search"></i></button>
                    </div>
                </div>
            </div>
        </nav>
    </div>