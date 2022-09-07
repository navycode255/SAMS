<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!----======== CSS ======== -->
    @vite(['resources/css/main.css', 'resources/js/script.js'])
     
    <!----===== Iconscout CSS ===== -->
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">

    <title>Responsive Regisration Form </title> 
</head>
<body>
    <div class="container">
        <header>Registration</header>
    <!---======= Page 1=======--->
        <form action="#">
            <div class="form second">
                <div class="details personal">
                    <span class="title">Personal Details</span>

                    <div class="fields">
                        <div class="input-field">
                            <label>First Name</label>
                            <input type="text" placeholder="Enter first name" required>
                        </div>

                        <div class="input-field">
                            <label>Middle Name</label>
                            <input type="text" placeholder="Enter middle name" required>
                        </div>

                        <div class="input-field">
                            <label>Last Name</label>
                            <input type="text" placeholder="Enter last name" required>
                        </div>

                        <div class="input-field">
                            <label>Mobile Number</label>
                            <input type="tel" placeholder="Enter mobile number" pattern="[0-9]{3}[0-9]{7}" required>
                        </div>

                        <div class="input-field">
                            <label>Gender</label>
                            <select required>
                                <option disabled selected>Select gender</option>
                                <option>Male</option>
                                <option>Female</option>
                                <option>Others</option>
                            </select>
                        </div>

                        <div class="input-field">
                            <label>Email</label>
                            <input type="email" placeholder="Enter your email" required>
                        </div>
                    </div>
                </div>
    
                <div class="details ID">
                    <span class="title">Working Details</span>

                    <div class="fields">

                        <div class="input-field">
                            <label>Regisration Number</label>
                            <input type="text" placeholder="Enter reg. number" pattern="[A-Za-z0-9]{8}" required>
                        </div>

                        <div class="input-field">
                            <label>Department Name</label>
                            <input type="text" placeholder="Enter department name" required>
                        </div>

                        <div class="input-field">
                            <label>Role</label>
                            <input type="text" placeholder="Enter your Role" required>
                        </div>

                    </div>

                    <button class="nextBtn">
                        <span class="btnText">Next</span>
                        <i class="uil uil-navigator"></i>
                    </button>
                </div> 
            </div>
    <!-----=======Page 2========---->
              <div class="form first">
                <div class="details address">
                    <span class="title">Address Details</span>

                    <div class="fields">
                        <div class="input-field">
                            <label>Address</label>
                            <input type="text" placeholder="Enter the address" required>   
                        </div>

                        <div class="input-field">
                            <label>Country</label>
                            <input type="text" placeholder="Enter Country" required>
                        </div>

                        <div class="input-field">
                            <label>Region</label>
                            <input type="text" placeholder="Enter your region" required>
                        </div>

                        <div class="input-field">
                            <label>District</label>
                            <input type="text" placeholder="Enter your district" required>
                        </div>

                        <div class="input-field">
                            <label>Ward</label>
                            <input type="text" placeholder="Enter your ward" required>
                        </div>

                        <div class="input-field">
                            <label> Post Address</label>
                            <input type="text" placeholder="Enter the postal address" required>   
                        </div>

                    </div>
                </div>

                    <div class="buttons">
                        <div class="backBtn">
                            <i class="uil uil-navigator"></i>
                            <span class="btnText">Back</span>
                        </div>
                        
                        <button class="sumbit">
                            <span class="btnText">Submit</span>
                            <i class="uil uil-navigator"></i>
                        </button>
                    </div> 
                </div> 
            </div>
        </form>
    </div>

    <script src="{{ asset('assets/js/script.js') }}"></script>
</body>
</html>