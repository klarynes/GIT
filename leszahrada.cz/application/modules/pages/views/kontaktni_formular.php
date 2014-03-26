   <?php 
      if(isset($odeslat)){ 
        $prijemce = "klara.nahlovska@gmail.com"; 
        $send = mail($prijemce, $jmeno, $email, $predmet, $zprava); 
        if($send){ 
          echo '<p>Vaše zpráva byla úspěšně odeslána.</p>'; 
        }else{ 
          echo '<p>Zprávu se nepodařilo odeslat.</p>'; 
        } 
      } 
      ?> 