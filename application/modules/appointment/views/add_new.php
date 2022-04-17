<link href="common/extranal/css/appointment/add_new.css" rel="stylesheet">
<section id="main-content">
    <section class="wrapper site-min-height">
   
        <section class="panel col-md-6 row">
            <header class="panel-heading">
                <?php
                if (!empty($appointment->id))
                    echo lang('edit_appointment');
                else
                    echo lang('add_appointment');
                ?>
            </header>
            <div class="panel-body">
                <div class="adv-table editable-table ">
                    <?php echo validation_errors(); ?>
                    <?php echo $this->session->flashdata('feedback'); ?>
                </div>
                <form role="form" action="appointment/addNew" class="clearfix row" method="post" enctype="multipart/form-data">
                    <div class="col-md-12 panel">
                        <div class="col-md-3 payment_label"> 
                            <label for="exampleInputEmail1"> <?php echo lang('patient'); ?> &#42;</label>
                        </div>
                        <div class="col-md-9"> 
                            <select class="form-control m-bot15  pos_select" id="pos_select" name="patient" value='' required> 
                                <?php if (!empty($appointment)) { ?>
                                    <option value="<?php echo $patients->id; ?>" selected="selected"><?php echo $patients->name; ?> - <?php echo $patients->id; ?></option>  
                                <?php } ?>
                            </select>
                        </div>
                    </div>
                    <div class="pos_client clearfix">
                        <div class="col-md-8 payment pad_bot pull-right">
                            <div class="col-md-3 payment_label"> 
                                <label for="exampleInputEmail1"> <?php echo lang('patient'); ?> <?php echo lang('name'); ?> &#42;</label>
                            </div>
                            <div class="col-md-9"> 
                                <input type="text" class="form-control pay_in" name="p_name" value='<?php
                                if (!empty($payment->p_name)) {
                                    echo $payment->p_name;
                                }
                                ?>' placeholder="">
                            </div>
                        </div>
                        <div class="col-md-8 payment pad_bot pull-right">
                            <div class="col-md-3 payment_label"> 
                                <label for="exampleInputEmail1"> <?php echo lang('patient'); ?> <?php echo lang('email'); ?> &#42;</label>
                            </div>
                            <div class="col-md-9"> 
                                <input type="email" class="form-control pay_in" name="p_email" value='<?php
                                if (!empty($payment->p_email)) {
                                    echo $payment->p_email;
                                }
                                ?>' placeholder="">
                            </div>
                        </div>
                        <div class="col-md-8 payment pad_bot pull-right">
                            <div class="col-md-3 payment_label"> 
                                <label for="exampleInputEmail1"> <?php echo lang('patient'); ?> <?php echo lang('phone'); ?> &#42;</label>
                            </div>
                            <div class="col-md-9"> 
                                <input type="number" class="form-control pay_in" name="p_phone" value='<?php
                                if (!empty($payment->p_phone)) {
                                    echo $payment->p_phone;
                                }
                                ?>' placeholder="">
                            </div>
                        </div>
                        <div class="col-md-8 payment pad_bot pull-right">
                            <div class="col-md-3 payment_label"> 
                                <label for="exampleInputEmail1"> <?php echo lang('patient'); ?> <?php echo lang('age'); ?></label>
                            </div>
                            <div class="col-md-9"> 
                                <input type="number" class="form-control pay_in" name="p_age" value='<?php
                                if (!empty($payment->p_age)) {
                                    echo $payment->p_age;
                                }
                                ?>' placeholder="">
                            </div>
                        </div> 
                        <div class="col-md-8 payment pad_bot pull-right">
                            <div class="col-md-3 payment_label"> 
                                <label for="exampleInputEmail1"> <?php echo lang('patient'); ?> <?php echo lang('gender'); ?></label>
                            </div>
                            <div class="col-md-9"> 
                                <select class="form-control m-bot15" name="p_gender" value=''>

                                    <option value="Male" <?php
                                    if (!empty($patient->sex)) {
                                        if ($patient->sex == 'Male') {
                                            echo 'selected';
                                        }
                                    }
                                    ?> > Male </option>   
                                    <option value="Female" <?php
                                    if (!empty($patient->sex)) {
                                        if ($patient->sex == 'Female') {
                                            echo 'selected';
                                        }
                                    }
                                    ?> > Female </option>

                                </select>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-12 panel">
                        <div class="col-md-3 payment_label"> 
                            <label for="exampleInputEmail1">  <?php echo lang('doctor'); ?> &#42;</label>
                        </div>
                        <div class="col-md-9 doctor_div"> 
                            <select class="form-control m-bot15" id="adoctors" name="doctor" value='' required="">  
                                <?php if (!empty($appointment)) { ?>
                                    <option value="<?php echo $doctors->id; ?>" selected="selected"><?php echo $doctors->name; ?> - <?php echo $doctors->id; ?></option>  
                                <?php } ?>
                            </select>
                        </div>
                    </div>


                    <div class="col-md-12 panel">
                        <div class="col-md-3 payment_label"> 
                            <label for="exampleInputEmail1"> <?php echo lang('date'); ?> &#42;</label>
                        </div>
                        <div class="col-md-9"> 
                            <input type="text" class="form-control readonly" id="date" required="" name="date" id="exampleInputEmail1" value='<?php
                            if (!empty($appointment->date)) {
                                echo date('d-m-Y', $appointment->date);
                            }
                            ?>' placeholder="" autocomplete="off">
                        </div>
                    </div>

                    <div class="col-md-12 panel">
                        <div class="col-md-3 payment_label"> 
                            <label class=""><?php echo lang('available_slots'); ?></label>
                        </div>
                        <div class="col-md-9"> 
                            <select class="form-control m-bot15" name="time_slot" id="aslots" value=''> 

                            </select>
                        </div>
                    </div>


                    <div class="col-md-12 panel">
                        <div class="col-md-3 payment_label"> 
                            <label for="exampleInputEmail1"> <?php echo lang('remarks'); ?></label>
                        </div>
                        <div class="col-md-9"> 
                            <input type="text" class="form-control" name="remarks" id="exampleInputEmail1" value='<?php
                            if (!empty($appointment->remarks)) {
                                echo $appointment->remarks;
                            }
                            ?>' placeholder="">
                        </div>
                    </div>


                    <div class="col-md-12 panel">
                        <div class="col-md-3 payment_label"> 
                            <label for="exampleInputEmail1"> <?php echo lang('appointment'); ?> <?php echo lang('status'); ?></label>
                        </div>
                        <div class="col-md-9"> 
                            <select class="form-control m-bot15" name="status" value=''>
                                <option value="Pending Confirmation" <?php
                                if (!empty($appointment->status)) {
                                    if ($appointment->status == 'Pending Confirmation') {
                                        echo 'selected';
                                    }
                                }
                                ?> > <?php echo lang('pending_confirmation'); ?> </option> 
                                <option value="Confirmed" <?php
                                if (!empty($appointment->status)) {
                                    if ($appointment->status == 'Confirmed') {
                                        echo 'selected';
                                    }
                                }
                                ?> > <?php echo lang('confirmed'); ?> </option>
                                <option value="Treated" <?php
                                if (!empty($appointment->status)) {
                                    if ($appointment->status == 'Treated') {
                                        echo 'selected';
                                    }
                                }
                                ?> > <?php echo lang('treated'); ?> </option>
                                <option value="Cancelled" <?php
                                if (!empty($appointment->status)) {
                                    if ($appointment->status == 'Cancelled') {
                                        echo 'selected';
                                    }
                                }
                                ?> > <?php echo lang('cancelled'); ?> </option>
                            </select>
                        </div>
                    </div>
                    <input type="hidden" name="id" id="appointment_id" value='<?php
                    if (!empty($appointment->id)) {
                        echo $appointment->id;
                    }
                    ?>'>

                    <div class="col-md-12 panel">
                        <div class="col-md-3 payment_label"> 
                        </div>
                        <div class="col-md-9"> 
                            <button type="submit" name="submit" class="btn btn-info pull-right"> <?php echo lang('submit'); ?></button>
                        </div>
                    </div>


                </form>
            </div>

        </section>
        <!-- page end-->
    </section>
</section>



<script src="common/js/codearistos.min.js"></script>

<?php if (!empty($appointment->id)) { ?>

    <script src="common/extranal/js/appointment/edit_appointment.js"></script>

<?php } else { ?> 

    <script src="common/extranal/js/appointment/add_new.js"></script>

<?php } ?>
<script type="text/javascript">var select_doctor = "<?php echo lang('select_doctor'); ?>";</script>
<script type="text/javascript">var select_patient = "<?php echo lang('select_patient'); ?>";</script>
<script src="common/extranal/js/appointment/appointment_select2.js"></script>