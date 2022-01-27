<!DOCType html>
<html>
 <head>
    <link rel="stylesheet" href="App.css">
    <!-- <link rel="stylesheet" href="main.css">
    <link rel="stylesheet" href="normalize.css"> -->

    <title>HealthCard</title>
    <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"></script>

<!-- Popper JS -->
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>

<script>
  function showAge(){
    console.log("Starting");
    var getDate = document.getElementById('setdob').value;
    var getDOBYear = (new Date(getDate)).getFullYear();

    var currentDate = new Date();
    var yyyy = currentDate.getFullYear();

    var getage = yyyy - getDOBYear;

    var calc_Age = yyyy - new Date(getDate);
    
    console.log("Ending");
    var ageInputField = document.getElementById('putagehere').value = getage + " years";
    
  }
</script>

</head>
<body class="App">
    
    
<form action="response.php" method="post" class="form-check">

    <table border ='1'>
      <thead>
          <tr>
            <td colspan='4'><h1>Health Card</h1></td>
          </tr>
      </thead>
        
      <tbody>
        
        <!-- Aadhar number -->
        <tr>
        <td><label for = "aadhar"> Aadhar Number:</label></td>
          <td colspan='3'> <input type = 'number' class="form-control" name="aadhar" ></input></td>
        </tr>

        <!-- Name -->
        <tr>
          <td><label for ="patientName"> Patient's Name:</label></td>
          <td colspan='3'><input type = 'text' class="form-control" name="patientName"></input></td>
        </tr>

        <!-- Address -->
        <tr>
          <td><label for ="address"> Address:</label></td>
          <td colspan='3'><input type = 'text' class="form-control" name="address" ></input></td>
        </tr>

        <!-- DOB -->
        <tr>
         
          <td><label for='d_o_b'>Date of Birth: </label></td>
          <td colspan='3'><input type='date' class="form-control"  onchange="showAge()" id='setdob' value='d_o_b' name='d_o_b'></td>
        </tr>
        <!-- Age -->
        <tr>
          <td><label for = "age"> Age:</label></td>
          <td colspan='3'> <input type = 'text' class="form-control" id='putagehere' name="putagehere" disabled></input></td>
        </tr>

        <!-- Gender -->
        <tr>
          <td><label for ="sex"> Sex:</label></td>
          <td colspan='3'>
              <label class="form-check-label"><input type = 'radio' class="form-control" value = 'male' name = "sex" ></input>Male</label>
              <label class="form-check-label"><input type = 'radio' class="form-control" value = 'female' name = "sex" ></input>Female</label>
              <label class="form-check-label"><input type = 'radio' class="form-control" value = 'others' name = "sex" ></input>Others</label>
          </td>
        </tr>

        <!-- Weight at birth -->
        <tr>
          <td><label for ="weightAtBirth"> Weight (at birth):</label></td>
          <td colspan='3'><input type = 'number' class="form-control" name="weightAtBirth"></input></td>
        </tr>

        <!-- Diagnosis -->
        <tr>
          <td><label for="diagnosis"> Diagnosis:</label></td>
          <td colspan='3'><input type = 'text' class="form-control" name = "diagnosis" ></input></td>
        </tr>
        
        <!-- Date of admission -->
        <tr>
          <td><label for= "dateOfAdmission" > Date of Admission:</label></td>
          <td ><input type = 'date' class="form-control" name = "dateOfAdmission" ></input></td>
          <td><label for= "weightAdmission"> Wt. (in Kg.s):</label></td>
          <td ><input type = 'decimal' class="form-control" name = "weightAdmission" ></input></td>
        </tr>

        <!-- Date of discharge -->
        <tr>
          <td><label for="dateofDischarge" > Date of Discharge:</label></td>
          <td ><input type = 'date' class="form-control" name = "dateofDischarge" ></input></td>
          <td><label for =  "weightDischarge" > Wt. (in Kg.s):</label></td>
          <td ><input type = 'decimal' class="form-control" name = "weightDischarge" ></input></td>
        </tr>
 
      </tbody>

      <tfoot>
        <!--Submit button -->
        <tr>
           <td colspan='4'>
            <button type="submit" name="submit" class='btn btn-primary p-4'>Submit</button>
           </td>
        </tr>
      </tfoot>
       
    </table>
  </form>
  
   
   </body>
</html>