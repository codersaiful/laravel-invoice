@include('layouts.invoice-components.head-tag')
    <!--

    Invoice has taken from: https://github.com/sparksuite/simple-html-invoice-template
    It's was a Github repo

    We will be use another codepan invoice for editing mode
    https://codepen.io/tjoen/pen/vCHfu
     -->
		<br />

		<br /><br />
        <div class="invoice-box">
			<table>
				<tr class="top">
					<td colspan="2">
						<table>
							<tr>
								<td class="title">
									<img src="{{ asset('images/logo.jpg') }}" alt="Company logo" style="width: 80px;" />
								</td>

								<td>
									<h2 class="invoice-number">Invoice #: {{$invoice->id}}</h2>
									Created: {{$invoice->date}}<br />
									Due: {{$invoice->due_date}}
								</td>
							</tr>
						</table>
					</td>
				</tr>

				<tr class="information">
					<td colspan="2">
						<table>
							<tr>
								<td>
								<h3 class="address-head">CodeAstrology</h3>
									Sparksuite, Inc.<br />
									12345 Sunny Road<br />
									Sunnyville, TX 12345
								</td>

								<td>

									<h3 class="address-head">Invoice To:</h3>
									
									<p>
										<b>{{$client->name}}</b><br/>
										{{$client->address}}
									</p>
								</td>
							</tr>
						</table>
					</td>
				</tr>