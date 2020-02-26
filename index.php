<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <title>Document</title>
    <style>
    div{
        border: 2px pink;
        
    }
    .me{
        background-color: aquamarine;
        opacity: .80;
        border-radius: 10px;
    }
    body{
        background-image: url(nature.jpg);
        background-repeat: no-repeat;
        background-attachment: fixed;
        background-size: cover;
        opacity: .90;
        
    }
    .you{
        border-radius: 10px;
    }
    .card-header{
        border-radius: 10px;
    }
    
    </style>
</head>
<body>
<div class="container-fluid">
    <div class="row">
        <div class="col-md-4"></div>
        <div class="col-md-4  mt-5 me">
            <div class="card-header text-warning bg-secondary text-white bg-sample text-center ">
                <h4 class="text-warning bg-secondary">REGISTRATION FORM</h4>
            </div>
            <p>Please fill up the form</p>
            <hr class="mb-4">
            <form action="output.php" method="post">
                <label for="firstname"  ><b>First Name</b></label>
                    <div class="col-md-12 mb-2">
                        <input type="text" name="firstname" class="form-control" placeholder="First Name" required>
                    </div>
                <label for="lastname"><b>Last Name</b></label>
                    <div class="col-md-12 mb-2">
                        <input type="text" name="lastname" class="form-control" placeholder="Last Name" required>
                    </div>
                <label for="middlename"><b>Middle Name</b></label>
                    <div class="col-md-12 mb-2">
                        <input type="text" name="middlename" class="form-control" placeholder="Middle Name" required>
                    </div>
                <label for="address"><b>Address</b></label>
                    <div class="col-md-12 mb-2">
                        <input type="text" name="address" class="form-control" placeholder="Complete Address" required>
                    </div>
                <label for="guardian"><b>Guardian</b></label>
                    <div class="col-md-12 mb-2">
                        <input type="text" name="guardian" class="form-control" placeholder="Guardian" required>
                    </div>
                 <label for="email"><b>Email</b></label>
                    <div class="col-md-12 mb-2">
                        <input type="email" name="email" class="form-control" placeholder="Email Address e.g amigas@gmail.com " required>
                    </div>
                <label for="POB"><b>Place of Birth</b></label>
                    <div class="col-md-12 mb-2">
                        <input type="text" name="POB" class="form-control" placeholder="Brgy,City,Country" required>
                    </div>
                <div class="row">
                        <div class="col-md-6">   
                <label for="DOB"><b>Date of Birth</b></label>
                    <div class="col-md-12 mb-2">
                        <input type="date" name="DOB" class="form-control" placeholder="mm/dd/yyyy" required>
                    </div>
                    </div>
                <div class="col-md-6">
                <label for="contact"><b>Contact Number</b></label>
                    <div class="col-md-12 mb-2">
                        <input type="text" name="contactnumber" class="form-control" placeholder="e.g +63*******" required>
                    </div>
                 </div>
                </div>
                <label for="gender"><b>Gender</b></label>
                <div class=form-inline>
                    <div class="col-md-12 mb-2">
                        <input type="radio" name="gender" class="form-control" placeholder="Male" value="male" required>Male
                        <input type="radio" name="gender" class="form-control" placeholder="Female" value="female" required>Female
                    </div>
                 </div>
                 <hr class="mb-4">
                 
                    <div class="row">
                        <div class="col-md-6">
                        <label for="civilstatus"><b>Civil Status</b></label>
                            <div class="col-md-12 mb-2">
                                <input type="text" name="civilstatus" class="form-control" placeholder="Civil Status" required>
                            </div>
                        </div>
                        <div class="col-md-6">
                        <label for="yearlabel"><b>Year Level</b></label>
                        <div class="col-md-12 mb-2">
                            <select name="yearlabel" id="yearlabel">
                                <option value="firstyear" selected>First Year</option>
                                <option value="secondyear" >Second Year</option>
                                <option value="thirdyear" >Third Year</option>
                                <option value="fourthyear" >Fourth Year</option>
                            </select>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                        <label for="schoolyear"><b>School Year</b></label>
                            <div class="col-md-12 mb-2">
                                <input type="text" name="schoolyear" class="form-control" placeholder="e.g 2019-2020" required>
                            </div>   
                        </div>
                        <div class="col-md-6">
                        <label for="course"><b>Course</b></label>
                        <div class="col-md-12 mb-2">
                            <select name="course" id="course">
                                <option value="Computer Engineering" selected>CPE</option>
                                <option value="Information Technology" >IT</option>
                                <option value="Data Science" >DS</option>
                                <option value="Technology Communication Management" >TCM</option>
                            </select>
                            </div>
                        </div>
                    </div>
                        
                    <div class="you">
                    <button type="submit" class="btn btn-success">SUBMIT
                    </button>
                    </div>
                
                
            
            </form>
        </div>
        <div class="col-md-4.+6"></div>
    
    </div>
</div>
    
</body>
</html>