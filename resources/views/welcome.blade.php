@extends('layouts.app')
@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{('css/style.css')}}">
    <link rel="stylesheet" href="{{('nicepage.css')}}" media="screen">
<link rel="stylesheet" href="{{('Contact.css')}}" media="screen">
    <script class="u-script" type="text/javascript" src="{{('jquery.js')}}" defer=""></script>
    <script class="u-script" type="text/javascript" src="{{('nicepage.js')}}"} defer=""></script>
    <script class="u-script" type="text/javascript" src="{{('chat.js')}}"} defer=""></script>
    <meta name="theme-color" content="#478ac9">
    <meta property="og:title" content="Contact">
    <meta property="og:type" content="website">
    <meta name="generator" content="Nicepage 4.8.2, nicepage.com">
    <link id="u-theme-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i|Open+Sans:300,300i,400,400i,500,500i,600,600i,700,700i,800,800i">
    
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="page_type" content="np-template-header-footer-from-plugin">
    <script type="application/ld+json">{
		"@context": "http://schema.org",
		"@type": "Organization",
		"name": "",
		"logo": "images/default-logo.png"
}</script>
<!-- Chat -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
<body class="u-body u-xl-mode">
    <section class="u-clearfix u-section-1" id="sec-d947">
      <div class="u-clearfix u-sheet u-sheet-1 ">
        <div class=" u-clearfix u-expanded-width u-gutter-0 u-layout-wrap u-layout-wrap-1">
          <div class="u-layout">
            <div class="u-layout-row">
              <div class="u-container-style u-layout-cell u-size-9 u-layout-cell-1 border ">
                <div class="u-container-layout u-container-layout-1">
                    <!-- Botones -->
                  <a href="" class="u-border-1 u-border-palette-1-light-1 u-btn u-btn-round u-button-style u-palette-1-light-3 u-radius-3 u-text-palette-1-dark-2 u-btn-1">Crear  <br> Empleo &nbsp;
                  </a> <br>
                   <a href="" class="u-border-1 u-border-palette-1-light-1 u-btn u-btn-round u-button-style u-palette-1-light-3 u-radius-3 u-text-palette-1-dark-2 u-btn-1">Perfil &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                  </a>
                  <br>
                   <a href="" class="u-border-1 u-border-palette-1-light-1 u-btn u-btn-round u-button-style u-palette-1-light-3 u-radius-3 u-text-palette-1-dark-2 u-btn-1">Historial 
                  </a>
                  <br>
                   <a href="" class="u-border-1 u-border-palette-1-light-1 u-btn u-btn-round u-button-style u-palette-1-light-3 u-radius-3 u-text-palette-1-dark-2 u-btn-1">Ofertas &nbsp;&nbsp;
                  </a>
                </div>
              </div>
              <div class="u-container-style u-layout-cell u-size-40 u-layout-cell-2 border  u-container-layout-2"> 
                  
                  <div class="container" style="margin-top: -20px;">
                  <nav class="navbar navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand">Buscar Chat</a>
    <form class="d-flex">
      <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-primary" type="submit">Search</button>
    </form>
  </div>
</nav> <!-- fin de barra buscadora -->

