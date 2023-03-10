
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title><?php echo $judul_lengkap.' - '.$instansi; ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="<?php echo base_url(); ?>asset/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>asset/css/bootstrap-responsive.min.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>asset/css/docs.css" rel="stylesheet">
	
    <script src="<?php echo base_url(); ?>asset/js/jquery-latest.js"></script>
    <script src="<?php echo base_url(); ?>asset/js/bootstrap.min.js"></script>
    <script src="<?php echo base_url(); ?>asset/js/application.js"></script>
    <script src="<?php echo base_url(); ?>asset/js/bootstrap-tooltip.js"></script>
	<link rel="stylesheet" href="<?php echo base_url(); ?>asset/colorbox/colorbox.css" />
	<script src="<?php echo base_url(); ?>asset/colorbox/jquery.colorbox.js"></script>
	<script>
		  $(document).ready(function(){
			  //Examples of how to assign the ColorBox event to elements
			  $(".medium-box").colorbox({rel:'group', iframe:true, width:"90%", height:"90%"});
	
		  });
	</script>
  </head>

  <body>

    <div class="navbar navbar-inverse navbar-fixed-top">
      <div class="navbar-inner">
        <div class="container">
          <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </a>
          <a class="brand" href="<?php echo base_url(); ?>"><?php echo $judul_pendek; ?></a>
          <div class="nav-collapse collapse">
            <ul class="nav">
              <li class="active"><a href="<?php echo base_url(); ?>"><i class="icon-home icon-white"></i> Beranda</a></li>
			  <li class="dropdown">
			  	<a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="icon-book icon-white"></i> Master <b class="caret"></b></a>
                <ul class="dropdown-menu">
                  <li><a href="<?php echo base_url(); ?>master_status_pegawai"><i class="icon-tag"></i> Status Pegawai</a></li>
                  <li><a href="<?php echo base_url(); ?>master_unit_kerja"><i class="icon-question-sign"></i> Unit Kerja</a></li>
                  <li><a href="<?php echo base_url(); ?>master_satuan_kerja"><i class="icon-ok-sign"></i> Satuan Kerja</a></li>
                  <li><a href="<?php echo base_url(); ?>master_ppk"><i class="icon-eye-open"></i> PPK</a></li>
                  <li><a href="<?php echo base_url(); ?>master_golongan"><i class="icon-random"></i> Golongan</a></li>
                  <li><a href="<?php echo base_url(); ?>master_eselon"><i class="icon-retweet"></i> Eselon</a></li>
                  <li><a href="<?php echo base_url(); ?>master_pelatihan"><i class="icon-folder-open"></i> Pelatihan</a></li>
                  <li><a href="<?php echo base_url(); ?>master_jabatan"><i class="icon-hdd"></i> Jabatan</a></li>
                  <li><a href="<?php echo base_url(); ?>master_status_jabatan"><i class="icon-tasks"></i> Status Jabatan</a></li>
                  <li><a href="<?php echo base_url(); ?>master_penghargaan"><i class="icon-filter"></i> Penghargaan</a></li>
                  <li><a href="<?php echo base_url(); ?>master_hukuman"><i class="icon-briefcase"></i> Hukuman</a></li>
                  <li><a href="<?php echo base_url(); ?>master_lokasi_pelatihan"><i class="icon-fullscreen"></i> Lokasi Pelatihan</a></li>
                  <li><a href="<?php echo base_url(); ?>master_lokasi_kerja"><i class="icon-briefcase"></i> Lokasi Kerja</a></li>
                </ul>
              </li>
			  <li class="dropdown">
			  	<a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="icon-comment icon-white"></i> Panduan <b class="caret"></b></a>
                <ul class="dropdown-menu">
                  <li><a href="<?php echo base_url(); ?>panduan_administrator"><i class="icon-fire"></i> Administrator</a></li>
                  <li><a href="<?php echo base_url(); ?>panduan_operator"><i class="icon-asterisk"></i> Operator</a></li>
                  <li><a href="<?php echo base_url(); ?>panduan_executive"><i class="icon-leaf"></i> Executive</a></li>
                </ul>
              </li>
			  <li class="dropdown">
			  	<a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="icon-tasks icon-white"></i> Laporan <b class="caret"></b></a>
                <ul class="dropdown-menu">
                  <li><a href="<?php echo base_url(); ?>laporan_pegawai_unit_satuan"><i class="icon-tag"></i> Laporan Pegawai - Unit Kerja dan Satuan Kerja</a></li>
                  <li><a href="<?php echo base_url(); ?>laporan_pegawai_penempatan_kerja"><i class="icon-question-sign"></i> Laporan Pegawai - Penempatan Kerja</a></li>
                  <li><a href="<?php echo base_url(); ?>laporan_pegawai_ikut_pelatihan"><i class="icon-ok-sign"></i> Laporan Pegawai - Mengikuti Pelatihan</a></li>
                  <li><a href="<?php echo base_url(); ?>laporan_pegawai_status_golongan"><i class="icon-eye-open"></i> Laporan Pegawai - Status Pegawai dan Golongan</a></li>
                  <li><a href="<?php echo base_url(); ?>laporan_pegawai_struktural_fungsional"><i class="icon-random"></i> Laporan Pegawai - Struktural dan Fungsional</a></li>
                  <li><a href="<?php echo base_url(); ?>laporan_pegawai_urut_kepangkatan"><i class="icon-retweet"></i> Laporan Daftar Urut Kepangkatan</a></li>
                                  <li><a href="<?php echo base_url(); ?>kenaikan_pangkat"><i class="icon-eye-open"></i> Rencana Usulan Kenaikan Pangkat (RUKP)</a></li>
                   <li><a href="<?php echo base_url(); ?>kenaikan_gaji"><i class="icon-eye-open"></i> Usulan Kenaikan Gaji Berkala (UKGB)</a></li>
                </ul>
              </li>
            </ul>
            <div class="btn-group pull-right">
			  <button class="btn btn-primary"><i class="icon-user icon-white"></i> <?php echo $this->session->userdata('nama'); ?></button>
			  <button class="btn btn-primary dropdown-toggle" data-toggle="dropdown">
				<span class="caret"></span>
			  </button>
			  <ul class="dropdown-menu">
				<li><a href="<?php echo base_url(); ?>app/change_password"><i class="icon-wrench"></i> Pengaturan Akun</a></li>
				<li><a href="<?php echo base_url(); ?>manage_user"><i class="icon-tasks"></i> Manajemen User</a></li>
				<li><a href="<?php echo base_url(); ?>app/logout"><i class="icon-off"></i> Log Out</a></li>
			  </ul>
			</div>
          </div><!--/.nav-collapse -->
        </div>
      </div>
    </div>
	
    <div class="container">
	
	<div class="well">
	  <div class="row">
		<div class="span">
		  <h3><?php echo $judul_lengkap.' '.$instansi; ?></h3>
		  <p><?php echo $alamat; ?></p>
		</div>
	  </div>
	</div>

  <div class="well">
	<div class="navbar navbar-inverse">
	  <div class="navbar-inner">
		<div class="container">
		  <a class="brand" href="#">Usulan Kenaikan Gaji Berkala (UKGB)</a>
		<div class="span6 pull-right">
		<?php
			echo form_open("kenaikan_gaji/set",'class="navbar-form pull-right"');
		?>
			<div class="span2"><strong>Tahun</strong></div>
			<div class="span">:</div>
			<div class="span3">
			<select class="span3" name="id_satuan_kerja">
			<option value="">- Tahun -</option>
			<?php
			if($this->session->userdata('id_satuan_kerja')=="Semua")
			{
			?>
				<option value="Semua" selected="selected">Semua</option>
			<?php
			}
			else
			{
			?>
				<option value="Semua">Semua</option>
			<?php
			}
			  		
			  	?>
			  		<option value="2010">2012</option>
                    <option value="2011">2013</option>
                    <option value="2012">2014</option>
                    <option value="2013">2015</option>
                    <option value="2014">2016</option>
                    <option value="2015">2017</option>			  	
			  		<option value="2016">2018</option>
                    <option value="2017">2019</option>
                    <option value="2018">2020</option>
                    
			  	
			</select>
		</div>
		<div class="span4 pull-right">
  		<a class="btn" href="<?php echo base_url(); ?>kenaikan_gaji/export"><i class="icon-ok-circle"></i> Export ke Excell</a>
		  <button type="submit" class="btn btn-primary"><i class="icon-search icon-white"></i> Cari Data Laporan</button>
		 </div>
		<?php echo form_close(); ?>
		</div>
		</div>
	  </div><!-- /navbar-inner -->
	</div><!-- /navbar -->
	
	  <section>
  <table class="table table-hover table-condensed">
    <thead>
      <tr>
        <th>No.</th>
        <th>NIP</th>
        <th>Nama Pegawai</th>
        <th>Jabatan</th>
		<th>Pangkat / Golongan lama</th>
		<th>Keterangan</th>
      </tr>
    </thead>
    <tbody>
	<?php
		$no=1;
		foreach($data_pegawai->result_array() as $dp)
		{
	?>
      <tr>
        <td><?php echo $no; ?></td>
        <td><?php echo $dp['nip']; ?></td>
        <td><?php echo $dp['nama_pegawai']; ?></td>
        <td><?php echo $dp['nama_jabatan']; ?></td>
        <td><?php echo $dp['uraian']; ?> <?php echo $dp['golongan']; ?> <BR><?php echo $dp['tanggal_sk_pangkat']; ?></td>
        <td><?php 
		$awal = $dp['SUBSTRING(tanggal_sk_pangkat,-4)'];
	$tambah = 2;
	$next = $awal+$tambah;
		echo $dp['LEFT(tanggal_sk_pangkat, CHAR_LENGTH(tanggal_sk_pangkat)-5)']; ?>&nbsp;<?php echo $next; ?>
        </td>
      </tr>
	 <?php
	 		$no++;
	 	}
	 ?>
    </tbody>
  </table>
	
  

</section>
  </div>


      <footer class="well">
        <p><?php echo $credit; ?></p>
      </footer>

    </div> <!-- /container -->

  </body>
</html>
