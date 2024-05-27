@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/thanks.css') }}">
@endsection

@section('content')
<div class="thanks__content">
    <div class="thanks__heading">
        <h2>お問い合わせありがとうございました</h2>
    </div>
        <div class="form__button">
            <a class="form__button-submit"  href="{{ route('/') }}">HOME</a>
        </div>
</div>
@endsection