<div>
    <div class="container mt-3">
        @if ($success != '' || (is_array($success) && count($success) > 0))
            @if (is_array($success))
                @foreach ($success as $line)
                    <div class="alert alert-success alert-dismissible" role="alert">
                        {{ $line }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                @endforeach
            @else
                <div class="alert alert-success alert-dismissible" role="alert">
                    {{ $success }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif
        @endif

        @if ($error != '' || (is_array($error) && count($error) > 0))
            @if (is_array($error))
                @foreach ($error as $line)
                    <div class="alert alert-danger alert-dismissible" role="alert">
                        {{ $line }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                @endforeach
            @else
                <div class="alert alert-danger alert-dismissible" role="alert">
                    {{ $error }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif
        @endif
    </div>
</div>
