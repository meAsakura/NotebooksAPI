<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Notebooks</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
<link href="{{ asset('styles.css') }}" rel="stylesheet">  
</head>
<body>
        <div class="container">
        <h1>Notebook's control</h1>
        <div>
            @if($errors->any())
                <h4>{{$errors->first()}}</h4>
            @endif
        <div>
            <form method="POST" action="{{ route('notebook') }}">
                @csrf
                <div class="m-2">
                    <label for="number" class="">{{ __('Notebook ID to show') }}</label>
                    <input id="number" type="search" class="form-control" @error('number') is-invalid @enderror name="number" required autocomplete="current-number">

                    @error('number')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                            <button type="submit" class="btn btn-primary">
                                {{ __('Get notebook') }}
                            </button>

                </div>
            </div>
        </form>
        <form method="DELETE" action="{{ route('delete_by_id') }}">
            @csrf
            <div class="m-2">
                <label for="number" class="">{{ __('Notebook ID to delete') }}</label>
                <input id="number" type="search" class="form-control"  @error('number') is-invalid @enderror name="number" required autocomplete="current-number">

                @error('number')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
                        <button type="submit" class="btn btn-primary">
                            {{ __('Delete') }}
                        </button>

            </div>
    </form>
    <form method="GET" action="{{ route('notebooks') }}">
        @csrf
        <div>
                <button type="submit" class="btn btn-primary">
                    {{ __('Show notebooks') }}
                </button>
        </div>
    </form>
</body>
</html>
