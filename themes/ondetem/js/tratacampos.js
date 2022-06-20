if (typeof jQuery === 'undefined') {
  throw new Error('Bootstrap\'s JavaScript requires jQuery')
}

(function($) {
       Drupal.behaviors.customToggler = {
         attach: function(context) {		
					var pais = $("#edit-field-pais-value"); 
					var estado = $("#edit-field-estado-value");
					var troca_estado = $(".form-item-field-estado-value");
					
					var dia = $( "#edit-field-data-value" )[0].value ;					
					
					if ((dia == 'today') || (dia == '') ) {
						
						hoje = new Date();
						
						var twoDigitday = ((hoje.getDate().length+1) === 1)? (hoje.getDate()) : (hoje.getDate());
						var twoDigitMonth = ((hoje.getMonth().length+1) === 1)? (hoje.getMonth()+1) : '0' + (hoje.getMonth()+1);
 
						var currentDate =  hoje.getFullYear() + "-" +  twoDigitMonth + "-" +  twoDigitday ;
		
						//dia.val(currentDate) ;
						$( "#edit-field-data-value" )[0].value = currentDate;
						
					}
					
					pais.on('change', function() {
						
						var conteudo_pais = $( "#edit-field-pais-value option:selected" ).text();
						var conteudo_estado = $( "#edit-field-estado-value option:selected" ).text();
						
						if ((conteudo_pais != "Todos" ) && (conteudo_pais != "Brasil" ) && (conteudo_estado == "Todos" ) ){
							troca_estado.hide();
							}
						else {
							troca_estado.show();
							}	
						});
						
					$("#edit-actions").on('click',function() {
							var dia = $( "#edit-field-data-value" )[0].value ;		
							
							if ((dia == 'today') || (dia == '') ) {
							    hoje = new Date();
						
								var twoDigitday = ((hoje.getDate().length+1) === 1)? (hoje.getDate()) : (hoje.getDate());
								var twoDigitMonth = ((hoje.getMonth().length+1) === 1)? (hoje.getMonth()+1) : '0' + (hoje.getMonth()+1);
		 
								var currentDate =  hoje.getFullYear() + "-" +  twoDigitMonth + "-" +  twoDigitday ;
				
								//dia.val(currentDate) ;
								$( "#edit-field-data-value" )[0].value = currentDate;
						}
					});
					

					//$(".date-display-single").html(function(index, text) {
					//return text.replace("<br><br><br>","");
				    //});
			}
        }
		
		Drupal.behaviors.customHTML = {
         attach: function(context) {		
					var myview = $(".discografia"); 
					
					if (myview.length == 1 ) {
					    $("div.view-content").addClass("row-display-flex");
						}
						
						
					
          }
		}
		
})(jQuery);