<!DOCTYPE html>
<html lang="en-US" class="scheme_original">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="format-detection" content="telephone=no">
    <title>Productos - Fernanda Campillo – Wedding & Event Planner</title>
    <link rel="icon" type="image/x-icon" href="images/logo30x30.png" />
    <link property="stylesheet" rel='stylesheet' href='css/fontello/css/fontello.css' type='text/css' media='all' />
    <link property="stylesheet" rel='stylesheet' href='css/style.css' type='text/css' media='all' />
    <link property="stylesheet" rel='stylesheet' href='css/template.shortcodes.css' type='text/css' media='all' />
    <link property="stylesheet" rel='stylesheet' href='css/template.css' type='text/css' media='all' />
    <link property="stylesheet" rel='stylesheet' href='css/core.animation.css' type='text/css' media='all' />
    <link property="stylesheet" rel='stylesheet' href='js/vendor/magnific/magnific-popup.css' type='text/css' media='all' />
    <link property="stylesheet" rel='stylesheet' href='js/vendor/woocommerce/assets/css/woocommerce-smallscreen.css' type='text/css' media='only screen and (max-width: 768px)' />
    <link property="stylesheet" rel='stylesheet' href='js/vendor/woocommerce/assets/css/woocommerce-layout.css' type='text/css' media='all' />
    <link property="stylesheet" rel='stylesheet' href='js/vendor/woocommerce/assets/css/woocommerce.css' type='text/css' media='all' />
    <link property="stylesheet" rel='stylesheet' href='js/vendor/woocommerce/assets/css/plugin.woocommerce.css' type='text/css' media='all' />
    <link property="stylesheet" rel='stylesheet' href='js/vendor/essential-grid/public/assets/css/lightbox.css' type='text/css' media='all' />
    <link property="stylesheet" rel='stylesheet' href='js/vendor/essential-grid/public/assets/css/settings.css' type='text/css' media='all' />
    <link property="stylesheet" rel='stylesheet' href='js/vendor/revslider/public/assets/css/settings.css' type='text/css' media='all' />
    <link property="stylesheet" rel='stylesheet' href='js/vendor/swiper/swiper.css' type='text/css' media='all' /> 
    <link property="stylesheet" rel='stylesheet' href='js/vendor/mediaelement/mediaelementplayer.min.css' type='text/css' media='all' />
    <link property="stylesheet" rel='stylesheet' href='js/vendor/mediaelement/wp-mediaelement.css' type='text/css' media='all' />
    <link property="stylesheet" rel='stylesheet' href='css/responsive.css' type='text/css' media='all' /> 
    <link rel="stylesheet" href="fw/css/font-awesome.css"></link>
    <link property="stylesheet" rel='stylesheet' href='css/bootstrap.min.css' type='text/css' media='all' />
    <script type="text/javascript" src="js/fns.js"></script>
</head>

<style type="text/css">

        .overlay 
    {
      position: fixed;
      top: 0;
      bottom: 0;
      left: 0;
      right: 0;
      background: rgba(255, 255, 255, 0.8);
      transition: opacity 500ms;
      visibility: hidden;
      opacity: 0;
      z-index: 10000;
    }

    .overlay:target 
    {
      visibility: visible;
      opacity: 1;
    }

    .popup 
    {
      margin: 70px auto 5px auto;
      padding: 15px;
      background: #fff;
      border-radius: 0px;
      width: 375px;
      position: relative;
      transition: all 5s ease-in-out;
      border-style: solid;
      border-width: 1px;
      border-color: #88ccca;
      color: #88ccca;
    }

    .popup .close 
    {
      margin-top: 0px;
      position: absolute;
      top: 3px;
      right: 10px;
      transition: all 200ms;
      font-size: 20px;
      font-weight: bold;
      text-decoration: none;
      color: #88ccca;
    }

    .popup .close:hover 
    {
      color: #a3ad6f;
    }

    .scheme_original input[type="text"],
    .scheme_original input[type="tel"],
    .scheme_original input[type="number"],
    .scheme_original input[type="email"],
    .scheme_original input[type="date"]
    {
      border-color: #88ccca;
      border-width: 2px;
      max-width: 150px;
    }

    .scheme_original textarea
    {
      border-color: #88ccca;
      border-width: 2px;
      width: 300px;
      min-height: 1em;
    }

    .scheme_original button:hover, .scheme_original .sc_button.sc_button_style_filled:hover {
    background-color: #fff;
}

    p
    {
      font-size: 18px;
    }

  .msjok
    {
    /*color: #cbb9a6;*/
    font-size: large;
    }

