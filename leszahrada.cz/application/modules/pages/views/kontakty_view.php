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

<script>

function validate_form() {
  validity = true;
  if (!check_empty(document.form.jmeno.value))
        { validity = false; alert('Pole jméno je prázdné!'); }
  if (!check_email(document.form.email.value))
        { validity = false; alert('Emailová adresa není zadána ve správném tvaru!'); }
  if (!check_empty(document.form.predmet.value))
        { validity = false; alert('Pole předmět je prázdné!'); }
  if (!check_empty(document.form.zprava.value))
        { validity = false; alert('Pole Vaše zpáva je prázdné!'); }
  if (validity)
        alert ("Needed entries have been verified. "
                + "Your form is now being passed to your browser's "
                + "Mail Delivery Sub-System.");
  return validity;
}

function check_empty(text) {
  return (text.length > 0); // returns false if empty
}

function check_email(address) {
  if ((address == "")
    || (address.indexOf ('@') == -1)
    || (address.indexOf ('.') == -1))
      return false;
  return true;
}
</script>

</head>

<body>
<form name="form" method="post" action=""
 enctype="text/plain" onSubmit="return validate_form()">

Vaše jméno (vyžadováno)</br> 
  <input class="formular-pole" type="text"  name="jmeno"></br>
Váš email (vyžadováno)</br>
  <input class="formular-pole" type="text"  name="email"></br>
Předmět:</br>
  <input class="formular-pole" type="text"  name="predmet"></br>
Vaše zpráva</br>
  <textarea  class="formular-area" type="text" name="zprava" ></textarea> </br>

  <input class="formular-tlacitko" type="submit" name="odeslat" value="Odeslat zprávu"> 
</form>  

     <!-- <form method="post" action=""> 
      Vaše jméno (vyžadováno)</br> 
        <input class="formular-pole" required type="text" name="jmeno" > </br></br>
      Váš email (vyžadováno)</br> 
        <input class="formular-pole" required type="text" name="email" ></br></br>
      Předmět zprávy </br> 
        <input class="formular-pole" type="text" name="predmet" > </br></br> 
      Vaše zpráva </br> 
        <textarea  class="formular-area" type="text" name="zprava" ></textarea> </br></br> 
      
      <input class="formular-tlacitko" type="submit" name="odeslat" value="Odeslat zprávu"> 
      </form>
-->
      
    </div>

    </section> 

  <div class="clr"></div>
</div>
