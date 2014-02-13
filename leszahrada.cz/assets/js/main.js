$(document).ready(function() {
	$('.js-datepicker').datepicker({
     	changeMonth: true,
      	changeYear: true,
      	dateFormat:"yy-mm-dd",
      	monthNames: ['Leden','Únor','Březen','Duben','Květen','Červen',
	    'Červenec','Srpen','Září','Říjen','Listopad','Prosinec'],
	    monthNamesShort: ['Led','Úno','Bře','Dub','Kvě','Čer',
	    'Čerc','Srp','Zář','Říj','Lis','Pro'],
	    dayNamesMin: ['Po','Út','St','Čt','Pá','So','Ne']
    });
    $('.js-form-login').validate({
		rules: {
		    email: {
		      required: true,
		      email: true
		    },
		    pass: {
		      required: true
		    }
		  },
		messages: {
			email: {
		      required: "Toto políčko je povinné!",
		      email: "Zadejte email ve správném formátu"
		    },
			pass: {
				required: "Toto políčko je povinné!"
			}
		}
	});
    $(".js-form-register").validate({
		rules: {
		    email: {
		      required: true,
		      email: true
		    },
		    pass: {
		      required: true
		    },
		    pass_again: {
		      required: true
		    },
		    firstname: {
		      required: true
		    },
		    lastname: {
		      required: true
		    },
		    street: {
		      required: true
		    },
		    psc: {
		      required: true,
		      number: true
		    },
		    phone: {
		    	number: true
		    },
		    town: {
		      required: true
		    },
		    receipt: {
		      required: true
		    }
		  },
		messages: {
			email: {
		      required: "Toto políčko je povinné!",
		      email: "Zadejte email ve správném formátu"
		    },
			pass: {
				required: "Toto políčko je povinné!"
			},
			pass_again: {
				required: "Toto políčko je povinné!",
				equalTo: "Hesla se musí být stejná."
			},
		    firstname: {
		      required: "Toto políčko je povinné!"
		    },
		    lastname: {
		      required: "Toto políčko je povinné!"
		    },
		    street: {
		      required: "Toto políčko je povinné!"
		    },
		    psc: {
		      required: "Toto políčko je povinné!",
		      number: "Musí obsahovat 5 čísel bez mezery.",
		      minlength: "Musí obsahovat 5 čísel bez mezery.",
		      maxlength: "Musí obsahovat 5 čísel bez mezery."
		    },
		    town: {
		      required: "Toto políčko je povinné!"
		    },
		    phone: {
		    	number: "Musí obsahovat 9 čísel bez mezery.",
		      	minlength: "Musí obsahovat 9 čísel bez mezery.",
		      	maxlength: "Musí obsahovat 9 čísel bez mezery."
		    },
		    receipt: {
		      required: "Toto políčko je povinné!"
		    }
		}
	});

     // $.datepicker.regional['cs'] = {
	    // monthStatus: 'Voir un autre mois', yearStatus: 'Voir un autre année',
	    // weekHeader: 'Sm', weekStatus: '',
	    // dayNames: ['Dimanche','Lundi','Mardi','Mercredi','Jeudi','Vendredi','Samedi'],
	    // dayNamesShort: ['Dim','Lun','Mar','Mer','Jeu','Ven','Sam'],
	   
	    // dayStatus: 'Utiliser DD comme premier jour de la semaine', dateStatus: 'Choisir le DD, MM d',
	    // dateFormat: 'dd/mm/yy', firstDay: 0, 
	    // initStatus: 'Choisir la date', isRTL: false};
});