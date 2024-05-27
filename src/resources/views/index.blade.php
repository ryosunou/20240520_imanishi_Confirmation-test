<!-- お問い合わせフォーム入力ページ -->
@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/index.css') }}" />

@endsection

@section('content')
<div class="contact-form__content">
    <div class="contact-form__heading">
        <h2>Contact</h2>
    </div>
    <form action="/confirm" class="form" method="post">
        @csrf
        <div class="form__group">
            <div class="form__group-title">
                <span class="form__lavel--item">お名前</span>
                <span class="form__lavel--required">※</span>
            </div>
            <div class="form__group-content">
                <div class="form__input--text">
                    <input type="text" name="first_name" placeholder="例: 山田" value="{{ old('first_name') }}">
                    <input type="text" name="last_name" placeholder="例: 太郎" value="{{ old('last_name') }}">
                </div>
                <div class="form__error">
                    @error('first_name. last_name')
                    {{ $message }}
                    @enderror
                </div>
            </div>
        </div>
        <div class="form__group">
            <div class="form__group-title">
                <span class="form__lavel--item">性別</span>
                <span class="form__lavel--required">※</span>
            </div>
            <div class="form__group-content">
                <div class="form__group--radio">
                    <input type="radio" id="male" name="gender" value="male" checked>
                    <lavel for="male">男性</lavel>
                    <input type="radio" id="female" name="gender" value="female">
                    <label for="female">女性</label>
                    <input type="radio" id="other" name="gender" value="other">
                    <label for="other">その他</label>
                </div>
                <div class="form__error">
                    @error('gender')
                    {{ $message }}
                    @enderror
                </div>
            </div>
        </div>
        <div class="form__group">
            <div class="form__group-title">
                <span class="form__label--item">メールアドレス</span>
                <span class="form__label--required">※</span>
            </div>
            <div class="form__group-content">
                <div class="form__input--text">
                    <input type="email" name="email" placeholder="例:test@example.com" value="{{ old('email') }}" />
                </div>
                <div class="form__error">
                    @error('email')
                    {{ $message }}
                    @enderror
                </div>
            </div>
        </div>
        <div class="form__group">
            <div class="form__group-title">
                <span class="form__label--item">電話番号</span>
                <span class="form__label--required">※</span>
            </div>
            <div class="form__group-content">
                <div class="form__input--text">
                    <input type="tel" name="tell" placeholder="080" value="{{ old('tell') }}" />
                    <input type="tel" name="tell" placeholder="1234" value="{{ old('tell') }}" />
                    <input type="tel" name="tell" placeholder="5678" value="{{ old('tell') }}" />
                </div>
                <div class="form__error">
                    @error('tell')
                    {{ $message }}
                    @enderror
                </div>
            </div>
        </div>
        <div class="form__group">
            <div class="form__group-title">
                <span class="form__label--item">住所</span>
                <span class="form__label--required">※</span>
            </div>
            <div class="form__group-content">
                <div class="form__input--text">
                    <input type="text" name="address" placeholder="例:東京都渋谷区千駄ヶ谷1-2-3" value="{{ ('address') }}" />
                </div>
                <div class="form__error">
                    @error('address')
                    {{ $message }}
                    @enderror
                </div>
            </div>
        </div>
        <div class="form__group">
            <div class="form__group-title">
                <span class="form__label--item">建物名</span>
            </div>
            <div class="form__group-content">
                <div class="form__input--text">
                    <input type="text" name="building" placeholder="例:千駄ヶ谷マンション101" value="{{ old('building') }}" />
                </div>
                <div class="form__error">
                    @error('building')
                    {{ $message }}
                    @enderror
                </div>
            </div>
        </div>
        <div class="form__group">
            <div class="form__group-title">
                <span class="form__label--item">お問い合わせの種類</span>
                <span class="form__label--item">※</span>
            </div>
            <div class="form__group-content">
                <div class="form__input--select">
                    <select name="select">
                        <option value="" name="inquiry_type" selected value="{{ old('inquiry_type') }}">選択してください</option>
                    </select>
                </div>
                <div class="form__error">
                    @error('inquiry_type')
                    {{ $message }}
                    @enderror
                </div>
            </div>
        </div>
        <div class=" form__group">
            <div class="form__group-title">
                <span class="form__label--item">お問い合わせ内容</span>
                <span class="form__label--item">※</span>
            </div>
            <div class="form__group-content">
                <div class="form__input--textarea">
                    <textarea name="detail" placeholder="お問い合わせ内容をご記載ください" value="{{ old('detail') }}"></textarea>
                </div>
                <div class="form__error">
                    @error('detail')
                    {{ $message }}
                    @enderror
                </div>
            </div>
        </div>
        <div class="form__button">
            <button class="form__button-submit" type="submit">確認画面</button>
        </div>
    </form>
</div>
@endsection