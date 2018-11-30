
			<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
			<h1 class="nav-link" style="color:blue;"><?php echo $this->session->flashdata('message');?></h1>
			<h1 class="h2">Request Lembur Pegawai</h1>
			</div>
			
			<?php
			echo form_open('KelolaLemburUser/simpanLembur');//echo"<pre>";print_r($pegawai);echo"</pre>";die();
			?>
			<input type="hidden" name="counter" class="form-control" value=1>
			<table class="table table-striped table-sm">
			<tr>
				<td width="130">Nama Pegawai</td>
				<td>
				<div class="col-sm-4"">
				<!--select name="pegawai">
				<?php
				//foreach ($pegawai as $r)
				//{
				//	echo "<option value='".$r->id_pegawai."'>".$r->nama."</option>";
				//}
				?>
				</select-->
				<input type="hidden" name="pegawai" class="form-control" value="<?php echo $nama_pegawai['id']?>">
				<input type="hidden" name="created_by" class="form-control" value="<?php echo $nama_pegawai['nama']?>">
				<input type="text" name="nama_pegawai" class="form-control" disabled value="<?php echo $nama_pegawai['nama']?>">
				</div>
				</td>
			</tr>
			<tr>
				<td width="130">Kehadiran</td>
				<td>
				<div class="col-sm-4"">
					<input type="hidden" name="kehadiran" class="form-control" value="9">
					<input type="text" name="lembur" class="form-control" disabled value="Lembur">
				</div>
				</td>
			</tr>
			<tr>
				<td width="130">Tanggal Lembur</td>
				<td>
				<div class="col-sm-4"">
					<input type="hidden" name="end_time" class="form-control" value="<?php echo date('Y-m-d'); ?>">
					<input type="date" min=<?php echo date('Y-m-d'); ?> name="start_time" class="form-control">
				</div>
				</td>
			</tr>
			<tr>
				<td width="130">Status</td>
				<td>
				<div class="col-sm-4"">
				<input type="hidden" name="status" class="form-control" value="Menunggu">
				<input type="text" name="statuss" class="form-control" disabled value="Menunggu">
				</div>
				</td>
			</tr>
			<tr>
				<td colspan="2"><button type="submit" class="btn btn-primary btn-sm" name="submit">Simpan</button>
				<?php echo anchor('KelolaLemburUser/showMasterLembur','Kembali',array('class'=>'btn btn-primary btn-sm'))?>
				</td>
			</tr>
			</table>
			</form>
			
			<table class="table table-striped table-sm">
			<thead>
				<tr>
					<th>No</th>
					<th>Nama</th>
					<th>Jabatan</th>
					<th>Kehadiran</th>
					<th>Tanggal Lembur</th>
					<th>Pagu</th>
					<th>Diinput Oleh</th>
					<th>Status</th>
				</tr>
			</thead>
			<tbody>
				<?php
				$no=1;
				$total=0;//echo"<pre>";print_r($kehadiran_pegawai);echo"</pre>";die();
				foreach ($kehadiran_pegawai as $r)
				{
					echo "<tr>
						<td>$no</td>
						<td>$r->nama</td>
						<td>$r->nama_jabatan</td>
						<td>$r->nama_kehadiran</td>
						<td>$r->start_time</td>
						<td>$r->kebijakan</td>
						<td>$r->created_kehadiranPegawai</td>
						<td>$r->status</td></tr>";
					$no++;
				}
				?>
			</tbody>
			</table>