            <div class="row">
                <div class="col-lg-12">
					<h3 class="page-header"><strong>Input Data Absensi Tanggal : <?php 
							if($_GET['tanggal']<10){ $rw="0$_GET[tanggal]";}else{ $rw="$_GET[tanggal]"; }
							if($_GET['bulan']<10){ $rc="0$_GET[bulan]";}else{ $rc="$_GET[bulan]";}
							$dt=$rw."-".$rc."-".$_GET['tahun']; 
							echo $dt;
							?> </strong></h3>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Data Siswa <?php 
							$sqlj=mysql_query("select * from kelas where idk='$_SESSION[idk]'");
							$rsj=mysql_fetch_array($sqlj);
							
							echo "Kelas $rsj[nama]";
							$klas=$_GET['kls'];
$rg=10;
while($rg>0){							
if($_GET['jam']==$rg){
							 ?>

                             <a href="media.php?module=input_absen&jam=<?php echo $rg ?>&kls=<?php echo $_GET['kls'] ?>&tanggal=<?php echo $_GET['tanggal'] ?>&bulan=<?php echo $_GET['bulan'] ?>&tahun=<?php echo $_GET['tahun'] ?>" class="navbar-right text-danger">&nbsp; Jam ke <?php echo $rg ?> &nbsp;</a>
<?php }else{ ?>
                             <a href="media.php?module=input_absen&jam=<?php echo $rg ?>&kls=<?php echo $_GET['kls'] ?>&tanggal=<?php echo $_GET['tanggal'] ?>&bulan=<?php echo $_GET['bulan'] ?>&tahun=<?php echo $_GET['tahun'] ?>" class="navbar-right">&nbsp; Jam ke <?php echo $rg ?> &nbsp;</a>

<?php } ?>

<?php $rg--; } ?>
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                           <form method="post" role="form" action="././module/simpan.php?act=input_absen&jam=<?php echo $_GET['jam'] ?>&klas=<?php echo $klas ?>">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th class="text-center">NIS</th>
                                            <th class="text-center">Nama</th>
                                            <th class="text-center">Jenis Kelamin</th>
                                            <th class="text-center">Alamat</th>
                                            <th class="text-center">No Telepon</th>
                                            <th class="text-center">Keterangan</th>

                                        </tr>
                                    </thead>
                                    <tbody>
