<x-mail::message>

¡Espero que lo estés haciendo bien! Solo quería enviar una nota rápida para decirte que estoy encantado de recomendarte para el puesto "{{ $data['title'] }}" en {{ $data['cname'] }}. Sus "{{ $data['position'] }}" son impresionantes y encajarían perfectamente.

Siéntase libre de usar mi nombre si es necesario. ¡Apoyándote!

Best,
{{ $data['your_name'] }}
{{ $data['your_email'] }}


<x-mail::button :url="$data['jobUrl']">
Job link
</x-mail::button>

Thanks,<br>
{{ config('app.name') }}
</x-mail::message>
