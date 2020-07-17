<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <title>.::JUVENTUDE ARLINDO STRINGUINI::.</title>                   
  <link href="estilos.css" rel="stylesheet" type="text/css" media="screen" />
  <link href='http://fonts.googleapis.com/css?family=Lato' rel='stylesheet' type='text/css'>
  <link href="lytebox.css" rel="stylesheet" type="text/css">
  <link href="jquery.bxslider.css" rel="stylesheet" type="text/css">
  <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
  <link rel="shortcut ico" type="text/css" href="images/favicon.png">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons"
  rel="stylesheet">
  <!--<script type="text/javascript" src="ajax/estudos_ajax.js"></script>-->
  <script type="text/javascript">

  </script>
</head>

<body>

  <div id="all">


    <div id="home"></div>

    <div class="dropdown">
      <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        Dropdown button
      </button>
      <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
        <a class="dropdown-item" href="#">Action</a>
        <a class="dropdown-item" href="#">Another action</a>
        <a class="dropdown-item" href="#">Something else here</a>
      </div>
    </div>

    <div id="menu-mobile-mother">
      <!--  <i class="fas fa-bars menu"></i> -->
      <a class="navbar-toggle" data-toggle="collapse" data-target="#links-menu" id="btn-menu-mobile">
       <i class="material-icons menu-icon">menu</i>
     </a>

     <nav class="nav-mobile collapse navbar-collapse"  id="links-menu">
      <div class="toggle">
      </div>
      <ul id="nav-list-mobile" class="nav navbar-nav navbar-right">
        <a href="" id="logo_mobile">
          <img src="images/logo.png" id="logo-mobile-img" />    
        </a>
        <li class="active"><a href="#home" class="line">Home</a></li>
        <li><a href="#empresa" class="line">Quem Somos</a></li>
        <li><a href="#manutencao" class="line">Vídeos</a></li>
        <li><a href="#fotos" class="line">Fotos</a></li>
        <li id="submenu-outros-mobile" class="line"><a href="#">Outros</a>
         <ul id="submenu-outros-mobile-list">
          <li><a href="#eventos" class="line">Eventos</a></li>
          <li><a href="#manutencao" class="line">Estudos</a></li>
          <li><a href="#radios" class="line">Rádios</a></li>
        </ul>
      </li>
      <li><a href="#contato" class="line">Contato</a></li>
    </ul>
  </nav>
</div>


<div id="nav_box">
 <img src="images/logo.png" id="logo">
 <nav id="nav-full">

   <a href="#home">Home</a>
   <a href="#empresa">Quem Somos</a>
   <a href="#manutencao">Vídeos</a>
   <a href="#fotos">Fotos</a>
   <a href="#" id="submenu-outros">Outros</a>
   <a href="#contato">Contato</a>
   <ul id="submenu-outros-list">
    <li><a href="#eventos">Eventos</a></li>
    <li><a href="#manutencao">Estudos</a></li>
    <li><a href="#radios">Rádios</a></li>
  </ul>
</nav>

</div><!--fecha nav box-->

<header id="banner">
 <ul class="bxslider">
  <li><img src="banners/banner1.png" /></li>
  <li><img src="banners/banner2.jpg" /></li>
  <li><img src="banners/banner3.jpg" /></li>
  <li><img src="banners/banner4.jpg" /></li>
  <li><img src="banners/banner5.jpg" /></li>
</ul>
</header> 

<!-- <div class="menu_suspenso">
 <h1><i class""></i>Menu Suspenso</h1>
 <div class="row_menusus"></div>
 <ul class="lista">
  <li><a href="#eventos" id="link_menu_suspenso">Eventos</a></li>
  <li><a href="#estudos">Estudos</a></li>
  <li><a href="#radios">Rádios</a></li>
</ul>
</div> -->

