{{-- @dd($attributes) --}}
@props([
    'contact',
    'showPhone' => true,
])
{{-- @dd($showPhone) --}}

<div>
    {{-- @dd($contact) --}}
    {{-- @dump($contact) --}}
    <h2>{{ $contact['name'] }}</h2>
    <p>{{ $contact['email'] }}</p>
    <p>{{ $contact['phone'] }}</p>
</div>
