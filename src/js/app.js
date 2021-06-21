document.addEventListener('DOMContentLoaded', function() {
    eventListeners();
});


                            
function eventListeners() {
    // console.log("DOM cargado");

    //*** VARIABLES ***
    // Campos Usuario
    const nombre = document.getElementById('nombre');
    const apellido = document.getElementById('apellido');
    const email = document.getElementById('email');

    // Campos Pases
    const pase_dia = document.getElementById('pase_dia');
    const pase_completo = document.getElementById('pase_completo');
    const pase_dosdias = document.getElementById('pase_dosdias');

    // Botones y Divs
    const calcular = document.getElementById('calcular');
    const errorDiv = document.getElementById('error');
    const btnRegistro = document.getElementById('btnRegistro');
    const resultado = document.getElementById('lista-productos');

   
}