<section class="section-all">

  <div id="busca">
    <form action="resultado.php" method="get">
     <input type="text" name="busca" id="busca_text" placeholder="Buscar...">
     <input type="image" name="" id="btn_buscar" src="images/lupa.png">
   </form>
 </div>

 <div class="largura">
   <h1><i class="fa fa-home">&nbsp;&nbsp;</i><span>Bem Vindo!</span></h1>
   <p>
    Seja bem vido ao Site da Juventude do Setor Ermo. Pertencemos ao ministério Assembléia de Deus de Guaíba RS, 
    os jovens, juntamente com toda a Igreja, optaram por buscar a santificação, renunciando ao mundo,
    à carne, enfrentando as hostes espirituais da maldade e buscando ao Criador. Para isso,
    nenhuma inovação ou nova doutrina foi implantada: apenas o estudo sistemático da Palavra de Deus
    e a prática do jejum e da oração, além do incentivo a manter-se longe do mundo,
    são as bases do movimento.
  </div>

</section>

<!--  <nav class="navbar navbar-default navbar-fixed-top">
  <div class="container">
    <ul class="lista-mobile">
      <li><a href="#pastor" id="link_menu_suspenso">Pastor Dirigente</a></li>
      <li><a href="#estudos">Estudos</a></li>
      <li><a href="#testemunhos">Testemunhos</a></li>
      <li><a href="#musicas">Músicas</a></li>
    </ul>
  </div>
</nav>
-->

<nav class="lista-mobile" id="lista-mobile">
  <div class="container-fluid">
    <ul id="nav-list-mobile" class="nav navbar-nav navbar-right">
     <li><a href="#eventos" id="link_menu_suspenso">Eventos</a></li>
     <li><a href="#estudos">Estudos</a></li>
     <li><a href="#radios">Rádios</a></li>
   </ul>
 </div>
</nav>



<section id="empresa" class="section-all">
 <h1 style="padding-top:150px;">Quem Somos</h1>

        <!--<div class="img_centralizada">
         <img src="images/figuras_quem_somos.png"> 
       </div>--> 

       <p>
        A Juventude do Distrito Ermo  é o departamento de jovens da Assembleia de Deus da cidade de Guaíba,
        cujo líder atual é o Pastor Orlando. Criada com a missão de conduzir e fortalecer 
        a juventude nos caminhos do Criador, a partir de variadas formas,
        nossa juventude desenvolve atividades em diversas áreas no intuito de integrar e agregar os
        jovens tanto da Sede quanto das congregações. 
        Realizamos periodicamente os cultos aos sábados, trabalhos evangelísticos e sociais, vigílias,
        retiros, convivências, concursos bíblicos entre outras ações.
        Na Sede, a JUC é formada pelos seguintes departamentos: Equipe de Recepção,
        Grupo de Louvor, Grupo de Evangelismo, Escola Bíblica Canaã (EBC) além de outros.
      </section>

      <section id="videos">
       <div class="largura">
         <h1><i class="fa fa-youtube-play">&nbsp;&nbsp;Vídeos</i></h1><br>
         <div>

         </div>
       </div>
     </section>

     <section id="eventos" class="section-all">
      <!--<h1>Pastor Dirigente</h1>-->
      <header id="banner">
       <ul class="bxslider">
        <li><img src="images/eventos/eventos1.jpg" class="eventos"></li>
        <li><img src="images/eventos/eventos2.jpg" class="eventos"></li>
        <li><img src="images/eventos/eventos3.jpg" class="eventos"></li>
        <li><img src="images/eventos/eventos4.jpg" class="eventos"></li>
      </ul>
    </header>

  </section>

  <section id="manutencao" class="section-all">

    <div class="manutencao-in">

    </div>

  </section>

  <section id="estudos" class="section-all">
   <h1>Estudos</h1>
   <div class="menu_estudos">
    <a href="#em_construcao">Nom</a>
    <a href="#em_construcao">Escatologia</a>
    <a href="#em_construcao">Hermenêutica</a>
    <a href="#em_construcao">Esegése</a>
    <a href="#em_construcao">Outros</a>
  </div>
  <div class="estudos_in">
  <!--<ul>
   <li id="alvo_um"></li>
   <li id="alvo_dois"></li>
   <li id="alvo_tres"></li>
   <li id="alvo_quatro"></li>
 </ul>-->


 <div id="alvo_estudos">

   <a href="#">Voltar</a>
 </div>


  <!--<div id="alvo_estudos_dois">

   <a href="#">Voltar</a>
 </div>-->



 <ul class="lista_estudos">
  <li>
    <a href="#estudos" id="link_um"><img src="images/miniaturas_home/mini_1.jpg"></a>
  </li>
  <li>
    <a href="#estudos" id="link_dois"><img src="images/miniaturas_home/mini_2.jpg"></a>
  </li>
  <li>
    <a href="#estudos" id="link_tres"><img src="images/miniaturas_home/mini_3.jpg"></a>
  </li>
  <li>
    <a href="#estudos" id="link_quatro"><img src="images/miniaturas_home/mini_4.jpg"></a>
  </li>
  <li>
    <a href="#estudos" id="link_cinco"><img src="images/miniaturas_home/mini_5.jpg"></a>
  </li>
  <li>
    <a href="#estudos" id="link_seis"><img src="images/miniaturas_home/mini_6.jpg"></a>
  </li>
  <li>
    <a href="#estudos" id="link_sete"><img src="images/miniaturas_home/mini_7.jpg"></a>
  </li>
  <li>
    <a href="#estudos" id="link_oito"><img src="images/miniaturas_home/mini_8.jpg"></a>
  </li>
