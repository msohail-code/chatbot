<?php include 'db.php';?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>This is File for chatbot</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/chatbot.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
    <div class="wrapper">
        <div class="chat_area">
          <div class="main-chat">
               <div class="chat_header">
               <span class="message-img"><img src="image/bot_avatar.png" class="avatar-sm rounded-circle"></span>
               <span class="messages-head-title">Chatbot</span>
           </div>
            <div class="chat_body">
                <ul class="list-unstyled messages-list">
                   <?php
							$res=mysqli_query($conn,"select * from message");
							if(mysqli_num_rows($res)>0){
								$html='';
								while($row=mysqli_fetch_assoc($res)){
									$message=$row['message'];
									$added_on=$row['added_on'];
									$strtotime=strtotime($added_on);
									$time=date('h:i A',$strtotime);
									$type=$row['type'];
									if($type=='user'){
										$class="messages-you";
										$imgAvatar='';
										$name="";
									}else{
										$class="messages-me";
										$imgAvatar='<img src="image/bot_avatar.png" class="avatar-sm rounded-circle">';
										$name='<span class="messages-title">Chatbot</span> ';
									}
									$html.='<li class="'.$class.' clearfix"><span class="message-img">'.$imgAvatar.'</span><div class="message-body clearfix"><div class="message-header">'.$name.'  </div><p class="messages-p">'.$message.'</p></div></li>';
								}
								echo $html; 
							}else{
								?>
								<li class="messages-you clearfix start_chat">
								   Please start
								</li>
								<?php 
							}
                    ?>
                    
                    
                </ul>
            </div>
            <hr>
            <div class="reply-area">
                <textarea name="reply-box" placeholder='Reply Here' id="reply-box" cols="30" rows="10" ></textarea>
                
            </div>
          </div>
            
             <button class="chat-box-control">
                <i class="fa fa-comment" id=""></i>
            </button>
        </div>
        
       
    </div>
    
    
</body>
</html>

<script src="js/jquery.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/chatbot.js"></script>
<script>
  
</script>