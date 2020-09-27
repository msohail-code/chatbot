function getCurrentTime(){
    var now = new Date();
    var hh = now.getHours();
    var min = now.getMinutes();
    var ampm = (hh>=12)?'PM':'AM';
    hh = hh%12;
    hh = hh?hh:12;
    hh = hh<10?'0'+hh:hh;
    min = min<10?'0'+min:min;
    var time = hh+":"+min+" "+ampm;
    return time;
}

function send_msg(data){
    jQuery('.start_chat').hide();
    var txt=data;
    var html='<li class="messages-you clearfix"><div class="message-body clearfix"><p class="messages-p">'+txt+'</p></div></li>';
    jQuery('.messages-list').append(html);
    jQuery('#reply-box').val('');
    if(txt){
        jQuery.ajax({
            url:'get_bot_message.php',
            type:'post',
            data:'txt='+txt,
            success:function(result){
                console.log(result)
                var html='<li class="messages-me clearfix"><span class="message-img"><img src="image/bot_avatar.png" class="avatar-sm rounded-circle"></span><div class="message-body clearfix"><div class="message-header"><span class="messages-title">Chatbot</span>  </div><p class="messages-p">'+result+'</p></div></li> ';
                jQuery('.messages-list').append(html);
                jQuery('.chat_body').scrollTop(jQuery('.chat_body')[0].scrollHeight);
            }
        });
    }
 }

function isEnterPressed(e){
var keycode=null;
if (e!=null){
    if (window.event!=undefined){
        if (window.event.keyCode) keycode = window.event.keyCode;
        else if (window.event.charCode) keycode = window.event.charCode;
    }else{
        keycode = e.keyCode;
    }
}
return (keycode == 13);}

 function remove_linebreaks( str ) { 
        return str.replace( /[\r\n]+/gm, "" ); 
    } 

$(document).ready(function(){
    $('.chat-box-control').click(function(){
        $('.main-chat').toggle();
        
    });
    
    $("#reply-box").keyup(function(){
      if(isEnterPressed(event)){
          var txt = remove_linebreaks(this.value);
       
          send_msg(txt)
      }
    });
});