.esvisible
    {
    display: inherit;   
    }

.novisible
    {
    display: none;    
    }

</style>     
<script type="text/javascript">
            function isNumberKey(evt)
                {
                var charCode = (evt.which) ? evt.which : event.keyCode
                
                //alert(charCode);
                //if (charCode == 45)
                //      return true;
                
                if (charCode > 31 && (charCode < 48 || charCode > 57))
                    return false;
                return true;
                }
            

            function go()
                {
                validacion_email = /^[a-zA-Z0-9_\.\-]+@[a-zA-Z0-9\-]+\.[a-zA-Z0-9\-\.]+$/;
                if(document.edicion.nombre.value=="")
                    {
                     alert('falta tu nombre');
                    document.edicion.nombre.focus();
                    return 0;
                    }
                if(document.edicion.email.value=="")
                    {
                    alert('falta tu E-mail');
                    document.edicion.email.focus();
                    return 0;
                    }

                if(!validacion_email.test(document.edicion.email.value))
                    {
                    alert('el correo debe ser válido');
                    document.edicion.email.focus();
                    return 0;
                    }

                
                if(document.edicion.quenecesitas.value=="")
                    {
                    alert('falta las piezas que necesitas');
                    document.edicion.quenecesitas.focus();
                    return 0;
                    }
                
               

                document.getElementById("divboton").className="novisible";
                document.getElementById("divmsj").className="esvisible";
                var datos = 'nombre='+ document.edicion.nombre.value + '&apellidos='+document.edicion.apellidos.value+'&telefono=' + document.edicion.telefono.value + '&email=' + document.edicion.email.value + '&quenecesitas='+document.edicion.quenecesitas.value;
                             
                conexion1=crearXMLHttpRequest();
                conexion1.onreadystatechange = proresultado;
                conexion1.open("GET", "include/contact-form-agenda.php?"+datos, true);
                conexion1.send(null);
                }

            function proresultado()
                {
                  if(conexion1.readyState == 4)
                      {
                     // alert (conexion1.responseText);
                        if(Left(conexion1.responseText,5)=="ERROR")
                            alert (conexion1.responseText);
                        else
                            {
                            //alert(conexion1.responseText);   
                            document.edicion.nombre.value="";
                            document.edicion.apellidos.value="";
                            document.edicion.telefono.value="";
                            document.edicion.email.value="";                           
                            document.edicion.quenecesitas.value="";                          
                            document.getElementById("divmsj").className ="esvisible msjok"; 
                            document.getElementById("divmsj").innerHTML="Gracias.<br>Nos pondremos en contacto contigo pronto";
                            
                            }
                        }
                }
            function botonback()
                {
                document.getElementById("divmsj").className ="novisible"; 
                document.getElementById("divmsj").innerHTML="<i class='fa fa-refresh fa-spin fa-2x'></i>";
                document.getElementById("divboton").className="esvisible";  
                }
        </script>
