<?php $this->load->view('user/includes/headerStyle'); ?>
<?php $this->load->view('user/includes/header'); ?>


    <!-- Contact Start -->
    <div class="container-fluid py-3">
        <div class="container">
            <div class="bg-light py-2 px-4 mb-3">
                <h3 class="m-0"><?php echo $this->lang->line('sual')?></h3>
            </div>
            <div class="row">
                <div class="col-md-5">
                    <div class="bg-light mb-3" style="padding: 30px;">
                        <h6 class="font-weight-bold"><?php echo $this->lang->line('get')?></h6>
                        <p><?php echo $this->lang->line('text2')?></p>
                        <div class="d-flex align-items-center mb-3">
                            <i class="fa fa-2x fa-map-marker-alt text-primary mr-3"></i>
                            <div class="d-flex flex-column">
                                <h6 class="font-weight-bold"><?php echo $this->lang->line('text3')?></h6>
                                <p class="m-0">Bakı Binəqədi rayonu korpus 108 ev 117</p>
                            </div>
                        </div>
                        <div class="d-flex align-items-center mb-3">
                            <i class="fa fa-2x fa-envelope-open text-primary mr-3"></i>
                            <div class="d-flex flex-column">
                                <h6 class="font-weight-bold"><?php echo $this->lang->line('mail')?></h6>
                                <p class="m-0">melikzadeazima@gmail.com</p>
                            </div>
                        </div>
                        <div class="d-flex align-items-center">
                            <i class="fas fa-2x fa-phone-alt text-primary mr-3"></i>
                            <div class="d-flex flex-column">
                                <h6 class="font-weight-bold"><?php echo $this->lang->line('zeng')?></h6>
                                <p class="m-0">+994 70 548 58 90</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-7">
                    <div class="contact-form bg-light mb-3" style="padding: 30px;">
                        <div id="success"></div>
                        <form action="<?php echo base_url('contactAct'); ?>" method="post">
                            <div class="form-row">
                                <div class="col-md-6">
                                    <div class="control-group">
                                        <input type="text" class="form-control p-4" name="name" id="name" placeholder="<?php echo $this->lang->line('ad')?>" required="required" data-validation-required-message="Please enter your name" />
                                        <p class="help-block text-danger"></p>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="control-group">
                                        <input type="email" class="form-control p-4" name="email" id="email" placeholder="<?php echo $this->lang->line('poct')?>" required="required" data-validation-required-message="Please enter your email" />
                                        <p class="help-block text-danger"></p>
                                    </div>
                                </div>
                            </div>
                            <div class="control-group">
                                <input type="text" class="form-control p-4" name="subject" id="subject" placeholder="<?php echo $this->lang->line('soyad')?>" required="required" data-validation-required-message="Please enter a subject" />
                                <p class="help-block text-danger"></p>
                            </div>
                            <div class="control-group">
                                <textarea class="form-control" rows="4" name="message" id="message" placeholder="<?php echo $this->lang->line('mess')?>" required="required" data-validation-required-message="Please enter your message"></textarea>
                                <p class="help-block text-danger"></p>
                                <form action="<?php echo base_url('contactAct'); ?>" method="post">
                                <div class="input-group-append" style="float:left;height:48px">
                                    <button type="submit" class="btn btn-primary">Gonder</button>
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
            </div>
        </div>
    </div>
    <!-- Contact End -->
    <?php $this->load->view('user/includes/footer'); ?>
    <?php $this->load->view('user/includes/footerScript'); ?>
