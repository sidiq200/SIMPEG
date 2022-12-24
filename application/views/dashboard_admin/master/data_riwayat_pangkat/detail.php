<?php include "application/views/dashboard_admin/home/header.php" ?>
<div class="container">
	

	<div class="well">
	<?php if(validation_errors()) { ?>
	<div class="alert alert-block">
	  <button type="button" class="close" data-dismiss="alert">×</button>
	  	<h4>Terjadi Kesalahan!</h4>
		<?php echo validation_errors(); ?>
	</div>
	<?php } ?>
		<?php echo form_open('data_riwayat_pangkat/simpan','class="form-horizontal"'); ?>
		  <div class="control-group">
		  	<legend>Data Riwayat Pangkat - <?php echo $this->session->userdata("nama_pegawai"); ?></legend>
			<label class="control-label" for="golongan">Golongan</label>
			<div class="controls">
			  <select name="id_golongan" disabled="true">
			  	<?php
			  		foreach($golongan->result_array() as $g)
			  		{
			  			if($id_golongan==$g['id_golongan'])
			  			{
			  	?>
			  		<option value="<?php echo $g['id_golongan']; ?>" selected="selected"><?php echo $g['golongan']; ?></option>
			  	<?php
			  			}
			  			else
			  			{
			  	?>
			  		<option value="<?php echo $g['id_golongan']; ?>"><?php echo $g['golongan']; ?></option>
			  	<?php
			  			}
			  		}
			  	?>
			  </select>
			</div>
		  </div>
		  
		  <div class="control-group">
			<label class="control-label" for="status">Status</label>
			<div class="controls">
			  <input type="text" class="span6" name="status" id="status" value="<?php echo $status; ?>" 
			  placeholder="Status" disabled>
			</div>
		  </div>
		  
		  <div class="control-group">
			<label class="control-label" for="nomor_sk">Nomor SK</label>
			<div class="controls">
			  <input type="text" class="span6" name="nomor_sk" id="nomor_sk" value="<?php echo $nomor_sk; ?>" 
			  placeholder="Nomor SK" disabled>
			</div>
		  </div>
		  
		  <div class="control-group">
			<label class="control-label" for="tanggal_sk">Tanggal SK</label>
			<div class="controls">
			  <input type="text" class="span6" name="tanggal_sk" id="tanggal_sk" value="<?php echo $tanggal_sk; ?>" 
			  placeholder="Tanggal SK" disabled>
			</div>
		  </div>
		  
		  <div class="control-group">
			<label class="control-label" for="tanggal_mulai">Tanggal Mulai</label>
			<div class="controls">
			  <input type="text" class="span6" name="tanggal_mulai" id="tanggal_mulai" value="<?php echo $tanggal_mulai; ?>" 
			  placeholder="Tanggal Mulai" disabled>
			</div>
		  </div>
		  
		  <div class="control-group">
			<label class="control-label" for="tanggal_selesai">Tanggal Selesai</label>
			<div class="controls">
			  <input type="text" class="span6" name="tanggal_selesai" id="tanggal_selesai" value="<?php echo $tanggal_selesai; ?>" 
			  placeholder="Tanggal Selesai" disabled>
			</div>
		  </div>
		  
		  <div class="control-group">
			<label class="control-label" for="masa_kerja">Masa Kerja</label>
			<div class="controls">
			  <input type="text" class="span6" name="masa_kerja" id="masa_kerja" value="<?php echo $masa_kerja; ?>" 
			  placeholder="Masa Kerja" disabled>
			</div>
		  </div>
		  <?php
				$ft = $foto;
				if($ft=="")
				{
					$ft="no-img.jpg";
				}
			?>
          <div class="control-group">
			<label class="control-label" for="nip">Foto Riwayat Pangkat</label>
			<div class="controls">
			<p><img src="<?php echo base_url(); ?>asset/foto_pangkat/medium/<?php echo $ft; ?>" /></p>
			</div>
		</div>
		  
		  <input type="hidden" name="id_param" value="<?php echo $id_param; ?>">
		  <input type="hidden" name="id_pegawai" value="<?php echo $id_pegawai; ?>">
		  <input type="hidden" name="st" value="<?php echo $st; ?>">
		<?php echo form_close(); ?>
	</div>    
</div>
<div class="container">
<?php include "application/views/dashboard_admin/home/footer.php" ?>	
</div>
