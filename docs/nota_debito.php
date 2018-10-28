
          <h1 class="pt-3">Nota Débito Electrónica</h1>
          <h4 class="mt-4">1.- Peticion de archivo Json</h4>
          <p>
            Desde tu aplicacion hacer una peticion del tipo Post a la siguiente direccion <code>http://api.lineysoft.com/doc.php</code>  enviando un JSON con los datos de tu factura o documento. Ejemplo del una peticion.
          </p>
          <pre class="bg-light">
            <code>
              {
                "emisor_operacion": "generar_nota_debito",
                "emisor_id": "4",      
                "documento_tipo": "08",
                "documento_serie": "FND1",
                "documento_numero": "123",      
                "documento_fecha_emision": "15-10-2018",
                "documento_moneda": "PEN",
                "documento_afectado_tipo": "01",
                "documento_afectado_serie": "F001",
                "documento_afectado_numero": "111",
                "documento_motivo": "Ampliación garantía de memoria DDR-3 B1333 Kingston",      
                "documento_igv": "36.00",
                "documento_gravada": "200.00",
                "documento_total": "236.00",
                "documento_total_letras": "SON DOSCIENTOS TREINTA Y SEIS CON 00/100 SOLES",
                "cliente_identificacion_tipo": "6",
                "cliente_identificacion_numero": "10425162531",          
                "cliente_razon": "TU CLIENTE SAC",
                "cliente_direccion": "JR. NIQUEL MZA. F LOTE. 3 URB.  INDUSTRIAL INFANTAS - LIMA - LIMA -PERU",
                "documento_observaciones": "Los objetos de esta factura son delicados y pago al contado",
                "items": [
                  {
                    "unidad_medida": "NIU",
                    "cantidad": "2",          
                    "precio_unitario_sin_igv": "50.00",
                    "precio_unitario_con_igv": "9.00",
                    "precio_venta": "200.00",
                    "igv": "36.00",
                    "descripcion": "Ampliación de garantía de 6 a 12 meses de Memoria",
                    "codigo": "C023"
                  },
                  {
                    "unidad_medida": "NIU",
                    "cantidad": "2",          
                    "precio_unitario_sin_igv": "50.00",
                    "precio_unitario_con_igv": "9.00",
                    "precio_venta": "200.00",
                    "igv": "36.00",
                    "descripcion": "Ampliación de garantía de 6 a 12 meses de Memoria",
                    "codigo": "C024"
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

              <!-- 1. tipo_de_comprobante -->
              <tr>
                <td class="align-middle text-center bg-light"><strong>1.- emisor_operacion</strong></td>
                <td class="pl-3">
                  <ul>
                    <li>generar_factura</li>
                    <li>generar_boleta</li>
                    <li>generar_nota_credito</li>
                    <li>generar_nota_debito</li>
                  </ul>                                  
                </td>
                <td class="align-middle text-center">M</td>
                <td class="align-middle text-center">1-25</td>
              </tr>

              <!-- 2. emisor -->
              <tr>
                <td class="align-middle text-center bg-light"><strong>2.- emisor_id</strong></td>
                <td class="pl-3">
                  Id de registo en lineysoft. para obtenerlo conctactar con la empresa.
                </td>
                <td class="align-middle text-center">M</td>
                <td class="align-middle text-center" style="width: 13%;">1-3</td>
              </tr>

              <!-- 3. tipo -->
              <tr>
                <td class="align-middle text-center bg-light"><strong>3.- documento_tipo</strong></td>
                <td class="pl-3">
                  Tipo de documento:
                  <ul>
                    <li>01 para Factura Electronica</li>
                    <li>03 para Bolteta Electronica</li>
                    <li>07 para Nota de credito</li>
                    <li>08 para Nota de Debito Electronica.</li>
                  </ul>
                </td>
                <td class="align-middle text-center">M</td>
                <td class="align-middle text-center" style="width: 13%;">2</td>
              </tr>

              <!-- 4. serie -->            
              <tr>
                <td class="align-middle text-center bg-light"><strong>4.- documento_serie</strong></td>
                <td class="pl-3">
                  Todas las facturas y sus notas empiezan empiezan con "F" y todas las boletas y sus notas empiezan con "B", ejemplo F001, B001.
                </td>
                <td class="align-middle text-center">M</td>
                <td class="align-middle text-center" style="width: 13%;">1-4</td>
              </tr>
             

              <!-- 5.- numero -->
              <tr>
                <td class="align-middle text-center bg-light"><strong>5.- documento_numero</strong></td>
                <td class="pl-3">                
                  Numero del documento, Ejemplo: 12578, 00001457.
                </td>
                <td class="align-middle text-center">M</td>
                <td class="align-middle text-center">1-8</td>
              </tr>

              <!-- 6.- fecha -->
              <tr>
                <td class="align-middle text-center bg-light"><strong>6.- documento_fecha_emision</strong></td>
                <td class="pl-3">                
                  Fecha de emision del documento, Ejemplo: 27-10-2018
                </td>
                <td class="align-middle text-center">M</td>
                <td class="align-middle text-center">10</td>
              </tr>

              <!-- 7.- cliente_direccion -->
              <tr>
                <td class="align-middle text-center bg-light"><strong>7.- documento_moneda</strong></td>
                <td class="pl-3">                
                  Tipo de moneda:
                  <ul>
                    <li>PEN para soles</li>
                    <li>USD para dolares</li>
                    <li>EUR para Euros</li>
                  </ul>
                </td>
                <td class="align-middle text-center">M</td>
                <td class="align-middle text-center">3</td>
              </tr>

              <!-- 9.- fecha_de_emision -->
              <tr>
                <td class="align-middle text-center bg-light"><strong>8.- documento_igv</strong></td>
                <td class="pl-3">                
                  IGV total del documento, Ejemplo: 230.56
                </td>
                <td class="align-middle text-center">M</td>
                <td class="align-middle text-center">1-9</td>
              </tr>            

              <!-- 10.- moneda -->
              <tr>
                <td class="align-middle text-center bg-light"><strong>9.- documento_gravada</strong></td>
                <td class="pl-3">                
                  Monto total de operaciones gravadas o precio de venta total, ejemplo: 625.45
                </td>
                <td class="align-middle text-center">M</td>
                <td class="align-middle text-center">1-9</td>
              </tr>
              
              <!-- 11.- total -->
              <tr>
                <td class="align-middle text-center bg-light"><strong>10.- documento_total</strong></td>
                <td class="pl-3">                
                  Monto Total del documento, Ejemplo: 1305.05
                </td>
                <td class="align-middle text-center">M</td>
                <td class="align-middle text-center">1-9</td>
              </tr>

              <!-- 11.- observaciones -->
              <tr>
                <td class="align-middle text-center bg-light"><strong>11.- documento_total_letras</strong></td>
                <td class="pl-3">                
                  Monto Total escrito en letras, ejemplo: SON CIENTO DIECIOCHO CON 00/100 SOLES.
                </td>
                <td class="align-middle text-center">M</td>
                <td class="align-middle text-center">1-1000</td>
              </tr>

              <!-- 12.- observaciones -->
              <tr>
                <td class="align-middle text-center bg-light"><strong>12.- documento_observaciones</strong></td>
                <td class="pl-3">                
                  Nota o alguna observacion con respecto al documento, ejemplo: la factura esta sujeta a cambios posteriores.
                </td>
                <td class="align-middle text-center">O</td>
                <td class="align-middle text-center">1-1000</td>
              </tr>

              <!-- 13.- observaciones -->
              <tr>
                <td class="align-middle text-center bg-light"><strong>13.- cliente_identificacion_tipo</strong></td>
                <td class="pl-3">    
                  Tipo de identificacion del cliente:
                  <ul>
                    <li>6 si es RUC</li>
                    <li>1 si es DNI</li>
                    <li>4 si es Carnet de Extranjeria</li>
                    <li>7 si es Pasaporte</li>
                  </ul>
                  <em>Solo se puede emitir facturas si el cliente cuenta con RUC, en todos los demas casos es boleta.</em>
                </td>
                <td class="align-middle text-center">M</td>
                <td class="align-middle text-center">1</td>
              </tr>

              <!-- 14.- observaciones -->
              <tr>
                <td class="align-middle text-center bg-light"><strong>14.- cliente_identificacion_numero</strong></td>
                <td class="pl-3">                
                  Numero de identificación del cliente, <em>ejemplo: 42516253 (dni), 10425162531 (ruc)</em>
                </td>
                <td class="align-middle text-center">M</td>
                <td class="align-middle text-center">1-15</td>
              </tr>

              <!-- 15.- observaciones -->
              <tr>
                <td class="align-middle text-center bg-light"><strong>15.- cliente_razon</strong></td>
                <td class="pl-3">                
                  Razon social o nombre del cliente, ejemplo: <em>Software S.R.L.</em>
                </td>
                <td class="align-middle text-center">M</td>
                <td class="align-middle text-center">1-255</td>
              </tr>

              <!-- 16.- Direccion -->
              <tr>
                <td class="align-middle text-center bg-light"><strong>16.- cliente_direccion</strong></td>
                <td class="pl-3">                
                  Direccion del cliente, ejemplo: <em>Av. Jiron de la union nro 458.</em>
                </td>
                <td class="align-middle text-center">O</td>
                <td class="align-middle text-center">1-255</td>
              </tr>


              <!-- Titulo items 
                ***********************-->
              <tr class="text-center bg-light">
                <td colspan="4"><strong>Items</strong></td>
              </tr>


              <!-- ITEMS -->
              <!-- 1.- unidad_de_medida -->
              <tr>
                <td class="align-middle text-center bg-light"><strong>1.- unidad_de_medida</strong></td>
                <td class="pl-3">
                  <ul>
                    <li>NIU = PRODUCTO</li>
                    <li>ZZ = SERVICIO</li>
                  </ul>                     
                </td>
                <td class="align-middle text-center ">M</td>
                <td class="align-middle text-center">2</td>
              </tr>

              <!-- 2.- codigo -->
              <tr>
                <td class="align-middle text-center bg-light"><strong>2.- codigo</strong></td>
                <td class="pl-3">                
                  Código interno del producto o servicio, asignado por ti. Ejemplo: <em>C001</em>
                </td>
                <td class="align-middle text-center">O</td>
                <td class="align-middle text-center">1-250</td>
              </tr>

              <!-- 3.- descripcion -->
              <tr>
                <td class="align-middle text-center bg-light"><strong>3.- descripcion</strong></td>
                <td class="pl-3">                
                  Descripción del producto o servicio. Ejemplo: <em>SERVICIO DE REPARACIÓN DE PC, ETC.</em>
                </td>
                <td class="align-middle text-center">M</td>
                <td class="align-middle text-center">1-250</td>
              </tr>

              <!-- 4.- cantidad -->
              <tr>
                <td class="align-middle text-center bg-light"><strong>4.- cantidad</strong></td>
                <td class="pl-3">                
                  Cantidad de elementos del producto o servicio, Ejemplo: <em>5</em>
                </td>
                <td class="align-middle text-center">M</td>
                <td class="align-middle text-center">1-7</td>
              </tr>

              <!-- 5.- valor_unitario -->
              <tr>
                <td class="align-middle text-center bg-light"><strong>5.- precio_unitario_sin_igv</strong></td>
                <td class="pl-3">                
                  precio unitario Sin IGV. Ejemplo: 80.21
                </td>
                <td class="align-middle text-center">M</td>
                <td class="align-middle text-center">1-7</td>
              </tr>

              <!-- 6.- valor_unitario -->
              <tr>
                <td class="align-middle text-center bg-light"><strong>6.- precio_unitario_con_igv</strong></td>
                <td class="pl-3">                
                  precio unitario Con IGV. Ejemplo: 90.21
                </td>
                <td class="align-middle text-center">M</td>
                <td class="align-middle text-center">1-7</td>
              </tr>              

              <!-- 7.- IGV -->
              <tr>
                <td class="align-middle text-center bg-light"><strong>7.- IGV</strong></td>
                <td class="pl-3">                
                  IGV total de linea por item total. Ejm 14.95
                </td>
                <td class="align-middle text-center">M</td>
                <td class="align-middle text-center">1-7</td>
              </tr>

              <!-- 8.- Precio Venta -->
              <tr>
                <td class="align-middle text-center bg-light"><strong>8.- precio_venta</strong></td>
                <td class="pl-3">                
                  Resultado de: precio_unitario * cantidad - descuento. Ejmp 83.05
                </td>
                <td class="align-middle text-center">M</td>
                <td class="align-middle text-center">1-7</td>
              </tr>
            </table>

          </div>
          <h4 class="mt-4">2.- Respuesta JSON de la peticion - Nota de Débito</h4>
          <p>La respuesta es un json, que tendras que recibirlo en la peticion que hicistes.</p>
          <pre class="bg-light">  
              {
                "estado"  : "si",
                "pdf"     : " JVBERi0xLjcKJeLjz9MKNyAwIG9iago8PCAvVHlwZSAvUGFnZSAvUGFyZW50IDEgMCBSIC9MYXN0TW9
                              kaWZpZWQgKEQ6MjAxODEwMDgxMTU4NDctMDQnMDAnKSAvUmVzb3VyY2VzIDIgMCBSIC9NZWRpYUJveC
                              BbMC4wMDAwMDAgMC4wMD
                            "
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
                <td class="bg-light">pdf</td>
                <td>
                  Esta respuesta es una mensaje codificado en base 64 y contiene el PDF para imprimir al cliente. <br>
                  Para usarlo hay que decodificarlo en base 64 y escribirlo con extension ".pdf"</td>
                <td class="align-middle text-center">M</td>
                <td class="align-middle text-center">3 mil</td>
              </tr>
            </table>
          </div> 