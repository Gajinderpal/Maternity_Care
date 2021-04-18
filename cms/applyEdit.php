<?php 
  session_start();
 if(!isset($_SESSION['user']))
 {
   header('location:index.php');
  
 }
  else
  {
  if( isset ($_GET['id']))
  {
    $id = $_GET['id'];
  }
  else
  {
    $id = 0;
  }
  include '../error/manage.php';
  $sql = "select * from apply where id = '$id'";
	$result = mysqli_query($con, $sql);
	$row = mysqli_fetch_array($result); 
   
   ?>
<?php include '_head.php' ?>
<style>
    #apply
	{
	 background: linear-gradient(60deg, #B24592, #F15F79);
color:#fff;
	}
</style>
  <body>

    <?php include 'header.php' ?>

    <div class="container-fluid">
      <div class="row">
        <?php include 'sidebar.php' ?>
        <div class="col-sm-9  col-md-10  main">
		
        <div class="bg">
          <h1 class="page-header">View Application</h1>
		  <div class="bredcrum"><a href="apply.php">All Applications</a> &raquo; View Application</div>
           <div class="table-responsive">
             <table class="table table-striped table-bordered table-condensed apply_tbl">
              <tr>
                <th colspan="2">Loan Amount Required</th>
                <td><?php echo $row['a1']; ?></td>
              </tr>
               <tr>
                 <td colspan="3"><h4>OVERVIEW</h4></td>
               </tr>
              <tr>
                <th colspan="2">Are You Working</th>
                <td><?php echo $row['b1']; ?></td>
              </tr>
              <tr>
                <th colspan="2">Date of Birth*</th>
                <td><?php echo $row['b2']; ?></td>
              </tr>
              <tr>
                <th colspan="2">Please tell us your credit rating</th>
                <td><?php echo $row['b3']; ?></td>
              </tr>
              <tr>
                <th colspan="2">Preferred repayment frequency</th>
                <td><?php echo $row['b4']; ?></td>
              </tr>
              
               <tr>
                 <td colspan="3"><h4>Application Details</h4></td>
               </tr>
               <tr>
                <th colspan="2">Applicant's title*</th>
                <td><?php echo $row['c1']; ?></td>
              </tr>
              
              <tr>
                <th colspan="2">First name (as per your drivers license)</th>
                <td><?php echo $row['c2']; ?></td>
              </tr>
              
              
              <tr>
                <th colspan="2">Middle name/s (as per your drivers licence)</th>
                <td><?php echo $row['c3']; ?></td>
              </tr>
              
              
              <tr>
                <th colspan="2">Surname (as per your drivers license)</th>
                <td><?php echo $row['c4']; ?></td>
              </tr>
              
              <tr>
                <th colspan="2">Country of nationality (As shown on passport)</th>
                <td><?php echo $row['c5']; ?></td>
              </tr>
              
              <tr>
                <th colspan="2">Residential Status</th>
                <td><?php echo $row['c6']; ?></td>
              </tr>
              
              
              <tr>
                <th colspan="2">Marital status</th>
                <td><?php echo $row['c7']; ?></td>
              </tr>
              
              <tr>
                <th colspan="2">Children under 18 in your care</th>
                <td><?php echo $row['c8']; ?></td>
              </tr>
              
              <tr>
                <th colspan="2">Child Age1</th>
                <td><?php echo $row['c9_1']; ?></td>
              </tr>
              
              <tr>
                <th colspan="2">Child Age2</th>
                <td><?php echo $row['c9_2']; ?></td>
              </tr>
              
              <tr>
                <th colspan="2">Child Age3</th>
                <td><?php echo $row['c9_3']; ?></td>
              </tr>
              
              <tr>
                <th colspan="2">Child Age4</th>
                <td><?php echo $row['c9_4']; ?></td>
              </tr>
              
              <tr>
                <th colspan="2">Child Age5</th>
                <td><?php echo $row['c9_5']; ?></td>
              </tr>
              
              <tr>
                <th colspan="2">Child Age6</th>
                <td><?php echo $row['c9_6']; ?></td>
              </tr>
              
              <tr>
                <th colspan="2">Mobile number</th>
                <td><?php echo $row['c10']; ?></td>
              </tr>
              
              <tr>
                <th colspan="2">Home Phone</th>
                <td><?php echo $row['c11']; ?></td>
              </tr>
              
              <tr>
                <th colspan="2">Email Address*</th>
                <td><?php echo $row['c12']; ?></td>
              </tr>
              
              <tr>
                <th colspan="2">Drivers licence number</th>
                <td><?php echo $row['c13']; ?></td>
              </tr>
              
              
              <tr>
                <th colspan="2">Drivers licence type</th>
                <td><?php echo $row['c14']; ?></td>
              </tr>
              
              <tr>
                <th colspan="2">Drivers Licence Version</th>
                <td><?php echo $row['c15']; ?></td>
              </tr>
              
              <tr>
                <th colspan="3"><h4>ADDRESS DETAILS</h4></th>
              </tr>
              
              <tr>
                <th colspan="3"><h4>ADDRESS 1</h4></th>
              </tr>
              
              <tr>
                <th colspan="2">Living situation</th>
                <td><?php echo $row['d1']; ?></td>
              </tr>
              
              <tr>
                <th colspan="2">Address</th>
                <td><?php echo $row['d2']; ?></td>
              </tr>
              
              <tr>
                <th colspan="2">Years at address</th>
                <td><?php echo $row['d3']; ?></td>
              </tr>
              
              <tr>
                <th colspan="2">Months at address</th>
                <td><?php echo $row['d4']; ?></td>
              </tr>
              
              <tr>
                <th colspan="3"><h4>ADDRESS 2</h4></th>
              </tr>
              
               <tr>
                <th colspan="2">Living situation</th>
                <td><?php echo $row['d5']; ?></td>
              </tr>
              
              <tr>
                <th colspan="2">Address</th>
                <td><?php echo $row['d6']; ?></td>
              </tr>
              
              <tr>
                <th colspan="2">Years at address</th>
                <td><?php echo $row['d7']; ?></td>
              </tr>
              
              <tr>
                <th colspan="2">Months at address</th>
                <td><?php echo $row['d8']; ?></td>
              </tr>
              
              <tr>
                <th colspan="3"><h4>CURRENT EMPLOYMENT</h4></th>
              </tr>
              
              <tr>
                <th colspan="3"><h4>Employment number 1</h4></th>
              </tr>
              
              <tr>
                <th colspan="2">Employment Status*</th>
                <td><?php echo $row['e1']; ?></td>
              </tr>
              
              <tr>
                <th colspan="2">Employer's name*</th>
                <td><?php echo $row['e2']; ?></td>
              </tr>
              
              <tr>
                <th colspan="2">Years with employer</th>
                <td><?php echo $row['e3']; ?></td>
              </tr>
              <tr>
                <th colspan="2">Months with employer</th>
                <td><?php echo $row['e4']; ?></td>
              </tr>
              
              <tr>
                <th colspan="2">Job Position</th>
                <td><?php echo $row['e9']; ?></td>
              </tr>
              
              
               <tr>
                <th colspan="3"><h4>Employment number 2</h4></th>
              </tr>
              
              <tr>
                <th colspan="2">Employment Status*</th>
                <td><?php echo $row['e5']; ?></td>
              </tr>
              
              <tr>
                <th colspan="2">Employer's name*</th>
                <td><?php echo $row['e6']; ?></td>
              </tr>
              
              <tr>
                <th colspan="2">Years with employer</th>
                <td><?php echo $row['e7']; ?></td>
              </tr>
              <tr>
                <th colspan="2">Months with employer</th>
                <td><?php echo $row['e8']; ?></td>
              </tr>
              <tr>
                <th colspan="2">Job Position</th>
                <td><?php echo $row['e10']; ?></td>
              </tr>
              
               <tr>
                <th colspan="3"><h4>MAIN APPLICANT INCOME</h4></th>
              </tr>
              
              <tr>
                <th>Your net income (After tax)*</th>
                <th><?php echo $row['f1']; ?></th>
                <td><?php echo $row['f2']; ?></td>
              </tr>
              
              <tr>
                <th>Centrelink Income</th>
                <th><?php echo $row['f3']; ?></th>
                <td><?php echo $row['f4']; ?></td>
              </tr>
              
              <tr>
                <th colspan="2">Number Of Investment Properties</th>
                <td><?php echo $row['f5']; ?></td>
              </tr>
              
               <tr>
                <th>Family assistance</th>
                <th><?php echo $row['f6']; ?></th>
                <td><?php echo $row['f7']; ?></td>
              </tr>
              
              <tr>
                <th>Other taxable income</th>
                <th><?php echo $row['f8']; ?></th>
                <td><?php echo $row['f9']; ?></td>
              </tr>
              
              <tr>
                <th>Partner Income</th>
                <th><?php echo $row['f10']; ?></th>
                <td><?php echo $row['f11']; ?></td>
              </tr>
              
              <tr>
                <th colspan="2">Other income description</th>
                <td><?php echo $row['f12']; ?></td>
              </tr>
              
              <tr>
                <th colspan="3"><h4>ASSETS (THINGS THAT YOU OWN)</h4></th>
              </tr>
              
              <tr>
                <th colspan="2">Personal effects*</th>
                <td><?php echo $row['g1']; ?></td>
              </tr>
              
              <tr>
                <th colspan="2">Bank Balance*</th>
                <td><?php echo $row['g2']; ?></td>
              </tr>
              
              <tr>
                <th colspan="2">Superannuation Value</th>
                <td><?php echo $row['g3']; ?></td>
              </tr>
              
              <tr>
                <th colspan="2">Motor vehicle*</th>
                <td><?php echo $row['g4']; ?></td>
              </tr>
              
              <tr>
                <th colspan="2">Motor vehicle 2</th>
                <td><?php echo $row['g5']; ?></td>
              </tr>
              
              <tr>
                <th colspan="2">Business value</th>
                <td><?php echo $row['g6']; ?></td>
              </tr>
              
              <tr>
                <th colspan="2">Shares & investments</th>
                <td><?php echo $row['g7']; ?></td>
              </tr>
              
              <tr>
                <th colspan="2">Own Home</th>
                <td><?php echo $row['g8']; ?></td>
              </tr>
              
              <tr>
                <th colspan="2">Rental Property</th>
                <td><?php echo $row['g9']; ?></td>
              </tr>
              
               <tr>
                <th colspan="3"><h4>LIABILITIES (THINGS THAT YOU OWE MONEY ON)</h4></th>
              </tr>
              
               <tr>
                <th>Rent / Mortgage / Board</th>
                <td><?php echo $row['h9']; ?></td>
                <td><?php echo $row['h10']; ?></td>
              </tr>
              
              <tr>
                <th colspan="2">Number of Loans</th>
                <td><?php echo $row['h1']; ?></td>
              </tr>
              
              <tr>
                <th colspan="2">Total Balance of Loans</th>
                <td><?php echo $row['h2']; ?></td>
              </tr>
              
              <tr>
                <th>Total Loan Repayments</th>
                <td><?php echo $row['h3']; ?></td>
                <td><?php echo $row['h4']; ?></td>
              </tr>
              
              <tr>
                <th colspan="2">Number of Credit Cards</th>
                <td><?php echo $row['h5']; ?></td>
              </tr>
              
              <tr>
                <th colspan="2">Total Balance of Credit Cards</th>
                <td><?php echo $row['h6']; ?></td>
              </tr>
              
              <tr>
                <th colspan="2">Total Credit Cards Limit</th>
                <td><?php echo $row['h7']; ?></td>
              </tr>
              
              <tr>
                <th colspan="2">Other Liabilities</th>
                <td><?php echo $row['h8']; ?></td>
              </tr>
              
              
              <tr>
                <th colspan="3"><h4>FIRST REFEREE - MUST RESIDE IN NEW ZEALAND</h4></th>
              </tr>
              
              <tr>
                <th colspan="2">Referee 1 - Name</th>
                <td><?php echo $row['i1']; ?></td>
              </tr>
              
              <tr>
                <th colspan="2">Address</th>
                <td><?php echo $row['i2']; ?></td>
              </tr>
              
              <tr>
                <th colspan="2">Phone/Mobile</th>
                <td><?php echo $row['i3']; ?></td>
              </tr>
              
              <tr>
                <th colspan="2">Their Relationship to you</th>
                <td><?php echo $row['i4']; ?></td>
              </tr>
              
              <tr>
                <th colspan="3"><h4>SECOND REFEREE - MUST RESIDE IN NEW ZEALAND</h4></th>
              </tr>
              
              <tr>
                <th colspan="2">Referee 2 - Name</th>
                <td><?php echo $row['j1']; ?></td>
              </tr>
              
              <tr>
                <th colspan="2">Phone/Mobile*</th>
                <td><?php echo $row['j2']; ?></td>
              </tr>
              
              <tr>
                <th colspan="2">Phone/Mobile*</th>
                <td><?php echo $row['j3']; ?></td>
              </tr>
              
              <tr>
                <th colspan="3"><h4>EXTRA COMMENTS / DETAILS</h4></th>
              </tr>
              
              <tr>
                <th colspan="2">Please provide details of known defaults</th>
                <td><?php echo $row['k1']; ?></td>
              </tr>
              
              <tr>
                <th colspan="2">Accept Terms & Conditions</th>
                <td><?php echo $row['k2']; ?></td>
              </tr>
              
              <tr>
                <th colspan="2">Date</th>
                <td><?php echo $row['date']; ?></td>
              </tr>
              
              
              
              <tr>
                <th colspan="2">IP Address</th>
                <td><?php echo $row['ip']; ?></td>
              </tr>
              <form action="applyUpdate.php?id=<?php echo $row['id']; ?>" method="post">
              <tr class="printnone">
                <th colspan="2">Status</th>
                <td><select name="status" class="form-control">
                      <option <?php if($row['status'] == 1) { ?> selected <?php } ?> value="1">Fresh</option>
                      <option <?php if($row['status'] == 2) { ?> selected <?php } ?> value="2">Processing</option>
                      <option <?php if($row['status'] == 3) { ?> selected <?php } ?> value="3">Complete</option>
				    </select>
				
                </td>
              </tr>
              
              
              <tr class="printnone">
                <th colspan="2">Notes</th>
                <td><textarea name="notes"><?php echo $row['notes']; ?></textarea></td>
              </tr>
              
             <tr class="printnone">
                <th colspan="2"><button type="submit" class="blue-btn">Update</button></th>
                <th><a href="javascript:void(0)" onClick="window.print();" class="blue-btn">Print</a></th>
              </tr>
             </form> 
              
             </table>
           </div>
      </div>   
		 
          
		  
        </div>
      </div>
    </div>
	
	<?php include 'footer.php' ?>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    
    <script src="js/bootstrap.min.js"></script>
    <script src="js/docs.min.js"></script>
  </body>
</html>

<?php } ?>
