<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<style type="text/css"> 
/* place css fixes for all versions of IE in this conditional comment */
.thrColElsHdr #sidebar1, .thrColElsHdr #sidebar2 { padding-top: 30px; }
.thrColElsHdr #mainContent { zoom: 1; padding-top: 15px; }
/* the above proprietary zoom property gives IE the hasLayout it needs to avoid several bugs */

@charset "utf-8";
body  {
	font: 100% Verdana, Arial, Helvetica, sans-serif;
	background: #666666;
	margin: 0; /* it's good practice to zero the margin and padding of the body element to account for differing browser defaults */
	padding: 0;
	text-align: center; /* this centers the container in IE 5* browsers. The text is then set to the left aligned default in the #container selector */
	color: #000000;
}

/* Tips for Elastic layouts 
1. Since the elastic layouts overall sizing is based on the user's default fonts size, they are more unpredictable. Used correctly, they are also more accessible for those that need larger fonts size since the line length remains proportionate.
2. Sizing of divs in this layout are based on the 100% font size in the body element. If you decrease the text size overall by using a font-size: 80% on the body element or the #container, remember that the entire layout will downsize proportionately. You may want to increase the widths of the various divs to compensate for this.
3. If font sizing is changed in differing amounts on each div instead of on the overall design (ie: #sidebar1 is given a 70% font size and #mainContent is given an 85% font size), this will proportionately change each of the divs overall size. You may want to adjust based on your final font sizing.
*/
.thrColElsHdr #container { 
	width: 46em;  /* this width will create a container that will fit in an 800px browser window if text is left at browser default font sizes */
	background: #FFFFFF;
	margin: 0 auto; /* the auto margins (in conjunction with a width) center the page */
	border: 1px solid #000000;
	text-align: left; /* this overrides the text-align: center on the body element. */
} 
.thrColElsHdr #header { 
	background: #DDDDDD; 
	padding: 0 10px;  /* this padding matches the left alignment of the elements in the divs that appear beneath it. If an image is used in the #header instead of text, you may want to remove the padding. */
} 
.thrColElsHdr #header h1 {
	margin: 0; /* zeroing the margin of the last element in the #header div will avoid margin collapse - an unexplainable space between divs. If the div has a border around it, this is not necessary as that also avoids the margin collapse */
	padding: 10px 0; /* using padding instead of margin will allow you to keep the element away from the edges of the div */
}

/* Tips for sidebar1:
1. Be aware that if you set a font-size value on this div, the overall width of the div will be adjusted accordingly.
2. Since we are working in ems, it's best not to use padding on the sidebar itself. It will be added to the width for standards compliant browsers creating an unknown actual width. 
3. Space between the side of the div and the elements within it can be created by placing a left and right margin on those elements as seen in the ".thrColElsHdr #sidebar1 p" rule.
*/
.thrColElsHdr #sidebar1 {
	float: left; 
	width: 11em; /* since this element is floated, a width must be given */
	background: #EBEBEB; /* the background color will be displayed for the length of the content in the column, but no further */
	padding: 15px 0; /* top and bottom padding create visual space within this div */
}
.thrColElsHdr #sidebar2 {
	float: right; 
	width: 11em; /* since this element is floated, a width must be given */
	background: #EBEBEB; /* the background color will be displayed for the length of the content in the column, but no further */
	padding: 15px 0; /* top and bottom padding create visual space within this div */
}
.thrColElsHdr #sidebar1 h3, .thrColElsHdr #sidebar1 p, .thrColElsHdr #sidebar2 p, .thrColElsHdr #sidebar2 h3 {
	margin-left: 10px; /* the left and right margin should be given to every element that will be placed in the side columns */
	margin-right: 10px;
}

/* Tips for mainContent:
1. If you give this #mainContent div a font-size value different than the #sidebar1 div, the margins of the #mainContent div will be based on its font-size and the width of the #sidebar1 div will be based on its font-size. You may wish to adjust the values of these divs.
2. The space between the mainContent and sidebar1 is created with the left margin on the mainContent div.  No matter how much content the sidebar1 div contains, the column space will remain. You can remove this left margin if you want the #mainContent div's text to fill the #sidebar1 space when the content in #sidebar1 ends.
3. To avoid float drop, you may need to test to determine the approximate maximum image/element size since this layout is based on the user's font sizing combined with the values you set. However, if the user has their browser font size set lower than normal, less space will be available in the #mainContent div than you may see on testing.
4. In the Internet Explorer Conditional Comment below, the zoom property is used to give the mainContent "hasLayout." This avoids several IE-specific bugs that may occur.
*/
.thrColElsHdr #mainContent {
 	margin: 0 12em 0 12em; /* the right margin can be given in ems or pixels. It creates the space down the right side of the page. */
} 
.thrColElsHdr #footer { 
	padding: 0 10px; /* this padding matches the left alignment of the elements in the divs that appear above it. */
	background:#DDDDDD;
} 
.thrColElsHdr #footer p {
	margin: 0; /* zeroing the margins of the first element in the footer will avoid the possibility of margin collapse - a space between divs */
	padding: 10px 0; /* padding on this element will create space, just as the the margin would have, without the margin collapse issue */
}

