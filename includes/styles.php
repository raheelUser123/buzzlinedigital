<?php

if (isset($_SERVER['HTTPS'])) {
	$requesMet = "https";
} else {
	$requesMet = "http";
}

?>

<base href="<?= $requesMet . '://' . $_SERVER['HTTP_HOST'] . '/' ?>">

<link rel="canonical" href="<?= $requesMet . '://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'] ?>">
<!-- Required meta tags -->
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<!-- Bootstrap CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

<!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous"> -->
<!-- <link rel="stylesheet" type="text/css" href="css/style.css"> -->



<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Yantramanav:wght@500&display=swap" rel="stylesheet">

<style>
	section#tabs a.navbar-brand.logo img {
    width: 20% !important;
}
	.myCardPay .table {
    font-family: 'Roboto';
    text-transform: capitalize;
    font-size: 13px;
}
	section#tabs {
    background-image: url(img/hmebg.webp);
    background-repeat: no-repeat;
    background-size: cover;
	padding-top: 20px;
}
	.form-row {
    margin: 0 !important;
}
	.form-control {
    font-family: 'Roboto' !important;
    font-size: 13px !important;
    padding: 11px 10px;
    height: auto;
    border-radius: 10px;
    background: #93938d21 !important;
    border: 2px solid #565451;
    color: #000 !important;
}
	.card-header h1 {
    font-size: 30px;
    font-family: 'Roboto';
    text-transform: uppercase;
    font-weight: 100;
}
section#tabs h1.inner_title b {
    color: #ff9e1f;
    font-weight: bold;
}
section#tabs .card-header h2 {
    color: #fff;
    font-family: 'Roboto';
}
section#tabs h1.inner_title {
    font-size: 49px;
    text-transform: uppercase;
    font-family: 'Roboto';
    font-weight: 100;
    line-height: 59px;
}
section#tabs .card-header p {
    font-family: 'Roboto';
    font-size: 20px;
    line-height: 30px;
}
section#tabs .card-header img {
    width: 70%;
}
.card-header {
    color: #fff;
}
	.inner_bg{
    background-size: cover !important;
    padding: 256px 0;
    position: relative;
    background-position: center right !important;
}

.main_nav {
    width: 100%;
    top: 0;
    padding: 0px 0;
	background: #000;
	text-align: center;
}

	body{
		font-family: "Nunito";
	}
	.containerCheckBox span{
		font-size:14px;
	}
	a:hover{
		text-decoration: none;
	}
	.section1 {
	    background-image: url(../img/section1/checkout.webp);
	    background-size: cover;
	    background-repeat: no-repeat;
	    min-height: 350px;
	    padding-bottom: 108px;
	}
	.section2{
		background:none;
		color: black;
	}
	.paymentHeading{
		color: green;
		font-family: "Nunito";
		font-weight: 600;
	}
	.paymentTabs{
		margin-top: 40px;
	}
	.tab{
		padding: 20px 10px;
		border:3px solid #b0aeae;
		border-radius: 10px;
		margin:0 auto;
		text-align: center;
		transition: .4s ease-in-out;
	}
	.tab:hover{
		border: 3px solid green;
		transition: .4s ease-in-out;
	}
	.tab.active{
		border:3px solid green;
		
	}
	.tab.active::before{
		font-family: "FontAwesome";
		position: absolute;
		right: 0;
		top: -20px;
		content: "\f058";
		font-size: 40px;
		font-weight: 200;
		color: green;
		background:white;
		height: 40px;

	}
	.paymentDescription{
		font-size: 18px;
		font-weight: 800;
		font-family: "Nunito";
		color: #b0aeae;
		transition: .4s ease-in-out;
	}
	.tab.active .paymentDescription{
		color: green;
	}
	.tab:hover .paymentDescription{
		color: green;
		transition: .3s ease-in-out;
	}
	.myCardPay {
    background: #ffffffc7;
    width: 100% !important;
    border: 1px solid #ff9e1f;
    border-radius: 20px;
    box-shadow: 0px 0px 11px #fff;
}
	.card-heading {
    text-align: center;
    font-weight: 800;
    font-size: 19px;
    font-family: Roboto;
}
.submitPay:hover {
	background: #fff;
	color: #000 !important;
	border-color:  #ff9e1f;
}
.card.myCardPay label {
    font-family: 'Roboto' !important;
    font-size: 13px;
}
.submitPay {
    font-size: 15px;
    font-weight: 700;
    background: #ff9e1f;
    padding: 12px 35px;
    border-radius: 30px;
    border: 3px solid #ff9e1f;
    color: #fff !important;
    font-family: 'Roboto';
    transition: .9s;
}
	.authorizeForm *{
		font-family: "Nunito";
	}
	label{
		float:left !important;
	}
    @media (max-width: 800px) {
		section#tabs a.navbar-brand.logo img {
    width: 31% !important;
}
		nav.navbar.navbar-expand-lg.navbar-light {
    text-align: center;
}
		section#tabs .card-header h2 {
    font-size: 22px;
    line-height: 32px;
}
		.card-header {
    text-align: center;
}
		section#tabs h1.inner_title {
    font-size: 30px;
    line-height: 40px;
    text-align: center;
}
		section#tabs .row {
    width: 100%;
    display: block !important;
    margin: 0 !important;
}
section#tabs .col-6,section#tabs .col-md-6 {
    width: 100% !important;
    max-width: 100% !important;
}
		.card-body{
			padding-left:10px !important;
			padding-right:10px !important;
		}
		.myContainer{
			margin-top:10px !important;
		}


.table td, .table th {

    font-size: 9px !important;
}



	}
	
</style>