@component('mail::message')
# Report

Entries for {{date('M d Y')}}

@component('mail::button', ['url' => ''])
Button Text
@endcomponent
Thanks,<br>
{{ config('app.name') }}
@endcomponent
