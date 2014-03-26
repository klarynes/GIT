<div class="main">
  <?php $this->load->view('menu_view'); ?>
  
<section class="main-section">
  <?php $this->load->view('blok_view'); ?>  
</section>

  <section class="main-section--pravy"> 
    <h2 class="nadpis">Kde nás najdete</h2>
    <br />
    <div>
      <table>
        <tr>
          <td> 
              <p style="text-align:center; padding: 0px 30px 0px 0px;">
                <span style="font-size: 18px; font-weight:bold;">Havlín les&zahrada</span><br />
                Zraslavice 77 (náměstí)<br />
                285 21, Zbraslavice<br />
                Tel./fax: 327 313 859<br />
                Mobil: 604 211 063<br />
                e-mail: <a class="odkaz" href="mailto:havlin@leszahrada.cz"><strong>havlin@leszahrada.cz</strong>.</a><br />
                Otevírací doba: Po - Pá 7:30 - 12:30 hod.<br />
                Čt 7:30 - 12:00 hod.<br />
                So 8:00 - 11:00 hod.<br />
              </p>
            </td>
          <td>
            <img class="obrazek" align="right" style="width:320px; height:210px;" src="assets/images/firma.jpg" alt="Prodejna Havlín les&zahrada"><br />
          </td>
      </tr>
      </table>
        <br />
        <br />
        <div style="border:solid 1px #8b8686;margin-bottom: 25px;"><iframe  width="585" height="300"frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?f=q&amp;source=s_q&amp;hl=cs&amp;geocode=&amp;q=49%C2%B048'42.718%22N,+15%C2%B010'59.271%22E&amp;aq=&amp;sll=49.811356,15.183717&amp;sspn=0.001785,0.004133&amp;ie=UTF8&amp;t=m&amp;z=14&amp;ll=49.811866,15.183131&amp;output=embed"></iframe></div>
      </div>

    </br>
    <div>
      <span style="font-size: 18px; font-weight:bold;">Napište nám:</span>
      <p class="odstavec"></p>
  
  <a name="kontaktni_formular"></a>

<?php
              if(!empty($_REQUEST['action'])){
                $action = $_REQUEST['action'];
              }
                 
             
              if (empty($action))    /* zobrazí kontaktní formulář */
                  {
                  ?>
                    <form  action="" method="POST" enctype="multipart/form-data"> 
                    <input type="hidden" name="action" value="submit"> 
                    Vaše jméno (vyžadováno)</br> 
                    <input class="formular-pole" name="name" type="text" value="" /><br> 
                    Váš email (vyžadováno) </br> 
                    <input class="formular-pole" name="email" type="text" value="" /><br> 
                     Předmět </br> 
                    <input class="formular-pole" name="subject" type="text" value="" /><br>
                    Vaše zpráva</br> 
                    <textarea class="formular-area" name="message" rows="7" cols="30"></textarea><br> 
                    <input class="formular-tlacitko" type="submit" name="odeslat" value="Odeslat zprávu"/> 
                    </form> 
                    <?php 
                    }  
              else                /* odešle vyplněná data */
                  {
                  $name=$_REQUEST['name'];
                  $email=$_REQUEST['email'];
                  $message=$_REQUEST['message'];
                  $subject=$_REQUEST['subject'];
                  if (($name=="")||($email=="")||($message==""))
                      {
                      echo "Všechna pole jsou povinná, prosím vyplňte <a href=\"\">formulář</a> znovu."; 
                      }
                  else{        
                      $from="From:".$name."<".$email.">\r\nReturn-path: ".$email;
                      //subject="Tato zpráva je poslána z kontaktního formuláře na leszahrada.cz";
                      mail("klara.nahlovska@gmail.com", $subject, $message, $from); 
                      echo "Vaše zpráva byla úspěšně odeslána!"; 
                      }
                  }  
     ?>

      
    </div>
    </section> 

  <div class="clr"></div>
</div>
