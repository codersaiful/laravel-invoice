
@include('layouts.invoice-components.head-tag')
<div class="invoice-box">
    <h2>Create Invoice</h2>
    <form action="{{route('invoice.store')}}" method="post" class="">
        @csrf  
        <input type='text' name='date' placeholder='Date'><br>
        <input type='text' name='due_date' placeholder='D_Date'><br>
        <input type='text' name='client[name]' placeholder='Client Name'><br>
        <input type='text' name='client[address]' placeholder='Client Address'><br>
        <p>
            <p>
            <input type='text' name='job_list[]' placeholder='Job List'><br>
            <input type='text' name='job_list[]' placeholder='Job List'><br>
            <input type='text' name='job_list[]' placeholder='Job List'><br>

            </p>
        </p>
        <button type="submit">Submit</button>
        
    </form>
</div>
@include('layouts.invoice-components.foot-tag')