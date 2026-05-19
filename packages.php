<link rel="stylesheet" type="text/css" href="bootstrap.min.css">

<link rel="stylesheet" type="text/css" href="font-awesome.css">

<link rel="stylesheet" href="templatemo-training-studio.css">

<?php 
?>
<div class="col-md-4">
			<form action="" id="manage-package">
				<div class="card">
					<div class="card-header">
						    Package Form
				  	</div>
					<div class="card-body">
							<input type="hidden" name="id">
							<div class="form-group">
								<label class="control-label">Package Name</label>
								<input type="text" class="form-control" name="package">
							</div>
							<div class="form-group">
								<label class="control-label">Description</label>
								<textarea class="form-control" cols="30" rows='3' name="description"></textarea>
							</div>
							<div class="form-group">
								<label class="control-label">Amount</label>
								<input type="number" class="form-control text-right" step="any" name="amount">
							</div>
							
					</div>
							
					<div class="card-footer">
						<div class="row">
							<div class="col-md-12">
								<button class="btn btn-sm btn-primary col-sm-3 offset-md-3"> Save</button>
								<button class="btn btn-sm btn-default col-sm-3" type="button" onclick="_reset()"> Cancel</button>
							</div>
						</div>
					</div>
				</div>
			</form>
			</div>