<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />

        <meta property="og:title" content="A Barba de Baixo"/>
        <meta property="og:type" content="product"/>
        <meta property="og:description" content="Gostaria de aumentar o faturamento da sua barbearia sem precisar trabalhar mais? Aumente sua renda sem trabalhar mais!"/>
        <meta property="og:image" content="{{ asset('storage/en-meta-image.png') }}"/>

        <link rel="shortcut icon" href="{{ asset('favicon.ico') }}" type="image/x-icon">

        <link rel="apple-touch-icon" sizes="180x180" href="/public/apple-touch-icon.png">
        <link rel="icon" type="image/png" sizes="32x32" href="../../../public/storaga/favicon.ico">
        <link rel="icon" type="image/png" sizes="16x16" href="/public/favicon-16x16.png">
        <link rel="manifest" href="/site.webmanifest">

        <title>A Barba de Baixo</title>

        <!-- Google tag (gtag.js) -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=G-MX54LS9J2B"></script>
        <script>
            window.dataLayer = window.dataLayer || [];
            function gtag(){dataLayer.push(arguments);}
            gtag('js', new Date());

            gtag('config', 'G-MX54LS9J2B');
        </script>

        @vite('resources/css/app.css')
    </head>

    <body
    class="relative font-sans w-full bg-center min-h-screen bg-cover bg-no-repeat bg-fixed lg:scale-[0.7] lg:h-screen lg:-mt-[70px] lg:overflow-y-hidden"
    style="background-image:url({{ asset('storage/background.jpg') }})">

    <!-- Section 1 -->
    <section>
        <div class="relative flex items-center justify-center h-32 px-10">
            <div class="flex items-center font-medium text-gray-100">
                <img class="h-24 pt-5 lg:h-40" src="{{ asset('storage/logo.png') }}" alt="Logo">
            </div>
                    <div class="flex items-center gap-4">
                        <a href="{{ route('pt.home') }}">
                            <img class="h-6 opacity-40" src="{{ asset('storage/brazil-flag.png') }}" alt="Brazil Flag Icon">
                        </a>
                        <a href="{{ route('en.home') }}">
                            <img class="h-6" src="{{ asset('storage/uk-flag.png') }}" alt="United Kingdom Flag Icon">
                        </a>
                    </div>
                </div>
                <div class="flex items-center justify-center">
                    <div class="flex flex-col items-center px-10 pt-20 pb-9 lg:flex-row">
                        <div class="relative w-full max-w-[60rem]">
                            <div class="relative flex flex-col items-center justify-center w-full h-full lg:pr-10">
                                <div class="flex flex-col items-start space-y-8">
                                    <div class="relative w-full flex flex-col">
                                        <h1 class="mb-8 justify-center text-4xl pt-20 ml-11 lg:text-[3.20rem] font-black leading-none tracking-normal text-white md:text-4xl md:tracking-tight">
                                            Shortly!
                                        </h1>
                                        <ul class="pt-10">
                                            <li class="flex items-top mb-10 cursor-pointer">
                                                <div class="w-10">
                                                    <span class="inline-flex items-center justify-center w-7 h-7 mr-2 text-white bg-gradient-to-r from-primarycolor to-primarycolor rounded-full">
                                                        <span class="text-md font-bold">✓</span>
                                                    </span>
                                                </div>
                                                <div class="bg-black bg-opacity-70 p-8 rounded-lg hover:shine-effect w-full">
                                                    <h2 class="mb-8 text-3xl lg:text-[1.8rem] font-white leading-none tracking-normal text-white md:text-2xl md:tracking-tight">
                                                        I'm a Customer
                                                    </h2>



                                                </div>
                                            </li>
                                            <li id="barber" class="flex items-top mb-10 cursor-pointer">
                                                <div class="w-10">
                                                    <span class="inline-flex items-center justify-center w-7 h-7 mr-2 text-white bg-gradient-to-r from-primarycolor to-primarycolor rounded-full">
                                                        <span class="text-md font-bold">✓</span>
                                                    </span>
                                                </div>
                                                <div class="bg-black bg-opacity-70 p-8 rounded-lg hover:shine-effect w-full">
                                                    <h2
                                                        class="mb-8 text-3xl lg:text-[1.8rem] font-white leading-none tracking-normal text-white md:text-2xl md:tracking-tight">
                                                        I'm a barber
                                                    </h2>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <script>
                document.addEventListener("DOMContentLoaded", function() {
                    var client = document.getElementById("client");
                    client.addEventListener("click", function() {
                        window.location.href = "https://pages.a-barba-de-baixo.com/pt/indicador";
                    });
                });
            </script>

            <script>
                document.addEventListener("DOMContentLoaded", function() {
                    var barber = document.getElementById("barber");
                    barber.addEventListener("click", function() {
                        window.location.href = "https://pages.a-barba-de-baixo.com/en/indicator";
                    });
                });
            </script>
        </body>

        </html>