<div class="container app">
  <div class="row app-one">
    <div class="col-sm-4 side">
      <div class="side-one">
        <div class="row heading">
          <div class="col-sm-3 col-xs-3 heading-avatar">
            <div class="heading-avatar-icon">
              <img src="https://bootdey.com/img/Content/avatar/avatar1.png">
            </div>
          </div>
          <div class="col-sm-1 col-xs-1  heading-dot  pull-right">
            <i class="fa fa-ellipsis-v fa-2x  pull-right" aria-hidden="true"></i>
          </div>
          <div class="col-sm-2 col-xs-2 heading-compose  pull-right">
            <i class="fa fa-comments fa-2x  pull-right" aria-hidden="true"></i>
          </div>
        </div>

        <div class="row searchBox">
          <div class="col-sm-12 searchBox-inner">
            <div class="form-group has-feedback">
              <input id="searchText" type="text" class="form-control" name="searchText" placeholder="Search">
              <span class="glyphicon glyphicon-search form-control-feedback"></span>
            </div>
          </div>
        </div>

        <div class="row sideBar">
          <div class="row sideBar-body">
            <div class="col-sm-3 col-xs-3 sideBar-avatar">
              <div class="avatar-icon">
                <img src="https://bootdey.com/img/Content/avatar/avatar1.png">
              </div>
            </div>
            <div class="col-sm-9 col-xs-9 sideBar-main">
              <div class="row">
                <div class="col-sm-8 col-xs-8 sideBar-name">
                  <span class="name-meta">John Doe
                </span>
                </div>
                <div class="col-sm-4 col-xs-4 pull-right sideBar-time">
                  <span class="time-meta pull-right">18:18
                </span>
                </div>
              </div>
            </div>
          </div>

          
          <div class="row sideBar-body">
            <div class="col-sm-3 col-xs-3 sideBar-avatar">
              <div class="avatar-icon">
                <img src="https://bootdey.com/img/Content/avatar/avatar4.png">
              </div>
            </div>
            <div class="col-sm-9 col-xs-9 sideBar-main">
              <div class="row">
                <div class="col-sm-8 col-xs-8 sideBar-name">
                  <span class="name-meta">John Doe
                </span>
                </div>
                <div class="col-sm-4 col-xs-4 pull-right sideBar-time">
                  <span class="time-meta pull-right">18:18
                </span>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="side-two">
        <div class="row newMessage-heading">
          <div class="row newMessage-main">
            <div class="col-sm-2 col-xs-2 newMessage-back">
              <i class="fa fa-arrow-left" aria-hidden="true"></i>
            </div>
            <div class="col-sm-10 col-xs-10 newMessage-title">
              New Chat
            </div>
          </div>
        </div>

        <div class="row composeBox">
          <div class="col-sm-12 composeBox-inner">
            <div class="form-group has-feedback">
              <input id="composeText" type="text" class="form-control" name="searchText" placeholder="Search People">
              <span class="glyphicon glyphicon-search form-control-feedback"></span>
            </div>
          </div>
        </div>

        <div class="row compose-sideBar">
          <div class="row sideBar-body">
            <div class="col-sm-3 col-xs-3 sideBar-avatar">
              <div class="avatar-icon">
                <img src="https://bootdey.com/img/Content/avatar/avatar1.png">
              </div>
            </div>
            <div class="col-sm-9 col-xs-9 sideBar-main">
              <div class="row">
                <div class="col-sm-8 col-xs-8 sideBar-name">
                  <span class="name-meta">John Doe
                </span>
                </div>
                <div class="col-sm-4 col-xs-4 pull-right sideBar-time">
                  <span class="time-meta pull-right">18:18
                </span>
                </div>
              </div>
            </div>
          </div>

          <div class="row sideBar-body">
            <div class="col-sm-3 col-xs-3 sideBar-avatar">
              <div class="avatar-icon">
                <img src="https://bootdey.com/img/Content/avatar/avatar2.png">
              </div>
            </div>
            <div class="col-sm-9 col-xs-9 sideBar-main">
              <div class="row">
                <div class="col-sm-8 col-xs-8 sideBar-name">
                  <span class="name-meta">John Doe
                </span>
                </div>
                <div class="col-sm-4 col-xs-4 pull-right sideBar-time">
                  <span class="time-meta pull-right">18:18
                </span>
                </div>
              </div>
            </div>
          </div>
          
      
          <div class="row sideBar-body">
            <div class="col-sm-3 col-xs-3 sideBar-avatar">
              <div class="avatar-icon">
                <img src="https://bootdey.com/img/Content/avatar/avatar5.png">
              </div>
            </div>
            <div class="col-sm-9 col-xs-9 sideBar-main">
              <div class="row">
                <div class="col-sm-8 col-xs-8 sideBar-name">
                  <span class="name-meta">John Doe
                </span>
                </div>
                <div class="col-sm-4 col-xs-4 pull-right sideBar-time">
                  <span class="time-meta pull-right">18:18
                </span>
                </div>
              </div>
            </div>
          </div>
          <div class="row sideBar-body">
            <div class="col-sm-3 col-xs-3 sideBar-avatar">
              <div class="avatar-icon">
                <img src="https://bootdey.com/img/Content/avatar/avatar6.png">
              </div>
            </div>
            <div class="col-sm-9 col-xs-9 sideBar-main">
              <div class="row">
                <div class="col-sm-8 col-xs-8 sideBar-name">
                  <span class="name-meta">John Doe
                </span>
                </div>
                <div class="col-sm-4 col-xs-4 pull-right sideBar-time">
                  <span class="time-meta pull-right">18:18
                </span>
                </div>
              </div>
            </div>
          </div>
          <div class="row sideBar-body">
            <div class="col-sm-3 col-xs-3 sideBar-avatar">
              <div class="avatar-icon">
                <img src="https://bootdey.com/img/Content/avatar/avatar2.png">
              </div>
            </div>
            <div class="col-sm-9 col-xs-9 sideBar-main">
              <div class="row">
                <div class="col-sm-8 col-xs-8 sideBar-name">
                  <span class="name-meta">John Doe
                </span>
                </div>
                <div class="col-sm-4 col-xs-4 pull-right sideBar-time">
                  <span class="time-meta pull-right">18:18
                </span>
                </div>
              </div>
            </div>
          </div>
          <div class="row sideBar-body">
            <div class="col-sm-3 col-xs-3 sideBar-avatar">
              <div class="avatar-icon">
                <img src="https://bootdey.com/img/Content/avatar/avatar3.png">
              </div>
            </div>
            <div class="col-sm-9 col-xs-9 sideBar-main">
              <div class="row">
                <div class="col-sm-8 col-xs-8 sideBar-name">
                  <span class="name-meta">John Doe
                </span>
                </div>
                <div class="col-sm-4 col-xs-4 pull-right sideBar-time">
                  <span class="time-meta pull-right">18:18
                </span>
                </div>
              </div>
            </div>
          </div>
          <div class="row sideBar-body">
            <div class="col-sm-3 col-xs-3 sideBar-avatar">
              <div class="avatar-icon">
                <img src="https://bootdey.com/img/Content/avatar/avatar4.png">
              </div>
            </div>
            <div class="col-sm-9 col-xs-9 sideBar-main">
              <div class="row">
                <div class="col-sm-8 col-xs-8 sideBar-name">
                  <span class="name-meta">John Doe
                </span>
                </div>
                <div class="col-sm-4 col-xs-4 pull-right sideBar-time">
                  <span class="time-meta pull-right">18:18
                </span>
                </div>
              </div>
            </div>
          </div>
          <div class="row sideBar-body">
            <div class="col-sm-3 col-xs-3 sideBar-avatar">
              <div class="avatar-icon">
                <img src="https://bootdey.com/img/Content/avatar/avatar5.png">
              </div>
            </div>
            <div class="col-sm-9 col-xs-9 sideBar-main">
              <div class="row">
                <div class="col-sm-8 col-xs-8 sideBar-name">
                  <span class="name-meta">John Doe
                </span>
                </div>
                <div class="col-sm-4 col-xs-4 pull-right sideBar-time">
                  <span class="time-meta pull-right">18:18
                </span>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="col-sm-8 conversation">
      <div class="row heading">
        <div class="col-sm-2 col-md-1 col-xs-3 heading-avatar">
          <div class="heading-avatar-icon">
            <img src="https://bootdey.com/img/Content/avatar/avatar6.png">
          </div>
        </div>
        <div class="col-sm-8 col-xs-7 heading-name">
          <a class="heading-name-meta">John Doe
          </a>
          <span class="heading-online">Online</span>
        </div>
        <div class="col-sm-1 col-xs-1  heading-dot pull-right">
          <i class="fa fa-ellipsis-v fa-2x  pull-right" aria-hidden="true"></i>
        </div>
      </div>

      <div class="row message" id="conversation">
        <div class="row message-previous">
          <div class="col-sm-12 previous">
            <a onclick="previous(this)" id="ankitjain28" name="20" style="color:lightgray;">
            Show Previous Message
            </a>
          </div>
        </div>

        <div class="row message-body">
          <div class="col-sm-12 message-main-receiver">
            <div class="receiver">
              <div class="message-text">
               Hi, what are you doing?!
              </div>
              <span class="message-time pull-right">
                Sun
              </span>
            </div>
          </div>
        </div>

        <div class="row message-body">
          <div class="col-sm-12 message-main-sender">
            <div class="sender">
              <div class="message-text">
                I am doing nothing man!
              </div>
              <span class="message-time pull-right">
                Sun
              </span>
            </div>
          </div>
        </div>
      </div>

      <div class="row reply">
        <div class="col-sm-1 col-xs-1 reply-emojis">
          <i class="fa fa-smile-o fa-2x"></i>
        </div>
        <div class="col-sm-9 col-xs-9 reply-main">
          <textarea class="form-control" rows="1" id="comment"></textarea>
        </div>
        <div class="col-sm-1 col-xs-1 reply-recording">
          <i class="fa fa-microphone fa-2x" aria-hidden="true"></i>
        </div>
        <div class="col-sm-1 col-xs-1 reply-send">
          <i class="fa fa-send fa-2x" aria-hidden="true"></i>
        </div>
      </div>
    </div>
  </div>
