<?php
session_start();
$command = @$_POST['command'];
if (!empty($command)) {
  if (preg_match('-my name is-', $command)) {
    $name = str_replace('my name is', '', $command);
    if (!empty($name)) {
      $_SESSION['name'] = $name;
    }
    echo 'Okay,can you complain about your health (example: headache),' . @$_SESSION['name'], '?';
  } else if (preg_match('-headache-', $command)) {
    echo 'sore throat or fever ?';
  } else if (preg_match('-sore throat-', $command)) {
    echo 'runny nose or stomach ache ?';
  } else if (preg_match('-fever-', $command)) {
    echo 'body temperature > 38 degrees or temperature rising and falling ?';
  } else if (preg_match('-stomach ache-', $command)) {
    echo 'muscle pain or shortness of breath ?';
  } else if (preg_match('-runny nose-', $command)) {
    echo 'you seem to have the flu. You can buy actived drugs for cough and cold relief while sumargesic drugs for headaches.Drink enough water and get adequate rest. Get well soon'  . @$_SESSION['name'];
  } else if (preg_match('-body temperature > 38 degrees-', $command)) {
    echo 'shortness of breath or muscle pain ?';
  } else if (preg_match('-temperature rising and falling-', $command)) {
    echo 'dry cough or muscle pain ?';
  } else if (preg_match('-shortness of breath-', $command)) {
    echo 'From the symptoms you mention it looks like you have COVID-19. Please test swap to be sure. Get well soon'  . @$_SESSION['name'];
  } else if (preg_match('-muscle pain-', $command)) {
    echo 'My prediction, you have typhus. You can visit the hospital and consult a doctor directly to be more sure. Hopefully you get well soon' . @$_SESSION['name'];
  } else if (preg_match('-dry cough-', $command)) {
    echo 'From the symptoms you mention it looks like you have COVID-19. Please test swap to be sure. Get well soon'  . @$_SESSION['name'];
  } else {
    echo 'I am sorry,i cannot understand what are you saying.';
  }
}
