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
$randomNumber = rand(1,99);
$url = "http://randomwaifu.altervista.org/images/00";
$url .= randomNumber;
$url .= ".png";
if($message['text']=="e ferr?")
{
  $text = "anche lui è gay";
  header("Content-Type: application/json");
  $parameters = array('chat_id' => $chatId, "text" => $text);
  $parameters["method"] = "sendMessage";
  echo json_encode($parameters);
}
else
  if{$message['text']=="waifu?"}
{
  /*sendPhoto(
  chat_id = chatId,
  photo = url,
  caption = "Telegram Logo"
)*/
    $text=$url;
    echo json_encode($parameters);
    $parameters = array('chat_id' => $chatId, "text" => $text);
    $parameters["method"] = "sendMessage";
}
else
{
  $text = "zito è gay";
  header("Content-Type: application/json");
  $parameters = array('chat_id' => $chatId, "text" => $text);
  $parameters["method"] = "sendMessage";
  echo json_encode($parameters);
}

