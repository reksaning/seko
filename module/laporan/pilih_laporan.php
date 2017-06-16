          <div class="row">
                <div class="col-lg-12">
					<h3 class="page-header"><strong>Laporan Data Absensi</strong></h3>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Pilih Tahun
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                    <form method="get" role="form" action="././media.php?module=laporan">
<input type="hidden" name="module" value="laporan">


                                <div class="col-lg-4">
                                        
               
                                        <div class="form-group">
                                            <label>Tahun</label>
                                            <select class="form-control" name="tahun">
<?php 
$ht=2010;
while($ht<=2050){
	$to=$ht+1;
if(date("m")>=7){
	$e=$ht;
}else{
	$e=$to;	
}
if(date("Y")==$e){
	echo "<option selected>$ht-$to</option>";	
}else{
	echo "<option>$ht-$to</option>";	
	
}
$ht++;
}?>
                                            </select>
                                        </div>

                                        <button type="submit" class="btn btn-info">Submit Button</button>
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
            
