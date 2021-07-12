<!doctype html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Sufee Admin - HTML5 Admin Template</title>
    <meta name="description" content="Sufee Admin - HTML5 Admin Template">
    <meta name="viewport" content="width=device-width, initial-scale=1">
        <style id="" media="all">/* cyrillic-ext */
            @font-face {
            font-family: 'Open Sans';
            font-style: normal;
            font-weight: 400;
            src: url(/fonts.gstatic.com/s/opensans/v20/mem8YaGs126MiZpBA-UFWJ0bbck.woff2) format('woff2');
            unicode-range: U+0460-052F, U+1C80-1C88, U+20B4, U+2DE0-2DFF, U+A640-A69F, U+FE2E-FE2F;
            }
            /* cyrillic */
            @font-face {
            font-family: 'Open Sans';
            font-style: normal;
            font-weight: 400;
            src: url(/fonts.gstatic.com/s/opensans/v20/mem8YaGs126MiZpBA-UFUZ0bbck.woff2) format('woff2');
            unicode-range: U+0400-045F, U+0490-0491, U+04B0-04B1, U+2116;
            }
            /* greek-ext */
            @font-face {
            font-family: 'Open Sans';
            font-style: normal;
            font-weight: 400;
            src: url(/fonts.gstatic.com/s/opensans/v20/mem8YaGs126MiZpBA-UFWZ0bbck.woff2) format('woff2');
            unicode-range: U+1F00-1FFF;
            }
            /* greek */
            @font-face {
            font-family: 'Open Sans';
            font-style: normal;
            font-weight: 400;
            src: url(/fonts.gstatic.com/s/opensans/v20/mem8YaGs126MiZpBA-UFVp0bbck.woff2) format('woff2');
            unicode-range: U+0370-03FF;
            }
            /* vietnamese */
            @font-face {
            font-family: 'Open Sans';
            font-style: normal;
            font-weight: 400;
            src: url(/fonts.gstatic.com/s/opensans/v20/mem8YaGs126MiZpBA-UFWp0bbck.woff2) format('woff2');
            unicode-range: U+0102-0103, U+0110-0111, U+0128-0129, U+0168-0169, U+01A0-01A1, U+01AF-01B0, U+1EA0-1EF9, U+20AB;
            }
            /* latin-ext */
            @font-face {
            font-family: 'Open Sans';
            font-style: normal;
            font-weight: 400;
            src: url(/fonts.gstatic.com/s/opensans/v20/mem8YaGs126MiZpBA-UFW50bbck.woff2) format('woff2');
            unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
            }
            /* latin */
            @font-face {
            font-family: 'Open Sans';
            font-style: normal;
            font-weight: 400;
            src: url(/fonts.gstatic.com/s/opensans/v20/mem8YaGs126MiZpBA-UFVZ0b.woff2) format('woff2');
            unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
            }
            /* cyrillic-ext */
            @font-face {
            font-family: 'Open Sans';
            font-style: normal;
            font-weight: 600;
            src: url(/fonts.gstatic.com/s/opensans/v20/mem5YaGs126MiZpBA-UNirkOX-hpOqc.woff2) format('woff2');
            unicode-range: U+0460-052F, U+1C80-1C88, U+20B4, U+2DE0-2DFF, U+A640-A69F, U+FE2E-FE2F;
            }
            /* cyrillic */
            @font-face {
            font-family: 'Open Sans';
            font-style: normal;
            font-weight: 600;
            src: url(/fonts.gstatic.com/s/opensans/v20/mem5YaGs126MiZpBA-UNirkOVuhpOqc.woff2) format('woff2');
            unicode-range: U+0400-045F, U+0490-0491, U+04B0-04B1, U+2116;
            }
            /* greek-ext */
            @font-face {
            font-family: 'Open Sans';
            font-style: normal;
            font-weight: 600;
            src: url(/fonts.gstatic.com/s/opensans/v20/mem5YaGs126MiZpBA-UNirkOXuhpOqc.woff2) format('woff2');
            unicode-range: U+1F00-1FFF;
            }
            /* greek */
            @font-face {
            font-family: 'Open Sans';
            font-style: normal;
            font-weight: 600;
            src: url(/fonts.gstatic.com/s/opensans/v20/mem5YaGs126MiZpBA-UNirkOUehpOqc.woff2) format('woff2');
            unicode-range: U+0370-03FF;
            }
            /* vietnamese */
            @font-face {
            font-family: 'Open Sans';
            font-style: normal;
            font-weight: 600;
            src: url(/fonts.gstatic.com/s/opensans/v20/mem5YaGs126MiZpBA-UNirkOXehpOqc.woff2) format('woff2');
            unicode-range: U+0102-0103, U+0110-0111, U+0128-0129, U+0168-0169, U+01A0-01A1, U+01AF-01B0, U+1EA0-1EF9, U+20AB;
            }
            /* latin-ext */
            @font-face {
            font-family: 'Open Sans';
            font-style: normal;
            font-weight: 600;
            src: url(/fonts.gstatic.com/s/opensans/v20/mem5YaGs126MiZpBA-UNirkOXOhpOqc.woff2) format('woff2');
            unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
            }
            /* latin */
            @font-face {
            font-family: 'Open Sans';
            font-style: normal;
            font-weight: 600;
            src: url(/fonts.gstatic.com/s/opensans/v20/mem5YaGs126MiZpBA-UNirkOUuhp.woff2) format('woff2');
            unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
            }
            /* cyrillic-ext */
            @font-face {
            font-family: 'Open Sans';
            font-style: normal;
            font-weight: 700;
            src: url(/fonts.gstatic.com/s/opensans/v20/mem5YaGs126MiZpBA-UN7rgOX-hpOqc.woff2) format('woff2');
            unicode-range: U+0460-052F, U+1C80-1C88, U+20B4, U+2DE0-2DFF, U+A640-A69F, U+FE2E-FE2F;
            }
            /* cyrillic */
            @font-face {
            font-family: 'Open Sans';
            font-style: normal;
            font-weight: 700;
            src: url(/fonts.gstatic.com/s/opensans/v20/mem5YaGs126MiZpBA-UN7rgOVuhpOqc.woff2) format('woff2');
            unicode-range: U+0400-045F, U+0490-0491, U+04B0-04B1, U+2116;
            }
            /* greek-ext */
            @font-face {
            font-family: 'Open Sans';
            font-style: normal;
            font-weight: 700;
            src: url(/fonts.gstatic.com/s/opensans/v20/mem5YaGs126MiZpBA-UN7rgOXuhpOqc.woff2) format('woff2');
            unicode-range: U+1F00-1FFF;
            }
            /* greek */
            @font-face {
            font-family: 'Open Sans';
            font-style: normal;
            font-weight: 700;
            src: url(/fonts.gstatic.com/s/opensans/v20/mem5YaGs126MiZpBA-UN7rgOUehpOqc.woff2) format('woff2');
            unicode-range: U+0370-03FF;
            }
            /* vietnamese */
            @font-face {
            font-family: 'Open Sans';
            font-style: normal;
            font-weight: 700;
            src: url(/fonts.gstatic.com/s/opensans/v20/mem5YaGs126MiZpBA-UN7rgOXehpOqc.woff2) format('woff2');
            unicode-range: U+0102-0103, U+0110-0111, U+0128-0129, U+0168-0169, U+01A0-01A1, U+01AF-01B0, U+1EA0-1EF9, U+20AB;
            }
            /* latin-ext */
            @font-face {
            font-family: 'Open Sans';
            font-style: normal;
            font-weight: 700;
            src: url(/fonts.gstatic.com/s/opensans/v20/mem5YaGs126MiZpBA-UN7rgOXOhpOqc.woff2) format('woff2');
            unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
            }
            /* latin */
            @font-face {
            font-family: 'Open Sans';
            font-style: normal;
            font-weight: 700;
            src: url(/fonts.gstatic.com/s/opensans/v20/mem5YaGs126MiZpBA-UN7rgOUuhp.woff2) format('woff2');
            unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
            }
            /* cyrillic-ext */
            @font-face {
            font-family: 'Open Sans';
            font-style: normal;
            font-weight: 800;
            src: url(/fonts.gstatic.com/s/opensans/v20/mem5YaGs126MiZpBA-UN8rsOX-hpOqc.woff2) format('woff2');
            unicode-range: U+0460-052F, U+1C80-1C88, U+20B4, U+2DE0-2DFF, U+A640-A69F, U+FE2E-FE2F;
            }
            /* cyrillic */
            @font-face {
            font-family: 'Open Sans';
            font-style: normal;
            font-weight: 800;
            src: url(/fonts.gstatic.com/s/opensans/v20/mem5YaGs126MiZpBA-UN8rsOVuhpOqc.woff2) format('woff2');
            unicode-range: U+0400-045F, U+0490-0491, U+04B0-04B1, U+2116;
            }
            /* greek-ext */
            @font-face {
            font-family: 'Open Sans';
            font-style: normal;
            font-weight: 800;
            src: url(/fonts.gstatic.com/s/opensans/v20/mem5YaGs126MiZpBA-UN8rsOXuhpOqc.woff2) format('woff2');
            unicode-range: U+1F00-1FFF;
            }
            /* greek */
            @font-face {
            font-family: 'Open Sans';
            font-style: normal;
            font-weight: 800;
            src: url(/fonts.gstatic.com/s/opensans/v20/mem5YaGs126MiZpBA-UN8rsOUehpOqc.woff2) format('woff2');
            unicode-range: U+0370-03FF;
            }
            /* vietnamese */
            @font-face {
            font-family: 'Open Sans';
            font-style: normal;
            font-weight: 800;
            src: url(/fonts.gstatic.com/s/opensans/v20/mem5YaGs126MiZpBA-UN8rsOXehpOqc.woff2) format('woff2');
            unicode-range: U+0102-0103, U+0110-0111, U+0128-0129, U+0168-0169, U+01A0-01A1, U+01AF-01B0, U+1EA0-1EF9, U+20AB;
            }
            /* latin-ext */
            @font-face {
            font-family: 'Open Sans';
            font-style: normal;
            font-weight: 800;
            src: url(/fonts.gstatic.com/s/opensans/v20/mem5YaGs126MiZpBA-UN8rsOXOhpOqc.woff2) format('woff2');
            unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
            }
            /* latin */
            @font-face {
            font-family: 'Open Sans';
            font-style: normal;
            font-weight: 800;
            src: url(/fonts.gstatic.com/s/opensans/v20/mem5YaGs126MiZpBA-UN8rsOUuhp.woff2) format('woff2');
            unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
            }
        </style>
        
        <link rel="apple-touch-icon" href="apple-icon.png">
        <link rel="shortcut icon" href="favicon.ico">
        <link rel="stylesheet" href="{{ asset('style/assets/css/normalize.css') }} ">
        <link rel="stylesheet" href="{{ asset('style/assets/css/bootstrap.min.css') }}">
        <link rel="stylesheet" href="{{ asset('style/assets/css/font-awesome.min.css') }}">
        <link rel="stylesheet" href="{{ asset('style/assets/css/themify-icons.css') }}">
        <link rel="stylesheet" href="{{ asset('style/assets/css/flag-icon.min.css') }}">
        <link rel="stylesheet" href="{{ asset('style/assets/css/cs-skin-elastic.css') }}">
        <link rel="stylesheet" href="{{ asset('style/assets/scss/style.css') }}">
        <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>
    <meta name="robots" content="noindex, nofollow">
