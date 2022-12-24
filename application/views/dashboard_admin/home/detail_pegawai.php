<?php include "application/views/dashboard_admin/home/header.php" ?>
<div class="page-wrapper">
	<div class="container-fluid">
		
	<header class="jumbotron subhead" id="overview">
	  <div class="subnav">
		<ul class="nav nav-pills">
		  <li><a href="#data-pegawai">Pegawai</a></li>
		  <li><a href="#data-keluarga">Keluarga</a></li>
		  <li><a href="#data-pangkat">Riwayat Pangkat</a></li>
		  <li><a href="#data-jabatan">Riwayat Jabatan</a></li>
		  <li><a href="#data-pendidikan">Pendidikan</a></li>
		  <li><a href="#data-pelatihan">Pelatihan</a></li>
		  <li><a href="#data-penghargaan">Penghargaan</a></li>
		  <li><a href="#data-seminar">Seminar</a></li>
		  <li><a href="#data-organisasi">Organisasi</a></li>
		  <li><a href="#data-gaji">Gaji Pokok</a></li>
		  <li><a href="#data-hukuman">Hukuman</a></li>
		  <li><a href="#data-dp3">Penilaian Atasan</a></li>
		</ul>
	  </div>
	</header>

<section id="data-pegawai">
  <div class="well">
	<div class="page-header">
    	<h1>Data Pegawai</h1>
  	</div>
	
  	<?php
		foreach($data_pegawai->result_array() as $dp)
		{
	?>
		<div class="row">
			<div class="span3"><strong>NIK</strong></div>
			<div class="span">:</div>
			<div class="span6"><?php echo $dp['nip']; ?></div>
		</div>
		<div class="row">
			<div class="span3"><strong>NIK Lama</strong></div>
			<div class="span">:</div>
			<div class="span6"><?php echo $dp['nip_lama']; ?></div>
		</div>
		<div class="row">
			<div class="span3"><strong>Nomor Kartu Pegawai</strong></div>
			<div class="span">:</div>
			<div class="span6"><?php echo $dp['no_kartu_pegawai']; ?></div>
		</div>
		<div class="row">
			<div class="span3"><strong>Nama Pegawai</strong></div>
			<div class="span">:</div>
			<div class="span6"><?php echo $dp['nama_pegawai']; ?></div>
		</div>
		<div class="row">
			<div class="span3"><strong>Tempat & Tanggal Lahir</strong></div>
			<div class="span">:</div>
			<div class="span6"><?php echo $dp['tempat_lahir'].', '.$dp['tanggal_lahir']; ?></div>
		</div>
		<div class="row">
			<div class="span3"><strong>Jenis Kelamin</strong></div>
			<div class="span">:</div>
			<div class="span6"><?php echo $dp['jenis_kelamin']; ?></div>
		</div>
		<div class="row">
			<div class="span3"><strong>Agama</strong></div>
			<div class="span">:</div>
			<div class="span6"><?php echo $dp['agama']; ?></div>
		</div>
		<div class="row">
			<div class="span3"><strong>Usia</strong></div>
			<div class="span">:</div>
			<div class="span6"><?php echo $dp['usia']; ?></div>
		</div>
		<div class="row">
			<div class="span3"><strong>Status Pegawai</strong></div>
			<div class="span">:</div>
			<div class="span6"><?php echo $dp['nama_status']; ?></div>
		</div>
		<div class="row">
			<div class="span3"><strong>Tanggal Pengangkatan CAPEG</strong></div>
			<div class="span">:</div>
			<div class="span6"><?php echo $dp['tanggal_pengangkatan_cpns']; ?></div>
		</div>
		<div class="row">
			<div class="span3"><strong>Alamat</strong></div>
			<div class="span">:</div>
			<div class="span6"><?php echo $dp['alamat']; ?></div>
		</div>
	<?php
		}
	?>
  </div>
</section>