/* Miscellaneous classes for reuse */
.fltrt { /* this class can be used to float an element right in your page. The floated element must precede the element it should be next to on the page. */
	float: right;
	margin-left: 8px;
}
.fltlft { /* this class can be used to float an element left in your page */
	float: left;
	margin-right: 8px;
}
.clearfloat { /* this class should be placed on a div or break element and should be the final element before the close of a container that should fully contain a float */
	clear:both;
    height:0;
    font-size: 1px;
    line-height: 0px;
}
</style>
<?php

$db = new mysqli($hostname, $username, $password, $database);

if($db->connect_errno > 0){
    die('Unable to connect to database [' . $db->connect_error . ']');
}

?>

?>

</head>

<body class="thrColElsHdr">

<div id="container">
  <div id="header">
    <h1>data Explorer</h1>
  <!-- end #header --></div>
  <div id="sidebar1">
    <h3>Timeframe</h3>
    <form id="form_last_shift" name="form_last_shift" method="post" action="">
      <p><strong>Last Shift</strong></p>
      <p>
        <select name="last_shift" id="last_shift">
          <option value="1">1st (15:00-09:00)</option>
          <option value="2">2nd (12:00-15:00)</option>
          <option value="3">3rd (08:00-12:00)</option>
        </select>
      </p>
      <p>
        <input type="submit" name="submit_last_shift" id="submit_last_shift" value="Submit" />
      </p>
    </form>
    <form id="form_customize" name="form_customize" method="post" action="">
      <p><strong>Customize:</strong></p>
      <p>Start Date
        <input type="text" name="start_date" id="start_date" />
      </p>
      <p>End Date
        <input type="text" name="end_date" id="end_date" />
      </p>
      <p>
        Start Time
        <select name="start_time" id="start_time">
          <option value="00">00</option>
          <option value="01">01</option>
          <option value="02">02</option>
          <option value="03">03</option>
          <option value="04">04</option>
          <option value="05">05</option>
          <option value="06">06</option>
          <option value="07">07</option>
          <option value="08">08</option>
          <option value="09">09</option>
          <option value="10">10</option>
          <option value="11">11</option>
          <option value="12">12</option>
          <option value="13">13</option>
          <option value="14">14</option>
          <option value="15">15</option>
          <option value="16">16</option>
          <option value="17">17</option>
          <option value="18">18</option>
          <option value="19">19</option>
          <option value="20">20</option>
          <option value="21">21</option>
          <option value="22">22</option>
          <option value="23">23</option>
        </select>
      </p>
      <p>End Time
        <select name="end_time" id="end_time">
          <option value="00">00</option>
          <option value="01">01</option>
          <option value="02">02</option>
          <option value="03">03</option>
          <option value="04">04</option>
          <option value="05">05</option>
          <option value="06">06</option>
          <option value="07">07</option>
          <option value="08">08</option>
          <option value="09">09</option>
          <option value="10">10</option>
          <option value="11">11</option>
          <option value="12">12</option>
          <option value="13">13</option>
          <option value="14">14</option>
          <option value="15">15</option>
          <option value="16">16</option>
          <option value="17">17</option>
          <option value="18">18</option>
          <option value="19">19</option>
          <option value="20">20</option>
          <option value="21">21</option>
          <option value="22">22</option>
          <option value="23">23</option>
        </select>
  </select>
      </p>
      <p>
        <input type="submit" name="submit_customize" id="submit_customize" value="Submit" />
      </p>
    </form>
    <p>&nbsp;</p>
  <!-- end #sidebar1 --></div>
  <div id="sidebar2">
    <h3>Summaries</h3>
    <p><strong><em>Total</em></strong></p>
    <p>&lt;Automated/Manual&gt;</p>
    <p><strong><em>By Queue</em></strong></p>
    <p>&lt;Automated/Manual&gt;</p>
  <!-- end #sidebar2 --></div>
  <div id="mainContent">
    <h3>Detail</h3>
    <p>&lt;</p>
    <p> - automated/manual</p>
    <p> - by queue, alert</p>
    <p>- expandable</p>
    <p>&gt;</p>
	<!-- end #mainContent --></div>
	<!-- This clearing element should immediately follow the #mainContent div in order to force the #container div to contain all child floats --><br class="clearfloat" />
   <div id="footer">
    <p>&nbsp;</p>
  <!-- end #footer --></div>
