<?php 
if(isset($_POST['submit'])){
  
    $to = $_POST['email'];// this is your Email address
    $from = "it@sevagroup.co.in"; // this is the sender's Email address
    // $admin="seva.ngp.srv1@marutidealers.com";
    // $admin="mayuri.hoh@gmail.com";
    $full_name = $_POST['full_name'];
    $phone_no = $_POST['phone_no'];
    $city = $_POST['city'];
    $area = $_POST['area'];
    $date = $_POST['date'];

    $model = $_POST['model'];
    // $radio_stacked = $_POST['radio-stacked'];
    $reg_no = $_POST['reg_no'];
    // $service_cost = $_POST['service_cost'];    
    $service = $_POST['service'];



if ($city == 'Nashik' AND $area == 'Ambad')
{
    $admin = "sevanexa.nsk.wm1@marutidealers.com";
        // $admin="mayuri.hoh@gmail.com";
}else{
    $admin = "seva.nnd.wm1@marutidealers.com";
}




     	$s = ucfirst($reg_no);
        $bar = ucwords(strtolower($s));
        $car = preg_replace('/\s+/', '', $bar);

        $n = ucfirst($full_name);
        $na = ucwords(strtolower($n));
        $name = preg_replace('/\s+/', '', $na);
        $new_date =  date('d-m-Y', strtotime($service_date));
        $url="http://www.smsjust.com/sms/user/urlsmstemp.php?username=sevanashik&pass=3701@seva&senderid=SEVAgp&dest_mobileno=91".$phone_no."&tempid=78809&F1=".$name."&F2=".$car."&F3=".$city."&F4=".$new_date."&response=Y";

        $ch = curl_init($url);
        curl_setopt( $ch,CURLOPT_RETURNTRANSFER, true );
        curl_setopt( $ch, CURLOPT_FOLLOWLOCATION, 1);
        curl_setopt( $ch,CURLOPT_SSL_VERIFYPEER, false );
        $result = curl_exec($ch );
   
        if(curl_errno($ch))
        {
        echo 'error:' . curl_error($ch);
        }

        curl_close( $ch );




    if($city == 'Nashik'){
        $admin="sevanexa.nsk.wm1@marutidealers.com";
        // $admin="mayuri.hoh@gmail.com";
    }else{
        $admin="sevanexa.nnd.wm1@marutidealers.com";
        // $admin="mayulondhe16@gmail.com";
    }

    $subject = "Seva IT Support";
    $subject2 = "Enquiry For Service";
    $message = "Dear ".$full_name.","."\r\n\r\n"."Thanks for connecting with Seva group our executive will get back to you soon"."\r\n\r\n"."Thanks"."\r\n"."Seva";
    //   $message2 = "Hello Team,  Below are the details of the person requested to schedule Car servicing please call and confirm the appointment"
    //   ."\r\n\r\n"."Name : " .$full_name
    //   ."\r\n"."Phone no : ". $phone_no
    //   ."\r\n"."City : ".$city
    //   ."\r\n"."Area : ".$area
    //   ."\r\n" . "Car pickup : " .$radio_stacked
    //   ."\r\n"."Registration No : ".$reg_no
    //   ."\r\n"."Customer message : ".$client_message."\r\n";

    $headers = "From:" . $from;
    $headers2 = "MIME-Version: 1.0\r\n";
    $headers2 .= "Content-Type: text/html; charset=ISO-8859-1\r\n";
    $headers2 .= "From:" . $from. "\r\n" .
    "CC: it@sevagroup.co.in". "\r\n" .
    'X-Mailer: PHP/' . phpversion();
    
$message2='<html>';
$message2.='<body aria-readonly="false" style="cursor: auto;"><span style="font-size:14px"><span style="font-family:arial,helvetica,sans-serif"><strong>Hello Team,</strong></span></span><br />
<br />';
$message2.='<span style="font-size:12px"><strong><span style="font-family:arial,helvetica,sans-serif">Below are the details of the person requested to schedule Car servicing please call and confirm the appointment</span></strong></span><br />
&nbsp;';
$message2.='<table border="0" cellpadding="2" cellspacing="2" style="width:500px;background-color:#D3D3D3">
	<tbody>';
	$message2.='<table border="0" cellpadding="2" cellspacing="2" style="width:400px;background-color:#D3D3D3" align="center">
	<tbody><tr><td>';
	    $message2.='<tr>
			<td colspan="2><span style="color:#000000"><center><span style="font-size:14px"><strong><span>Customer Details</span></strong></span></span></center></td>
		</tr>';
		 $message2.='<tr>
			<td style="width: 153px;">&nbsp;</td>
			<td style="width: 234px;">&nbsp;</td>
		</tr>';
		$message2.='<tr>
			<td style="width: 153px;"><span style="color:#000000"><span style="font-size:14px"><strong><span>Customer Name :</span></strong></span></span></td>
			<td style="width: 234px;"><span style="color:#000000"><span>'.$full_name.'</span></span></td>
		</tr>';
		$message2.='<tr>
			<td style="width: 153px;"><span style="color:#000000"><span style="font-size:14px"><strong><span>Contact No :</span></strong></span></span></td>
			<td style="width: 234px;"><span style="color:#000000"><span>'.$phone_no.'</span></span></td>
		</tr>';
		$message2.='<tr>
			<td style="width: 153px;"><span style="color:#000000"><span style="font-size:14px"><strong><span>Email ID :</span></strong></span></span></td>
			<td style="width: 234px;"><span style="color:#000000"><span>'.$to.'</span></span></td>
		</tr>';
		$message2.='<tr>
			<td style="width: 153px;"><span style="color:#000000"><span style="font-size:14px"><strong><span>Service Required on :</span></strong></span></span></td>
			<td style="width: 234px;"><span style="color:#000000"><span>'.$date.'</span></span></td>
		</tr>';
        $message2.='<tr>
            <td style="width: 153px;"><span style="color:#000000"><span style="font-size:14px"><strong><span>Service Type :</span></strong></span></span></td>
            <td style="width: 234px;"><span style="color:#000000"><span>'.$service.'</span></span></td>
        </tr>';
      
		$message2.='<tr>
			<td style="width: 153px;"><span style="color:#000000"><span style="font-size:14px"><strong><span>Area :</span></strong></span></span></td>
			<td style="width: 234px;"><span style="color:#000000"><span>'.$area.'</span></span></td>
		</tr>';
		$message2.='<tr>
			<td style="width: 153px;"><span style="color:#000000"><span style="font-size:14px"><strong><span>City :</span></strong></span></span></td>
			<td style="width: 234px;"><span style="color:#000000"><span>'.$city.'</span></span></td>
		</tr>';
		$message2.='<tr>
			<td style="width: 153px;"><span style="color:#000000"><span style="font-size:14px"><strong><span>Car No :</span></strong></span></span></td>
			<td style="width: 234px;"><span style="color:#000000"><span>'.$reg_no.'</span></span></td>
		</tr>';
        $message2.='<tr>
            <td style="width: 153px;"><span style="color:#000000"><span style="font-size:14px"><strong><span>Car Model :</span></strong></span></span></td>
            <td style="width: 234px;"><span style="color:#000000"><span>'.$model.'</span></span></td>
        </tr>';
		
		$message2.='<tr>
			<td style="width: 153px;">&nbsp;</td>
			<td style="width: 234px;">&nbsp;</td>
			</td>
			</tr>
	    </tbody>
        </table>
		</tr>
	</tbody>
</table>
<br />';
$message2.='<span style="font-size:14px"><span style="font-family:arial,helvetica,sans-serif"><strong>Thank you</strong></span></span></body>
</html>';

    
    mail($to,$subject,$message,$headers);
    mail($admin,$subject2,$message2,$headers2); // sends a copy of the message to the sender
   
     include('connection.php');
        date_default_timezone_set("Asia/Kolkata");

        $data_ = date('d/m/Y h:i:s A');

       $sql = "INSERT INTO `nexa_scheduled_value_added_service`(`name`, `mobile_no`,`email`, `city`, `area`, `service`, `car_no`, `service_date`, `model`) VALUES ('$full_name','$phone_no','$to','$city','$area','$service','$reg_no','$date','$model')";
        



        if ($conn->query($sql) === TRUE) {

          //echo "New record created successfully";

        } else {

          echo "Error: " . $sql . "<br>" . $conn->error;

        }

     header("Location: thank-you.php");
    }
?>
