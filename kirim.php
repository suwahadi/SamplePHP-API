<?php
$apiKey = 'GXiDF3b1b831066a40e308e0af92h';
//$data = array("name" => "jquery", "icon" => NULL, "token" => "$apiKey");
//$data_string = json_encode($data);
//$ch = curl_init('http://127.0.0.1/api7/api.php/categories');          
//curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");             
//curl_setopt($ch, CURLOPT_POSTFIELDS, $data_string);            
//curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);                 
//curl_setopt($ch, CURLOPT_HTTPHEADER, array(                         
//    'Authorization: ' . $apiKey,
//    'Content-Type: application/json',
//    'Content-Length: ' . strlen($data_string))
//);

//$response = curl_exec($ch);
//print "hasil: " . $response ." ".$data_string;
//print "<br>";
//print $data['token'];
//curl_close ($ch);
?>


<form name="formkirim" method="post" action="http://127.0.0.1/api7/api.php/categories">

<div class="form-group">
<label>Name</label>
<span id="code-info" class="info"></span><br/>
<input type="text" name="name" id="name" class="form-control" value="codeigniter">
</div>

<div class="form-group">
<label>Icon</label> 
<span id="category-info" class="info"></span><br/>
<input type="text" name="icon" id="icon" class="form-control" value=" ">
</div>

<div class="form-group">
<label>Api Key</label> 
<span id="price-info" class="info"></span><br/>
<input type="text" name="apiKey" id="apiKey" class="form-control" value="<?php echo $apiKey ?>">
</div>

<br />

<div>
	<input type="submit" value="KIRIM"></input>
</div>