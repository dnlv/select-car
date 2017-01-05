<?
if (array_key_exists('task_description', $_POST)) {
   $to = 'coolbox.me@gmail.com';
   $subject = 'Заявка на подготовку предложения с '.$_SERVER['HTTP_REFERER'];
   $subject = "=?utf-8?b?". base64_encode($subject) ."?=";
   $message = "Имя: ".$_POST['name']."\nТелефон: ".$_POST['phone']."\nEmail: ".$_POST['email']."\nСайт: ".$_POST['site_adress']."\nIP: ".$_SERVER['REMOTE_ADDR']."\nСообщение: ".$_POST['task_description'];
   $headers = 'Content-type: text/plain; charset="utf-8"';
   $headers .= "MIME-Version: 1.0\r\n";
   $headers .= "Date: ". date('D, d M Y h:i:s O') ."\r\n";
   mail($to, $subject, $message, $headers);
   echo $_POST['name'];
}
?>
