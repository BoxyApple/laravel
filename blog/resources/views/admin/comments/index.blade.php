@extends('admin.layout')

@section('content')


<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Список комментариев
        <small>на сайте</small>
      </h1>
    </section>

    <!-- Main content -->
    <section class="content">

      <div class="box">
            <div class="box-header">
              <h3 class="box-title">Страница списка комментариев на сайт</h3>
              @include('admin.errors')
            </div>
            <!-- /.box-header -->

            <div class="box-body">
              <i class="fa fa-lock"></i> - Убрать с сайта комментарий.
              <i class="fa fa-thumbs-o-up"></i> - Одобрить комментарий на сайте.


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
                  <th>Текст</th>
                  <th>Действия</th>
                </tr>
                </thead>
                <tbody>

                @foreach($comments as $comment)
                <tr>
                  <td>{{$comment->id}}</td>
                  <td>{{$comment->text}}
                  </td>
                  <td>
                  	@if($comment->status == 1)
                  		<a href="/admin/comments/toggle/{{$comment->id}}" title="Убрать с сайта" class="fa fa-lock"></a> 
                  	@else 
                  		<a href="/admin/comments/toggle/{{$comment->id}}" title="Опубликовать на сайте" class="fa fa-thumbs-o-up"></a> 
                  	@endif

                  	{{Form::open(['route' => ['comments.destroy', $comment->id], 'method' => 'delete'])}}
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