@extends('admin.layout')

@section('content')


<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Добавление нового пользователя
      </h1>
    </section>

    @include('admin.errors')

    <!-- Main content -->
    <section class="content">

      <div class="row">
        <div class="col-md-3">

          <!-- Profile Image -->
          <div class="box box-primary">
            <div class="box-body box-profile">
              <img class="profile-user-img img-responsive img-circle" src="/img/no-user-image.png" alt="">

              <h3 class="profile-username text-center">Создание пользователя</h3>

              <p class="text-muted text-center"></p>
              
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>

        <div class="col-md-9">
          <div class="nav-tabs-custom">
            <ul class="nav nav-tabs">
              <li class="active"><a href="#settings" data-toggle="tab" aria-expanded="true">Настройки</a></li>
            </ul>
            <div class="tab-content">
              <div class="tab-pane active" id="settings">
                  {{Form::open(['route' => 'users.store', 'files' => true, 'class' => 'form-horizontal'])}}
                  <div class="form-group">
                    <label for="inputName" class="col-sm-2 control-label">Имя</label>

                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="inputName" name="name" value="{{old('name')}}" placeholder="Имя">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputEmail" class="col-sm-2 control-label">Email</label>

                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="inputEmail" name="email" value="{{old('email')}}" placeholder="Email">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputPassword" class="col-sm-2 control-label">Пароль</label>

                    <div class="col-sm-10">
                      <input type="password" class="form-control" name="password" id="inputPassword" placeholder="Пароль">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputExperience" class="col-sm-2 control-label">Описание</label>

                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="inputExperience" name="description" value="{{old('description')}}" placeholder="Описание">
                    </div>
                  </div>

                  <div class="form-group">
                    <label for="exampleInputFile" class="col-sm-2 control-label">Аватар</label>

                    <div class="col-sm-10">
                      <input type="file" name="avatar" id="exampleInputFile">

                      <p class="help-block">Форматы: jpg, png</p>
                    </div>
                  </div>
                  
                  <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-10">
                      <button class="btn btn-success">Создать</button> <a href="{{route('users.index')}}" class="btn btn-primary">Назад</a>
                    </div>

                  </div>
                {{ Form::close() }}
              </div>
              <!-- /.tab-pane -->
            </div>
            <!-- /.tab-content -->
          </div>
          <!-- /.nav-tabs-custom -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->

    </section>
    <!-- /.content -->
  </div>

@endsection