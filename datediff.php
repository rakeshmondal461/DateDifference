	$date1=date('Y-m-d');
$diff=abs(strtotime($date1)-strtotime($landownerdob));
$years=floor($diff/(365*60*60*24));
$months=floor(($diff - $years * 365*60*60*24)/(30*60*60*24));
$days=floor($diff/(60*60*24));