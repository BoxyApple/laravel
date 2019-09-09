@extends('admin.layout')

@section('content')

<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Управление новостями 
        <small>на сайте</small>
      </h1>

    </section>

    <!-- Main content -->
    <section class="content">
    	
      <!-- Default box -->
      <div class="box">
            <div class="box-header">
              <h3 class="box-title">Страница просмотра новостей</h3>
              @include('admin.errors')
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <div class="form-group">
                <a href="{{route('posts.create')}}" class="btn btn-success">Добавить новость</a>
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
                  <th>Категория</th>
                  <th>Теги</th>
                  <th>Действия</th>
                </tr>
                </thead>
                <tbody>
                @foreach($posts as $post)
                <tr>
                  <td>{{$post->id}}</td>
                  <td>{{$post->title}}</td>
                  <td>{{$post->getCategoryTitle()}}</td>
                  <td>{{$post->getTagsTitles()}}</td>
                  <td><a href="{{route('posts.edit', $post->id)}}" title="Редактировать" class="fa fa-pencil"></a> 
                    <a href="{{route('post.show', $post->slug)}}" class="fa fa-eye" title="Просмотреть на сайте" target="_blank"></a>
                    {{Form::open(['route' => ['posts.destroy', $post->id], 'method' => 'delete'])}}
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