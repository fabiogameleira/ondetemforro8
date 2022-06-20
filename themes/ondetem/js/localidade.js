if (typeof jQuery === 'undefined') {
  throw new Error('Bootstrap\'s JavaScript requires jQuery')
}

(function ($, Drupal, drupalSettings) {
  Drupal.behaviors.localmybehavior = {
       attach: function (context, settings) {
		   // drupalSettings.localidade é carregado no módulo myexposefilter
		   var localidade = drupalSettings.localidade;
	
			 if (localidade) {
			
					var conteudo_pais = $("#edit-field-pais-value option:selected" ).text();
					var conteudo_estado = $( "#edit-field-estado-value option:selected" ).text();
					
					var pais = $("#edit-field-pais-value");
					var estado = $("#edit-field-estado-value");
					var cidade = $("#edit-field-cidade-value");
				
                    // Como os combos vem totoalmente preenchidos
					// Ajusta o conteúdo na primeira carga conforme o que está selecionado em País.
                    // Retirando os estados e cidades que não pertencem ao país. 					
                    var exclui_estado;
					var exclui_cidade;
                														
					for (var i = 0; i < localidade.length; i++) {
						if  ((localidade[i]['pais'] != conteudo_pais)  && (conteudo_pais != "Todos" )) {  
								exclui_estado = localidade[i]['estado'];
								exclui_cidade = localidade[i]['cidade'];
								$('#edit-field-estado-value option[value="' + exclui_estado + '"]').remove();
								$('#edit-field-cidade-value option[value="' + exclui_cidade + '"]').remove();
							}
							
						if  ((localidade[i]['estado'] != conteudo_estado)  && (conteudo_estado != "Todos" )) {  
								exclui_cidade = localidade[i]['cidade'];
								$('#edit-field-cidade-value option[value="' + exclui_cidade + '"]').remove();
							}
							
					}	
									
					// TROCA PAÍS
					pais.on('change', function() {
						
                        // guarda conteúdo do filtro
						var conteudo_pais = $( "#edit-field-pais-value option:selected" ).text();
						var conteudo_estado = $( "#edit-field-estado-value option:selected" ).text();
						var conteudo_cidade = $( "#edit-field-cidade-value option:selected" ).text();
							
						// Limpa filtro estado e cidade						
						$('#edit-field-estado-value option').remove();
						$('#edit-field-cidade-value option').remove();

						// Adiciona a palavra Todos a estado e cidade
                        $('#edit-field-cidade-value').append('<option value>Todos</option>');
						$('#edit-field-estado-value').append('<option value>Todos</option>');

						var estado;
						var cidade;
						var estadoaux;
						var cidadeaux;
						
						
						for(var i = 0; i < localidade.length; i++) {
						    
						if  ((localidade[i]['pais'] == conteudo_pais)  || (conteudo_pais == "Todos" )) {   
								
								//Carrega Estado
								estado = '<option value="' + localidade[i]['estado'] +'">'+localidade[i]['estado'] + '</option>';
								
								if (estado != estadoaux) {
									$('#edit-field-estado-value').append(estado);
									//console.log(localidade[i]['estado'])
								}	
								estadoaux = estado;
															
								//Carrega cidade
								cidade = '<option value="' + localidade[i]['cidade'] +'">'+localidade[i]['cidade'] + '</option>';
								if (cidade != cidadeaux) {
									$('#edit-field-cidade-value').append(cidade);
									//onsole.log(localidade[i]['cidade'])
								}	
								cidadeaux = cidade;
							}	
						}
			          
					});
					
					// TROCA ESTADO
					
					estado.on('change', function() {
						
   						var conteudo_pais = $( "#edit-field-pais-value option:selected" ).text();						
						var conteudo_estado = $( "#edit-field-estado-value option:selected" ).text();
						var conteudo_cidade = $( "#edit-field-cidade-value option:selected" ).text();
						
							$('#edit-field-estado-value option').remove();
							$('#edit-field-cidade-value').append('<option value selected="selected">Todos</option>');
							
							var cidade;
							var cidadeaux;
												
							for(var i = 0; i < localidade.length; i++) {
								
								if  ((localidade[i]['estado'] == conteudo_estado) || (conteudo_estado == "Todos" ) ) {   
								    									
									//Carrega cidade
									cidade = '<option value="' + localidade[i]['cidade'] +'">'+localidade[i]['cidade'] + '</option>';
					
									if ( ( (cidade != cidadeaux) && (conteudo_estado != "Todos" ) ) || 
									     ( (cidade != cidadeaux) && (conteudo_estado == "Todos" ) && (localidade[i]['pais'] == conteudo_pais ) ) ||
										 ( (cidade != cidadeaux) && (conteudo_estado == "Todos" ) && (conteudo_pais == "Todos") ) )
									    {
										$('#edit-field-cidade-value').append(cidade);
									}
							
									cidadeaux = cidade;
								}	
							
							}

					});
			    }	
		}	
	 }
})(jQuery, Drupal, drupalSettings);
