<tr class="heading">
	<td>
		@if(count($items)>1)
		Items
		@else
		Item
		@endif
	</td>

	<td>Price</td>
</tr>
@php 
$total = 0
@endphp
@foreach( $items as $item )
<tr class="item">
	<td>{{$item->title}}</td>

	<td>{{$item->amount}}</td>
</tr>
@php 
$total += $item->amount
@endphp

@endforeach

<tr class="total">
	<td></td>

	<td>Total: ${{$total}}</td>
</tr>
