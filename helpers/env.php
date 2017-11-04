<?php

function is_prod() {
	return (env('APP_ENV') == 'production');
}

function is_qa() {
	return (env('APP_ENV') == 'staging');
}

function is_local() {
	return (env('APP_ENV') == 'local');
}

function is_dev() {
	return is_qa() || is_local();
}