<?php

    function MailerWebMaster($to,$subject,$message){
      $headers ='From: "Eternal Dreams"<webmaster@eternal-dreams.fr>'."\n";
      $headers .= 'Reply-To: webmaster@eternal-dreams.fr'."\n";
      $headers .='Content-Type: text/html; charset="utf-8"'."\n";
      $headers .='Content-Transfer-Encoding: 8bit';
      mail($to, $subject, $message, $headers);
    }
    function MailerInscriptions($to,$subject,$message){
      $headers ='From: "Eternal Dreams"<inscriptions@eternal-dreams.fr>'."\n";
      $headers .= 'Reply-To: inscriptions@eternal-dreams.fr'."\n";
      $headers .='Content-Type: text/html; charset="utf-8"'."\n";
      $headers .='Content-Transfer-Encoding: 8bit';
      mail($to, $subject, $message, $headers);
    }
    function MailerResetPassword($to,$subject,$message){
      $headers ='From: "Eternal Dreams"<reset-password@eternal-dreams.fr>'."\n";
      $headers .= 'Reply-To: reset-password@eternal-dreams.fr'."\n";
      $headers .='Content-Type: text/html; charset="utf-8"'."\n";
      $headers .='Content-Transfer-Encoding: 8bit';
      mail($to, $subject, $message, $headers);
    }
    function MailerAuthentificationCode($to,$subject,$message){
      $headers ='From: "Eternal Dreams"<authentification-code@eternal-dreams.fr>'."\n";
      $headers .= 'Reply-To: authentification-code@eternal-dreams.fr'."\n";
      $headers .='Content-Type: text/html; charset="utf-8"'."\n";
      $headers .='Content-Transfer-Encoding: 8bit';
      mail($to, $subject, $message, $headers);
    }
    function MailerFacture($to,$subject,$message){
      $headers ='From: "Eternal Dreams"<facture@eternal-dreams.fr>'."\n";
      $headers .= 'Reply-To: facture@eternal-dreams.fr'."\n";
      $headers .='Content-Type: text/html; charset="utf-8"'."\n";
      $headers .='Content-Transfer-Encoding: 8bit';
      mail($to, $subject, $message, $headers);
    }
    function MailerDesactiveAccount($to,$subject,$message){
      $headers ='From: "Eternal Dreams"<desactive-account@eternal-dreams.fr>'."\n";
      $headers .= 'Reply-To: desactive-account@eternal-dreams.fr'."\n";
      $headers .='Content-Type: text/html; charset="utf-8"'."\n";
      $headers .='Content-Transfer-Encoding: 8bit';
      mail($to, $subject, $message, $headers);
    }
    function MailerPub($to,$subject,$message){
      $headers ='From: "Eternal Dreams"<advertissement@eternal-dreams.fr>'."\n";
      $headers .= 'Reply-To: advertissement@eternal-dreams.fr'."\n";
      $headers .='Content-Type: text/html; charset="utf-8"'."\n";
      $headers .='Content-Transfer-Encoding: 8bit';
      mail($to, $subject, $message, $headers);
    }
 ?>
