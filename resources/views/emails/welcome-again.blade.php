@component('mail::message')
# Introduction

Thanks so much for registring!

The body of your message.

- one
- two
- three

@component('mail::button', ['url' => 'https://laravel.com'])
Start Browsing
@endcomponent

@component('mail::panel', ['url' => ''])
Some inspirationnal quote to go here.
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