<?php
$no=1;
$tg=date("d-m-Y");
	$sql=mysql_query("select * from siswa where idk='$_GET[kls]'");
	while($rs=mysql_fetch_array($sql)){
	$sqla=mysql_query("select * from absen where ids='$rs[ids]' and tgl='$dt' and jam='$_GET[jam]'");
	$rsa=mysql_fetch_array($sqla);
	$conk=mysql_num_rows($sqla);
	$sqlw=mysql_query("select * from kelas where idk='$rs[idk]'");
	$rsw=mysql_fetch_array($sqlw);
	$sqlb=mysql_query("select * from sekolah where id='$rsw[id]'");
	$rsb=mysql_fetch_array($sqlb);

?>                                        <tr class="odd gradeX">
                                            <td><?php echo"$rs[nis]";  ?></td>
                                            <td><?php echo"$rs[nama]";  ?></td>
<?php
if($rs['jk']=="L"){
?>
                                            <td class="text-center">Laki - Laki</td>
<?php
}else{
?>
                                            <td class="text-center" >Perempuan</td>
<?php
}
?>

                                            <td><?php echo"$rs[alamat]";  ?></td>
                                            <td><?php echo"$rs[tlp]";  ?></td>
                                            <td class="text-center">
                                                                                    <div class="form-group">

<?php  
if($conk==0){
?>                                            
                                            <label class="radio-inline">
                                                <input type="radio" name="<?php echo $rs['ids'] ?>" value="A"  >A
                                            </label>
                                            <label class="radio-inline">
                                                <input type="radio" name="<?php echo $rs['ids'] ?>" value="I">I
                                            </label>
                                            <label class="radio-inline">
                                                <input type="radio" name="<?php echo $rs['ids'] ?>" value="S">S
                                            </label>

                                            <label class="radio-inline">
                                                <input type="radio" name="<?php echo $rs['ids'] ?>" value="M" >M
                                            </label>

                                            <label class="radio-inline">
                                                <input type="radio" name="<?php echo $rs['ids'] ?>" value="N" checked>N
                                            </label>


<?php } ?>

<?php  
if($rsa['ket']=="A"){
?>                                            
                                            <label class="radio-inline">
                                                <input type="radio" name="<?php echo $rs['ids'] ?>" value="A" checked >A
                                            </label>
                                            <label class="radio-inline">
                                                <input type="radio" name="<?php echo $rs['ids'] ?>" value="I">I
                                            </label>
                                            <label class="radio-inline">
                                                <input type="radio" name="<?php echo $rs['ids'] ?>" value="S">S
                                            </label>

                                            <label class="radio-inline">
                                                <input type="radio" name="<?php echo $rs['ids'] ?>" value="M" >M
                                            </label>

                                            <label class="radio-inline">
                                                <input type="radio" name="<?php echo $rs['ids'] ?>" value="N" >N
                                            </label>


<?php } ?>
<?php
if($rsa['ket']=="I"){
?>                                            
                                            <label class="radio-inline">
                                                <input type="radio" name="<?php echo $rs['ids'] ?>" value="A"  >A
                                            </label>
                                            <label class="radio-inline">
                                                <input type="radio" name="<?php echo $rs['ids'] ?>" value="I" checked>I
                                            </label>
                                            <label class="radio-inline">
                                                <input type="radio" name="<?php echo $rs['ids'] ?>" value="S">S
                                            </label>

                                            <label class="radio-inline">
                                                <input type="radio" name="<?php echo $rs['ids'] ?>" value="M" >M
                                            </label>

                                            <label class="radio-inline">
                                                <input type="radio" name="<?php echo $rs['ids'] ?>" value="N" >N
                                            </label>


<?php } ?>
<?php
if($rsa['ket']=="S"){
?>                                            
                                            <label class="radio-inline">
                                                <input type="radio" name="<?php echo $rs['ids'] ?>" value="A"  >A
                                            </label>
                                            <label class="radio-inline">
                                                <input type="radio" name="<?php echo $rs['ids'] ?>" value="I" >I
                                            </label>
                                            <label class="radio-inline">
                                                <input type="radio" name="<?php echo $rs['ids'] ?>" value="S" checked>S
                                            </label>

                                            <label class="radio-inline">
                                                <input type="radio" name="<?php echo $rs['ids'] ?>" value="M" >M
                                            </label>

                                            <label class="radio-inline">
                                                <input type="radio" name="<?php echo $rs['ids'] ?>" value="N" >N
                                            </label>


<?php } ?>
<?php
if($rsa['ket']=="M"){
?>                                            
                                            <label class="radio-inline">
                                                <input type="radio" name="<?php echo $rs['ids'] ?>" value="A"  >A
                                            </label>
                                            <label class="radio-inline">
                                                <input type="radio" name="<?php echo $rs['ids'] ?>" value="I" >I
                                            </label>
                                            <label class="radio-inline">
                                                <input type="radio" name="<?php echo $rs['ids'] ?>" value="S" >S
                                            </label>

                                            <label class="radio-inline">
                                                <input type="radio" name="<?php echo $rs['ids'] ?>" value="M" checked>M
                                            </label>

                                            <label class="radio-inline">
                                                <input type="radio" name="<?php echo $rs['ids'] ?>" value="N" >N
                                            </label>


<?php } ?>
<?php
if($rsa['ket']=="N"){
?>                                            
                                            <label class="radio-inline">
                                                <input type="radio" name="<?php echo $rs['ids'] ?>" value="A"  >A
                                            </label>
                                            <label class="radio-inline">
                                                <input type="radio" name="<?php echo $rs['ids'] ?>" value="I" >I
                                            </label>
                                            <label class="radio-inline">
                                                <input type="radio" name="<?php echo $rs['ids'] ?>" value="S" >S
                                            </label>

                                            <label class="radio-inline">
                                                <input type="radio" name="<?php echo $rs['ids'] ?>" value="M" >M
                                            </label>

                                            <label class="radio-inline">
                                                <input type="radio" name="<?php echo $rs['ids'] ?>" value="N" checked >N
                                            </label>


<?php } ?>


                                        </div>

                                            </td>

                                        </tr>
<?php
}
?>
                                    </tbody>
                                </table>
                                        <button type="submit" class="btn btn-success">SImpan Data</button>

</form>
                            </div>
                            <!-- /.table-responsive -->
<br>
                            <div class="well">
                                <h4>Keterangan Absensi</h4>
                                <p>A = Tidak Masuk Tanpa Keterangan</p>
                                <p>I = Tidak Masuk Ada Surat Ijin Atau Pemberitahuan</p>
                                <p>S = Tidak Masuk Ada Surat Dokter Atau Pemberitahuan</p>
                                <p>M = Hadir</p>
                                <p>N = Belum Ada Keterangan Absensi</p>

                            </div>
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
