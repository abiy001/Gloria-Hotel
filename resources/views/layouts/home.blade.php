<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/navbar.css">
    <link rel="stylesheet" href="css/home.css">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Home</title>

</head>

<body>
    <div class="w-full">
        @component('layouts.navbar')
        @endcomponent

        <div class="kelelep w-full h-[770px]">
            <div class="jumbotron flex w-full h-[700px] bg-slate-900 bg-opacity-40 justify-center text-center">
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

    <div class="flex justify-center bg-1 w-full h-[1300px]">
        <div class="m-3 justify-center grid grid-rows-2">
            <div class="place-content-center w-[1600px] h-[600px]">
                <div class="kartu1 grid grid-cols-2 place-items-center">
                    <div class="w-[500px] h-[468px] place-content-center place-items-center">
                        <h1 class="about text-[40px]">TENTANG KAMI</h1><br>
                        <p class="pAbout">kami adalah new brand bagi dunia hotel dengan ketersediaan layanan yang akan
                            memuaskan anda selama anda bermalam di hotel kami.</p>
                    </div>
                    <div class="w-[699px] h-[600px] place-content-center">
                        <img class="image w-[699px] h-[476px] rounded-2xl" src="{{ url('/images/hotels/hotel3.jpg') }}"
                            alt="">
                    </div>
                </div>
                <div class="kartu2 grid grid-cols-2 place-items-center">
                    <div class="w-[699px] h-[600px] place-content-center">
                        <img class="gambar w-[699px] h-[476px] rounded-2xl" src="{{ url('/images/hotels/hotel2.jpg') }}"
                            alt="">
                    </div>
                    <div class="w-[500px] h-[468px] place-content-center place-items-center">
                        <h1 class="tentang text-[40px]">KEUNGGULAN KAMI</h1><br>
                        <p class="pTentang">kami memiliki sejumlah fasilitas yang bisa anda gunakan secara gratis
                            seperti gym room, swimming pool, spa, cafe, restaurant dan masih banyak lagi fasilitas kami
                            yang bisa anda gunakan.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- adds --}}

    <div class="h-full flex items-end justify-between bg-blue-200">
        <div class="adds h-full w-full flex justify-between items-end">
            <div class="parallax-building relative w-1/3 flex flex-col items-center" data-speed="0.35">
                <!-- Bangunan Kiri -->
                <img src="images/png/gedung1.png" alt="Building Left" class="w-full">
                <img src="images/png/17398454194428uqlc806.png" alt="Cloud Left" class="parallax-cloud w-full h-auto absolute top-44" data-speed="0.3">
            </div>

            <div class="parallax-text text fade-text text-center text-white text-4xl font-bold absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2" data-speed="0.1">
                Welcome to Parallax Hotel
            </div>

            <div class="parallax-building relative w-1/3 flex flex-col items-center" data-speed="0.35">
                <!-- Bangunan Kanan -->
                <img src="images/png/gedung2.png" alt="Building Right" class="w-10/12">
                <img src="images/png/17398454194428uqlc806.png" alt="Cloud Right" class="parallax-cloud w-full h-auto absolute" data-speed="0.3">
            </div>
        </div>
    </div>
    
    {{-- card --}}

    <div class="container-card">
        <div class="main">
            <div class="container">
                
            </div>
        </div>
    </div>
    <div class="container-card">
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

    <div class="dev relative">
        <div class="w-full h-full">
                <div class="carousel border-3">
                    <div class="list">
                        <div class="item">
                            <img src="images/profile/abi.png">
                            <div class="introduce">
                                <div class="title">DESIGN SLIDER</div>
                                <div class="topic">Abiy</div>
                                <div class="des">
                                    <!-- 20 lorem -->
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Officia, laborum cumque dignissimos quidem atque et eligendi aperiam voluptates beatae maxime.
                                </div>
                                <button class="seeMore">SEE MORE &#8599</button>
                            </div>
                            <div class="detail">
                                <div class="title">Abi Cekut</div>
                                <div class="des">
                                    <!-- lorem 50 -->
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolor, reiciendis suscipit nobis nulla animi, modi explicabo quod corrupti impedit illo, accusantium in eaque nam quia adipisci aut distinctio porro eligendi. Reprehenderit nostrum consequuntur ea! Accusamus architecto dolores modi ducimus facilis quas voluptatibus! Tempora ratione accusantium magnam nulla tenetur autem beatae.
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
                            <img class=" mt-6" src="images/profile/kepin.png">
                            <div class="introduce">
                                <div class="title">DESIGN SLIDER</div>
                                <div class="topic">Kepin Ucok</div>
                                <div class="des">
                                    <!-- 20 lorem -->
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Officia, laborum cumque dignissimos quidem atque et eligendi aperiam voluptates beatae maxime.
                                </div>
                                <button class="seeMore">SEE MORE &#8599</button>
                            </div>
                            <div class="detail">
                                <div class="title">Kepin Dan peliharaan</div>
                                <div class="des">
                                    <!-- lorem 50 -->
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolor, reiciendis suscipit nobis nulla animi, modi explicabo quod corrupti impedit illo, accusantium in eaque nam quia adipisci aut distinctio porro eligendi. Reprehenderit nostrum consequuntur ea! Accusamus architecto dolores modi ducimus facilis quas voluptatibus! Tempora ratione accusantium magnam nulla tenetur autem beatae.
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
                            <img src="images/profile/denggol.png">
                            <div class="introduce">
                                <div class="title">DESIGN SLIDER</div>
                                <div class="topic">Denggol</div>
                                <div class="des">
                                    <!-- 20 lorem -->
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Officia, laborum cumque dignissimos quidem atque et eligendi aperiam voluptates beatae maxime.
                                </div>
                                <button class="seeMore">SEE MORE &#8599</button>
                            </div>
                            <div class="detail">
                                <div class="title">Fardhan</div>
                                <div class="des">
                                    <!-- lorem 50 -->
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolor, reiciendis suscipit nobis nulla animi, modi explicabo quod corrupti impedit illo, accusantium in eaque nam quia adipisci aut distinctio porro eligendi. Reprehenderit nostrum consequuntur ea! Accusamus architecto dolores modi ducimus facilis quas voluptatibus! Tempora ratione accusantium magnam nulla tenetur autem beatae.
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
                            <img src="images/profile/apai.png">
                            <div class="introduce">
                                <div class="title">DESIGN SLIDER</div>
                                <div class="topic">Arfan</div>
                                <div class="des">
                                    <!-- 20 lorem -->
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Officia, laborum cumque dignissimos quidem atque et eligendi aperiam voluptates beatae maxime.
                                </div>
                                <button class="seeMore">SEE MORE &#8599</button>
                            </div>
                            <div class="detail">
                                <div class="title">Apai</div>
                                <div class="des">
                                    <!-- lorem 50 -->
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolor, reiciendis suscipit nobis nulla animi, modi explicabo quod corrupti impedit illo, accusantium in eaque nam quia adipisci aut distinctio porro eligendi. Reprehenderit nostrum consequuntur ea! Accusamus architecto dolores modi ducimus facilis quas voluptatibus! Tempora ratione accusantium magnam nulla tenetur autem beatae.
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
                            <img src="images/profile/nopaller.png">
                            <div class="introduce">
                                <div class="title">DESIGN SLIDER</div>
                                <div class="topic">Saudara ucok</div>
                                <div class="des">
                                    <!-- 20 lorem -->
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Officia, laborum cumque dignissimos quidem atque et eligendi aperiam voluptates beatae maxime.
                                </div>
                                <button class="seeMore">SEE MORE &#8599</button>
                            </div>
                            <div class="detail">
                                <div class="title">Nopal Ler</div>
                                <div class="des">
                                    <!-- lorem 50 -->
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolor, reiciendis suscipit nobis nulla animi, modi explicabo quod corrupti impedit illo, accusantium in eaque nam quia adipisci aut distinctio porro eligendi. Reprehenderit nostrum consequuntur ea! Accusamus architecto dolores modi ducimus facilis quas voluptatibus! Tempora ratione accusantium magnam nulla tenetur autem beatae.
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
                            <img class=" mt-6 h-[500px] w-auto" src="images/profile/ranggo.png">
                            <div class="introduce">
                                <div class="title">DESIGN SLIDER</div>
                                <div class="topic">Rangga</div>
                                <div class="des">
                                    <!-- 20 lorem -->
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Officia, laborum cumque dignissimos quidem atque et eligendi aperiam voluptates beatae maxime.
                                </div>
                                <button class="seeMore">SEE MORE &#8599</button>
                            </div>
                            <div class="detail">
                                <div class="title">Rangga Knek</div>
                                <div class="des">
                                    <!-- lorem 50 -->
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolor, reiciendis suscipit nobis nulla animi, modi explicabo quod corrupti impedit illo, accusantium in eaque nam quia adipisci aut distinctio porro eligendi. Reprehenderit nostrum consequuntur ea! Accusamus architecto dolores modi ducimus facilis quas voluptatibus! Tempora ratione accusantium magnam nulla tenetur autem beatae.
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
                            <img src="images/profile/yazid.png">
                            <div class="introduce">
                                <div class="title">DESIGN SLIDER</div>
                                <div class="topic">Yazid</div>
                                <div class="des">
                                    <!-- 20 lorem -->
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Officia, laborum cumque dignissimos quidem atque et eligendi aperiam voluptates beatae maxime.
                                </div>
                                <button class="seeMore">SEE MORE &#8599</button>
                            </div>
                            <div class="detail">
                                <div class="title">Yazid Irul</div>
                                <div class="des">
                                    <!-- lorem 50 -->
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolor, reiciendis suscipit nobis nulla animi, modi explicabo quod corrupti impedit illo, accusantium in eaque nam quia adipisci aut distinctio porro eligendi. Reprehenderit nostrum consequuntur ea! Accusamus architecto dolores modi ducimus facilis quas voluptatibus! Tempora ratione accusantium magnam nulla tenetur autem beatae.
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
            
                    </div>
                    <div class="arrows">
                        <button id="prev"><</button>
                        <button id="next">></button>
                        <button id="back">See All  &#8599</button>
                    </div>
                </div>
            
        </div>
    </div>
    
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    <script src="js/jquery-3.7.1.min.js"></script>
    <script src="js/home.js"></script>
    <script src="js/navbar.js"></script>
</body>

</html>