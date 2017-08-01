<div class="container-fluid">
    <div class="container">
        <!--Page content-->
        <!--===================================================-->
        <div id="page-content">
            <a href="<?php echo base_url('user/logout')?>"><i class="fa fa-sign-out" style="position: fixed;float: right;right: 0;font-size: 60px;color: #b37070;"></i></a>
            <div class="panel">
                <?php
                if($this->session->flashdata('success')){
                    $msg = $this->session->flashdata('success');
                    echo '<div class="row" style="padding: 20px"><div class="alert alert-success"><button class="close" data-dismiss="alert"><i class="fa fa-close"></i></button><strong>Well done! </strong> '.@$msg.'.</div></div>';
                }
                ?>
                <div class="row" style="padding: 20px">
                    <div class="col-sm-12">
                        <form class="form-horizontal" method="post" action="<?php echo base_url('user/add_comment')?>">
                            <div class="panel-body">
                                <div class="input-group mar-btm">
                                    <input type="text" name="comment" placeholder="Share your feelings" class="form-control" required>
                                    <span class="input-group-btn">
                                        <button class="btn btn-mint" type="submit">Post Now</button>
                                    </span>
                                    <div class="text-danger"><?php echo form_error('comment'); ?></div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="row" style="padding: 20px">
                    <div class="col-sm-12">
                        <div class="timeline">
                            <div class="timeline-header">
                                <div class="timeline-header-title bg-primary">What I said earlier.</div>
                            </div>
                            <?php
                            foreach ($my_comments as $comment):

                                ?>
                                <div class="timeline-entry">
                                    <div class="timeline-stat">
                                        <div class="timeline-icon"></div>
                                        <div class="timeline-time"><?php echo $comment['created_at']?></div>
                                    </div>
                                    <div class="timeline-label">
                                        <p class="mar-no pad-btm"><a href="#" class="btn-link text-main text-bold"><?php echo $comment['user_name']?></a> said,</p>
                                        <blockquote class="bq-sm bq-open mar-no"><?php echo $comment['comment']?>.</blockquote>
                                    </div>
                                </div>
                                <?php
                            endforeach;
                            ?>
                        </div>
                    </div>
                </div>

                <div class="row" style="padding: 20px">
					<div class="col-sm-12">
						<h4>Nano Soft Timeline of other users</h4>
						<div class="timeline">
							<div class="timeline-header">
								<div class="timeline-header-title bg-primary">Let's see what others said</div>
							</div>

							<?php
                foreach ($comments as $comment):

                    ?>
							<div class="timeline-entry">
								<div class="timeline-stat">
									<div class="timeline-icon"></div>
									<div class="timeline-time"><?php echo $comment['created_at']?></div>
								</div>
								<div class="timeline-label">
									<p class="mar-no pad-btm"><a href="#" class="btn-link text-main text-bold"><?php echo $comment['user_name']?></a> said,</p>
									<blockquote class="bq-sm bq-open mar-no"><?php echo $comment['comment']?>.</blockquote>
								</div>
							</div>
							<?php
                endforeach;
                ?>
						</div>
					</div>
				</div>
                <div class="panel-body">
                    <h4>Let's have a look at the weather.</h4>
                    <div id="demo-dt-selection_wrapper" class="dataTables_wrapper form-inline dt-bootstrap no-footer">
                        <div class="row">
                            <div class="col-sm-12">
                                <table id="demo-dt-selection" class="table table-striped table-bordered dataTable no-footer dtr-inline text-center" cellspacing="0" width="100%" role="grid" aria-describedby="demo-dt-selection_info" style="width: 100%;">
                                    <thead>
                                    <tr role="row">
                                        <th class="sorting_asc" tabindex="0" aria-controls="demo-dt-selection" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Date/Time: activate to sort column descending" style="width: 120px;">Date/Time</th>
                                        <th class="sorting" tabindex="0" aria-controls="demo-dt-selection" rowspan="1" colspan="1" aria-label="Overall Weather: activate to sort column ascending" style="width: 200px;">Overall Weather</th>
                                        <th class="sorting" tabindex="0" aria-controls="demo-dt-selection" rowspan="1" colspan="1" aria-label="Temperature(Celsius)/Humidity: activate to sort column ascending" style="width: 200px;">Temperature(Celsius)/Humidity</th>
                                        <th class="sorting" tabindex="0" aria-controls="demo-dt-selection" rowspan="1" colspan="1" aria-label="Cloud: activate to sort column ascending" style="width: 200px;">Cloud</th>
                                        <th class="min-tablet sorting" tabindex="0" aria-controls="demo-dt-selection" rowspan="1" colspan="1" aria-label="Wind: activate to sort column ascending" style="width: 203px;">Wind</th>
                                    </tr>
                                    </thead>
                                    <tbody id="forcast-data">

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

<script>

    $(document).ready(function () {
        var labelsArray = [];
        var dataArray = [];
        var windArray = [];
        $.get("http://api.openweathermap.org/data/2.5/forecast?id=1185241&APPID=c649bb37d5f267ec527cf11eb8976dfa", function(data) {
            var htmlText = '';
            data.list.forEach(function(sigleData) {
                var table = $('#demo-dt-selection').DataTable();
                table.row.add( [
                    sigleData.dt_txt,
                    '<P>Mostly <b>'+sigleData.weather[0].main+'</b></P><p>'+sigleData.weather[0].description+'</p>',
                    parseInt(sigleData.main.temp-273)+'/'+sigleData.main.humidity,
                    sigleData.clouds.all+'%',
                    sigleData.wind.speed

                ]).draw();
                labelsArray.push(sigleData.dt_txt);
                dataArray.push(parseInt(sigleData.main.temp-273));
                windArray.push(sigleData.wind.speed);
            })
        });
    });
</script>