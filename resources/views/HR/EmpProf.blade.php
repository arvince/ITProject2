<!DOCTYPE html>
<html>
<head>
      <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Human Resource Information System</title>
	<!-- BOOTSTRAP STYLES-->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
     <!-- FONTAWESOME STYLES-->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
     <!-- MORRIS CHART STYLES-->
   
        <!-- CUSTOM STYLES-->
    <link href="assets/css/custom.css" rel="stylesheet" />
     <!-- TABLE STYLES-->
    <link href="assets/js/dataTables/dataTables.bootstrap.css" rel="stylesheet" />
</head>
<body>
    <div id="wrapper">
        <nav class="navbar navbar-default navbar-cls-top " role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="indexHR">Human Resource</a> 
            </div>
  <div style="color: white;
padding: 15px 50px 5px 50px;
float: right;
font-size: 16px;"> Last access : 30 May 2014 &nbsp; <a href="#" class="btn btn-danger square-btn-adjust">Logout</a> </div>
        </nav>   
           <!-- /. NAV TOP  -->
                <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">
				<li class="text-center">
                    <img src="assets/img/find_user.png" class="user-image img-responsive"/>
					</li>
				
					
                    <li>
                        <a   href="indexHR"><i class="fa fa-dashboard fa-3x"></i> Dashboard</a>
                    </li>
                     <li>
                        <a  href="PendingLeaves"><i class="fa fa-file-text fa-3x"></i> Pending Leaves</a>
                    </li>
                    <li>
                        <a  href="RandF"><i class="fa fa-qrcode fa-3x"></i> Reports and Forms </a>
                    </li>
                      <li  >
                        <a class="active-menu" href="Employees"><i class="fa  fa-users fa-3x"></i> Employees</a>
                    </li>		  
                  <li  >
                        <a  href="blank.html"><i class="fa fa-square-o fa-3x"></i> Blank Page</a>
                    </li>	
                </ul>
               
            </div>
            
        </nav>  
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper" >
            <div id="page-inner">
            
        <div id="paper">
      <div class="paper-top"></div>
      <div id="paper-mid">
        <div class="entry">
          <!-- Begin Personal Information -->
          <div id="self">
              <center><h3 class="name">Manilyn Monroe</h3></center>
              <br>
          </div>
            <div class="col-md-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Personal Datasheet
                        </div>
                        <div class="panel-body">
                            <ul class="nav nav-tabs">
                                <li class="active"><a href="#page1" data-toggle="tab">page1</a>
                                </li>
                                <li class=""><a href="#page2" data-toggle="tab">page2</a>
                                </li>
                                <li class=""><a href="#page3" data-toggle="tab">page3</a>
                                </li>
                                <li class=""><a href="#page4" data-toggle="tab">page4</a>
                                </li>
                            </ul>

                            <div class="tab-content">
                                <div class="tab-pane fade active in" id="page1">
                                    <h4>Personal Information</h4>
                                    <table>
                                    <tr>
                                    <td>Address</td>
                                    <td>Date of Birth</td>
                                    <td>Place of Birth</td>
                                    <tr>
                                    <td>Sex</td>
                                    <td>Civil Status</td>
                                    <td>Citizenship</td>
                                    </tr>
                                    <tr>
                                    <td>Height</td>
                                    <td>Weight</td>
                                    <td>Blood Type</td>
                                    </tr>
                                    <tr>
                                    <td>Telephone Number</td>
                                    <td>Mobile Number</td>
                                    <td>Email</td>
                                        </tr>
                                    </table>
                                     <h4>Family Background</h4>
                                    <table>
                                        <tr>
                                        <th></th>
                                        <th>Date of Birth</th>
                                        <th>Name of Children</th>
                                        </tr>
                                    <tr>
                                        <td>Spouse's Name</td>
                                        <td></td>
                                        <td></td>
                                        </tr>
                                        <tr>
                                    <td>Occupation</td>
                                        <td></td>
                                        <td></td>
                                        </tr>
                                        <tr>    
                                    <td>Date of Birth</td>
                                                 <td></td>
                                        <td></td>
                                        </tr>
                                    <tr>
                                    <td>Employer/BusinessName</td>
                                             <td></td>
                                        <td></td>
                                        </tr>
                                        <tr>
                                    <td>Business Address</td>
                                                 <td></td>
                                        <td></td>
                                        </tr>
                                        <tr>
                                    <td>Telephone Number</td>
                                                 <td></td>
                                        <td></td>
                                        </tr>
                                    <tr>
                                    <td>Father's Name</td>
                                             <td></td>
                                        <td></td>
                                        </tr>
                                    <tr>
                                    <td>Mother's Name</td>
                                             <td></td>
                                        <td></td>
                                        </tr>
                                    </table>
                                    <h4>Educational Background</h4>
                                    <table>
                                    <tr>
                                        <th>LEVEL</th>
                                        <th>NAME OF SCHOOL</th>
                                        <th>BASIC EDUCATION/DEGREE COURSE</th>
                                        <th>PERIOD OF ATTENDANCE</th>
                                        <th>HIGHEST LEVEL/ UNITS EARNED</th>
                                        <th>YEAR GRADUATED</th>
                                        <th>SCHOLARSHIP/ACADEMIC HONORS RECEIVED</th>
                                        </tr>
                                        <tr>
                                        <td>Elementary</td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        </tr>
                                        <tr>
                                        <td>Secondary</td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <tr>
                                        <td>Vocational/Trade Course</td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        </tr>
                                        <tr>
                                        <td>College</td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        </tr>
                                        <tr>
                                        <td>Graduate Studies</td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        </tr>
                                    </table>

                                </div>
                                <div class="tab-pane fade" id="page2">
                                    <h4>Civil Service Eligibility</h4>
                                    <table>
                                        <tr>
                                        <th>CAREER SERVICE</th>
                                        <th>RATING</th>
                                        <th>DATE OF EXAMINATION</th>
                                        <th>PLACE OF EXAMINATION</th>
                                        <th>LICENSE IF APPLICABLE</th>
                                        </tr>
                                    <tr>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        </tr>
                                        <tr>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                        <tr>    
                                    <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                    <tr>
                                    <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        </tr>
                                        <tr>
                                    <td></td>
                                        <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                    <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                    <tr>
                                    <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        </tr>
                                    <tr>
                                    <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        </tr>
                                    </table>
                                    
                                    <h4>Work Experience</h4>
                                    <table>
                                        <tr>
                                        <th>INCLUSIVE DATES</th>
                                        <th>POSITION TITLE</th>
                                        <th>DEPARTMENT/AGENCIES/OFFICE/COMPANY</th>
                                        <th>MONTHLY SALARY</th>
                                        <th>SALARY JOB PAY GRADE</th>
                                        <th>STATUS OF APPOINTMENT</th>
                                        <th>GOVERNMENT SERVICE</th>
                                        </tr>
                                    <tr>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        </tr>
                                        <tr>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                        <td></td>
                                        </tr>
                                        <tr>    
                                    <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                        <td></td>
                                        </tr>
                                    <tr>
                                    <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        </tr>
                                        <tr>
                                    <td></td>
                                        <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                        <td></td>
                                        </tr>
                                        <tr>
                                    <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                        <td></td>
                                        </tr>
                                    <tr>
                                    <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        </tr>
                                    <tr>
                                    <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        </tr>
                                    <tr>
                                        <td>Signature</td>
                                        <td></td>
                                        <td>Dates</td>
                                        <td></td>
                                        <td>CS FORM212(Revised 2018)</td>
                                        <td></td>
                                        <td></td>
                                        </tr>
                                    </table>
                                </div>
                                <div class="tab-pane fade" id="page3">
                                     <h4>VOLUNTARY WORK OR INVOLVEMENT IN CIVIC/ NON GOVERNMENT/PEOPLE/VOLUNTARY ORGANIZATION</h4>
                                    <table>
                                        <tr>
                                        <th>Name & Address of Organization</th>
                                        <th>INCLUSIVE DATES</th>
                                        <th>Number of Hours</th>
                                        <th>Position</th>
                                        </tr>
                                    <tr>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                        
                                        </tr>
                                        <tr>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                            <td></td>
                                     
                                          
                                        </tr>
                                        <tr>    
                                    <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                           
                                        
                                        </tr>
                                    <tr>
                                    <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                  
                                
                                        </tr>
                                        <tr>
                                    <td></td>
                                        <td></td>
                                            <td></td>
                                            <td></td>
                                    
                                
                                        </tr>
                                        <tr>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                    <tr>
                                    <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        </tr>
                                    </table>
                                     <h4>VOLUNTARY WORK OR INVOLVEMENT IN CIVIC/ NON GOVERNMENT/PEOPLE/VOLUNTARY ORGANIZATION</h4>
                                    <table>
                                        <tr>
                                        <th>Name & Address of Organization</th>
                                        <th>INCLUSIVE DATES</th>
                                        <th>Number of Hours</th>
                                        <th>Position</th>
                                        </tr>
                                    <tr>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                        
                                        </tr>
                                        <tr>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                            <td></td>
                                     
                                          
                                        </tr>
                                        <tr>    
                                    <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                           
                                        
                                        </tr>
                                    <tr>
                                    <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                  
                                
                                        </tr>
                                        <tr>
                                    <td></td>
                                        <td></td>
                                            <td></td>
                                            <td></td>
                                    
                                
                                        </tr>
                                        <tr>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                    <tr>
                                    <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        </tr>
                                    </table>
                                     <h4>LEARNING AND DEVELOPMENT(L&O) INTERVENTIONS/TRAINING PROGRAMS ATTENDED</h4>
                                    <table>
                                        <tr>
                                        <th>Title Of Learning and Development Interventions/Training Programs</th>
                                        <th>INCLUSIVE DATES Of Attendance</th>
                                        <th>Number of Hours</th>
                                        <th>Type of I.D</th>
                                        <th>Conducted/Sponsored by:</th>
                                        </tr>
                                    <tr>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                        
                                        </tr>
                                        <tr>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                            <td></td>
                                            <td></td>
                                     
                                          
                                        </tr>
                                        <tr>    
                                    <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                           
                                        
                                        </tr>
                                    <tr>
                                    <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                  
                                
                                        </tr>
                                        <tr>
                                    <td></td>
                                        <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                    
                                
                                        </tr>
                                        <tr>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                    <tr>
                                    <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        </tr>
                                    </table>
                                     <h4>OTHER INFORMATION</h4>
                                    <table>
                                        <tr>
                                        <th>Special Skills and Hobbies</th>
                                        <th>Non-Academic Distinctions/Recognition</th>
                                        <th>Membership in association/organization</th>
                                        </tr>
                                    <tr>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                
                        
                                        </tr>
                                        <tr>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                         
                                     
                                          
                                        </tr>
                                        <tr>    
                                    <td></td>
                                            <td></td>
                                            <td></td>
                                   
                           
                                        
                                        </tr>
                                    <tr>
                                    <td></td>
                                        <td></td>
                                        <td></td>
                                 
                                
                                        </tr>
                                        <tr>
                                    <td></td>
                                        <td></td>
                                            <td></td>
                                     
                                    
                                
                                        </tr>
                                        <tr>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                
                                        </tr>
                                    <tr>
                                    <td></td>
                                        <td></td>
                                        <td></td>
                                        </tr>
                                    </table>
                                </div>
                                <div class="tab-pane fade" id="page4">
                                    <h4>Settings Tab</h4>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
          <!-- End Personal Information -->
        </div>
        </div>
      </div>
            
        </div>
               
    </div>
             <!-- /. PAGE INNER  -->
            </div>
         <!-- /. PAGE WRAPPER  -->
     <!-- /. WRAPPER  -->
    <!-- SCRIPTS -AT THE BOTOM TO REDUCE THE LOAD TIME-->
    <!-- JQUERY SCRIPTS -->
    <script src="assets/js/jquery-1.10.2.js"></script>
      <!-- BOOTSTRAP SCRIPTS -->
    <script src="assets/js/bootstrap.min.js"></script>
    <!-- METISMENU SCRIPTS -->
    <script src="assets/js/jquery.metisMenu.js"></script>
     <!-- DATA TABLE SCRIPTS -->
    <script src="assets/js/dataTables/jquery.dataTables.js"></script>
    <script src="assets/js/dataTables/dataTables.bootstrap.js"></script>
        <script>
            $(document).ready(function () {
                $('#dataTables-example').dataTable();
            });
    </script>
         <!-- CUSTOM SCRIPTS -->
    <script src="assets/js/custom.js"></script>
    
   
</body>
</html>
