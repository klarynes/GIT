
//inicializace
function init_rotator() {

//existuje element?
  if (!$('#rotator').length) {
 
 //pokud neexuístuje, ukončíme   
    return;
  }

//rychlost otáčení
var speed = 7000;

//stav pozastavení
var pause = false;

//funkce pro otáčení
function rotate (element) {

  //zastavime, jestlize uživatel komunikoval
  if (pause) {
    return;
  }



 $( "#rotator" ).animate({ "left": "-50px","top": "-50px",'opacity':  0.95 }, 7850,'linear', function(){
    $(this).animate({"left": "0px","top": "0px",'opacity':  0.95}, 7850);
 });



$(element).children('img').animate({"width": "450px"}, 7850, function(){
  $(this).animate({"width": "320px"}, 7850);
});


//vybereme buď nasledujícínebo první element li
var $next_li = $(element).next('li').length ?
  $(element).next('li') :
  $('#rotator li:first');


//vybereme buď nasledujícínebo první řídící odkaz
  var $next_a = 
    $('#rotator_controls a.current').parent('li').next('li').length ?
    $('#rotator_controls a.current').parent('li').next('li').find('a') : 
    $('#rotator_controls a:first')


//zahájíme animaci
    $('#rotator_controls a.current').removeClass('current');
    $next_a.addClass('current');


//pokračujeme
    function doIt() {
      rotate($next_li);
    }

//schováme element li
    $(element).fadeOut(speed);


//zobrazíme následující element li
    $($next_li).fadeIn(speed, function() {

      //mírná prodleva
      setTimeout(doIt, speed);

     });
  }

//ovládacím prvkům přidáme obsluhující funkce události click
     $('#rotator_controls a').click(function() {

 //změníme text tlačítka     
      $('#rotator_play_pause').html('Spustit');

 //zobrazíme cílový element a ostatní elementy li schováme     
      $($(this).attr('href')).show().siblings('li').hide();

 //přidáme třídu current a ze všech ostatních ji odstraníme     
      $(this).addClass('current').parent('li').siblings('li')
        .find('a').removeClass('current');

//pozastavíme animaci
        pause = true;

//žádný přechod
        this.blur();
        return false;
      });

 
 //pozastavíme nebo spustíme animaci    
    $('#rotator_play_pause').click(function() {

 //co toto tlačítko říká     
      if($(this).html() === 'Pozastavit') {

 //zastavíme otáčení       
        pause = true;

 //změníme text       
        $(this).html('Spustit');
      } else {

  //odstraníme třídu pause      
        pause = false;

   //zahájíme otáčení     
        rotate('#rotator li:visible:first');

   //změníme text     
        $(this).html('Pozastavit');
      }

   //žádný přechod   
      this.blur();
      return false;
    });

//schováme vše kromě prvního elementu li
    $('#rotator li:first').siblings('li').hide();

 //čekáme na načtení stránky   
    $(window).load(function() {

  //zahájíme otáčení    
      rotate($('#rotator li:visible:first'));
    });
}


//uvedeme věci do pohybu
$(document).ready(function(){
  init_rotator();
});




//$(element).animate({"width": "450px"}, 1000, function(){
//$(this).animate({"width": "320px"}, 1000);
//});















