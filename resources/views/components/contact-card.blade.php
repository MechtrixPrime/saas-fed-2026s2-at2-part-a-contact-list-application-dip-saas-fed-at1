@dump($attributes)
@props([
    'contact',
    // 'showPhone' => true,
    'showPhone',
])
{{-- @dd($showPhone) --}}
@dd($attributes)

<div>
    {{-- @dd($contact) --}}
    {{-- @dump($contact) --}}
    <h2>{{ $contact['name'] }}</h2>
    <p>{{ $contact['email'] }}</p>
    @if ($showPhone)
        <p>{{ $contact['phone'] }}</p>
    @endif
</div>