</ul>
</div>
</section>

<section id="testemunhos" class="section-all">
  <h1>Testemunhos</h1>
</section>

<section id="radios">
  <!-- <div class="musicas_image">
   <img src="images/musicas.png">
 </div>
 <section id="musicas_in">

   <div class="in_left">
    <h1>CRAIG GARNER CEO</h1>
  </div>

  <div class="in_center">
    <h1>CRAIG GARNER CEO</h1>
  </div>

  <div class="in_right">
    <h1>CRAIG GARNER CEO</h1>
  </div> -->

  <!-- RADIO 1 -->
  <table style="text-align: center;" class="radios-content">
    <tr>
      <td>
        <a href="https://www.radioc.com.br"><img src="images/radios/radioc.jpg" target="_blank" /></a>
      </td>
    </tr>
    <tr>
      <td align="center">
        <audio  controls="controls">
          <source src="https://18193.live.streamtheworld.com/SAM01AAC152.aac?tdsdk=js-2.9&pname=TDSdk&pversion=2.9&banners=none&sbmid=8ff424d5-b21f-4b75-ab35-1ae26fb0a8c5" type="audio/mp3" />
          Seu navegador não suporta este player
        </source>
      </audio>

    </td>
  </tr>
</table>

<!-- RADIO 2 -->
<table style="text-align: center;" class="radios-content">
  <tr>
    <td>
      <a href="http://www.radiogospelmix.com.br"><img src="https://s3-sa-east-1.amazonaws.com/radiofacil-upload/1667/editor/3592dd1ca32134eda1575a2e9e72bcf5.png" target="_blank"/></a></td>
    </tr>
    <tr>
      <td align="center">
        <iframe src="https://d6ojw9st89o3o.cloudfront.net/BRGallery/index.php/player/view/flat;65;31;c2Vydmlkb3IzMy5icmxvZ2ljLmNvbS9hcHAucGxheWVyLnBocD9hZGRyZXNzPXNlcnZpZG9yMzMuYnJsb2dpYy5jb20mcG9ydD04MTky;true" border="0" scrolling="no" frameborder="0" allowTransparency="true" style="background-color: none;" width="65" height="31">
        </iframe>
      </audio>

    </td>
  </tr>
</table>




</section>



</section>

<section id="fotos">
  <h1><i class="fa fa-camera">&nbsp;&nbsp;</i><span>Fotos</span></h1>

