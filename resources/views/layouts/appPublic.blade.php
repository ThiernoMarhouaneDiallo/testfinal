
@php 

  function affiche_date_app($date){

   $last = explode(" ", $date);
   $date = explode("-", $last[0]);
   $temps = explode(":", $last[1]);
     
   switch ((string)$date[1]) {
        case '01':
           $month = 'Janv';
          break;
        case '02':
           $month = 'Fev';
          break;
        case '03':
           $month = 'Mars';
          break;            
        case '04':
           $month = 'Avril';
          break;
        case '05':
           $month = 'Mai';
          break;      
          case '06':
           $month = 'Juin';
          break;
        case '07':
           $month = 'Jui';
          break;
          case '08':
           $month = 'Aout';
          break;
        case '09':
           $month = 'Sept';
          break;
        case '10':
           $month = 'Oct';
          break;
          case '11':
           $month = 'Nov';
          break;
          case '12':
           $month = 'Dec';
          break;                                        
        default:
           $month = '/'.$mois;
          break;
   }
   $day = $date[2];
   $year = $date[0];

   return $day.' '.$month.' '.$year.' '.$last[1];
   
  }

$contacts = App\Models\Contact::get();
@endphp

<!DOCTYPE html>
<html lang="fr">
  <head>
    <!-- Title -->
    <title>  {{ $titre }} LOURA CONSULTING GROUP </title>

    <!-- Required Meta Tags Always Come First -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />

    <!-- Favicon -->
    <link rel="shortcut icon" href="../../favicon.ico">

    <!-- Google Fonts -->
    <link rel="stylesheet" href="//fonts.googleapis.com/css?family=Ek+Mukta%3A300%2C400%2C600%2C700%7COpen+Sans%3A300%2C400%2C500%2C600%2C700%2C800%7CPlayfair+Display%7CRoboto%7CRaleway%7CSpectral%7CRubik">

    <!-- CSS Global Compulsory -->
    <link rel="stylesheet" href="../assets/vendor/bootstrap/bootstrap.min.css">

    <!-- CSS Implementing Plugins -->
    <link rel="stylesheet" href="../assets/vendor/icon-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="../assets/vendor/icon-line/css/simple-line-icons.css">
    <link rel="stylesheet" href="../assets/vendor/icon-line-pro/style.css">
    <link rel="stylesheet" href="../assets/vendor/icon-hs/style.css">
    <link rel="stylesheet" href="../assets/vendor/hamburgers/hamburgers.min.css">
    <link rel="stylesheet" href="../assets/vendor/animate.css">
    <link rel="stylesheet" href="../assets/vendor/fancybox/jquery.fancybox.css">
    <link rel="stylesheet" href="../assets/vendor/slick-carousel/slick/slick.css">

    <!-- CSS Template -->
    <link rel="stylesheet" href="../assetsCourse/css/styles.op-courses.css">

    <!-- CSS Customization -->
    <link rel="stylesheet" href="../assets/css/custom.css">
  </head>

  <body>
    <main class="g-pt-115">
      <!-- Header v1 -->
      <header id="js-header" class="u-header u-header--sticky-top u-header--change-appearance g-z-index-9999"
              data-header-fix-moment="100">
        <div class="u-header__section u-shadow-v27 g-bg-white g-transition-0_3 g-py-17"
             data-header-fix-moment-exclude="g-py-17"
             data-header-fix-moment-classes="g-py-12">
          <nav class="navbar navbar-expand-lg g-py-0">
            <div class="container-fluid g-pos-rel">
              <!-- Logo -->
              <a href="#!" class="js-go-to navbar-brand u-header__logo"
                 data-type="static">
                <img class="u-header__logo-img u-header__logo-img--main g-width-160 g-width-225--md" src="../images/logoloura.JPG" alt="Logo">
              </a>
              <!-- End Logo -->

              <!-- Navigation -->
              <div class="collapse navbar-collapse align-items-center flex-sm-row" id="navBar">
                <ul id="js-scroll-nav" class="navbar-nav text-uppercase g-font-weight-700 g-font-size-13 g-pt-20 g-pt-0--lg g-mb-20 g-mb-0--lg ml-auto g-mr-20">
                  <li class="nav-item g-mr-3--lg g-mb-5 g-mb-0--lg">
                    <a href="{{ route('home') }}" class="nav-link">Accueil <span class="sr-only"></span>
                    </a>
                  </li>
                  <li class="nav-item g-mx-3--lg g-mb-5 g-mb-0--lg">
                    <a href="{{ route('public_propos') }}" class="nav-link"
                    >Présentation</a>
                  </li>
                  <li class="nav-item g-mx-3--lg g-mb-5 g-mb-0--lg">
                    <a href="{{ route('public_formations') }}" class="nav-link">Formations</a>
                  </li>
                  <li class="nav-item g-mx-3--lg g-mb-5 g-mb-0--lg">
                    <a href="{{ route('public_activites') }}" class="nav-link">Activités</a>
                  </li>
                  <li class="nav-item d-lg-none d-xl-block g-mx-3--lg g-mb-5 g-mb-0--lg">
                    <a href="{{ route('public_messagerie') }}" class="nav-link">Contactez-nous</a>
                  </li>
                  <li class="nav-item d-lg-none d-xl-block g-mx-3--lg g-mb-5 g-mb-0--lg">
                    <a href="{{ route('public_galerie') }}" class="nav-link">Gallerie</a>
                  </li>
                </ul>

                <ul class="list-inline mb-0">
                  <li class="list-inline-item g-mr-10">
                    <a href="#!">
                      <span class="u-icon-v3 u-icon-size--xs u-shadow-v25 g-font-size-12 g-bg-twitter g-bg-twitter--hover g-color-white rounded-circle g-mr-10" href="#!">
                          <i class="fa fa-twitter"></i>
                    </a>
                  </li>
                  <li class="list-inline-item">
                    <a class="u-icon-v3 g-width-35 g-height-35 g-font-size-default g-theme-color-gray-light-v2 g-color-white--hover g-theme-bg-gray-light-v3 g-bg-primary--hover g-rounded-50x g-transition-0_2 g-transition--ease-in" href="https://www.facebook.com/profile.php?id=100082878025386">
                      <span class="u-icon-v3 u-icon-size--xs u-shadow-v25 g-font-size-12 g-bg-facebook g-bg-facebook--hover g-color-white rounded-circle g-mr-10" href="#!">
                          <i class="fa fa-facebook"></i>
                      
                    </a>
                  </li>
                  <li class="list-inline-item">
                    <a  href="https://www.youtube.com/channel/UCy_3cl3wxFR1aFdpz1z3YOQ">
                     <span class="u-icon-v3 u-icon-size--xs u-shadow-v25 g-font-size-12 g-bg-youtube g-bg-youtube--hover g-color-white rounded-circle g-mr-10" href="#!">
                          <i class="fa fa-youtube"></i>
                    </a>
                  </li>
                </ul>
              </div>
              <!-- End Navigation -->

              <!-- Responsive Toggle Button -->
              <button class="navbar-toggler btn g-line-height-1 g-brd-none g-pa-0 g-pos-abs g-top-15 g-right-0" type="button"
                      aria-label="Toggle navigation"
                      aria-expanded="false"
                      aria-controls="navBar"
                      data-toggle="collapse"
                      data-target="#navBar">
                <span class="hamburger hamburger--slider">
                  <span class="hamburger-box">
                    <span class="hamburger-inner"></span>
                  </span>
                </span>
              </button>
              <!-- End Responsive Toggle Button -->
            </div>
          </nav>
        </div>
      </header>
      <!-- End Header v1 -->
    		 
        @yield('page')

        <!-- Footer -->
    <div id="contacts-section" class="g-bg-black-opacity-0_9 g-color-white-opacity-0_8 g-py-60">
      <div class="container">
        <div class="row">
          

          

          <!-- Footer Content -->
          <div class="col-lg-3 col-md-6 g-mb-40 g-mb-0--lg">
            <div class="u-heading-v2-3--bottom g-brd-white-opacity-0_8 g-mb-20">
              <h2 class="u-heading-v2__title h6 text-uppercase mb-0">Liens</h2>
            </div>

            <nav class="text-uppercase1">
              <ul class="list-unstyled g-mt-minus-10 mb-0">

                <li class="g-pos-rel g-brd-bottom g-brd-white-opacity-0_1 g-py-10">
                  <h4 class="h6 g-pr-20 mb-0">
                    <a class="g-color-white-opacity-0_8 g-color-white--hover" href="{{ route('home') }}">Accueil</a>
                    <i class="fa fa-angle-right g-absolute-centered--y g-right-0"></i>
                  </h4>
                </li>
                
                <li class="g-pos-rel g-brd-bottom g-brd-white-opacity-0_1 g-py-10">
                  <h4 class="h6 g-pr-20 mb-0">
                <a class="g-color-white-opacity-0_8 g-color-white--hover" href="{{ route('public_propos') }}">Présentation</a>
                <i class="fa fa-angle-right g-absolute-centered--y g-right-0"></i>
              </h4>
                </li>

                  <li class="g-pos-rel g-brd-bottom g-brd-white-opacity-0_1 g-py-10">
                  <h4 class="h6 g-pr-20 mb-0">
                <a class="g-color-white-opacity-0_8 g-color-white--hover" href="{{ route('public_formations') }}">Formations</a>
                <i class="fa fa-angle-right g-absolute-centered--y g-right-0"></i>
              </h4>
                </li>

               
                 <li class="g-pos-rel g-brd-bottom g-brd-white-opacity-0_1 g-py-10">
                  <h4 class="h6 g-pr-20 mb-0">
                <a class="g-color-white-opacity-0_8 g-color-white--hover" href="{{ route('public_activites') }}">Activités</a>
                <i class="fa fa-angle-right g-absolute-centered--y g-right-0"></i>
              </h4>
                </li>

                 <li class="g-pos-rel g-brd-bottom g-brd-white-opacity-0_1 g-py-10">
                  <h4 class="h6 g-pr-20 mb-0">
                <a class="g-color-white-opacity-0_8 g-color-white--hover" href="{{ route('public_messagerie') }}">Contactez-nous</a>
                <i class="fa fa-angle-right g-absolute-centered--y g-right-0"></i>
              </h4>
                </li>
              
                <li class="g-pos-rel g-brd-bottom g-brd-white-opacity-0_1 g-py-10">
                  <h4 class="h6 g-pr-20 mb-0">
                <a class="g-color-white-opacity-0_8 g-color-white--hover" href="{{ route('public_galerie') }}">Galerie</a>
                <i class="fa fa-angle-right g-absolute-centered--y g-right-0"></i>
              </h4>
                </li>


               
              </ul>
            </nav>
          </div>
          <!-- End Footer Content -->
        @php 
             $contacts = App\Models\Contact::get();
        @endphp

        @foreach($contacts as $contact)
          <!-- Footer Content -->
          <div class="col-lg-3 col-md-6">
            <div class="u-heading-v2-3--bottom g-brd-white-opacity-0_8 g-mb-20">
              <h2 class="u-heading-v2__title h6 text-uppercase mb-0">Notre adresse</h2>
            </div>

            <address class="g-bg-no-repeat g-font-size-12 mb-0" style="background-image: url(../assets/img/maps/map2.png);">
          <!-- Location -->
          <div class="d-flex g-mb-20">
            <div class="g-mr-10">
              <span class="u-icon-v3 u-icon-size--xs g-bg-white-opacity-0_1 g-color-white-opacity-0_6">
                <i class="fa fa-map-marker"></i>
              </span>
            </div>
            <p class="mb-0">{{ $contact->adresse }} <br> République de Guinée</p>
          </div>
          <!-- End Location -->

          <!-- Phone -->
          <div class="d-flex g-mb-20">
            <div class="g-mr-10">
              <span class="u-icon-v3 u-icon-size--xs g-bg-white-opacity-0_1 g-color-white-opacity-0_6">
                <i class="fa fa-phone"></i>
              </span>
            </div>
            <p class="mb-0">(+224) {{ $contact->telephone }} </p>
          </div>
          <!-- End Phone -->

          <!-- Email and Website -->
          <div class="d-flex g-mb-20">
            <div class="g-mr-10">
              <span class="u-icon-v3 u-icon-size--xs g-bg-white-opacity-0_1 g-color-white-opacity-0_6">
                <i class="fa fa-globe"></i>
              </span>
            </div>
            <p class="mb-0">
              <a class="g-color-white-opacity-0_8 g-color-white--hover" href="mailto:info@geekguinee.com">{{ $contact->email }}</a>
              <br>
              <a class="g-color-white-opacity-0_8 g-color-white--hover" href="#!">www.louraconsultinggroup.com</a>
            </p>
          </div>
          <!-- End Email and Website -->
        @endforeach  
        </address>
          </div>
          <!-- End Footer Content -->
        </div>
      </div>
    </div>
    <!-- End Footer -->

    <!-- Copyright Footer -->
    <footer class="g-bg-gray-dark-v1 g-color-white-opacity-0_8 g-py-20">
      <div class="container">
        <div class="row">
          <div class="col-md-8 text-center text-md-left g-mb-10 g-mb-0--md">
            <div class="d-lg-flex">
              <small class="d-block g-font-size-default g-mr-10 g-mb-10 g-mb-0--md">@php date('Y') @endphp &copy; LOURA CONSULTING GROUPE Tous droits réservés.</small>
              
            </div>
          </div>
        </div>
      </div>
    </footer>
    <!-- End Copyright Footer -->


          
    	</main>
    </body>
     
    <!-- JS Global Compulsory -->
    <script src="assets/vendor/jquery/jquery.min.js"></script>
    <script src="assets/vendor/jquery-migrate/jquery-migrate.min.js"></script>
    <script src="assets/vendor/popper.min.js"></script>
    <script src="assets/vendor/bootstrap/bootstrap.min.js"></script>

    <!-- JS Implementing Plugins -->
    <script src="assets/vendor/appear.js"></script>
    <script src="assets/vendor/dzsparallaxer/dzsparallaxer.js"></script>
    <script src="assets/vendor/dzsparallaxer/dzsscroller/scroller.js"></script>
    <script src="assets/vendor/dzsparallaxer/advancedscroller/plugin.js"></script>
    <script src="assets/vendor/hs-megamenu/src/hs.megamenu.js"></script>
    <script src="assets/vendor/slick-carousel/slick/slick.js"></script>
    <script src="assets/vendor/fancybox/jquery.fancybox.min.js"></script>

    <!-- JS Unify -->
    <script src="assets/js/hs.core.js"></script>
    <script src="assets/js/components/hs.header.js"></script>
    <script src="assets/js/helpers/hs.hamburgers.js"></script>
    <script src="assets/js/components/hs.dropdown.js"></script>
    <script src="assets/js/components/hs.counter.js"></script>
    <script src="assets/js/components/hs.onscroll-animation.js"></script>
    <script src="assets/js/components/hs.sticky-block.js"></script>
    <script src="assets/js/components/hs.carousel.js"></script>
    <script src="assets/js/components/hs.popup.js"></script>
    <script src="assets/js/components/hs.go-to.js"></script>

    <!-- JS Customization -->
    <script src="assets/js/custom.js"></script>


    <!-- GOOGLE MAP -->

    <!-- JS Implementing Plugins -->
      <script  src="assets/vendor/gmaps/gmaps.min.js"></script>

      <!-- JS Unify -->
      <script  src="assets/js/components/gmap/hs.map.js"></script>

      <!-- JS Plugins Init. -->
      <script >
        // initialization of google map
        function initMap() {
          $.HSCore.components.HSGMap.init('.js-g-map');
        }
      </script>

      <script  src="//maps.googleapis.com/maps/api/js?key=AIzaSyAs1GWv9NpzfnY7MjVpY3GniqkEcflgITY&amp;callback=initMap" async="" defer=""></script>
    <!-- JS Implementing Plugins -->
      <!-- <script  src="assets/vendor/gmaps/gmaps.min.js"></script> -->

      <!-- JS Unify -->
      <!-- <script  src="assets/js/components/gmap/hs.map.js"></script> -->

      <!-- JS Plugins Init. -->
     <!--  <script >
        // initialization of google map
        function initMap() {
          $.HSCore.components.HSGMap.init('.js-g-map');
        }
      </script> -->

      <!-- <script  src="//maps.googleapis.com/maps/api/js?key=AIzaSyAs1GWv9NpzfnY7MjVpY3GniqkEcflgITY&amp;callback=initMap" async="" defer=""></script> -->

    <!-- END GOOGLE MAP -->

    <!-- JS Plugins Init. -->
    <script>
      $(document).on('ready', function () {
        // initialization of header
        $.HSCore.components.HSHeader.init($('#js-header'));
        $.HSCore.helpers.HSHamburgers.init('.hamburger');

        // initialization of MegaMenu
        $('.js-mega-menu').HSMegaMenu();

        // initialization of HSDropdown component
        $.HSCore.components.HSDropdown.init($('[data-dropdown-target]'), {
          afterOpen: function () {
            $(this).find('input[type="search"]').focus();
          }
        });

        // initialization of scroll animation
        $.HSCore.components.HSOnScrollAnimation.init('[data-animation]');

        // initialization of go to
        $.HSCore.components.HSGoTo.init('.js-go-to');

        // initialization of counters
        var counters = $.HSCore.components.HSCounter.init('[class*="js-counter"]');

        // initialization of carousel
        $.HSCore.components.HSCarousel.init('[class*="js-carousel"]');

        // initialization of popups
        $.HSCore.components.HSPopup.init('.js-fancybox');
      });

      $(window).on('load', function () {
        // initialization of sticky blocks
        setTimeout(function() { // important in this case
          $.HSCore.components.HSStickyBlock.init('.js-sticky-block');
        }, 1);
      });
    </script>



    <!-- TELEPHONE -->

    <script src="../js/script.js"></script>

        <!-- TEEPHONE -->
  <script src="../build/js/intlTelInput.js"></script>
  <script>
    var input = document.querySelector("#phone");
    window.intlTelInput(input, {
       allowDropdown: true,
       autoHideDialCode: false,
       autoPlaceholder: "polite",
       dropdownContainer: document.body,
      // excludeCountries: ["us"],
        formatOnDisplay: true,
      // geoIpLookup: function(callback) {
      //   $.get("http://ipinfo.io", function() {}, "jsonp").always(function(resp) {
      //     var countryCode = (resp && resp.country) ? resp.country : "";
      //     callback(countryCode);
      //   });
      // },
       hiddenInput: "full_number",
       //initialCountry: "auto",
      // localizedCountries: { 'de': 'Deutschland' },
      nationalMode: false,
      //onlyCountries: ['gn'],
      // placeholderNumberType: "MOBILE",
       preferredCountries: ['gn'],
       separateDialCode: false,
      utilsScript: "../build/js/utils.js",
    });
  </script>



  <!-- Google translation -->

  <script type="text/javascript">
    function googleTranslateElementInit() {
      new google.translate.TranslateElement({pageLanguage: 'fr'}, 'google_translate_element');
    }
  </script>

  <script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>


  <!-- FACEBOOK SHARE -->
  <div id="fb-root"></div>
  <script async defer crossorigin="anonymous" src="https://connect.facebook.net/fr_FR/sdk.js#xfbml=1&version=v9.0" nonce="NiHHqQ18"></script>

  <!-- JS Implementing Plugins -->
  <script  src="../assets/vendor/slick-carousel/slick/slick.js"></script>

  <!-- JS Unify -->
  <script  src="../assets/js/components/hs.carousel.js"></script>

  <script >
    $(document).on('ready', function () {
      // initialization of carousel
      $.HSCore.components.HSCarousel.init('.js-carousel');
    });
  </script>



  <script>
        
         /*
     *  IMAGE UPLOADING
     *
     */
      function previewImages(){

            var $preview = $('#preview');
            var edit = $preview.attr('class');
             if(edit != 'edit'){
                $preview.empty();
             } 
            if (this.files) $.each(this.files, readAndPreview);

            function readAndPreview(i, file) {
              if (!/\.(jpe?g|png|gif|GIF|JPG|PNG|JPE?G)$/i.test(file.name)){
               $('#ephoto').show();
               $('#photo').val("");
               
              }
              else{ // else...
              
                  var reader = new FileReader();
                  $(reader).on("load", function() {
                    $preview.empty();
                    $preview.append($("<img/>", {src:this.result, height:100}));
                  });

                  reader.readAsDataURL(file);
                  $('#ephoto').hide();
                }
          }

          }
          $('#photo').on("change", previewImages);
  </script>



</html>

