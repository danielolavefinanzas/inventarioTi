<script type="text/javascript"> 
         document.getElementById("btn_editar").addEventListener("click", (e)=>{
            e.preventDefault()
            $.ajax({
                type: "GET",
                url:"../consultas/consultaPorId.php?idEquipo="+183,
                data:"",
                success: function(response){
                    let data = $.parseJSON(response) 
                    document.getElementById("serie_equipo").value = data[0].id_equipo 
                    let marcaChange = document.getElementById("marcas").options.item(2).selected = data[0].nombre_marca;
                    let modeloChange = document.getElementById("modelos").options.item(2).selected = data[0].nombre_modelo;
                    let tipo_equipo = document.querySelector("#tipo_equipo");
                    tipo_equipo.addEventListener('change', () => {
                        let valorOption = tipo_equipo.value;
                        let optionSelect = tipo_equipo.options[tipo_equipo.selectedIndex];
                    })
                    // let lenguaje = tipoChange.value;
                    // document.getSelection("tipo_equipo") = lenguaje; 
                    let recintoChange = document.getElementById("recintos").options.item(2).selected = data[0].ubicacion;
                    let ubicacionChange = document.getElementById("servicios").options.item(2).selected = data[0].nombre_servicio;
                    // let marcaChange = document.getElementById("marcas").value;
                    // let combo = document.getElementById("marcas") ;
                    // let selected = combo.options[combo.selectedIndex].value;
                    //  = data[0].nombre_marca 
                    // let recintoChange = document.getElementById("marcas").options.item(2).selected = data[0].nombre_marca;
                    // let marcaChange = document.getElementById("marcas").options.item(2).selected = data[0].nombre_marca;

                    document.getElementById("entrega").value = data[0].entrega 
                    document.getElementById("recepciona").value = data[0].recepciona 
                    // console.log(data.ID_EQUIPO);
                },
                error:function(error){
                    console.log(error);
                }
            })
         })   
</script>