<!-- 
       <div id="fotos-all">
         <ul id="list-fotos">
          <li><a href="#img16"><img src="fotos/foto-16.jpg" class="min"></a></li>
          <li><a href="#img15"><img src="fotos/foto-15.jpg" class="min"></a></li>
          <li><a href="#img14"><img src="fotos/foto-14.jpg" class="min"></a></li>
          <li><a href="#img13"><img src="fotos/foto-13.jpg" class="min"></a></li>
          <li><a href="#img12"><img src="fotos/foto-12.jpg" class="min"></a></li>
          <li><a href="#img11"><img src="fotos/foto-11.jpg" class="min"></a></li>
          <li><a href="#img10"><img src="fotos/foto-10.jpg" class="min"></a></li>
          <li><a href="#img9"><img src="fotos/foto-9.jpg" class="min"></a></li>
          <li><a href="#img8"><img src="fotos/foto-8.jpg" class="min"></a></li>
          <li><a href="#img7"><img src="fotos/foto-7.jpg" class="min"></a></li>

          <li><a href="#img1"><img src="fotos/foto-1.jpg" class="min"></a></li>
          <li><a href="#img2"><img src="fotos/foto-2.jpg" class="min"></a></li>
          <li><a href="#img3"><img src="fotos/foto-3.jpg" class="min"></a></li>
          <li><a href="#img4"><img src="fotos/foto-4.jpg" class="min"></a></li>
          <li><a href="#img5"><img src="fotos/foto-5.jpg" class="min"></a></li>
          <li><a href="#img6"><img src="fotos/foto-6.jpg" class="min"></a></li>
        </ul>
   
      



      
      <div class="lbox" id="img16">
        <div class="box_img">

          <a href="#img6" class="btn-fotos" id="prev">&#171;</a>
          <a href="#fotos" class="btn-fotos" id="close">X</a>
          <img src="fotos/mini-16.jpg">
          <a href="#img15" class="btn-fotos" id="next">&#187;</a>

        </div>
      </div>


      <div class="lbox" id="img15">
        <div class="box_img">

          <a href="#img16" class="btn-fotos" id="prev">&#171;</a>
          <a href="#fotos" class="btn-fotos" id="close">X</a>
          <img src="fotos/mini-15.jpg">
          <a href="#img14" class="btn-fotos" id="next">&#187;</a>

        </div>
      </div>


      <div class="lbox" id="img14">
        <div class="box_img">

          <a href="#img15" class="btn-fotos" id="prev">&#171;</a>
          <a href="#fotos" class="btn-fotos" id="close">X</a>
          <img src="fotos/mini-14.jpg">
          <a href="#img13" class="btn-fotos" id="next">&#187;</a>

        </div>
      </div>



      <div class="lbox" id="img13">
        <div class="box_img">

          <a href="#img14" class="btn-fotos" id="prev">&#171;</a>
          <a href="#fotos" class="btn-fotos" id="close">X</a>
          <img src="fotos/mini-13.jpg">
          <a href="#img12" class="btn-fotos" id="next">&#187;</a>

        </div>
      </div>


      <div class="lbox" id="img12">
        <div class="box_img">

          <a href="#img13" class="btn-fotos" id="prev">&#171;</a>
          <a href="#fotos" class="btn-fotos" id="close">X</a>
          <img src="fotos/mini-12.jpg">
          <a href="#img11" class="btn-fotos" id="next">&#187;</a>

        </div>
      </div>


      <div class="lbox" id="img11">
        <div class="box_img">

          <a href="#img12" class="btn-fotos" id="prev">&#171;</a>
          <a href="#fotos" class="btn-fotos" id="close">X</a>
          <img src="fotos/mini-11.jpg">
          <a href="#img10" class="btn-fotos" id="next">&#187;</a>

        </div>
      </div>


      <div class="lbox" id="img10">
        <div class="box_img">

          <a href="#img11" class="btn-fotos" id="prev">&#171;</a>
          <a href="#fotos" class="btn-fotos" id="close">X</a>
          <img src="fotos/mini-10.jpg">
          <a href="#img9" class="btn-fotos" id="next">&#187;</a>

        </div>
      </div>

      <div class="lbox" id="img9">
        <div class="box_img">

          <a href="#img10" class="btn-fotos" id="prev">&#171;</a>
          <a href="#fotos" class="btn-fotos" id="close">X</a>
          <img src="fotos/mini-9.jpg">
          <a href="#img8" class="btn-fotos" id="next">&#187;</a>

        </div>
      </div>


      <div class="lbox" id="img8">
        <div class="box_img">

          <a href="#img9" class="btn-fotos" id="prev">&#171;</a>
          <a href="#fotos" class="btn-fotos" id="close">X</a>
          <img src="fotos/mini-8.jpg">
          <a href="#img7" class="btn-fotos" id="next">&#187;</a>

        </div>
      </div>

      <div class="lbox" id="img7">
        <div class="box_img">

          <a href="#img8" class="btn-fotos" id="prev">&#171;</a>
          <a href="#fotos" class="btn-fotos" id="close">X</a>
          <img src="fotos/mini-7.jpg">
          <a href="#img1" class="btn-fotos" id="next">&#187;</a>

        </div>
      </div>

      <div class="lbox" id="img1">
        <div class="box_img">

          <a href="#img7" class="btn-fotos" id="prev">&#171;</a>
          <a href="#fotos" class="btn-fotos" id="close">X</a>
          <img src="fotos/mini-1.jpg">
          <a href="#img2" class="btn-fotos" id="next">&#187;</a>

        </div>
      </div>

      <div class="lbox" id="img2">
        <div class="box_img">

          <a href="#img1" class="btn-fotos" id="prev">&#171;</a>
          <a href="#fotos" class="btn-fotos" id="close">X</a>
          <img src="fotos/mini-2.jpg">
          <a href="#img3" class="btn-fotos" id="next">&#187;</a>

        </div>
      </div>

      <div class="lbox" id="img3">
        <div class="box_img">

          <a href="#img2" class="btn-fotos" id="prev">&#171;</a>
          <a href="#fotos" class="btn-fotos" id="close">X</a>
          <img src="fotos/mini-3.jpg">
          <a href="#img4" class="btn-fotos" id="next">&#187;</a>

        </div>
      </div>

      <div class="lbox" id="img4">
        <div class="box_img">

          <a href="#img3" class="btn-fotos" id="prev">&#171;</a>
          <a href="#fotos" class="btn-fotos" id="close">X</a>
          <img src="fotos/mini-4.jpg">
          <a href="#img5" class="btn-fotos" id="next">&#187;</a>

        </div>
      </div>

      <div class="lbox" id="img5">
        <div class="box_img">

          <a href="#img4" class="btn-fotos" id="prev">&#171;</a>
          <a href="#fotos" class="btn-fotos" id="close">X</a>
          <img src="fotos/mini-5.jpg">
          <a href="#img6" class="btn-fotos" id="next">&#187;</a>

        </div>
      </div>

      <div class="lbox" id="img6">
        <div class="box_img">

          <a href="#img5" class="btn-fotos" id="prev">&#171;</a>
          <a href="#fotos" class="btn-fotos" id="close">X</a>
          <img src="fotos/mini-6.jpg">
          <a href="#img13" class="btn-fotos" id="next">&#187;</a>

        </div>
      </div>

    </div> -->


    <div id="fotos-all">
      <div class="container">
        <div class="row">
          <div class="row">
            <div class="col-lg-3 col-md-4 col-xs-6 thumb">
              <a class="thumbnail" href="#" data-image-id="" data-toggle="modal" data-title=""
              data-image="fotos/foto-16.jpg"
              data-target="#image-gallery">
              <img class="img-thumbnail"
              src="fotos/foto-16.jpg"
              alt="Another alt text">
            </a>
          </div>
          <div class="col-lg-3 col-md-4 col-xs-6 thumb">
            <a class="thumbnail" href="#" data-image-id="" data-toggle="modal" data-title=""
            data-image="fotos/foto-15.jpg"
            data-target="#image-gallery">
            <img class="img-thumbnail"
            src="fotos/foto-15.jpg"
            alt="Another alt text">
          </a>
        </div>

        <div class="col-lg-3 col-md-4 col-xs-6 thumb">
          <a class="thumbnail" href="#" data-image-id="" data-toggle="modal" data-title=""
          data-image="fotos/foto-14.jpg"
          data-target="#image-gallery">
          <img class="img-thumbnail"
          src="fotos/foto-14.jpg"
          alt="Another alt text">
        </a>
      </div>
    </div>

    
    <div class="col-lg-3 col-md-4 col-xs-6 thumb">
      <a class="thumbnail" href="#" data-image-id="" data-toggle="modal" data-title=""
      data-image="fotos/foto-13.jpg"
      data-target="#image-gallery">
      <img class="img-thumbnail"
      src="fotos/foto-13.jpg"
      alt="Another alt text">
    </a>
  </div>
  <div class="col-lg-3 col-md-4 col-xs-6 thumb">
    <a class="thumbnail" href="#" data-image-id="" data-toggle="modal" data-title=""
    data-image="fotos/foto-12.jpg"
    data-target="#image-gallery">
    <img class="img-thumbnail"
    src="fotos/foto-12.jpg"
    alt="Another alt text">
  </a>
