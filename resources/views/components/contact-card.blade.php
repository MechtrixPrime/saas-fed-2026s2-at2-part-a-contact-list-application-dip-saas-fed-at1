@dump($attributes)
@props([
    'contact',
    // 'showPhone' => true,
    'showPhone',
])
{{-- @dd($showPhone) --}}
{{-- @dd($attributes)
@dd($attributes['class']) --}}

{{-- <div> --}}
{{-- <div {{ $attributes }}> --}}
<div {{ $attributes->merge(['class' => 'contact-card']) }}>
    {{-- @dd($attributes) --}}
    {{-- @dd($contact) --}}
    {{-- @dump($contact) --}}
    <h2>{{ $contact['name'] }}</h2>
    <p>{{ $contact['email'] }}</p>
    @if ($showPhone)
        <p>{{ $contact['phone'] }}</p>
    @endif
</div>