<!-- end #container --></div>

<?php

function summary_tables() 
{
	$link = mysqli_connect("host", "user", "password", "db");
	if (mysqli_connect_errno()) {
		printf("Connect failed: %s\n", mysqli_connect_error());
		exit();
	}


	if ($query)
		{
			// Customize.......
			print("<h3>" . $header . "</h3>");
			print("\n");
			print("<form id='frm" . $short_name . "' method='post' action='account_summary_update.php'>");
			print("\n");
			print("<table id='tbl" . $short_name . "' border='0' cellspacing='1' cellpadding='0'>");
			print("\n");
			
			// Common
			print("  <tr>");
			print("\n");
			print("    <th width='200px'>Account</th>");
			print("\n");
			print("    <th width='50px'>Balance</th>");
			print("\n");
			print("    <th width='50px'>Last Updated</th>");
			print("\n");
			
			if ($type == "Debt")
			{
				// Debt
				print("    <th width='50px'>Next Due Date</th>");
				print("\n");
				print("    <th width='80px'>Min Amount Due</th>");
				print("\n");
				print("    <th width='80px'>Min Amount Due 3yr</th>");
				print("\n");
				print("    <th width='80px'>Monthly Payment</th>");
				print("\n");
				print("    <th width='80px'>Monthly Interest</th>");
				print("\n");
				print("    <th width='10px'>Interest</th>");
				print("\n");
				print("    <th width='80px'>Credit Line</th>");
				print("\n");
				print("    <th width='80px'>Available Credit</th>");
				print("\n");
				print("    <th width='10px'>Months to Pay Off</th>");
				print("\n");
				print("    <th width='10px'>Interest Over Life of Loan</th>");
				print("\n");
								
			}
			else
			{
				// Asset
				print("    <th width='80px'>Monthly</th>");
				print("\n");
				print("    <th width='80px'>Yearly</th>");
				print("\n");
				print("    <th width='80px'>Goal</th>");
				print("\n");
				print("    <th width='80px'>Month's to Goal</th>");
				print("\n");
				print("    <th width='80px'>Year's to Goal</th>");
				print("\n");
			}
			
			// Common
			print("  </tr>");
			print("\n");
			
			$result = mysqli_query($link,$query) or die('Could not look up user information; ' . mysqli_error($link));

			$balance_sum = 0;
			$i = 0;
			$c=0;
			
			$balance_sum = 0;
			$credit_line_sum = 0;
			$credit_avail_sum = 0;
			$interest_life_sum = 0;
			$min_due_sum = 0;
			$min_due_3yr_sum = 0;
			$monthly = 0.01;
			$monthly_sum = 0;
			$month_interest_sum = 0;
			$yearly_sum = 0;
			$goal_sum = 0;
				
			while ($rows = mysqli_fetch_array($result))  
			{
				$c++;
				
				$account_id = $rows["AccountID"];
				$account = $rows["AccountName"];
				$balance = $rows["AccountBalance"];
				$last_updated = $rows["AccountLastUpdated"];
				$monthly = $rows["AccountPaid"];		
				
				if ($type == "Debt")
				{
					$interest = $rows["AccountInterest"];
					if ( $interest > 12 ) {
						$class_td = " class='highinterest' ";
						$class_td_num = " class='highinterest_num' ";
					} else {
						$class_td = " ";
						$class_td_num = " class='num' ";
					}

				}
				
				print("  <tr>");
				print("\n");
				print("    <input type='hidden' name='hid_account_id" . $c . "' value='" . $account_id . "' />");
				print("    <input type='hidden' name='hid_account" . $c . "' value='" . $account . "' />");
				print("\n");
				print("    <td" . $class_td . " >" . $account . "</td>");
				print("\n");
				print("    <td><input " . $class_td_num . " type='text' size='10' name='txt_balance" . $c . "' value='" . $balance . "'/></td>");
				print("\n");
				print("    <td " . $class_td . " >" . date ('Y-m-d', strtotime($last_updated)) . "</td>");
				print("\n");

}

?>
</body>
</html>