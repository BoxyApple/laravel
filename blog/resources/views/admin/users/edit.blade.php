@extends('admin.layout')

@section('content')

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Профиль пользователя
      </h1>
    </section>

    @include('admin.errors')

    <!-- Main content -->
    <section class="content">
      {{ Form::open([
                      'route' => ['users.update', $user->id],
                      'method'  =>  'put',
                      'files' =>  true,
                      'class' => 'form-horizontal'
                      ])}}
      <div class="row">
        <div class="col-md-3">

          <!-- Profile Image -->
          <div class="box box-primary">
            <div class="box-body box-profile">
              <img class="profile-user-img img-responsive img-circle" src="{{$user->getImage()}}" alt="">

              <h3 class="profile-username text-center">{{$user->name}}</h3>

              <p class="text-muted text-center">{{$user->getUserGroup()}}</p>

              <a href="#" class="btn btn-danger btn-block"><b>Забанить</b></a>
              <a href="#" class="btn btn-primary btn-block"><b>Разбанить</b></a>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->

          <!-- About Me Box -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Информация</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">

              <strong><i class="fa fa-file-text-o margin-r-5"></i> Описание</strong>

              <p>{{$user->description}}</p>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
        <div class="col-md-9">
          <div class="nav-tabs-custom">
            <ul class="nav nav-tabs">
              <li class="active"><a href="#settings" data-toggle="tab" aria-expanded="true">Настройки</a></li>
            </ul>
            <div class="tab-content">
              <div class="tab-pane active" id="settings">
                  
                  <div class="form-group">
                    <label for="inputName" class="col-sm-2 control-label">Имя</label>

                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="inputName" name="name" value="{{$user->name}}" placeholder="Имя">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputEmail" class="col-sm-2 control-label">Email</label>

                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="inputEmail" name="email" value="{{$user->email}}" placeholder="Email">
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
                      <input type="text" class="form-control" id="inputExperience" name="description" value="{{$user->description}}" placeholder="Описание">
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
                      <button class="btn btn-success">Изменить</button> <a href="{{route('users.index')}}" class="btn btn-primary">Назад</a>
                    </div>

                  </div>
               
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
       {{ Form::close() }}
    </section>
    <!-- /.content -->
  </div>

@endsection