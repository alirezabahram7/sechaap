@if(session('error'))
    <ul class="alert alert-danger my-alert" style="list-style-type: none">
        @foreach(session('error') as $key=>$errors)
            <li>
            @if(is_array($errors))
                @if(count($errors) > 0)
                    @foreach ($errors as $error)
                        {{ $error }}
                    @endforeach
                @endif
            @else
                {{ $errors }}
            @endif
            </li>
        @endforeach
    </ul>
@endif

@if(session('success'))
    <div class="alert alert-success my-alert">
        {{ session('success') }}
    </div>
@endif