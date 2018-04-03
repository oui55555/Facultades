<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js no-svg">
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

  <header class="fixed nav-down">
   <a href="index.php" class="uanl-bar">
   <p class="topLogo sm-hidden xs-show">UANL.MX</p>
   <p class="rotate xs-hidden">UANL.MX</p></a>

   <div class="header-top"><div class="container relative"><div class="row no-gutter">

     <div class="col-sm-2 col-xs-8" id="logo">
       <div class="row">
         <div class="col-xs-3">
           <a href="index-facpya.php">
             <span>
               <img src="assets/img/logos/facpya.png" height="97" width="74" alt="Facultad de Contaduría Pública y Administración">
             </span>
           </a>
         </div>
         <div class="col-xs-9 menu-header-mobile">
             <h2>FACULTAD DE CONTADURÍA <br> PÚBLICA Y ADMINISTRACIÓN</h2>
         </div>
       </div>
     </div>

     <div class="col-sm-10 col-xs-4 top-menu">
       <div class="row no-gutter">

         <div class="col-sm-8">
           <div class="navbar-header nh-audiencias">
             <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-audiencias">
               <span>INFORMACIÓN PARA:</span>
               <div class="fL mt1"><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></div>
             </button>

             <nav class="navbar-collapse navbar-audiencias collapse fR">
               <ul class="nav navbar-nav">
                 <li><a href="#">Alumnos</a></li>
                 <li><a href="#">Aspirantes</a></li>
                 <li><a href="#">Docentes e Investigadores</a></li>
                 <li><a href="#">Egresados</a></li>
               </ul>
             </nav>
           </div>
         </div>

         <div class="col-sm-4">
           <nav class="navbar-collapse collapse"><ul class="nav navbar-nav">
             <li><a id="buscar" class="icon op-servicios"><span class="busqueda"></span></a></li>
             <li>
               <div class="lang op-servicios">
                 <select name="lang">
                   <option>ES</option>
                   <option>EN</option>
                   <option>FR</option>
                   <option>DE</option>
                   <option>PR</option>
                 </select>
               </div>
             </li>
             <li><a class="op-servicios" data-toggle="collapse" data-target="">Servicios en Línea</a></li>
           </ul></nav>
         </div>

       </div>
       <div class="header-titulo">
         <h1>UNIVERSIDAD AUTÓNOMA DE NUEVO LEÓN</h1>
         <h2>FACULTAD DE CONTADURÍA PÚBLICA Y ADMINISTRACIÓN</h2>
       </div>
     </div>


     <div class="navbar-header nh-main fR">
       <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-main"><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span>
       </button>
     </div>

     <div class="navbar-header nh-login fR">
       <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".login"><span class="menu-usuario"></span></button>
     </div>

   </div></div></div>

   <nav class="navbar-collapse navbar-main top0 collapse">
         <div class="container" id="container_menu_principal">
           <ul id="subMenu" class="nav nav-justified">
             <li class="visible-xs">
               <input type="text" placeholder="buscar" id="buscar" class="input">
             </li>
             <li class="">
               <a class="lksubmenu">Inicio</a>
             </li>
             <li class="w4">
               <a class="lksubmenu" data-submenu="subacerca" href="acerca.php">Acerca de la Facultad</a>
                <div class="subMenu hidden">
                 <div class="container">
                   <div class="col-sm-3">
                     <ul>
                       <li><a href="#"><span>»</span> Historia</a></li>
                       <li><a href="#"><span>»</span> Estructura organizacional</a></li>
                       <li><a href="#"><span>»</span> El Director</a></li>
                       <li><a href="#"><span>»</span> Vinculación</a></li>
                       <li><a href="#"><span>»</span> Mapas y Direcciones</a></li>
                       <li><a href="#"><span>»</span> Directorio</a></li>
                       <li><a href="#"><span>»</span> Redes Sociales</a></li>
                     </ul>
                   </div>
                   <div class="col-sm-4">
                     <p class="txtgray mt20">Durante sus 80 años de vida nuestra Casa de Estudios ha vivido momentos muy importantes para el crecimiento del trabajo científico, desde la formación del Instituto de Investigaciones Científicas al frente del Dr. Aguirre Pequeño en 1943 hasta la creación de la Dirección General de Investigación en enero de 1997...</p>
                   </div>
                   <div class="col-sm-4 col-sm-offset-1 mt20">
                     <img src="assets/img/photos/subacerca.png">
                   </div>
                 </div>
               </div>
             </li>
             <li class="w2">
               <a class="lksubmenu" data-submenu="suboferta" href="facultades.php">Oferta Educativa</a>
                <div class="subMenu hidden">
                 <div class="container">
                   <div class="col-sm-3">
                     <ul>
                       <li><a href="#"><span>»</span> Técnico</a></li>
                       <li><a href="#"><span>»</span> Profesional Asociado</a></li>
                       <li><a href="#"><span>»</span> Licenciatura</a></li>
                       <li><a href="#"><span>»</span> Posgrado</a></li>
                       <li><a href="#"><span>»</span> Educación Continua</a></li>
                       <li><a href="#"><span>»</span> Universidad para Mayores</a></li>
                     </ul>
                   </div>
                   <div class="col-sm-4">
                     <p class="txtgray mt20">Durante sus 80 años de vida nuestra Casa de Estudios ha vivido momentos muy importantes para el crecimiento del trabajo científico, desde la formación del Instituto de Investigaciones Científicas al frente del Dr. Aguirre Pequeño en 1943 hasta la creación de la Dirección General de Investigación en enero de 1997...</p>
                   </div>
                   <div class="col-sm-4 col-sm-offset-1 mt25">
                     <img src="assets/img/photos/subacerca.png">
                   </div>
                 </div>
               </div>
             </li>
             <li class="w2">
               <a class="lksubmenu" data-submenu="subvida" href="vida-estudiantil.php">Vida Estudiantil</a>
               <div class="subMenu hidden">
                 <div class="container">
                   <div class="col-sm-3">
                     <ul>
                       <li><a href="#"><span>»</span> Noticias</a></li>
                       <li><a href="#"><span>»</span> Eventos</a></li>
                       <li><a href="#"><span>»</span> Difusión Cultural</a></li>
                       <li><a href="#"><span>»</span> Actividad Estudiantil</a></li>
                       <li><a href="#"><span>»</span> Voluntariado</a></li>
                       <li><a href="#"><span>»</span> Deportes</a></li>
                     </ul>
                   </div>
                   <div class="col-sm-4">
                     <p class="txtgray mt20">Durante sus 80 años de vida nuestra Casa de Estudios ha vivido momentos muy importantes para el crecimiento del trabajo científico, desde la formación del Instituto de Investigaciones Científicas al frente del Dr. Aguirre Pequeño en 1943 hasta la creación de la Dirección General de Investigación en enero de 1997...</p>
                   </div>
                   <div class="col-sm-4 col-sm-offset-1 mt25">
                     <img src="assets/img/photos/subacerca.png">
                   </div>
                 </div>
               </div>
             </li>
             <li class="w2">
               <a class="lksubmenu" data-submenu="subinvest" href="investigacion.php">Investigación</a>
               <div class="subMenu hidden">
                 <div class="container">
                   <div class="col-sm-4">
                     <ul>
                       <li><a href="#"><span>»</span> Investigadores y Creadores</a></li>
                       <li><a href="#"><span>»</span> Proyectos de Investigación</a></li>
                       <li><a href="#"><span>»</span> Centros e Institutos de Investigación</a></li>
                       <li><a href="#"><span>»</span> Convocatorias</a></li>
                       <li><a href="#"><span>»</span> Publicaciones Cientificas</a></li>
                       <li><a href="#"><span>»</span> Propiedad Intelectual</a></li>
                       <li><a href="#"><span>»</span> Repositorio Institucional</a></li>
                     </ul>
                   </div>
                   <div class="col-sm-4">
                     <p class="txtgray mt20">Durante sus 80 años de vida nuestra Casa de Estudios ha vivido momentos muy importantes para el crecimiento del trabajo científico, desde la formación del Instituto de Investigaciones Científicas al frente del Dr. Aguirre Pequeño en 1943 hasta la creación de la Dirección General de Investigación en enero de 1997...</p>
                   </div>
                   <div class="col-sm-4 mt25">
                     <img src="assets/img/photos/subacerca.png">
                   </div>
                 </div>
               </div>
             </li>
             <li class="w2">
               <a class="lksubmenu" data-submenu="subbiblio" href="bibliotecas.php">Bibliotecas</a>
               <div class="subMenu hidden">
                 <div class="container">
                   <div class="col-sm-4">
                     <ul>
                       <li><a href="#"><span>»</span> Catálogo Electrónico</a></li>
                       <li><a href="#"><span>»</span> Biblioteca Universitaria "Raul Rangel Frías"</a></li>
                       <li><a href="#"><span>»</span> Capilla Alfonsina Biblioteca Universitaria</a></li>
                       <li><a href="#"><span>»</span> Biblioteca Especializada de Ciencias Agropecuarias</a></li>
                     </ul>
                   </div>
                   <div class="col-sm-4">
                     <p class="txtgray mt20">Durante sus 80 años de vida nuestra Casa de Estudios ha vivido momentos muy importantes para el crecimiento del trabajo científico, desde la formación del Instituto de Investigaciones Científicas al frente del Dr. Aguirre Pequeño en 1943 hasta la creación de la Dirección General de Investigación en enero de 1997...</p>
                   </div>
                   <div class="col-sm-4 mt25">
                     <img src="assets/img/photos/subacerca.png">
                   </div>
                 </div>
               </div>
             </li>
           </ul>

           <div class="visible-xs mt25 lang-xs">
             <select class="drop" name="lang-mobile">
               <option>Idioma</option>
               <option>ESPAÑOL</option>
               <option>ENGLISH</option>
               <option>FRANCAIS</option>
               <option>DEUTSCH</option>
               <option>PORTUGUÉS</option>
             </select>
           </div>
         </div>
       </nav>

  </header>

     <div id="busqueda">
       <div class="container">
         <div class="row mb20"><div class="col-xs-6"><p class="f24">Búsqueda</p></div><div class="col-xs-6" align="right"><a class="sprite cerrar" id="cerrar-busqueda"></a></div></div>
         <input type="text" id="inp-buscar" placeholder="buscar">
         <div id="resultados-busqueda"></div>
       </div>
     </div>
