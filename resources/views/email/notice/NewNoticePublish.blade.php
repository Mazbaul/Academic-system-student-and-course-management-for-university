@component('mail::message')
# Introduction

{!!$notice->notice!!}

@component('mail::button', ['url' => ''])
Button Text
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
