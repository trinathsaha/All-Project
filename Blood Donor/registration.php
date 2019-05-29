

<!-- develoved by trinath Saha -->
<?php include('loginconnect.php'); ?>
<html>

<head><script LANGUAGE="JavaScript">
function butCheckForm_onclick()
{
   var myForm = document.form1;
   if (myForm.age.value == "" || myForm.uname.value
== "" || myForm.subdiv.value == "Sub-Division" || myForm.add.value == "" || myForm.bg.value == "Select Group" )
   {
      
      if (myForm.uname.value == "")
      {
        alert("Please enter your name");
         myForm.uname.focus();
        
      }
    else
    {
    if (myForm.age.value == "")
      {
       alert("Please enter your Age");
         myForm.age.focus();
      }
      else
      {
      if (myForm.add.value == "")
      
      {
         alert("Please enter your Address");
         myForm.add.focus();
      }
      else
      {
       if (myForm.bg.value == "Select Group")
      
      {
         alert("Please select your Blood group");
         myForm.bg.focus();
      }
      else
         {
         alert("Please select your sub division");
         myForm.subdiv.focus();
         }
      }
      }
      }
   }
   else
   {
      alert("Thanks for completing the form ");
     myForm.submit();
   }
}
function txtAge_onblur()
{
   var txtAge = document.form1.age;
   if (isNaN(txtAge.value) == true)
   {
      alert("Please enter a valid age");
      txtAge.focus();
      txtAge.select();
   }
   
   else
   {
      if (txtAge.value < 18)
   {
      alert("Age can not be less then 18");
      txtAge.focus();
      txtAge.select();
   }
   else
   {
         if (txtAge.value > 60)
   {
      alert("Age can not be greater then 60");
      txtAge.focus();
      txtAge.select();
   }
   }
   
   }
}

</script>

<title> BLOOD DONOR REGISTRATION FORM</title>
</head>

<body>


<table border="0" cellpadding="0" cellspacing="0" width="99%" height="36">
  <tr>
    <td width="100%" height="36"><p align="center"><img src="bdonlog.jpg" width="511"
    height="65"></td>
  </tr>
</table>

<table width="753" height="1">
  <tr>
    <td width="749" height="1"><p align="left"><strong><font face="Verdana, Arial, Helvetica"
    size="2">All Fields marked with </font><font color="#ff0000" size="4"
    face="Verdana, Arial, Helvetica">*</font><font face="Verdana, Arial, Helvetica" size="2">
    are required</font><a href="welcome.asp"><img src="hm.jpg" width="41" height="18"
    style="border: medium none rgb(255,255,255)" align="right"></a></strong></td>
  </tr>
</table>
<?php include('errors.php'); ?>

<form action="registration.php" method="post">
  <table width="754" height="6">
    
