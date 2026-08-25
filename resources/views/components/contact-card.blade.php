@dump($attributes)
@props([
    'contact',
])

{{-- @dd($attributes)
@dd($attributes['class']) --}}

{{-- <div {{ $attributes }}> --}}
<div class="{{ $contact['name'] ? 'text-green-500' : 'text-red-500' }}">
    <div {{ $attributes->merge(['class' => 'contact-card']) }}>
        {{-- @dd($attributes) --}}
        {{-- @dd($contact) --}}
    </div>
</div>

{{-- <div {{ $attributes->merge(['class' => 'contact-card']) }}>
    <h2>{{ $contact['name'] }}</h2>
    <p>{{ $contact['email'] }}</p>
    <p>{{ $contact['phone'] }}</p>

    <div>
        {{ dump($actions) }}
        {{ $actions }}
    </div>
    {{ $slot }}
</div> --}}
