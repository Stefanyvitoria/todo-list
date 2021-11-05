$(document).ready( //Faz com que o js só seja executado quando todo o DOM estaja pronto.
    function() { //Pesquisar os cursos sem refresh na página
        
        $("#strProduto").keyup(function(){

            var pesquisa = $(this).val();

            //verifica se há algo digitado
            if( pesquisa != '') {
                var dados = {
                    slice : pesquisa
                }
                $.post('buscaprod', dados, function(retorna) {
                    //mostra dentro da tag ul os resultados obtidos 
                    $('.listaProdutos').html(retorna);
                });
            } else {
                $('.listaProdutos').html('');
            }
            
        });
    });