<TBODY>
    <tr>
      <td width="295" align="left" bgcolor="#BFF2EB" height="19"><font color="#004000">*</font>Name:</td>
      <td width="319" height="19"><input maxlength="50" name="name" size="50&lt;/TD"
      tabindex="1" value -"<?php echo $name; ?>"> </td>
      <td width="121" align="left" bgcolor="#BFF2EB" height="19"><font color="#004000">*</font>Age:</td>
      <td width="160" colspan="6" height="19"><input TYPE="text" name="age"
      onblur="txtAge_onblur()" SIZE="3" MAXLENGTH="3" value -"<?php echo $age; ?>"></td>
    </tr>
    <tr>
      <td width="295" align="left" bgcolor="#BFF2EB" height="26"><font color="#004000">*</font>Address:</td>
      <td width="319" height="26"><input maxlength="150" name="address" size="50&lt;/TD"
      tabindex="3"> </td>
      <td width="121" align="left" bgcolor="#BFF2EB" height="26"><font color="#004000">*</font>Sex</td>
      <td width="160" colspan="6" height="26"><select name="sex" size="1" tabindex="4">
        <option selected value="Male">Male</option>
        <option value="Female">Female</option>
      </select> </td>
    </tr>
    <tr>
      <td width="295" align="left" bgcolor="#BFF2EB" height="1">Occupation:</td>
      <td width="319" height="1"><input maxLength="50" name="ocu" size="33" tabindex="5"> </td>
      <td width="121" align="left" bgcolor="#BFF2EB" height="1"><font color="#004000">*</font>Sub-Division:</td>
      <td width="160" colspan="6" height="1"><select name="subdiv" size="1" tabindex="6" value -"<?php echo $subdiv; ?>">
        <option selected value="Sub-Division">Sub-Division </option>
        <option value="KAILASHAHAR"> KAILASHAHAR </option>
        <option value="DHARMANAGAR"> DHARMANAGAR </option>
        <option value="KANCHANPUR"> KANCHANPUR </option>
        <option value="AMARPUR"> AMARPUR </option>
        <option value="AMBASSA"> AMBASSA </option>
        <option value="BELONIA"> BELONIA </option>
        <option value="BISHALGARH"> BISHALGARH </option>
        <option value="GANDACHARRA"> GANDACHARRA </option>
        <option value="KAMALPUR"> KAMALPUR </option>
        <option value="KHOWAI"> KHOWAI </option>
        <option value="LONGTHORAI VALLEY"> LONGTHORAI VALLEY </option>
        <option value="SABROOM"> SABROOM </option>
        <option value="SADAR"> SADAR </option>
        <option value="SONAMURA"> SONAMURA </option>
        <option value="UDAIPUR"> UDAIPUR </option>
        <option value="OTHERS"> OTHERS</option>
      </select> </td>
    </tr>
    <tr>
      <td width="295" align="left" bgcolor="#BFF2EB" height="26">Block/ NP:</td>
      <td width="319" height="26"><select name="block" size="1" tabindex="6">
        <option selected value="Select Block">Select Block  </option>
        <option value="DAMCHERRA"> DAMCHERRA </option>
        <option value="DASDA"> DASDA </option>
        <option value="GOURNAGAR"> GOURNAGAR </option>
        <option value="JAMPUI HILL"> JAMPUI HILL </option>
        <option value="KADAMTALA"> KADAMTALA </option>
        <option value="KUMARGHAT"> KUMARGHAT </option>
        <option value="PANISAGAR"> PANISAGAR </option>
        <option value="PECHARTHAL"> PECHARTHAL </option>
        <option value="SALEMA"> SALEMA </option>
        <option value="AMBASSA"> AMBASSA </option>
        <option value="DUMBURNAGAR"> DUMBURNAGAR </option>
        <option value="MANU"> MANU </option>
        <option value="CHAWMANU"> CHAWMANU </option>
        <option value="TELIAMURA"> TELIAMURA </option>
        <option value="KHOWAI"> KHOWAI </option>
        <option value="TULASIKAR"> TULASIKAR </option>
        <option value="JIRANIA"> JIRANIA </option>
        <option value="MOHANPUR"> MOHANPUR </option>
        <option value="DUKLI"> DUKLI </option>
        <option value="MELAGHAR"> MELAGHAR </option>
        <option value="MATABARI"> MATABARI </option>
        <option value="AMARPUR"> AMARPUR </option>
        <option value="BAGAFA"> BAGAFA </option>
        <option value="HRISHYAMUKH"> HRISHYAMUKH </option>
        <option value="KAKRABAN"> KAKRABAN </option>
        <option value="KARBOOK"> KARBOOK </option>
        <option value="KILLA"> KILLA </option>
        <option value="RAJNAGAR"> RAJNAGAR </option>
        <option value="RUPAICHARI"> RUPAICHARI </option>
        <option value="SATCHAND"> SATCHAND </option>
        <option value="BISHALGARH"> BISHALGARH </option>
        <option value="BOXNAGAR"> BOXNAGAR </option>
        <option value="HEZAMARA"> HEZAMARA </option>
        <option value="JAMPUIJALA"> JAMPUIJALA </option>
        <option value="KALAYANPUR"> KALAYANPUR </option>
        <option value="KATHALIA"> KATHALIA </option>
        <option value="MANDAI"> MANDAI </option>
        <option value="MUNGIAKAMI"> MUNGIAKAMI </option>
        <option value="OMPI"> OMPI </option>
        <option value="PADMABIL"> PADMABIL </option>
        <option value="OTHERS"> OTHERS</option>
      </select> </td>
      <td width="121" align="left" height="26"></td>
      
       <td width="121" align="left" bgcolor="#BFF2EB" height="25">*Password:</td>
      <td width="160" colspan="6" height="25"><div align="left"><p><input maxLength="30"
      name="password" size="18" type="password" tabindex="10"> </td>
    
    </tr>
    <tr>
      <td width="295" align="left" bgcolor="#BFF2EB" height="8">PO:</td>
      <td width="319" height="8"><div align="left"><p><input maxlength="20" name="po"
      size="50&lt;/TD" tabindex="8"></td>
    </tr>
    <tr align="center">
      <td width="295" bgcolor="#BFF2EB" height="25"><div align="left"><p>Telephone No.:</td>
      <td width="319" height="25"><div align="left"><p><input maxlength="18" name="phone"
      size="30" tabindex="9"></td>
      <td width="121" align="left" bgcolor="#BFF2EB" height="25">E-mail:</td>
      <td width="160" colspan="6" height="25"><div align="left"><p><input maxLength="30"
      name="email" size="18" tabindex="10"> </td>
    </tr>
    <tr align="center">
      <td colspan="9" width="669" align="left" height="8"><strong>Nearest</strong></td>
    </tr>
    <tr align="center">
      <td width="295" bgcolor="#BFF2EB" align="left" height="24">Known Reputed Person:</td>
      <td width="319" height="24"><div align="left"><p><input maxlength="50" name="n_person"
      size="50&lt;/TD" tabindex="11"></td>
      <td width="121" align="left" bgcolor="#BFF2EB" height="24">Telephone No.:</td>
      <td width="160" colspan="6" height="24"><div align="left"><p><input maxlength="18"
      name="n_phone" size="19" tabindex="12"></td>
    </tr>
    <tr align="center">
      <td width="295" bgcolor="#BFF2EB" align="left" height="1"><font color="#004000">*</font>Your
      Blood Group:</td>
      <td width="319" height="1"><div align="left"><p><select name="bg" size="1">
        <option selected value="Select Group" tabindex="13">Select Group</option>
        <option value="A+">A+</option>
        <option value="A-">A-</option>
        <option value="B+">B+</option>
        <option value="B-">B-</option>
        <option value="AB+">AB+</option>
        <option value="AB-">AB-</option>
        <option value="O+">O+</option>
        <option value="O-">O-</option>
      </select></td>
      <td width="121" align="left" bgcolor="#BFF2EB" height="1">Last Donated: (dd/mm/yyyy)</td>
      <td width="37" height="1" valign="middle" align="center"><div align="center"><center><p><select
      name="last_don_d" size="1" tabindex="14"><input type="date" name="last_don_d">

      <td width="63" height="1" align="center" valign="middle"></td>
    </tr>
    <tr align="center">
      <td width="832" align="left" height="8" colspan="9"><div align="center"><center><p><button
      type="submit" name="signup" onclick="butCheckForm_onclick()"> Registration </button></td>
    </tr>
</TBODY>
  </table>
</form>

</body>
</html>
