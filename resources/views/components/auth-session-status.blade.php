@props(['status'])

@if ($status)
    <div class="alert alert-success show" role="alert">
        {{ $status }}
    </div>
@endif
