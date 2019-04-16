@extends('layouts.main')

@section('content')
    <section class="content-header">
        <h1>ลงทะเบียน<small>ลงทะเบียนข้อมูลผู้ป่วยใหม่</small></h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> ผู้ป่วย</a></li>
            <li class="active">ลงทะเบียนข้อมูลผู้ป่วยใหม่</li>
        </ol>
    </section>
      
    <!-- Main content -->
    <section class="content container-fluid">
        <form method="POST" action="{{ route('patient.createsave') }}">
        @csrf
        <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">ลงทะเบียน</h3>
            </div>
            <div class="box-body">
                <div class="row">
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="selectprefix" class="col-sm-4 control-label">คำนำหน้า</label>
                            <select id ="selectprefix" name="prefix" class="form-control select2" style="width: 100%;">
                                <option selected="selected">นาย</option>
                                <option>นาง</option>
                                <option>นางสาว</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="inputEmail3" class="col-sm-4 control-label">ชื่อ</label>
                            <input type="text" name="name" class="form-control" id="inputEmail3" >
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="inputEmail3" class="col-sm-4 control-label">สกุล</label>
                            <input type="text" name ="lastname" class="form-control" id="inputEmail3" >
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="inputEmail3" class="col-sm-4 control-label">Email</label>
                            <input type="text" class="form-control" id="inputEmail3" >
                            </div>
                        </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="inputEmail3" class="col-sm-4 control-label">สกุล</label>
                            <input type="text" class="form-control" id="inputEmail3" >
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="inputEmail3" class="col-sm-4 control-label">Email</label>
                            <input type="text" class="form-control" id="inputEmail3" >
                        </div>
                    </div>
                </div>
            </div>
            <div class="box-footer">
                <button type="submit" class="btn btn-info pull-right">ลงทะเบียน</button>
              </div>
        </div>
        </form>

    </section>
@endsection
 
     
     
     
 