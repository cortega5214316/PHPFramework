<?php
	include_once "mysql.php";

   require_once("config.php");
   require_once("PcCase.class.php");
   require_once("Client.class.php");
   require_once("WONumber.class.php");
   require_once("Diagnostics.class.php");
   
            $rec_Users = array (
	                             "name" => "",
								 "last" => "",
								 "Name" => "",
								 "username" => "",
								 "profile" => "",
								 "password" => "",
								 "email" => "",
								 "gender" => "",
								 "country" => "",
								 "state" => "",
								 "phone" => "",
								 "userlevel" => "",
								 "avatar" => "",
								 "ip" => "",
								 "signup" => "",
								 "lastlogin" => "",
								 "notescheck" => "",
								 "greeting" => "",
								 "activated" => ""
	                          );
							  
  &username = protect($_POST['username']);
  &userlast = protect($_POST['userlast']);
  &email = protect($_POST['email']);
  &remail = protect($_POST['remail']);
  &password = protect($_POST['password']);
  &repassword = protect($_POST['repassword']);
  &day = protect($_POST['day']);
  &month = protect($_POST['month']);
  &year = protect($_POST['year']);
  &fg = protect($_POST['Fg']);
  &mg = protect($_POST['Mg']);
  
  function protect($string)
	  {
		$string = msql_real_scape_string(trim(strip_tags(addslashes($string))));
		return $string;
	  }
	  
  if ($_POST['submit'] == 'submit')
	  {
	  }

  if(empty($_POST['CaseNo'])) 
   {
	  die('Error: Missing the Case Number');
   }
   
   $caseNumber =$_POST['CaseNo'];
   
  //*** Retrieve the Case number Record
   $cases = array();
   $cases = PcCase::getCase($caseNumber);
   
   $case = array();
   $clean_case = array();
   
   foreach($cases as $row)
     {
	     $case=$rec_Repair;
		 foreach($row as $key => $value)
		    {
			   if (array_key_exists($key, $rec_Repair))
			      {
					    $case[$key]=$value;
						$clientNumber = $row["ClientNo"];
						$problem = $row["Problem"];
						$woNumber = $row["WONumber"];
			      }
			}
		$clean_case[]=$case;	
	  }
	  
 //*** Retrieve the Data from the Clients Table  
  
   $clients= array();
   $clients= Client::getClient($clientNumber);
	 
   $clientele = array();
   $clean_client = array();
   
   foreach($clients as $row)
     {
	     $clientele=$rec_Clients;
		 foreach($row as $key => $value)
		    {
			   if (array_key_exists($key, $rec_Clients))
			      {
					    $clientele[$key]=$value;
						$clientName = $row["Name"];
						$clientLast = $row["LastName"];
			      }
			}
		$clean_client[]=$clientele;	
	  }
  
 //*** Retrieve data from the WO Table
 
   $orders = array();
   $orders = WOrder::getWOrder($woNumber);
	 
   $order = array();
   $clean_order = array();
   
   foreach($orders as $row)
     {
	     $order = $rec_WO;
		 foreach($row as $key => $value)
		    {
			   if (array_key_exists($key, $rec_WO))
			      {
					    $order[$key]=$value;
						$diagnosticNo = $row["DiagnosticNo"];
						$workDesc = $row["WorkDescription"];
						$status = $row["Status"];
						$estimatedDate = $row["EstimatedDT"];
			      }
			}
		$clean_order[]=$order;	
	  } 

 //*** Retrieve data from theDiagnostics Table
 
   $diagnostics = array();
   $diagnostics = Diagnostics::getDiagnostic($diagnosticNo);
	 
   $diagnostic = array();
   $clean_diagnostic = array();
   
   foreach($diagnostics as $row)
     {
	     $diagnostic = $rec_Diag;
		 foreach($row as $key => $value)
		    {
			   if (array_key_exists($key, $rec_Diag))
			      {
					    $diagnostic[$key]=$value;
						$diagnosticDesc = $row["Diagnostic"];
			      }
			}
		$clean_diagnostic[]=$diagnostic;	
	  } 	  
	  
   
  // print_r($clean_case);
   //print_r($clean_diagnostic);
   $message = $caseNumber."||".$clientName." ".$clientLast."||".$problem."||".$diagnosticDesc."||".$status."||".$workDesc."||".$estimatedDate;
   //printf("Return Message is : %s ", $message);
   die($message);
   //die(array_values($clean_record));
   
?>
