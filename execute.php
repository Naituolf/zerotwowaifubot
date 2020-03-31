<?php
$content = file_get_contents("php://input");
$update = json_decode($content, true);

if(!$update)
{
  exit;
}

$message = isset($update['message']) ? $update['message'] : "";
$messageId = isset($message['message_id']) ? $message['message_id'] : "";
$chatId = isset($message['chat']['id']) ? $message['chat']['id'] : "";
$firstname = isset($message['chat']['first_name']) ? $message['chat']['first_name'] : "";
$lastname = isset($message['chat']['last_name']) ? $message['chat']['last_name'] : "";
$username = isset($message['chat']['username']) ? $message['chat']['username'] : "";
$date = isset($message['date']) ? $message['date'] : "";
// la variabile $stringa conterrà la
// stringa "Naviga su html.it "
if($message['text']=="e ferr?")
{
  $text = "anche lui è gay";
  header("Content-Type: application/json");
  $parameters = array('chat_id' => $chatId, "text" => $text);
  $parameters["method"] = "sendMessage";
  echo json_encode($parameters);
}
elseif{$message['text']=="waifu?"}
{
    $numero=1;
    $text = "http://randomwaifu.altervista.org/images/00".(string)$numero.".png";
    header("Content-Type: application/json");
    $parameters = array('chat_id' => $chatId, "text" => $text);
    $parameters["method"] = "sendMessage";
    echo json_encode($parameters);
}
else
{
  $text = "zito è gay";
  header("Content-Type: application/json");
  $parameters = array('chat_id' => $chatId, "text" => $text);
  $parameters["method"] = "sendMessage";
  echo json_encode($parameters);
}

