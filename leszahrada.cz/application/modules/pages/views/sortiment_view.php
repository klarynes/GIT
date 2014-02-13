<div class="main">
  <?php $this->load->view('menu_view'); ?>
  
<section class="main-section">
 <section class="main-section--levy">
  <?php $this->load->view('katalog_view'); ?> 

  <div class="levysloupec">
   <div class="blokakce">
         <div class="bloknadpis">Aktulality</div>
	          <ul class="bloktext">
	            <li> aktualita 1 </li>
	            <li> aktualita 2 </li>
	          </ul>       
      	 </div>

    <div class="blokstahovani">
         <div class="bloknadpis">Ke stažení</div>
          <ul class="bloktext">
            <li> ke stažení 1 </li>
            <li> ke stažení 2 </li>
          </ul>
    </div>
  </div>
  </section>  
  </section>  


<section class="main-section--pravy">    
        <h2 class="nadpis"> Katalog produktů společnosti STIHL </h2> 
        <?php $this->load->view('stihl_view'); ?>
</section>

<div class="clr"></div>
 
</div> 


  