<body class="single single-product woocommerce woocommerce-page">

    <?php  include("sliderbar.php"); ?>
    <?php  
        $menu="agenda";
        include("navbar.php");
    ?>
        
    <div class="page_content_wrap page_paddings_yes">
        <div class="sc_services_wrap">
            <div class="sc_services sc_services_style_services-1 sc_services_type_images  margin_top_tiny- margin_bottom_large full-width" style="text-align: center;">
                <img src="images/titu7.png" style="width: auto; margin-bottom: 0px; margin-top: 40px;">
            </div>    
            <div class="content_wrap">
                <div class="content">
                    <!--.post_item .post_item_single .page .type-page -->
                    <article class="post_item post_item_single page type-page">
                        <!--.post_content-->
                        <div class="post_content">
                            <section class="no-col-padding">
                                <div class="content_container">
                                    <div class="columns_wrap">
                                        <div class="column_container column-1_1">
                                            <div class="column-inner">
                                                <div class="m_wrapper">
                                                    <!--.sc_services_wrap -->
                                                    <div class="sc_services_wrap">
                                                        <!-- .sc_services -->
                                                        <div class="sc_services sc_services_style_services-1 sc_services_type_images  margin_top_tiny- margin_bottom_large full-width">
                                                            <div class="sc_columns columns_wrap">
                                                                <div class="column-1_2 column_padding_bottom">
                                                                    <div class="sc_services_item odd first">
                                                                        <div class="sc_services_item_featured post_featured">
                                                                            <div class="post_thumb">
                                                                                <img class="post-image" src="images/agenda1.jpg">
                                                                            </div>
                                                                        </div>
                                                                        <div class="sc_services_item_content">
                                                                            <p style="color: #88ccca">
                                                                              Este planeador te servirá de apoyo para que consideres y plasmes cada detalle en la organización de tu boda. Queremos que en este día tan especial vivas cada momento y todo salga como lo soñaste.
                                                                            </p>
                                                                            <p style="color: #88ccca">
                                                                              Esta libreta está pensada 100% en ti, novia, que con las prisas y el estrés muchas veces olvidas detalles pequeños que pueden ser importantes para ese día.
                                                                            </p>
                                                                            <p>
                                                                              Incluye:<br>
                                                                              Una sección de preguntas básicas previas a la organización.<br>
                                                                              Checklist de todas las cosas importantes y necesarias.<br>
                                                                              Checklist desde 12 meses previos al gran día.<br> 
                                                                              Un calendario atemporal para que definas tus citas con proveedores, pagos, etc.<br>
                                                                              Lista de invitados.<br>
                                                                              Tabla de presupuesto.<br> 
                                                                              Tips para ese gran día.<br>
                                                                            </p>  
                                                                        </div>
                                                                    </div>
                                                                </div><div class="column-1_2 column_padding_bottom">
                                                                    <div class="sc_services_item even">
                                                                        <div class="sc_services_item_featured post_featured">
                                                                            <div class="post_thumb">
                                                                                <img class="post-image" alt="Wedding Planning" src="images/agenda2copia.jpg">
                                                                            </div>
                                                                        </div>
                                                                        <div class="sc_services_item_content">
                                                                            <p>
                                                                              Descripción:<br>
                                                                              15.5 x 20.5 cm.<br>
                                                                              Pastas rígidas forradas en terminado mate.<br>
                                                                              Páginas interiores en papel bond 120 gramos.<br>
                                                                              Hojas para notas.<br>
                                                                              Espiral metálico.<br>
                                                                              Una bolsita "DRAMA" de manta para guardar tu agenda durante todo tu año, y no se te ensucie ni maltrate.<br>
                                                                              Un sobre al principio para guardar papeles y notas importantes.<br> 
                                                                              Encuadernada para darle protección y durabilidad, lleva el estilo a todas partes.
                                                                            </p> 
                                                                            <p style="color: #88ccca">Si te interesa adquirir la agenda</p>
                                                                            <p>
                                                                              Para transferencia o depósito:<br>
                                                                               &nbsp; Número de cuenta: 1600426105<br>
                                                                               &nbsp; CLABE: 042180016004261050<br>
                                                                              Banco Mifel a nombre de Mexout Events S.A. de C.V.
                                                                            <p>
                                                                              $450.00
                                                                            </p>
                                                                            <a href="#presupuesto" class="sc_button sc_button_square sc_button_size_small" style="border-style: solid; border-width: 2px;">Pedir Presupuesto</a>
                                                                            <div id="presupuesto" class="overlay">
                                                                              <form data-formtype="form_1" method="post" name="edicion" target="_self">
                                                                                <div class="popup">
                                                                                    <a class="close" href="#" onclick="botonback();">&times;</a>
                                                                                    <p align="left"><img src="images/titulos-08.png" style="width: 300px;"></p>
                                                                                    <div class="content" style="text-align: center;"> 

                                                                                        <div class="row">
                                                                                            <div class="column-1_1">
                                                                                                <table width="99%">
                                                                                                    <tr>
                                                                                                        <td><input type="text" name="nombre" aria-required></td>
                                                                                                        <td><input type="text" name="apellidos" required></td>
                                                                                                    </tr>
                                                                                                    <tr>
                                                                                                        <td style="text-align: left;"> &nbsp; &nbsp; NOMBRE</td>
                                                                                                        <td style="text-align: left;"> &nbsp; &nbsp; APELLIDOS</td>
                                                                                                    </tr>
                                                                                                </table>
                                                                                            </div>
                                                                                        </div>

                                                                                        <div class="row">
                                                                                            <div class="column-1_1">
                                                                                                <table width="99%">
                                                                                                    <tr>
                                                                                                        <td><input type="tel" name="telefono"></td>
                                                                                                        <td><input type="email" name="email" required></td>
                                                                                                    </tr>
                                                                                                    <tr>
                                                                                                        <td style="text-align: left;"> &nbsp; &nbsp; TELÉFONO</td>
                                                                                                        <td style="text-align: left;"> &nbsp; &nbsp; E-MAIL</td>
                                                                                                    </tr>
                                                                                                </table>
                                                                                            </div>
                                                                                        </div>

                                                                                        <div class="row">
                                                                                            <div class="column-1_1">
                                                                                                <table width="99%">
                                                                                                    <tr>
                                                                                                        <td>&nbsp;&nbsp;</td>
                                                                                                    </tr>
                                                                                                </table>
                                                                                            </div>
                                                                                        </div>

                                                                                        <div class="row">
                                                                                            <div class="column-1_1">
                                                                                                <table width="99%">
                                                                                                    <tr>
                                                                                                        <td align="left"> &nbsp; &nbsp; ¿CUÁNTAS PIEZAS REQUIERES?</td>
                                                                                                    </tr>
                                                                                                </table>
                                                                                            </div>
                                                                                            <div class="column-1_1">
                                                                                                <table width="99%">
                                                                                                    <tr>      
                                                                                                        <td><textarea type="text" name="quenecesitas"></textarea></td>
                                                                                                    </tr>  
                                                                                                </table>
                                                                                            </div>
                                                                                        </div>

                                                                                        <br>
                                                                                        <div id="divmsj" class="novisible">
                                                                                            <i class='fa fa-refresh fa-spin fa-2x'></i>
                                                                                        </div>
                                                                                        <div id="divboton">
                                                                                           <button type="button" onclick="go();" class="sc_button sc_button_square sc_button_size_small" style="border-style: solid; border-width: 2px; line-height: 0.2857em; color: #cbb9a6; background-color: #fff" >Enviar</button>
                                                                                        </div>

                                                                                        <!--

                                                                                        <a type="submit" class="sc_button sc_button_square sc_button_size_small" style="border-style: solid; border-width: 2px; line-height: 0.2857em;">Enviar</a>-->
                                                                                    </div>
                                                                                </div>
                                                                              </form>


                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!-- end .sc_services -->
                                                    </div>
                                                    <!-- end .sc_services_wrap -->
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                 </div> 
                            </section>                            
                        </div>
                        <!--end .post_content-->
                    </article>
                    <!--  end .post_item .post_item_single .page .type-page -->
                </div>
                <!--end .content-->
            </div>
        </div>
    </div>    
    
    <footer class="footer_wrap widget_area scheme_original">
        <?php require("footer.php"); ?>
    </footer>

    <a href="#" class="scroll_to_top icon-up" title="Scroll to top"></a>
 
    <script type='text/javascript' src='js/vendor/jquery-3.1.1.js'></script>
    <script type='text/javascript' src='js/vendor/jquery-migrate.min.js'></script>
    <script type='text/javascript' src='js/vendor/photostack/modernizr.min.js'></script>
    <script type='text/javascript' src='js/vendor/superfish.js'></script>
    <script type="text/javascript" src="js/custom/_main.js"></script>
    <script type='text/javascript' src='js/custom/core.utils.js'></script>
    <script type='text/javascript' src='js/custom/core.init.js'></script>
    <script type='text/javascript' src='js/custom/template.init.js'></script>
    <script type='text/javascript' src='js/custom/template.shortcodes.js'></script>
    <script type='text/javascript' src='js/vendor/magnific/jquery.magnific-popup.min.js'></script>
    <script type='text/javascript' src='js/vendor/core.messages/core.messages.js'></script>

</body>
</html>                       