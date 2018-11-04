
          <h1 class="pt-3">Resumen de Boletas Diario</h1>
          <p>El resumen de boletas se envia por dia. Eso quiere decir que solo se pueden enviar en grupos de boletas generadas en un mismo dia y no se puede mezclar las boletas de otros dias diferentes en un solo envio.</p>
          <h4 class="mt-4">1.- Peticion de archivo Json</h4>
          <p>
            Desde tu aplicacion hacer una peticion del tipo Post a la siguiente direccion <code>http://api.lineysoft.com/doc.php</code>  enviando un JSON con los datos del documento, Ejemplo del una peticion.
          </p>
          <pre class="bg-light">
            <code>
              {
                "emisor_operacion": "generar_resumen_boletas",
                "emisor_id": "1",
                "fecha_emision": "29-10-2018",
                "fecha_generado": "29-10-2018",
                "items": [
                  {
                    "documento_tipo": "03",
                    "documento_serie": "B001",
                    "documento_numero": "16787",
                    "cliente_identificacion_tipo": "1",
                    "cliente_identificacion_numero": "73904305",        
                    "documento_gravada": "165.25",
                    "documento_igv": "29.75",
                    "documento_total": "195.00"
                  },
                  {
                    "documento_tipo": "03",
                    "documento_serie": "B001",
                    "documento_numero": "16788",
                    "cliente_identificacion_tipo": "1",
                    "cliente_identificacion_numero": "73904305",        
                    "documento_gravada": "165.25",
                    "documento_igv": "29.75",
                    "documento_total": "195.00"
                  }

                ]    
              }
            </code>
          </pre>

          <div class="">
            <h5>Tabla de valores Peticion Json - Nota de Débito</h5>
            <p>Estos son los detalles de todos los valores del json de peticion. Donde <strong>M</strong> es mandatorio y <strong>1-7</strong> significa de 1 hasta 7 caracteres.</p>

            <!-- Tabla de Valores Nota Debito -->
            <table class="table table-bordered table-sm">
              <tr>
                <td colspan="4" class="text-center bg-light"><strong>Cabezera</strong></td>
              </tr>
              <!-- Cabezera -->
              <tr class="bg-light">
                <th class="text-center">Atributo</th>
                <th class="text-center">Valores</th>
                <th class="text-center">Requisito</th>
                <th class="text-center">Longitud</th>
              </tr>

              <!-- 1. emisor_operacion -->
              <tr>
                <td class="align-middle text-center bg-light"><strong>1.- emisor_operacion</strong></td>
                <td class="pl-3">
                  <ul>
                    <li>generar_factura</li>
                    <li>generar_boleta</li>
                    <li>generar_nota_credito</li>
                    <li>generar_nota_debito</li>
                    <li>generar_resumen_boletas</li>
                  </ul>                                  
                </td>
                <td class="align-middle text-center">M</td>
                <td class="align-middle text-center">1-25</td>
              </tr>

              <!-- 2. emisor -->
              <tr>
                <td class="align-middle text-center bg-light"><strong>2.- emisor_id</strong></td>
                <td class="pl-3">
                  Id de registo en lineysoft. para obtenerlo conctactar con nosotros.
                </td>
                <td class="align-middle text-center">M</td>
                <td class="align-middle text-center" style="width: 13%;">1-3</td>
              </tr>

              <!-- 3. fecha_emision -->
              <tr>
                <td class="align-middle text-center bg-light"><strong>3.- fecha_emision</strong></td>
                <td class="pl-3">
                  Fecha de emision de las boletas enviadas, ejemplo: <em>25-10-2018</em>
                </td>
                <td class="align-middle text-center">M</td>
                <td class="align-middle text-center" style="width: 13%;">2</td>
              </tr>

              <!-- 4. fecha_generado -->            
              <tr>
                <td class="align-middle text-center bg-light"><strong>4.- fecha_generado</strong></td>
                <td class="pl-3">
                  Fecha del dia generado del resumen (no es la fecha de emision de boletas), ejemplo: <em>30-10-2018</em>
                </td>
                <td class="align-middle text-center">M</td>
                <td class="align-middle text-center" style="width: 13%;">1-4</td>
              </tr>              


              <!-- Titulo items 
                ***********************-->
              <tr class="text-center bg-light">
                <td colspan="4"><strong>Items</strong></td>
              </tr>


              <!-- ITEMS -->
              <!-- 1.- documento_tipo -->
              <tr>
                <td class="align-middle text-center bg-light"><strong>1.- documento_tipo</strong></td>
                <td class="pl-3">
                  Tipo de documento:
                  <ul>
                    <li>01 para Factura Electronica</li>
                    <li>03 para Bolteta Electronica</li>
                    <li>07 para Nota de credito</li>
                    <li>08 para Nota de Debito Electronica.</li>
                  </ul>
                </td>
                <td class="align-middle text-center ">M</td>
                <td class="align-middle text-center">2</td>
              </tr>

              <!-- 2.- documento_serie -->
              <tr>
                <td class="align-middle text-center bg-light"><strong>2.- documento_serie</strong></td>
                <td class="pl-3">                
                  Todas las Boletas y sus notas empiezan empiezan con "B", ejemplo <em>B001, BN01.</em>
                </td>
                <td class="align-middle text-center">O</td>
                <td class="align-middle text-center">1-250</td>
              </tr>

              <!-- 3.- documento_numero -->
              <tr>
                <td class="align-middle text-center bg-light"><strong>3.- documento_numero</strong></td>
                <td class="pl-3">                
                  Numero del documento, Ejemplo: <em>12578, 00012578.</em>
                </td>
                <td class="align-middle text-center">M</td>
                <td class="align-middle text-center">1-8</td>
              </tr>

              <!-- 4.- cliente_identificacion_tipo -->
              <tr>
                <td class="align-middle text-center bg-light"><strong>4.- cliente_identificacion_tipo</strong></td>
                <td class="pl-3">                
                  Tipo de identificacion del cliente:
                  <ul>
                    <li>1 si es DNI</li>
                    <li>6 si es RUC</li>                    
                    <li>4 si es Carnet de Extranjeria</li>
                    <li>7 si es Pasaporte</li>
                </td>
                <td class="align-middle text-center">M</td>
                <td class="align-middle text-center">1</td>
              </tr>

              <!-- 5.- cliente_identificacion_numero -->
              <tr>
                <td class="align-middle text-center bg-light"><strong>5.- cliente_identificacion_numero</strong></td>
                <td class="pl-3">                
                  Numero de identificación del cliente, <em>ejemplo: 42516253 (dni), 10425162531 (ruc)</em>
                </td>
                <td class="align-middle text-center">M</td>
                <td class="align-middle text-center">1-7</td>
              </tr>

              <!-- 6.- documento_gravada -->
              <tr>
                <td class="align-middle text-center bg-light"><strong>6.- documento_gravada</strong></td>
                <td class="pl-3">                
                  Monto total de operaciones gravadas o precio de venta total, ejemplo: <em>625.45</em>
                </td>
                <td class="align-middle text-center">M</td>
                <td class="align-middle text-center">1-7</td>
              </tr>              

              <!-- 7.- documento_igv -->
              <tr>
                <td class="align-middle text-center bg-light"><strong>7.- documento_igv</strong></td>
                <td class="pl-3">                
                  IGV total de la boleta. Ejm 14.95
                </td>
                <td class="align-middle text-center">M</td>
                <td class="align-middle text-center">1-7</td>
              </tr>

              <!-- 8.- documento_total -->
              <tr>
                <td class="align-middle text-center bg-light"><strong>8.- documento_total</strong></td>
                <td class="pl-3">                
                  Total de la boleta, Ejmplo: <em> 195.05</em>
                </td>
                <td class="align-middle text-center">M</td>
                <td class="align-middle text-center">1-7</td>
              </tr>
            </table>

          </div>
          <h4 class="mt-4">2.- Respuesta JSON de la peticion - Resumen Boletas Diario</h4>
          <p>La respuesta es un json, que tendras que recibirlo en la peticion que hicistes.
          en el campo ticket hay un numero que tendras que guardarlo para luego consultar el estado de ese ticket.</p>
          <pre class="bg-light">  
              {
                "estado"      :   "si",
                "ticket"      :   "478921747142547"
              }  
          </pre> 

          <div class="">
            <h5>Tabla de valores Respuesta Json</h5>
            <table class="table table-bordered table-sm">
              <tr>
                <th class="bg-light">Atributo</th>
                <th class="bg-light">Valor</th>
                <th class="bg-light">Requisito</th>
                <th class="bg-light">Longitud</th>
              </tr>
              <tr>
                <td class="bg-light">Estado</td>
                <td>puede tomar los valores <code>si</code> y <code>no</code>.</td>
                <td class="align-middle text-center">M</td>
                <td class="align-middle text-center">2</td>
              </tr>
              <tr>
                <td class="bg-light">ticket</td>
                <td>
                  Cuando envias el resumen de boletas, la sunat te respondera con un numero de ticket, el cual te servira para consultar el estado de aprobacion. que es un codigo que significa que esta aceptado o no.
                </td>
                <td class="align-middle text-center">M</td>
                <td class="align-middle text-center">20</td>
              </tr>
            </table>
          </div> 


          <h4 class="mt-4">3.- Comprobacion del ticket</h4>
          <p>
            El ticket que se genero al enviar tienes que guardarlo para poder consultarlo aqui.
          </p>

          <pre class="bg-light">  
              {
                "emisor_operacion"  :   "generar_comprobacion_resumen_boletas",
                "emisor_id"         :   "1",                
                "ticket"            :   "478921747142547"
              }  
          </pre> 

          <div class="">
            <h5>Tabla de valores Respuesta Json - Comprobacion del ticket</h5>
            <table class="table table-bordered table-sm">
              <tr>
                <th class="bg-light">Atributo</th>
                <th class="bg-light">Valor</th>
                <th class="bg-light">Requisito</th>
                <th class="bg-light">Longitud</th>
              </tr>

              <!-- 1.-emisor_operacion -->
              <tr>
                <td class="bg-light">emisor_operacion</td>
                <td>
                  <ul>
                    <li>generar_factura</li>
                    <li>generar_boleta</li>
                    <li>generar_nota_credito</li>
                    <li>generar_nota_debito</li>
                    <li>generar_resumen_boletas</li>
                    <li>generar_comprobacion_resumen_boletas</li>
                  </ul>
                </td>
                <td class="align-middle text-center">M</td>
                <td class="align-middle text-center">2</td>
              </tr>

              <!-- 2.- emisor_id -->
              <tr>
                <td class="bg-light">emisor_id</td>
                <td>
                  Id de registo en lineysoft. para obtenerlo conctactar con la empresa.
                </td>
                <td class="align-middle text-center">M</td>
                <td class="align-middle text-center">20</td>
              </tr>

              <!-- 3.- ticket -->
              <tr>
                <td class="bg-light">ticket</td>
                <td>
                  El ticket que se genero al enviar el resumen de boletas, tienes que guardarlo para ponerlo aqui.
                </td>
                <td class="align-middle text-center">M</td>
                <td class="align-middle text-center">20</td>
              </tr>
            </table>
          </div> 


          <h4 class="mt-4">3.- Respuesta de Comprobacion del ticket</h4>
          <p>
            Una vez consultado el ticket sunat te respondera con un codigo que representara la aceptacion o error del envio.
          </p>
          <pre class="bg-light">  
              {
                "estado"      :   "si",
                "codigo"      :   "0098"
              }   
          </pre>

          <div class="">
            <h5>Tabla de valores Respuesta Json - Comprobacion del ticket</h5>
            <table class="table table-bordered table-sm">
              <tr>
                <th class="bg-light">Atributo</th>
                <th class="bg-light">Valor</th>
                <th class="bg-light">Requisito</th>
                <th class="bg-light">Longitud</th>
              </tr>
              <tr>
                <td class="bg-light">Estado</td>
                <td>puede tomar los valores <code>si</code> y <code>no</code>.</td>
                <td class="align-middle text-center">M</td>
                <td class="align-middle text-center">2</td>
              </tr>
              <tr>
                <td class="bg-light">codigo</td>
                <td>
                  codigo del estado del resumen de boletas, pueden ser
                  <ul>
                    <li>0 aceptado</li>
                    <li>0098 en proceso</li>
                    <li>0099 procesado con errores</li>
                  </ul>
                </td>
                <td class="align-middle text-center">M</td>
                <td class="align-middle text-center">20</td>
              </tr>
            </table>
          </div> 

