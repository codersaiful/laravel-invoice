
@isset($invoice)
@include('layouts.invoice-components.header')

@include('layouts.invoice-components.items')
@include('layouts.invoice-components.footer')
@endisset

@isset($invoices)
@include('layouts.invoice-components.invoice-list')
@endisset


@isset($create)
@include('layouts.invoice-components.create')
@endisset
