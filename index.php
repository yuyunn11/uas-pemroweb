<?php 
    session_start(); 
        if (isset ($_GET['beli']) && is_numeric($_GET['beli'])) { 
            if (isset ($_SESSION['chart'][$_GET['beli']])){
                $_SESSION['chart'] [$_GET ['beli']]++;
        } else { 
            $_SESSION['chart'] [$_GET['beli']] = 1;
        }
    }

?> 


<html>
    <head>
        <meta charset = "utf-8">
        <title>Foddies Goodies</title>
        <meta name = "viewport" content = "width = device-width, initial-scale=1.0">
        <img class = "icon" rel="icon" href="https://i.imgur.com/OjvEKJT.png">
        <link rel="stylesheet" href="styles.css">
        <link rel="stylesheet" href="main.js">
    </head>

    <body>
        <header>
            <img class = "img0" src = "https://i.imgur.com/OjvEKJT.png"> 
        </header>

    
    <div class="sidenav" id="mySidenav">
        <a class="closebtn" onclick="closeNav()">×</a>
        <a href="About.html"> 🏪 About</a>
        <a href="Keranjang.php"> 🛒 Keranjang</a>
        <a href="Foodies Goodies.html">📤 Log Out</a>
    </div>

    <script src="main.js"></script>

    <div id="main">
        <span onclick="openNav()" style="cursor: pointer; font-size: 30px;">☰</span>
    </div>

    
    
    <table cellspacing = "120" class = "cont-product">
        <tr>
            <td><img class = "img1" src="https://akcdn.detik.net.id/community/media/visual/2022/09/12/jajanan-lidi-lidian-5_43.jpeg?w=250&q="><br>
                <h4>Mi Lidi</h4>
                <p class ="harga"> Rp 7.000/pack</p><br><br>
                Mi Lidi merupakan salah satu jajanan berbahan dasar tepung terigu yang tak pernah absen 
                dibeli pas zaman sekolah. Rasa gurih mi dan bumbu yang bervariasi membuat siapapun 
                ketagihan. <br><br> 
                <a href="?beli=1">Masukkan Keranjang</a>
            </td>

            <td><img class = "img1" src="https://asset.kompas.com/crops/Mg3yOv-Lwetqu5RGXOEnVe19bVg=/0x289:800x822/750x500/data/photo/2022/03/05/62232e0182576.jpeg"><br>
                <h4>Basreng</h4>
                <p class ="harga">Rp 5.000/pack</p><br><br>
                Basreng alias baso digoreng merupakan camilan khas Sunda yang terbuat dari bakso ikan 
                yang diiris tipis, lalu digoreng kering dan ditaburi bubuk cabai. <br><br> 
                <a href="?beli=2">Masukkan Keranjang</a>
            </td>   
        </tr>

        <tr>
            <td><img class = "img1" src="https://awsimages.detik.net.id/community/media/visual/2021/08/29/resep-usus-bumbu-kuning-2_43.jpeg?w=480"><br>
                <h4>Usus Goreng</h4>
                <p class ="harga">Rp 10.000/pcs</p><br><br>
                Keripik usus yang terbuat dari bahan dasar usus ayam pilihan yang diolah dengan bahan 
                bumbu pilihan yang aman dan kualitas terjamin. Keripik usus ayam ini memiliki tekstur 
                yang renyah dengan rasa gurih dan lezat.<br><br> 
                <a  href="?beli=3">Masukkan Keranjang</a>
            </td>

            <td><img class = "img1" src="https://assets.pikiran-rakyat.com/crop/0x0:0x0/x/photo/2022/08/11/3137947953.jpg" width="200px" height="200px"><br>
                <h4>Tahu Kremes</h4>
                <p class ="harga">Rp 8.000/pack</p><br><br>
                Tahu Kremes adalah olahan makanan yang terbuat dari bahan dasar tahu. Ciri khas dari 
                tahu kremes yaitu memiliki tekstur luar yang renyah dan kaku sehingga jenis tahu yang
                umumnya digunakan yaitu extra-firm ataupun super-firm.
                <br><br> 
                <a href="?beli=4">Masukkan Keranjang</a>
            </td>
        </tr>

        <tr>
            <td><img class = "img1" src="https://asset.kompas.com/crops/Xkj5gh8NLokxel5a3n4aeASC-fU=/1x0:1000x666/780x390/data/photo/2020/09/25/5f6da7782cdd9.jpg" width="200px" height="200px"><br>
                <h4>Pisang Goreng</h4>
                <p class ="harga">Rp 12.000/pack</p><br><br>
                Makanan ini terbuat dari buah pisang yang telah di kupas kulitnya. Buah pisang dipotong-
                potong sesuai keinginan kemudian di lumuri bersama adonan kental terbuat dari campuran 
                tepung, sedikit garam dan gula, selanjutnya digoreng dalam minyak panas.<br><br> 
                <a class="?beli=5" href="Keranjang.html">Masukkan Keranjang</a>
            </td>

            <td><img class = "img1" src="https://anggisnack.files.wordpress.com/2015/06/stick-talas-asin-1.jpg?w=1024&h=683"><br> 
                <h4>Stik Talas</h4>
                <p class ="harga">Rp 7.000/pack</p><br><br>
                Makanan yang terbuat dari talas yang diiris tipis kemudian digoreng dengan menggunakan 
                tepung yang telah dibumbui. Biasanya rasanya adalah asin dengan aroma bawang merah yang 
                enak.<br><br> 
                <a class="?beli=6" href="Keranjang.html">Masukkan Keranjang</a>
            </td>
        </tr>

        <tr>
            <td><img  class = "img1" src="https://www.static-src.com/wcsstore/Indraprastha/images/catalog/full//96/MTA-51573633/no_brand_makaroni_pedas_full01_eye7r6t.jpg"><br> 
                <h4>Makaroni Pedas</h4>
                <p class ="harga">Rp 10.000/pack</p><br><br>
                Makaroni pedas adalah macaroni yang digoreng hingga bertekstur renyah dan disajikan 
                dengan taburan bubuk cabai dan garam serta micin.<br><br> 
                <a class="?beli=7" href="Keranjang.html">Masukkan Keranjang</a>
            </td>

            <td><img class = "img1" src="https://fibercreme.com/wp-content/uploads/2021/03/Telur-gulung-moza.jpg"><br>
                <h4>Telur Gulung</h4>
                <p class ="harga">Rp 2.000/pcs</p><br><br>
                Telur gulung adalah makanan tradisional dan merupakan variasi dari telur goreng yang 
                dimana sebuah telur akan digoreng dan kemudian digulung menggunakan sebuah tusukan 
                yang biasanya di buat dari kayu pohon bambu.<br><br> 
                <a class="?beli=8" href="Keranjang.html">Masukkan Keranjang</a>
            </td>
        </tr>

        <tr>
            <td><img class = "img1" src="https://assets.pikiran-rakyat.com/crop/0x0:0x0/x/photo/2021/09/08/1862945477.jpg"><br> 
                <h4>Kerupuk Seblak</h4>
                <p class ="harga">Rp 9.000/pack</p><br><br>
                Terbuat dari kerupuk mentah yang diolah dengan minyak panas dan dibumbui rempah - rempah 
                untuk penyedap rasanya sehingga sesuai dengan selera orang Sunda yang menyukai jenis 
                makanan pedas.<br><br> 
                <a class="?beli=9" href="Keranjang.html">Masukkan Keranjang</a>
            </td>

           <td><img class = "img1" class = "img1" src="https://asset.kompas.com/crops/7IdRwZpcpYsImnHe2nB5pZrPTgM=/0x0:1000x667/750x500/data/photo/2020/08/05/5f2a43ad5bd07.jpg"><br> 
                <h4>Tahu Bakso</h4>
                <p class ="harga">Rp 4.000/pcs</p><br><br>
                Makanan ini dibuat dari tahu yang tengahnya diberi isi bakso. Makanan ini memiliki ciri 
                khas dihidangkan dengan sambal kecap dengan irisan cabe rawit dan saus bumbu kacang.
                <br><br> 
                <a class="?beli=10" href="Keranjang.html">Masukkan Keranjang</a>
            </td>
        </tr>

        <tr>
            <td><img class = "img1" class = "img1" src="https://www.static-src.com/wcsstore/Indraprastha/images/catalog/full//100/MTA-6492087/b_-_d_shop-s_b_-_d_shop-s_manisan_buah_pala_tebal_berkuah_khas_lampung_-1_kg-_full03_bakb3mb6.jpg"><br> 
                <h4>Manisan Pala</h4>
                <p class ="harga">Rp 17.000/pack</p><br><br>
                Buah pala yang telah dikupas kemudian diiris sesuai bentuk yang diinginkan. Buah itu 
                selanjutnya direndam dalam air garam selama 1x24 jam. Untuk jenis manisan pala kering, 
                usai direndam air garam daging buah pala itu kemudian dicuci.<br><br> 
                <a href="?beli=11">Masukkan Keranjang</a>
            </td>

            <td><img class = "img1" class = "img1" src="https://resepkoki.id/wp-content/uploads/2017/12/Resep-Keripik-Pisang.jpg"><br> 
                <h4>Keripik Pisang</h4>
                <p class ="harga">Rp 15.000/pack</p><br><br>
                Keripik pisang adalah makanan yang terbuat dari pisang yang diiris tipis kemudian digoreng 
                dengan menggunakan tepung yang telah dibumbui.<br><br> 
                <a href="?beli=12">Masukkan Keranjang</a>
            </td>
        </tr>

        <tr>
            <td><img class = "img1" src="https://www.static-src.com/wcsstore/Indraprastha/images/catalog/full//92/MTA-40232791/no_brand_-250_g-_stik_balado_-tes--_full01_pztl87or.jpg"><br> 
                <h4>Stik Balado</h4>
                <p class ="harga">Rp 10.000/pack</p><br><br>
                Makanan ringan yang terbuat dari bahan utama jagung manis, tepung terigu, tepung sagu, 
                margarine, telur, baking powder, bubuk balado, dan minyak goreng<br><br> 
                <a href="?beli=13">Masukkan Keranjang</a>
            </td>

            <td><img class = "img1" src="https://www.apasih.web.id/wp-content/uploads/2017/10/hipwee-resep-cireng-salju-bumbu-rujak.jpg"><br> 
                <h4>Cireng</h4>
                <p class ="harga">Rp 13.000/pack</p><br><br>
                Cireng dibuat dengan cara menggoreng campuran adonan yang berbahan tepung kanji atau 
                tapioka. Bahan adonan cireng antara lain tepung kanji, tepung terigu, air, merica bubuk, 
                garam bawang putih, kedelai, dan daun bawang. Semuanya dicampur lalu digoreng dengan 
                minyak diatas api sedang. Cireng biasanya dimakan dengan sambal rujak.<br><br> 
                <a href="?beli=14" >Masukkan Keranjang</a>
            </td>
        </tr>

        <tr>
            <td><img class = "img1" src="https://img.okezone.com/content/2020/02/12/298/2167310/resep-donat-kentang-bertabur-gula-manisnya-bikin-pengen-leSLed1Tzn.jpg"><br> 
                <h4>Donat kentang</h4>
                <p class ="harga">Rp 5.000/pcs</p><br><br>
                Donat kentang atau biasa disebut spudnut yang umum dibuat biasanya diolah dengan campuran 
                bahan seperti kentang kukus tumbuk, tepung terigu protein tinggi, ragi, telur, margarin 
                hingga susu bubuk.<br><br> 
                <a href="?beli=15">Masukkan Keranjang</a>
            </td>

            <td><img class = "img1" src="https://bimamedia-gurusiana.ap-south-1.linodeobjects.com/eb698350c502ff82503875dba13f5f88/2018/12/31/l-images59b514174bffe4ae402b3d63aad79fe020181231075149-bimacms.jpg"><br> 
                <h4>Rempeyek</h4>
                <p class ="harga">Rp 6.000/pack</p><br><br>
                Rempeyek adalah gorengan tepung beras yang dicampur dengan air hingga membentuk adonan 
                kental, diberi bumbu (terutama garam, bawang putih) dan daun jeruk, serta diberi bahan 
                pengisi yang khas, biasanya biji kacang tanah atau kedelai.<br><br> 
                <a href="?beli=16">Masukkan Keranjang</a>
            </td>
        </tr>

        <tr>
            <td><img class = "img1" class = "img1" src="https://cdn0-production-images-kly.akamaized.net/MObZH7ghATkTuP58k7i3V2gFprQ=/1200x1200/smart/filters:quality(75):strip_icc():format(jpeg)/kly-media-production/medias/3393246/original/072450600_1614860395-food-1107078_1920.jpg"><br> 
                <h4>Risoles</h4>
                <p class ="harga">Rp 4.000/pcs</p><br><br>
                Risoles, atau biasa disebut risol adalah pastri berisi daging, biasanya daging cincang, 
                dan sayuran yang dibungkus dadar, dan digoreng setelah dilapisi tepung panir dan 
                kocokan telur ayam. Isi risoles dapat berupa daging ayam, daging sapi, daging ikan, 
                udang, jamur kancing, wortel, kentang, atau buncis. Adonan dadar dibuat dari 
                campuran tepung terigu, kuning telur, mentega, dan air atau susu.<br><br> 
                <a href="?beli=17">Masukkan Keranjang</a>
            </td>

            <td><img class = "img1" src="https://img-global.cpcdn.com/recipes/7ec2f68ac199e7f3/400x400cq70/photo.jpg"><br> 
                <h4>Stik keju</h4>
                <p class ="harga">Rp 8.000/pack</p><br><br>
                Cheese Stick atau stik keju adalah camilan khas yang menjadi kesukaan kita semua. 
                Stik yang renyah dan memiliki rasa gurih khas keju<br><br> 
                <a href="?beli=18">Masukkan Keranjang</a>
            </td>
        </tr>

        <tr>
            <td><img class = "img1" src="https://img-global.cpcdn.com/recipes/7ec2f68ac199e7f3/400x400cq70/photo.jpg"><br> 
                <h4>Kacang bawang</h4>
                <p class ="harga">Rp 12.000/pack</p><br><br>
                Kacang bawang berasal dari kacang tanah yang mendapat perlakuan khusus, dengan penambahan 
                berbagai macam bumbu yang menjadikan kacang tersebut memiliki rasa yang spesifik.<br><br> 
                <a href="?beli=19">Masukkan Keranjang</a>
            </td>

            <td><img class = "img1" src="https://pariwisata.kepulauanselayarkab.go.id/wp-content/uploads/2014/09/emping-melinjo.jpg"><br> 
                <h4>Emping</h4>
                <p class ="harga">Rp 9.000/pack</p><br><br>
                Emping memiliki rasa sedikit pahit. Emping tersedia di pasaran dalam berbagai varian rasa, 
                seperti polos (asli), asin, pedas atau manis, tergantung dari penambahan garam atau 
                karamel gula.<br><br> 
                <a href="?beli=20">Masukkan Keranjang</a>
            </td>
        </tr>

        <tr>
            <td><img class = "img1" src="https://linscakes.com/wp-content/uploads/2022/05/resep-pempek-ikan-tenggiri-palembang-gurih-scaled.jpg"><br> 
                <h4>Pempek</h4>
                <p class ="harga">Rp 25.000/pack</p><br><br>
                Pempek adalah makanan yang terbuat dari daging ikan yang digiling lembut yang dicampur 
                tepung kanji atau tepung sagu, serta komposisi beberapa bahan lain seperti telur, 
                bawang putih yang dihaluskan, penyedap rasa, dan garam. Pempek biasanya disajikan 
                dengan kuah yang disebut cuka yang memiliki rasa asam, manis, dan pedas.<br><br> 
                <a href="?beli=21">Masukkan Keranjang</a>
            </td>

            <td><img class = "img1" src="https://suarakonsumen.co/asset/foto_berita/20200513-130715-dc685775f3372144d8a546e6fa8dd0ef.jpg"><br> 
                <h4>Renginang</h4>
                <p class ="harga">Rp 15.000/pack</p><br><br>
                Rengginang adalah sejenis kerupuk tebal yang terbuat dari Beras ketan yang dibentuk 
                bulat dan dikeringkan dengan cara dijemur di bawah panas matahari, lalu digoreng 
                panas dalam minyak goreng.<br><br> 
                <a href="?beli=22">Masukkan Keranjang</a>
            </td>
        </tr>

        <tr>
            <td><img class = "img1" src="https://static.glexindo.com/img/company/Z5G3S9RWZY7PA2t9upBw/products/MKxoFuVkw3.jpg"><br> 
                <h4>Keripik Ubi ungu</h4>
                <p class ="harga">Rp 8.000/pack</p><br><br>
                Ubi ungu bukanlah jenis makanan yang asing bagi masyarakat Indonesia. Umbi yang satu 
                ini kerap dijadikan sebagai keripik dengan cita rasa manis alami.<br><br> 
                <a href="?beli=23">Masukkan Keranjang</a>
            </td>

            <td><img class = "img1" src="https://nusantarapedia.net/wp-content/uploads/2021/12/pisang-sale-crispiyyy-foto-resep-utama.jpg"><br> 
                <h4>Sale pisang</h4> 
                <p class ="harga">Rp 17.000/pack</p><br><br>
                Sale pisang adalah makanan hasil olahan pisang yang dibuat dengan proses pengeringan 
                dan pengasapan, kemudian dipotong iris-iris dan dijemur. Sale pisang dikenal mempunyai 
                rasa dan aroma yang khas.<br><br> 
                <a href="?beli=24">Masukkan Keranjang</a>
            </td>
        </tr>

        <tr>
            <td><img class = "img1" src="https://assets.ayobandung.com/crop/0x0:0x0/750x500/webp/photo/2023/01/10/2951546862.jpg"><br> 
                <h4>Bakpia</h4>
                <p class ="harga">Rp 10.000/pack</p><br><br>
                Bakpia, hopia adalah kue pastri asal Fujian gulungan tepung panggang dengan berbagai isi. 
                Kulit bakpia dibuat dari campuran gula dan garam yang diaduk dalam air hingga larut, 
                lalu dibentuk menjadi adonan dengan menambahkan tepung terigu.<br><br> 
                <a href="?beli=25">Masukkan Keranjang</a>
            </td>
        </tr>
        </table>



        <footer>
            <h3 class = "h3-f">Foodies<br>Goodies</h3>
        </footer>
    </body>
</html>
<?php  ?>
