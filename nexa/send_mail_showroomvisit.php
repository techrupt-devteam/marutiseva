<?php 
if(isset($_POST['submit'])){

    $to = $_POST['email'];
    $from = "it@sevagroup.co.in"; // this is the sender's Email address
    $full_name = $_POST['full_name'];
    $phone_no = $_POST['phone_no'];
    $client_city = $_POST['client_city'];
    $car_city = $_POST['car_city'];
    $time = $_POST['time'];
    $date = $_POST['date'];
    $area = $_POST['area'];
    $s_message = $_POST['s_message'];
    $details = $_POST['details'];
    $model = $_POST['model'];

    if($client_city == 'Nashik'){
        $admin="sevanexa.nsk.sm1@marutidealers.com";
        // $admin="mayuri.hoh@gmail.com";
    }elseif($client_city == 'Nagpur'){
         $admin="sevanexa.ngp@marutidealers.com";
    }else{
        $admin="sevanexa.nnd.sm1@marutidealers.com";
    }
    $subject = "Seva IT Support";
    $subject2 = "Showroom Visit Appointment";
    $message = "Dear ".$full_name.","."\r\n\r\n"."Thanks for connecting with Seva group our executive will get back to you soon"."\r\n\r\n"."Thanks"."\r\n"."Team Nexa";
    // $message2 = "Hello Team, Below are the details of the person requested to book Book a showroom visit. Please Call and confirm"
    // ."\r\n\r\n"."Name : " .$full_name
    // ."\r\n"."Phone no : ". $phone_no
    // ."\r\n"."Customer city : ".$client_city
    // ."\r\n"."Customer message : ".$s_message
    // ."\r\n"."Car model : ".$model
    // ."\r\n"."Date : ".$date
    // ."\r\n"."Time : ".$time
    // ."\r\n"."Car City : ".$car_city
    // ."\r\n"."Area: ".$area
    // ."\r\n";


    $headers = "From:" . $from;
    $headers2 = "MIME-Version: 1.0\r\n";
    $headers2 .= "Content-Type: text/html; charset=ISO-8859-1\r\n";
    $headers2 .= "From:" . $from. "\r\n" .
    "CC: it@sevagroup.co.in". "\r\n" .
    'X-Mailer: PHP/' . phpversion();

	    $message2='<html>';
	    $message2.='<body aria-readonly="false" style="cursor: auto;"><span style="font-size:14px"><span style="font-family:arial,helvetica,sans-serif"><strong>Hello Team,</strong></span></span><br />
		<br />';
		$message2.='<span style="font-size:12px"><strong><span style="font-family:arial,helvetica,sans-serif">Below are the details of the person requested to book Book a showroom visit. Please Call and confirm.</span></strong></span><br />
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
			<td style="width: 153px;"><span style="color:#000000"><span style="font-size:14px"><strong><span>City:</span></strong></span></span></td>
			<td style="width: 234px;"><span style="color:#000000"><span>'.$client_city.'</span></span></td>
		</tr>';
		$message2.='<tr>
			<td style="width: 153px;"><span style="color:#000000"><span style="font-size:14px"><strong><span>Car Model :</span></strong></span></span></td>
			<td style="width: 234px;"><span style="color:#000000"><span>'.$model.'</span></span></td>
		</tr>';
		$message2.='<tr>
			<td style="width: 153px;"><span style="color:#000000"><span style="font-size:14px"><strong><span>Car City :</span></strong></span></span></td>
			<td style="width: 234px;"><span style="color:#000000"><span>'.$car_city.'</span></span></td>
		</tr>';
		$message2.='<tr>
			<td style="width: 153px;"><span style="color:#000000"><span style="font-size:14px"><strong><span>Date:</span></strong></span></span></td>
			<td style="width: 234px;"><span style="color:#000000"><span>'.$date.'</span></span></td>
		</tr>';
		$message2.='<tr>
			<td style="width: 153px;"><span style="color:#000000"><span style="font-size:14px"><strong><span>Time :</span></strong></span></span></td>
			<td style="width: 234px;"><span style="color:#000000"><span>'.$time.'</span></span></td>
		</tr>';
		$message2.='<tr>
			<td style="width: 153px;"><span style="color:#000000"><span style="font-size:14px"><strong><span>Customer Message :</span></strong></span></span></td>
			<td style="width: 234px;"><span style="color:#000000"><span style="font-size:12px"><span style="font-family:arial,helvetica,sans-serif"><span>'.$s_message.'</span></span></span></span></td>
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
    mail($admin,$subject2,$message2,$headers2); // admin

    include('connection.php');

        date_default_timezone_set("Asia/Kolkata");

        $data_ = date('d/m/Y h:i:s A');

        $sql = "INSERT INTO `nexa_showroom_visits`(`model`, `date`, `time`, `car_city`, `area`, `full_name`, `email`, `phone_no`, `client_city`, `message`) VALUES ('$model','$date','$time','$car_city','$area','$full_name','$email','$phone_no','$client_city','$s_message')";

        



        if ($conn->query($sql) === TRUE) {

          //echo "New record created successfully";

        } else {

          echo "Error: " . $sql . "<br>" . $conn->error;

        }

     header("Location: thank-you.php");
    }
?>