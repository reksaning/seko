<?php
$sql=mysql_query("select * from siswa where nis='$_SESSION[idu]'");
$rs=mysql_fetch_array($sql);
$ids=$rs['ids'];
$pecah = explode("-", $_GET['tahun']);
$year2=$pecah[0];
$year3=$pecah[1];

?>
            <div class="row">
                <div class="col-lg-12">
                    <h3 class="page-header"><strong> <?php echo "$year2 - $year3"; ?></h3>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Data Siswa <?php echo "$rs[nis] | $rs[nama] | ";
							$sqlj=mysql_query("select * from kelas where idk='$_SESSION[idk]'");
							$rsj=mysql_fetch_array($sqlj);
							echo "Kelas $rsj[nama]";					
?>
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="table-responsive">

                            <div class="well">
                                <h4 class="text-center"><?php echo"Tahun $year2";  ?></h4>
                            </div>

                                <table class="table table-striped table-bordered table-hover">
  
                                        
<?php

	$k=7;
	$tp=12;


?>


<?php while($k<=$tp){ 
	$tanggal = date("F", mktime(0, 0, 0, $k, 1, $year2));
?>
<tr>
<td colspan="11" class="text-center info"><?php echo $tanggal  ?></td>
</tr>
<tr>
<td class="success text-center" rowspan="2">Tanggal</td><td colspan="10" class="text-center success">Jam</td>
</tr>
<tr>
<?php 
$ko=1;
while($ko<=10){
?>
<td class="text-center warning"><?php echo $ko ?></td>

<?php $ko++;} ?>
</tr>

<?php
$jml = cal_days_in_month(CAL_GREGORIAN, $k, $year2);
	$yu=1;

 while($yu<=$jml){ 
$kol=1;
if($yu<10){
$dty="0$yu";
}else{
$dty="$yu";
}
if($k<10){
$blnn="0$k";
}else{
$blnn="$k";
}
$tanggul="$dty-$blnn-$year2";

if (date("w", mktime(0, 0, 0, $blnn, $dty, $year2)) == 0){
 ?>
<tr class="danger">

<?php }else{
echo "<tr>";
	
}?>
<td class="text-center"><?php echo $yu; ?></td>
<?php while($kol<=10){ 

$sqla=mysql_query("select * from absen where ids='$ids' and tgl='$tanggul' and jam='$kol'");
$rsa=mysql_fetch_array($sqla);

?>

<td class="text-center"><?php echo "$rsa[ket]"; ?></td>
<?php $kol++;} ?>
</tr>

<?php $yu++;} ?>
</tr>
<?php $k++;} ?>                                </table>

                            </div>







                            <div class="well">
                                <h4 class="text-center"><?php echo"Tahun $year3";  ?></h4>
                            </div>


                            <div class="table-responsive">


                                <table class="table table-striped table-bordered table-hover">
  
                                        
<?php

	$k=1;
	$tp=6;


?>


<?php while($k<=$tp){ 
	$tanggal = date("F", mktime(0, 0, 0, $k, 1, $year3));
?>
<tr>
<td colspan="11" class="text-center info"><?php echo $tanggal  ?></td>
</tr>
<tr>
<td class="success text-center" rowspan="2">Tanggal</td><td colspan="10" class="text-center success">Jam</td>
</tr>
<tr>
<?php 
$ko=1;
while($ko<=10){
?>
<td class="text-center warning"><?php echo $ko ?></td>

<?php $ko++;} ?>
</tr>

<?php
$jml = cal_days_in_month(CAL_GREGORIAN, $k, $year3);
	$yu=1;

 while($yu<=$jml){ 
$kol=1;
if($yu<10){
$dty="0$yu";
}else{
$dty="$yu";
}
if($k<10){
$blnn="0$k";
}else{
$blnn="$k";
}
$tanggul="$dty-$blnn-$year3";

if (date("w", mktime(0, 0, 0, $blnn, $dty, $year2)) == 0){
 ?>
<tr class="danger">

<?php }else{
echo "<tr>";
	
}?>
<td class="text-center"><?php echo $yu; ?></td>
<?php while($kol<=10){ 

$sqla=mysql_query("select * from absen where ids='$ids' and tgl='$tanggul' and jam='$kol'");
$rsa=mysql_fetch_array($sqla);

?>

<td class="text-center"><?php echo "$rsa[ket]"; ?></td>
<?php $kol++;} ?>
</tr>

<?php $yu++;} ?>
</tr>
<?php $k++;} ?>                                </table>

                            </div>




                            <!-- /.table-responsive -->
                            <div class="well">
                                <h4>Keterangan Absensi</h4>
                                <p>A = Tidak Masuk Tanpa Keterangan</p>
                                <p>I = Tidak Masuk Ada Surat Ijin Atau Pemberitahuan</p>
                                <p>S = Tidak Masuk Ada Surat Dokter Atau Pemberitahuan</p>
                                <p>M = Hadir</p>
                                <p>N = Belum Ada Keterangan Absensi</p>
                                <p class="text-info">Warna merah pada tabel menandakan hari minggu</p>

                            </div>
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
