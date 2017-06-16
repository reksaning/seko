<?php                            
 					$sql=mysql_query("select * from guru where idg='$_GET[idg]'");
					$rs=mysql_fetch_array($sql);
?>

          <div class="row">
                <div class="col-lg-12">
					<h3 class="page-header"><strong>Data Guru : <?php echo "$rs[nama]"; ?></strong></h3>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Data Guru
                        </div>
                        <div class="panel-body">
                            <div class="row">

                                <div class="col-lg-6">
								<fieldset disabled>
                                        <div class="form-group">
                                            <label>NIP</label><br>
                                            <label><?php echo "$rs[nip]"; ?></label>

                                        </div>
                                        <div class="form-group">
                                            <label>Nama</label>
                                            <input class="form-control" placeholder="Nama" name="nama" value="<?php echo "$rs[nama]"; ?>">
                                        </div>
                                        <div class="form-group">
         
                                           <label>Jenis Kelamin</label>
        <?php if($rs['jk']=="L"){ ?>
                                            <div class="radio">
                                                <label>
                                                    <input type="radio" name="jk" value="L" 
                                                    checked>Laki - Laki
                                                </label>
                                            </div>
                                            <div class="radio">
                                                <label>
                                                    <input type="radio" name="jk" value="P">
                                                    Perempuan
                                                </label>
                                            </div>
                                        </div>
<?php } ?>
        <?php if($rs['jk']=="P"){ ?>
                                            <div class="radio">
                                                <label>
                                                    <input type="radio" name="jk" value="L" 
                                                    >Laki - Laki
                                                </label>
                                            </div>
                                            <div class="radio">
                                                <label>
                                                    <input type="radio" name="jk" value="P" checked>
                                                    Perempuan
                                                </label>
                                            </div>
                                        </div>
<?php } ?>

</div>

                                <div class="col-lg-6">

                                        
										 <div class="form-group">
                                            <label>Alamat</label>
                                            <textarea class="form-control" placeholder="Alamat" name="alamat" rows="3" disabled><?php echo "$rs[alamat]"; ?></textarea>
                                        </div>
                                        <div class="form-group">
                                            <label>Kelas</label>
                                            <select class="form-control" name="kelas" disabled>
  <?php 
 	$sqlc=mysql_query("select * from kelas");
	while($rsc=mysql_fetch_array($sqlc)){
	$sqla=mysql_query("select * from sekolah where id='$rsc[id]'");
	$rsa=mysql_fetch_array($sqla);
if($_SESSION['level']=="admin_guru"){
if($rsa['id']==$_SESSION['id']){

if($rs['idk']==$rsc['idk']){
	echo "<option value='$rsc[idk]' selected>$rsa[nama] | $rsc[nama]</option>";	
}else{
	echo "<option value='$rsc[idk]'>$rsa[nama] | $rsc[nama]</option>";	

}
}
}else{
if($rs['idk']==$rsc['idk']){
	echo "<option value='$rsc[idk]' selected>$rsa[nama] | $rsc[nama]</option>";	
}else{
	echo "<option value='$rsc[idk]'>$rsa[nama] | $rsc[nama]</option>";	

}
	
}
}?>
                                          </select>
                                        </div>
                                </div>
                                <!-- /.col-lg-6 (nested) -->
                                    </form>

                            </div>
                            <!-- /.row (nested) -->
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
