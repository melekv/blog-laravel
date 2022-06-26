@extends('index')

@section('title', 'Strona główna')

@section('style')
    <link rel="stylesheet" href="{{ asset('css/main.css') }}">
@endsection

@section('content')
    <div class="index">
        <div class="vertical-line">
            <form action="/register" method="POST">
                @csrf
                <div class="grid">
                    <div><label for="name">Imię:</label></div>
                    <div>
                        <input id="name" type="text" name="name" value="{{ old('name') }}">
                        @error('name')
                            <div class="form-text">{{ $message }}</div>
                        @enderror
                    </div>

                    <div><label for="surname">Nazwisko:</label></div>
                    <div>
                        <input id="surname" type="text" name="surname" value="{{ old('surname') }}">
                        @error('surname')
                            <div class="form-text">{{ $message }}</div>
                        @enderror
                    </div>

                    <div><label for="email">Email:</label></div>
                    <div>
                        <input id="email" type="email" name="email" value="{{ old('email') }}">
                        @error('email')
                            <div class="form-text">{{ $message }}</div>
                        @enderror
                    </div>

                    <div><label for="password_register">Hasło:</label></div>
                    <div>
                        <input id="password_register" type="password" name="password_register">
                        @error('password_register')
                            <div class="form-text">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="btn-center"><input type="submit" class="btn btn-primary" value="Rejestracja"></div>
            </form>
        </div>
        <div>
            <form action="/login" method="POST">
                @csrf
                <div class="grid">
                    <div><label for="email">Email:</label></div>
                    <div>
                        <input id="email" type="email" name="email">
                        @error('email')
                            <div class="form-text">{{ $message }}</div>
                        @enderror
                    </div>

                    <div><label for="password">Hasło:</label></div>
                    <div>
                        <input id="password" type="password" name="password">
                        @error('password')
                            <div class="form-text">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="btn-center"><input type="submit" class="btn btn-primary" value="Zaloguj"></div>
            </form>
        </div>
    </div>
@endsection