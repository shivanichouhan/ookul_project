<div class="forms">

	<h2 class="title1"><?= $title; ?></h2>

	<?= $this->session->flashdata('msg'); ?>

	<div class="row">		

		<div class="form-three widget-shadow">

			<form class="form-horizontal" method="post" action="<?php echo  base_url('admin/addhomeimg');

         ?>" enctype="multipart/form-data" autocomplete="off" >

				<h3 class="text-center">Banner Images</h3><br>			

				

				<div class="form-group mb-n">

					<label class="col-sm-2 control-label label-input-lg">Image</label>

					<div class="col-sm-8">

						<input type="file" name="image" >

					</div>

				</div>			

				<div class="col-sm-offset-2">
                <input type="submit" name="submit" value="Add" class="btn btn-success">

				</div>

			</form>

		</div>

	</div>

</div>	







