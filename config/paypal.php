<?php

return [
	/** set your paypal credential **/
	'client_id' =>'ATgT6dQW3wolcEAyddVXdXn9H0ZnkAUPJfDwqBlpLkLQX-eRqm1QJAm3hopyYkHefQHF-JUyKjN5xr7q',
	'secret' => 'EI6g6u7CsVKxQVr2-9orIIMy6iLiyrMg3pvgsAX-d3xU8clwDQj-rHPdzfsHgmfJ1Uwf6jcPIdiCe9M0',
	/**
	* SDK configuration 
	*/
	'settings' => [
	/**
	* Available option 'sandbox' or 'live'
	*/
	'mode' => 'sandbox',
	/**
	* Specify the max request time in seconds
	*/
	'http.ConnectionTimeOut' => 1000,
	/**
	* Whether want to log to a file
	*/
	'log.LogEnabled' => true,
	/**
	* Specify the file that want to write on
	*/
	'log.FileName' => storage_path() . '/logs/paypal.log',
	/**
	* Available option 'FINE', 'INFO', 'WARN' or 'ERROR'
	*
	* Logging is most verbose in the 'FINE' level and decreases as you
	* proceed towards ERROR
	*/
	'log.LogLevel' => 'FINE'
	],
];