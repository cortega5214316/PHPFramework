<!DOCTYPE html>
<html class="st-layout ls-top-navbar ls-bottom-footer show-sidebar sidebar-l2" lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">
        <title>QHC</title>
        <!-- Compressed Vendor BUNDLE
        Includes vendor (3rd party) styling such as the customized Bootstrap and other 3rd party libraries used for the current theme/module -->
        <link href="css/vendor.min.css" rel="stylesheet">
        <link href="css/module-layout.min.css" rel="stylesheet">
        <link href="css/theme-core.min.css" rel="stylesheet">
        
        <link href="css/module-essentials.min.css" rel="stylesheet" />
        <link href="css/module-sidebar.min.css" rel="stylesheet" />
        <link href="css/module-sidebar-skins.min.css" rel="stylesheet" />
        <link href="css/module-navbar.min.css" rel="stylesheet" />
        
        <script src="js/signup.js"></script>
        <script src="js/main.js"></script>
        <script src="js/ajax.js"></script>
        <script src="js/functions.js"></script>
        <!-- <link href="css/module-media.min.css" rel="stylesheet" /> -->
    </head>
    <body>
        <!-- Wrapper required for sidebar transitions -->
        <div class="st-container">
            <!-- Fixed navbar -->
            <div class="navbar navbar-main navbar-default navbar-fixed-top" role="navigation">
                <div class="container-fluid">
                    <div class="navbar-header">
                        <a href="#sidebar-menu" data-effect="st-effect-1" data-toggle="sidebar-menu" class="toggle pull-left visible-xs"><i class="fa fa-bars"></i></a>
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#main-nav">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>                        
                        </button>
                  		<a href="#sidebar-chat" data-toggle="sidebar-menu" data-effect="st-effect-1" class="toggle pull-right visible-xs "><i class="fa fa-comments"></i></a>
                        <a class="navbar-brand navbar-brand-primary hidden-xs" href="index.html"><img src="images/QDC_Logo_Title_1.png" alt="Logo" vspace="5" title="QHDC"></a>
                    </div>
                    
                    <div class="collapse navbar-collapse" id="main-nav">  
                    	<ul class="nav navbar-nav navbar-user">
                            <!-- User -->
                            <li class="login">
                      			<strong> Login: </strong>
                            </li>
                        </ul>                  
                        <form class="navbar-form-login margin-none navbar-left hidden-xs ">
                            <!-- Login -->
                            <div class="login">
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="icon-user-2"></i></span>
                                    <input type="text" class="form-control" placeholder="E-mail">
                                </div>
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="icon-lock"></i></span>
                                    
                                    <input type="text" class="form-control" placeholder="Password">
                                </div>
                            </div>
                            <div class="pull-left visible-md visible-lg" data-toggle="tooltip" data-placement="bottom" title="A few Color">
                                
                            </div>
                        </form>
                        <ul class="nav navbar-nav navbar-user">
                            <!-- Remember Login -->
                            <div class="retain-login">
               					<input type="checkbox" >
                                <strong> Remember Login </strong>
                            </div>
                        </ul>
                        <ul class="nav navbar-nav navbar-user">
                            <!-- Remember Login -->
                            <div class="login-cmd">
               					<input class="login-btn" type="button" id="Login" value="Login">
                            </div>
                        </ul>  
                        <ul class="nav navbar-nav navbar-right hidden-xs">
                            <li class="pull-right">
                                <a href="#sidebar-chat" data-effect="st-effect-1" data-toggle="sidebar-menu">
                                    <i class="fa fa-file-text-o"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        <!-- Sidebar component with st-effect-1 (set on the toggle button within the navbar) -->
            <div class="sidebar left sidebar-size-2 sidebar-offset-0 sidebar-visible-desktop sidebar-visible-mobile sidebar-skin-dark" id="sidebar-menu" data-type="collapse">
            </div>    
            
            <div class="st-pusher" id="content">
                <!-- sidebar effects INSIDE of st-pusher: -->
                <!-- st-effect-3, st-effect-6, st-effect-7, st-effect-8, st-effect-14 -->
                <!-- this is the wrapper for the content -->
                <div class="st-content">
                    <!-- extra div for emulating position:fixed of the menu -->
                    <div class="st-content-inner">
                        <div class="container-fluid">
                        	<div class="left">
                            	<label>Welcome to the QHC community</label>
                            </div>
                            <div class="center">
                            	<label>Sign Up</label>
                                <form class="signup-form" id="signupform" onSubmit="return false">
									<input class="signemail" id="usernameID" type="text" value="User ID" onFocus="emptyElement('usernameID')" 
                                    		onBlur="checkUsername()" onKeyUp="restrict('usernameID', 'unameStatus', 'en_US')" maxlength="100">
                                    <span id="unameStatus"></span>
                                    <div></div>
                                    <input id="username" type="text"  onFocus="emptyElement('username')" onBlur="check('username')" value="First Name" maxlength="88">
                                    <input id="userlast" type="text" onFocus="emptyElement('userlast')" onBlur="check('userlast')" value="Last Name" maxlength="88">
                                    <div></div>
    								<input class="signemail" id="email" type="text" value="Email" onFocus="emptyElement('email')" onKeyUp="restrict('email')" 
                                    			onBlur="check('email')" maxlength="100">
                                   	<span id="emailStatus"></span>
                                    <div></div>
									<input class="signemail" id="remail" type="text" value="Re-enter Email" onFocus="emptyElement('remail')" 
                                    		onKeyUp="restrict('remail')" onBlur="validate('email','remail')" maxlength="100">
                                    <span id="remailStatus"></span>
                                    <div></div>
									<input class="signemail" id="password" type="text" value="New Password" onFocus="emptyElement('password')" 
                                    		onBlur="check('password')" maxlength="100">
                                    <div></div>
									<input class="signemail" id="repassword" type="text" value="Re-enter Password" onFocus="emptyElement('repassword')" 
                                    		onblur="validate('password','repassword')" maxlength="100">
                                    <span id="repasswordStatus"></span>
                                    <div></div>
                                    <label class="signupbday">Date of Birth:</label>
                                    <div></div>
                                    <select id="day" onFocus="emptyElement('status')">
                                    	<?php include_once("PHP_Includes/day_list.php"); ?>
                                    </select>
                                    <select id="month" onFocus="emptyElement('status')">
                                    	<option value="0">Month</option>
                                      	<option value="Jan">Jan</option>
                                      	<option value="Feb">Feb</option>
                                      	<option value="Mar">Mar</option>
                                      	<option value="Apr">Apr</option>
                                      	<option value="May">May</option>
                                      	<option value="Jun">Jun</option>
                                      	<option value="Jul">Jul</option>
                                      	<option value="Aug">Aug</option>
                                      	<option value="Sep">Sep</option>
                                        <option value="Oct">Oct</option>
                                        <option value="Nov">Nov</option>
                                        <option value="Dec">Dec</option>
                                    </select>
                                    <select id="year" onFocus="emptyElement('status')">
                                    	<?php include_once("PHP_Includes/year_list.php"); ?>
                                    </select>
                                    <div></div>
                                    <input class="gender" id ="Fg" type="checkbox" onClick="SetGender('Fg')">
                                	<label> Female </label>
                                    <input class="gender" id = "Mg" type="checkbox" onClick="SetGender('Mg')">
                                	<label> Male </label>
                                    <div></div>
                                    <div id="terms" style="display: none;">
                                        <label class="termsHeader">QHCD Terms Of Use</label>
                                        <div></div>
                                        <textarea class="terms" name="Policy" cols="80" rows="80" readonly="true">
                                            <?php
                                                echo file_get_contents('PHP_Includes/languages/TermsOfUse.txt');
                                            ?>
                                        </textarea>
                                        <div>
                                            <button onClick="ACKTerms()">OK</button>
                                        </div>
                                    </div>
                                    <div></div>
                                    <div>
                                        <input class="gender" id = "Mg" type="checkbox" onClick="SetAck()">
                                        <a href="#" class="form-terms" onClick="return false" onMouseDown="OpenTerms()">
                                            By Checking You Agreed to the QDC Terms and accept the Data Policy
                                        </a>
                                    </div>
                                    <div></div>
                                    <input class="signup-button" type="button" id="signup-btn" onClick="signup()" value="Sign up">
                                    <span id="status"></span>
                                </form>
                            </div>
                        </div>
                    </div>
                    <!-- /st-content-inner -->
                </div>
                <!-- /st-content -->
            </div>
            <!-- /st-pusher -->
            <!-- Footer -->
            <footer class="footer">
            	<ul class="languaje_list">
                    <li>English (US)</li>
                    <li>
                    	<a dir="ltr" href="http://localhost:8888/htdocs/es/login_es.php" onclick="setLocalCookie(&quot;es_LA&quot;, &quot;en_US&quot;, &quot;http:\/\/es-la.qhdc.com\/&quot;, &quot;qhdc_Language&quot;, 1); return false;" title=	 "Spanish">Español</a>
                    </li>
                    <li>
                    	<a dir="ltr" href="http://www.qhdc.com/pt/" onclick="setLocalCookie(&quot;pt_BR&quot;, &quot;en_US&quot;, &quot;http:\/\/pt-br.qhdc.com\/&quot;, &quot;qhdc_Language&quot;, 4); return false;" title="Portuguese">Português</a>
                    </li>
                    <li>
                    	<a dir="ltr" href="http://www.qhdc.com/it/" onclick="setLocalCookie(&quot;it_IT&quot;, &quot;en_US&quot;, &quot;http:\/\/it-it.qhdc.com\/&quot;, &quot;qhdc_Language&quot;, 5); return false;" title="Italian">Italiano</a>
                    </li>
                    <li></li>
                    <li class="pull-right">
                         <strong>IEEC.LLC</strong> v3.6.3 &copy; Copyright 2016
                     </li>
                </ul>
            </footer>
            <!-- // Footer -->
        </div>
        <!-- /st-container -->
        <!-- Inline Script for colors and config objects; used by various external scripts; -->
        <script>
            var colors = {
                            "danger-color": "#e74c3c",
                            "success-color": "#81b53e",
                            "warning-color": "#f0ad4e",
                            "inverse-color": "#2c3e50",
                            "info-color": "#2d7cb5",
                            "default-color": "#6e7882",
                            "default-light-color": "#cfd9db",
                            "purple-color": "#9D8AC7",
                            "mustard-color": "#d4d171",
                            "lightred-color": "#e15258",
                            "body-bg": "#f6f6f6"
                        };
            var config = {
                            theme: "social-1",
                            skins: {
                                        "default": 
                                            {
                                                "primary-color": "#FB840D"
                                            },
                                        "orange": 
                                            {
                                                "primary-color": "#e74c3c"
                                            },
                                        "blue": 
                                            {
                                                "primary-color": "#4687ce"
                                            },
                                        "purple": 
                                            {
                                                "primary-color": "#af86b9"
                                            },
                                        "brown": 
                                            {
                                                "primary-color": "#c3a961"
                                            }
                                    }
                        };
        </script>
        <!-- Separate Vendor Script Bundles -->
        <script src="js/vendor-core.min.js"></script>    
        <script src="js/module-layout.min.js"></script>
        
    </body>
</html>