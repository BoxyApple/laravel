@extends('admin.layout')

@section('content')


  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Список тегов
        <small>на сайте</small>
      </h1>
    </section>

    <!-- Main content -->
    <section class="content">

      <div class="box">
            <div class="box-header">
              <h3 class="box-title">Страница просмотра тегов на сайте</h3>
              @include('admin.errors')
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <div class="form-group">
                <a href="{{route('tags.create')}}" class="btn btn-success">Добавить новый тег</a>
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
                  <th>Название</th>
                  <th>Действия</th>
                </tr>
                </thead>
                <tbody>

                @foreach($tags as $tag)
                <tr>
                  <td>{{$tag->id}}</td>
                  <td>{{$tag->title}}</td>
                  <td><a href="{{route('tags.edit', $tag->id)}}" title="Редактировать" class="fa fa-pencil"></a> 

                  {{Form::open(['route' => ['tags.destroy', $tag->id], 'method' => 'delete'])}}
                  	<button onclick="return confirm('Вы уверены?')" type="submit" title="Удалить" class="delete"><i class="fa fa-remove"></i></button>
                  	{{Form::close()}}

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