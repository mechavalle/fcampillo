<!DOCTYPE html>
<html lang="en-US" class="scheme_original">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="format-detection" content="telephone=no">
    <title>Fernanda Campillo – Wedding & Event Planner</title>
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
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <script type="text/javascript" src="js/jquery-3.3.1.min.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
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
      margin: 5px auto 5px auto;
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

    .carousel-indicators li 
    {
    width: 15px;
    height: 15px;
    border-radius: 15px !important;
    cursor: pointer;
    }

    .carousel-control-next, .carousel-control-prev 
    {
    width: 10%;
    color: #fff;
    }

    .carousel-control-next-icon, .carousel-control-prev-icon 
    {
    width: 40px;
    height: 70px;
    }

    .carousel-control-next, .carousel-control-prev 
    {
    width: 10%;
    color: #fff;
    }

    .carousel-control-next-icon, .carousel-control-prev-icon 
    {
    width: 40px;
    height: 70px;
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

                if(document.edicion.fecha.value=="")
                    {
                    alert('falta la fecha de tu evento');
                    document.edicion.fecha.focus();
                    return 0;
                    }
                
                if(document.edicion.quenecesitas.value=="")
                    {
                    alert('falta el tipo de evento');
                    document.edicion.quenecesitas.focus();
                    return 0;
                    }
                
                if(document.edicion.ciudadevento.value=="")
                    {
                    alert('falta la ciudad de tu evento');
                    document.edicion.ciudadevento.focus();
                    return 0;
                    }

                if(document.edicion.serviciosevento.value=="")
                    {
                    alert('falta el servicio que buscas');
                    document.edicion.serviciosevento.focus();
                    return 0;
                    }

                document.getElementById("divboton").className="novisible";
                document.getElementById("divmsj").className="esvisible";
                var datos = 'nombre='+ document.edicion.nombre.value + '&apellidos='+document.edicion.apellidos.value+'&telefono=' + document.edicion.telefono.value + '&email=' + document.edicion.email.value + '&fecha=' + document.edicion.fecha.value + '&ciudad='+document.edicion.ciudad.value+'&quenecesitas='+document.edicion.quenecesitas.value+'&ciudadevento='+document.edicion.ciudadevento.value+'&serviciosevento=' + document.edicion.serviciosevento.value;
                             
                conexion1=crearXMLHttpRequest();
                conexion1.onreadystatechange = proresultado;
                conexion1.open("GET", "include/contact-form-presu.php?"+datos, true);
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
                            document.edicion.fecha.value="";
                            document.edicion.ciudad.value="";
                            document.edicion.quenecesitas.value="";
                            document.edicion.ciudadevento.value="";
                            document.edicion.serviciosevento.value=""; 
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
        $menu="home";
        include("navbar.php");
    ?>
 
    <section class="no-col-padding">
        <div class="container-fluid sc_home-box-bg-type-d" style="padding-right: 0px; padding-left: 0px;">    
            <div class="content_container_fluid">
                <div class="columns_wrap">
                    <div class="column_container">
                        <div class="column-inner">
                            <div class="m_wrapper">
                                <div class="sc_section aligncenter sc_home-box-margin-type-f">
                                    <div class="sc_section_inner">
                                        <div class="sc_section_content_wrap">
                                            <div class="esg-media-cover-wrapper">
                                                <div class="esg-entry-media">
                                                    <div id="cholder">
                                                        <div id="carouselSF" class="carousel slide" data-ride="carousel">
                                                            <ol class="carousel-indicators">
                                                                <li data-target="#carouselSF" data-slide-to="0" class="active"></li>
                                                                <li data-target="#carouselSF" data-slide-to="1"></li>
                                                                <li data-target="#carouselSF" data-slide-to="2"></li>
                                                                <li data-target="#carouselSF" data-slide-to="3" class="active"></li>
                                                                <li data-target="#carouselSF" data-slide-to="4"></li>
                                                                <li data-target="#carouselSF" data-slide-to="5"></li>
                                                                <li data-target="#carouselSF" data-slide-to="6" class="active"></li>
                                                                <li data-target="#carouselSF" data-slide-to="7"></li>
                                                            </ol>
                                                            <div class="carousel-inner">
                                                                <div class="carousel-item active">
                                                                    <div class="row">
                                                                        <div class="col desk" align="center">
                                                                            <img src="images/s1.jpg">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="carousel-item">
                                                                    <div class="row">
                                                                        <div class="col desk" align="right">
                                                                            <img src="images/s2.jpg">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="carousel-item">
                                                                    <div class="row">
                                                                        <div class="col desk" align="right">
                                                                            <img src="images/s3.jpg">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="carousel-item">
                                                                    <div class="row">
                                                                        <div class="col desk" align="center">
                                                                            <img src="images/s4.jpg">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="carousel-item">
                                                                    <div class="row">
                                                                        <div class="col desk" align="right">
                                                                            <img src="images/s5.jpg">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="carousel-item">
                                                                    <div class="row">
                                                                        <div class="col desk" align="right">
                                                                            <img src="images/s6.jpg">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="carousel-item">
                                                                    <div class="row">
                                                                        <div class="col desk" align="right">
                                                                            <img src="images/s7.jpg">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="carousel-item">
                                                                    <div class="row">
                                                                        <div class="col desk" align="right">
                                                                            <img src="images/s8.jpg">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <a class="carousel-control-prev" href="#carouselSF" role="button" data-slide="prev">
                                                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                                                <span class="sr-only">Previous</span>
                                                            </a>
                                                            <a class="carousel-control-next" href="#carouselSF" role="button" data-slide="next">
                                                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                                                <span class="sr-only">Next</span>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
                           
    <section class="no-col-padding">
        <div class="container-fluid">    
            <div class="content_container">
                <div class="columns_wrap">
                    <div class="column_container column-1_1">
                        <div class="column-inner">
                            <div class="m_wrapper">
                                <div class="sc_section sc_section_block sc_home-margin-type-j">
                                    <div class="sc_section_inner">
                                        <img src="images/titu3.png" style="width: auto; margin-bottom: 10px; margin-top:-120px;">
                                        <p style="font-size: 18px;">
                                            ¿No sabes por dónde empezar con tus planes?<br>
                                            ¿Necesitas un poco de apoyo adicional para completar tus últimos detalles?<br>
                                            <font color="#88ccca" style="font-weight: bold;">¡Estamos aquí para ti!</font><br>
                                            Desde investigar el lugar perfecto, seleccionar proveedores 
                                            de primer nivel hasta crear un evento único.<br>
                                            Estaremos a tu lado en cada paso del camino
                                        </p>
                                        <br>
                                        <div class="column-1_1" style="color: #737373;">
                                        <div class="sc_section_content_wrap">
                                            <div class="columns_wrap sc_columns columns_nofluid sc_columns_count_3">
                                                <div class="column-1_3 sc_column_item odd first">
                                                    <div class="sc_price_block sc_price_block_style_1">
                                                        <div class="featured_image"><img src="images/FULLSERVICEGUIDE.jpg"></div>
                                                        <div class="sc_price_block_title"><img src="images/titu18.png"></div>
                                                        <div class="sc_price_block_description">
                                                            <ul>
                                                                <li style="font-size: 16px;">¡Estamos aquí para ti!</li>
                                                            </ul>
                                                        </div>
                                                        <div class="sc_price_block_money">
                                                            <p>Sabemos que organizar cualquier tipo de evento, no es fácil, es por eso que te ofrecemos este paquete, para que aclares todas tus dudas y tu evento sea un éxito.</p>
                                                            <p>Consiste en:</p>
                                                            <p>
                                                            • Una primera entrevista en donde se le explicará al cliente nuestros servicios y nos hablarán de sus necesidades. <br>Aclararemos dudas y nos centraremos en el presupuesto.<br>
                                                            • Tres entrevistas de asesoría con al menos 6 meses de anticipación.<br>
                                                            • Contacto ilimitado por teléfono y correo electrónico desde el momento de la reserva para recibir consejos, preguntas y orientación.<br>
                                                            • Investigar y recomendar todas las opciones de lugares y proveedores.
                                                            </p>
                                                        </div>
                                                        <div class="sc_price_block_link">
                                                            <a href="#presupuesto" class="sc_button sc_button_square sc_button_size_small" style="border-style: solid; border-width: 2px;">Pedir Presupuesto</a>
                                                            <div id="presupuesto" class="overlay">

                                                                <form class="sc_input_hover_default" data-formtype="form_1" method="post" name="edicion" target="_self">
                                                                <div class="sc_form_info popup">
                                                                    <a class="close" href="#" onclick="botonback();">&times;</a>
                                                                    <p align="left"><img src="images/titulos-08.png" style="width: 300px;"></p>
                                                                    <div class="content" style="text-align: center;"> 

                                                                        <div class="row">
                                                                            <div class="column-1_1">
                                                                                <table width="99%">
                                                                                    <tr>
                                                                                        <td><input id="sc_form_username" type="text" name="nombre"></td>
                                                                                        <td><input id="sc_form_username" type="text" name="apellidos"></td>
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
                                                                                        <td><input id="sc_form_username" type="text" name="telefono"></td>
                                                                                        <td><input id="sc_form_username" type="email" name="email"></td>
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
                                                                                        <td><input type="text" name="fecha"></td>
                                                                                        <td><input type="text" name="ciudad"></td>
                                                                                    </tr>
                                                                                    <tr>
                                                                                        <td style="text-align: left;"> &nbsp; &nbsp; FECHA DEL EVENTO</td>
                                                                                        <td style="text-align: left;"> &nbsp; &nbsp; CIUDAD</td>
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
                                                                                        <td align="left"> &nbsp; &nbsp; ¿QUÉ TIPO DE EVENTO BUSCAS?</td>
                                                                                    </tr>
                                                                                </table>
                                                                            </div>
                                                                            <div class="column-1_1">
                                                                                <table width="99%">
                                                                                    <tr>      
                                                                                        <td><textarea type="text" name="quenecesitas" ></textarea></td>
                                                                                    </tr>  
                                                                                </table>
                                                                            </div>
                                                                        </div>
                                                                        <br>
                                                                        <div class="row">
                                                                            <div class="column-1_1">
                                                                                <table width="99%">
                                                                                    <tr>
                                                                                        <td align="left"> &nbsp; &nbsp; ¿EN QUÉ CIUDAD TE GUSTARÍA REALIZARLO?</td>
                                                                                    </tr>
                                                                                </table>
                                                                            </div>
                                                                            <div class="column-1_1">
                                                                                <table width="99%">
                                                                                    <tr>      
                                                                                        <td><textarea type="text" name="ciudadevento"></textarea></td>
                                                                                    </tr>  
                                                                                </table>
                                                                            </div>
                                                                        </div>
                                                                        <br>
                                                                        <div class="row">
                                                                            <div class="column-1_1">
                                                                                <table width="99%">
                                                                                    <tr>
                                                                                        <td align="left"> &nbsp; &nbsp; ¿QUÉ TIPO DE SERVICIO(S) BUSCAS?</td>
                                                                                    </tr>
                                                                                </table>
                                                                            </div>
                                                                            <div class="column-1_1">
                                                                                <table width="99%">
                                                                                    <tr>      
                                                                                        <td><textarea type="text" name="serviciosevento"></textarea></td>
                                                                                    </tr>   
                                                                                </table>
                                                                            </div>
                                                                        </div>

                                                                        <br>
                                                                        <div id="divmsj" class="novisible">
                                                                            <i class='fa fa-refresh fa-spin fa-2x'></i>
                                                                        </div>
                                                                        <div id="divboton">
                                                                           <button type="button" onclick="go();" class="sc_button sc_button_square sc_button_size_small" style="border-style: solid; border-width: 2px; line-height: 0.2857em; color: #cbb9a6;">Enviar</button>
                                                                        </div>
                                                                        
                                                                    </div>
                                                                </div>
                                                                
                                                                </form>

                                                            </div>
                                                        </div>
                                                    </div>
                                                </div><div class="column-1_3 sc_column_item even">
                                                    <div class="sc_price_block sc_price_block_style_1">
                                                        <div class="featured_image"><img src="images/DAY-OFCORDINATION.jpg"></div>
                                                        <div class="sc_price_block_title"><img src="images/titu17.png"></div>
                                                        <div class="sc_price_block_description">
                                                            <ul>
                                                                <li style="font-size: 16px;">¡Tú planeas, nosotros lo ejecutamos!</li>
                                                            </ul>
                                                        </div>
                                                        <div class="sc_price_block_money">
                                                            <p>¿Ya tienes todo organizado y no sabes cómo hacerte cargo de todo el día del evento? Pues este es el servicio que necesitarás… Con un mes de anticipación nos podrás contactar y nos encargaremos de coordinar todos los servicios y, por supuesto estaremos ese día encargándonos de que todo salga tal y como lo soñaste.</p>
                                                            <p>¿Cómo funciona?<br>
                                                            Con un mes de anticipación nos explicarás qué servicios tienes contratados, de qué va tu evento, fecha, lugar, lista y contratos con proveedores, etc. todo lo necesario para que nosotros podamos tener una mejor coordinación del día. Al momento de contratar el servicio agendaremos dos citas: la primera y otra una semana antes del evento.</p> 
                                                            <p>Se realizará un scouting del lugar para visualizar los espacios y la decoración.</p>
                                                            <p> 
                                                            • Confirmación de planos y asignación de asientos/lugares.<br>
                                                            • Confirmación de proveedores.<br>
                                                            • Revisión de que el montaje se realice de manera adecuada y que los proveedores cumplan en tiempo y forma.<br>
                                                            • Kit de emergencia para el día de la boda.<br>
                                                            • Manejo continuo del <font style="font-style: oblique;">minute by minute</font>.<br>
                                                            • Distribución de pagos finales / consejos para proveedores.

                                                            </p>
                                                        </div>
                                                        <div class="sc_price_block_link">
                                                            <a href="#presupuesto" class="sc_button sc_button_square sc_button_size_small" style="border-style: solid; border-width: 2px;">Pedir Presupuesto</a>                                                            
                                                        </div>
                                                    </div>
                                                </div><div class="column-1_3 sc_column_item odd">
                                                    <div class="sc_price_block sc_price_block_style_1">
                                                        <div class="featured_image"><img alt="Full Package" src="images/COORDINATIONPACKAGE.jpg"></div>
                                                        <div class="sc_price_block_title"><img src="images/titu16.png"></div>
                                                        <div class="sc_price_block_description">
                                                            <ul>
                                                                <li style="font-size: 16px;">¡Relájate y deja todo en nuestras manos!</li>
                                                            </ul>
                                                        </div>
                                                        <div class="sc_price_block_money">
                                                            <p>Sabemos que cada evento es único y es por eso que siempre buscaremos conservar tu esencia y personalidad. Normalmente tenemos un año o quizás menos para organizar una boda o cualquier evento y si a esto le restamos las jornadas de trabajo ¿de cuánto tiempo dispones para que salga de la mejor manera?</p> 
                                                            <p>Nos encargaremos de planificar, organizar y coordinar ese gran día de principio a fin para entregarte un evento único y distintivo.</p> 
                                                            <p>Le daremos forma a ese gran día y pondremos en marcha todas tus ideas.</p>
                                                        </div>
                                                        <div class="sc_price_block_link">
                                                            <a href="#presupuesto" class="sc_button sc_button_square sc_button_size_small" style="border-style: solid; border-width: 2px;">Pedir Presupuesto</a>                                                            
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div> 
        </div>
    </section>

    <footer class="footer_wrap widget_area scheme_original">
        <?php require("footer.php"); ?>
    </footer>

    <a href="#" class="scroll_to_top icon-up" title="Scroll to top"></a>
    
    <script type='text/javascript' src='js/vendor/jquery-3.1.1.js'></script>
    <script type='text/javascript' src='js/vendor/jquery-migrate.min.js'></script>    
    <script type='text/javascript' src='js/vendor/photostack/modernizr.min.js'></script>
    <script type='text/javascript' src='js/vendor/superfish.js'></script>
    <script type='text/javascript' src='js/vendor/essential-grid/public/assets/js/lightbox.js'></script>
    <script type='text/javascript' src='js/vendor/essential-grid/public/assets/js/jquery.themepunch.tools.min.js'></script>
    <script type='text/javascript' src='js/vendor/essential-grid/public/assets/js/jquery.themepunch.essential.min.js'></script>
    <script type='text/javascript' src='js/vendor/revslider/public/assets/js/jquery.themepunch.revolution.min.js'></script>
    <script type="text/javascript" src="js/custom/_main.js"></script>
    <script type='text/javascript' src='js/custom/core.utils.js'></script>
    <script type='text/javascript' src='js/custom/core.init.js'></script>
    <script type='text/javascript' src='js/custom/template.init.js'></script>
    <script type='text/javascript' src='js/custom/template.shortcodes.js'></script>
    <script type='text/javascript' src='js/vendor/magnific/jquery.magnific-popup.min.js'></script>
    <script type='text/javascript' src='js/vendor/core.messages/core.messages.js'></script> 
    <script type='text/javascript' src='js/vendor/swiper/swiper.js'></script>
    <script type='text/javascript' src='js/vendor/isotope.pkgd.min.js'></script>
      
</body>
</html>