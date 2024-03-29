<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Landing Page | Gopla</title>

        <!-- Internet -->
        <link href="https://fonts.googleapis.com/css?family=Dancing+Script|Noto+Sans|Pacifico" rel="stylesheet">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css"
            integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">

        <!-- CSS -->
        <link rel="stylesheet" href="assets/css/style2.css">
        <link rel="stylesheet" href="assets/js/jquery-ui-1.12.1/jquery-ui.min.css">
        <link href="https://unpkg.com/nanogallery2@2.4.2/dist/css/nanogallery2.min.css" rel="stylesheet"
            type="text/css">
        <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

        <!-- JQuery -->
        <script src="assets/js/jquery-3.3.1.js"></script>
        <script src="assets/js/jquery-ui-1.12.1/jquery-ui.min.js"></script>
        <script type="text/javascript" src="https://unpkg.com/nanogallery2@2.4.2/dist/jquery.nanogallery2.min.js">
        </script>
        <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    </head>

    <body>
        <!-- Nduwur -->
        <div class="navbar">
            <span class="judul">Gopla</span>
            <div class="navbar__section">
                <a href="index.php">
                    <i class="fas fa-arrows-alt-h   " title="Switch to Horizontal View"></i>
                </a>
            </div>
        </div>

        <!-- Tengah / Konten -->
        <div class="header">
            <img src="assets/img/apik.png" alt="headerpic" class="bg-image">
            <br>
            <div class="container" data-aos="fade-up">
                <br><br><br>
                <h1 id="judul" style="display: none;">Welcome!</h1>
                <p class="subtitle" id="subjudul" style="display: none;">
                    I make a beautifull and professional website
                </p>
            </div>
            <div class="container" data-aos="fade-right">
                <table class="tabel" id="tbl1" style="display:none;">
                    <tr>
                        <td width="30%" align="center">
                            <img src="assets/img/CV-Pict.png" alt="pp" class="profile-pict">
                            <h3 style="font-family: 'Dancing Script', cursive; font-size: 30px;">Naufal Yudhistira
                            </h3>
                            <span>
                                <i class="fas fa-map-marker-alt    "></i>
                                <span>Malang, Indonesia</span>
                            </span>
                            <p>
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Non impedit laudantium
                                corrupti,
                                delectus quod sint mollitia quidem voluptates assumenda sed voluptatem. Tenetur,
                                sequi nihil
                                aut consequuntur numquam iusto commodi aliquam assumenda, reprehenderit recusandae
                                excepturi
                                atque!
                            </p>
                            <br>
                        </td>
                        <td>
                            <h3>
                                <i class="fas fa-school    "></i>
                                <span>Education</span>
                            </h3>
                            <hr>
                            <ul>
                                <li>Software Engineering at State Vocational Highschool 1 Kepanjen</li>
                                <li>Informatics Management at State Polytechnic of Malang</li>
                            </ul>
                            <br>
                            <h3>
                                <i class="fas fa-code    "></i>
                                <span>Skills</span>
                            </h3>
                            <hr>
                            <ul>
                                <li>Basic HTML and CSS</li>
                                <li>Basic Java Command Line Program</li>
                                <li>Basic Database Modeling with MySQL</li>
                            </ul>
                            <br>
                            <h3>
                                <i class="fas fa-cogs    "></i>
                                <span>Experience</span>
                            </h3>
                            <hr>
                            <ul>
                                <li>Internship at Heasoft Indonesia</li>
                                <li>Participant of Regional Skills Competition in IT Software Application</li>
                                <li>Participant of National Skills Competition in IT Software Solution for Business
                                </li>
                            </ul>
                            <br>
                            <h3>
                                <i class="fas fa-fax    "></i>
                                <span>Contact me at</span>
                            </h3>
                            <hr>
                            <p>
                                <br>
                                <a href="https://www.facebook.com/naufal.yudhistira12" target="_blank"><img
                                        src="assets/img/fb-hover.png" class="sosmed-icon"></a>
                                <a href="https://twitter.com/NaufalYudhisti4" target="_blank"><img
                                        src="assets/img/tw-hover.png" class="sosmed-icon"></a>
                                <a href="https://www.instagram.com/naufalyudhistira/" target="_blank"><img
                                        src="assets/img/ig-hover.png" class="sosmed-icon"></a>
                                <a href="https://api.whatsapp.com/send?phone=6282257229842" target="_blank"><img
                                        src="assets/img/wa-hover.png" class="sosmed-icon"></a>
                                <a href="mailto:naufalyudhistira12@gmail.com" target="_blank"><img
                                        src="assets/img/gm-hover.png" class="sosmed-icon"></a>
                                <a href="https://github.com/gopla/" target="_blank"><img
                                        src="assets/img/git-hover.png" class="sosmed-icon"></a>
                            </p>
                        </td>
                    </tr>
                </table>
            </div>
            <div class="container" data-aos="zoom-in-down">
                <h2 class="subtitle">Gallery</h2>
                <br>
                <table class="form">
                    <tr>
                        <td id="foto">

                        </td>
                    </tr>
                </table>

                <script>
                    $(document).ready(function () {
                        $("#foto").nanogallery2({
                            // ### gallery settings ### 
                            thumbnailHeight: 'auto',
                            thumbnailWidth: 200,
                            thumbnailBorderHorizontal: 0,
                            thumbnailBorderVertical: 0,
                            thumbnailDisplayTransition: 'slideDown',
                            thumbnailDisplayTransitionDuration: 500,
                            thumbnailDisplayInterval: 30,
                            itemsBaseURL: 'assets/img/galeri/',

                            // ### gallery content ### 
                            items: [{
                                    src: '(1).jpeg',
                                    srct: '(1).jpeg',
                                    title: 'Graduation'
                                },
                                {
                                    src: '(2).jpeg',
                                    srct: '(2).jpeg',
                                    title: 'Malang Rural Bank'
                                },
                                {
                                    src: '(3).jpeg',
                                    srct: '(3).jpeg',
                                    title: 'Happy Birthday :)'


                                },
                                {
                                    src: '(8).jpg',
                                    srct: '(8).jpg',
                                    title: 'Goes to Regional LKS'
                                },
                                {
                                    src: '(6).jpeg',
                                    srct: '(6).jpeg',
                                    title: 'Regional LKS'
                                },
                                {
                                    src: '(4).jpeg',
                                    srct: '(4).jpeg',
                                    title: 'Hea Crew'
                                },
                                {
                                    src: '(5).jpeg',
                                    srct: '(5).jpeg',
                                    title: 'Hea Crew too'

                                }
                            ]
                        });


                    });
                </script>
            </div>
            <div class="container" data-aos="flip-right">
                <h2 class="subtitle" style="display:none;">Feel free to Hire Me~!</h2>
                <br>
                <table class="form" id="tbl2" style="display:none;">
                    <tr>
                        <td align="center" colspan="2"><input type="text" id="nama" placeholder="Full name"></td>
                    </tr>
                    <tr>
                        <td align="center" colspan="2"><input type="text" id="phone" placeholder="Phone"></td>
                    </tr>
                    <tr>
                        <td align="center" colspan="2"><input type="email" id="email" placeholder="your@email.com">
                        </td>
                    </tr>
                    <tr>
                        <td align="center" colspan="2"><textarea id="comment" cols="20" rows="5"
                                placeholder="Specify your needs. . ."></textarea></td>
                    </tr>
                    <tr>
                        <td align="center" colspan="2">
                            <button class="b-hire" id="send">
                                <i class="fas fa-paper-plane    "></i>
                                <span>Send</span>
                            </button>
                        </td>
                    </tr>
                </table>
            </div>
        </div>

        <!-- Isor -->
        <div class="footer">
            <p>Made with &#10084; by Gopla </p>
            <div class="footer__section">
                <p>Icons belong to &copy; <a href="https://www.flaticon.com/">Flaticon</a></p>
            </div>
        </div>

        <script>
            AOS.init({
                duration: 1200
            });
        </script>
        <script>
            $(function () {
                $("#judul").fadeIn(900, function () {
                    $("#subjudul").slideDown(600);
                })

                $("#tbl1").show("slide", "slow")

                $("#tbl2").show("blind", "slow", function () {
                    $(".subtitle").slideDown();
                })

                $("#send").click(function () {
                    let nama = $("#nama").val()
                    if (nama == "") {
                        alert('Please fillup required form :(')
                    } else {
                        alert(`Thanks for coming, ${nama}!`)
                        $("#nama").val("")
                        $("#phone").val("")
                        $("#email").val("")
                        $("#comment").val("")
                    }
                });
            });
        </script>
    </body>

</html>
