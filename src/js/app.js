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
    const lista_productos = document.getElementById('lista-productos');
    var suma = document.getElementById('suma-total');

    // Extras
    const etiquetas = document.getElementById('etiquetas');
    const camisas = document.getElementById('camisa-evento');

    calcular.addEventListener('click', calcularTotal);

    pase_dia.addEventListener('blur', mostrarDias);
    pase_dosdias.addEventListener('blur',mostrarDias);
    pase_completo.addEventListener('blur',mostrarDias);


    nombre.addEventListener('blur', function (){
      if (this.value == '') {
        errorDiv.style.display="block";
        errorDiv.innerHTML = "Tienes que poner un nombre";
        this.style.border="1px solid red";
        errorDiv.style.border="1px solid red";
      }
    })
    apellido.addEventListener('blur', function (){
        if (this.value == '') {
          errorDiv.style.display="block";
          errorDiv.innerHTML = "Tienes que poner un apellido";
          this.style.border="1px solid red";
          errorDiv.style.border="1px solid red";
        }
      })

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
        const boletosDia = parseInt(pase_dia.value, 10) || 0,
            boletos2Dias = parseInt(pase_dosdias.value, 10) || 0,
            boletoCompleto = parseInt(pase_completo.value) || 0,
            cantCamisas = parseInt(camisas.value) || 0,
            cantEtiquetas = parseInt(etiquetas.value) || 0;
        

        // Total a pagar
        const totalPagar =  (boletosDia * 30) +
                            (boletos2Dias * 45) +
                            (boletoCompleto * 50) +
                            ((cantCamisas * 10) * .93) + // Descuento del 7%
                            (cantEtiquetas * 2);
        console.log(totalPagar);

        const listadoProductos = [];

        // Boletos Evento
        if (boletosDia >= 1) {
            listadoProductos.push('Pases día: ' + boletosDia);
        }
        if (boletos2Dias >= 1) {
            listadoProductos.push('Pases de 2 días: ' + boletos2Dias);
        }
        if (boletoCompleto >= 1) {
            listadoProductos.push('Pases completos: ' + boletoCompleto);
        }

        // Extras: Camiseta, Etiquetas
        if (cantCamisas >= 1) {
            listadoProductos.push('Camisetas Evento: ' + cantCamisas);
        }
        if (cantEtiquetas >= 1) {
            listadoProductos.push('Etiquetas Evento: ' + cantEtiquetas);
        }

        console.log(listadoProductos);

        lista_productos.style.display="block";

        lista_productos.innerHTML = '';
        listadoProductos.forEach(producto => {
            lista_productos.innerHTML += producto + '<br/>';
        });  

        // Total a pagar
        suma.innerHTML = totalPagar.toFixed(2) + '€';


      }
    }

    function mostrarDias() {
        let boletosDia = parseInt(pase_dia.value, 10) || 0,
            boletos2Dias = parseInt(pase_dosdias.value, 10) || 0,
            boletosCompleto = parseInt(pase_completo.value, 10) || 0;

        let diasElegidos = [];

        //aca uso push el profe pero yo preferi igualar para que los pueda ocultar
        if (boletosDia > 0) {
            diasElegidos = ["viernes"];
        }
        if (boletos2Dias > 0) {
            diasElegidos = ["viernes", "sabado"];
        }
        if (boletosCompleto > 0) {
            diasElegidos = ["viernes", "sabado", "domingo"];
        }
        console.log(diasElegidos);
        for (let i = 0; i < diasElegidos.length; i++) {
            document.getElementById(diasElegidos[i]).style.display = "grid";
        }

        //Para ocultar si vuelven a 0
        if (diasElegidos.length < 3) {
            document.getElementById("domingo").style.display = "none";
        }
        if (diasElegidos.length < 2) {
            document.getElementById("sabado").style.display = "none";
        }
        if (diasElegidos.length < 1) {
            document.getElementById("viernes").style.display = "none";
        }
    }
}
