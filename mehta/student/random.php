<!DOCTYPE html>
<html>
  
<head>
    <!-- Import bootstrap cdn -->
    <link rel="stylesheet" href=
"https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
        integrity=
"sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2"
        crossorigin="anonymous">
  
    <!-- Import jquery cdn -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity=
"sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
        crossorigin="anonymous">
    </script>
      
    <script src=
"https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"
        integrity=
"sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx"
        crossorigin="anonymous">
    </script>
</head>
  
<body>

<?php 
$arrDup = Array ('blah' => 'aaa-aaa' , 'SKU' => 'aaa-aaa' , '1' => '12/1/1' , 'date' => '12/1/1' , '2' => '1.15' , 'cost' => '1.15' );

foreach($arrDup as $k =>  $v){
  
  if(!( isset ($hold[$v])))
      $hold[$v]=1;
  else
      unset($arrDup[$k]);
}
$today = date("F j, Y, g:i a"); $today = date("Y-m-d H:i:s");                   // 2001-03-10 17:16:18 (the MySQL DATETIME format)
// March 10, 2001, 5:16 pm
echo $today;
echo date('Y-m-d h:i:s', strtotime(date()));
print_r( $arrDup);
     ?>

</body>
  
</html>