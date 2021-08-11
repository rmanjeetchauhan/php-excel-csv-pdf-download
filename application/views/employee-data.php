<html>
<head>
    <title>Export Data to Excel / PDf / CSV in Codeigniter </title>
    
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    
</head>
<body>
	<div class="container box">
		<br />
		<div class="table-responsive">
			<table class="table table-bordered">
				<tr>
					<td colspan="4">
						<div class="text-left" style="font-size: 20px; font-weight: bold;">
							Export Data to Excel / PDf / CSV in Codeigniter
						</div>
					</td>
					<td colspan="2">						 
						<div class="text-right">
							<a class="btn btn-sm btn-primary" href="<?php echo base_url('excel_export/generate_excel'); ?>"><i class="fa fa-download"></i> Excel File </a>
							<a class="btn btn-sm btn-info" href="<?php echo base_url('excel_export/generate_pdf'); ?>"><i class="fa fa-download"></i>&nbsp; PDF File &nbsp; </a>
							<a class="btn btn-sm btn-success" href="<?php echo base_url('excel_export/generate_csv'); ?>"><i class="fa fa-download"></i> &nbsp; CSV File  &nbsp;</a>
						</div>
					</td>
				</tr>
				<tr>
					<th>Name</th>
					<th>username</th>
					<th>Address</th>
					<th>Gender</th>
					<th>Designation</th>
					<th>Age</th>
				</tr>
				<?php
				foreach($employee_data as $row) {
				?>
				<tr>
					<td><?php echo $row->name; ?></td>
					<td><?php echo $row->username; ?></td>
					<td><?php echo $row->email; ?></td>
					<td><?php echo $row->phone; ?></td>
					<td><?php echo $row->address; ?></td>
					<td><?php echo $row->city; ?></td>
				</tr>
				<?php
				}
				?>
			</table>
		
		</div>
	</div>
</body>
</html>
























