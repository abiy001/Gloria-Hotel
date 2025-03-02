<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/navbar.css">
    <link rel="stylesheet" href="css/home.css">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="/images/logo-hotel/logo-hotel.png" rel="icon">
    <link href="/images/logo-hotel/logo-hotel.png" rel="apple-touch-icon">

    <title>Home</title>

</head>

<body>
    
    <div class="w-full">
        @component('fragments.toast')
            
        @endcomponent
        @component('layouts.navbar')
        @endcomponent

        <div class="kelelep w-full h-[800px]">
            <div class="jumbotron flex w-full h-4/6 bg-slate-900 bg-opacity-40 justify-center text-center">
                <div class=" flex flex-col gap-3 items-center justify-center h-full px-2">
                    <h2 class="text-white font-bold">Laravel | Cawowo Team</h4>
                        <h1 style ="color: {{ env('COLOR_2') }}" class=" text-3xl font-bold ">KEPERCAYAAN PELANGGAN
                            ADALAH PRIORITAS KAMI.</h1>
                        <P class=" text-white text-lg">Jangan ragu untuk memilih hotel kami, karena kami menyediakan
                            layanan terbaik dan kualitas kamar premium dengan fasilitas lengkap.</P>
                </div>
            </div>
        </div>
    </div>

    <div class="flex m-0 pb-44 justify-center w-full h-7xl">
        <div class="justify-center flex flex-col gap-36 w-6xl h-xl">
            <div class="kartu1 flex pl-28 pr-28 justify-center items-center">
                <div class="w-lg h-56 flex flex-col justify-center items-center">
                    <h1 class="about text-center font-bold font-serif text-5xl">TENTANG KAMI</h1><br>
                    <p class="pAbout text-xl text-center font-serif">kami adalah new brand bagi dunia hotel dengan
                        ketersediaan layanan yang akan
                        memuaskan anda selama anda bermalam di hotel kami.</p>
                </div>
                <div class="flex items-center justify-center">
                    <img class="image w-8/12 h-auto rounded-2xl" src="{{ url('/images/hotels/loby.webp') }}"
                        alt="">
                </div>
            </div>
            <div class="kartu2 flex pl-28 pr-28 justify-center items-center">
                <div class="flex items-center justify-center">
                    <img class="gambar  w-8/12 h-auto rounded-2xl" src="{{ url('/images/hotels/belakanghotel.webp') }}"
                        alt="">
                </div>
                <div class="w-lg h-56 flex flex-col justify-center items-center">
                    <h1 class="tentang text-center font-bold font-serif text-5xl">KEUNGGULAN KAMI</h1><br>
                    <p class="pTentang text-xl text-center font-serif">kami memiliki sejumlah fasilitas yang bisa anda
                        gunakan secara gratis
                        seperti gym room, swimming pool, spa, cafe, restaurant dan masih banyak lagi fasilitas kami
                        yang bisa anda gunakan.</p>
                </div>
            </div>
        </div>
    </div>

    {{-- adds --}}

    <div class="relative w-full h-screen overflow-hidden">
        {{-- awan --}}
        <div class="absolute w-full h-full">
            <img src="/images/png/awan1.png" alt="awan1"
                class="awan1 absolute bottom-[25%] left-[8%] w-3/12 opacity-85">
            <img src="/images/png/awan2.png" alt="awan2"
                class="awan2 absolute bottom-[35%] right-[5%] w-4/12 opacity-75 blur-sm">
            <img src="/images/png/awan3.png" alt="awan3"
                class="awan3 absolute top-[10%] left-[40%] w-3.5/12 opacity-70 scale-90">
            <img src="/images/png/awan4.png" alt="awan4"
                class="awan4 absolute top-[50%] right-[30%] w-2.5/12 opacity-65 scale-95 blur-sm">
        </div>
        {{-- gunung --}}
        <div class="adj-f absolute bottom-0 left-0 w-full h-full flex justify-start items-end z-50">
            <img src="/images/png/front.png" alt="front" class="w-full">
        </div>
        <div class="adj-l absolute bottom-0 left-0 w-full z-40">
            <img src="/images/png/left.png" alt="Left" class="w-full">
        </div>
        <div class="adj-r absolute bottom-0 right-0 w-full z-40">
            <img src="/images/png/right.png" alt="Right" class="w-full">
        </div>
        <div class="adj-m absolute bottom-0 left-1/2 transform -translate-x-1/2 w-full z-20">
            <img src="/images/png/mid.png" alt="Mid" class="w-full">
        </div>
        <div class="adj-behind1 absolute bottom-0 left-0 w-full z-0">
            <img src="/images/png/left-behind.png" alt="Left Behind" class="w-full">
        </div>
        <div class="adj-behind2 absolute bottom-0 right-0 w-full z-0">
            <img src="/images/png/right-behind.png" alt="Right Behind" class="w-full">
        </div>
    </div>

    {{-- card --}}

    <div class="w-full container-card">
        <div class="judul flex justify-center pt-10">
            <h1 class="font-sans text-8xl">Facility</h1>
        </div>
        <div class="main">
            <div class="container">
                <div class="panel" style="background-image: url(images/card/pool.jpg)">
                    <h3>Swimming Pool</h3>
                </div>
                <div class="panel" style="background-image: url(images/card/gymRoom.jpeg)">
                    <h3>Gym Room</h3>
                </div>
                <div class="panel" style="background-image: url(images/card/bar.webp)">
                    <h3>Bar</h3>
                </div>
                <div class="panel active" style="background-image: url(images/card/basketCourt.jpg)">
                    <h3>Basket Court</h3>
                </div>
                <div class="panel" style="background-image: url(images/card/golfField.jpg)">
                    <h3>Golf Field</h3>
                </div>
                <div class="panel" style="background-image: url(images/card/spa.jpeg)">
                    <h3>Spa</h3>
                </div>
                <div class="panel" style="background-image: url(images/card/cafe.jpg)">
                    <h3>Cafe</h3>
                </div>
            </div>
        </div>
    </div>

    {{-- crew --}}

    <div class="dev relative h-5/6">
        <div class="w-full h-full">
            <div class="carousel border-3">
                <div class="list">

                    <div class="item">
                        <img class=" mt-6" src="images/profile/kepin.png">
                        <div class="introduce">
                            <div class="title">CREW</div>
                            <div class="topic">Kevin Dwi</div>
                            <div class="des">
                                Ketawanya yang khas dan menular mampu membuat orang lain bahagia, mencairkan suasana,
                                serta menghadirkan energi positif di sekitarnya.
                            </div>
                            <button class="seeMore">SEE MORE &#8599</button>
                        </div>
                        <div class="detail">
                            <div class="title">Kepin Dan peliharaan</div>
                            <div class="des">
                                Ia adalah anak yang memendam kecerdasan luar biasa, sering terlihat tenang dan
                                sederhana,
                                tetapi memiliki pemikiran yang tajam dan mendalam. Kemampuannya menganalisis sesuatu
                                dengan
                                detail membuatnya menonjol di saat yang tepat. Dengan rasa ingin tahu yang tinggi,
                                ia terus belajar dan berkembang tanpa banyak terlihat.
                            </div>
                            <div class="specifications">
                                <div>
                                    <p>Used Time</p>
                                    <p>6 hours</p>
                                </div>
                                <div>
                                    <p>Charging port</p>
                                    <p>Type-C</p>
                                </div>
                                <div>
                                    <p>Compatible</p>
                                    <p>Android</p>
                                </div>
                                <div>
                                    <p>Bluetooth</p>
                                    <p>5.3</p>
                                </div>
                                <div>
                                    <p>Controlled</p>
                                    <p>Touch</p>
                                </div>
                            </div>
                            <div class="checkout">
                                <button>ADD TO CART</button>
                                <button>CHECKOUT</button>
                            </div>
                        </div>
                    </div>

                    <div class="item">
                        <img src="images/profile/abi.png">
                        <div class="introduce">
                            <div class="title">LEADER</div>
                            <div class="topic">Hafidh Abiyyu</div>
                            <div class="des">
                                Seorang UI/UX Designer yang ahli dalam merancang
                                pengalaman pengguna yang intuitif dan antarmuka yang menarik
                                serta responsif.
                            </div>
                            <button class="seeMore">SEE MORE &#8599</button>
                        </div>
                        <div class="detail">
                            <div class="title">Abiy</div>
                            <div class="des">
                                Seseorang dengan mental yang kuat, mampu menghadapi tantangan dengan ketahanan, tetap
                                fokus di bawah tekanan,
                                tidak mudah menyerah, serta memiliki pola pikir yang positif. Ia juga beradaptasi dengan
                                baik terhadap perubahan,
                                belajar dari kegagalan, dan terus berkembang untuk mencapai
                                tujuan dengan tekad serta disiplin yang tinggi.
                            </div>
                            <div class="specifications justify-between">
                                <div class="p-2">
                                    <p>Mana</p>
                                    <p>10.000</p>
                                </div>
                                <div class="p-2">
                                    <p>Cost</p>
                                    <p>579</p>
                                </div>
                                <div class="p-2">
                                    <p>Health</p>
                                    <p>6.800</p>
                                </div>
                                <div class="p-2">
                                    <p>Durability</p>
                                    <p>7.050</p>
                                </div>
                                <div class="p-2">
                                    <p>Passive</p>
                                    <p>-Uknown-</p>
                                </div>
                            </div>
                            <div class="checkout mt-3">
                                <button><ion-icon name="logo-whatsapp"></ion-icon></button>
                                <button><ion-icon name="logo-instagram"></ion-icon></button>
                            </div>
                        </div>
                    </div>

                    <div class="item">
                        <img src="images/profile/yazid.png">
                        <div class="introduce">
                            <div class="title">LEADER ASSISTANT</div>
                            <div class="topic">Yazid Khairul</div>
                            <div class="des">
                                Seorang Backend Developer yang bertanggung jawab merancang, membangun, dan mengelola
                                sistem server, database, serta API agar aplikasi berjalan lancar, aman, efisien,
                                dan dapat diakses dengan optimal.
                            </div>
                            <button class="seeMore">SEE MORE &#8599</button>
                        </div>
                        <div class="detail">
                            <div class="title">Yajit</div>
                            <div class="des">
                                Seseorang dengan semangat tinggi, selalu berusaha dengan penuh dedikasi,
                                pantang menyerah dalam menghadapi tantangan, dan memiliki motivasi kuat untuk
                                mencapai tujuannya. Dengan energi positif serta tekad yang kokoh, ia mampu menginspirasi
                                orang lain dan terus berkembang dalam setiap kesempatan yang ada.
                            </div>
                            <div class="specifications">
                                <div class="p-2">
                                    <p>Mana</p>
                                    <p>14.700</p>
                                </div>
                                <div class="p-2">
                                    <p>Cost</p>
                                    <p>529</p>
                                </div>
                                <div class="p-2">
                                    <p>Health</p>
                                    <p>7.890</p>
                                </div>
                                <div class="p-2">
                                    <p>Durability</p>
                                    <p>8.260</p>
                                </div>
                                <div class="p-2">
                                    <p>Passive</p>
                                    <p>-Uknown-</p>
                                </div>
                            </div>
                            <div class="checkout mt-3">
                                <button><ion-icon name="logo-whatsapp"></ion-icon></button>
                                <button><ion-icon name="logo-instagram"></ion-icon></button>
                            </div>
                        </div>
                    </div>

                    <div class="item">
                        <img src="images/profile/denggol.png">
                        <div class="introduce">
                            <div class="title">CREW</div>
                            <div class="topic">Muhammad Fardhan</div>
                            <div class="des">
                                Seorang pria tangguh adalah yang kuat secara fisik dan mental, tidak mudah menyerah,
                                mampu menghadapi tantangan dengan keberanian, serta selalu berusaha mengatasi
                                rintangan dengan tekad dan keteguhan hati.
                            </div>
                            <button class="seeMore">SEE MORE &#8599</button>
                        </div>
                        <div class="detail">
                            <div class="title">Denggol</div>
                            <div class="des">
                                Seseorang yang punya motivasi yang lumayan, cenderung tetap berusaha mencapai tujuannya,
                                meskipun kadang mengalami penurunan semangat. Ia tidak mudah menyerah, tetapi terkadang
                                membutuhkan dorongan tambahan untuk terus maju. Dengan tekad yang cukup kuat, ia
                                mampu menghadapi tantangan dan berkembang seiring waktu.
                            </div>
                            <div class="specifications">
                                <div class="p-2">
                                    <p>Mana</p>
                                    <p>13.700</p>
                                </div>
                                <div class="p-2">
                                    <p>Cost</p>
                                    <p>609</p>
                                </div>
                                <div class="p-2">
                                    <p>Health</p>
                                    <p>8.690</p>
                                </div>
                                <div class="p-2">
                                    <p>Durability</p>
                                    <p>9.780</p>
                                </div>
                                <div class="p-2">
                                    <p>Passive</p>
                                    <p>-Uknown-</p>
                                </div>
                            </div>
                            <div class="checkout mt-3">
                                <button><ion-icon name="logo-whatsapp"></ion-icon></button>
                                <button><ion-icon name="logo-instagram"></ion-icon></button>
                            </div>
                        </div>
                    </div>

                    <div class="item">
                        <img src="images/profile/apai.png">
                        <div class="introduce">
                            <div class="title">CREW</div>
                            <div class="topic">Arfan Yazeed</div>
                            <div class="des">
                                Seseorang yang dingin tapi tidak kejam cenderung tenang, tidak banyak bicara,
                                tetapi tetap peduli dan adil dalam bersikap.
                            </div>
                            <button class="seeMore">SEE MORE &#8599</button>
                        </div>
                        <div class="detail">
                            <div class="title">Apay</div>
                            <div class="des">
                                Seseorang dengan gaya yang kalem cenderung tenang dalam bersikap, tidak tergesa-gesa,
                                dan selalu menghadapi situasi dengan kepala dingin. Ia tidak mudah terpancing emosi,
                                berbicara dengan santai, serta memiliki aura yang menenangkan. Sikapnya yang
                                stabil membuatnya dihormati dan disukai banyak orang.
                            </div>
                            <div class="specifications">
                                <div class="p-2">
                                    <p>Mana</p>
                                    <p>9.870</p>
                                </div>
                                <div class="p-2">
                                    <p>Cost</p>
                                    <p>312</p>
                                </div>
                                <div class="p-2">
                                    <p>Health</p>
                                    <p>8.690</p>
                                </div>
                                <div class="p-2">
                                    <p>Durability</p>
                                    <p>10.690</p>
                                </div>
                                <div class="p-2">
                                    <p>Passive</p>
                                    <p>-Uknown-</p>
                                </div>
                            </div>
                            <div class="checkout mt-3">
                                <button><ion-icon name="logo-whatsapp"></ion-icon></button>
                                <button><ion-icon name="logo-instagram"></ion-icon></button>
                            </div>
                        </div>
                    </div>

                    <div class="item">
                        <img class=" mt-6 h-[500px] w-auto" src="images/profile/ranggo.png">
                        <div class="introduce">
                            <div class="title">CREW</div>
                            <div class="topic">Rangga Pandu</div>
                            <div class="des">
                                Seorang designer terkenal di kelas, kreatif dalam berkarya, selalu menghasilkan desain
                                menarik, dan sering diandalkan teman-temannya untuk berbagai proyek visual.
                            </div>
                            <button class="seeMore">SEE MORE &#8599</button>
                        </div>
                        <div class="detail">
                            <div class="title">Ranggo</div>
                            <div class="des">
                                Ia memiliki kreativitas yang bisa diandalkan dengan sangat baik, selalu mampu
                                menghadirkan
                                ide-ide segar dan solusi inovatif. Setiap karyanya mencerminkan imajinasi yang luas
                                serta ketelitian dalam detail. Dengan pemikirannya yang out of the box, ia sering
                                menjadi andalan dalam berbagai situasi kreatif.
                            </div>
                            <div class="specifications">
                                <div>
                                    <p>Used Time</p>
                                    <p>6 hours</p>
                                </div>
                                <div>
                                    <p>Charging port</p>
                                    <p>Type-C</p>
                                </div>
                                <div>
                                    <p>Compatible</p>
                                    <p>Android</p>
                                </div>
                                <div>
                                    <p>Bluetooth</p>
                                    <p>5.3</p>
                                </div>
                                <div>
                                    <p>Controlled</p>
                                    <p>Touch</p>
                                </div>
                            </div>
                            <div class="checkout mt-3">
                                <button><ion-icon name="logo-whatsapp"></ion-icon></button>
                                <button><ion-icon name="logo-instagram"></ion-icon></button>
                            </div>
                        </div>
                    </div>

                    <div class="item">
                        <img src="images/profile/nopaller.png">
                        <div class="introduce">
                            <div class="title">CREW</div>
                            <div class="topic">Muhammad Naufal</div>
                            <div class="des">
                                Sikapnya petantang-petenteng, terkesan percaya diri dan dominan, namun di saat
                                dibutuhkan, ia tetap bisa diandalkan dan bertanggung jawab.
                            </div>
                            <button class="seeMore">SEE MORE &#8599</button>
                        </div>
                        <div class="detail">
                            <div class="title">Nopal</div>
                            <div class="des">
                                Ia adalah seorang pejantan yang tangguh, selalu menghadapi tantangan dengan
                                keberanian
                                dan keteguhan hati. Dengan sikap yang tegas namun bijaksana, ia tidak mudah
                                goyah
                                oleh rintangan. Ia memiliki kepercayaan diri tinggi, sementara
                                kesetiaannya menjadikannya sosok yang dapat diandalkan.
                            </div>
                            <div class="specifications">
                                <div class="p-2">
                                    <p>Mana</p>
                                    <p>14.870</p>
                                </div>
                                <div class="p-2">
                                    <p>Cost</p>
                                    <p>782</p>
                                </div>
                                <div class="p-2">
                                    <p>Health</p>
                                    <p>13.690</p>
                                </div>
                                <div class="p-2">
                                    <p>Durability</p>
                                    <p>22.330</p>
                                </div>
                                <div class="p-2">
                                    <p>Passive</p>
                                    <p>-Uknown-</p>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

        </div>
        <div class="arrows">
            <button id="prev"><</button>
            <button id="next">></button>
            <button id="back">See All &#8599</button>
        </div>
    </div>

    </div>
    @component('layouts.footer')
        
    @endcomponent
    </div>


    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    <script src="js/jquery-3.7.1.min.js"></script>
    <script src="js/home.js"></script>
    <script src="js/navbar.js"></script>
</body>

</html>