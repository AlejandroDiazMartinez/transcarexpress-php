<?php
echo "Hello, World!";
$ch = curl_init();

$notification = [
  'title' => 'Esta es una nueva notificación',
  'body' => 'Notificación con php5 y el api de firebase',
];

$message = [
  'notification' => $notification,
  'token' => 'dOdWgNIlSAG1kfJzd1hjEn:APA91bEV57-zgwyx5jfMhYFwqW41mwuMHyX1b5qJjveYdoq6IaWT6mjK9slHb1AdBL4NO60z87fh-8JqxnDGsF8PT35IkzcEaLngSGFQIzsbCRjoiy5ueIKYTh7fXM_AQ2_H9vSxqox2',
];

$data = [
  'message' => $message,
];

$headers = [
    'Authorization: Bearer ya29.c.c0AY_VpZgJg1ZBTHSfNSqxNq-JaZN7-ZIOH2U6Ra_HApAW3IpPBUIDbelE5HjndGHOlgcgAb2lgm4un-TuqotC4Hl3kaj3jqL-IujL50DLvsa6QnKwMTtwyz7LQJBJD7EmAFcTiLYjkrlt7xO_JCC1FAOhCARfY1x95inpB6DpTQthdruICbgZ_r_mUzqWtr5Y3f6NKpebxTHhwMdCh9kXDxE1YiQFdRPyw5RLJiM1sth6nYDZrHKzLO3OoArMxHIsV3OudsaeYS6zrbj6_7WwNhdZNZbn4rFPpHGFxY-w2BZKl7givKc_tNhf6hYAf0FSvWU_Rno3PCvhQbrRn58qNyOU4MXECW5o4yVTWPKSTKaIB6ucdqI2nZvSagE387AYQa7tI-xdhZome3nFFfQpsB2OufBF6SM87RaZ75jIFM5eneZB8Uzu8sz3Ix2nBIkS6SV1jXx5QmVQ0ywtzaS1g8ywntsF6h7oY_mS3uqqFbusUzhF0vvW2JqUm97gU6FwInf203o-dMQevaryZ7ye6Snqb8cr-sdZ6vgrZOdU_I7dtot-kVcktSVRf6kMS_JztFdRrszIOWX1-oOw_J1fh-yOIZav92p7Qj3Qkij3-cWIx5QiIlvgrX_WMbgup8WzhBsarmudIY5XkWoQ4Q7be8MlOtS8QOX6ti8fJ0cF2XXt0maR6yORbgz92BUaFb0MyFtvlb2tSc0Skohzen-7rskyrOy9a_9X2-p7j9wzV3boRqjh3QI85kVwgaqcpgk_4-gfc-2wwyoOkUBZS3sbfx7FepiqwMdgxa7R0x7dc-qzOJUXJswdMp49oypoRWI6o6aoshgYntdlgzSorrsriooUeISgwbSwvXIfUtJ33Jl2IzmZs_Xntw2x2YF3I0rr--Fwbu1b3k7uyJ-WqOcSB-9mlVavqbORZX9deeoZsWFdumsihllhZl73mjdQSeuZynch0QbFxWk6ZjOZhv_xbwqiY9_8BQ4q0oqciJz4Is4k2OvrzsquaS7',
    'Content-Type: application/json',
];

curl_setopt($ch, CURLOPT_URL, 'https://fcm.googleapis.com/v1/projects/test-messenger-e49f3/messages:send');
curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($data));

$result = curl_exec($ch);

if ($result === false) {
    die('Hubo un error al enviar la notificación: ' . curl_error($ch));
}

echo $result;

curl_close($ch);

echo 'Notificación enviada con éxito';
?>