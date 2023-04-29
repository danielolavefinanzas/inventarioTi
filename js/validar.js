
    btn_validar = document.getElementById('submit_index');
    btn_validar.addEventListener('click', validar);
    function validar(a){
        console.log('Haz hecho click en el boton validar',a);
        a.preventDefault();
    }