<section id="data-keluarga">
  <div class="well">
	<div class="page-header">
    	<h1>Data Keluarga</h1>
  	</div>
  	<table class="table table-hover table-condensed">
    <thead>
      <tr>
        <th>No.</th>
        <th>Nama Keluarga</th>
		<th>Tanggal Lahir</th>
        <th>Status Kawin</th>
        <th>Tanggal Nikah</th>
		<th>Pekerjaan</th>
		<th>Aksi</th>
      </tr>
    </thead>
    <tbody>
	<?php
		$no=1;
		foreach($data_keluarga->result_array() as $dk)
		{
	?>
      <tr>
        <td><?php echo $no; ?></td>
        <td><?php echo $dk['nama_anggota_keluarga']; ?></td>
        <td><?php echo $dk['tanggal_lahir']; ?></td>
        <td><?php echo $dk['status_kawin']; ?></td>
        <td><?php echo $dk['tanggal_nikah']; ?></td>
        <td><?php echo $dk['pekerjaan']; ?></td>
		<td>
	        <div class="btn-group">
	          <a class="btn btn-small" href="<?php echo base_url(); ?>data_keluarga/detail/<?php echo $dk['id_data_keluarga']; ?>"><i class="icon-ok-circle"></i> Lihat Detail</a>
	          <a class="btn btn-small dropdown-toggle" data-toggle="dropdown" href="#"><span class="caret"></span></a>
	          <ul class="dropdown-menu">
	            <li><a href="<?php echo base_url(); ?>data_keluarga/edit/<?php echo $dk['id_data_keluarga']; ?>"><i class="icon-pencil"></i> Edit Data</a></li>
	            <li><a href="<?php echo base_url(); ?>data_keluarga/hapus/<?php echo $dk['id_data_keluarga']; ?>" onClick="return confirm('Anda yakin..???');"><i class="icon-trash"></i> Hapus Data</a></li>
	          </ul>
	        </div><!-- /btn-group -->
		</td>
      </tr>
	 <?php
	 		$no++;
	 	}
	 ?>
    </tbody>
  </table>
  </div>
</section>

<section id="data-pangkat">
  <div class="well">
	<div class="page-header">
    	<h1>Data Riwayat Pangkat</h1>
  	</div>
  	
  	<table class="table table-hover table-condensed">
    <thead>
      <tr>
        <th>No.</th>
        <th>Golongan</th>
		<th>Status</th>
        <th>Nomor SK</th>
        <th>Tanggal SK</th>
		<th>Tanggal Mulai</th>
		<th>Tanggal Selesai</th>
		<th>Masa Kerja</th>
		<th>Aksi</th>
      </tr>
    </thead>
    <tbody>
	<?php
		$no=1;
		foreach($data_riwayat_pangkat->result_array() as $drp)
		{
	?>
      <tr>
        <td><?php echo $no; ?></td>
        <td><?php echo $drp['golongan']; ?></td>
        <td><?php echo $drp['status']; ?></td>
        <td><?php echo $drp['nomor_sk']; ?></td>
        <td><?php echo $drp['tanggal_sk']; ?></td>
        <td><?php echo $drp['tanggal_mulai']; ?></td>
        <td><?php echo $drp['tanggal_selesai']; ?></td>
        <td><?php echo $drp['masa_kerja']; ?></td>
		<td>
	        <div class="btn-group">
	          <a class="btn btn-small" href="<?php echo base_url(); ?>data_riwayat_pangkat/detail/<?php echo $drp['id_riwayat_pangkat']; ?>"><i class="icon-ok-circle"></i> Lihat Detail</a>
	          <a class="btn btn-small dropdown-toggle" data-toggle="dropdown" href="#"><span class="caret"></span></a>
	          <ul class="dropdown-menu">
	            <li><a href="<?php echo base_url(); ?>data_riwayat_pangkat/edit/<?php echo $drp['id_riwayat_pangkat']; ?>"><i class="icon-pencil"></i> Edit Data</a></li>
	            <li><a href="<?php echo base_url(); ?>data_riwayat_pangkat/hapus/<?php echo $drp['id_riwayat_pangkat']; ?>" onClick="return confirm('Anda yakin..???');"><i class="icon-trash"></i> Hapus Data</a></li>
	          </ul>
	        </div><!-- /btn-group -->
		</td>
      </tr>
	 <?php
	 		$no++;
	 	}
	 ?>
    </tbody>
  </table>
  </div>
</section>

