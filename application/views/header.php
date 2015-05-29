<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Erstie-Hilfe</title>

    <script src="<?php print base_url().'js/nativedroid.script.js'; ?>" type="text/javascript"></script>
    <link href="<?php print base_url().'css/jquerymobile.nativedroid.css'; ?>" type="text/css" rel="stylesheet" />


    <!-- jQueryMobileCSS - original without styling -->
    <link rel="stylesheet" href="http://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.css" />

    <!-- jQuery / jQueryMobile Scripts -->
    <script src="http://code.jquery.com/jquery-1.9.1.min.js"></script>
    <script src="http://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.js"></script>

	<style type="text/css">

	::selection { background-color: #E13300; color: white; }
	::-moz-selection { background-color: #E13300; color: white; }

	body {
		background-color: #fff;
		margin: 40px;
		font: 13px/20px normal Helvetica, Arial, sans-serif;
		color: #4F5155;
	}

	a {
		color: #003399;
		background-color: transparent;
		font-weight: normal;
	}

	h1 {
		color: #444;
		background-color: transparent;
		border-bottom: 1px solid #D0D0D0;
		font-size: 19px;
		font-weight: normal;
		margin: 0 0 14px 0;
		padding: 14px 15px 10px 15px;
	}

	code {
		font-family: Consolas, Monaco, Courier New, Courier, monospace;
		font-size: 12px;
		background-color: #f9f9f9;
		border: 1px solid #D0D0D0;
		color: #002166;
		display: block;
		margin: 14px 0 14px 0;
		padding: 12px 10px 12px 10px;
	}

	#body {
		margin: 0 15px 0 15px;
	}

	p.footer {
		text-align: right;
		font-size: 11px;
		border-top: 1px solid #D0D0D0;
		line-height: 32px;
		padding: 0 10px 0 10px;
		margin: 20px 0 0 0;
	}

	#container {
		margin: 10px;
		border: 1px solid #D0D0D0;
		box-shadow: 0 0 8px #D0D0D0;
	}

	/* Swipe works with mouse as well but often causes text selection. */
    #demo-page * {
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        -o-user-select: none;
        user-select: none;
    }
    /* Arrow only buttons in the header. */
    #demo-page .ui-header .ui-btn {
        background: none;
        border: none;
        top: 9px;
    }
    #demo-page .ui-header .ui-btn-inner {
        border: none;
    }
    /* Content styling. */
    dl { font-family: "Times New Roman", Times, serif; padding: 1em; }
    dt { font-size: 2em; font-weight: bold; }
    dt span { font-size: .5em; color: #777; margin-left: .5em; }
    dd { font-size: 1.25em; margin: 1em 0 0; padding-bottom: 1em; border-bottom: 1px solid #eee; }
    .back-btn { float: right; margin: 0 2em 1em 0; }
	</style>
</head>
<body>
