<div class="container-fluid">
	<div class="container">
		<!--Page content-->
		<!--===================================================-->
		<div id="page-content">
			<div class="panel">
				<div class="panel-heading">
					<h3 class="panel-title">Weather Forecast Dhaka City</h3>
				</div>
				<div class="panel-body">
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
				<div class="panel-body">
					<h4>Chart : Temperature vs wind</h4>
					<div class="col-sm-12">
						<canvas id="myChart"></canvas>
					</div>
				</div>
				<div class="row" style="padding: 20px">
					<div class="col-sm-12">
						<h4>Nano Soft Timeline</h4>
						<div class="timeline">
							<div class="timeline-header">
								<div class="timeline-header-title bg-primary">Let's see what everyone said</div>
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
				<div class="row" style="padding: 20px">
					<div class="col-sm-12">
						<h4>Feel free to share your feelings <button data-target="#login_modal" data-toggle="modal" class="btn btn-primary">Login</button> or <button data-target="#registration_modal" data-toggle="modal"  class="btn btn-primary">Registration</button></h4>
					</div>
				</div>
				<div class="row" style="padding: 20px">
					<div class="col-sm-12">
						<h4>This portion is for admin <button data-target="#login_modal" data-toggle="modal" class="btn btn-primary">Login</button></h4>
					</div>
				</div>


				<div class="modal fade" id="registration_modal" role="dialog" tabindex="-1" aria-labelledby="registration_modal" aria-hidden="true" style="display: none;">
					<div class="modal-dialog">
						<div class="modal-content">
							<!--Modal header-->
							<div class="modal-header">
								<button type="button" class="close" data-dismiss="modal"><i class="pci-cross pci-circle"></i></button>
								<h4 class="modal-title">Please registration here...</h4>
							</div>
							<!--Modal body-->
							<div class="modal-body">
								<form class="form-horizontal" action="<?php echo base_url('auth/registration');?>" method="post">
									<div class="panel-body">
										<div class="form-group">
											<label class="col-sm-3 control-label" for="demo-hor-inputtext">User Name</label>
											<div class="col-sm-9">
												<input type="text" name="user_name" placeholder="User name" id="demo-hor-inputtext" class="form-control" required>
											</div>
										</div>
										<div class="form-group">
											<label class="col-sm-3 control-label" for="demo-hor-inputpass">Password</label>
											<div class="col-sm-9">
												<input type="password" name="password" placeholder="Password" id="demo-hor-inputpass" class="form-control" required>
											</div>
										</div>
										<div class="form-group">
											<label class="col-sm-3 control-label" for="demo-hor-inputpass">Confirm Password</label>
											<div class="col-sm-9">
												<input type="password" name="confirm_password" placeholder="confirm_Password" id="demo-hor-inputpass" class="form-control" required>
											</div>
										</div>
									</div>
									<div class="form-group">
										<div class="col-sm-12 text-right">
											<button data-dismiss="modal" class="btn btn-default" type="button">Close</button>
											<button class="btn btn-success" type="submit">Sign in</button>
										</div>
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>

				<div class="modal fade" id="login_modal" role="dialog" tabindex="-1" aria-labelledby="login_modal" aria-hidden="true" style="display: none;">
					<div class="modal-dialog">
						<div class="modal-content">
							<!--Modal header-->
							<div class="modal-header">
								<button type="button" class="close" data-dismiss="modal"><i class="pci-cross pci-circle"></i></button>
								<h4 class="modal-title">Please login here...</h4>
							</div>
							<!--Modal body-->
							<div class="modal-body">
								<form class="form-horizontal" action="<?php echo base_url('auth/login');?>" method="post">
									<div class="panel-body">
										<div class="form-group">
											<label class="col-sm-3 control-label" for="demo-hor-inputtext">User Name</label>
											<div class="col-sm-9">
												<input type="text" name="user_name" placeholder="User name" id="demo-hor-inputtext" class="form-control" required>
											</div>
										</div>
										<div class="form-group">
											<label class="col-sm-3 control-label" for="demo-hor-inputpass">Password</label>
											<div class="col-sm-9">
												<input type="password" name="password" placeholder="Password" id="demo-hor-inputpass" class="form-control" required>
											</div>
										</div>
									</div>
									<div class="form-group">
										<div class="col-sm-12 text-right">
											<button data-dismiss="modal" class="btn btn-default" type="button">Close</button>
											<button class="btn btn-success" type="submit">Sign in</button>
										</div>
									</div>
								</form>
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
			f();
		});
		function f() {
			var data = {
				labels: labelsArray,
				datasets: [
					{
						label: 'Temparature',
						data: dataArray,
						backgroundColor: "rgba(153,255,51,0.4)"
					},
					{
						label: 'Wind speed',
						data: windArray,
						backgroundColor: "rgba(255,153,0,0.4)"
					}]
			};
			var canvas = document.getElementById("myChart");
			var ctx = canvas.getContext("2d");
			var myNewChart = new Chart(ctx , {
				type: "line",
				data: data,
			});
		}
	});
</script>