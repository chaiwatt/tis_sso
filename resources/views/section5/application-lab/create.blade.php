@extends('layouts.master')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="white-box">
                    <h3 class="box-title pull-left">ยื่นคำขอเป็นผู้ตรวจสอบ (LAB)</h3>
                        <a class="btn btn-success pull-right" href="{{url('/request-section-5/application-lab')}}">
                            <i class="icon-arrow-left-circle"></i> กลับ</a>
                    <div class="clearfix"></div>
                    <hr>
                    @if ($errors->any())
                        <ul class="alert alert-danger">
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    @endif

                    {!! Form::open(['url' => '/request-section-5/application-lab', 'class' => 'form-horizontal', 'files' => true, 'id' => 'from_box']) !!}

                    @include ('section5.application-lab.form')

                    {!! Form::close() !!}

                </div>
            </div>
        </div>
    </div>
@endsection
