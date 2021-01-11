@extends('layouts.settings')

@section('title', 'StackApp')

@section('headerTitle', '設定')

@section('content')
    <form action="" method="">
        <div class="form-group row">
            <label class="col-sm-2 col-form-label label" for="email">EMAIL</label>
            <div class="col-sm-10">
                <input class="form-control" type="email" name="email" id="email" placeholder="new EMAIL">
            </div>
        </div>
        <div class="col text-center">
            <button type="submit" class="btn btn-dark">登録</button>
        </div>
    </form>
@endsection

@include('layouts.head')
