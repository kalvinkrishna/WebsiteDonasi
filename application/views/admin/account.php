<br>
<br>
<section class='col-md-offset-2 col-md-8'>
	<?php echo form_open('Admin/Account/AccountRegister');?>
	<div class='form-group col-md-3'>
		<label>email:<input class="form-control" type="text/submit/hidden/button/etc" name="email" value="" placeholder="email"></label>
	</div>
	<div class='form-group col-md-4'>
		<label>password:<input class="form-control" type="password" name="password" value="password"></label>
	</div>
	<div class='form-group col-md-3'>
		<label>re-password:<input class='form-control' type="password" name="repassword" value="repassword"></label>
	</div>
	
	<div class="form-group col-md-3">
	<label>fullname:<input class='form-control' type="text/submit/hidden/button/etc" name="fullname" value="" placeholder="fullname"></label>
	</div>
	
	<div class='form-group col-md-3'>
		<label>telephone:<input class='form-control' type="text/submit/hidden/button/etc" name="telephone" value="" placeholder="telepon"></label>
	</div>
	<div class='clearfix'></div>
	<div class='col-md-2'>
		<button type="submit" class='btn btn-primary'>Submit</button>
	</div>
	<br>
	<br>
	<?php echo form_close();?>
	<table class='col-md-offset-1 table table-hover'>
		<h1>Tabel User</h1>
		<thead >
			<tr >
				<th class='text-center'>Email</th>
				<th class='text-center'>fullname</th>
				<th class='text-center'>telephone</th>
				<th class='text-center'>last_login</th>
			</tr>
		</thead>
		<tbody>
			<!-- <?php foreach ($user_data as $key => $value): ?>
				<tr>
					<td><?php echo $value->fullname ?></td>
					<td>test</td>
					<td>test</td>
					<td>test</td>
				</tr>
			<?php endforeach ?> -->
			
				<?php 
					foreach ($kalvin as $key => $value) {
						# code...

						echo 
						"<tr>
							<td class='text-center'>
								".$value['username']."
							</td>
							<td class='text-center'>
								".$value['fullname']."
							</td>
							<td class='text-center'>
								".$value['telephone']."
							</td>
							<td class='text-center'>
								".$value['last_login']."
							</td>
						</tr>";
					}
				?>
			
			
		</tbody>
	</table>	
</section>