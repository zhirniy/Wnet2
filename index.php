<!DOCTYPE html>
<html>
<head>
	<title>Wnet</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/css/bootstrap.min.css" integrity="sha384-Smlep5jCw/wG7hdkwQ/Z5nLIefveQRIY9nfy6xoR1uRYBtpZgI6339F5dgvm/e9B" crossorigin="anonymous">
	<meta name="viewport" content="width=device-width,initial-scale=1.0">
	<style type="text/css">
		body{
			background-color: #F7F8F9;
		}
		img {
			width: 60px;
			text-align: center;
			margin: 10px;
			padding-top: 25px;
		}
		div .paymant:first-child .header{
			background: linear-gradient(to right, #01742a, #85cf72);
		}
		table{
			width: 100%;
		}

		td{
			border-bottom: solid 1px silver;
		}
		th{
			background-color: #F6F9FB;
			font-weight: 500;
			font-size: 0.9em;
		}
		h4{
			text-align: center;
			font-size: 18px;
		}
		a{
			font-weight: 700;
			color:#2ab3aa;
		}
		span, p{
				font-size: 1em;
				color: #625f6a;
				
			}
		p{
				padding-left: 15px;
				padding-right: 15px;
			}

		td, th{
				padding-top: 20px;
				padding-bottom: 20px;
				padding-left: 20px;
				padding-right: 5px; 
		}
		.green{
			color:green;
			font-weight: 700;
		}
		.red{
			color:red;
			font-weight: 700;
		}
		.paymant{
			display: inline;
			flex-direction: column;
			justify-content: center;
            position: relative;
			height: auto;
			text-align: center;
			background-color: white;
			margin: 5% 1% 3% 1%;
			box-shadow: 0 0 10px 10px whitesmoke;
		}

		.pay{
			background-color: #2ab3aa;
			width: 150px;
			border-radius: 30px;
			display:table-cell;
			vertical-align:bottom;
			bottom: 20px;
			color: white;
		}
		.green{
			color:green;
			font-weight: 700;
		}
		.red{
			color:red;
			font-weight: 700;
		}
		.footer{
			position: absolute;
			bottom: 0px;
			width: 100%;
		}
		.content{
			padding-bottom: 50px;
		}
		.header{
			height: 10px;
			background: linear-gradient(to right, #0067c6, #35c3ee);
			background-color: #01742a;
			padding: 0;
			margin: 0;
			width: 100%;
		}
		#contain{
			display: flex;
			justify-content:center;
			flex-wrap: wrap;

		}

		#list p{
			text-align: center;
			padding-top: 30px;
		}
	
		#list h4 {
			padding-bottom: 3%;
		}
		#price{
			font-size: 40px;
			font-weight: 700;
			padding-right: 0px;
			padding-left: 0px;
		}
		#dollar{
			font-size: 26px;
			font-weight: 700;
			padding-right: 0px;
			padding-left: 0px;
		}
		#p_price{
			line-height: 15px;
		}
		#pay_second{
			color:#2ab3aa;
			background-color: white;
			border: 3px solid #2ab3aa;
		}
		
		@media screen and (min-width: 1025px) {
			.paymant{
				width: 25%;
			}
			#contain_list{
				text-align: left;
				padding-left: 15%;
				padding-right: 15%;
				margin-bottom: 5%;
			}
			#list{
				padding: 3%;
			}
			#list{
				background-color: white;
				padding: 3% 10% 3% 10%;
				box-shadow: 0 0 10px 10px whitesmoke;
			}
		}


		@media screen and (max-width: 1024px) {
			.paymant{
				width: 34%;
			}
			#contain_list{
				text-align: left;
				padding-left: 15%;
				padding-right: 15%;
				margin-bottom: 5%;
			}
			#list{
				padding: 3%;
			}
			#list{
				background-color: white;
				padding: 3% 10% 3% 10%;
				box-shadow: 0 0 10px 10px whitesmoke;
			}
		}

		@media screen and (max-width: 768px) {
			p, span{
				font-size: 12px;
			}
			p a {
				font-size: 16px;
			}
			td, th{
				padding-top: 10px;
				padding-bottom: 10px;
				padding-left: 5px;
				padding-right: 5px; 
			}
			.paymant{
				width: 60%;
			}
			.pay{
				width: 90%;
			}
			#contain{
				margin-top:10%;
			}
			#contain_list{
				text-align: left;
				padding-left: 20%;
				padding-right: 20%;
				margin-bottom: 25%;
			}

			#list{
				background-color: white;
				padding: 5% 10% 3% 10%;
				box-shadow: 0 0 10px 10px whitesmoke;
			} 

		}

		@media screen and (max-width: 600px) {
			.paymant{
				width: 80%;
			}
			.pay{
				width: 90%;
			}
			#contain_list{
				padding-left: 10%;
				padding-right: 10%;
			}

		}

		@media screen and (max-width: 375px) {
			.paymant{
				width: 90%;
			}
			.pay{
				width: 90%;
			}
			#contain_list{
				padding-left: 5%;
				padding-right: 5%;
			}

		}


	</style>
