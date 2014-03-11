  <!-- 
<?php
header("Content-Type: text/html; charset=utf-8");
$to = "klara.nahlovska@gmail.com";
$extra = "From: $email\r\nReply-To: $email\r\n";
$subject = "Kontakt od ".$jmeno."";
$mess = "Jméno: ".$jmeno."\nEmail: ".$email."\nText:\n".$text."";
mb_language('Neutral');
mb_internal_encoding("UTF-8");
mb_http_input("UTF-8");
mb_http_output("UTF-8");
if($jmeno==""||$text==""||ereg("^.+@.+\\..+$", $email)==false){
echo "<script>alert('Špatně zadané údaje, zkuste to prosím znovu.');</script>";
} else{
$succes = mb_send_mail($to, $subject, $mess, $extra);
if($succes){
echo "<script>alert('Zpráva byla úspěšně odeslána, děkujeme.');</script>";
}else{
echo "<script>alert('Nastala chyba, zkuste nás kontaktovat na e-mail: klara.nahlovska@gmail.com');</script>"; } }
print "<meta http-equiv=\"refresh\" content=\"0;URL=kontakt.html\">";
exit();
?>
-- >


<?php 
        if(isset($odeslat)){ 
          $prijemce = "klara.nahlovska@gmail.com"; 
          $send = mail($prijemce, $jmeno, $email, $predmet, $text); 
        if($send){ 
          echo '<p>Vaše zpráva byla úspěšně odeslána.</p>'; 
        }else{ 
          echo '<p>Zprávu se nepodařilo odeslat.</p>'; 
          } 
        } 
 ?> 
