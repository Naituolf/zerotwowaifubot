<?php
$content = file_get_contents("php://input");
$update = json_decode($content, true);

$message = isset($update['message']) ? $update['message'] : "";
$messageId = isset($message['message_id']) ? $message['message_id'] : "";
$chatId = isset($message['chat']['id']) ? $message['chat']['id'] : "";
$firstname = isset($message['chat']['first_name']) ? $message['chat']['first_name'] : "";
$lastname = isset($message['chat']['last_name']) ? $message['chat']['last_name'] : "";
$username = isset($message['chat']['username']) ? $message['chat']['username'] : "";
$date = isset($message['date']) ? $message['date'] : "";

$fp = fopen(counter.txt, r);
$counter=fread($fp, 1);
if($counter==1)
{
  $counter=fread($fp, 1);
  if($counter==0)
  {
    fclose($fp);
    $fp = fopen(counter.txt, w+);

    fwrite($fp, $counter);
    fclose($fp);
    $numero=rand(1, 99);
    $text = "http://randomwaifu.altervista.org/images/00".$numero.".png";
    header("Content-Type: application/json");
    $parameters = array('chat_id' => $chatId, "text" => $text);
    $parameters["method"] = "sendMessage";
    echo json_encode($parameters);
  }
  else
    fclose($fp);
    $counter+=1;
    $fp = fopen(counter.txt, w+);

    fwrite($fp, $counter);
    fclose($fp);
}
else
  fclose($fp);
  $counter+=1;
  $fp = fopen(counter.txt, w+);

  fwrite($fp, $counter);
  close($fp);


// Ora apro il file in lettura, mi muovo al suo interno, e stampo parti di contenuto




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

