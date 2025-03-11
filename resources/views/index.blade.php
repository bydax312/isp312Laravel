@extends("layouts.main")

@section('title', 'Регистрация')

@section('body')

    <x-box>

      <x-slot:title>
        @yield('title')
      </x-slot>

        <form action="" method="post">
            <div class="mb-3">
                <label for="fio" class="form-label">Ваше ФИО </label>
                <input type="text" name="fio" id="fio" placeholder="Фамилия Имя Отчество" class="form-control">
                <div class="invalid-feedback"></div>
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Ваше Email </label>
                <input type="email" name="email" id="email" placeholder="mail.@mail.ru" class="form-control">
                <div class="invalid-feedback"></div>
            </div>
            <div class="mb-3">
                <label for="birthday" class="form-label">Дата рождения </label>
                <input type="date" name="birthday" id="birthday" value="{{ now()->format('Y-m-d') }}"
                       class="form-control">
                <div class="invalid-feedback"></div>
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Пароль </label>
                <input type="password" name="password" id="password" class="form-control">
                <div class="invalid-feedback"></div>
            </div>
            <div class="mb-3">
                <label for="password_confirmation" class="form-label">Повторите пароль </label>
                <input type="password" name="password_confirmation" id="password_confirmation" class="form-control">
                <div class="invalid-feedback"></div>
            </div>
            <button type="submit" class="btn btn-primary">Зарегистрироваться</button>
        </form>
    </x-box>

    <h1 class="mb-4 fs-2">@yield('title')</h1>
    <div class="bg-white rounded-2 shadow-sm p-4">


    </div>

@endsection