</div>



<div class="col-lg-3 col-md-4 col-xs-6 thumb">
  <a class="thumbnail" href="#" data-image-id="" data-toggle="modal" data-title=""
  data-image="fotos/foto-11.jpg"
  data-target="#image-gallery">
  <img class="img-thumbnail"
  src="fotos/foto-11.jpg"
  alt="Another alt text">
</a>
</div>
<div class="col-lg-3 col-md-4 col-xs-6 thumb">
  <a class="thumbnail" href="#" data-image-id="" data-toggle="modal" data-title=""
  data-image="fotos/foto-10.jpg"
  data-target="#image-gallery">
  <img class="img-thumbnail"
  src="fotos/foto-10.jpg"
  alt="Another alt text">
</a>
</div>
<div class="col-lg-3 col-md-4 col-xs-6 thumb">
  <a class="thumbnail" href="#" data-image-id="" data-toggle="modal" data-title=""
  data-image="fotos/foto-9.jpg"
  data-target="#image-gallery">
  <img class="img-thumbnail"
  src="fotos/foto-9.jpg"
  alt="Another alt text">
</a>
</div>



<div class="col-lg-3 col-md-4 col-xs-6 thumb">
  <a class="thumbnail" href="#" data-image-id="" data-toggle="modal" data-title=""
  data-image="fotos/foto-8.jpg"
  data-target="#image-gallery">
  <img class="img-thumbnail"
  src="fotos/foto-8.jpg"
  alt="Another alt text">
