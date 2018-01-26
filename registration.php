<?php include "header.php"; ?>

<section>

 <div class="row">
	<div class="col-md-2">
		<div class="container1">
					<a href="buy.php">
					<img class="img-responsive"  alt="buynow" src="buynowbutton.png" ></a>
					<h4><p>Up Comming Auction Dates</h4>
				<ul>
				<dd><p>Wednesday, February 4th - 7:00PM:
				Wednesday Night Auction</dd>
				<dd><p>Saturday, February 7th - 10:00AM:
				Family Day Auction</dd>
				<dd><p>Start your long weekend right with some Auction Action!
				Auctions Every Wed. 7PM & Sat. 10AM</dd>
			</ul>
		</div>
	    </div>
		  <div class="col-md-10">
			<div class="container2">
			 <div id="center">
    <h1><p> SQL</h1>
    
	
	<!-- TABLE ENTRIES COULD BE CHANGECD FROM HERE -->
	
	<form  method="post" action="" 
			onsubmit="return validateForm( );">
			<table border="0">
			<tr> 
      			<td align="auto"><p> Name:</td>
      			 <td>  <input type="text" name="userName" id="userName" > </td>
      		</tr>
			<tr> 
      <tr> 
      			<td align="auto"> <p>cellphone:</td>
      			 <td>  <input type="text" name="userName" id="userName" > </td>
      		</tr> 
      			<td align="auto"> <p>postal code:</td>
      			 <td>  <input type="text" name="userName" id="userName" > </td>
      		</tr>
      		<tr>	 		
       		   <td align="auto"><p>Address:</td>
       		   <td> <input type="text" name="userAddress" id="userAddress"></td>
       		</tr> 
       		<tr>  
      		   	<td align="auto"><p>Email-Address:</td>
			   <td> <input type="email" name="Email" id="EmailAdd" ></td>
			 </tr>
       		<tr>  
      			<td align="auto"><p>Questions or Comments:</td>
      		    <td> <textarea rows="auto" cols="auto" name="userComment"></textarea></td>
      		</tr> 
			 <tr> 
			   <td>&nbsp;</td>
       			<td><input type="submit" value="Submit"/> <input type="reset" /></td>
       		</tr>	
			</table>		
					</form>
					
	
   <script type="text/javascript">
 <!-- <![CDATA[
 document.write(" <h5> Date:  " + Date() + "</h5>");
function validateForm()
{
 if (document.forms[0].userName.value == "" )
    {alert("Name field cannot be empty.");
        return false;
   } // end if
   if (document.forms[0].userAddress.value=="")
   {
      alert("Address field cannot be empty.");
      return false;
   }  // end if
   alert("Name and Address are valid.");
   return true;
      
} // end function validateForm
  
// ]]> -->
</script>
</div>
		</div>
	</div>
	</div>
</section>
<?php include "footer.php"; ?>