@props(['messages'])
@if ($messages->any())
<div class="alert alert-danger" role="alert">
        <ul>
            @foreach ($messages->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
