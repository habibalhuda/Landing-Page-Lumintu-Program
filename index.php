<?php header('Access-Control-Allow-Origin: *'); 

function http_request($url) {
    $ch = curl_init();

    curl_setopt($ch, CURLOPT_URL, $url);

    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);

    $out = curl_exec($ch);

    curl_close($ch);

    return $out;
}

  
$dataJson = json_decode(http_request("https  ://1vmn9lxs.directus.app/items/landingpage"));

// var_dump($dataJson);




?>




<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <title>Lumintu Logic</title>
    <link rel="shortcut icon" href="assets/img/lumintu.jpg" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link rel="stylesheet" href="assets/style.css" />
    <link
        href="https://fonts.googleapis.com/css2?family=Inter:wght@600&family=Lato&family=Roboto:ital,wght@0,400;1,500&display=swap"
        rel="stylesheet" />
    <style>
    #loader {
        display: none;
    }
    </style>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"
        integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
    tailwind.config = {
        theme: {
            extend: {
                colors: {
                    clifford: "#da373d",
                    lms: "#659093",
                },
                fontFamily: {
                    lato: "Lato",
                    inter: "Inter",
                },
                screens: {
                    mdx: {
                        max: "760px"
                    },
                    smx: {
                        max: "560px"
                    },
                    lgx: {
                        max: "1024px"
                    }

                },
            },
        },
    };
    </script>
</head>

