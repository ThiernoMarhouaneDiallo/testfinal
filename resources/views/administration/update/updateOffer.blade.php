@extends('layouts.appAdministration')

@section('page')

 <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Modification des informations d'un offre</h1>
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
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Modification des informations d'une offre</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
             @foreach($updateOffer as $offer) 
              <form role="form" name="article" method="post" action="/update-offer/{{ $offer->id }}" enctype="multipart/form-data">
                {{ csrf_field() }}
                <div class="card-body">                                  
                 <div class="form-group">
                      <label for="exampleInputEmail1">Titre</label>
                      <input name="title" value="{{ $offer->title }}" type="text" class="form-control" id="exampleInputEmail1" placeholder="" required="required">
                </div>
                 @if ($errors->has('title'))
                      <span class="help-block">
                          <span class="text text-danger">{{ $errors->first('title') }}</span>
                      </span>
                 @endif

                 <div class="form-group">
                      <label for="exampleInputEmail1">Description</label>
                      <input name="description" value="{{ $offer->description }}" type="text" class="form-control" id="exampleInputEmail1" placeholder="" required="required">
                </div>
                 @if ($errors->has('description'))
                      <span class="help-block">
                          <span class="text text-danger">{{ $errors->first('description') }}</span>
                      </span>
                 @endif

                 <div class="form-group">
                      <label for="exampleInputEmail1">Prix (GNF)</label>
                      <input name="price" value="{{ $offer->price }}" type="number" class="form-control" id="exampleInputEmail1" placeholder="" required="required">
                </div>
                 @if ($errors->has('price'))
                      <span class="help-block">
                          <span class="text text-danger">{{ $errors->first('price') }}</span>
                      </span>
                 @endif

                 <div class="form-group">
                      <label for="exampleInputEmail1">Unité</label>
                      <input name="unit" value="{{ $offer->unit }}" type="text" class="form-control" id="exampleInputEmail1" placeholder="/jour /mois /année /intervention " required="required">
                </div>
                 @if ($errors->has('unit'))
                      <span class="help-block">
                          <span class="text text-danger">{{ $errors->first('unit') }}</span>
                      </span>
                 @endif

                  <div class="form-group">
                      <label for="exampleInputEmail1"> Ajoutez une image</label>               
                    <div id="preview">
                       @if($offer->image != null)
                         <img src="../documents/offers/{{ $offer->image }}" style="height: 100px">
                       @endif
                    </div>
                    <input id="photo" name="photo" type="file">
                  </div> 
                </div>
                <!-- /.card-body -->
                <div class="card-footer">
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