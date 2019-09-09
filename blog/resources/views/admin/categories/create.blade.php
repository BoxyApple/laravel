@extends('admin.layout')

@section('content')

<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Добавление категории
        <small>на сайте</small>
      </h1>
    </section>

    <!-- Main content -->
    <section class="content">

      <div class="box">
            <div class="box-header">
              <h3 class="box-title">Страница добавления категории на сайт</h3>
              @include('admin.errors')
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <div class="form-group">
                <a href="{{route('categories.index')}}" class="btn btn-default">Назад к списку</a>
              </div>

            </div>
      </div>
      <!-- Default box -->
      <div class="box">

      	{!! Form::open(['route' => 'categories.store']) !!}

        <div class="box-body">
          <div class="col-md-12">
            <div class="form-group">
              <label for="exampleInputEmail1">Название</label>
              <input type="text" class="form-control" id="exampleInputEmail1" placeholder="" name="title">
            </div>
        </div>
      </div>
        <!-- /.box-body -->
      </div>

      <div class="box">
        <div class="box-footer">
          <button class="btn btn-lg btn-block btn-success ">Добавить категорию</button>
        </div>
        <!-- /.box-footer-->
      </div>

        {!! Form::close() !!}

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  @endsection