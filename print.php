<table border="1">
                                        <tr>

<?php
$year2="2014";
	$yu=1;
	$k=1;
	$tp=12;
$jml = cal_days_in_month(CAL_GREGORIAN, $k, $year2);

	while($yu<=$jml){
?>

                                          <td>n</td>


  

<?php
$yu++;
}
?>
                                      </tr>

<?php
$year2="2014";
	$yu=1;
	$k=1;
	$tp=12;
$jml = cal_days_in_month(CAL_GREGORIAN, $k, $year2);

	while($k<=$tp){
?>

<tr>
<td>m</td>


<?php
	$a=1;
	$ta=12;

	while($a<=$ta){
?>
<td>m</td>

<?php
$a++;
}
?>


</tr>
<?php
$k++;
}
?>

</table>

<a href="javascript:void(0);" onClick="printPage(printsection.innerHTML)" >Print</a>
