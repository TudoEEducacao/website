<?php
class CookieHandler {

	private $userCookieName = "LoggedUser";

	function setCookie ($cookieValue, $cookieExpirationDays, $cookieName = "LoggedUser") {
		setcookie($cookieName, $cookieValue, time() + (86400 * $cookieExpirationDays), "/");
	}

	function verify ($cookieName) {
		if(!isset($_COOKIE[$cookieName])) {
    		return false;
		} else {
    		return true;
    	}
	}

	function getUserPrivilege () {
		if(!isset($_COOKIE[$this->userCookieName])) {
    		return 0;
		} else {
    		return $_COOKIE[$this->userCookieName];
    	}
	}
}
?>