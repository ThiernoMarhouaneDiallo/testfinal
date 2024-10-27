@extends('layouts.appAdministration')

@section('page')


 <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">

       

    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Modification des informations d'une activité</h1>
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
                <h3 class="box-title">Modification d'une activité</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
             @foreach($activite as $act)   
              <form role="form" name="article" method="post" action="/update-activite/{{ $act->id }}" enctype="multipart/form-data">
                {{ csrf_field() }}
                <div class="box-body">   

                     <div class="form-group">
                        <label for="exampleInputEmail1">Titre</label>
                        <input name="titre" value="{{ $act->titre }}" type="text" class="form-control" id="exampleInputEmail1" placeholder="" >
                  </div>
                   @if ($errors->has('titre'))
                        <span class="help-block">
                            <span class="text text-danger">{{ $errors->first('titre') }}</span>
                        </span>
                   @endif

                    <div class="form-group">
                      <label for="exampleInputEmail1"> Image </label>       
                      <div id="previewPdf">
                         @if($act->image != null)
                           <a href="/documents/activites/{{ $act->image }}" target="_blank">
                            <img style="height:50px " class="img-responsive img-rounded" src="../documents/activites/{{ $act->image }}">
                          </a>
                         @endif
                      </div>
                      <input id="fichier" name="image" type="file">
                    </div>

                   <div class="form-group">
                        <label for="exampleInputEmail1">Lien</label>
                        <input name="lien" value="{{ $act->lien }}" type="text" class="form-control" id="exampleInputEmail1" placeholder="" >
                  </div>
                   @if ($errors->has('lien'))
                        <span class="help-block">
                            <span class="text text-danger">{{ $errors->first('lien') }}</span>
                        </span>
                   @endif

                    <div class="form-group">
                        <label for="exampleInputEmail1">Description</label>
                        <input name="description" value="{{ $act->description }}" type="text" class="form-control" id="exampleInputEmail1" placeholder="" >
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