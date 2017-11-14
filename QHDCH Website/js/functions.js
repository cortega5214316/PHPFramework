// JavaScript Document

// This function will create a cookie
// need 3 parameters
// name : the name key for the cookie
// value : the value of the cookie
// days: this is the amount of days the key will be valid before expires.
//
function createCookie(name,value,days) 
	 {
		if (days) 
			{
				var date = new Date();
				date.setTime(date.getTime()+(days*24*60*60*1000));
				var expires = ""; 
				
				expires=+date.toGMTString();
			}
		else 
			var expires = "";
		document.cookie = name+"="+value+expires+"; path=/";
	}

function readCookie(name) 
	{
		var nameEQ = name + "=";
		var ca = document.cookie.split(';');
		for(var i=0;i < ca.length;i++) 
			{
				var c = ca[i];
				while (c.charAt(0)==' ') 
					c = c.substring(1,c.length);
				if (c.indexOf(nameEQ) == 0) 
					return c.substring(nameEQ.length,c.length);
			}
		return null;
	}

function eraseCookie(name) 
	{
		createCookie(name,"",-1);
	}
	
//setLocalCookie(&quot;it_IT&quot;, &quot;en_US&quot;, &quot;http:\/\/it-it.qhdc.com\/&quot;, &quot;qhdc_Language&quot;, 5)
	
function setLocalCookie(value, source, url, name, id)
	{
		
	}

	
