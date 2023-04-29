<?php 
if(isset($_POST['filtrar_busqueda']) ){
    
    $serie_equipo = $_POST['serie_equipo'];
    $marca = $_POST['marca'];
    $modelo = $_POST['modelo'];
    $tipo_equipo = $_POST['tipo_equipo'];
    $id_recinto = $_POST['recinto'];
    $servicio = $_POST['servicio'];
    $recepciona = $_POST['recepciona'];
    $entrega = $_POST['entrega'];

    $consulta = "with filter AS ( SELECT  
                '$serie_equipo' serie_equipo, 
                '$marca' id_marca, 
                '$modelo' id_modelo, 
                '$tipo_equipo' id_tipo_equipo, 
                '$id_recinto' id_recinto, 
                '$servicio' id_servicio, 
                '$recepciona' recepciona,
                '$entrega' entrega
                )
                select equipo.* from equipo, filter
                where
                (
                    ((filter.serie_equipo > 0) and (equipo.id_serie_equipo = filter.serie_equipo)) or 
                    ((filter.serie_equipo = 0) and (equipo.id_serie_equipo > 0))
                )
                and 
                (
                    ((filter.id_marca = 0) and (equipo.id_marca <> 0)) or
                    ((filter.id_marca > 0) and (equipo.id_marca = filter.id_marca))
                )
                and 
                (
                    ((filter.id_modelo = 0) and (equipo.id_modelo <> 0)) or
                    ((filter.id_modelo > 0) and (equipo.id_modelo = filter.id_modelo))
                )
                and 
                (
                    ((filter.id_tipo_equipo = 0) and (equipo.id_tipo_equipo <> 0)) or
                    ((filter.id_tipo_equipo > 0) and (equipo.id_tipo_equipo = filter.id_tipo_equipo))
                )
                and 
                (
                    ((filter.id_recinto = 0) and (equipo.id_recinto <> 0)) or
                    ((filter.id_recinto > 0) and (equipo.id_recinto = filter.id_recinto))
                )
                and 
                (
                    ((filter.id_servicio = 0) and (equipo.id_servicio <> 0)) or
                    ((filter.id_servicio > 0) and (equipo.id_servicio = filter.id_servicio))
                )
                and 
                (
                    ((filter.recepciona = '') and (equipo.recepciona != '')) or
                    ((filter.recepciona != '') and (equipo.recepciona = filter.recepciona))
                )

                and 
                (
                    ((filter.entrega != '') and (equipo.entrega = filter.entrega)) or 
                    ((filter.entrega = '') and (equipo.entrega != ''))
                );";
            }
    

            // else if(isset($_POST['exportar_excel'])){
                
            //     $serie_equipo = $_POST['serie_equipo'];
            //     $marca = $_POST['marca'];
            //     $modelo = $_POST['modelo'];
            //     $tipo_equipo = $_POST['tipo_equipo'];
            //     $id_recinto = $_POST['n_recinto'];
            //     $servicio = $_POST['servicio'];
            //     $recepciona = $_POST['recepciona'];
            //     $entrega = $_POST['entrega'];

            //     $consulta = " with filter AS ( SELECT  
            //     $serie_equipo serie_equipo, 
            //     $marca id_marca, 
            //     $modelo id_modelo, 
            //     $tipo_equipo id_tipo_equipo, 
            //     $id_recinto id_recinto, 
            //     $servicio id_servicio, 
            //     '$recepciona' recepciona,
            //     '$entrega' entrega
            //     )
            //     select equipo.* from equipo, filter
            //     where
            //     (
            //         ((filter.serie_equipo > 0) and (equipo.id_serie_equipo = filter.serie_equipo)) or 
            //         ((filter.serie_equipo = 0) and (equipo.id_serie_equipo > 0))
            //     )
            //     and 
            //     (
            //         ((filter.id_marca = 0) and (equipo.id_marca <> 0)) or
            //         ((filter.id_marca > 0) and (equipo.id_marca = filter.id_marca))
            //     )
            //     and 
            //     (
            //         ((filter.id_modelo = 0) and (equipo.id_modelo <> 0)) or
            //         ((filter.id_modelo > 0) and (equipo.id_modelo = filter.id_modelo))
            //     )
            //     and 
            //     (
            //         ((filter.id_tipo_equipo = 0) and (equipo.id_tipo_equipo <> 0)) or
            //         ((filter.id_tipo_equipo > 0) and (equipo.id_tipo_equipo = filter.id_tipo_equipo))
            //     )
            //     and 
            //     (
            //         ((filter.id_recinto = 0) and (equipo.id_recinto <> 0)) or
            //         ((filter.id_recinto > 0) and (equipo.id_recinto = filter.id_recinto))
            //     )
            //     and 
            //     (
            //         ((filter.id_servicio = 0) and (equipo.id_servicio <> 0)) or
            //         ((filter.id_servicio > 0) and (equipo.id_servicio = filter.id_servicio))
            //     )
            //     and 
            //     (
            //         ((filter.recepciona = '') and (equipo.recepciona != '')) or
            //         ((filter.recepciona != '') and (equipo.recepciona = filter.recepciona))
            //     )

            //     and 
            //     (
            //         ((filter.entrega != '') and (equipo.entrega = filter.entrega)) or 
            //         ((filter.entrega = '') and (equipo.entrega != ''))
            //     );";
            // }
