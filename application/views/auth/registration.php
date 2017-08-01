<div class="container-fluid">
    <div class="container">
        <!--Page content-->
        <!--===================================================-->
        <div id="page-content">
            <div class="panel">
                <div class="panel-heading">
                    <h3 class="panel-title">Please registration here</h3>
                </div>
                <div class="panel-body">
                    <form class="form-horizontal" action="<?php echo base_url('auth/registration');?>" method="post">
                        <div class="panel-body">
                            <?php
                            if($this->session->flashdata('error')){
                                $msg = $this->session->flashdata('error');
                                echo '<div class="form-group text-center"><div class="col-sm-9"><div class="text-danger">'.@$msg.' </div></div></div>';
                            }
                            ?>
                            <div class="form-group">
                                <label class="col-sm-3 control-label" for="demo-hor-inputtext">User Name</label>
                                <div class="col-sm-9">
                                    <input type="text" name="user_name" placeholder="User name" id="demo-hor-inputtext" class="form-control" required>
                                    <div class="text-danger"><?php echo form_error('user_name'); ?></div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3 control-label" for="demo-hor-inputpass">Password</label>
                                <div class="col-sm-9">
                                    <input type="password" name="password" placeholder="Password" id="demo-hor-inputpass" class="form-control" required>
                                    <div class="text-danger"><?php echo form_error('password'); ?></div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3 control-label" for="demo-hor-inputpass">Confirm Password</label>
                                <div class="col-sm-9">
                                    <input type="password" name="confirm_password" placeholder="Password" id="demo-hor-inputpass" class="form-control" required>
                                    <div class="text-danger"><?php echo form_error('confirm_password'); ?></div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-12 text-right">
                                <button class="btn btn-success" type="submit">Sign in</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>