<section id="data-jabatan">
  <div class="well">
	<div class="page-header">
    	<h1>Data Riwayat Jabatan</h1>
  	</div>
  	
  	<table class="table table-hover table-condensed">
    <thead>
      <tr>
        <th>No.</th>
        <th>Status</th>
		<th>Penempatan</th>
        <th>Jabatan</th>
        <th>Unit Kerja</th>
		<th>Pangkat</th>
		<th>Aksi</th>
      </tr>
    </thead>
    <tbody>
	<?php
		$no=1;
		foreach($data_riwayat_jabatan->result_array() as $drj)
		{
	?>
      <tr>
        <td><?php echo $no; ?></td>
        <td><?php echo $drj['status']; ?></td>
        <td><?php echo $drj['penempatan']; ?></td>
        <td><?php echo $drj['nama_jabatan']; ?></td>
        <td><?php echo $drj['nama_unit_kerja']; ?></td>
        <td><?php echo $drj['nama_eselon']; ?></td>
		<td>
	        <div class="btn-group">
	          <a class="btn btn-small" href="<?php echo base_url(); ?>data_riwayat_pangkat/detail/<?php echo $drj['id_riwayat_jabatan']; ?>"><i class="icon-ok-circle"></i> Lihat Detail</a>
	          <a class="btn btn-small dropdown-toggle" data-toggle="dropdown" href="#"><span class="caret"></span></a>
	          <ul class="dropdown-menu">
	            <li><a href="<?php echo base_url(); ?>data_riwayat_pangkat/edit/<?php echo $drj['id_riwayat_jabatan']; ?>"><i class="icon-pencil"></i> Edit Data</a></li>
	            <li><a href="<?php echo base_url(); ?>data_riwayat_pangkat/hapus/<?php echo $drj['id_riwayat_jabatan']; ?>" onClick="return confirm('Anda yakin..???');"><i class="icon-trash"></i> Hapus Data</a></li>
	          </ul>
	        </div><!-- /btn-group -->
		</td>
      </tr>
	 <?php
	 		$no++;
	 	}
	 ?>
    </tbody>
  </table>
  </div>
</section>

<section id="data-pendidikan">
  <div class="well">
	<div class="page-header">
    	<h1>Data Pendidikan</h1>
  	</div>
  	
  	<table class="table table-hover table-condensed">
    <thead>
      <tr>
        <th>No.</th>
        <th>Tingkat Pendidikan</th>
		<th>Jurusan</th>
        <th>Teknik/Non Teknik</th>
        <th>Sekolah</th>
		<th>Tanggal Lulus</th>
		<th>Aksi</th>
      </tr>
    </thead>
    <tbody>
	<?php
		$no=1;
		foreach($data_pendidikan->result_array() as $dpn)
		{
	?>
      <tr>
        <td><?php echo $no; ?></td>
        <td><?php echo $dpn['tingkat_pendidikan']; ?></td>
        <td><?php echo $dpn['jurusan']; ?></td>
        <td><?php echo $dpn['teknik_non_teknik']; ?></td>
        <td><?php echo $dpn['sekolah']; ?></td>
        <td><?php echo $dpn['tanggal_lulus']; ?></td>
		<td>
	        <div class="btn-group">
	          <a class="btn btn-small" href="<?php echo base_url(); ?>data_riwayat_pangkat/detail/<?php echo $dpn['id_pendidikan']; ?>"><i class="icon-ok-circle"></i> Lihat Detail</a>
	          <a class="btn btn-small dropdown-toggle" data-toggle="dropdown" href="#"><span class="caret"></span></a>
	          <ul class="dropdown-menu">
	            <li><a href="<?php echo base_url(); ?>data_riwayat_pangkat/edit/<?php echo $dpn['id_pendidikan']; ?>"><i class="icon-pencil"></i> Edit Data</a></li>
	            <li><a href="<?php echo base_url(); ?>data_riwayat_pangkat/hapus/<?php echo $dpn['id_pendidikan']; ?>" onClick="return confirm('Anda yakin..???');"><i class="icon-trash"></i> Hapus Data</a></li>
	          </ul>
	        </div><!-- /btn-group -->
		</td>
      </tr>
	 <?php
	 		$no++;
	 	}
	 ?>
    </tbody>
  </table>
  </div>
</section>

