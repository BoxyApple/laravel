@extends('admin.layout')

@section('content')

<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Управление категориями
        <small>на сайте</small>
      </h1>

    </section>

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="box">
            <div class="box-header">
              <h3 class="box-title">Страница просмотра категорий</h3>
            </div>
            <!-- /.box-header -->

            <div class="box-body">
              <div class="form-group">
                <a href="{{route('categories.create')}}" class="btn btn-success">Добавить категорию</a>
              </div>

            </div>

      </div>

      <div class="box">
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
                @foreach($categories as $category)

                <tr>
                  <td>{{$category->id}}</td>
                  <td>{{$category->title}}</td>
                  <td><a href="{{route('categories.edit', $category->id)}}" title="Редактировать" class="fa fa-pencil"></a> 
                    <a href="{{route('category.show', $category->slug)}}" title="Просмотреть на сайте" class="fa fa-eye" target="_blank"></a>
                  	{{Form::open(['route' => ['categories.destroy', $category->id], 'method' => 'delete'])}}
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