<?php 

if(isset($_POST['submit'])){

    $to = $_POST['email'];// this is your Email address
    $admin="enquiry@marutiseva.com";
    // $admin="mayuri.hoh@gmail.com";
    $from = "it@sevagroup.co.in"; // this is the sender's Email address
    $full_name = $_POST['full_name'];
    $phone_no = $_POST['phone_no'];
    $desc = $_POST['desc'];
    
    $headers = "From:" . $from;
    $headers2 = "MIME-Version: 1.0\r\n";
    $headers2 .= "Content-Type: text/html; charset=ISO-8859-1\r\n";
    $headers2 .= "From:" . $from. "\r\n" .
    'Reply-To: '.$from."\r\n" .
    "CC: it@sevagroup.co.in". "\r\n" .
    'X-Mailer: PHP/' . phpversion();
   
    $subject = "Seva IT Support";
    $subject2 = "Enquiry For Commercial";
    $message = "Dear ".$full_name.","."\r\n\r\n"."Thanks for connecting with Seva group our executive will get back to you soon"."\r\n\r\n"."Thanks"."\r\n"."Team Seva";
    // $message3 = "Hello Team," ."\r\n\r\n".  "Below are the details of the person requested to schedule Car servicing please call and confirm the appointment"
    
    // ."\r\n\r\n"."Name : " .$full_name
    // ."\r\n"."Phone no : ". $phone_no
    // ."\r\n"."City : ".$city
    // ."\r\n"."Area : ".$area
    // ."\r\n" . "Car pickup : " .$radio_stacked
    // ."\r\n"."Registration No : ".$reg_no
    // ."\r\n"."Service Date : ".$service_date
    // ."\r\n"."Customer message : ".$s_message."\r\n";
    
$message2='<html>';
$message2.='<body aria-readonly="false" style="cursor: auto;"><span style="font-size:14px"><span style="font-family:arial,helvetica,sans-serif"><strong>Hello Team,</strong></span></span><br />
<br />';
$message2.='<span style="font-size:12px"><strong><span style="font-family:arial,helvetica,sans-serif">Below are the details of the person send enquiry please call and confirm the appointment</span></strong></span><br />
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
            <td style="width: 153px;"><span style="color:#000000"><span style="font-size:14px"><strong><span>Source:</span></strong></span></span></td>
            <td style="width: 234px;"><span style="color:#000000"><span>Commercial</span></span></td>
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
			<td style="width: 153px;"><span style="color:#000000"><span style="font-size:14px"><strong><span>Description :</span></strong></span></span></td>
			<td style="width: 234px;"><span style="color:#000000"><span>'.$desc.'</span></span></td>
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




    mail($to,$subject,$message,$headers); //customer
    mail($admin,$subject2,$message2,$headers2); //admin


            // $_h = curl_init();
            // curl_setopt($_h, CURLOPT_HEADER, 1);
            // curl_setopt($_h, CURLOPT_RETURNTRANSFER, 1);
            // curl_setopt($_h, CURLOPT_HTTPGET, 1);
            // curl_setopt($_h, CURLOPT_URL, $url );
            // curl_setopt($_h, CURLOPT_DNS_USE_GLOBAL_CACHE, false );
            // curl_setopt($_h, CURLOPT_DNS_CACHE_TIMEOUT, 2 );

            // var_dump(curl_exec($_h));
            // var_dump(curl_getinfo($_h));
            // var_dump(curl_error($_h)); 


            

    include('connection.php');
        date_default_timezone_set("Asia/Kolkata");

        $data_ = date('d/m/Y h:i:s A');

        $sql = "INSERT INTO `commercial_enquiries`(`name`, `email`, `mobile`, `desc`) VALUES ('$full_name',' $to','$phone_no','$desc')";

        



        if ($conn->query($sql) === TRUE) {

          //echo "New record created successfully";

        } else {

          echo "Error: " . $sql . "<br>" . $conn->error;

        }

     header("Location: thank-you.php");
    }
?>