<section id="data-pelatihan">
  <div class="well">
	<div class="page-header">
    	<h1>Data Pelatihan</h1>
  	</div>
  	
  	<table class="table table-hover table-condensed">
    <thead>
      <tr>
        <th>No.</th>
        <th>Nama Pelatihan</th>
		<th>Lokasi</th>
        <th>Tanggal Sertifikat</th>
        <th>Jam Pelatihan</th>
		<th>Negara</th>
		<th>Aksi</th>
      </tr>
    </thead>
    <tbody>
	<?php
		$no=1;
		foreach($data_pelatihan->result_array() as $dpl)
		{
	?>
      <tr>
        <td><?php echo $no; ?></td>
        <td><?php echo $dpl['nama_pelatihan']; ?></td>
        <td><?php echo $dpl['lokasi']; ?></td>
        <td><?php echo $dpl['tanggal_sertifikat']; ?></td>
        <td><?php echo $dpl['jam_pelatihan']; ?></td>
        <td><?php echo $dpl['negara']; ?></td>
		<td>
	        <div class="btn-group">
	          <a class="btn btn-small" href="<?php echo base_url(); ?>data_pendidikan/detail/<?php echo $dpl['id_pelatihan']; ?>"><i class="icon-ok-circle"></i> Lihat Detail</a>
	          <a class="btn btn-small dropdown-toggle" data-toggle="dropdown" href="#"><span class="caret"></span></a>
	          <ul class="dropdown-menu">
	            <li><a href="<?php echo base_url(); ?>data_pendidikan/edit/<?php echo $dpl['id_pelatihan']; ?>"><i class="icon-pencil"></i> Edit Data</a></li>
	            <li><a href="<?php echo base_url(); ?>data_pendidikan/hapus/<?php echo $dpl['id_pelatihan']; ?>" onClick="return confirm('Anda yakin..???');"><i class="icon-trash"></i> Hapus Data</a></li>
	          </ul>
	        </div><!-- /btn-group -->
		</td>
      </tr>
	 <?php
	 		$no++;
	 	}
	 ?>
    </tbody>
  </table>
  </div>
</section>

<section id="data-penghargaan">
  <div class="well">
	<div class="page-header">
    	<h1>Data Penghargaan</h1>
  	</div>
  	
  	<table class="table table-hover table-condensed">
    <thead>
      <tr>
        <th>No.</th>
        <th>Nama Penghargaan</th>
		<th>Nomor SK</th>
        <th>Tanggal SK</th>
		<th>Aksi</th>
      </tr>
    </thead>
    <tbody>
	<?php
		$no=1;
		foreach($data_penghargaan->result_array() as $drj)
		{
	?>
      <tr>
        <td><?php echo $no; ?></td>
        <td><?php echo $drj['nama_penghargaan']; ?></td>
        <td><?php echo $drj['nomor_sk']; ?></td>
        <td><?php echo $drj['tanggal_sk']; ?></td>
		<td>
	        <div class="btn-group">
	          <a class="btn btn-small" href="<?php echo base_url(); ?>data_penghargaan/detail/<?php echo $drj['id_penghargaan']; ?>"><i class="icon-ok-circle"></i> Lihat Detail</a>
	          <a class="btn btn-small dropdown-toggle" data-toggle="dropdown" href="#"><span class="caret"></span></a>
	          <ul class="dropdown-menu">
	            <li><a href="<?php echo base_url(); ?>data_penghargaan/edit/<?php echo $drj['id_penghargaan']; ?>"><i class="icon-pencil"></i> Edit Data</a></li>
	            <li><a href="<?php echo base_url(); ?>data_penghargaan/hapus/<?php echo $drj['id_penghargaan']; ?>" onClick="return confirm('Anda yakin..???');"><i class="icon-trash"></i> Hapus Data</a></li>
	          </ul>
	        </div><!-- /btn-group -->
		</td>
      </tr>
	 <?php
	 		$no++;
	 	}
	 ?>
    </tbody>
  </table>
  </div>
</section>

<section id="data-seminar">
  <div class="well">
	<div class="page-header">
    	<h1>Data Seminar</h1>
  	</div>
  	
  	<table class="table table-hover table-condensed">
    <thead>
      <tr>
        <th>No.</th>
        <th>Uraian</th>
		<th>Lokasi</th>
        <th>Tanggal</th>
		<th>Aksi</th>
      </tr>
    </thead>
    <tbody>
	<?php
		$no=1;
		foreach($data_seminar->result_array() as $ds)
		{
	?>
      <tr>
        <td><?php echo $no; ?></td>
        <td><?php echo $ds['uraian']; ?></td>
        <td><?php echo $ds['lokasi']; ?></td>
        <td><?php echo $ds['tanggal']; ?></td>
		<td>
	        <div class="btn-group">
	          <a class="btn btn-small" href="<?php echo base_url(); ?>data_seminar/detail/<?php echo $ds['id_seminar']; ?>"><i class="icon-ok-circle"></i> Lihat Detail</a>
	          <a class="btn btn-small dropdown-toggle" data-toggle="dropdown" href="#"><span class="caret"></span></a>
	          <ul class="dropdown-menu">
	            <li><a href="<?php echo base_url(); ?>data_seminar/edit/<?php echo $ds['id_seminar']; ?>"><i class="icon-pencil"></i> Edit Data</a></li>
	            <li><a href="<?php echo base_url(); ?>data_seminar/hapus/<?php echo $ds['id_seminar']; ?>" onClick="return confirm('Anda yakin..???');"><i class="icon-trash"></i> Hapus Data</a></li>
	          </ul>
	        </div><!-- /btn-group -->
		</td>
      </tr>
	 <?php
	 		$no++;
	 	}
	 ?>
    </tbody>
  </table>
  </div>
