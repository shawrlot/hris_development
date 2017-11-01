<?php include 'header.php' ?>
<?php include'navigation.php' ?>

<div class="Home m3">
	<div class="Home ml-4 pt-4">
		<select class="e-dropdown form-control ml-4 mt-3 shadow-light text-center f-bold">
		  <option class="text-center" seleted disabled>No filter</option>
		  <?php foreach ($filters as $filter) {?>
		 	 <option class="text-center"><a href=""><?php echo $filter['department_name'] ?></a></option>
		 <?php
		  } ?>
		</select>
	</div>
	<div class="row pb-5">
		<div class="col-11 mt-4 p-4 mx-auto card shadow-light">
			<h4 class="m-0 p-0 f-bold">Analytics</h4>
			<hr class="border">
			<h1 class="text-center pb-4">Coming Soon</h1>
		</div>
		<div class="mt-3 pt-1 col-11 p-0 mx-auto">
			<table class="table table-hover shadow-light">
			  <thead>
			    <tr>
			      <th scope="col" class="text-mgray em-f border-0">ID No.</th>
			      <th scope="col" class="text-mgray em-f border-0">Last Name</th>
			      <th scope="col" class="text-mgray em-f border-0">First Name</th>
			      <th scope="col" class="text-mgray em-f border-0">Department</th>
			      <th scope="col" class="text-mgray em-f border-0 text-center">Status</th>
			    </tr>
			  </thead>
			  <tbody>

			  	<?php foreach ($employees as $employee) {?>
			    <tr>
			      <th scope="row" class="f-light em-f"><?php echo $employee['employee_id'] ?></th>
			      <td class="f-light text-mgray em-f"><?php echo $employee['employee_lastName'] ?></td>
			      <td class="f-light text-mgray em-f"><?php echo $employee['employee_firstName'] ?></td>
			      <td class="f-light text-mgray em-f"><?php echo $employee['department_name'] ?></td>
			      <td class="f-light text-mgray em-f text-center"><?php echo $employee['status_name'] ?></td>
			    </tr>
			  <?php } ?>

			  </tbody>
			</table>
		</div>
	</div>
</div>

<?php include 'footer.php' ?>