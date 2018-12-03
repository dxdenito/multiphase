<?php
require('config.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Delta University Registration form</title>
    <link rel="stylesheet" href="style.css" type="text/css" />
    <script type="text/javascript" src="index.js"></script>
    <script type="text/javascript" src="back.js"></script>
    
    <script>
            function counti(){

            var county= document.getElementById("county").value;
            }
    </script>

</head>
<body id="regi">
        
    <div id="header">
        <a href="index.html">Registration Form</a>
    </div>
    <div id="intro">
        <p>fill all fields in the form below then submit.<br/>
        on succesfull selection you shall receive an email with an acceptance letter</p>
        
    </div>
    <div id="form">
        <center><h3>REGISTRATION FORM</h3></center>
        <form id="reg" onsubmit="return false">
            <div id="personal_details">
                    
                <p class="title">PERSONAL DETAILS</p>
                <hr>
                <input name="fname" id="fname" onkeydown="return keychar(event)" placeholder="First Name"/>
                <input name="lname" id="lname" onkeydown="return keychar(event)" placeholder="Middle Name" />
                <input name="sname" id="sname" onkeydown="return keychar(event)" placeholder="Sur Name" /><br>
                <select name="gender" id="gender">
                    <option value="">--select gender--</option>
                    <option value="male">MALE</option>
                    <option value="female">FEMALE</option>
                </select><br/>
               <label>Date of Birth:</label><br/><input type="date" id="dob" name="dob" placeholder="date of birth"/><br/>
               <input name="idno" id="idno" onkeydown="return keynum(event)" placeholder="national ID or passport number" /><br/>
               <input name="telephone" id="telephone" onkeydown="return keynum(event)" placeholder="Telephone number" /><br/>
               <input name="email" type="email" id="email" placeholder="your email ie...your-email@domain.com" /><br/>
               
                <button id="next" onclick="personal()">PROCEED -></button><br/>
            </div>

            <div id="location">
                <p class="title">LOCATION</p>
                <select name="country" id="country">
                        <option value="">--select country--</option>
                        <option value="kenya">KENYA</option>
                        <option value="uganda">UGANDA</option>
                </select><br/>
                <select name="county" id="county" onchange="counti()">
                        <option value="">--select county--</option>
                        <option value="mombasa">Mombasa</option>
                        <option value="garissa">Garissa</option>
                        <option value="kwale">Kwale</option>
                        <option value="kilifi">Kilifi</option>
                        <option value="tanariver">Tana River</option>
                        <option value="lamu">Lamu</option>
                        <option value="taitataveta">Taita Taveta</option>
                        <option value="wajir">Wajir</option>
                        <option value="mandera">Mandera</option>
                        <option value="marsabit">Marsabit</option>
                        <option value="tharakanithi">Tharaka Nithi</option>
                        <option value="kiambu">Kiambu</option>
                        <option value="nairobi">Nairobi</option>
                        
                        
                </select><br/>
                <select name="constituency" id="constituency">
                        <option value="">--select constituency--</option>
                        <?php
                        $sql="select constituency from counties";
                        $result = mysqli_query ( $con, $sql)  or trigger_error ( "SQL" , E_USER_ERROR );;
                        while ( $row = mysqli_fetch_assoc ( $result )) {
                        
                        ?>
                        <option value="<?php echo $row['constituency']; ?>"><?php echo $row['constituency']; ?></option>
                        <?php } ?>
                </select><br/>
                <select name="ward" id="ward">
                        <option value="">--select ward--</option>
                        <option value="mugutha">MUGUTHA</option>
                        <option value="luckysummer">LUCKYSUMMER</option>
                </select><br/>
                
                <button id="back" onclick="baddress()"><- PREVIOUS</button>
                <button id="next" onclick="address()">PROCEED-></button><br/>

            </div>

            <div id="parent">
                <p class="title">SPONSOR/PARENT/GUARDIAN/NEXT OF KIN</p>

                <input name="pfname" onkeydown="return keychar(event)" id="pfname" placeholder="Full Name"/><br/>
                <input name="pemail" type="email" id="pemail" placeholder="guardian/parent email ie... parent-email@domain.com" /><br/>
                <input name="ptelephone" id="ptelephone" onkeydown="return keynum(event)" placeholder="Telephone number" /><br/>
                <input name="paddress" id="paddress" placeholder="P.O Box" /><br/>
                <button id="back" onclick="bparent()"><- PREVIOUS</button>
                <button id="next" onclick="parent()">PROCEED-></button><br/>

            </div>
            <div id="course">
                <p class="title">COURSE DETAILS</p>
                <select name="campus" id="campus">
                        <option value="">--select CAMPUS--</option>
                        <option value="main">MAIN</option>
                        <option value="igembe">IGEMBE</option>
                </select><br/>
                <select name="course" id="program">
                        <option value="">--select course--</option>
                        <option value="APPLIED COMPUTER SCIENCE">APPLIED COMPUTER SCIENCE</option>
                        <option value="COMPUTER SCIENCE">COMPUTER SCIENCE</option>
                </select><br/>
                    <select name="session" id="session">
                            <option value="">--select session--</option>
                            <option value="sepdec">SEP/DEC</option>
                            <option value="janapril">JAN/APRIL</option>
                            <option value="mayaug">MAY/AUG</option>
                    </select><br/>
                    <button id="back" onclick="bprog()"><- PREVIOUS</button>
                    <button id="next" onclick="prog()">PROCEED-></button><br/>
            </div>

            <div id="academic">
                    <p>ACADEMIC QUALIFICATIONS</p>
                <input name="hschool" id="hschool" onkeydown="return keychar(event)" placeholder="High school attended"/><br/>
                <input type="text" id="yc" name="yc" onkeydown="return keynum(event)" placeholder="year completed ie 2015,2016.."><br/>
                <input type="text" id="schooladd" name="schooladd" placeholder="school address ie 961,ruiru.."><br/>
                <input name="grade" id="grade" onkeydown="return keychar(event)" placeholder="Grade scored ie A,A-,B+,..."/><br/>
                <button id="back" onclick="bacademic()"><- PREVIOUS</button>
                <button id="next" onclick="academic()">PROCEED-></button><br/>

            </div>
            <div id="final">
                <p class="title">REVIEW YOUR DETAILS</p>
                <table>
                <tr>
                    <th colspan="2">DETAILS</th>
                </tr>
                                <tr>
                    <td>FULL NAME</td><td id="fn"></td>
                </tr>
                
                <tr>
                        <td>GENDER</td><td id="gnd"></td>
                </tr>
                <tr>
                        <td>EMAIL</td><td id="em"></td>
                </tr>
                <tr>
                        <td>PHONE NUMBER</td><td id="phone"></td>
                </tr>
                <tr>
                        <td>DATE OF BIRTH</td><td id="db"></td>
                </tr>
                <tr>
                        <td>ID/PASSPORT NUMBER</td><td id="id"></td>
                </tr>
                <tr>
                        <td>COUNTRY</td><td id="country1"></td>
                </tr>
                <tr>
                        <td> COUNTY</td><td id="county1"></td>
                </tr>
                <tr>
                        <td> CONSTITUENCY</td><td id="const1"></td>
                </tr>
                <tr>
                        <td>WARD</td><td id="ward1"></td>
                </tr>
                <tr>
                        <td>GUARDIAN FULL NAME</td><td id="gfn"></td>
                </tr>
                
                <tr>
                        <td>GUARDIAN TELEPHONE NUMBER</td><td id="gphone"></td>
                </tr>
                <tr>
                        <td>GUARDIAN EMAIL ADDRESS</td><td id="gem"></td>
                </tr>
                <tr>
                        <td>GUARDIAN ADDRESS</td><td id="gadd"></td>
                </tr>
                <tr>
                        <td>CAMPUS</td><td id="camp"></td>
                </tr>
                <tr>
                        <td>COURSE</td><td id="prog"></td>
                </tr>
                <tr>
                        <td>SESSION</td><td id="sess"></td>
                </tr>
                <tr>
                        <td>HIGHSCHOOL</td><td id="hschool1"></td>
                </tr>
                <tr>
                        <td>YEAR OF COMPLETION</td><td id="yoc"></td>
                </tr>
                <tr>
                        <td>SCHOOL ADDRESS</td><td id="schadd"></td>
                </tr>
                <tr>
                        <td>GRADE</td><td id="grd"></td>
                </tr>
                

                </table>
               <p> By clicking SUBMIT you agree to the terms and conditions of Delta university.<a id="tca" onclick="tc()"> learn more</a></p>
                <div id="tc">
                        <p>
                                1.You confirm that the above information is correct.<br>
                                2.You understand that lying in the above information WILL lead to automatic disqualification or prosecution.<br>
                                3.You allow your email address to be used to communicate to you and send you regular news letters.<br>
                                4.You understand that Delta University is a free and fair institution hence no favours,corrupt or backdoor qualications.<br>

                        </p>
                </div>
                <button id="back" onclick="bfinal()"><- PREVIOUS</button>
                <button id="next" onclick="regsubmit()">SUBMIT-></button><br/>
                <a href="javascript:window.print()">print</a>
            </div>

            <div id="pbardiv">
            <progress id="pbar" value="0" max="100" style="width:300px; height:30px;"></progress>
            
             </div>

        </form>
        
    </div>
    
</body>
</html>