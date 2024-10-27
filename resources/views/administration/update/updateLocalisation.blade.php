@extends('layouts.appAdministration')

@section('page')


 <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">

       

    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Modification des informations de Géolocalisation</h1>
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
             @foreach($localisation as $local)   
              <form role="form" name="article" method="post" action="/update-geolocalisation/{{ $local->id }}" enctype="multipart/form-data">
                {{ csrf_field() }}
                <div class="box-body">                                  
                     
              

                   <div class="form-group">
                        <label for="exampleInputEmail1">Longitude</label>
                        <input name="longitude" value="{{ $local->longitude }}" type="text" class="form-control" id="exampleInputEmail1" placeholder="" required="required">
                  </div>
                   @if ($errors->has('longitude'))
                        <span class="help-block">
                            <span class="text text-danger">{{ $errors->first('longitude') }}</span>
                        </span>
                   @endif

                   <div class="form-group">
                        <label for="exampleInputEmail1">Latitude</label>
                        <input name="latitude" value="{{ $local->latitude }}" type="text" class="form-control" id="exampleInputEmail1" placeholder="" required="required">
                  </div>
                   @if ($errors->has('latitude'))
                        <span class="help-block">
                            <span class="text text-danger">{{ $errors->first('latitude') }}</span>
                        </span>
                   @endif

                   <div class="form-group">
                        <label for="exampleInputEmail1">Description</label>
                        <input name="description" value="{{ $local->description }}" type="text" class="form-control" id="exampleInputEmail1" placeholder="" required="required">
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