<?php

$chome="";
$cnosotros="class='dropdown'";
$cservicios="";
$cportafolio="";
$cagenda="";
$ccontacto="";

switch($menu)
    {
    case "home": $chome="class='current-menu-ancestor'"; break;
    case "nosotros": $cnosotros="class='current-menu-item'"; break;
    case "servicios": $cservicios="class='current-menu-ancestor'"; break;
    case "portafolio": $cportafolio="class='current-menu-ancestor'"; break;
    case "agenda": $cagenda="class='current-menu-ancestor'"; break;
    case "contacto": $ccontacto="class='current-menu-ancestor'"; break;
    }

?>

<div class="page_wrap">
    <div class="top_panel_wrap_inner top_panel_inner_style_2 top_panel_position_above">
    <header class="top_panel_wrap top_panel_style_2 scheme_original">
        <div class="top_panel_bottom" style="background-color: #ceefef;">
            <div class="content_wrap clearfix">
                <nav class="menu_main_nav_area menu_hover_fade">
                    <ul id="menu_main" class="menu_main_nav" style="font-size: medium;">
                        <li <?php echo $chome; ?> class="menu-item"><a href="index.php"><span>HOME</span></a></li>
                        <li <?php echo $cnosotros; ?> class="menu-item menu-item-has-children"><a href="nosotros.php"><span>NOSOTROS</span></a>
                            <ul class="sub-menu fadeOutDown animated fast" style="background-color: #cab374;">
                                <li class="menu-item"><a href="equipo.php"><span style="font-size: medium;">EQUIPO</span></a></li>
                            </ul>
                        </li>
                        <li <?php echo $cservicios; ?> class="menu-item"><a href="servicios.php"><span>SERVICIOS</span></a></li>
                        <li style="height: auto; padding: 15px; width: 120px;"><img src="images/logotipo.png" style="display: flex; justify-content: center; position: absolute; width: 100%; left: 0; top: -44px;"></li>
                        <li <?php echo $cportafolio; ?> class="menu-item"><a href="portafolio.php"><span>PORTAFOLIO</span></a></li>
                        <li <?php echo $cagenda; ?> class="menu-item"><a href="agenda.php"><span>AGENDA</span></a></li>
                        <li <?php echo $ccontacto; ?> class="menu-item"><a href="contacto.php"><span>CONTACTO</span></a></li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
</header>
<div class="header_mobile">
    <div class="content_wrap">
        <div class="menu_button icon-menu"></div>
        <div class="logo">
            <a href="#"><img src="images/logotipo.png" class="logo_main" alt=""></a>
        </div>
    </div>
    <div class="side_wrap">
        <div class="panel_top">
            <nav class="menu_main_nav_area">
                <ul id="menu_mobile" class="menu_main_nav">
                    <li class="menu-item"><a href="index.php"><span>HOME</span></a></li>
                    <li class="menu-item menu-item-has-children"><a href="nosotros.php"><span>NOSOTROS</span></a>
                        <ul class="sub-menu">
                            <li class="menu-item"><a href="equipo.php"><span>EQUIPO</span></a></li>
                        </ul>
                    </li>
                    <li class="menu-item"><a href="servicios.php"><span>SERVICIOS</span></a></li>
                    <li class="menu-item"><a href="portafolio.php"><span>PORTAFOLIO</span></a></li>
                    <li class="menu-item"><a href="agenda.php"><span>AGENDA</span></a></li>
                    <li class="menu-item"><a href="contacto.php"><span>CONTACTO</span></a></li>
                </ul>
            </nav>
        </div>
        <div class="panel_middle">
            <div class="contact_field contact_phone">
                <span class="contact_icon icon-phone"></span>
                <span class="contact_label contact_phone">55 5214 0418</span>
                <br>
                <span class="contact_icon icon-mail"></span>
                <span class="contact_label contact_email ">info@fernandacampillo.com</span>
                <br>
                <span class="contact_icon icon-mail"></span>
                <span class="contact_label contact_email ">planner@fernandacampillo.com</span>
            </div>
        </div>
    </div>
</div>