<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>CHANCE</title>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=DM+Sans&family=League+Gothic&family=Lora&family=Noto+Sans:ital,wght@0,400;1,300&family=Roboto+Slab:wght@200;300;400&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>

<body class="h-screen w-full min-w-[315px] min-h-[500px] relative">
  <header class="lg:h-[10%] h-[8%]  flex items-center lg:justify-between justify-end">
    <div class="hidden lg:h-[100%]  md:flex md:justify-end font-normal text-xs w-[60%] ">
      <span
          class="cursor-pointer font-NotoSans barra w-[92px] flex justify-center items-center content-center mr-[3px]"
          onclick="posicionSlide(1)">INICIO</span>
      <span
          class="cursor-pointer font-NotoSans barra w-[92px] flex justify-center  items-center content-center mr-[3px]"
          onclick="posicionSlide(2)">PERSONAS</span>
      <span
          class="cursor-pointer font-NotoSans barra w-[92px] flex justify-center items-center content-center mr-[3px]"
          onclick="posicionSlide(3)">EMPRESAS</span>
      <span
          class="cursor-pointer font-NotoSans barra w-[92px] flex justify-center items-center content-center mr-[3px]"
          onclick="posicionSlide(4)">NOSOTROS</span>
    </div>
    <div class=" lg:w-[30%] w-[100%] flex justify-around items-center sm:justify-end">
      <a class="bg-[#6A309B] w-28 font-NotoSans rounded-full text-center sm:w-28 text-white p-1.5  hover:bg-[#929ae0]"
        href="{{route('register')}}"">Registrate</a>
      <a class="bg-[#6A309B] w-28 font-NotoSans rounded-full text-center sm:w-28 sm:ml-2 sm:mr-2 text-white p-1.5  hover:bg-[#929ae0]"
        href="{{route('login')}}">Inicia sesión</a>
    </div>
  </header>
  <div class="h-[92%] lg:h-[90%]">
    <div class="miSlider fade h-full">
      <div class="h-full bg-bottom bg-[url('/imagenes/wavebg.svg')] bg-no-repeat min-h-[650px] "> 
        <div class=" h-full flex flex-row justify-center sm:pt-20 lg:justify-around min-h-[650px] max-w-8xl mx-auto  ">
          <div class="flex-initial  flex flex-row justify-center flex-wrap md:flex-nowrap">
            <img class="flex-initial relative h-[350px] lg:h-[320px] xl:h-[320px] 2xl:h-[450px] mx-auto"src="{{ asset('imagenes/logoChance.png') }}" alt="logo">
            <div class="text-center sm:mt-4 sm:flex sm:flex-col lg:items-start lg:justify-start  ">
              <h1 class="font-LeagueGothic font-normal md:text-[50px] tracking-[17px] text-center text-[4.5rem] leading-[8rem] lg:text-justify">CHANCE</h1>
              <h2 class="text-center font-DMSans font-normal lg:text-justify pb-2">UN MUNDO LLENO DE OPORTUNIDADES</h2>
              <button type="button" class="button-gradient text-2xl font-bold border-2 border-gray-300 text-white py-2 px-4 bg-gradient-to-r from-violet-900 via-violet-700 to-violet-400 rounded-lg shadow-lg">INFORMACION</button>
            </div>
          </div>
          <img class="flex-initial hidden lg:block img-central pd-[90%] w-[80%]  sm:h-[337px] sm:w-[507px] lg:w-[35%] 2xl:h-[40%] 2xl:w-[35%]"src="/imagenes/oficios.png" alt="imagen de oficios"> 
        </div>
      </div> 
    </div> 
    <div class="miSlider fade hidden h-full">
      <div class="w-full h-full flex items-center justify-center flex-wrap max-w-screen-2xl 2xl:mx-auto">
        <div class=" p-2 sm:w-[50%] md:w-2/5 md:pd-[80px] max-w-[600px] ">
          <p class="font-RobotoSlab font-normal text-2xl tracking-wide pb-[30px] text-center lg:text-[35px]">¡Te ayudamos a encontrar un mejor empleo!</p>
          <p class="font-Lara"> Contamos con las mejores empresas con vacantes disponibles día a día. Aplica, consigue un mejor ambiente laboral y un mejor ingreso.<br>  ¡Tu oportunidad es ahora!</p>
        </div>
        <img class="sm:hidden " src="/imagenes/persona-movil.png" alt="imagen de personas">
        <img class="hidden sm:w-1/2 md:w-1/2 sm:block" src="/imagenes/personas-img2.svg" alt="">
      </div>
    </div>
    <div class="miSlider fade hidden h-full">
      <div class="w-full h-full flex items-center justify-center flex-wrap max-w-screen-2xl 2xl:mx-auto">
        <div class="p-2 sm:w-[50%] md:w-2/5 md:pd-[80px] max-w-[600px]">
          <p class="font-RobotoSlab text-2xl tracking-wide pb-[30px] text-center lg:text-[35px]">¡Necesitas servicios de recursos humanos e innovación en tu empresa!</p>
          <p> Nosotros contamos con las soluciones y fidelidad de una gran comunidad que cuentan con el perfil que deseas. <br>
                Selecciona a los candidatos idóneos para tu empresa y obten a tu disposición todos nuestros servicios. </p>
        </div>
        <img class="sm:hidden " src="/imagenes/empresas-movil.png" alt="imagen de personas">
        <img class="hidden sm:w-1/2 md:w-2/5 sm:block" src="/imagenes/empresas-movil.png" alt="">
    </div>
    </div> 
    <div class="miSlider fade hidden h-full">
      <div class="w-full h-full flex items-center justify-center flex-wrap max-w-screen-2xl 2xl:mx-auto">
        <div class=" p-2 sm:w-[50%] md:w-2/5 md:pd-[80px] max-w-[600px] ">
          <p class="font-RobotoSlab text-2xl tracking-wide pb-[30px] text-center lg:text-[35px]">¿Quiénes somos?</p>
          <p>  Somos una empresa responsable, que trabaja por y para la sociedad
                pensando en la productividad, progreso y oportunidades mediante la ayuda de la tecnología.
                Con fin de dar el soporte completo, necesario a las empresas y personas que están en busca
                de una solución.
        </div>
        <img class="sm:hidden " src="/imagenes/personas.png" alt="imagen de personas">
        <img class="hidden sm:w-1/2 md:w-2/5 sm:block" src="/imagenes/Innovation.png"  alt="">
      </div>
    </div>
      <a href="#"
          class="atras    text-[#fff]  w-[35px] flex  justify-center items-center content-center h-[35px] bg-[#978b9d4a] border-transparent rounded-full no-underline hover:bg-[#d3aee6] absolute left-0 bottom-[50%] "
          onclick="avanzaSlide(-1)">&#10094;</a>
      <a href="#"
          class="adelante text-[#fff]  w-[35px] flex  justify-center items-center content-center h-[35px] bg-[#978b9d4a] border-transparent rounded-full no-underline hover:bg-[#d3aee6] absolute right-[0%] bottom-[50%]"
          onclick="avanzaSlide(1)">&#10095;</a>
  </div> 
  <script src="js/index.js"></script>

</body>

</html>
