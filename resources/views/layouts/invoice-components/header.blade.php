<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />

		<title>@yield('title')</title>

		<!-- Favicon -->
		<link rel="icon" href="{{ asset('favicon.ico') }}" type="image/x-icon" />
        <link rel="stylesheet" href="{{ asset('css/invoice.css') }}" media="screen"/>
        <link rel="stylesheet" href="{{ asset('css/invoice-print.css') }}" media="print"/>

	</head>

	<body>
    <!--

    Invoice has taken from: https://github.com/sparksuite/simple-html-invoice-template
    It's was a Github repo

    We will be use another codepan invoice for editing mode
    https://codepen.io/tjoen/pen/vCHfu
     -->
		<br /><br /><br />
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
									<h2 class="invoice-number">Invoice #: 123</h2>
									Created: January 1, 2015<br />
									Due: February 1, 2015
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
									Acme Corp.<br />
									John Doe<br />
									john@example.com
								</td>
							</tr>
						</table>
					</td>
				</tr>