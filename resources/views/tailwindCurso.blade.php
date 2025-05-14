<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="max-w-xl mx-auto min-h-dvh bg-gradient-to-b from-black via-sky-950 to-gray-800">
  
<header class="text-white flex flex-col justify-center items-center">
    <img src="assets/foto.jpg" alt="midudev sonriendo" class="h-[50vh] object-cover mask-radial-at-center 
    mask-radial-from-45% mask-radial-to-72% animate-pulse-fade-in">
    
    <header class="flex flex-col justify-center items-center mb-8 -mt-4">
      <span class="text-sky-400 font-mono px-3 py-1 border border-sky-400/50 rounded-full flex items-center justify-center 
      shadow-sm bg-black/65 cursor-crosshair z-10">
        @midudev 
        <svg width="2s0px" height="20px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
          <path d="M4.39254 16.2614C2.64803 13.1941 1.66074 9.71783 1.51646 6.15051C1.50127 5.77507 1.70918 5.42812 2.04153 5.25282L11.5335 0.246091C11.8254 0.0920859 12.1746 0.0920859 12.4665 0.246091L21.9585 5.25282C22.2908 5.42812 22.4987 5.77507 22.4835 6.15051C22.3393 9.71783 21.352 13.1941 19.6075 16.2614C17.8618 19.3307 15.4169 21.8869 12.4986 23.7001C12.1931 23.8899 11.8069 23.8899 11.5014 23.7001C8.58313 21.8869 6.13817 19.3307 4.39254 16.2614Z" fill="#0063FB"/>
          <path d="M8.25 12.75L11.25 15L17.25 9" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
        </svg>
      </span>
      <h1 class="text-3xl font-extrabold leading-tight mt-1 font-display">
        Miguel Angel Durán
      </h1>
    </header>

    <section class="flex gap-2 justify-center ">
      <!--Twich-->
      <a class="bg-purple-100 p-2 size-10 xs:size-12 flex items-center justify-center rounded-full hover:scale-110 
        transition-transform animate-slide-up-fade" href="https://www.twich.tv/midudev" target="_blank" aria-label="Twich" 
        title="Ir a Twich de @midudev">
        <svg xmlns:xlink="http://www.w3.org/1999/xlink" width="28" height="28">
          <use xlink:href="{{ asset('assets/sprite.svg') }}#twich"></use>
        </svg>
      </a>
      <!--Github-->
      <a class="bg-white p-2 size-10 xs:size-12 flex items-center justify-center rounded-full hover:scale-110 
        transition-transform animate-slide-up-fade animate-delay-300" href="https://www.youtube.com/@midudev" target="_blank" aria-label="Youtube" title="Ir a Youtube de @midudev">
        <svg xmlns:xlink="http://www.w3.org/1999/xlink" width="28" height="28">
          <use xlink:href="{{ asset('assets/sprite.svg') }}#github"></use>
        </svg>
      </a>
      <!--Intagram-->
      <a class="bg-gradient-to-tr from-[#f9ce34] via-[#ee2a7b] to-[#6228d7] p-2 size-10 xs:size-12 
        flex items-center justify-center rounded-full hover:scale-110 transition-transform animate-slide-up-fade animate-delay-400" 
        href="https://www.instagram.com/midudev" target="_blank" aria-label="Instagram" 
        title="Ir a Instagram de @midudev">
        <svg xmlns:xlink="http://www.w3.org/1999/xlink" width="28" height="28">
          <use xlink:href="{{ asset('assets/sprite.svg') }}#instagram"></use>
        </svg>
      </a>
      <!--Youtube-->
      <a class="bg-white p-2 size-10 xs:size-12 flex items-center justify-center rounded-full hover:scale-110 
        transition-transform animate-slide-up-fade animate-delay-500" href="https://www.youtube.com/@midudev" target="_blank" aria-label="Youtube" 
        title="Ir a Youtube de @midudev">
        <svg xmlns:xlink="http://www.w3.org/1999/xlink" width="28" height="28">
          <use xlink:href="{{ asset('assets/sprite.svg') }}#youtube"></use>
        </svg>
      </a>
      <!--X Twitter-->
      <a class="bg-sky-500 p-2 size-10 xs:size-12 flex items-center justify-center rounded-full hover:scale-110 
        transition-transform animate-slide-up-fade animate-delay-500" href="https://twitter.com/midudev" target="_blank" aria-label="Twitter" 
        title="Ir a Twitter de @midudev">
        <svg xmlns:xlink="http://www.w3.org/1999/xlink" width="28" height="28">
          <use xlink:href="{{ asset('assets/sprite.svg') }}#twitter"></use>
        </svg>
      </a>
    </section>
    
    <p class="text-white text-center mt-4 text-sm px-4 text-balance">
      Divulgador de programación, streamer y creador de contenido. Enseando JavaScrip, React, Node.js de forma divertida
    </p>

    <main class="pt-4 px-4 pb-16">
      <div class="grid grid-cols-3 grid-rows-2 gap-2 w-full">
        <a href="https://cursoreact.dev" class="
          relative rounded-3xl overflow-hidden
          bg-gradient-to-br from-cyan-900 via-cyan-700 to-cyan-500
          border border-cyan-900
          flex flex-col items-start
          hover:scale-105 hover:contrast-125
          transition
          group
          col-span-2 p-7 min-h-[180px] w-80
        ">
          <span
            class="absolute bottom-2 left-4 font-bold text-2xl group-hover:-translate-y-1 transition-transform">React.js</span>

          <svg
            class="absolute -right-4 -bottom-4 -rotate-6 size-28 group-hover:-rotate-12 group-hover:scale-125 transition-transform"
            width="100" height="100">
            <use xlink:href="./assets/sprite.svg#react" />
          </svg>

          <span class="absolute top-2 left-4 text-xs border rounded-xl px-1 py-0.5">Curso de +14 clases</span>
        </a>

        <a href="https://midu.link/html" class="
          relative rounded-3xl overflow-hidden
          bg-gradient-to-br from-html via-orange-300 to-white
          border border-html
          flex flex-col items-start
          hover:scale-105 hover:contrast-125
          transition
          group
          col-span-1 p-7 min-h-[180px]
        ">
          <span
            class="absolute bottom-2 left-4 font-bold text-2xl group-hover:-translate-y-1 transition-transform">HTML</span>

          <svg
            class="absolute -right-4 -bottom-4 -rotate-6 size-28 group-hover:-rotate-12 group-hover:scale-125 transition-transform"
            width="100" height="100">
            <use xlink:href="./assets/sprite.svg#html" />
          </svg>

          <span class="absolute top-2 left-4 text-xs border rounded-xl px-1 py-0.5">Para principiantes</span>
        </a>

        <a href="https://midu.link/html" class="
          relative rounded-3xl overflow-hidden
          bg-gradient-to-br from-[#663399] via-[#8e44ad] to-white
          border border-[#663399]
          flex flex-col items-start
          hover:scale-105 hover:contrast-125
          transition
          group
          col-span-1 p-7 min-h-[180px]
        ">
          <span
            class="absolute bottom-2 left-4 font-bold text-2xl group-hover:-translate-y-1 transition-transform">CSS</span>

          <svg
            class="absolute -right-4 -bottom-4 -rotate-6 size-28 group-hover:-rotate-12 group-hover:scale-125 transition-transform"
            width="100" height="100">
            <use xlink:href="./assets/sprite.svg#css" />
          </svg>

          <span class="absolute top-2 left-4 text-xs border rounded-xl px-1 py-0.5">Para principiantes</span>
        </a>

        <a href="https://cursoreact.dev" class="
          relative rounded-3xl overflow-hidden
          bg-gradient-to-br from-[#215732] via-[#3C873A] to-[#8CC84B]
          border border-[#215732]
          flex flex-col items-start
          hover:scale-105 hover:contrast-125
          transition
          group
          col-span-2 p-7 min-h-[180px]
        ">
          <span
            class="absolute bottom-2 left-4 font-bold text-2xl group-hover:-translate-y-1 transition-transform">Node.js</span>

          <svg
            class="absolute -right-4 -bottom-4 -rotate-6 size-28 group-hover:-rotate-12 group-hover:scale-125 transition-transform"
            width="100" height="100">
            <use xlink:href="./assets/sprite.svg#typescript" />
          </svg>

          <span class="absolute top-2 left-4 text-xs border rounded-xl px-1 py-0.5">Curso de +14 clases</span>
        </a>
      </div>
    </main>

  </header>
  <main>
    <!--<img src="assets/twich.png" alt="twich" width="500" height="600">-->
    
  </main>
  <footer></footer>
</body>
</html>