$(document).ready(function(){
    $("#serie_equipo").keypress(function(event){
        event.preventDefault;
        if(event.which == 13){
            if($("#orden_compra").val()=='' && $("#guia_despacho").val()==''){
                alert("Debe indicar la orden de compra o la guia de despacho")
                return false;
            }
            
            let valor =  $serie_equipo, $orden_compra, $guia_despacho;
                
            if($(this).val()!=''){
                console.log("hola\n");
                $.ajax({
                type: 'POST', 
                url:  'getDatos.php',
                data: "valor=" + valor,
                success: function(response){
                    console.log(response)
                }
                });
                $(this).val(""); 
            }else{
                alert("Debe indicar un valor válido")
            }
            
            $(this).focus();
            return false;
        }
    })
    $(".oc_serie_btn").click(function(event){
        event.preventDefault;
        if(event.which == 13){
            if($("#orden_compra").val()=='' && $("#guia_despacho").val()==''){
                alert("Debe indicar la orden de compra o la guia de despacho")
                return false;
            }
            
            var valor ={
                prueba : 'valor del objeto'
            }
            if($(this).val()!=''){
                console.log("hola\n");
                $.ajax({
                type: 'POST', 
                url:  'getDatos.php',
                data: "valor=" + valor,
                success: function(response){
                    console.log(response)
                }
                });
                $(this).val(""); 
            }else{
                alert("Debe indicar un valor válido")
            }
            
            $(this).focus();
            return false;
        }
    })
})