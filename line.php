 <?php
  

function send_LINE($msg){
 $access_token = 'G9hXF8vurFGkurRN0vZ8aWYJdj7xiueB2Zat2pxBvfwk6lUt4JWios1R1WQH7VPv5fzIDiqPVZLdzwQacImuDYpstQyHpqTR0tTTDebov8cv12iCyFxcMoZGikmTATNOrQmm9Qs2yVunCNMmPKG1WwdB04t89/1O/w1cDnyilFU='; 

  $messages = [
        'type' => 'text',
        'text' => $msg
        //'text' => $text
      ];

      // Make a POST Request to Messaging API to reply to sender
      $url = 'https://api.line.me/v2/bot/message/push';
      $data = [

        'Userid ' => 'U69d3ba8b7205cf4a9b9ca0944e1bf8c5',
        'messages' => [$messages],
      ];
      $post = json_encode($data);
      $headers = array('Content-Type: application/json', 'Authorization: Bearer ' . $access_token);

      $ch = curl_init($url);
      curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
      curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
      curl_setopt($ch, CURLOPT_POSTFIELDS, $post);
      curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
      curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
      $result = curl_exec($ch);
      curl_close($ch);

      echo $result . "\r\n"; 
}

?>
