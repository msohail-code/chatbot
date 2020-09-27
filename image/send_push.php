<?php 
define('SERVER_API_KEY', 'AAAAIu0uiks:APA91bFOo4xceGUr9OdlMVb2hW6s6KaomSY21axvpsk2sM14mCNOoxfI2hrrxk3QQY3PyU3btGIhj5mgmh0q4wfkcuCzlzq8nvR_mqtWO0pKOmnXCFuYoS2P2gmT4P2fruMLTxW_kU48');
require __DIR__ . '/vendor/autoload.php';
use Minishlink\WebPush\WebPush;
$base_url = 'https://www.onepush.io/';
$image_address = $base_url."assets/images/";
$db = new PDO ("mysql:host=localhost;dbname=push_web","app","app@123");

  echo $current_time = date('H:i');

 echo $current_date = date('m/d/Y');
 $select_notifications = $db->prepare("SELECT * FROM Notification where notify_time LIKE :current_time AND notify_date = :current_date ");
$select_notifications->bindValue(":current_time","%".$current_time."%");
$select_notifications->bindParam(":current_date",$current_date);

$select_notifications->execute();

if ($select_notifications->rowCount() > 0) {
	
while ($notification_row =  $select_notifications->fetch(PDO::FETCH_ASSOC)) {
	
	 $title = $notification_row["title"];
	 $image = $notification_row["image"];
	 $badge = $notification_row["badge"];
	 $icon = $notification_row["icon"];
	 $website_id = $notification_row["website"];
	 $message = $notification_row["message"];
	 $notification_url = $notification_row["notification_url"];
	 $notification_id = $notification_row["id"];
	 $notification_url = $notification_row["notification_url"];
	 $auto_type = $notification_row["auto_type"];
	 $auto_id = $notification_row["auto_id"];
	 $notify_date = $notification_row["notify_date"];
    
    $number_to_send = 999;
    $send_to_count = 0;
    
    $select_webstie = $db->prepare("SELECT * FROM website where id = :id");
    $select_webstie->bindParam(":id",$website_id);
    $select_webstie->execute();
    $web_row = $select_webstie->fetch(PDO::FETCH_ASSOC);
    $website_name =  $web_row['website'];
    
    if (!empty($website_id) or $website_id != NULL) {
    
    $select_subscribers_nums = $db->prepare("SELECT * FROM subscribers where domain = :website_name");
    $select_subscribers_nums->bindParam(":website_name",$website_name);
    } else{
        $select_subscribers_nums = $db->prepare("SELECT * FROM subscribers where status=1 LIMIT 999");
    }
    $select_subscribers_nums->execute();
    $num_of_subscribers = $select_subscribers_nums->rowCount();
        
   $total_rounds = ceil($num_of_subscribers/$number_to_send);

    echo '<br><br>'.$total_rounds.'<br><br>';
    
    for($i=1;$i<=$total_rounds;$i++){
        $start_from = ($i-1)*$number_to_send;
   
echo '<br><br>'."i=".$i.'<br><br>';
        
    if (!empty($website_id) or $website_id != NULL) {
		 $select_subscribers = $db->prepare("SELECT * FROM subscribers where domain = :website_name ORDER BY id DESC LIMIT $start_from,$number_to_send");
		 $select_subscribers->bindParam(":website_name",$website_name);
		 $select_subscribers->execute();
		 $tokens = $select_subscribers->fetchAll(PDO::FETCH_ASSOC);
    } else{
    	$select_subscribers = $db->prepare("SELECT * FROM subscribers where status=1 LIMIT $start_from,$number_to_send");
		 
		 $select_subscribers->execute();
		 $tokens = $select_subscribers->fetchAll(PDO::FETCH_ASSOC);
    }
   

	 

	foreach ($tokens as $token) {
		 $registrationIds[] = $token['player_id'];
	}
	echo "<pre>";
	print_r($registrationIds);
	echo "</pre>";
	$header = [
		'Authorization: Key=' . SERVER_API_KEY,
		'Content-Type: Application/json'
	];

	$msg = [
		'title' => $title,
		'body' => $message,
		'icon' => $image_address.$icon,
		'image' => $image_address.$image,
		'click_action' => $notification_url,
		'id'=>$notification_id
		
	];
	

	$payload = [
		'registration_ids' 	=> $registrationIds,
		'data'				=> $msg
	];

	

	$curl = curl_init();

	curl_setopt_array($curl, array(
	  CURLOPT_URL => "https://fcm.googleapis.com/fcm/send",
	  CURLOPT_RETURNTRANSFER => true,
	  CURLOPT_CUSTOMREQUEST => "POST",
	  CURLOPT_POSTFIELDS => json_encode( $payload ),
	  CURLOPT_HTTPHEADER => $header
	));

	$response = curl_exec($curl);
	$err = curl_error($curl);

	curl_close($curl);
        
   
        

	if ($err) {
	  echo "cURL Error #:" . $err;
	} else {
	  echo $response;

	  $decoded = json_decode($response);
	   echo $send_to_count += $decoded->success;

	   if (!empty($auto_type)) {
	   	switch ($auto_type) {
	   		case 'once':
	   			$new_date = $notify_date;
	   			break;
	   		case 'daily':
	   			$new_date =  date('m/d/Y', strtotime($notify_date. ' + 1 days'));
	   			break;
	   		case 'weekly':
	   			$new_date =  date('m/d/Y', strtotime($notify_date. ' + 7 days'));
	   			break;
	   		case 'monthly':
	   			$new_date =  date('m/d/Y', strtotime($notify_date. ' + 1 months'));
	   			break;
	   		case 'yearly':
	   			$new_date =  date('m/d/Y', strtotime($notify_date. ' + 1 years'));
	   			break;
	   		
	   		default:
	   			$new_date = $notify_date;
	   			break;
	   	}
	   }
	   else
	   {
	   	$new_date = $notify_date;
	   }
	
        $update_query = $db->prepare("UPDATE Notification set status='sent',sent_to_count=:sent_to_count,notify_date=:new_date where id=:id");
         $update_query->bindParam(':id',$notification_id);
         $update_query->bindParam(':sent_to_count',$send_to_count);
         $update_query->bindParam(':new_date',$new_date);
         if($update_query->execute()){
             echo "working"; 
             if($auto_id == 0){
                 $auto_update = "UPDATE automations set sent_to_count=sent_to_count+$send_to_count where id='$auto_id'";
                 echo $auto_update;
                 if($db->query($auto_update))
                 {
                     echo "Automation added";
                 }
             }
            
		 }
		  $registrationIds = array();

	}
    }

}
}


?>