<section id="main-content">
    <section class="wrapper site-min-height">
       
        <section class="panel">
            <header class="panel-heading">
                <?php
                if (!empty($accountant->id))
                    echo '<i class="fa fa-edit"></i> ' . lang('edit_accountant');
                else
                    echo '<i class="fa fa-plus-circle"></i> ' . lang('add_accountant');
                ?>
            </header>
            <div class="panel-body col-md-7">
                <div class="adv-table editable-table ">
                    <div class="clearfix">

                        <div class="col-lg-12">
                            <section class="panel">
                                <div class="panel-body">
                                    <div class="col-lg-12">
                                        <div class="col-lg-3"></div>
                                        <div class="col-lg-6">
                                            <?php echo validation_errors(); ?>
                                            <?php echo $this->session->flashdata('feedback'); ?>
                                        </div>
                                        <div class="col-lg-3"></div>
                                    </div>
                                    <form role="form" action="accountant/addNew" method="post" enctype="multipart/form-data">
                                        <div class="form-group">    
                                            <label for="exampleInputEmail1"><?php echo lang('name'); ?> &#42;</label>
                                            <input type="text" class="form-control" name="name" id="exampleInputEmail1" value='<?php
                                            if (!empty($setval)) {
                                                echo set_value('name');
                                            }
                                            if (!empty($accountant->name)) {
                                                echo $accountant->name;
                                            }
                                            ?>' placeholder="" required="">   
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputEmail1"><?php echo lang('email'); ?> &#42;</label>
                                            <input type="email" class="form-control" name="email" id="exampleInputEmail1" value='<?php
                                            if (!empty($setval)) {
                                                echo set_value('email');
                                            }
                                            if (!empty($accountant->email)) {
                                                echo $accountant->email;
                                            }
                                            ?>' placeholder="" required="">
                                        </div>
                                        <div class="form-group">       
                                            <label for="exampleInputEmail1"><?php echo lang('password'); ?> &#42;</label>
                                            <input type="password" class="form-control" name="password" id="exampleInputEmail1" placeholder="********" required="">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputEmail1"><?php echo lang('address'); ?> &#42;</label>
                                            <input type="text" class="form-control" name="address" id="exampleInputEmail1" value='<?php
                                            if (!empty($setval)) {
                                                echo set_value('address');
                                            }
                                            if (!empty($accountant->address)) {
                                                echo $accountant->address;
                                            }
                                            ?>' placeholder="" required="">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputEmail1"><?php echo lang('phone'); ?> &#42;</label>
                                            <input type="number" class="form-control" name="phone" id="exampleInputEmail1" value='<?php
                                            if (!empty($setval)) {
                                                echo set_value('phone');
                                            }
                                            if (!empty($accountant->phone)) {
                                                echo $accountant->phone;
                                            }
                                            ?>' placeholder="" required="">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputEmail1"><?php echo lang('image'); ?></label>
                                            <input type="file" name="img_url">
                                        </div>
                                        <input type="hidden" name="id" value='<?php
                                        if (!empty($accountant->id)) {
                                            echo $accountant->id;
                                        }
                                        ?>'>
                                        <button type="submit" name="submit" class="btn btn-info"><?php echo lang('submit'); ?></button>
                                    </form>
                                </div>
                            </section>
                        </div>  
                    </div> 
                </div>
            </div>
        </section>
        
    </section>
</section>
