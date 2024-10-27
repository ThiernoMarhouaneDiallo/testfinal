@extends('layouts.appAdministration')

@section('page')


 <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">

       

    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Modification des informations de la galerie</h1>
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
                <h3 class="box-title">Modification d'un fichier dans la galerie</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
             @foreach($galerie as $ga)   
              <form role="form" name="article" method="post" action="/update-galerie/{{ $ga->id }}" enctype="multipart/form-data">
                {{ csrf_field() }}
                <div class="box-body">   

                     <div class="form-group">
                      <label>Type d'envoie</label>
                      <select  name="type" id="chargement" class="form-control">
                        <option>Sélectionnez le type d'envoi</option>
                         <option value="fichier" @if($ga->type == "pdf" || $ga->type == "image") selected="selected" @endif>Image ou PDF</option>
                         <option value="video" @if($ga->type == "video") selected="selected" @endif>Vidéo</option>
                      </select>
                    </div>                                
                     
                     <div id="block_sms"  @if($ga->type == "video") style="display: none;" @endif class="form-group">
                      <label for="exampleInputEmail1"> Modifier le fichier (image ou PDF)</label>       
                      <div id="previewPdf">
                         @if($ga->type == "pdf")
                          <a href="/documents/galerie/{{ $ga->nom }}" target="_blank"><i class="fa fa-file-pdf-o" style="font-size: 48px;color: red;"></i></a>
                         @else
                          <a href="/documents/galerie/{{ $ga->nom }}" target="_blank">
                            <img style="height:50px " class="img-responsive img-rounded" src="documents/galerie/{{$ga->nom }}">
                          </a>
                         @endif
                      </div>
                      <input id="fichier" name="fichier" type="file">
                    </div>

                    <div id="block_email" @if($ga->type != "video") style="display: none;" @endif  class="form-group">
                        <label for="exampleInputEmail1">Lien youtube de la vidéo</label>
                        <input name="video" value="{{ $ga->nom }}" type="text" class="form-control" id="exampleInputEmail1" placeholder="" >
                    </div> 

                   <div class="form-group">
                        <label for="exampleInputEmail1">Description</label>
                        <input name="description" value="{{ $ga->description }}" type="text" class="form-control" id="exampleInputEmail1" placeholder="" >
                  </div>
                   @if ($errors->has('description'))
                        <span class="help-block">
                            <span class="text text-danger">{{ $errors->first('description') }}</span>
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