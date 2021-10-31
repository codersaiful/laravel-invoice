@include('layouts.invoice-components.head-tag')
 <pre>@dd($invoices)</pre> 
<div class="invoice-box">
    <table>
        
            <tr class="heading">
                <td>
                    Title
                </td>

                <td>Link</td>
            </tr>
@foreach($invoices as $invoice)

            <tr class="item">
                <td>[{{$invoice->id}}] {{$invoice->name}}</td>

                <td><a href="{{route('invoice.show',$invoice->id)}}">Details</a></td>
            </tr>
@endforeach

            

            


        </tbody>
    </table>
</div>
@include('layouts.invoice-components.foot-tag')