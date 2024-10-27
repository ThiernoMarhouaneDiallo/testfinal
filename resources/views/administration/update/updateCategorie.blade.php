@extends('layouts.appAdministration')

@section('page')


 <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">

       

    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Modification des catégories</h1>
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
              </div>
              <!-- /.card-header -->
              <!-- form start -->
             @foreach($categories as $categorie)   
              <form role="form" name="article" method="post" action="/update-categorie/{{ $categorie->id }}" enctype="multipart/form-data">
                {{ csrf_field() }}
                <div class="box-body">                                  

                   <div class="form-group">
                        <label for="exampleInputEmail1">Nom</label>
                        <input name="nom" value="{{ $categorie->nom }}" type="text" class="form-control" id="exampleInputEmail1" placeholder="" required="required">
                  </div>
                   @if ($errors->has('nom'))
                        <span class="help-block">
                            <span class="text text-danger">{{ $errors->first('nom') }}</span>
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