</div>


                  </div>
                <div class="u-container-layout "></div>
              </div>
              <div class="u-container-style u-layout-cell u-size-11 u-layout-cell-3  border">
                <div class="u-container-layout u-container-layout-3">
                  <h3 class="u-text u-text-default u-text-1">
                    <span style="font-weight: 700; font-size: 1.5rem;">Noticias</span>
                    <span style="font-weight: 700;">
                      <span style="font-weight: 400;"></span>
                    </span>
                  </h3>
                  <p class="u-text u-text-default u-text-2">Texto de ejemplo</p>
                  <h3 class="u-text u-text-default u-text-3">
                    <span style="font-weight: 700; font-size: 1.5rem;">Promociones</span>
                    <span style="font-weight: 700;">
                      <span style="font-weight: 400;"></span>
                    </span>
                  </h3>
                  <p class="u-text u-text-default u-text-4">Texto de ejemplo</p>
                  <h3 class="u-text u-text-default u-text-5">
                    <span style="font-weight: 700; font-size: 1.5rem;">Empresas&nbsp;</span>★★★<span style="font-weight: 700;">
                      <span style="font-weight: 400;"></span>
                    </span>
                  </h3>
                  <p class="u-text u-text-default u-text-6">Web Records</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    </section>
  </body>
</body>
</html>

@endsection