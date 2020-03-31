<?php
$content = file_get_contents("php://input");
$update = json_decode($content, true);
$counter+=1;

$message = isset($update['message']) ? $update['message'] : "";
$messageId = isset($message['message_id']) ? $message['message_id'] : "";
$chatId = isset($message['chat']['id']) ? $message['chat']['id'] : "";
$firstname = isset($message['chat']['first_name']) ? $message['chat']['first_name'] : "";
$lastname = isset($message['chat']['last_name']) ? $message['chat']['last_name'] : "";
$username = isset($message['chat']['username']) ? $message['chat']['username'] : "";
$date = isset($message['date']) ? $message['date'] : "";


if($counter>=10)
{
  $counter=0;
  $numero=rand(1, 99);
  $text = "http://randomwaifu.altervista.org/images/00".$numero.".png";
  header("Content-Type: application/json");
  $parameters = array('chat_id' => $chatId, "text" => $text);
  $parameters["method"] = "sendMessage";
  echo json_encode($parameters);
}


if((strpos($message['text'], 'ferr') !== false)or(strpos($message['text'], 'Ferr') !== false))
{
  $text = "anche lui è gay";
  header("Content-Type: application/json");
  $parameters = array('chat_id' => $chatId, "text" => $text);
  $parameters["method"] = "sendMessage";
  echo json_encode($parameters);
}elseif((strpos($message['text'], 'batti') !== false)or(strpos($message['text'], 'Batti') !== false))
{
  $text = "è un figo della madonna <3";
  header("Content-Type: application/json");
  $parameters = array('chat_id' => $chatId, "text" => $text);
  $parameters["method"] = "sendMessage";
  echo json_encode($parameters);
}
elseif(($message['text']=="/waifu")or($message['text']=="/waifu@zerotwo_waifubot"))
{
    $numero=rand(1, 99);
    $text = "http://randomwaifu.altervista.org/images/00".$numero.".png";
    header("Content-Type: application/json");
    $parameters = array('chat_id' => $chatId, "text" => $text);
    $parameters["method"] = "sendMessage";
    echo json_encode($parameters);
}
else
{
  header("Content-Type: application/json");
  $parameters = array('chat_id' => $chatId, "text" => $counter);
  $parameters["method"] = "sendMessage";
  echo json_encode($parameters);
}

