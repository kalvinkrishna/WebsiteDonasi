<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">			
	<div class="row">
		<ol class="breadcrumb">
			<li><a href="#"><svg class="glyph stroked home"><use xlink:href="#stroked-home"></use></svg></a></li>
			<li class="active">Product / All Car</li>
		</ol>
	</div><!--/.row-->

	<div class="row">
		<div class="col-lg-12">
			<div class="panel panel-default">
				<div class="panel-heading">Add Car</div>
				<div class="panel-body" style="padding:20px 0px;">
				<?php echo form_open('Admin/Product/submit');?>
						<div class="col-md-6">
							<div class="form-group">
								<label>Car Merk</label>
								<input class="form-control" placeholder="Car Merk" name="car_merk">
							</div>
							<div class="form-group">
								<label>Car Type</label>
								<select class="form-control" name="car_type">
								<?php
									foreach ($type as $key => $value) {
										echo "<option value='".$value["id_car_type"]."'>";
										echo $value['name_type'];
										echo "</option>";
									}

								?>
								</select>
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group">
								<label>Car Number</label>
								<input class="form-control" placeholder="Car Number" name="car_number" >
							</div>
						</div>

						<div class="col-md-3">
							<div class="form-group">
								<label>Car Year</label>
								<input class="form-control" placeholder="Car Year" name="car_year">
							</div>
						</div>
						
						<div class="col-md-3">
							<div class="form-group">
								<label>Fuel Type</label>
								<input class="form-control" placeholder="Fuel Type" name="car_fuel" >
							</div>
						</div>

						<div class="col-md-6">
							<div class="form-group">
								<label>Car Description</label>
								<textarea class="form-control" rows="9" placeholder="Will be show on Home" name='description' >asdasdsad</textarea>
							</div>


							<button type="submit" class='btn btn-primary' value='submit' name='submit_product'>Submit</button>
						</div>
						<div class="col-md-3">
							<div class="form-group">
								<label>Seat Capacity</label>
								<input class="form-control" placeholder="Seat" name="car_seat" >
							</div>
						</div>
						<div class="col-md-3">
							<div class="form-group">
								<label>Tank Capacity</label>
								<input class="form-control" placeholder="Tank Capacity" name="car_tank">
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
			
				<?php echo form_close();?>
				</div>
			</div>
		</div>
	</div><!--/.row-->
		

	<div class="row">
		<div class="col-lg-12">
			<div class="panel panel-default">
				<div class="panel-heading">Car List</div>
				<div class="panel-body">
					<table data-toggle="table" data-url="tables/data1.json"  data-show-refresh="true" data-show-toggle="true" data-show-columns="true" data-search="true" data-select-item-name="toolbar1" data-pagination="true" data-sort-name="name" data-sort-order="desc">
					    <thead>
					    <tr>
					        <th data-field="state" data-checkbox="true" >Item ID</th>
					        <th data-field="id" data-sortable="true">Item ID</th>
					        <th data-field="name"  data-sortable="true">Item Name</th>
					        <th data-field="price" data-sortable="true">Item Price</th>
					        <th data-field="action" data-sortable="true">Action</th>
					    </tr>
					    </thead>
					    <tbody>
					    <?php 
						foreach ($product as $key => $value) {
							echo '
					    <tr>
					    	<td></td>
					    	<td>
								'.$value["plate"].'
					    	</td>
					    	<td>
								'.$value["name"].'
					    	</td>
					    	<td>
								5000
					    	</td>
					    	<td>
					    		<a href="<?=base_url()?>Admin/Product/detail"><svg class="glyph stroked clipboard with paper action-small"><use xlink:href="#stroked-clipboard-with-paper"/></svg></a>
					    		<a href="'.base_url().'Admin/Product/delete/product/'.$value["id_car"].'"><svg class="glyph stroked trash action-small"><use xlink:href="#stroked-trash"/></svg></svg></a>
					    		<a class="" href=""><button class="btn-primary">Update</button></a>
					    	</td>
					    </tr>';
					}	
					    ?>
					    </tbody>
					</table>
				</div>
			</div>
		</div>
	</div><!--/.row-->	

</div>	<!--/.main-->	