<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">			
	<div class="row">
		<ol class="breadcrumb">
			<li><a href="#"><svg class="glyph stroked home"><use xlink:href="#stroked-home"></use></svg></a></li>
			<li class="active">Product / Car Detail</li>
		</ol>
	</div><!--/.row-->

	<div class="row">
		<div class="col-lg-12">
			<div class="panel panel-default">
				<div class="panel-heading">Add Car</div>
				<div class="panel-body" style="padding:20px 0px;">
					<form role="form">
						<div class="col-md-6">
							<div class="form-group">
								<label>Car Merk</label>
								<select class="form-control" name="carmerk">
									<option>Toyota Avanza</option>
									<option>Daihatsu Xenia</option>
									<option>Honda Jazz</option>
									<option>Mercedes Benz</option>
								</select>
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group">
								<label>Car Number</label>
								<input class="form-control" placeholder="Car Number" name="carnumber">
							</div>
						</div>

						<div class="col-md-3">
							<div class="form-group">
								<label>Car Year</label>
								<input class="form-control" placeholder="Car Year" name="caryear">
							</div>
						</div>
						<div class="col-md-3">
							<div class="form-group">
								<label>Seat Capacity</label>
								<input class="form-control" placeholder="Seat" name="caryear">
							</div>
						</div>
						<div class="col-md-3">
							<div class="form-group">
								<label>Tank Capacity</label>
								<input class="form-control" placeholder="Tank Capacity" name="caryear">
							</div>
						</div>
						<div class="col-md-3">
							<div class="form-group">
								<label>Fuel Type</label>
								<input class="form-control" placeholder="Fuel Type" name="caryear">
							</div>
						</div>

						<div class="col-md-6">
							<div class="form-group">
								<label>Car Description</label>
								<textarea class="form-control" rows="9" placeholder="Will be show on Home"></textarea>
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group">
								<label>Fasilities</label>
								<input class="form-control" style="margin-bottom: 5px;" placeholder="Fasility 1" name="carnumber">
								<input class="form-control" style="margin-bottom: 5px;" placeholder="Fasility 2" name="carnumber">
								<input class="form-control" style="margin-bottom: 5px;" placeholder="Fasility 3" name="carnumber">
								<input class="form-control" style="margin-bottom: 5px;" placeholder="Fasility 4" name="carnumber">
								<input class="form-control" style="margin-bottom: 5px;" placeholder="Fasility 5" name="carnumber">
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div><!--/.row-->
		

	<div class="row">
		<div class="col-lg-12">
			<div class="panel panel-default">
				<div class="panel-heading">Car Image</div>
				<div class="panel-body">
					<table data-toggle="table" data-url="tables/data1.json"  data-show-refresh="true" data-show-toggle="true" data-show-columns="true" data-search="true" data-select-item-name="toolbar1" data-pagination="true" data-sort-name="name" data-sort-order="desc">
					    <thead>
					    <tr>
					        <th data-field="state" data-checkbox="true" >Item ID</th>
					        <th data-field="id" data-sortable="true">Picture</th>
					        <th data-field="name"  data-sortable="true">Alternative</th>
					        <th data-field="price" data-sortable="true">Action</th>
					    </tr>
					    <tbody>
					    <tr>
					    	<td>A</td>
					    	<td>A</td>
					    	<td>A</td>
					    	<td>
					    		<a href="#"><svg class="glyph stroked trash action-small"><use xlink:href="#stroked-trash"/></svg></svg></a>
					    	</td>
					    </tr>
					    </tbody>
					    </thead>
					</table>
				</div>
			</div>
		</div>
	</div><!--/.row-->	

</div>	<!--/.main-->	