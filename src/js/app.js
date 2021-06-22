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

    // Extras
    const etiquetas = document.getElementById('etiquetas');
    const camisas = document.getElementById('camisa-evento');

    calcular.addEventListener('click', calcularTotal);

    function calcularTotal(e) {
      e.preventDefault();
      // console.log("Has hecho click...");
      // console.log(regalo.value);
      if (regalo.value === '') {
        alert("Debes elegir un regalo");
        regalo.focus();
      }else{
        // console.log('El regalo es ' + regalo.value);
        // console.log(pase_dia.value);
        // console.log(pase_dosdias.value);
        // console.log(pase_completo.value);
        
        // Variables de tipo de entradas
        const boletosDia = pase_dia.value,
            boletos2Dias = pase_dosdias.value,
            boletoCompleto = pase_completo.value,
            cantCamisas = camisas.value,
            cantEtiquetas = etiquetas.value;
        

        // Total a pagar
        const totalPagar =  (boletosDia * 30) +
                            (boletos2Dias * 45) +
                            (boletoCompleto * 50) +
                            ((cantCamisas * 10) * .93) + // Descuento del 7%
                            (cantEtiquetas * 2);
        console.log(totalPagar);

      }
    }
}