<body class="bg-[#f7f2f0]">
    <!-- Navbar -->

    <section class="navbar">

        <nav class="bg-[#DDB07F] border-gray-200 px-2 sm:px-4 py-2.5  dark:bg-[#DDB07F]">
            <div class="container flex flex-wrap justify-between items-center mx-auto">
                <a id="lumintu" href="#lumintu" class="flex items-center ">
                    <img src="assets/img/lumintu.jpg" class="mr-3 h-6 sm:h-9" alt="LumintuLogo" />
                    <div class="text-white font-medium">Lumintu’s Stack</div>
                </a>
                <button data-collapse-toggle="mobile-menu" type="button"
                    class="inline-flex items-center p-2 ml-3 text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600"
                    aria-controls="mobile-menu" aria-expanded="false">
                    <span class="sr-only">Open main menu</span>
                    <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd"
                            d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z"
                            clip-rule="evenodd"></path>
                    </svg>
                    <svg class="hidden w-6 h-6" fill="currentColor" viewBox="0 0 20 20"
                        xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd"
                            d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                            clip-rule="evenodd"></path>
                    </svg>
                </button>



                <div class="hidden w-full md:block md:w-auto" id="mobile-menu">
                    <ul class="flex flex-col mt-4 md:flex-row md:space-x-8 md:mt-0 md:text-sm md:font-medium">
                        <li>
                            <a href="#lumintu"
                                class=" nav-link block py-2 pr-4 pl-3 text-white border-b border-gray-100 hover:bg-gray-50 md:hover:bg-transparent md:border-0 md:hover:text-white md:p-0 dark:text-gray-100 md:dark:hover:text-white dark:hover:bg-white dark:hover:text-white md:dark:hover:bg-transparent ">Home</a>
                        </li>
                        <li>
                            <a href="#Product"
                                class=" nav-link block py-2 pr-4 pl-3 text-white border-b border-gray-100 hover:bg-gray-50 md:hover:bg-transparent md:border-0 md:hover:text-white md:p-0 dark:text-gray-100 md:dark:hover:text-white dark:hover:bg-white dark:hover:text-white md:dark:hover:bg-transparent ">Product</a>
                        </li>
                        <li>
                            <a href="#Contact"
                                class=" nav-link block py-2 pr-4 pl-3 text-white border-b border-gray-100 hover:bg-gray-50 md:hover:bg-transparent md:border-0 md:hover:text-white md:p-0 dark:text-gray-100 md:dark:hover:text-white dark:hover:bg-white dark:hover:text-white md:dark:hover:bg-transparent ">Contact</a>
                        </li>
                        <li>
                            <a href="#"
                                class=" nav-link block py-2 pr-4 pl-3 text-white border-b border-gray-100 hover:bg-gray-50 md:hover:bg-transparent md:border-0 md:hover:text-white md:p-0 dark:text-gray-100 md:dark:hover:text-white dark:hover:bg-white dark:hover:text-white md:dark:hover:bg-transparent ">Sign
                                In</a>
                        </li>
                        <li>
                            <a href="#"
                                class=" nav-link block py-2 pr-4 pl-3 text-white hover:bg-gray-50 md:hover:bg-transparent md:border-0 md:hover:text-white md:p-0 dark:text-gray-100 md:dark:hover:text-white dark:hover:bg-white dark:hover:text-white md:dark:hover:bg-transparent">Sign
                                Up</a>
                        </li>

                    </ul>
                </div>
            </div>
        </nav>

    </section>

    <div class="container">
        <div class="jumbotron mx-5 mt-8 mdx:mt-1 rounded">
            <div class="row">
                <div class="gap-40 grid lgx:grid-cols-1 md:grid-cols-2 mr-6">
                    <div class="master-img">
                        <img class="my-8 mx-8 mdx:visible md:invisible md:hidden hover:shadow-md"
                            src="assets/img/master-img.jpg" alt="master-img">
                        <div
                            class="mt-1 ml-10 content mdx:my-12 md:max-w-xl mdx:h-40 mdx:mb-10 rounded-lg drop-shadow-md hover:drop-shadow-xl">


                            <div class="row space-y-8">

                                <h1 class="text-lg font-inter md:text-4xl mdx:text-4xl fadein">
                                    <span class="text-sm mdx:text-xl">HELLO THERE</span> <br> We Are <span
                                        class="text-[#659093]">Lumintu’s Stack</span>

                                </h1>
                                <p class="mt-10 rounded-md text-gray-500 text-justify ">

                                    Selama <span class="text-[#659093] ">magang</span>, kita akan mengerjakan beberapa
                                    proyek terkait dengan bidang <span class="text-[#659093]">Teknologi
                                        Informasi</span>, diantaranya adalah praktek <span
                                        class="text-[#659093]">pembuatan framework, pengembangan database, Kapustakan
                                        yang bekerjasama dengan Kraton Ngayogyakarta, pengintegrasian API, hingga
                                        pendokumentasian setiap proyek</span>
                                </p>



                            </div>
                            <div class="mt-8 smx:space-y-5">
                                <br>
                                <button>
                                    <a href="https://lumintu-logic.com/" type="button"
                                        class=" absolute mb-300 shadow-md w-50 text-white bg-[#DDB07F] hover:bg-[#c6925b] focus:ring-4 focus:outline-none focus:ring-[#ddb07f] font-medium rounded-lg text-sm px-5 py-2.5 -mt-10 text-center inline-flex items-center">
                                        Get Started
                                        <svg class="w-5 h-5 ml-2 -mr-1" fill="currentColor" viewBox="0 0 20 20"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd"
                                                d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z"
                                                clip-rule="evenodd"></path>
                                        </svg>
                                    </a>
                                </button>
                            </div>
                        </div>
                    </div>
                    <img class="md:visible mdx:hidden rounded-lg shadow-md hover:shadow-lg"
                        src="assets/img/master-img.jpg" alt="master-img">
                </div>
            </div>
            <div class="project">

                <div class="text-center">

                    <h1 id="Product" class=" my-24 text-3xl text-[#659093] font-inter smx:mt-96  smx:text-2xl ">
                        Lumintu Logic <br> Internship Program
                    </h1>
                    <div
                        class="row lgx:max-w-xs w-100 h-30 my-5 grid lgx:grid-cols-1 lgx:inline-block lgx:mx-auto  md:grid-cols-4">
                        <div class="mx-4 my-4 ">
                            <div
                                class="bg-gradient-to-t to-yellow-300 from-yellow-100 hover:border-2 red:300 hover:border-transparent  max-w-sm  rounded-lg  shadow-md  ">
                                <a href="#">
                                    <img class="rounded-t-lg bg-gradient-to-tr from-red-100  to-orange-300 h-36 w-[68]"
                                        src="http://192.168.18.51:8055/assets/463315d9-aa0c-4594-ae2f-a297f7eacf60.png" />
                                </a>
                                <div class="p-5 bg-[#F7F2F0] h-56">


                                    <a href="#">
                                        <h5
                                            class="mb-2 text-lg font-bold tracking-tight text-[#659093] dark:text-[#659093] font-inter">
                                            ProKidz</h5>
                                    </a>
                                    <p
                                        class="mb-3 mt-3 font-normal text-gray-700 dark:text-gray-400 text-xs text-justify">
                                        Curriculum K5 merupakan sebuah program yang diinisiasi lumintu learners. LMS K5
                                        ini membuat Aplikasi “Learning Management System” untuk anak-anak usia 5-12
                                        tahun.
                                    </p>
                                    <button
                                        class="m-8 mdx:visible md:hidden smx:text-xs smx:h-8 text-[10] mx-auto text-white bg-[#DDB07F] hover:bg-[#d4a36e] focus:ring-4 focus:outline-none font-medium rounded-lg text-sm px-5 text-center dark:bg-[#DDB07F] dark:hover:bg-[#c4986a]"
                                        type="button" data-modal-toggle="K5">
                                        read more
                                    </button>
                                    <button
                                        class=" md:visible mdx:hidden md:mt-6 h-10  smx:text-xs smx:h-8 text-[10] mx-auto text-white bg-[#DDB07F] hover:bg-[#d4a36e] focus:ring-4 focus:outline-none font-medium rounded-lg text-sm px-5 text-center dark:bg-[#DDB07F] dark:hover:bg-[#c4986a]"
                                        type="button" data-modal-toggle="K5">
                                        read more
                                    </button>

                                    <!-- Main modal -->
                                    <div id="K5" tabindex="-1" aria-hidden="true"
                                        class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 w-full md:inset-0 h-modal md:h-full">
                                        <div class="relative p-4 w-full max-w-2xl h-full md:h-auto">
                                            <!-- Modal content -->
                                            <div class="relative bg-white rounded-lg shadow dark:bg-[#f7f2f0]">
                                                <!-- Modal header -->
                                                <div
                                                    class="flex justify-between items-start p-5 rounded-t border-b dark:border-gray-600 bg-[#DDB07F] hover:bg-[#d4a36e]">
                                                    <h3 class="text-xl
                                                     font-semibold text-gray-900 lg:text-2xl dark:text-[#659093]">

                                                    </h3>
                                                    <img class="h-12 w-36" src="assets/img/K5.png">

                                                    <button type="button"
                                                        class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-600 dark:hover:text-white"
                                                        data-modal-toggle="K5">
                                                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
                                                            xmlns="http://www.w3.org/2000/svg">
                                                            <path fill-rule="evenodd"
                                                                d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                                                                clip-rule="evenodd"></path>
                                                        </svg>
                                                    </button>
                                                </div>
                                                <!-- Modal body -->
                                                <div
                                                    class="p-6 space-y-6 bg-scroll bg-contain overflow-auto  h-96 min-w-full ">

                                                    <div
                                                        class="text-justify text-base leading-relaxed text-gray-500 dark:text-gray-400">
                                                        <h1 class="text-left text-black">Deskripsi : </h1>
                                                        <?= $dataJson->{'data'}[0]->{'product_description'}?>


                                                        <div
                                                            class="mt-3 text-base leading-relaxed text-gray-500 dark:text-gray-400">
                                                            <h1 class="text-left text-black">Manfaat :</h1>

                                                            <?= $dataJson->{'data'}[0]->{'product_benefit'}?>

                                                        </div>

                                                        <div
                                                            class="mt-3 text-base leading-relaxed text-gray-500 dark:text-gray-400">
                                                            <?= $dataJson->{'data'}[0]->{'product_lesson'}?>
                                                        </div>

                                                        <div
                                                            class="mt-3 text-base leading-relaxed text-gray-500 dark:text-gray-400">
                                                            <h1 class="text-left text-black">Profil Mentor :</h1>
                                                            <?= $dataJson->{'data'}[0]->{'product_mentor_profile'}?>
                                                        </div>

                                                        <div
                                                            class="mt-3 text-base leading-relaxed text-gray-500 dark:text-gray-400">
                                                        </div>
                                                        <h1 class="text-left text-black">Durasi :</h1>
                                                        <?= $dataJson->{'data'}[0]->{'product_duration'}?>
                                                    </div>




                                                </div>
                                                <!-- Modal footer -->

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="mx-6 my-4 lgx:my-12 ">
                            <div
                                class="bg-gradient-to-t to-yellow-300 from-yellow-100 hover:border-2 red:300 hover:border-transparent max-w-sm rounded-lg  shadow-md  ">

                                <a href="#">
                                    <img class="rounded-t-lg bg-gradient-to-tr from-red-100  to-orange-300 h-36 w-[68]"
                                        src="http://192.168.18.51:8055/assets/579cbfdd-1e94-429a-9476-9c4615b6d8b2.png" />
                                </a>
                                <div class="p-5 bg-[#F7F2F0] h-56">
                                    <a href="#">
                                        <h5
                                            class="mb-2 text-lg font-bold tracking-tight text-[#659093] dark:text-[#659093] font-inter">
                                            CodeCation</h5>
                                    </a>
                                    <p
                                        class="mb-3  mt-3 font-normal text-gray-700 dark:text-gray-400 text-xs text-justify">
                                        For SMK Student adalah membangun sebuah project yang akan nantinya digunakan
                                        oleh anak SMK yang ingin mau belajar lewat online.
                                    </p>
                                    <button
                                        class="mdx:visible md:hidden m-8 h-10 smx:text-xs smx:h-8 text-[10] mx-auto text-white bg-[#DDB07F] hover:bg-[#d4a36e] focus:ring-4 focus:outline-none font-medium rounded-lg text-sm px-5 text-center dark:bg-[#DDB07F] dark:hover:bg-[#c4986a]"
                                        type="button" data-modal-toggle="SMK">
                                        read more
                                    </button>


                                    <button
                                        class="  md:visible mdx:hidden md:mt-6 h-10  smx:text-xs smx:h-8 text-[10] mx-auto text-white bg-[#DDB07F] hover:bg-[#d4a36e] focus:ring-4 focus:outline-none font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-[#DDB07F] dark:hover:bg-[#c4986a]"
                                        type="button" data-modal-toggle="SMK">
                                        read more
                                    </button>


                                    <!-- Main modal -->
                                    <div id="SMK" tabindex="-1" aria-hidden="true"
                                        class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 w-full md:inset-0 h-modal md:h-full">
                                        <div class="relative p-4 w-full max-w-2xl h-full md:h-auto">
                                            <!-- Modal content -->
                                            <div class="relative bg-white rounded-lg shadow dark:bg-[#f7f2f0]">
                                                <!-- Modal header -->
                                                <div
                                                    class="flex justify-between items-start p-5 rounded-t border-b dark:border-gray-600 bg-[#DDB07F] hover:bg-[#d4a36e]">
                                                    <h3 class="text-xl
                                                        font-semibold text-gray-900 lg:text-2xl dark:text-[#659093]">

                                                    </h3>
                                                    <img class="h-12 w-36" src="assets/img/SMK.png">
                                                    <button type="button"
                                                        class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-600 dark:hover:text-white"
                                                        data-modal-toggle="SMK">
                                                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
                                                            xmlns="http://www.w3.org/2000/svg">
                                                            <path fill-rule="evenodd"
                                                                d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                                                                clip-rule="evenodd"></path>
                                                        </svg>
                                                    </button>
                                                </div>
                                                <!-- Modal body -->
                                                <div
                                                    class="p-6 space-y-6 bg-scroll bg-contain overflow-auto  h-96 min-w-full">
                                                    <h1 class="text-left text-black -mb-4 ">Deskripsi : </h1>
                                                    <p
                                                        class="text-justify text-base leading-relaxed text-gray-500 dark:text-gray-400 ">
                                                        <?= $dataJson->{'data'}[1]->{'product_description'}?>

                                                    </p>
                                                    <h1 class="text-left text-black">Manfaat : </h1>
                                                    <p
                                                        class="text-justify text-base leading-relaxed text-gray-500 dark:text-gray-400">
                                                        <?= $dataJson->{'data'}[1]->{'product_benefit'}?>

                                                    <div
                                                        class=" text-justify text-base leading-relaxed text-gray-500 dark:text-gray-400">
                                                        <?= $dataJson->{'data'}[1]->{'product_lesson'}?>
                                                    </div>
                                                    </p>
                                                    <div
                                                        class="text-justify text-base leading-relaxed text-gray-500 dark:text-gray-400">
                                                        <h1 class="text-left text-black">Profil Mentor : </h1>
                                                        <?= $dataJson->{'data'}[1]->{'product_mentor_profile'}?>
                                                    </div>

                                                    <div
                                                        class="text-justify text-base leading-relaxed text-gray-500 dark:text-gray-400">
                                                        <h1 class="text-left text-black">Durasi : </h1>
                                                        <?= $dataJson->{'data'}[1]->{'product_duration'}?>
                                                    </div>

                                                    </p>

                                                </div>
                                                <!-- Modal footer -->

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="mx-6 my-4 lgx:my-12">
                            <div
                                class="bg-gradient-to-t to-yellow-300 from-yellow-100 hover:border-2 red:300 hover:border-transparent max-w-sm rounded-lg  shadow-md ">
                                <a href="#">
                                    <img class="rounded-t-lg bg-gradient-to-tr from-red-100  to-orange-300 h-36 w-[68]"
                                        src="http://192.168.18.51:8055/assets/c0f28451-c9f2-4265-98ba-f32d929496a7.png" />
                                </a>
                                <div class=" p-5 bg-[#F7F2F0] h-56">
                                    <a href="#">
                                        <h5
                                            class="mb-2 text-lg font-bold tracking-tight text-[#659093] dark:text-[#659093] font-inter">
                                            GradIT</h5>
                                    </a>
                                    <p
                                        class="mb-3  mt-3 font-normal text-gray-700 dark:text-gray-400 text-xs text-justify">
                                        Curriculum undergraduate adalah project untuk mahasiswa akhir dan fresh graduate
                                        bagi perguruan tinggi negri dan swasta.

                                    </p>
                                    <button
                                        class="mdx:visible md:hidden m-8 h-10 smx:text-xs smx:h-8 text-[10] mx-auto text-white bg-[#DDB07F] hover:bg-[#d4a36e] focus:ring-4 focus:outline-none font-medium rounded-lg text-sm px-5 text-center dark:bg-[#DDB07F] dark:hover:bg-[#c4986a]"
                                        type="button" data-modal-toggle="UG">

                                        read more
                                    </button>
                                    <button
                                        class="  md:visible mdx:hidden md:mt-6 h-10  smx:text-xs smx:h-8 text-[10] mx-auto text-white bg-[#DDB07F] hover:bg-[#d4a36e] focus:ring-4 focus:outline-none font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-[#DDB07F] dark:hover:bg-[#c4986a]"
                                        type="button" data-modal-toggle="UG">
                                        read more
                                    </button>


                                    <!-- Main modal -->
                                    <div id="UG" tabindex="-1" aria-hidden="true"
                                        class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 w-full md:inset-0 h-modal md:h-full">
                                        <div class="relative p-4 w-full max-w-2xl h-full md:h-auto">
                                            <!-- Modal content -->
                                            <div class="relative bg-white rounded-lg shadow dark:bg-[#f7f2f0]">
                                                <!-- Modal header -->
                                                <div
                                                    class="flex justify-between items-start p-5 rounded-t border-b dark:border-gray-600 bg-[#DDB07F] hover:bg-[#d4a36e]">
                                                    <h3
                                                        class="text-xl font-semibold text-gray-900 lg:text-2xl dark:text-[#659093] ">

                                                    </h3>
                                                    <img class="h-12 w-36" bg- src="assets/img/Logo_UG.png">
                                                    <button type="button"
                                                        class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-600 dark:hover:text-white"
                                                        data-modal-toggle="UG">
                                                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
                                                            xmlns="http://www.w3.org/2000/svg">
                                                            <path fill-rule="evenodd"
                                                                d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                                                                clip-rule="evenodd"></path>
                                                        </svg>
                                                    </button>
                                                </div>
                                                <!-- Modal body -->
                                                <div
                                                    class="p-6 space-y-6 bg-scroll bg-contain overflow-auto  h-96 min-w-full">
                                                    <h1 class="text-left text-black -mb-4">Deskripsi : </h1>
                                                    <p
                                                        class="text-justify text-base leading-relaxed text-gray-500 dark:text-gray-400">
                                                        <?= $dataJson->{'data'}[2]->{'product_description'}?>

                                                    </p>
                                                    <h1 class="text-left text-black ">Manfaat : </h1>
                                                    <p
                                                        class="mt-3 text-justify text-base leading-relaxed text-gray-500 dark:text-gray-400">
                                                        <?= $dataJson->{'data'}[2]->{'product_benefit'}?>
                                                        <?= $dataJson->{'data'}[2]->{'product_lesson'}?>
                                                    </p>

                                                    <div
                                                        class="mt-3 text-justify text-base leading-relaxed text-gray-500 dark:text-gray-400">
                                                        <h1 class="text-left text-black ">Profil Mentor : </h1>
                                                        <?= $dataJson->{'data'}[2]->{'product_mentor_profile'}?>
                                                    </div>
                                                    <div
                                                        class="mt-3 text-justify text-base leading-relaxed text-gray-500 dark:text-gray-400">
                                                        <h1 class="text-left text-black ">Durasi : </h1>
                                                        <?= $dataJson->{'data'}[2]->{'product_duration'}?>
                                                    </div>

                                                </div>
                                                <!-- Modal footer -->

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="mx-6 my-4">
                            <div
                                class="relative bg-gradient-to-t to-yellow-300 from-yellow-100 hover:border-2 red:300 hover:border-transparent max-w-sm rounded-lg  shadow-md ">
                                <a href="#">
                                    <img class="rounded-t-lg bg-gradient-to-tr from-red-100  to-orange-300 h-36 w-[68] "
                                        src="https://1vmn9lxs.directus.app/assets/02a54c29-fadf-4306-a041-0f8d10e5aa46?access_token=admin" />
                                </a>
                                <div class="p-5 bg-[#F7F2F0] h-56 ">
                                    <a href="#">
                                        <h5
                                            class="mb-2 text-lg font-bold tracking-tight text-[#659093] dark:text-[#659093] font-inter">
                                            InCareer</h5>
                                    </a>
                                    <p
                                        class="mb-3  mt-3 font-normal text-gray-700 dark:text-gray-400 text-xs text-justify">
                                        In career merupakan suatu project akademi untuk orang-orang berusia 25 tahun ke
                                        atas, yang ingin berkarir dalam bidang IT.
                                    </p>
                                    <button
                                        class="mdx:visible md:hidden m-8 h-10 smx:text-xs smx:h-8 text-[10] mx-auto text-white bg-[#DDB07F] hover:bg-[#d4a36e] focus:ring-4 focus:outline-none font-medium rounded-lg text-sm px-5 text-center dark:bg-[#DDB07F] dark:hover:bg-[#c4986a]"
                                        type="button" data-modal-toggle="IC">
                                        read more
                                    </button>
                                    <button
                                        class="  md:visible mdx:hidden md:mt-6 h-10  smx:text-xs smx:h-8 text-[10] mx-auto text-white bg-[#DDB07F] hover:bg-[#d4a36e] focus:ring-4 focus:outline-none font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-[#DDB07F] dark:hover:bg-[#c4986a]"
                                        type="button" data-modal-toggle="IC">
                                        read more
                                    </button>


                                    <!-- Main modal -->
                                    <div id="IC" tabindex="-1" aria-hidden="true"
                                        class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 w-full md:inset-0 h-modal md:h-full">
                                        <div class="relative p-4 w-full max-w-2xl h-full md:h-auto">
                                            <!-- Modal content -->
                                            <div class="relative bg-white rounded-lg shadow dark:bg-[#f7f2f0]">
                                                <!-- Modal header -->
                                                <div
                                                    class="flex justify-between items-start p-5 rounded-t border-b dark:border-gray-600 bg-[#DDB07F] hover:bg-[#d4a36e]">
                                                    <h3 class="text-xl
                                                font-semibold text-gray-900 lg:text-2xl dark:text-[#659093]">

                                                    </h3>
                                                    <img class="h-12 w-36" src="assets/img/IC.png">
                                                    <button type="button"
                                                        class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-600 dark:hover:text-white"
                                                        data-modal-toggle="IC">
                                                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
                                                            xmlns="http://www.w3.org/2000/svg">
                                                            <path fill-rule="evenodd"
                                                                d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                                                                clip-rule="evenodd"></path>
                                                        </svg>
                                                    </button>
                                                </div>
                                                <!-- Modal body -->
                                                <div
                                                    class="p-6 space-y-6 bg-scroll bg-contain overflow-auto  h-96 min-w-full">
                                                    <h1 class="text-left text-black -mb-4 ">Deskripsi : </h1>
                                                    <p
                                                        class=" text-justify text-base leading-relaxed text-gray-500 dark:text-gray-400">
                                                        <?= $dataJson->{'data'}[3]->{'product_description'}?>

                                                    </p>
                                                    <h1 class="text-left text-black  ">Manfaat : </h1>
                                                    <p
                                                        class=" text-justify text-base leading-relaxed text-gray-500 dark:text-gray-400">
                                                        <?= $dataJson->{'data'}[3]->{'product_benefit'}?>

                                                    </p>
                                                    <div
                                                        class="mt-3 text-justify text-base leading-relaxed text-gray-500 dark:text-gray-400">
                                                        <?= $dataJson->{'data'}[3]->{'product_lesson'}?>
                                                    </div>
                                                    <div
                                                        class="mt-3 text-justify text-base leading-relaxed text-gray-500 dark:text-gray-400">
                                                        <h1 class="text-left text-black ">Profil Mentor : </h1>
                                                        <?= $dataJson->{'data'}[3]->{'product_mentor_profile'}?>
                                                    </div>
                                                    <div
                                                        class="mt-3 text-justify text-base leading-relaxed text-gray-500 dark:text-gray-400">
                                                        <h1 class="text-left text-black ">Durasi : </h1>
                                                        <?= $dataJson->{'data'}[3]->{'product_duration'}?>
                                                    </div>

                                                </div>
                                            </div>
                                            <!-- Modal footer -->

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <section class="aboutus ">
                    <div class="row mx-8 mb-12 ">
                        <h1 class="text-3xl font-inter text-center mt-12 text-[#659093] ">About <br>Lumintu Logic</h1>
                        <div class="flex justify-center my-5">
                            <svg class="animate-bounce" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" role="img"
                                width="32" height="32" preserveAspectRatio="xMidYMid meet" viewBox="0 0 16 16">
                                <path fill="currentColor"
                                    d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM8.5 4.5a.5.5 0 0 0-1 0v5.793L5.354 8.146a.5.5 0 1 0-.708.708l3 3a.5.5 0 0 0 .708 0l3-3a.5.5 0 0 0-.708-.708L8.5 10.293V4.5z" />
                            </svg>

                        </div>


                        <div class=" mdx:w-full flex justify-center w-1/2 mx-auto mt-10 ">
                            <a href="#"
                                class="  block p-6 max-w-sm bg-white rounded-lg  shadow-md hover:bg-gray-100 dark:bg-[#F7F2F0]  dark:hover:bg-gray-100">



                                <p class=" mdx:text-xs font-normal text-justify  text-gray-700 dark:text-gray-400">
                                    <span class="text-[#659093]">Lumintu Logic</span> is an IT company that originates
                                    from
                                    Yogyakarta, Indonesia. The word Lumintu itself means continuous service in Javanese.
                                    Founded in <span class="text-[#659093]">2009</span>,
                                    Lumintu Logic developed its first products mostly for <span
                                        class="text-[#659093]">desktop application</span> environment.
                                </p>

                            </a>
                        </div>
                    </div>
                </section>
            </div>
        </div>

        <hr class="text-black">

        <div class="grid grid-cols-6 gap-4">

            <div class=" mdx:text-xs font-normal text-[#659093] dark:text-[#659093] col-start-2 col-span-4 ...">
                <h1 id="Contact" class=" my-24 mb-12 text-3xl font-inter text-center   smx:text-2xl ">
                    Contact
                </h1>

                <form id="form" action="" enctype="multipart/form-data">
                    <div class="mb-6">
                        <label for="nama" class="block mb-2 text-sm font-medium text-[#659093] dark:text-[#659093]">Your
                            name</label>
                        <input name="name" type="nama" id="name"
                            class=" bg-gray-50 border border-[#659093] text-[#659093] text-sm rounded-lg focus:outline-none focus:ring-1  focus:ring-[#ddb07f] focus:border-[#ddb07f] block w-full p-2.5 dark:bg- dark:border-stone-800 dark:placeholder-gray-400 dark:text-gray-800 dark:focus:ring-[#ddb07f] dark:focus:border-[#ddb07f]">
                    </div>


                    <div class="mb-4">
                        <label for="email"
                            class="block mb-2 text-sm font-medium text-[#659093] dark:text-[#659093] after:content-['*'] after:text-pink-500 after:ml-0.5">Your
                            email</label>
                        <input name="email" type="email" id="email"
                            class="bg-gray-50 border border-gray-300 text-gray-600 text-sm rounded-lg focus:outline-none focus:ring-1  focus:ring-[#ddb07f] focus:border-[#ddb07f] block w-full p-2.5 dark:bg-white dark:border-stone-800 dark:placeholder-gray-400 dark:text-gray-800 dark:focus:ring-[#ddb07f] dark:focus:border-[#ddb07f] invalid:text-pink-700 invalid:focus:ring-pink-700 invalid:border-pink-700 peer "
                            placeholder="name@email.com">

                        <p class="text-pink-600 text-sm invisible peer-invalid:visible">
                            Email tidak valid
                        </p>
                    </div>

                    <div class="mb-6">
                        <label for="subject"
                            class="block mb-2 text-sm font-medium text-[#659093] dark:text-[#659093]">Your
                            subject</label>
                        <input name="subject" type="subject" id="subject"
                            class="bg-gray-50 border border-[#659093] text-[#659093] text-sm rounded-lg focus:outline-none focus:ring-1  focus:ring-[#ddb07f] focus:border-[#ddb07f] block w-full p-2.5 dark:bg- dark:border-stone-800 dark:placeholder-gray-400 dark:text-gray-800 dark:focus:ring-[#ddb07f] dark:focus:border-[#ddb07f]"
                            required value="">
                    </div>

                    <label for="message" class="block mb-2 text-sm font-medium text-[#659093] dark:text-[#659093]">Your
                        message</label>
                    <textarea name="message" id="message" rows="4"
                        class="block p-2.5 w-full text-sm text-gray-600 bg-gray-50 rounded-lg border border-gray-300 focus:outline-none focus:ring-1  focus:ring-[#ddb07f] focus:border-[#ddb07f] dark:bg-white dark:border-stone-800  dark:placeholder-gray-400 dark:text-gray-800 dark:focus:ring-[#ddb07f] dark:focus:border-[#ddb07f]"
                        placeholder="" required
                        value="<?php if(!empty($_POST['message'])&& $type == 'error'){ echo $_POST['message'];}?>"></textarea>
                    <br>
                    <div class="my-4">

                        <div class="button">
                            <button value="Send" name='send' type="submit"
                                class="text-white block mb-20 bg-[#DDB07F] hover:bg-[#ddb07f] focus:ring-4 focus:outline-none focus:ring-[#ddb07f] font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-[#ddb07f] dark:hover:bg-[#c6925b] dark:focus:ring-[#ddb07]"><img
                                    id="loader"
                                    src="https://res.cloudinary.com/sivadass/image/upload/v1498134389/icons/loader.gif"
                                    alt="loading">Submit</button>
                        </div>

                    </div>
                </form>


            </div>
        </div>
    </div>

    </div>
    <section class="footer">
        <div class="row absolute w-full">
            <footer class="p-4 bg-[#DDB07F] shadow md:px-6 dark:bg-[#DDB07F]">
                <div class="sm:flex sm:items-center sm:justify-between">
                    <a href="" class="flex items-center mb-4 sm:mb-0">
                        <img src="assets/img/lumintu-text.png" class="mr-3 h-8" alt="Lumintu Logo" />


                    </a>
                    <ul class="flex flex-wrap items-center mb-6 text-sm text-gray-500 sm:mb-0 dark:text-gray-100">

                        <li>
                            <a href="#" class="mr-4 hover:underline md:mr-6">About</a>
                        </li>
                        <li>
                            <a href="#" class="mr-4 hover:underline md:mr-6">Privacy Policy</a>
                        </li>
                        <li>
                            <a href="#" class="mr-4 hover:underline md:mr-6">Licensing</a>
                        </li>
                        <li>
                            <a href="#" class="hover:underline">Contact</a>
                        </li>
                    </ul>
                </div>
                <hr class="my-6 border-gray-200 sm:mx-auto  lg:my-8" />
                <span class="block text-sm  sm:text-center text-white">© 2022
                    <a href="" class="hover:underline">Lumintu’s Stack™</a>. All Rights Reserved.
                </span>
            </footer>
            <script src="https://unpkg.com/flowbite@1.4.2/dist/flowbite.js"></script>
            <script>
            // $(document).ready(function() {
            //     $.ajax({
            //         method: 'GET',
            //         url: 'http://192.168.18.90:8055/items/landingpage_content',
            //         success: function(data) {

            //         }
            //     })
            // })

            async function fetchData() {
                let response = await fetch("https://1vmn9lxs.directus.app/items/landingpage");
                let data = await response.json();

                console.log(data);

            }
            </script>
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
            <script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/jquery.validate.min.js"></script>
            <script src="ajax.js"></script>
            <!-- <link rel="stylesheet" href="https://unpkg.com/flowbite@1.4.2/dist/flowbite.min.css" /> -->

</body>

</html>