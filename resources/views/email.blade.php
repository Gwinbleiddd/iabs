@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading">Мы с вами свяжемся</div>

                    <div class="panel-body">
                        <form action="{{url('/')}}" method="post">
                            {{ csrf_field() }}
                            <div class="form-group">
                                <label for="exampleInputEmail1">Email address</label>
                                <input type="email" class="form-control" placeholder="Введите email" name="email">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Текст</label>
                                <textarea class="form-control" placeholder="Текст сообщения" rows="3" name="text"></textarea>
                            </div>
                            <button type="submit" class="btn btn-primary">Отправить</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
