@extends('layouts.main')

@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
            <h1>
              Page Header
              <small>Optional description</small>
            </h1>
            <ol class="breadcrumb">
              <li><a href="#"><i class="fa fa-dashboard"></i> Level</a></li>
              <li class="active">Here</li>
            </ol>
          </section>
      
          <!-- Main content -->
          <section class="content container-fluid">
  <div class="box">
        <div class="box-header">
          <h3 class="box-title">Condensed Full Width Table</h3>
        </div>
        <!-- /.box-header -->
        <div class="box-body no-padding">
                <table class="table table-condensed">
                        <tr>
                          <th style="width: 10px">ชื่อ</th>
                          <th>สกุล</th>
                        </tr>
                        @foreach ($patients as $item)
                        <tr>
                            <td> {{ $item->fname }} </td>
                            <td> {{ $item->lname }} </td>
                        </tr>
                        @endforeach
                    
                      </table>
        </div>
        <!-- /.box-body -->
      </div>
          </section>
@endsection



