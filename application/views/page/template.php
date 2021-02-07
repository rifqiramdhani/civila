<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Home - Brand</title>
    <link rel="stylesheet" href="<?= base_url('assets/frontend/bootstrap/css/bootstrap.min.css') ?>">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:400,400i,700,700i,600,600i">
    <link rel="stylesheet" href="<?= base_url() ?>assets/frontend/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Rancho">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.10.0/baguetteBox.min.css">
    <link rel="stylesheet" href="<?= base_url() ?>assets/frontend/css/smoothproducts.css">
    <link rel="stylesheet" href="<?= base_url() ?>assets/frontend/css/xzoom.css">
    <link rel="stylesheet" href="<?= base_url() ?>assets/frontend/css/Map-Clean.css">
    <link rel="stylesheet" href="https://unpkg.com/gijgo@1.9.13/css/gijgo.min.css">
    <link rel="stylesheet" href="<?= base_url() ?>assets/frontend/css/style.css">
</head>

<body>
    <nav class="navbar navbar-light navbar-expand-lg fixed-top bg-white clean-navbar nav-blue">
        <div class="container"><a class="navbar-brand logo" href="<?= base_url() ?>">
                <img src="<?= base_url('assets/frontend/img/ciivila2.png') ?>">
            </a>
            <button data-toggle="collapse" class="navbar-toggler" data-target="#navcol-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navcol-1">
                <ul class="nav navbar-nav ml-auto">
                    <li class="nav-item" role="presentation">
                        <a class="nav-link" href="<?= base_url() ?>"><i class="fa fa-home"></i>
                        </a>
                    </li>
                    <li class="nav-item" role="presentation">
                        <a class="nav-link" href="#form-section"><i class="fa fa-search"></i>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <?= $contents ?>

    <script src="<?= base_url() ?>assets/frontend/js/jquery.min.js"></script>
    <script src="<?= base_url() ?>assets/frontend/bootstrap/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.10.0/baguetteBox.min.js"></script>
    <script src="<?= base_url() ?>assets/frontend/js/smoothproducts.min.js"></script>
    <script src="<?= base_url() ?>assets/frontend/js/theme.js"></script>
    <script src="<?= base_url() ?>assets/frontend/js/xzoom.min.js"></script>
    <script src="https://unpkg.com/gijgo@1.9.13/js/gijgo.min.js"></script>
    <script>
        function getDateTime() {
            const today = new Date()
            var year = today.getFullYear();
            var month = today.getMonth() + 1;
            var day = today.getDate();
            var hour = '07'
            var minute = '00'
            var second = today.getSeconds();


            if (month.toString().length == 1) {
                month = '0' + month;
            }
            if (day.toString().length == 1) {
                day = '0' + (day + 1);
            }
            if (hour.toString().length == 1) {
                hour = '0' + hour;
            }
            if (minute.toString().length == 1) {
                minute = '0' + minute;
            }
            if (second.toString().length == 1) {
                second = '0' + second;
            }
            var dateTime = day + '-' + month + '-' + year
            return dateTime;
        }

        function changedate(date) {

            var splitdate = date.split('-')
            var edate = [splitdate[2], splitdate[1], splitdate[0]].join('/')
            return edate;
        }
    </script>
    <script>
        $(document).ready(function() {



            $('.xzoom, .xzoom-gallery').xzoom({
                zoomWidth: 200,
                title: false,
                tint: '#333',
                Xoffset: 15,
                position: "lens"
            });

            $('#sharefacebook').click(function() {
                setInterval(() => {
                    $('.selamat').show()
                }, 3000);
            })

            $('#checkin').datepicker({
                uiLibrary: 'bootstrap4',
                footer: true,
                // modal: true,
                format: 'dd-mm-yyyy',
                value: getDateTime(),
                datepicker: {
                    disableDates: function(date) {
                        const currentDate = new Date()
                        return date >= currentDate ? true : false;
                    },
                    keyboardNavigation: true,
                    showOtherMonths: true
                }
            });

            $('#checkout').datepicker({
                uiLibrary: 'bootstrap4',
                format: 'dd-mm-yyyy',
                icons: {
                    rightIcon: '<i class="fas fa-long-arrow-alt-right"></i>'
                },
                disableDates: function(date) {
                    var startdate = $("#checkin").val()
                    var newstartdate = changedate(startdate.substring(0, 11))
                    var today = new Date(newstartdate)

                    // console.log(today)
                    return date > today ? true : false;
                }
            });
        });

        //smooth scrolling
        let anchorlinks = document.querySelectorAll('a[href^="#"]')

        for (let item of anchorlinks) { // relitere 
            item.addEventListener('click', (e) => {
                let hashval = item.getAttribute('href')
                if (hashval != "#") {
                    let target = document.querySelector(hashval)
                    target.scrollIntoView({
                        behavior: 'smooth',
                        block: 'start'
                    })
                    history.pushState(null, null, hashval)
                    e.preventDefault()
                }
            })
        }
    </script>
</body>

</html>