</a>
</div>
<div class="col-lg-3 col-md-4 col-xs-6 thumb">
  <a class="thumbnail" href="#" data-image-id="" data-toggle="modal" data-title="Im so nice"
  data-image="fotos/foto-7.jpg"
  data-target="#image-gallery">
  <img class="img-thumbnail"
  src="fotos/foto-7.jpg"
  alt="Another alt text">
</a>
</div>
<div class="col-lg-3 col-md-4 col-xs-6 thumb">
  <a class="thumbnail" href="#" data-image-id="" data-toggle="modal" data-title=""
  data-image="fotos/foto-6.jpg"
  data-target="#image-gallery">
  <img class="img-thumbnail"
  src="fotos/foto-6.jpg"
  alt="Another alt text">
</a>
</div>
<div class="col-lg-3 col-md-4 col-xs-6 thumb">
  <a class="thumbnail" href="#" data-image-id="" data-toggle="modal" data-title=""
  data-image="fotos/foto-5.jpg"
  data-target="#image-gallery">
  <img class="img-thumbnail"
  src="fotos/foto-5.jpg"
  alt="Another alt text">
</a>
</div>
<div class="col-lg-3 col-md-4 col-xs-6 thumb">
  <a class="thumbnail" href="#" data-image-id="" data-toggle="modal" data-title=""
  data-image="fotos/foto-4.jpg"
  data-target="#image-gallery">
  <img class="img-thumbnail"
  src="fotos/foto-4.jpg"
  alt="Another alt text">
</a>
</div>
<div class="col-lg-3 col-md-4 col-xs-6 thumb">
  <a class="thumbnail" href="#" data-image-id="" data-toggle="modal" data-title=""
  data-image="fotos/foto-3.jpg"
  data-target="#image-gallery">
  <img class="img-thumbnail"
  src="fotos/foto-3.jpg"
  alt="Another alt text">
</a>
</div>
<div class="col-lg-3 col-md-4 col-xs-6 thumb">
  <a class="thumbnail" href="#" data-image-id="" data-toggle="modal" data-title=""
  data-image="fotos/foto-2.jpg"
  data-target="#image-gallery">
  <img class="img-thumbnail"
  src="fotos/foto-2.jpg"
  alt="Another alt text">