</head>
<body class="bg-dark">
    <script src="{{ asset('style/assets/js/vendor/jquery-2.1.4.min.js') }}"></script>
    <script src="{{ asset('style/assets/js/popper.min.js') }}"></script>
    <script src="{{ asset('style/assets/js/plugins.js') }}"></script>
    <script src="{{ asset('style/assets/js/main.js') }}"></script>
    <script async="" src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());
    
      gtag('config', 'UA-23581568-13');
    </script>
    <script defer="" src="https://static.cloudflareinsights.com/beacon.min.js" data-cf-beacon="{&quot;rayId&quot;:&quot;66430f6088475f9b&quot;,&quot;token&quot;:&quot;cd0b4b3a733644fc843ef0b185f98241&quot;,&quot;version&quot;:&quot;2021.5.2&quot;,&quot;si&quot;:10}"></script>
  
    <div class="sufee-login d-flex align-content-center flex-wrap mt-5">
        <div class="container">
            <div class="login-content">
                {{-- <div class="login-logo">
                    <a href="index.html">
                        <img class="align-content" src="{{ asset('style/images/logo.png') }}" alt="">
                    </a>
                </div> --}}
                <div class="login-form">
                    <form action="{{ url('auths/proses') }}" method="POST">
                        @csrf
                         <h4>LOGIN</h4>
                        <div class="form-group">
                            {{-- <label id="username">Username</label> --}}
                            <input type="text" name="username" class="form-control" placeholder="Username">
                        </div>
                        <div class="form-group">
                            {{-- <label id="password">Password</label> --}}
                            <input type="password" name="password" class="form-control" placeholder="Password">
                        </div>
                        <div class="checkbox">
                            <label>
                            <input type="checkbox"> Remember Me
                        </label>
                        {{-- <label class="pull-right">
                            <a href="#">Forgotten Password?</a>
                        </label> --}}
                        </div>
                        <button type="submit" class="btn btn-success btn-flat m-b-30 m-t-30">Sign in</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
  </body>
</html>
