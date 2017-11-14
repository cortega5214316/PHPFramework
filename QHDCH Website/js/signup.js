 // JavaScript Document
 
 var r = Math.floor(182);
 var g = Math.floor(182);
 var b = Math.floor(182);
 var col = "rgb(" + r + "," + g + "," + b + ")";
		
 var gr = Math.floor(0);
 var gg = Math.floor(255);
 var gb = Math.floor(0);
		
 var goodColor = "rgb(" + gr + "," + gg + "," + gb + ")";
		
 var br = Math.floor(255);
 var bg = Math.floor(0);
 var bb = Math.floor(0);
		
		var badColor = "rgb(" + br + "," + bg + "," + bb + ")";
		
 var rr = Math.floor(0);
 var rg = Math.floor(0);
 var rb = Math.floor(0);
		
 var regColor = "rgb(" + rr + "," + rg + "," + rb + ")";

function restrict(elem, status)
	{
		var tf 			= _(elem);
		var tf_stat 	= _(status);
		var rx 			= new RegExp;
		
		var img = document.createElement('IMG');

		img.setAttribute('src', '/images/loader.gif');
		
		if((elem == "email") || (elem == "remail"))
			{
				rx = /[' "]/gi;
				if (rx.test(tf))
					{
					}
				else
					{
					}
			} 
		else if(elem == "usernameID")
			{
				rx = /^[a-zA-Z]+[a-zA-Z0-9_]{5,50}$/gi;
				if (rx.test(tf.value))
					{
						tf.style.background = 'White';
						tf_stat.style.color = goodColor;
						tf_stat.innerHTML	=  '';
						tf_stat.appendChild(img);
					}
				else
					{
						if (tf.value == "")
							{
								tf.style.color = col;
								tf.value = 'Enter User ID';
								tf_stat.style.color = regColor;
								tf_stat.innerHTML = 'Enter a valid user ID';
								
							}
						else
							{
								if (rx.test(tf.value) == false)
									{
										tf_stat.style.color = badColor;
										tf_stat.innerHTML	=  'Invalid Character or ID less than 5 characters...';
									}
//								
							}
					}
			}

	//	tf.value = tf.value.replace(rx, "");
	}
	
function check(elem)
	{
		var tf = _(elem);
		
		var r = Math.floor(182);
		var g = Math.floor(182);
		var b = Math.floor(182);
		var col = "rgb(" + r + "," + g + "," + b + ")";

		if(elem == "email")
			{
				if (tf.value == "")
				{
					tf.style.color = col;
					tf.value = "Enter Email";
				}
			}
		else if(elem == "password")
			{
				tf.style.color = col;
				tf.type = "text";
				tf.value = "Enter Password";
			}
		else if(elem == "username")
			{
				tf.style.color = col;
				tf.value = "First Name";
			}
		else if(elem == "userlast")
			{
				tf.style.color = col;
				tf.value = "Last Name";
			}
		else if(elem == "usernameID")
			{
				tf.style.color = col;
				tf.value = "Unique ID";
			}
	}
	
function validate(elem1,elem2)
	{
		var tf1 = _(elem1);
		var tf2 = _(elem2);
		var filter = new RegExp;
		filter = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
 
		if ((elem1 == "email") && (elem2 == "remail"))
			{
				if (filter.test(tf1.value) && filter.test(tf2.value))
					{
						if (tf1.value == tf2.value)
							{
							}
						else
							{
							}
						
					}
				else
					{
						if (filter.test(tf1.value))
							{
							}
						else
							{
							}
					}
			} 
		else if ((elem1 == "password") && (elem2 == "repassword"))
		{
		}
		
	}
	
	
function emptyElement(x)
	{
/*		var elem = document.getElementById(x);  */
		var elem = _(x);
		elem.value = "";
		elem.style.color = "Black";
		elem.style.bgcolor = "White";
		
		if ((elem.attributes.id.value == "password") || (elem.attributes.id.value == "repassword"))
			{
				elem.type = "password";
			}

/*		_(x).innerHTML = "";*/
	}
	
function SetGender(x)
	{
/*		var elem = document.getElementById(x);  */
		var elem = _(x);
		
		if (elem.attributes.id.value == "Fg")
			{
				_("Mg").checked = 0;
			}
		else if (elem.attributes.id.value == "Mg")
			{
				_("Fg").checked = 0;
			}
			
	}
	
function clearAll(x, y)
	{
		var elem = _(x);
		elem.value = "";
		elem.style.color = "Black";
		elem.style.bgcolor = "White";
		
		var stat = _(y);
		stat.value = "";

/*		_(x).innerHTML = "";*/
	}
	
function checkusername()
	{
		var u = _("usernameID").value;
		if(u != "")
		{
			_("unameStatus").innerHTML = 'checking ...';
			var ajax = ajaxObj("POST", "signup.php");
			ajax.onreadystatechange = function() 
										{
											if(ajaxReturn(ajax) == true) 
												{
													_("unameStatus").innerHTML = ajax.responseText;
												}
										}
			ajax.send("usernamecheck="+u);
		}
	}
	
function signup()
	{
		var u = _("username").value;
		var l = _("userlast").value;
		var e = _("email").value;
		var e2 = _("remail").value;
		var p1 = _("password").value;
		var p2 = _("repassword").value;
		var bd = _("day").value;
		var bm = _("month").value;
		var by = _("year").value;
		var gf = _("Fg").checked;
		var gm = _("Mg").checked;
		var status = _("status");
		if(u == "" || l == "" || e == "" || e2 == "" || p1 == "" || p2 == "" || bd == "0" || bm == "0" || by == "0" || (gf == 0 && gm == 0))
			{
				status.innerHTML = "Fill out all of the form data";
			} 
		else if(p1 != p2)
			{
				status.innerHTML = "Your password fields do not match";
			} 
		else if( _("terms").style.display == "none")
			{
				status.innerHTML = "Please view the terms of use";
			} 
		else 
			{
				_("signupbtn").style.display = "none";
				status.innerHTML = 'please wait ...';
				var ajax = ajaxObj("POST", "signup.php");
				ajax.onreadystatechange = function() 
											{
												if(ajaxReturn(ajax) == true) 
													{
														if(ajax.responseText != "signup_success")
															{
																status.innerHTML = ajax.responseText;
																_("signupbtn").style.display = "block";
															} 
														else 
															{
															/*	window.scrollTo(0,0);
																_("signupform").innerHTML = "OK "+u+", check your email inbox and junk mail box at <u>"+e+"</u> 
																in a moment to complete the sign up process by activating your account. You will not be able to do anything on 
																the site until you successfully activate your account.";*/
															}
													}
											}
				ajax.send("u="+u+"&e="+e+"&p="+p1+"&c="+c+"&g="+g);
			}
	}
	
function OpenTerms()
	{
/*	   document.getElementById('UserTerms').innerHTML = "Acknowledge This Message";*/
		_("terms").style.display = "block";
		emptyElement("status"); 
        
	}
    
function ACKTerms()
{
    _("terms").style.display = "none";
    emptyElement("status"); 
}
/*function addEvents()
	{
		_("elemID").addEventListener("click", func, false);
	}
	window.onload = addEvents;*/