@foreach($atten as $attn)
    {{$attn->entry}}
    {{$attn->employee->name}}
@endforeach