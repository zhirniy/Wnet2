<!DOCTYPE html>
<html>
<head>
	<title>Wnet</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/css/bootstrap.min.css" integrity="sha384-Smlep5jCw/wG7hdkwQ/Z5nLIefveQRIY9nfy6xoR1uRYBtpZgI6339F5dgvm/e9B" crossorigin="anonymous">
	<meta name="viewport" content="width=device-width,initial-scale=1.0">
	<link href='style.css' rel='stylesheet' type='text/css'>
</head>
<body>
	<div id="contain">
		<div class="paymant">
			<div class="header"></div>
			<div class=content>
				<p>
					<img src="icon_amount_green.svg">
				</p>
				<h4>AMOUNT DUE</h4>
				<p>Billing period 01/02/2018-01/31/2018</p>
				<p id="p_price">
					<span id="dollar">$</span>
					<span id="price">50</span>
				</p>
				<p>Due date 02/28/2018</p>
				<p>
					<a href="#">VIEW MY BILL></a>
				</p>
			</div>
			<div class="footer">
				<p>
					<button type="button" class="btn pay">PAY</button>
					</p>
			</div>
		</div>
		<div class="paymant">
			<div class="header"></div>
			<div class=content>
				<p>
					<img src="icon_auto_pay.svg">
				</p>
				<h4>AUTO-PAY</h4>
				<p>You already have auto payment via stripe Pay/Pal on sum <b>57$</b> and is paid automatically on 17-th day in month.Next payment will be done on <b>17/12/2017</b></p>
			</div>
			<div class="footer">
				<p>
					<button id="pay_second" type="button" class="btn pay">MANAGE</button>
				</p>
			</div>
		</div>
	</div>
	<div id="contain_list">
		<div id="list">
			<h4>LAST ACCOUNT ACTIVITIES</h4>
			<table>
				<tr>
					<th>
						<span>Date</span>
					</th>
					<th>
						<span>Activity</span>
					</th>
					<th>
						<span>Sum</span>
					</th>
					<th>
						<span>Balance</span>
					</th>
				</tr>
				<tr>
					<td>
						<span>12/11/17</span> <br><span>05:34pm</span>
					</td>
					<td>
						<span>Internet fee</span>
					</td>
					<td>
						<span class="red">-$1.00</span>
					</td>
					<td>
						<span class="green">$19.00</span>
					</td>
				</tr>
				<tr>
					<td>
						<span>12/11/17</span> <br><span>05:27pm</span>
					</td>
					<td>
						<span>Payment via PayPal</span>
					</td>
					<td>
						<span class="green">$10.00</span>
					</td>
					<td>
						<span class="green">$18.00</span>
					</td>
				</tr>
				<tr>
					<td>
						<span>12/11/17</span> <br><span>12:52pm</span>
					</td>
					<td>
						<span>Internet fee</span>
					</td>
					<td>
						<span class="red">-$50.00</span>
					</td>
					<td>
						<span class="red">-$8.00</span>
					</td>
				</tr>
				<tr>
					<td>
						<span>12/11/17</span> <br><span>12:52pm</span>
					</td>
					<td>
						<span>Payment via PayPal</span>
					</td>
					<td>
						<span class="green">$10.00</span>
					</td>
					<td>
						<span class="green">$18.00</span>
					</td>
				</tr>
				<tr>
					<td>
						<span>12/11/17</span> <br><span>12:52pm</span>
					</td>
					<td>
						<span>Payment via PayPal</span>
					</td>
					<td>
						<span class="green">$1.00</span>
					</td>
					<td>
						<span class="green">$8.00</span>
					</td>
				</tr>
			</table>
			<p>
				<a href="#">ALL TRANSACTIONS></a>
			</p>
		</div>
	</div>
</body>
</html>