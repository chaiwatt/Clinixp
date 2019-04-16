@extends('layouts.main')

@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
            <h1>
              รายการยา
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
                          <th style="width: 10px">ชื่อยา</th>
                          <th>จำนวน</th>
                          <th>เพิ่มเติม</th>
                        </tr>
                        @foreach ($drugs as $item)
                        <tr>
                            <td> {{ $item->name }} </td>
                            <td> {{ $item->qty }} </td>
                            <td>
                              <a href="{{ url('drug/edit/'.$item->id) }}" class="btn btn-warning"> แก้ไข</a>
                              <a href="{{ url('drug/delete/'.$item->id) }}" class="btn btn-danger"> ลบ</a></td>
                        </tr>
                        @endforeach
                    
                      </table>
        </div>
        <!-- /.box-body -->
      </div>
          </section>
@endsection