</a>
</div>
<div class="col-lg-3 col-md-4 col-xs-6 thumb">
  <a class="thumbnail" href="#" data-image-id="" data-toggle="modal" data-title=""
  data-image="fotos/foto-1.jpg"
  data-target="#image-gallery">
  <img class="img-thumbnail"
  src="fotos/foto-1.jpg"
  alt="Another alt text">
</a>
</div>





</div>


<div class="modal fade" id="image-gallery" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title" id="image-gallery-title"></h4>
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span><span class="sr-only">Close</span>
        </button>
      </div>
      <div class="modal-body">
        <img id="image-gallery-image" class="img-responsive col-md-12" src="">
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary float-left" id="show-previous-image"><i class="fa fa-arrow-left"></i>
        </button>

        <button type="button" id="show-next-image" class="btn btn-secondary float-right"><i class="fa fa-arrow-right"></i>
        </button>
      </div>
    </div>
  </div>
</div>
</div>
</div>

</section>



<div class="up">
 <a href="#home"><img src="up.png"></a>
</div>

<footer id="contato">




  <div class="footer_conteudo">
    <section id="contatoform" class="section-all">
     <form action="contato.php" method="post" id="form-contato">
      <table id="contato-table">
        <tr><td><h1><i class="fa fa-envelope">&nbsp;&nbsp;</i><span>Contato</span></h1></td></tr>
        <tr><td><h4>Nome:</h4></td><td><input type="text" placeholder="" required maxlength="80" class="text_footer" name="nome"></td></tr>
        <tr><td><h4>E-mail:</h4></td><td><input type="email" placeholder="" required maxlength="80" class="text_footer" name="email"></td></tr>
        <tr><td><h4>Assunto:</h4></td><td><input type="text" placeholder="" required maxlength="80" class="text_footer" name="assunto"></td></tr>
        <tr><td><h4>Mensagem:</h4></td><td><textarea id="textarea_footer" name="mensagem"></textarea></td></tr>
        <tr><td colspan="2"><input type="submit" name="sub_footer" class="btn btn-contato"></td></tr>
      </table>
    </form>
    <div class="musicas_links">
      <a href=""><img src="images/face.png"></a>
      <a href=""><img src="images/youtube.png"></a>
      <a href=""><img src="images/google-plus.png"></a>
    </div>
    <div id="menu_footer">
      <a href="#home">Home</a>
      <a href="#empresa">Quem Somos</a>
      <a href="#videos">Vídeos</a>
      <a href="#fotos">Fotos</a>
      <a href="#contato">Contato</a>
    </div>
    <h3>Copyright &copy; Oséias Freitas Todos o direitos reservados</h3>
  </footer>
  
      <!--  <ul>
      <li></li>
      <li></li>
      <li></li>
      <li></li>
    </ul>
  -->
  <!--
  <h4>Nome:</h4><input type="text" placeholder="" required maxlength="80" id="text_footer">
  <h4>E-mail</h4><input type="email" placeholder="" required maxlength="80" id="email_footer">
  <h4>Mensagem:</h4><textarea id="textarea_footer" rows="7" cols="50"></textarea>
  <input type="submit" name="sub_footer" id="submit_footer">
-->
</section>  



</div>  

<!--   <div class="endereco_footer">
 <h1>Endereço</h1>
 <p>Check out this great https://www.behance.net/Bridgetech
   Freddom- Responsive Multi-Purpose 
   March 06 2014</p>
 </div> -->

 

</div>


<script type="text/javascript" src="jquery.min.js"></script>
<script type="text/javascript" src="js/util.js"></script>
<script type="text/javascript" src="js/menu-mobile.js"></script>
<script type="text/javascript" src="node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
<script type="text/javascript" src="estudos.js"></script>
<!--<script type="text/javascript" src="estudos_dois.js"></script>-->
<script type="text/javascript" src="menu_suspenso.js"></script>
<script type="text/javascript" src="lytebox.js"></script>
<script type="text/javascript" src="jquery.bxslider.min.js"></script>
<!-- <script type="text/javascript" src="scroll.js"></script> -->
<script type="text/javascript">
jQuery('.bxslider').bxSlider({
  auto:true,
  pause:4000,
  speed:1000,
});
</script>
</body>
</html>
