@extends('admin.layout')

@section('content')


<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Список Пользователей
        <small>на сайте</small>
      </h1>
   
    </section>

    <!-- Main content -->
    <section class="content">

       <div class="box">
            <div class="box-header">
              <h3 class="box-title">Страница просмотра пользователей на сайте</h3>
              @include('admin.errors')
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <div class="form-group">
                <a href="{{route('users.create')}}" class="btn btn-success">Добавить пользователя</a>
              </div>

            </div>
      </div>

      <!-- Default box -->
      <div class="box">
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>ID</th>
                  <th>Имя</th>
                  <th>E-mail</th>
                  <th>Действия</th>
                </tr>
                </thead>
                <tbody>
                
                @foreach($users as $user)
                <tr>
                  <td>{{$user->id}}</td>
                  <td>{{$user->name}}</td>
                  <td>{{$user->email}}</td>
                  <td><a href="{{route('users.edit', $user->id)}}" title="Редактировать" class="fa fa-pencil"></a> 

                  	{{Form::open(['route' => ['users.destroy', $user->id], 'method' => 'delete'])}}
                  	<button onclick="return confirm('Вы уверены?')" type="submit" title="Удалить" class="delete"><i class="fa fa-remove"></i></button>
                  	{{Form::close()}}

                  </td>
                </tr>
                @endforeach


                </tfoot>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
      <!-- /.box -->

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

@endsection