
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us</title>
    <!-- bootstrap css offline -->
    {{-- <link rel="stylesheet" href="assets/css/bootstrap.min.css"> --}}

    <!-- bootstrap css online -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">

    <link rel="stylesheet" href="styles.css">

    <!-- bootstrap icon online -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">

</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light shadow">
        <div class="container-fluid">

            <!-- navbar brand -->
            <a href="#" class="navbar-brand" JongKoding>
                <img src="image/logo-jongkreatif.png">
            </a>

            <!-- navbar toggle -->
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <!-- navbar collapse -->
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">About</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            Profile
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="#">Login</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="#">Register</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div id="features" class="py-4">
        <div class="row">
            <div class="col col-6">
                <div class="card text-center py-3">
                    <div class="card-body">
                        <div class="icon">
                            <img id="img-content1" src="image/walpaper1.jpg" alt="">
                        </div>
                    </div>
                </div>
            </div>

            <div class="col col-6">
                <div class="card text-justify py-3">
                    <div class="card-body mt-4 mb-4">
                        <h2>About Us</h2>
                        <p>
                            Jong Kreatif Academy merupakan Program pelatihan gratis bersertifikasi, berbasis project
                            based learning dilengkapi dengan kurikulum yang relevan dan efektif yang diselenggarakan
                            secara online oleh Bakti Kementrian Komunikasi dan Informatika bersama Alkademi Karya
                            Bangsa.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="features" class="py-4">
        <div class="row">
            <div class="col col-4">
                <div class="card text-center py-3">
                    <img id="img-content" src="image/walpaper-coding.jpg" alt="">
                </div>
            </div>
            <div class="col col-4">
                <div class="card text-center py-3">
                    <img id="img-content" src="image/desain.jpg" alt="">
                </div>
            </div>
            <div class="col col-4">
                <div class="card text-center py-3">
                    <img id="img-content" src="image/creative-agency3.jpg" alt="">
                </div>
            </div>
        </div>
    </div>


    <div class="accordion" id="accordionPanelsStayOpenExample">
        <div class="accordion-item">
            <h2 class="accordion-header" id="panelsStayOpen-headingOne">
                <button class="accordion-button" type="button" data-bs-toggle="collapse"
                    data-bs-target="#panelsStayOpen-collapseOne" aria-expanded="true"
                    aria-controls="panelsStayOpen-collapseOne">
                    Program Jong Kreatif
                </button>
            </h2>
            <div id="panelsStayOpen-collapseOne" class="accordion-collapse collapse show"
                aria-labelledby="panelsStayOpen-headingOne">
                <div class="accordion-body">
                    <p>
                        <strong> Dalam program pelatihan “Jong Kreatif” kita bisa memilih salah satu dari 3 pelatihan
                            yang
                            disediakan, yaitu : </strong>
                    <ol type="1">
                        <li>Jong Koding</li>
                        <p>
                            Pelatihan ini disediakan buat kamu yang tertarik dengan komputer dan teknologi terbaru,
                            tidak mudah putus asa ketika gagal, dan pandai memecahkan masalah, maka kamu sangat
                            cocok dengan program ini. Di program ini kamu akan belajar pemrograman dasar untuk
                            website mulai dari HTML, CSS dan PHP sampai dengan penggunaan framework hingga kamu bisa
                            membuat website.
                        </p>

                        <li>Jong Desain</li>
                        <p>
                            Jong Desain merupakan tempat yang sangat cocok untuk menjembatani kamu mengenal dunia
                            desain grafis pada industri kreatif. Kamu akan dilatih untuk mulai penguasaan tools,
                            berbagai macam keahlian desain grafis, sampai dengan pengetahuan tentang bagaimana
                            melakukan branding. Pada pelatihan desain grafis kamu akan belajar untuk membangun brand
                            sebagai freelancer yang mengasah daya cipta dan kreativitas.
                        </p>

                        <li>Jong Agensi Kreatif</li>
                        <p>
                            Saat ini hampir semua orang berjualan dan jualan mereka kebanyakan memanfaatkan
                            fasilitas digital. Kamu tahu apa yang harus kamu lakukan, namun tidak memiliki
                            pengetahuan yang cukup di bidang tersebut ?. Di Jong Agensi Kreatif, kamu akan
                            mempelajari semua keahlian yang kamu butuhkan untuk dapat memanfaatkan peluang tersebut.
                            Program pelatihannya berupa produksi konten digital seperti foto, video, dan pemasaran
                            digital, dilengkapi dengan ilmu komunikasi menghadapi klien.
                        </p>
                    </ol>
                    </p>
                </div>
            </div>
        </div>
        <div class="accordion-item">
            <h2 class="accordion-header" id="panelsStayOpen-headingTwo">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#panelsStayOpen-collapseTwo" aria-expanded="false"
                    aria-controls="panelsStayOpen-collapseTwo">
                    Tentang Kami
                </button>
            </h2>
            <div id="panelsStayOpen-collapseTwo" class="accordion-collapse collapse"
                aria-labelledby="panelsStayOpen-headingTwo">
                <div class="accordion-body">
                    <strong>Jong Kreatif Academy </strong>merupakan Program pelatihan gratis bersertifikasi, berbasis
                    project
                    based learning dilengkapi dengan kurikulum yang relevan dan efektif yang diselenggarakan
                    secara online oleh Bakti Kementrian Komunikasi dan Informatika bersama Alkademi Karya
                    Bangsa.
                </div>
            </div>
        </div>
        <div class="accordion-item">
            <h2 class="accordion-header" id="panelsStayOpen-headingThree">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#panelsStayOpen-collapseThree" aria-expanded="false"
                    aria-controls="panelsStayOpen-collapseThree">
                    Kontak Kami
                </button>
            </h2>
            <div id="panelsStayOpen-collapseThree" class="accordion-collapse collapse"
                aria-labelledby="panelsStayOpen-headingThree">
                <div class="accordion-body">
                    <strong>Whatsapp : </strong> 0123456789 <br>
                    <strong>Instagram : </strong> @rehany_321 <br>
                </div>
            </div>
        </div>
    </div>



    <!-- bootstrap js -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ"
        crossorigin="anonymous"></script>

</body>

</html>