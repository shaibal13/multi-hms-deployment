<section id="main-content">
    <section class="wrapper site-min-height">
        <link href="common/extranal/css/accountant.css" rel="stylesheet">
        <section class="panel">
            <header class="panel-heading">
                <?php echo lang('accountant'); ?>
                <div class="clearfix no-print col-md-8 pull-right">
                    <div class="pull-right"></div>
                    <a data-toggle="modal" href="#myModal">
                        <div class="btn-group pull-right">
                            <button  class="btn green btn-xs">
                                <i class="fa fa-plus-circle"></i>  <?php echo lang('add_accountant'); ?> 
                            </button>
                        </div>
                    </a>

                </div>
            </header>
            <div class="panel-body">
                <div class="adv-table editable-table ">

                    <div class="space15"></div>
                    <table class="table table-striped table-hover table-bordered" id="editable-sample">
                        <thead>
                            <tr>
                                <th><?php echo lang('image'); ?></th>
                                <th><?php echo lang('name'); ?></th>
                                <th><?php echo lang('email'); ?></th>
                                <th><?php echo lang('address'); ?></th>
                                <th><?php echo lang('phone'); ?></th>
                                <th class="no-print"><?php echo lang('options'); ?></th>
                            </tr>
                        </thead>
                        <tbody>



                            <?php foreach ($accountants as $accountant) { ?>
                                <tr class="">
                                    <td class="img_td"><img class="img_url" src="<?php echo $accountant->img_url; ?>"></td>
                                    <td> <?php echo $accountant->name; ?></td>
                                    <td><?php echo $accountant->email; ?></td>
                                    <td class="center"><?php echo $accountant->address; ?></td>
                                    <td><?php echo $accountant->phone; ?></td>
                                    <td class="no-print">
                                        <button type="button" class="btn btn-info btn-xs btn_width editbutton" title="<?php echo lang('edit'); ?>" data-toggle="modal" data-id="<?php echo $accountant->id; ?>"><i class="fa fa-edit"> </i></button>   
                                        <a class="btn btn-info btn-xs btn_width delete_button" title="<?php echo lang('delete'); ?>" href="accountant/delete?id=<?php echo $accountant->id; ?>" onclick="return confirm('Are you sure you want to delete this item?');"><i class="fa fa-trash"> </i></a>
                                    </td>
                                </tr>
                            <?php } ?>




                        </tbody>
                    </table>
                </div>
            </div>
        </section>

    </section>
</section>





<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                <h4 class="modal-title">  <?php echo lang('add_accountant'); ?></h4>
            </div>
            <div class="modal-body">
                <form role="form" action="accountant/addNew" class="clearfix" method="post" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="exampleInputEmail1"><?php echo lang('name'); ?> &#42;</label>
                        <input type="text" class="form-control" name="name"  value='' required="">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1"><?php echo lang('email'); ?> &#42;</label>
                        <input type="email" class="form-control" name="email"  value='' placeholder="" required="">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1"><?php echo lang('password'); ?> &#42;</label>
                        <input type="password" class="form-control" name="password"  placeholder="" required="">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1"><?php echo lang('address'); ?> &#42;</label>
                        <input type="text" class="form-control" name="address"  value='' placeholder="" required="">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1"><?php echo lang('phone'); ?> &#42;</label>
                        <input type="number" class="form-control" name="phone"  value='' placeholder="" required="">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1"><?php echo lang('image'); ?></label>
                        <input type="file" name="img_url">
                    </div>

                    <div class="form-group col-md-12">
                        <button type="submit" name="submit" class="btn btn-info pull-right row"><?php echo lang('submit'); ?></button>
                    </div>

                </form>

            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="myModal2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                <h4 class="modal-title">  <?php echo lang('edit_accountant'); ?></h4>
            </div>
            <div class="modal-body">
                <form role="form" id="editAccountantForm" class="clearfix" action="accountant/addNew" method="post" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="exampleInputEmail1"><?php echo lang('name'); ?> &#42;</label>
                        <input type="text" class="form-control" name="name"  value='' placeholder="" required="">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1"><?php echo lang('email'); ?> &#42;</label>
                        <input type="email" class="form-control" name="email"  value='' placeholder="" required="">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1"><?php echo lang('password'); ?></label>
                        <input type="password" class="form-control" name="password"  placeholder="********">

                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1"><?php echo lang('address'); ?> &#42;</label>
                        <input type="text" class="form-control" name="address"  value='' placeholder="" required="">
                    </div>
                    <div class="form-group"> 
                        <label for="exampleInputEmail1"><?php echo lang('phone'); ?> &#42;</label>
                        <input type="number" class="form-control" name="phone"  value='' placeholder="" required="">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1"><?php echo lang('image'); ?></label>
                        <input type="file" name="img_url">
                    </div>

                    <input type="hidden" name="id" value=''>

                    <div class="form-group col-md-12">
                        <button type="submit" name="submit" class="btn btn-info pull-right row"><?php echo lang('submit'); ?></button>
                    </div>

                </form>

            </div>
        </div>
    </div>
</div>


<script src="common/js/codearistos.min.js"></script>
<script type="text/javascript">var language = "<?php echo $this->language; ?>";</script>
<script src="common/extranal/js/accountant.js"></script>