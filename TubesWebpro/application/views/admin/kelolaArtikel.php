<div class="container" style="margin-top: 20px;" style="background-color: rgba(255, 255, 255, 3);">
	<div class="row">
		<div class="col-lg-12 ml-auto mr-auto">
			<div class="row">
				<div class="col-md-6">
					<h2 style="margin-bottom: 50px;">Daftar Artikel</h2>
				</div>
				<div class="col-md-6">
					<a href="<?php echo $this->config->base_url(); ?>admin/tambahartikel" style="float: right; margin-top: 25px;">
						<button class="btn btn-success">Input Artikel</button>
					</a>
				</div>
			</div>
			<table id="oi" class="table table-striped table-responsive-md" border="0" cellspacing="0" style="width:100%; background-color: rgba(255, 255, 255, 3); border-radius: 5px;">
				<thead>
					<tr>
						<th>No</th>
						<th>ID artikel</th>
						<th>Judul</th>
						<th>Author</th>
						<th>Tanggal</th>
						<th style="tedatat-align: center">Action</th>
					</tr>
				</thead>
				<tbody>
					<?php 
				/* Insert Your Query to get Data from database*/
				$no=1;  
                foreach($artikel as $data){
                    $no++;
                ?>
					<!-- Show data Here -->
					<tr>
						<td>
							<?php echo $no; ?>
						</td>
						<td>
							<?php echo $data["id_artikel"]; ?>
						</td>
						<th>
							<?php echo $data["judul_artikel"] ?>
						</th>
						<td>
							<?php 
							$user=$this->db->query('select username from user where id_user='.$data['id_user'])->result_array()[0]['username'];
							echo $user; ?>
						</td>
						<td>
							<?php echo $data["tgl_artikel"]; ?>
						</td>
						<td>
							<center>
								<button type="button" class="btn btn-danger" data-toggle="modal" data-target="#del<?php echo $data["id_artikel"]; ?>">
									<i class="fa fa-trash-o"></i>
								</button>
								<a href="func.php?id=<?php echo $data["id_artikel"]; ?>">
									<button type="button" class="btn btn-info">
										<i class="fa fa-pencil"></i>
									</button>
							</center>
							</a>
						</td>
					</tr>
					<div class="modal fade" id="del<?php echo $data['id_artikel']; ?>" tabindedata="-1" role="dialog" aria-labelledby="edataampleModalLabel"
					aria-hidden="true">
						<div class="modal-dialog" role="document">
							<div class="modal-content">
								<div class="modal-header">
									<h5 class="modal-title" id="edataampleModalLabel">Delete Data</h5>
									<button type="button" class="close" data-dismiss="modal" aria-label="Close">
										<span aria-hidden="true">&times;</span>
									</button>
								</div>
								<div class="modal-body">
									<h5 class="modal-title" id="edataampleModalLabel">Are you sure to delete
										<?php echo $data['id_artikel'];?> ?</h5>
								</div>
								<div class="modal-footer">
									<form method="POST" action="func.php">
										<!-- Create hidden input here to post id Users-->
										<input style="display:none;" type="tedatat" name="id" value="<?php echo $data['id_artikel'];?>">
										<button type="submit" name="delete" class="btn btn-danger">YA</a>
									</form>
									<button type="button" class="btn btn-primary" data-dismiss="modal">TIDAK</button>

								</div>
							</div>
						</div>
					</div>
					<?php
                    }
                ?>

				</tbody>
			</table>
		</div>
	</div>
</div>
<script src="js/popper.min.js"></script>
<script>
	$(document).ready(function () {
		$('#oi').DataTable();
	});

</script>
