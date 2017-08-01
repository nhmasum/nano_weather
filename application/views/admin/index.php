<div class="container-fluid">
    <div class="container">
        <!--Page content-->
        <!--===================================================-->
        <div id="page-content">
            <a href="<?php echo base_url('admin/logout')?>"><i class="fa fa-sign-out" style="position: fixed;float: right;right: 0;font-size: 60px;color: #b37070;"></i></a>
            <div class="panel">
                <div class="panel-heading">
                    <h3 class="panel-title">List of comments</h3>
                </div>
                <div class="panel-body">
                    <div id="demo-dt-selection_wrapper" class="dataTables_wrapper form-inline dt-bootstrap no-footer">
                        <div class="row">
                            <div class="col-sm-12">
                                <table id="demo-dt-selection" class="table table-striped table-bordered dataTable no-footer dtr-inline text-center" cellspacing="0" width="100%" role="grid" aria-describedby="demo-dt-selection_info" style="width: 100%;">
                                    <thead>
                                    <tr role="row">
                                        <th class="sorting_asc" tabindex="0" aria-controls="demo-dt-selection" rowspan="1" colspan="1" aria-sort="ascending" aria-label="SL: activate to sort column descending" style="width: 120px;">SL</th>
                                        <th class="sorting" tabindex="0" aria-controls="demo-dt-selection" rowspan="1" colspan="1" aria-label="User Name: activate to sort column ascending" style="width: 200px;">User Name</th>
                                        <th class="sorting" tabindex="0" aria-controls="demo-dt-selection" rowspan="1" colspan="1" aria-label="Comment: activate to sort column ascending" style="width: 200px;">Comment</th>
                                        <th class="sorting" tabindex="0" aria-controls="demo-dt-selection" rowspan="1" colspan="1" aria-label="Comment Status: activate to sort column ascending" style="width: 200px;">Comment Status</th>
                                        <th class="sorting" tabindex="0" aria-controls="demo-dt-selection" rowspan="1" colspan="1" aria-label="Comment Time: activate to sort column ascending" style="width: 203px;">Comment Time</th>
                                        <th class="min-tablet sorting" tabindex="0" aria-controls="demo-dt-selection" rowspan="1" colspan="1" aria-label="Action: activate to sort column ascending" style="width: 203px;">Action</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <?php
                                    $sl=1;
                                    foreach ($comments as $comment){
                                        if($comment['status']==0){
                                            $status='<div class="label label-table label-danger"> Not Approved</div>';
                                            $action='<a href="'.base_url("admin/approve/".$comment["id"]).'"><button class="btn btn-primary">Approve Now</button></a>';
                                        }else{
                                            $status='<div class="label label-table label-success"> Approved</div>';
                                            $action='<a href="'.base_url("admin/not_approve/".$comment["id"]).'"><button class="btn btn-danger">Remove</button>';
                                        }
                                        echo '<tr><td>'.$sl.'</td><td>'.$comment["user_name"].'</td><td>'.$comment["comment"].'</td><td>'.$status.'</td><td>'.$comment["created_at"].'</td><td>'.$action.'</td></tr>';
                                        $sl++;
                                    }
                                    ?>

                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>