<pre>$arrayName = [['id'=>1,
'price'=>21
],
['id'=>2,
'price'=>311
],
['id'=>3,
'price'=>213
],
['id'=>4,
'price'=>121
],
['id'=>5,
'price'=>11
]
];
</pre>
<form method="POST" action="">
	<input type="number" name="threshold" placeholder="Put Threshold Price" required="">
	<input type="submit" name="thresholdbtn" >
</form>


<?php
$arrayName = [

['id'=>1,
'price'=>21
],
['id'=>2,
'price'=>311
],
['id'=>3,
'price'=>213
],
['id'=>4,
'price'=>121
],
['id'=>5,
'price'=>11
]
];

function greater_than_threshold($arr,$threshold){
	$data=array();
	foreach($arr as $value){
		if ($value['price']>$threshold) {
			// code...
			$data[]=$value;
		}
	}
		return $data;
}

function sum_of_filtered_data($list){
	$sum=0;

	foreach($list as $l){
		$sum=$sum+$l['price'];
	}
	return $sum;
}

if (isset($_POST['threshold'])) {
	// code...
$threshold=$_POST['threshold'];  //Should be get from users
$val_list=greater_than_threshold($arrayName,$threshold);
echo "List of Value Greater than $threshold <pre>";
var_dump($val_list);
echo "</pre";

$sumval=sum_of_filtered_data($val_list);
echo "<br> Total Sum= ".$sumval;
}
?>