@extends('layouts.appAdministration')

@section('page')

@php 

  function affiche_date($date){

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

   return $day.' '.$month.' '.$year;
   
}
@endphp


 <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">

       

    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Modification des informations d'une formation</h1>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>
   
@include('modules.notification')


<!-- CONTENT  -->

   
   <!-- Main content -->
    <section class="content" id="repertoire_formulaire">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-12">
            <!-- general form elements -->
            <div class="box box-primary">
              <div class="box-header">
                <h3 class="box-title">Modification des informations d'une formation</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
             @foreach($formations as $formation)   
                <form role="form" name="formation" method="post" action="/update-formation/{{ $formation->id }}" enctype="multipart/form-data">
                  {{ csrf_field() }}
                  <div class="box-body"> 

                  <div class="form-group">
                        <label>Catégorie</label>
                        <select  name="categorie" id="chargement" class="form-control" required="required">
                          <option>Sélectionnez une catégorie</option>
                         @foreach($categories as $categorie) 
                           <option value="{{ $categorie->id }}" @if($categorie->id == $formation->categorie->id) selected="selected" @endif>{{ $categorie->nom }}</option>
                         @endforeach  
                        </select>
                      </div>

                      @if ($errors->has('categorie'))
                        <span class="help-block">
                            <span class="text text-danger">{{ $errors->first('categorie') }}</span>
                        </span>
                      @endif


                   <div class="form-group">
                        <label for="exampleInputEmail1">Title</label>
                        <input name="title" value="{{ $formation->title }}" type="text" class="form-control" id="exampleInputEmail1" placeholder="" required="required">
                  </div>
                   @if ($errors->has('title'))
                        <span class="help-block">
                            <span class="text text-danger">{{ $errors->first('title') }}</span>
                        </span>
                   @endif

                   <div class="form-group">
                        <label for="exampleInputEmail1">Lien vidéo</label>
                        <input name="video" value="{{ $formation->video }}" type="text" class="form-control" id="exampleInputEmail1" placeholder="" >
                  </div>
                   @if ($errors->has('video'))
                        <span class="help-block">
                            <span class="text text-danger">{{ $errors->first('video') }}</span>
                        </span>
                   @endif

                   <label for="exampleInputEmail1">Description de la formation</label>
                   <div class="card card-default card-outline">
                      <!-- /.card-header -->
                      <div class="card-body">
                        <div class="mb-3">
                          <textarea id="editor1" name="content" rows="10" cols="80">
                              {{ $formation->content }}
                          </textarea>
                        </div>
                      </div>
                   </div>
                  <!-- /.card -->
                   @if ($errors->has('content'))
                        <span class="help-block">
                            <span class="text text-danger">{{ $errors->first('content') }}</span>
                        </span>
                   @endif

                   <label for="exampleInputEmail1">A qui s'adresse cette formation ?</label>
                   <div class="card card-default card-outline">
                      <!-- /.card-header -->
                      <div class="card-body">
                        <div class="mb-3">
                          <textarea id="editor2" name="prerequis" rows="10" cols="80">{{ $formation->prerequis }}</textarea>
                        </div>
                      </div>
                   </div>
                  <!-- /.card -->
                   @if ($errors->has('prerequis'))
                        <span class="help-block">
                            <span class="text text-danger">{{ $errors->first('prerequis') }}</span>
                        </span>
                   @endif

                   <label for="exampleInputEmail1">Objectifs de Formation</label>
                   <div class="card card-default card-outline">
                      <!-- /.card-header -->
                      <div class="card-body">
                        <div class="mb-3">
                          <textarea id="editor3" name="objectif" rows="10" cols="80">{{ $formation->objectif }}</textarea>
                        </div>
                      </div>
                   </div>
                  <!-- /.card -->
                   @if ($errors->has('objectif'))
                        <span class="help-block">
                            <span class="text text-danger">{{ $errors->first('objectif') }}</span>
                        </span>
                   @endif

                   <label for="exampleInputEmail1">Résultats attendus de la Formation</label>
                   <div class="card card-default card-outline">
                      <!-- /.card-header -->
                      <div class="card-body">
                        <div class="mb-3">
                          <textarea id="editor4" name="programme" rows="10" cols="80">{{ $formation->programme }}</textarea>
                        </div>
                      </div>
                   </div>
                  <!-- /.card -->
                   @if ($errors->has('programme'))
                        <span class="help-block">
                            <span class="text text-danger">{{ $errors->first('programme') }}</span>
                        </span>
                   @endif

                   <label for="exampleInputEmail1">Commentaire </label>
                   <div class="card card-default card-outline">
                      <!-- /.card-header -->
                      <div class="card-body">
                        <div class="mb-3">
                          <textarea id="editor5" name="commentaire" rows="10" cols="80">{{ $formation->commentaire }}</textarea>
                        </div>
                      </div>
                   </div>
                  <!-- /.card -->
                   @if ($errors->has('commentaire'))
                        <span class="help-block">
                            <span class="text text-danger">{{ $errors->first('commentaire') }}</span>
                        </span>
                   @endif
                   
                    <div class="form-group">
                        <label for="exampleInputEmail1"> Ajoutez une image</label>                 
                      <div id="preview">
                          @if($formation->image != null)
                            <img src="../documents/formations/images/{{ $formation->image }}" style="height: 100px">
                          @endif
                      </div>
                      <input id="photo" name="photo" type="file">
                    </div> 
                      

                    <div class="form-group">
                        <label for="exampleInputEmail1"> Ajoutez un fichier </label>                 
                      <div id="previewPdf">
                          @if($formation->file != null)
                            <img src="../documents/pdf.png" style="height: 100px">
                          @endif
                      </div>
                      <input id="fichier" name="fichier" type="file">
                    </div>

                    <div class="form-group">
                      <label for="prenom">Date début de la formation : 
                      @if($formation->publicationDate != null)
                        {{ affiche_date($formation->publicationDate) }}<span class="text text-danger">*</span></label>
                      @endif  

                      <input value="" name="dateDebut" type="date" class="form-control" id="dateDebut" placeholder="" >
                    </div>
                    @if ($errors->has('dateDebut'))
                      <span class="help-block">
                          <span class="text text-danger">{{ $errors->first('dateDebut') }}</span>
                      </span>
                    @endif

                    <div class="form-group">
                      <label for="prenom">Date Fin de la formation : 
                      @if($formation->dateFin != null)  
                        {{ affiche_date($formation->dateFin) }}<span class="text text-danger">*</span></label>
                      @endif  

                      <input value="{{ $formation->dateFin }}" name="dateFin" type="date" class="form-control" id="dateFin" placeholder="" >
                    </div>
                    @if ($errors->has('dateFin'))
                      <span class="help-block">
                          <span class="text text-danger">{{ $errors->first('dateFin') }}</span>
                      </span>
                    @endif 

                    <div class="form-group">
                        <label for="exampleInputEmail1">Informations complementaires</label>
                        <input name="duree" value="{{ $formation->duree }}" type="text" class="form-control" id="exampleInputEmail1" placeholder="">
                  </div>
                   @if ($errors->has('duree'))
                        <span class="help-block">
                            <span class="text text-danger">{{ $errors->first('duree') }}</span>
                        </span>
                   @endif  

              </div>
              <!-- /.card-body -->

                  <div class="box-footer">
                    <button type="submit" class="btn btn-primary">Modifier</button>
                  </div>
                </form>
             @endforeach 
            </div>
            <!-- /.card -->

           

          </div>
          <!--/.col (left) -->
          
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->

</div> 
  <!-- /.content-wrapper -->
@endsection