<div hidden class="container-fluid hdn-div fadeInDown">
    <div class="row justify-content-center">
        <div class="col-lg-10">
            <div id="oldstud" hidden class="card shadow-lg border-0 rounded-lg mt-5 ml-auto mr-auto p-0 col-lg-5">
                <div class="card-header">
                    <h1 style="text-align: center; margin-top: 20px; margin-bottom: 20px; font-family: CENTURY GOTHIC;">
                        BASIC INFORMATION</h1>
                </div>
                <div class="card-body">
                    <form action="" method="post">
                        <div class="row m-0 form-group">
                            <label class="col-4 p-0">ID Number</label>
                            <p class="col-8">---------</p>
                        </div>
                        <div class="row m-0 form-group">
                            <label class="col-4 p-0">First name</label>
                            <input type="text" class="col-8 form-control form-control-sm">
                        </div>
                        <div class="row m-0 form-group">
                            <label class="col-4 p-0">Middle name</label>
                            <input type="text" class="col-8 form-control form-control-sm">
                        </div>
                        <div class="row m-0 form-group">
                            <label class="col-4 p-0">Date of Birth</label>
                            <input type="text" name="birthdate" class="col-8 form-control form-control-sm">
                        </div>
                        <div class="row m-0 form-group">
                            <label class="col-4 p-0">Phone #</label>
                            <input type="text" class="col-8 form-control form-control-sm">
                        </div>
                        <div class="col-12 text-center">
                            <button class="btn btn-primary col-6">Proceed</button>
                        </div>
                    </form>
                </div>
            </div>
            <div id="newstudform" class="card shadow-lg border-0 rounded-lg mt-5">
                <div class="card-header">
                    <h1 style="text-align: center; margin-top: 20px; margin-bottom: 20px; font-family: CENTURY GOTHIC;">
                        PERSONAL DATA</h1>
                </div>
                <form id="insertstud" method="post" action="{{ route('studIn') }}" enctype="multipart/form-data" class="needs-validation" novalidator>
                    <div class="card-body row g-3">
                        <div class="col-md-4">
                            <div class="col-12">
                                <img id="pro-image" src="img/human.png" class="col-md-12">
                                <button id="custom-btn" class="col-md-12 btn btn-outline-info mt-3 mb-3"
                                    type="button">CHOOSE IMAGE</button>
                            </div>
                            <input type="file" class="form-control" hidden id="customFile" name="image"
                                accept="image/*">
                            <div id="image-invalid" class="invalid-feedback">Please provide an image</div>
                        </div>
                        <div class="col-md-8">
                            <div class="col-12 p-0">
                                <input type="text" name="fname" class="form-control required" placeholder="Firstname" required>
                            </div>
                            <div class="col-12 p-0">
                                <input type="text" name="mname" class="form-control" placeholder="Middlename">
                            </div>
                            <div class="col-12 p-0">
                                <input type="text" name="lname" class="form-control required" placeholder="Lastname" required>
                            </div>
                            <div class="col-md-4 pl-0">
                                <div class="invalid-feedback">Please fill all the needed information</div>
                                <input type="text" name="suffix" class="form-control" placeholder="Suffix">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <label class="form-label">Age:</label>
                            <input name="age" class="form-control required" value="18" type="text"
                                onkeyup="NumbersOnly(this)" required>
                            <div class="invalid-feedback">Please enter your age</div>
                        </div>
                        <div class="col-md-8">
                            <label class="form-label">Birthdate:</label>
                            <input name="bd" type="date" value="1997-07-13" class="form-control required"
                                required>
                            <div class="invalid-feedback">Please select your birthdate</div>
                        </div>
                        <div class="col-md-4">
                            <label class="form-label">Gender:</label>
                            <select name="gender" class="form-control">
                                <option value="1">Male</option>
                                <option value="0">Female</option>
                            </select>
                        </div>
                        <div class="col-md-8">
                            <label class="form-label">Civil Status:</label>
                            <select name="status" class="form-control">
                                <option value="Single">Single</option>
                                <option value="Married">Married</option>
                                <option value="Widowed">Widowed</option>
                                <option value="Separated">Separated</option>
                            </select>
                        </div>
                        <div class="col-md-4">
                            <label class="form-label">Citizenship:</label>
                            <div class="col-sm-12 p-0">
                                <input name="citizenship" class="form-control required" value=""
                                    type="text" required>
                                <div class="invalid-feedback">Enter your citizenship</div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="row">
                                <label class="form-label">Height:</label>
                                <div class="col-sm-12 pl-0">
                                    <input name="height" class="form-control required" onkeyup="NumbersOnly(this)"
                                        type="text" required>
                                    <div class="invalid-feedback">Enter your height</div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="row">
                                <label class="form-label">Weight:</label>
                                <div class="col-sm-12 pl-0">
                                    <input name="weight" class="form-control required" onkeyup="NumbersOnly(this)"
                                        type="text" required>
                                    <div class="invalid-feedback">Enter your Weight</div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <label class="form-label">Place of Birth:</label>
                            <div class="col-sm-12 p-0">
                                <input name="place-add" class="form-control required"
                                    type="text" required>
                                <div class="invalid-feedback">Enter your birth address</div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <label class="form-label">Residential Address:</label>
                            <div class="row">
                                <div class="col-sm-12">
                                    <input name="res-add" class="form-control required"
                                        type="text" placeholder="Residential Address" required>
                                    <div class="invalid-feedback">Enter your residential address</div>
                                </div>
                                <div class="col-sm-7">
                                    <input name="res-city" type="text" class="form-control required"
                                     placeholder="City" required>
                                    <div class="invalid-feedback">In what city were you resided</div>
                                </div>
                                <div class="col-sm">
                                    <input name="res-state" type="text" class="form-control required"
                                     placeholder="State" required>
                                    <div class="invalid-feedback">In what state were you resided </div>
                                </div>
                                <div class="col-sm">
                                    <input name="res-zip" type="text" class="form-control required"
                                     placeholder="Zip" onkeyup="NumbersOnly(this)" required>
                                    <div class="invalid-feedback">Please provide a valid zip</div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <label class=" form-label">Current Address:</label>
                            <div class="row">
                                <div class="col-sm-12">
                                    <input name="cur-add" class="form-control required"
                                        type="text" placeholder="Current Address" required>
                                    <div class="invalid-feedback">Enter your residential address</div>
                                </div>
                                <div class="col-sm-7">
                                    <input name="cur-city" type="text" class="form-control required"
                                     placeholder="City" required>
                                    <div class="invalid-feedback">In what city were you resided</div>
                                </div>
                                <div class="col-sm">
                                    <input name="cur-state" id="cur-state" type="text" class="form-control required"
                                     placeholder="State" required>
                                    <div class="invalid-feedback">In what state were you resided </div>
                                </div>
                                <div class="col-sm">
                                    <input name="cur-zip" id="cur-zip" type="text" class="form-control required"
                                     placeholder="Zip" onkeyup="NumbersOnly(this)" required>
                                    <div class="invalid-feedback">Please provide a valid zip</div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <label class="form-label">Ethnic Origin:</label>
                            <input class="form-control" name="ethnic" type="text">
                        </div>
                        <div class="col-md-6">
                            <label class="form-label">Religion:</label>
                            <input class="form-control" name="religion" type="text">
                        </div>
                        <div class="col-md-12">
                            <label class="form-label">Languages/Dialects Fluent In:</label>
                            <input class="form-control" name="language" type="text">
                        </div>
                        <div class="col-md-12">
                            <label class="form-label">Contact Information:</label>
                            <div class="row g2">
                                <div class="col-sm-4">
                                    <input class="form-control required" type="text" name="contact"
                                        placeholder="Cellular Phone No." onkeyup="NumbersOnly(this)"
                                        required>
                                    <div class="invalid-feedback">Please provide this contact information
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <input name="email" class="form-control required"
                                        type="text" placeholder="Email Address" required>
                                    <div class="invalid-feedback">Please provide this contact information
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <input class="form-control" type="text" name="fbacc"
                                        placeholder="Facebook Account">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12" id="workingStud" hidden>
                            <label>Where or whom do you work?</label>
                            <input class="form-control" id="whomwork" name="optr-no" type="text">
                        </div>
                        <div class="card-header col-12">
                            <h1 style="text-align: center; margin-bottom: 20px 0 20px 0; font-family: CENTURY GOTHIC;">
                                FAMILY BACKGROUND</h1>
                        </div>
                        <div class="col-md-12">
                            <label class="form-label">(if married):</label>
                            <div class="input-group">
                                <input type="text" name="spousename" class="form-control"
                                    placeholder="Name of Spouse">
                                <input type="text" class="form-control" placeholder="Occupation"
                                    name="spouseoccupation">
                                <input type="text" name="marriedchildren" class="col-md-2 form-control"
                                    onkeyup="NumbersOnly(this)" placeholder="No. of Children">
                            </div>
                                <div class="invalid-feedback col-12">Please fill all the needed information</div>
                        </div>
                        <div class="col-md-12">
                            <label class="form-label">Father's Name:</label>
                            <div class="input-group">
                                <input type="text" name="fafname" class="form-control required"
                                 placeholder="Firstname" required>
                                <input type="text" name="famname" class="form-control"
                                    placeholder="Middlename">
                                <input type="text" name="falname" class="form-control required"
                                 placeholder="Lastname" required>
                                <div class="col-md-2 pr-0">
                                    <input type="text" name="fasuffix" class="form-control"
                                        placeholder="Suffix">
                                </div>
                            </div>
                                <div class="invalid-feedback">Please fill all the needed information</div>
                        </div>
                        <div class="col-md-12">
                            <label class="form-label">Contact Information (Father):</label>
                            <div class="row g2">
                                <div class="col-sm-4">
                                    <input class="form-control" name="facontact" type="text"
                                        placeholder="Cellular Phone No." onkeyup="NumbersOnly(this)">
                                </div>
                                <div class="col-sm-8">
                                    <input class="form-control" name="faaddress"
                                        type="text" placeholder="Address">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <label>Employment</label>
                            <div class="form-group row">
                                <label style="padding-left: 35px" class="col-sm-4"><input type="radio" required
                                        class="form-check-input" name="fa-work" value="Private" onclick="faemp(0)"> Private</label>
                                <label style="padding-left: 35px" class="col-sm-4"><input type="radio"
                                        class="form-check-input" name="fa-work" value="Government" onclick="faemp(0)"> Government</label>
                                <label style="padding-left: 35px" class="col-sm-4"><input type="radio"
                                        class="form-check-input" name="fa-work" value="Entrepreneurial" onclick="faemp(0)"> Entrepreneurial</label>
                                <label style="padding-left: 35px" class="col-sm-4"><input type="radio"
                                        class="form-check-input" name="fa-work" value="None" onclick="faemp(0)"> None</label>
                                <label style="padding-left: 35px" class="col-sm-4"><input type="radio"
                                        class="form-check-input" name="fa-work" onclick="faemp(1)"> OFW where <input id="faofw" name="fa-work" disabled type="text" 
                                        name="fa-work" class="col-10"></label>
                                <label style="padding-left: 35px" class="col-sm-4"><input type="radio"
                                        class="form-check-input" name="fa-work" onclick="faemp(2)" name="fa-work"> Others Specify <input disabled type="text" 
                                        name="fa-work" class="col-10" id="faother"></label>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <label class="form-label">Mother's Name:</label>
                            <div class="input-group">
                                <input type="text" name="mofname" class="form-control required"
                                 placeholder="Firstname" required>
                                <input type="text" name="momname" class="form-control"
                                    placeholder="Middlename">
                                <input type="text" name="molname" class="form-control required"
                                 placeholder="Lastname" required>
                                <div class="col-md-2 pr-0">
                                    <input type="text" name="mosuffix" class="form-control"
                                        placeholder="Suffix">
                                </div>
                                <div class="invalid-feedback">Please fill all the needed information</div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <label class="form-label">Contact Information (Mother):</label>
                            <div class="row g2">
                                <div class="col-sm-4">
                                    <input class="form-control" name="mocontact" value="09207787192"
                                        type="text" placeholder="Cellular Phone No" onkeyup="NumbersOnly(this)">
                                </div>
                                <div class="col-sm-8">
                                    <input class="form-control" name="moaddress"
                                        type="text" placeholder="Address">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <label>Employment</label>
                            <div class="form-group row">
                                <label style="padding-left: 35px" class="col-sm-4"><input type="radio"
                                        class="form-check-input" required name="mo-work" value="Private"
                                        onclick="moemp(0)"> Private</label>
                                <label style="padding-left: 35px" class="col-sm-4"><input type="radio"
                                        class="form-check-input" name="mo-work" value="Government" onclick="moemp(0)"> Government</label>
                                <label style="padding-left: 35px" class="col-sm-4"><input type="radio"
                                        class="form-check-input" name="mo-work" value="Entrepreneurial"
                                        onclick="moemp(0)"> Entrepreneurial</label>
                                <label style="padding-left: 35px" class="col-sm-4"><input type="radio"
                                        class="form-check-input" name="mo-work" value="None" onclick="moemp(0)"> None</label>
                                <label style="padding-left: 35px" class="col-sm-4"><input type="radio"
                                        class="form-check-input" name="mo-work" onclick="moemp(1)"> OFW where <input disabled type="text" class="col-10" id="moofw" name="mo-work"></label>
                                <label style="padding-left: 35px" class="col-sm-4"><input type="radio"
                                        class="form-check-input" name="mo-work" onclick="moemp(2)"> Others Specify <input disabled type="text" class="col-10" id="moother" name="mo-work"></label>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <label>Person to Contact in Case of Emergency: </label>
                            <div class="row">
                                <div class="col-sm-8">
                                    <input type="text" name="guardian" placeholder="Full name"
                                        class="form-control">
                                </div>
                                <div class="col-sm-4">
                                    <input type="text" name="gcontact" placeholder="Contact"
                                        class="form-control">
                                </div>
                                <div class="col-sm-12">
                                    <input type="text" name="gaddress" placeholder="Address"
                                        class="form-control">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <label class="form-label">Parents are:</label>
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-check">
                                        <input type="radio" name="optradio2" value="None" checked hidden>
                                        <label class="form-check-label">
                                            <input type="radio" class="form-check-input" name="optradio2"
                                                value="Living Together"> Living Together
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <label class="form-check-label">
                                            <input type="radio" class="form-check-input" name="optradio2"
                                                value="Temporarily Separated">
                                            Temporarily Separated
                                        </label>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-check">
                                        <label class="form-check-label">
                                            <input type="radio" class="form-check-input" name="optradio2"
                                                value="Permanently Separated">
                                            Permanently Separated
                                        </label>
                                    </div>
                                    <div class=" form-check">
                                        <label class="form-check-label">
                                            <input type="radio" class="form-check-input" name="optradio2"
                                                value="Father w/ another partner">
                                            Father w/ another partner
                                        </label>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-check">
                                        <label class="form-check-label">
                                            <input type="radio" class="form-check-input" name="optradio2"
                                                value="Marriage Annulled">
                                            Marriage Annulled
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <label class="form-check-label">
                                            <input type="radio" class="form-check-input" name="optradio2"
                                                value="Mother w/ another partner">
                                            Mother w/ another partner
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <label class="form-label">Monthly Family Income: (Estimated)</label>
                            <input name="famincome" type="text" class="form-control required" value="14000"
                                placeholder="???" onkeyup="NumbersOnly(this)" required>
                            <div class="invalid-feedback">Please fill all the needed information</div>
                        </div>
                        <div class="col-md-6">
                            <label class="form-label">Guardian(if not living with parents):</label>
                            <input type="text" name="guardianliving" class="form-control" onkeyup="NumbersOnly(this)">
                        </div>
                        <div class="col-md-12" style="margin-bottom: 50px;">
                            <div class="input-group">
                                <span class="input-group-text">Number of:</span>
                                <input type="text" class="form-control" name="siblings" placeholder="Siblings"
                                    onkeyup="NumbersOnly(this)">
                                <input type="text" class="form-control" name="wsiblings" placeholder="Working Siblings"
                                    onkeyup="NumbersOnly(this)">
                                <input type="text" class="form-control" name="csiblings" placeholder="College Siblings"
                                    onkeyup="NumbersOnly(this)">
                                <input type="text" class="form-control" name="hsiblings"
                                    placeholder="Highschool Siblings" onkeyup="NumbersOnly(this)">
                            </div>
                        </div>

                        <div class="card-header col-12">
                            <h1 style="text-align: center; margin: 20px 0 20px 0; font-family: CENTURY GOTHIC;">
                                EDUCATIONAL & CAREER PLAN</h1>
                        </div>
                        <div class="col-md-12">
                            <label class="form-label">Elementary School:</label>
                            <div class="input-group">
                                <input name="elemschool"  type="text" class="form-control required"
                                 placeholder="Name Of School" required>
                                <div class="col-md-4 pr-0">
                                    <input type="text" name="elemyear" id="elemyear" class="form-control required"
                                     placeholder="Year Graduated" required
                                        onkeyup="NumbersOnly(this)">
                                </div>
                                <div class="invalid-feedback">Please fill all the needed information</div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <label class="form-label">Secondary School:</label>
                            <div class="input-group">
                                <input name="secschool" id="secschool" type="text" class="form-control required"
                                 placeholder="Name Of School" required>
                                <div class="col-md-4">
                                    <input type="text" name="strand" placeholder="Strand"
                                        class="form-control">
                                </div>
                                <div class="col-md-4 p-0">
                                    <input type="text" name="secyear" class="form-control required"
                                     placeholder="Year Graduated" required
                                        onkeyup="NumbersOnly(this)">
                                </div>
                                <div class="invalid-feedback">Please fill all the needed information</div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <label class="form-label">Vocational School:</label>
                            <div class="input-group">
                                <input type="text" class="form-control" name="vocschool" placeholder="Name Of School">
                                <div class="col-md-3">
                                    <input type="text" class="form-control" name="voccourse" placeholder="Course">
                                </div>
                                <div class="col-md-2 p-0">
                                    <input type="text" class="form-control" name="vocyear" placeholder="Year Graduated" onkeyup="NumbersOnly(this)">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <label>Honors/Award received</label>
                            <input type="text" name="honors" class="form-control">
                        </div>
                        <div class="col-md-12" style="margin: 30px 0 10px 0; ">
                            <label class="form-label" style="margin-right: 30px">Are you enrolling as a scholar?</label>
                            <label for="yes-scholar" class="form-check-label" style="margin-right: 30px">
                                <input type="radio" name="scholar" checked hidden value="None">
                                <input type="radio" class="form-check-input" id="yes-scholar" name="scholar"
                                    onchange="Scholar()"> Yes
                            </label>
                            <label for="no-scholar" class="form-check-label">
                                <input type="radio" class="form-check-input" name="scholar" value="No" id="no-scholar"
                                    onchange="Scholar()"> No
                            </label>
                            <div style="float: right;">
                                <label>If yes, what scholarship grant?</label>
                                <input id="scholar-text" type="text" name="scholar" disabled>
                            </div>
                        </div>
                        
                            <div class="col-12">
                                <label class="form-label">What course are you enrolled?</label>
                                <div class="row">
                                    <div class="col-8">
                                        <select name="gctccourse" class="form-control col-form-label">
                                            <option value="0">example</option>
                                        </select>
                                    </div>
                                    <div class="col-4">
                                        <input type="text" name="gctcyear" onkeyup="NumbersOnly(this)"
                                            class="form-control">
                                    </div>
                                </div>
                            </div>
                        <div class="col-md-12" id="course-sec">
                            <label class="form-label">Which campus would you enroll</label>
                            <select name="campus" id="campus" class="form-control col-form-label">
                                <option value="Main Campus(Mati)">Main Campus(Mati)</option>
                                <option value="Banaybanay Extension Campus">Banaybanay Extension Campus</option>
                                <option value="Cateel Extension Campus">Cateel Extension Campus</option>
                                <option value="San-Isidro Extension Campus">San-Isidro Extension Campus</option>
                            </select>
                            <label class="form-label">Please enter your desired program/course to
                                enroll (Fill all 3 fields)</label>
                            <div class="col-sm-12 p-0">
                                <div class="input-group">
                                    <span class="input-group-text" style="width: 100px;">1st Choice</span>
                                    <select name="firstcourse" class="form-control col-form-label">
                                        <option value="0">sample</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-sm-12 p-0">
                                <div class="input-group">
                                    <span class="input-group-text" style="width: 100px;">2nd Choice</span>
                                    <select name="secondcourse" class="form-control col-form-label">
                                        <option value="0">sample</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-sm-12 p-0">
                                <div class="input-group">
                                    <span class="input-group-text" style="width: 100px;">3rd Choice</span>
                                    <select name="thirdcourse" class="form-control col-form-label">
                                        <option value="0">sample</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <label>Why did you decide to take the course you are enrolling?</label>
                            <input type="text" name="qcourse" class="form-control required" required>
                        </div>
                        <div class="col-md-12">
                            <label class="form-label">Is it your own choice to enroll in
                                DOrSU?</label>
                                <input type="radio" name="decide" checked hidden value="None">
                            <label style="margin-left: 30px" class="form-check-label">
                                <input type="radio" class="form-check-input" name="decide" value="Yes" id="yes-decide"
                                    onchange="decideNo()"> Yes
                            </label>
                            <label style="margin-left: 30px" class="form-check-label">
                                <input type="radio" class="form-check-input" name="decide" value="No" id="no-decide"
                                    onchange="decideNo()"> No
                            </label>
                            <div style="float: right;">
                                <label>If no, who influenced you?
                                </label>
                                <input name="decide" id="influenced" type="text" disabled>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <label>Why did you decide to enroll in DOrSU?</label>
                            <input type="text" name="qenroll" class="form-control required" required>
                        </div>
                        <div class="col-md-12">
                            <label>What is your plan or ambition in life?</label>
                            <input type="text" name="qambition" class="form-control required" required>
                        </div>
                        <div class="col-md-12">
                            <label>What are your Expectations on: </label>
                            <div class="row">
                                <div class="col-md-6">
                                    <input type="text" name="expectschool" class="form-control required"
                                        placeholder="School" required>
                                </div>
                                <div class="col-md-6">
                                    <input type="text" name="expectinstructor" class="form-control required"
                                     placeholder="Instructor" required>
                                </div>
                                <div class="col-md-6">
                                    <input type="text" name="expectsubjectleast" class="form-control required"
                                     placeholder="Subject you like least" required>
                                </div>
                                <div class="col-md-6">
                                    <input type="text" name="expectcourse" class="form-control required"
                                        placeholder="Course" required>
                                </div>
                                <div class="col-md-6">
                                    <input type="text" name="expectstudent" class="form-control required"
                                        placeholder="Students" required>
                                </div>
                                <div class="col-md-6">
                                    <input type="text" name="expectsubjectmost" class="form-control required"
                                     placeholder="Subject you like most" required>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12" style="margin-top: 30px;">
                            <label class="form-label">Do you have a SCAST Result?</label>
                            <label style="margin-left: 30px" for="yes" class="form-check-label">
                                <input type="radio" name="optradioyes" checked hidden value="None">
                                <input type="radio" class="form-check-input" name="optradioyes" id="yes"
                                    onchange="chooseYes()"> Yes
                            </label>
                            <label style="margin-left: 30px" for="no" class="form-check-label">
                                <input type="radio" class="form-check-input" name="optradioyes" id="no"
                                    onchange="chooseNo()"> No
                            </label>
                        </div>
                        <div id="SCAST" hidden class="col-md-12">
                            <div class="row">
                                <div class="col-sm-4">
                                    <div class="input-group">
                                        <span class="input-group-text" style="width: 300px;">General Ability</span>
                                        <input type="text" name="genability" class="form-control">
                                    </div>
                                    <div class="input-group">
                                        <span class="input-group-text" style="width: 300px;">Spatial Aptitude</span>
                                        <input type="text" name="spatial" class="form-control">
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="input-group">
                                        <span class="input-group-text" style="width: 300px;">Verbal Aptitude</span>
                                        <input type="text" name="verbal" class="form-control">
                                    </div>
                                    <div class="input-group">
                                        <span class="input-group-text" style="width: 300px;">Perceptual Aptitude</span>
                                        <input type="text" name="perceptual" class="form-control">
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="input-group">
                                        <span class="input-group-text" style="width: 300px;">Numerical Aptitude</span>
                                        <input type="text" name="numerical" class="form-control">
                                    </div>
                                    <div class="input-group">
                                        <span class="input-group-text" style="width: 300px;">Manual Dexterity</span>
                                        <input type="text" name="manual" class="form-control">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12" style="margin-top: 20px;">
                            <div class="row">
                                <div class="col-md-6">
                                    <label>Hobbies/Recreational Activities:</label>
                                    <input type="text" name="hobbies" class="form-control required"
                                        required>
                                </div>
                                <div class="col-md-6">
                                    <label>Motto:</label>
                                    <input type="text" name="motto" class="form-control required"
                                        required>
                                </div>
                                <div class="col-md-6" style="margin-bottom: 20px;">
                                    <label>Special Skills/Talents:</label>
                                    <input type="text" name="talent" class="form-control required"
                                        required>
                                </div>
                                <div class="col-md-6" style="margin-bottom: 20px;">
                                    <label>Special Interests:</label>
                                    <input type="text" name="interest" class="form-control required"
                                        required>
                                </div>
                            </div>
                        </div>
                        <div class="card-header col-12">
                            <h1 style="text-align: center; margin: 20px 0 20px 0; font-family: CENTURY GOTHIC;"> OTHER
                                INFORMATION</h1>
                        </div>
                        <div class="col-12">
                            <label class="form-check-label pl-0">Are you a person with disability (PWD)?</label>
                            <label style="margin-left: 30px"><input type="radio" class="form-check-input" onclick="disability(1)" name="pwd">Yes</label>
                            <label style="margin-left: 30px"><input type="radio" class="form-check-input" name="pwd" value="no" onclick="disability(0)" name="pwd">No</label>
                            <label style="float:right">If yes, give details (type of disability): <input type="text" name="pwd" class="form-control" disabled id="pwd-text"></label>
                        </div>
                        <div class="col-12">
                            <label class="form-check-label pl-0">Are you a single parent?</label>
                            <label style="margin-left: 30px"><input type="radio" class="form-check-input"
                                    onclick="parent(1)" name="sparent">Yes</label>
                            <label style="margin-left: 30px"><input type="radio" class="form-check-input" name="singleparent" value="no"
                                    onclick="parent(0)" name="sparent">No</label>
                            <label style="float:right">If yes, give details (number of children): <input type="text" name="singleparent" class="form-control" name="" disabled id="parent-text"></label>
                        </div>
                        <div class="col-12">
                            <label class="form-check-label pl-0">Are you a working-student?</label>
                            <label style="margin-left: 30px"><input type="radio" class="form-check-input" value="1"
                                    onclick="employee(1)" name="wstudent">Yes</label>
                            <label style="margin-left: 30px"><input type="radio" class="form-check-input" value="0"
                                    onclick="employee(0)" name="wstudent">No</label>
                            <label style="float:right">If yes, give details (employer): <input type="text"
                                    class="form-control" name="detailemp" disabled id="emp-text"></label>
                        </div>
                        <div class="card-header col-12">
                            <h1 style="text-align: center; margin: 20px 0 20px 0; font-family: CENTURY GOTHIC;"> SELF
                                ASSESSMENT</h1>
                        </div>
                        <div class="col-md-12">
                            <label>What traits/characteristics do you think you posses? (You may check as many)</label>
                        </div>
                        <div class="col-md-3">
                            <div class="form-check">
                                <label class="form-check-label">
                                    <input type="checkbox" class="form-check-input" name="selfassesment[]"
                                        value="tense/jittery"> tense/jittery
                                </label>
                            </div>
                            <div class="form-check">
                                <label class="form-check-label">
                                    <input type="checkbox" class="form-check-input" name="selfassesment[]"
                                        value="confident"> confident
                                </label>
                            </div>
                            <div class="form-check">
                                <label class="form-check-label">
                                    <input type="checkbox" class="form-check-input" name="selfassesment[]"
                                        value="submissive"> submissive
                                </label>
                            </div>
                            <div class="form-check">
                                <label class="form-check-label">
                                    <input type="checkbox" class="form-check-input" name="selfassesment[]"
                                        value="independent"> independent
                                </label>
                            </div>
                            <div class="form-check">
                                <label class="form-check-label">
                                    <input type="checkbox" class="form-check-input" name="selfassesment[]"
                                        value="sensitive"> sensitive
                                </label>
                            </div>
                            <div class="form-check">
                                <label class="form-check-label">
                                    <input type="checkbox" class="form-check-input" name="selfassesment[]"
                                        value="trusting"> trusting
                                </label>
                            </div>
                        </div>
                        <div class=" col-md-3">
                            <div class="form-check">
                                <label class="form-check-label">
                                    <input type="checkbox" class="form-check-input" name="selfassesment[]"
                                        value="easily troubled"> easily troubled
                                </label>
                            </div>
                            <div class=" form-check">
                                <label class="form-check-label">
                                    <input type="checkbox" class="form-check-input" name="selfassesment[]"
                                        value="responsible"> responsible
                                </label>
                            </div>
                            <div class="form-check">
                                <label class="form-check-label">
                                    <input type="checkbox" class="form-check-input" name="selfassesment[]"
                                        value="relaxed/calm"> relaxed/calm
                                </label>
                            </div>
                            <div class="form-check">
                                <label class="form-check-label">
                                    <input type="checkbox" class="form-check-input" name="selfassesment[]"
                                        value="dependent"> dependent
                                </label>
                            </div>
                            <div class="form-check">
                                <label class="form-check-label">
                                    <input type="checkbox" class="form-check-input" name="selfassesment[]"
                                        value="perceptive"> perceptive
                                </label>
                            </div>
                            <div class="form-check">
                                <label class="form-check-label">
                                    <input type="checkbox" class="form-check-input" name="selfassesment[]"
                                        value="insecure"> insecure
                                </label>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-check">
                                <label class="form-check-label">
                                    <input type="checkbox" class="form-check-input" name="selfassesment[]"
                                        value="happy-go-lucky"> happy-go-lucky
                                </label>
                            </div>
                            <div class="form-check">
                                <label class="form-check-label">
                                    <input type="checkbox" class="form-check-input" name="selfassesment[]" value="loner">
                                    loner
                                </label>
                            </div>
                            <div class="form-check">
                                <label class="form-check-label">
                                    <input type="checkbox" class="form-check-input" name="selfassesment[]"
                                        value="suspicious"> suspicious
                                </label>
                            </div>
                            <div class="form-check">
                                <label class="form-check-label">
                                    <input type="checkbox" class="form-check-input" name="selfassesment[]"
                                        value="stubborn"> stubborn
                                </label>
                            </div>
                            <div class="form-check">
                                <label class="form-check-label">
                                    <input type="checkbox" class="form-check-input" name="selfassesment[]"
                                        value="idealistic"> idealistic
                                </label>
                            </div>
                            <div class="form-check">
                                <label class="form-check-label">
                                    <input type="checkbox" class="form-check-input" name="selfassesment[]"
                                        value="worrier"> worrier
                                </label>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-check">
                                <label class="form-check-label">
                                    <input type="checkbox" class="form-check-input" name="selfassesment[]"
                                        value="friendly"> friendly
                                </label>
                            </div>
                            <div class="form-check">
                                <label class="form-check-label">
                                    <input type="checkbox" class="form-check-input" name="selfassesment[]"
                                        value="imaginative"> imaginative
                                </label>
                            </div>
                            <div class="form-check">
                                <label class="form-check-label">
                                    <input type="checkbox" class="form-check-input" name="selfassesment[]"
                                        value="dominant"> dominant
                                </label>
                            </div>
                            <div class="form-check">
                                <label class="form-check-label">
                                    <input type="checkbox" class="form-check-input" name="selfassesment[]"
                                        value="sentimental"> sentimental
                                </label>
                            </div>
                            <div class="form-check">
                                <label class="form-check-label">
                                    <input type="checkbox" class="form-check-input" name="selfassesment[]"
                                        value="practical"> practical
                                </label>
                            </div>
                            <input type="text" hidden name="selfasses" id="selfasses">
                            <div class="form-check">
                                <label class="form-check-label">
                                    <input type="checkbox" class="form-check-input" id="otherpossesed"
                                        onchange="OthersPossesed()"> Others:
                                </label>
                            </div>
                            <input style="float: left;" type="text" class="form-control" id="otherposstext" disabled>
                        </div>
                        <div class="col-md-12">
                            <label>What bothers you most at the moment?</label>
                        </div>
                        <div class="col-md-6">
                            <div class="form-check">
                                <label class="form-check-label">
                                    <input type="checkbox" class="form-check-input" name="bothers[]"> Financial difficulty
                                </label>
                            </div>
                            <div class="form-check">
                                <label class="form-check-label">
                                    <input type="checkbox" class="form-check-input" name="bothers[]"> Difficulties in
                                    adjusting a new school
                                </label>
                            </div>
                            <div class="form-check">
                                <label class="form-check-label">
                                    <input type="checkbox" class="form-check-input" name="bothers[]"> Study habits
                                </label>
                            </div>
                            <div class="form-check">
                                <label class="form-check-label">
                                    <input type="checkbox" class="form-check-input" name="bothers[]" id="healthprob"
                                        onchange="HealthOther()"> Health problems, Please specify:
                                </label>
                            </div>
                            <input style="float: left;" type="text" class="form-control" id="health-text" disabled>
                        </div>
                        <div class="col-md-6">
                            <div class="form-check">
                                <label class="form-check-label">
                                    <input type="checkbox" class="form-check-input" name="bothers[]">
                                    Developing self-confidence
                                </label>
                            </div>
                            <div class="form-check">
                                <label class="form-check-label">
                                    <input type="checkbox" class="form-check-input" name="bothers[]">
                                    Interpersonal relationship (parent;friends;siblings)
                                </label>
                            </div>
                            <div class="form-check">
                                <label class="form-check-label">
                                    <input type="checkbox" class="form-check-input" name="bothers[]">
                                    Student-Instructor relationship
                                </label>
                            </div>
                            <div class="form-check">
                                <label class="form-check-label">
                                    <input type="checkbox" class="form-check-input" name="bothers[]" id="otherspecify"
                                        onchange="SpecifyOther()"> Other, please specify:
                                </label>
                            </div>
                            <input type="text" hidden name="bother" id="bother">
                            <input style="float: left;" type="text" class="form-control" id="specify-text" disabled>
                        </div>
                        <div class="col-md-12">
                            <label>What was your most embarrassing experience in life?</label>
                            <input type="text" class="form-control" name="embarrassing">
                        </div>
                        <div class="col-md-12">
                            <label>Things you would like to talk and discuss with:</label>
                        </div>
                        <div class="col-md-6">
                            <div class="input-group">
                                <span class="input-group-text" style="width: 100px;">Friends</span>
                                <input type="text" name="friends" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="input-group">
                                <span class="input-group-text" style="width: 100px;">Parents</span>
                                <input type="text" name="parents" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="input-group">
                                <span class="input-group-text" style="width: 100px;">Teachers</span>
                                <input type="text" name="teachers" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="input-group">
                                <span class="input-group-text" style="width: 100px;">Councelors</span>
                                <input type="text" name="councelors" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-12">
                        <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>