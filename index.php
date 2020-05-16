<!--<!DOCTYPE html>-->
<html lang="en-US">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="UTF-8"/>
    <link rel="stylesheet" href="assets/bootstrap.css">
    <script src="assets/jquery.min.js"></script>
    <title>Blue Slip</title>
    <style>
        .registration_successful{
            display: none;
        }
    </style>
</head>

<body>
<div class="row justify-content-center">
    <div class="col-md-6">
        <div class="card mt-5">
            <div class="alert alert-success text-center registration_successful" role="alert">
               <b>Registration successful</b>
            </div>
            <div class="alert alert-danger text-center registration_failed d-none" role="alert">
                <b>Registration Failed</b>
            </div>
            <div class="card-header shadow-sm text-center">
                <h4>Reg Form</h4>
            </div>
            <div class="card-body shadow-sm">
                <form id="reg_form">
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="inputEmail4">First Name</label>
                            <input type="text" class="form-control" id="inputEmail4" name="first_name">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="inputPassword4">Last Name</label>
                            <input type="text" class="form-control" id="inputPassword4" name="last_name">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="inputEmail4">Age</label>
                            <input type="number" class="form-control" id="inputEmail4" name="age">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="inputEmail4">Email</label>
                            <input type="email" class="form-control" id="inputEmail4" name="email">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputAddress">Address</label>
                        <input type="text" class="form-control" id="inputAddress" name="address">
                    </div>

                    <legend
                    ">work Experience</legend>
                    <div id="multiple_work_experiences">

                        <div class="form-row" id="work_experience">
                            <div class="form-group col-md-4">
                                <label for="inputCity">Company Name</label>
                                <input type="text" class="form-control" id="inputCity" name="company_name[]">
                            </div>
                            <div class="form-group col-md-4">
                                <label for="inputCity">Role</label>
                                <input type="text" class="form-control" id="inputCity" name="role[]">
                            </div>

                            <div class="form-group col-md-3">
                                <label for="inputZip">Work Duration</label>
                                <input type="number" class="form-control" id="inputZip" name="work_duration[]">
                            </div>
                            <div class="form-group col-md-1">
                                <label for="inputZip">Add</label>
                                <div class="btn btn-dark add_more_work_exp">+</div>
                            </div>
                        </div>
                    </div>
                    <input type="submit" class="form-control btn btn-block btn-dark">
                </form>
            </div>
        </div>
    </div>
</div>


<script src="assets/submit_action.js"></script>

</body>

</html>
