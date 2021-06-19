<!DOCTYPE html>
<html lang="es">
    <head></head>
    <body>
        <section>
            <div style="background-color:#F6F6F6"> 
              <table width="100%"> 
                <tbody><tr> 
                 <td valign="top" style="padding:0;Margin:0"> 
                  <table style="width:100%"> 
                    <tbody><tr> 
                     <td align="center" style="padding:0;Margin:0"> 
                      <table bgcolor="#ffffff"> 
                        <tbody><tr> 
                         <td align="left" style="Margin:0;padding-top:20px;padding-bottom:20px;padding-left:20px;padding-right:20px"> 
                          <table cellpadding="0" cellspacing="0" width="100%" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px"> 
                            <tbody><tr> 
                             <td align="center" valign="top" style="padding:0;Margin:0;width:560px"> 
                              <table cellpadding="0" cellspacing="0" width="100%" role="presentation" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px"> 
                                <tbody><tr> 
                                 <td al="" ign="center" style="padding-bottom:15px" align="center"><h2></h2></td> 
                                </tr> 
                                <tr> 
                                 <td align="center"><img class="" src="https://ppgujj.stripocdn.email/content/guids/CABINET_cb17faf79a04ced871d05d750d0716fc/images/2821623604677424.png" alt="" width="560"></td> 
                                </tr> 
                                <tr> 
                                 <td align="left" style="padding-top:20px"><p><em><strong>Nombre: </strong> {{$contacto['nombre']}}<br>
                                  
                                  <br><strong>Numero de Telefono: </strong> {{$contacto['telefono']}}<br>
                                  @error('telefono')
                                      <p><strong>{{$message}}</strong></p>
                                  @enderror
                                  
                                  <br><strong>Correo: </strong> {{$contacto['correo']}}</em><br></p></td> 
                                  @error('correo')
                                      <p><strong>{{$message}}</strong></p>
                                  @enderror
                                </tr>  
                                <tr> 
                                 <td align="left" style="padding-top:20px"><p><strong> Mensaje: </strong> </strong> {{$contacto['mensaje']}}<br>

                                  @error('mensaje')
                                      <p><strong>{{$message}}</strong></p>
                                  @enderror
                                
                                
                                
                                </p></td> 
                                </tr> 
                              </tbody></table></td> 
                            </tr> 
                          </tbody></table></td> 
                        </tr> 
                      </tbody></table></td> 
                    </tr> 
                  </tbody></table> 
                  <table style="width:100%;background-color:transparent;background-repeat:repeat;background-position:center top"> 
                    <tbody><tr> 
                     <td> 
                      <table style="background-color:transparent;width:600px" align="center"> 
                        <tbody><tr> 
                         <td> 
                          <table width="100%"> 
                            <tbody><tr>
                             <td> 
                              <table width="100%"> 
                                <tbody><tr> 
                                 <td align="center" style="padding:20px;Margin:0;font-size:0"> 
                                  <table height="100%" width="75%"> 
                                    <tbody><tr> 
                                     <td style="border-bottom:1px solid #CCCCCC"></td> 
                                    </tr> 
                                  </tbody></table></td></tr> 
                                <tr> 
                                 <td align="center" style="padding:0;Margin:0;padding-top:10px;padding-bottom:10px">
                                   <p style="Margin:0;-webkit-text-size-adjust:none;-ms-text-size-adjust:none;mso-line-height-rule:exactly;font-family:arial, 'helvetica neue', helvetica, sans-serif;line-height:17px;color:#333333;font-size:11px">
                                   JORROFADI INSTALACIONES Y PROYECTOS S.A DE C.V., CANCÚN, QUINTANA ROO,
                                   <br>TEL CELULAR 044 (998) 1022645</p></td> 
                                </tr> 
                                <tr> 
                                 <td align="center" style="padding-top:10px;padding-bottom:10px"><p style="-webkit-text-size-adjust:none;-ms-text-size-adjust:none;mso-line-height-rule:exactly;font-family:arial, 'helvetica neue', helvetica, sans-serif;line-height:17px;color:#333333;font-size:11px">
                                   © 2021 JORROFADI INSTALACIONES Y PROYECTOS S.A DE C.V.</p></td> 
                                </tr> 
                              </tbody></table></td> 
                            </tr> 
                          </tbody></table></td> 
                        </tr> 
                      </tbody></table></td> 
                    </tr> 
                  </tbody></table> 
                  <table style="width:100%"> 
                    <tbody><tr> 
                     <td> 
                      <table align="center"> 
                        <tbody><tr> 
                         <td style="padding-left:20px;padding-right:20px;padding-bottom:30px"> 
                          <table> 
                            <tbody><tr> 
                             <td> 
                              <table> 
                                <tbody><tr> 
                                 <td><a><img src="https://ppgujj.stripocdn.email/content/guids/CABINET_cb17faf79a04ced871d05d750d0716fc/images/2821623604677424.png" alt="" width="125"></a></td> 
                                </tr> 
                              </tbody></table></td> 
                            </tr> 
                          </tbody></table></td> 
                        </tr> 
                      </tbody></table></td> 
                    </tr> 
                  </tbody></table></td> 
                </tr> 
              </tbody></table> 
             </div>
          </section>
    </body>
</html>






























{{-- 
<body>
    <h1> Enviando correos con laravel</h1>
    
    <p> <strong>Nombre: </strong> {{$contacto['nombre']}}</p>
    <p> <strong>Numero de Telefono: </strong> {{$contacto['numerotelefono']}}</p>
    <p> <strong>Correo: </strong> {{$contacto['correo']}}</p>
    <p> <strong>Mensaje: </strong> {{$contacto['mensaje']}}</p>
</body>
</html>
 --}}
