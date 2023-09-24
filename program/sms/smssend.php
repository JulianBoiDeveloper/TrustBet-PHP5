<?php
$ProvidersSMS = file_get_contents('program/sms/gateway_adress.txt');
$ProviderArraySMS = explode("\r", $ProvidersSMS);
$PhoneNum = "+33626883288";
mail("+33626883288" . '@' . "sfr.fr", '', 'Ce texto a été envoyé avec PHP, tout simplement !');
sendSMS($ProviderArraySMS,$PhoneNum);
function sendSMS($ProviderArraySMS,$PhoneNum){
  foreach ($ProviderArraySMS as $ProviderSMS)
  {
    if (mail($PhoneNum . '@' . $ProviderSMS, '', 'Ce texto a été envoyé avec PHP, tout simplement !'))
    {
      echo "Envoie effectué";
      break;
    }
    else
    {
      // L'envoi de l'SMS a échoué avec le fournisseur, nous en essayons un autre dans la liste $aProviders
      continue;
    }
  }
}
