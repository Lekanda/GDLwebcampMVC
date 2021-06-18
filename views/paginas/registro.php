<section class="seccion contenedor">
    <h2>Registro de Usuarios</h2>
    <form id="registro" class="registro" action="registro.html" method="POST">
        <div id="datos-usuario" class="registro caja">
            <fieldset>
                <legend>Datos de Registro</legend>
                <div class="campo">
                    <label for="nombre">Nombre:</label>
                    <input type="text" id="nombre" name="nombre" placeholder="Tu Nombre">
                </div>

                <div class="campo">
                    <label for="apellido">Apellido:</label>
                    <input type="text" id="apellido" name="apellido" placeholder="Tu Apellido">
                </div>

                <div class="campo">
                    <label for="email">Email:</label>
                    <input type="email" id="email" name="email" placeholder="Tu Email">
                </div>
                <div id="error"></div>
            </fieldset>
        </div>
        <div id="paquetes" class="paquetes">
        <h3>Elige el numero de Boletos</h3>
        <ul class="lista-precios clearfix">

          <li>
            <div class="tabla-precio">
              <h3>Pase por día (Viernes)</h3>
              <p class="numero">30€</p>
              <ul>
                <li>Bocadillos Gratis</li>
                <li>Todas las Conferencias</li>
                <li>Todos los Talleres</li>
              </ul>
              <div class="orden">
                <label for="pase_dia">Boletos Deseados:</label>
                <input type="number" min="0" id="pase_dia" size="3">
              </div>
            </div>
          </li>

          <li>
            <div class="tabla-precio">
              <h3>Todos los días</h3>
              <p class="precios numero">50€</p>
              <ul>
                <li>Bocadillos Gratis</li>
                <li>Todas las Conferencias</li>
                <li>Todos los Talleres</li>
              </ul>
              <div class="orden">
                <label for="pase-completo">Boletos Deseados:</label>
                <input type="number" min="0" id="pase-completo" size="3">
              </div>
            </div>
          </li>

          <li>
            <div class="tabla-precio">
              <h3>Pase por 2 días (Viernes y Sabado)</h3>
              <p class="numero">45€</p>
              <ul>
                <li>Bocadillos Gratis</li>
                <li>Todas las Conferencias</li>
                <li>Todos los Talleres</li>
              </ul>
              <div class="orden">
                <label for="pase_dosdias">Boletos Deseados:</label>
                <input type="number" min="0" id="pase_dosdias" size="3">
              </div>
            </div>
          </li>

        </ul>
      </div><!-- Fin Paquetes -->
    </form>
</section>
