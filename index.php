<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="output.php">
    <title>registration form</title>
    <style>
        .btn{
            margin-top: 20px;
        }
        body{
            background-image: url(programming.png);
            background-repeat: no-repeat;
            background-attachment: fixed;
            background-size: cover;
            opacity:.50;

        }
        body:hover{
            opacity:100;

        }
    </style>
    
</head>
<body>
   <div class="container-fluid">
        <div class="row">
            <div class="col-md-4">
            </div>
            <div class="col-md-4 mb-2 card">
                <div class="card-header text-center bg-secondary">
                    <h5>Registration Form</h5>
                </div>
                <form method="post" action="output.php">
                <div>
                    <label for="FirstName">First Name:</label>
                    <input type="text" class="form-control" name="FirstName" placeholder="First Name" required>
                </div>
                <div>
                    <label for="LastName">Last Name:</label>
                    <input type="text" class="form-control" name="LastName" placeholder="Last Name" required>
                </div>
                <div>
                    <label for="MiddleName">Middle Name:</label>
                    <input type="text" class="form-control" name="MiddleName" placeholder="Middle Name" required>
                </div>
                <div>
                    <label for="Address">Address:</label>
                    <input type="text" class="form-control" name="Address" placeholder="Address" required>
                </div>
                <div>
                     <label for="PlaceOfBirth">Place of Birth:</label>
                    <input type="text" class="form-control" name="PlaceOfBirth" placeholder="Address" required>
                </div>
                <div>
                    <label for="Dateofbirth">Date of Birth:</label>
                    <input type="date" class="form-control" name="Dateofbirth" placeholder="" required>
                </div>
                <div>
                    <label for="Gender">Gender:</label>
                </div>
                <div>
                    <label><input type="radio" name="Gender">Male</label> 
                    
                </div>
                <div>
                    <label><input type="radio" name="Gender">Female</label>
                </div>
                
                <div>
                     <label for="guardian">Guardian:</label>
                    <input type="text" class="form-control" name="guardian" placeholder="Name of Guardian" required>
                </div>
                <div>
                     <label for="contact">Contact Number:</label>
                    <input type="text" class="form-control" name="contact" placeholder="Your Number" required>
                </div>
                <div>
                     <label for="civil">Civil Status:</label>
                    <input type="text" class="form-control" name="civil" placeholder="Civil Status" required>
                </div>
                <div class="form-group">
                    <label for="course">Course:</label>
                        <select class="form-control" id="sel1" name="course">
                            <option value="it">BS Information Technology</option>
                            <option value="cpe">BS Computer Engineering</option>
                            <option value="ce">BS Civil Engineering</option>
                            <option value="data">BS Data Science</option>
                        </select>
                </div>
                <div class="form-group">
                    <label for="Year">Year:</label>
                        <select class="form-control" id="sel1" name="Year">
                            <option value="1st">First Year</option>
                            <option value="2nd">Second Year</option>
                            <option value="3rd">Third Year</option>
                            <option value="4th">Fourth Year</option>
                            <option value="5th">Fifth Year</option>
                        </select>
                </div>
                <div>
                     <label for="syyear">School Year:</label>
                    <input type="text" class="form-control" name="syyear" placeholder="YYYY-YYYY" required>
                </div>
                <div>
                     <label for="email">Email:</label>
                    <input type="email" class="form-control" name="email" placeholder="example@gmail.com" required>
                </div>
                <br>
                <div>
                    <a href="output.php"><input type="submit" class="btn-primary"></a>
                </div>

                </form>


                
            </div> 
        </div>     
   </div>
</body>
</html>