</section>

<section id="data-organisasi">
  <div class="well">
	<div class="page-header">
    	<h1>Data Organisasi</h1>
  	</div>
  	
  	<table class="table table-hover table-condensed">
    <thead>
      <tr>
        <th>No.</th>
        <th>Uraian</th>
		<th>Lokasi</th>
        <th>Tanggal</th>
		<th>Aksi</th>
      </tr>
    </thead>
    <tbody>
	<?php
		$no=1;
		foreach($data_organisasi->result_array() as $do)
		{
	?>
      <tr>
        <td><?php echo $no; ?></td>
        <td><?php echo $do['uraian']; ?></td>
        <td><?php echo $do['lokasi']; ?></td>
        <td><?php echo $do['tanggal']; ?></td>
		<td>
	        <div class="btn-group">
	          <a class="btn btn-small" href="<?php echo base_url(); ?>data_organisasi/detail/<?php echo $do['id_organisasi']; ?>"><i class="icon-ok-circle"></i> Lihat Detail</a>
	          <a class="btn btn-small dropdown-toggle" data-toggle="dropdown" href="#"><span class="caret"></span></a>
	          <ul class="dropdown-menu">
	            <li><a href="<?php echo base_url(); ?>data_riwayat_pangkat/edit/<?php echo $do['id_organisasi']; ?>"><i class="icon-pencil"></i> Edit Data</a></li>
	            <li><a href="<?php echo base_url(); ?>data_riwayat_pangkat/hapus/<?php echo $do['id_organisasi']; ?>" onClick="return confirm('Anda yakin..???');"><i class="icon-trash"></i> Hapus Data</a></li>
	          </ul>
	        </div><!-- /btn-group -->
		</td>
      </tr>
	 <?php
	 		$no++;
	 	}
	 ?>
    </tbody>
  </table>
  </div>
</section>

<section id="data-gaji">
  <div class="well">
	<div class="page-header">
    	<h1>Data Gaji Pokok</h1>
  	</div>
  	
  	<table class="table table-hover table-condensed">
    <thead>
      <tr>
        <th>No.</th>
        <th>Golongan</th>
		<th>Nomor SK</th>
        <th>Tanggal SK</th>
        <th>Gaji Pokok</th>
		<th>Tanggal Mulai</th>
		<th>Tanggal Selesai</th>
		<th>Aksi</th>
      </tr>
    </thead>
    <tbody>
	<?php
		$no=1;
		foreach($data_gaji_pokok->result_array() as $dgp)
		{
	?>
      <tr>
        <td><?php echo $no; ?></td>
        <td><?php echo $dgp['golongan']; ?></td>
        <td><?php echo $dgp['nomor_sk']; ?></td>
        <td><?php echo $dgp['tanggal_sk']; ?></td>
        <td><?php echo "Rp. ".number_format($dgp['gaji_pokok'],2,',','.'); ?></td>
        <td><?php echo $dgp['tanggal_mulai']; ?></td>
        <td><?php echo $dgp['tanggal_selesai']; ?></td>
		<td>
	        <div class="btn-group">
	          <a class="btn btn-small" href="<?php echo base_url(); ?>data_gaji/detail/<?php echo $dgp['id_gaji_pokok']; ?>"><i class="icon-ok-circle"></i> Lihat Detail</a>
	          <a class="btn btn-small dropdown-toggle" data-toggle="dropdown" href="#"><span class="caret"></span></a>
	          <ul class="dropdown-menu">
	            <li><a href="<?php echo base_url(); ?>data_gaji/edit/<?php echo $dgp['id_gaji_pokok']; ?>"><i class="icon-pencil"></i> Edit Data</a></li>
	            <li><a href="<?php echo base_url(); ?>data_gaji/hapus/<?php echo $dgp['id_gaji_pokok']; ?>" onClick="return confirm('Anda yakin..???');"><i class="icon-trash"></i> Hapus Data</a></li>
	          </ul>
	        </div><!-- /btn-group -->
		</td>
      </tr>
	 <?php
	 		$no++;
	 	}
	 ?>
    </tbody>
  </table>
  </div>
