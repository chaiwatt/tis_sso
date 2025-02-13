@extends('layouts.master')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="white-box">
                    <h3 class="box-title pull-left">เพิ่ม มอบสิทธิ์เข้าใช้งานระบบ</h3>
                        <a class="btn btn-success pull-right" href="{{url('/agents')}}">
                            <i class="icon-arrow-left-circle"></i>กลับ</a>
                    <div class="clearfix"></div>
                    <hr>
                    @if ($errors->any())
                        <ul class="alert alert-danger">
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    @endif

                    {!! Form::open(['url' => '/agents', 'class' => 'form-horizontal', 'files' => true, 'id' => 'from_box']) !!}

                    @include ('agents.agent.form')

                    {!! Form::close() !!}

                </div>
            </div>
        </div>
    </div>
@endsection
