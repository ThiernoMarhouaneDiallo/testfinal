@extends('layouts.appAdministration')

@section('page')


 <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">

       

    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Modification des informations d'un employé</h1>
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
                <h3 class="card-title">Modification des informations d'un employé</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
            @foreach($employeeUpdate as $employee)  
              <form role="form" name="utilisateur" method="post" action="/update-employee/{{ $employee->id }}" enctype="multipart/form-data">
                {{ csrf_field() }}
                <div class="card-body">
                
                  <div class="form-group">
                      <label for="exampleInputEmail1"> Photo</label>                       
                    <div id="preview"><img src="../documents/employees/{{ $employee->photo }}" style="height: 100px"></div>
                    <input id="photo" name="photo" type="file">
                  </div>                    
                 <div class="form-group">
                      <label for="exampleInputEmail1">Nom</label>
                      <input name="name" value="{{ $employee->name }}" type="text" class="form-control" id="exampleInputEmail1" placeholder="" required="required">
                </div>
                 @if ($errors->has('name'))
                      <span class="help-block">
                          <span class="text text-danger">{{ $errors->first('name') }}</span>
                      </span>
                 @endif

                 <div class="form-group">
                      <label for="exampleInputEmail1">Prénom</label>
                      <input name="firstName" value="{{ $employee->firstName }}" type="text" class="form-control" id="exampleInputEmail1" placeholder="" required="required">
                </div>
                 @if ($errors->has('firstName'))
                      <span class="help-block">
                          <span class="text text-danger">{{ $errors->first('firstName') }}</span>
                      </span>
                 @endif

                <div class="form-group">
                      <label for="exampleInputPassword1">Téléphone <span class="text text-danger">*</span></label>
                      <input value="{{ $employee->telephone }}" id="phone" class="form-control form-control-md" name="phone" type="tel">
                      <input type="hidden" id="dialCode" value="" name="dialCode">
                      <input type="hidden" id="numero_complete" value="" name="numero_complete">
                      <input type="hidden" id="pays" value="" name="pays">
                      <span style="display: none;" id="ephone" class="text text-danger g-mb-20">Veuillez entrer correctement le numéro de téléphone</span>
                  </div>
                    @if ($errors->has('full_number'))
                      <span class="help-block">
                          <span class="text text-danger">Veuillez entrer correctement le numéro de téléphone</span>
                      </span>
                    @endif
                 
                  <div class="form-group">
                          <label for="exampleInputPassword1">email</label>
                          <input name="email" value="{{ $employee->email }}" type="text" class="form-control" id="exampleInputPassword1" placeholder="" required="required">
                  </div>
                   @if($errors->has('email'))
                      <span class="help-block">
                          <span class="text text-danger">{{ $errors->first('email') }}</span>
                      </span>
                    @endif

                   <div class="form-group">
                          <label for="exampleInputPassword1">Fonction</label>
                          <input name="fonction" value="{{ $employee->fonction }}" type="text" class="form-control" id="exampleInputPassword1" placeholder="" required="required">
                  </div>
                   @if ($errors->has('fonction'))
                      <span class="help-block">
                          <span class="text text-danger">{{ $errors->first('fonction') }}</span>
                      </span>
                    @endif

                    <div class="form-group">
                        <label for="exampleInputPassword1">Adresse</label>
                        <input value="{{ $employee->adresse }}" name="adresse" type="texte" class="form-control" id="exampleInputPassword1" placeholder="" >
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