</head>
<body>
<div id="contain">
<div class="paymant">
	<div class="header"></div>
	<div class=content>
	<p><img src="icon_amount_green.svg"></p>
	<h4>AMOUNT DUE</h4>
	<p>Billing period 01/02/2018-01/31/2018</p>
	<p id="p_price"><span id="dollar">$</span><span id="price">50</span></p>
	<p>Due date 02/28/2018</p>
	<p><a href="#">VIEW MY BILL></a></p>
	</div>
	<div class="footer">
	<p><button type="button" class="btn pay">PAY</button></p>
	</div>
</div>
<div class="paymant">
	<div class="header"></div>
	<div class=content>
	<p><img src="icon_auto_pay.svg"></p>
	<h4>AUTO-PAY</h4>
	<p>You already have auto payment via stripe Pay/Pal on sum <b>57$</b> and is paid automatically on 17-th day in month.Next payment will be done on <b>17/12/2017</b></p>
	</div>
	<div class="footer">
	<p><button id="pay_second" type="button" class="btn pay">MANAGE</button></p>
	</div>
	</div>
</div>
<div id="contain_list">
<div id="list">
<h4>LAST ACCOUNT ACTIVITIES</h4>
<table>
	<tr>
		<th><span>Date</span></th>
		<th><span>Activity</span></th>
		<th><span>Sum</span></th>
		<th><span>Balance</span></th>
	</tr>
	<tr>
		<td><span>12/11/17</span> <br><span>05:34pm</span></td>
		<td><span>Internet fee</span></td>
		<td><span class="red">-$1.00</span></td>
		<td><span class="green">$19.00</span></td>
	</tr>
	<tr>
		<td><span>12/11/17</span> <br><span>05:27pm</span></td>
		<td><span>Payment via PayPal</span></td>
		<td><span class="green">$10.00</span></td>
		<td><span class="green">$18.00</span></td>
	</tr>
	<tr>
		<td><span>12/11/17</span> <br><span>12:52pm</span></td>
		<td><span>Internet fee</span></td>
		<td><span class="red">-$50.00</span></td>
		<td><span class="red">-$8.00</span></td>
	</tr>
	<tr>
		<td><span>12/11/17</span> <br><span>12:52pm</span></td>
		<td><span>Payment via PayPal</span></td>
		<td><span class="green">$10.00</span></td>
		<td><span class="green">$18.00</span></td>
	</tr>
	<tr>
		<td><span>12/11/17</span> <br><span>12:52pm</span></td>
		<td><span>Payment via PayPal</span></td>
		<td><span class="green">$1.00</span></td>
		<td><span class="green">$8.00</span></td>
	</tr>
</table>
<p><a href="#">ALL TRANSACTIONS></a></p>
</div>
</div>
</body>
</html>