</section>

<section id="data-hukuman">
  <div class="well">
	<div class="page-header">
    	<h1>Data Hukuman</h1>
  	</div>
  	
  	<table class="table table-hover table-condensed">
    <thead>
      <tr>
        <th>No.</th>
        <th>Nama Hukuman</th>
		<th>Nomor SK</th>
        <th>Tanggal SK</th>
        <th>Tanggal Mulai</th>
		<th>Tanggal Selesai</th>
		<th>Masa Berlaku</th>
		<th>Aksi</th>
      </tr>
    </thead>
    <tbody>
	<?php
		$no=1;
		foreach($data_hukuman->result_array() as $dh)
		{
	?>
      <tr>
        <td><?php echo $no; ?></td>
        <td><?php echo $dh['nama_hukuman']; ?></td>
        <td><?php echo $dh['nomor_sk']; ?></td>
        <td><?php echo $dh['tanggal_sk']; ?></td>
        <td><?php echo $dh['tanggal_mulai']; ?></td>
        <td><?php echo $dh['tanggal_selesai']; ?></td>
        <td><?php echo $dh['masa_berlaku']; ?></td>
		<td>
	        <div class="btn-group">
	          <a class="btn btn-small" href="<?php echo base_url(); ?>data_hukuman/detail/<?php echo $dh['id_hukuman']; ?>"><i class="icon-ok-circle"></i> Lihat Detail</a>
	          <a class="btn btn-small dropdown-toggle" data-toggle="dropdown" href="#"><span class="caret"></span></a>
	          <ul class="dropdown-menu">
	            <li><a href="<?php echo base_url(); ?>data_hukuman/edit/<?php echo $dh['id_hukuman']; ?>"><i class="icon-pencil"></i> Edit Data</a></li>
	            <li><a href="<?php echo base_url(); ?>data_hukuman/hapus/<?php echo $dh['id_hukuman']; ?>" onClick="return confirm('Anda yakin..???');"><i class="icon-trash"></i> Hapus Data</a></li>
	          </ul>
	        </div><!-- /btn-group -->
		</td>
      </tr>
	 <?php
	 		$no++;
	 	}
	 ?>
    </tbody>
  </table>
  </div>
</section>

<section id="data-dp3">
  <div class="well">
	<div class="page-header">
    	<h1>Data Penilaian Atasan</h1>
  	</div>
  	
  	<table class="table table-hover table-condensed">
    <thead>
      <tr>
        <th>No.</th>
        <th>Tahun</th>
		<th>Rata-Rata</th>
		<th>Atasan</th>
        <th>Penilai</th>
        <th>Mengetahui</th>
		<th>Aksi</th>
      </tr>
    </thead>
    <tbody>
	<?php
		$no=1;
		foreach($data_dp3->result_array() as $dp3)
		{
	?>
      <tr>
        <td><?php echo $no; ?></td>
        <td><?php echo $dp3['tahun']; ?></td>
        <td><?php echo $dp3['rata_rata']; ?></td>
        <td><?php echo $dp3['atasan']; ?></td>
        <td><?php echo $dp3['penilai']; ?></td>
        <td><?php echo $dp3['mengetahui']; ?></td>
		<td>
	        <div class="btn-group">
	          <a class="btn btn-small" href="<?php echo base_url(); ?>data_dp3/detail/<?php echo $dp3['id_dp3']; ?>"><i class="icon-ok-circle"></i> Lihat Detail</a>
	          <a class="btn btn-small dropdown-toggle" data-toggle="dropdown" href="#"><span class="caret"></span></a>
	          <ul class="dropdown-menu">
	            <li><a href="<?php echo base_url(); ?>data_dp3/edit/<?php echo $dp3['id_dp3']; ?>"><i class="icon-pencil"></i> Edit Data</a></li>
	            <li><a href="<?php echo base_url(); ?>data_dp3/hapus/<?php echo $dp3['id_dp3']; ?>" onClick="return confirm('Anda yakin..???');"><i class="icon-trash"></i> Hapus Data</a></li>
	          </ul>
	        </div><!-- /btn-group -->
		</td>
      </tr>
	 <?php
	 		$no++;
	 	}
	 ?>
    </tbody>
  </table>
  </div>
</section>

    </div>
</div>
<?php include "application/views/dashboard_admin/home/footer.php" ?>	