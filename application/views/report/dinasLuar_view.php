
			<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
			<h1 class="nav-link" style="color:blue;"><?php echo $this->session->flashdata('message');?></h1>
			<h1 class="h2">Report DinasLuar Pegawai</h1>
			</div>
			
			<?php
			echo form_open('KelolaDinasLuar/simpanDinasLuar');//echo"<pre>";print_r($pegawai);echo"</pre>";die();
			?>
			<table class="table table-striped table-sm">
			<tr>
				<td width="130">Nama Pegawai</td>
				<td>
				<div class="col-sm-4"">
				<input type="hidden" name="created_by" class="form-control" value="<?php echo $detailpegawai['nama']?>">
				<input type="hidden" name="counter" class="form-control" value=1>
				<select name="pegawai">
				<?php
				foreach ($pegawai as $r)
				{
					echo "<option value='".$r->id_pegawai."'>".$r->nama."</option>";
				}
				?>
				</select>
				</div>
				</td>
			</tr>
			<tr>
				<td width="130">Kehadiran</td>
				<td>
				<div class="col-sm-4"">
					<input type="hidden" name="kehadiran" class="form-control" value="10">
					<input type="text" name="dinasluar" class="form-control" disabled value="DinasLuar">
				</div>
				</td>
			</tr>
			<tr>
				<td width="130">Tanggal Mulai Dinas Luar</td>
				<td>
				<div class="col-sm-4"">
					<input type="date" min=<?php echo date('Y-m-d'); ?> name="start_time" class="form-control">
				</div>
				</td>
			</tr>
			<tr>
				<td width="130">Tanggal Selesai Dinas Luar</td>
				<td>
				<div class="col-sm-4"">
					<input type="date" min=<?php echo date('Y-m-d'); ?> name="end_time" class="form-control">
				</div>
				</td>
			</tr>
			<tr>
				<td width="130">Status</td>
				<td>
				<div class="col-sm-4"">
				<select name="status">
					<option value='Setuju'>Setuju</option>
					<option value='TidakSetuju'>TidakSetuju</option>
					<option value='Menunggu'>Menunggu</option>
				</select>
				</div>
				</td>
			</tr>
			<tr>
				<td colspan="2"><button type="submit" class="btn btn-primary btn-sm" name="submit">Simpan</button>
				<?php echo anchor('KelolaDinasLuar/showMasterDinasLuar','Kembali',array('class'=>'btn btn-primary btn-sm'))?>
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
					<th>Tanggal Mulai DinasLuar</th>
					<th>Tanggal Selesai DinasLuar</th>
					<th>Pagu</th>
					<th>Diinput Oleh</th>
					<th>Status</th>
					<th colspan='5' style='text-align:center'>Aksi</th>
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
						<td>$r->end_time</td>
						<td>$r->kebijakan</td>
						<td>$r->created_kehadiranPegawai</td>
						<td>$r->status</td>";
					if($r->id_jabatan==1 OR $r->id_jabatan==2 OR $r->id_jabatan==3 OR $r->id_jabatan==5){
						echo "
						<td>".anchor('KelolaDinasLuar/upload_dinasLuar','Upload Dokumen')."</td>
						<td>".anchor('KelolaDinasLuar/editDinasLuarSetuju/'.$r->id_kehadiranPegawai,'Setuju')."</td>
						<td>".anchor('KelolaDinasLuar/editDinasLuarTidakSetuju/'.$r->id_kehadiranPegawai,'TidakSetuju')."</td>
						<td>".anchor('KelolaDinasLuar/hapusDinasLuar/'.$r->id_kehadiranPegawai,'Hapus')."</td>
						<td></td></tr>
						";
					}else{
						echo"
						<td>".anchor('KelolaDinasLuar/upload_dinasLuar','Upload Dokumen')."</td>
						<td>".anchor('KelolaDinasLuar/editDinasLuarSetuju/'.$r->id_kehadiranPegawai,'Setuju')."</td>
						<td>".anchor('KelolaDinasLuar/editDinasLuarTidakSetuju/'.$r->id_kehadiranPegawai,'TidakSetuju')."</td>
						<td>".anchor('KelolaDinasLuar/editDinasLuarMenunggu/'.$r->id_kehadiranPegawai,'Menunggu')."</td>
						<td>".anchor('KelolaDinasLuar/hapusDinasLuar/'.$r->id_kehadiranPegawai,'Hapus')."</td></tr>
						";
					}
					$no++;
				}
				?>
			</tbody>
			</table>