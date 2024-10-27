@extends('layouts.appPublic',['titre'=> "Bienvenue sur "])

@section('page')

@php

function affiche_date_home($date){

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

@endphp

  @foreach($contacts as $contact)

   <!-- News Content -->
      <section class="g-pt-50 g-pb-100">
        <div class="container">
          <div class="row">
            
            <!-- Image Carousel -->
            <!--<div class="col-lg-12 g-mb-50 g-mb-0--lg">-->
            <!--    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">-->
            <!--      <ol class="carousel-indicators">-->
            <!--        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>-->
            <!--        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>-->
            <!--        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>-->
            <!--      </ol>-->
            <!--      <div class="carousel-inner">-->
            <!--        <div class="carousel-item active">-->
            <!--          <img class="d-block w-100" src="documents/home/{{ $contact->imageDescription }}" alt="First slide">-->
            <!--        </div>-->
            <!--        <div class="carousel-item">-->
            <!--          <img class="d-block w-100" src="documents/home/{{ $contact->imageHistorique}}" alt="Second slide">-->
            <!--        </div>-->
            <!--        <div class="carousel-item">-->
            <!--          <img class="d-block w-100" src="documents/home/{{ $contact->imagePresentation }}" alt="Third slide">-->
            <!--        </div>-->
            <!--      </div>-->
            <!--      <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">-->
            <!--        <span class="carousel-control-prev-icon" aria-hidden="true"></span>-->
            <!--        <span class="sr-only">Précédent</span>-->
            <!--      </a>-->
            <!--      <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">-->
            <!--        <span class="carousel-control-next-icon" aria-hidden="true"></span>-->
            <!--        <span class="sr-only">Suivante</span>-->
            <!--      </a>-->
            <!--    </div>-->
            <!--</div>   -->
              
            <!-- Articles Content -->
            <div class="col-lg-12 g-mb-50 g-mb-0--lg">
              <article class="g-mb-30">
                  <div class="g-font-size-16 g-line-height-1_8 g-mb-30">
                   <header class="g-mb-30">
                     <h2 class="h2 g-mb-15 g-color-primary">Loura Consulting Group</h2>
                   </header>
                  <figure class="u-shadow-v25 g-mb-30">
                    <img class="img-fluid w-100" src="documents/home/{{ $contact->imageDescription }}" alt="Image Description">
                  </figure>
                  
                  <p class="g-color-gray-dark-v2">
                    @php
                     echo html_entity_decode($contact->description,ENT_QUOTES,"UTF-8") 
                    @endphp
                  </p>
                  <a class="btn u-btn-outline-primary g-font-weight-600 g-rounded-50 g-px-30 g-py-13" href="{{ route('public_messagerie') }}">Contactez-nous
                    <i class="ml-2 fa fa-long-arrow-right"></i>
                  </a>
                <hr class="g-brd-gray-light-v4 g-mb-40">
              </article>
              <div id="stickyblock-end"></div>
            </div>
            <!-- End Articles Content -->


             <!-- Articles Content -->
            <div class="col-lg-12 g-mb-50 g-mb-0--lg">
              <article class="g-mb-30">
                  <div class="g-font-size-16 g-line-height-1_8 g-mb-30">
                  
                   <header class="g-mb-30">
                     <h2 class="h2 g-mb-15 g-color-primary">Historique</h2>
                   </header>
                   
                  <figure class="u-shadow-v25 g-mb-30">
                    <img class="img-fluid w-100" src="../documents/home/{{ $contact->imageHistorique }}" alt="Image Description">
                  </figure>
                  
                  <p class="g-color-gray-dark-v2">
                    @php
                     echo html_entity_decode($contact->historique,ENT_QUOTES,"UTF-8") 
                    @endphp
                  </p>
                <hr class="g-brd-gray-light-v4 g-mb-40">
              </article>

              <div id="stickyblock-end"></div>
            </div>
            <!-- End Articles Content -->

             <!-- Articles Content -->
            <div class="col-lg-12 g-mb-50 g-mb-0--lg">
              <article class="g-mb-30">
                  <div class="g-font-size-16 g-line-height-1_8 g-mb-30">
                      
                  <header class="g-mb-30">
                     <h2 class="h2 g-mb-15 g-color-primary">En quoi pouvons-nous vous aider?</h2>
                   </header>
                   
                  <figure class="u-shadow-v25 g-mb-30">
                    <img class="img-fluid w-100" src="../documents/home/{{ $contact->imagePresentation }}" alt="Image Description">
                  </figure>
                  
                  <p class="g-color-gray-dark-v2">
                    @php
                     echo html_entity_decode($contact->aide,ENT_QUOTES,"UTF-8") 
                    @endphp
                  </p>
                <hr class="g-brd-gray-light-v4 g-mb-40">
              </article>

              <div id="stickyblock-end"></div>
            </div>
            <!-- End Articles Content -->


         </div>
      </div>
     </section>   






   

 @endforeach




@endsection