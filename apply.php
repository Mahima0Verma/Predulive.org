<!DOCTYPE html>
<html lang="en" >
<head>
<meta charset="UTF-8">
<title>CodePen - Flat Registration Form</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css"><link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
<!-- <link rel="stylesheet" href="./style.css"> -->
<style>
  /* Red: F24865, Light Gray: F4F4F4, Blue: 45CAE6, Green: 09C775, Dark Gray: 797979 */
@import url(https://fonts.googleapis.com/css?family=Quicksand:400,300,700);
* {
box-sizing: border-box;
font-family: Quicksand, sans-serif;
}
body {
background-image: #797979;
color: #444;
display: flex;
justify-content: center;
align-items: center;
font-size: 18px;
font-weight: 400;
margin: 0;
padding: 0;
}
.wrap {
margin: 15px;
max-width: 600px;
width: 100%;
}
.wrap form {
box-shadow: 0 1px 3px rgba(0,0,0,.3);
}
.form-header {
background-color: #13357B;
border-radius: 4px 4px 0 0;
padding: 1em;
}
.form-header h2 {
color: #fff;
font-weight: 700;
font-size: 1.75em;
margin: 0;
}
.form-body {
background-color: #fff;
padding: 1em;
}
.form-body label,
.form-body input,
.form-body select,
.form-body textarea {
display: block;
width: 100%;
}
.form-body label {
font-size: .8em;
font-weight: 700;
line-height: 1;
margin: .75em 0 .25em;
}
.form-body input,
.form-body select,
.form-body textarea {
background-color: #f4f4f4;
border: none;
border-radius: 4px;
padding: .25em;
}
.form-body fieldset {
border: none;
margin: 0 0 1em;
padding: 0;
}
.form-body fieldset:last-of-type {
margin-bottom: 0;
}
.form-body fieldset legend {
font-size: 1em;
font-weight: 500;
}
.form-footer {
background-color: #e2e2e2;
border-radius: 0 0 4px 4px;
padding: 1em;
}
.form-footer input[type="submit"] {
background-color: #4AB74A;
border: none;
border-radius: 4px;
color: #fff;
padding: 1em 1.5em;
}
/******** Subscription option actions ********/
.sub-opts input[name="subscription"] {
display: none;
}
.sub-opts input[name="subscription"] + .sub-opt {
background-color: #f4f4f4;
border-radius: 4px;
font-weight: 700;
}
.sub-opts input[name="subscription"]:checked + .sub-opt {
background-color: #09C775;
color: #fff;
}
.sub-opts input[name="subscription"] + .sub-opt .sub-label .fa {
display: none;
}
.sub-opts input[name="subscription"]:checked + .sub-opt .sub-label .fa {
display: inline-block;
}
.sub-opts .sub-opt .sub-label {
display: block;
cursor: pointer;
font-size: 1em;
padding: 1em;
}
.sub-opts .sub-opt .sub-label span.price {
display: inline-block;
float: right;
}

p{
  color: #797979a1;
}

</style>
</head>
<body>
<!-- partial:index.partial.html -->
<div class="wrap">
<form action="functions/authcode2.php" method="POST">
<div class="form-header">
<h2>Predulive</h2>
</div>
<div class="form-body">
<fieldset>
<legend><i class="fa fa-user"></i> User Information</legend>
<br>
<label for="n1">What is your name? *
</label>
<input type="text"  name="n1"  >
<br>

<label for="n2">What is your email? *</label>
<input type="email"  name="n2" required>
<br>
<label for="n3">Venture name *</label>
<input type="text" name="n3" required>
<br>
<label for="n4">Describe your venture in 200 characters or less. *</label>
<input type="text"  name="n4" size="100" required>
<br>
<label for="n5">What problem are you solving, and why did you pick this idea to work on? What's new about your solution? </label>

<input type="text"  name="n5"  required>
<br>

<label for="n6">What is the product or service you are developing? *</label>
<input type="text"  name="n6" required>
<br>

<label for="n7">What industry best describes your market? *</label>
<select  for="n7" name="n7" required>What industry best describes your market? *
  <option value=""></option>
  <option value="AdTech, PR, Digital Marketing Solutions, Media">AdTech, PR, Digital Marketing Solutions, Media</option>
  <option value="Business Products & Services (industry agnostic)">Business Products & Services (industry agnostic)</option>
  <option value="Cybersecurity">Cybersecurity</option>
  <option value="E-commerce, Brand, RetailTech (fashion, interior design, etc.)">E-commerce, Brand, RetailTech (fashion, interior design, etc.)</option>
  <option value="Sports & Entertainment">Sports & Entertainment</option>
  <option value="EdTech">EdTech</option>
  <option value="Energy & Sustainability">Energy & Sustainability</option>
  <option value="FinTech, Financial Services">FinTech, Financial Services</option>
  <option value="FoodTech, Food & Bev Products">FoodTech, Food & Bev Products</option>
  <option value="Healthcare, MedTech, Pharma, Wellness">Healthcare, MedTech, Pharma, Wellness</option>
  <option value="HRtech, Human Capital, Future of Work">HRtech, Human Capital, Future of Work</option>
  <option value="Logistics, Supply Chain, Transportation">Logistics, Supply Chain, Transportation</option>
  <option value="Materials">Materials</option>
  <option value="Mobility">Mobility</option>
  <option value="Smart Cities, Government Services, Construction">Smart Cities, Government Services, Construction</option>
  <option value="Social Impact">Social Impact</option>
  <option value="Social Media & Consumer Apps">Social Media & Consumer Apps</option>
  
  <option value="Travel, Luxury, Hospitality">Travel, Luxury, Hospitality</option>
  <option value="If other, please describe it in the next question">If other, please describe it in the next question</option>
  
  </select>


<br>
  <label for="n8">If your market is something other than what was listed above, please share here. 
  </label>
<input type="text"  name="n8" required>
<br>

<label for="n9">Who are your customers and/or users? *
  <br>
  <p>
    Tell us about any customer or user interaction you've had to date. What feedback have they given you and how are you incorporating their feedback into your product/service? How do you plan to gain or attract initial users if you haven’t already?
  </p>
</label>
<input type="text"  name="n9" required>
<br>


<label for="n10">How many people are on the team and how many are based out of UIUC? When is everyone's graduation date? *
</label>
<input type="text"  name="n10" required>
<br>

<label for="n11">Please share everyone's LinkedIn. *

</label>
<input type="text"  name="n11" required>
<br>
<label for="n12">What is the equity breakdown for every team member and anyone else who is involved? *
<br>
<p>
  The majority of equity must be with UIUC students. 
</p>
</label>
<input type="text"  name="n12" required>
<br>
<label for="n13">Which of your team members will be attending the summer session? *
  <br>
  <p>
    At least 1 core founder must be present during the summer.

  </p>
</label>
<input type="text"  name="n13" required>
<br>
<label for="n14">Which of your team members would enroll or audit this 3-credit hour course in the following Fall and Spring semesters? *
  <br>
  <p>
    Predulive is a year-long program and requires enrollment in the highly-ranked Predulive Seminar course from at least two members of your team (including one of the founders).
  </p>
</label>
<input type="text"  name="n14" required>
<br>
<label for="n15">How did you meet your co-founders, and in what capacity have you been working together?  *
  <br>
  <p>
    Briefly discuss each member's role on the team and each member's proudest achievement (can be related or not related to your venture).
  </p>
</label>
<input type="text"  name="n15" required>
<br>
<label for="n16">Do you have a grand 5-10 year vision? *


</label>
<input type="text"  name="n16" required>
<br>
<label for="n17">Why is your team the best team to solve this problem and build this solution? *
  <br>
  <p>
    Please mention any previous startup experience, relevant domain / industry / technical expertise you have, deep relationships in the industry you're working in, or any other outsized advantages any of your teammates bring to the table. What gaps are on your team?
  </p>
</label>
<input type="text"  name="n17" required>
<br>
<label for="n18">Who are your competitors? Who are you most afraid of? How do you distinguish yourself from other players in the field - what is your secret sauce? *

</label>
<input type="text"  name="n18" required>
<br>
<label for="n19">What progress have you achieved to date? *
  <br>
  <p>
    Talk about any customer discovery or idea validation that you've done, any pilot programs or prototypes you've run or built, and any contracts/deals/revenues you've had.
  </p>
</label>
<input type="text"  name="n19" required>
<br>
<label for="n20">What milestones do you hope to achieve working on your venture full-time during the summer and throughout the following academic year? 
  <br>
  <p>
    What deadlines have you set? Please list 4-5 key milestones for Summer 2023 and 2-3 additional milestones for the 2023-2024 academic year.

  </p>
</label>
<input type="text"  name="n20" required>
<br>
<label for="n21">What are your biggest hurdles right now? What areas of support does your team need the most? *
  <br>
  <p>
    Don't worry if you're selecting too many – Predulive is an educational accelerator.
  </p>
</label>
<select  for="n21" name="n21" required>What industry best describes your market? *
  <option value=""></option>
  <option value="Validating my idea">Validating my idea</option>
  <option value="Understanding the steps necessary to build a startup">Understanding the steps necessary to build a startup</option>
  <option value="Developing product / tech support">Developing product / tech support</option>
  <option value="Access to mentors">Access to mentors</option>
  <option value="Understanding the market
  ">Understanding the market
  </option>
  <option value="Developing a launch or marketing strategy">Developing a launch or marketing strategy</option>
  <option value="Finding capital and/or investors">Finding capital and/or investors</option>
  <option value="Defining or refining the business and revenue model
  ">Defining or refining the business and revenue model
  </option>
  <option value="Hiring / finding additional team members or co-founders">Hiring / finding additional team members or co-founders</option>
  <option value="Building a personal network and connecting with other entrepreneurs">Building a personal network and connecting with other entrepreneurs</option>
  <option value="Access to customers or strategic partners">Access to customers or strategic partners</option>
  <option value="Office space to collaborate or get work done">Office space to collaborate or get work done</option>
  <option value="If other, please share in the next question">If other, please share in the next question</option>
  
  </select>
  <br>
<label for="n22">If your biggest hurdles / support needs include something other than what was listed above, please share here. 

</label>
<input type="text"  name="n22" required>
<br>
<label for="n23">How do you envision utilizing the Predulive Accelerator's resources and support systems to help you achieve your milestones? *

</label>
<input type="text"  name="n23" required>
<br>
<label for="n24">What resources have you taken advantage of on-campus or in the broader world to help you build your venture idea? *
  <br>
  <p>
    Let us know about any entrepreneurship or venture development courses, hackathons, events, forums, or other resources you've participated in.
  </p>
</label>
<input type="text"  name="n24" required>
<br>
<label for="n25">Have you formed a legal entity for your startup yet? Have you raised any funding for your startup? If so, how much and from where? *
  <br>
  <p>
    Examples include funding from family, angels, grants, scholarships, and competitions.
  </p>
</label>
<input type="text"  name="n25" required>
<br>
<label for="n26">What is your business model and plan for sustainability? How do you make money or plan on making money? 

</label>
<input type="text"  name="n26" required>
<br>
<label for="n27">Do you have any faculty or instructors involved in your startup? If so, please list their names, titles, and the capacity in which they are involved. *

</label>
<input type="text"  name="n27" required>
<br>
<label for="n28">Do you have any advisors, mentors, or additional references that can speak to your team's progress? *
  <br>
  <p>
    Please include their name, title, phone number, and email.

  </p>
</label>
<input type="text"  name="n28" required>
<br>
<label for="n29">If you have an online demo, what's the URL? *
  <br>
  <p>
    Please don't password protect it; just use an obscure url (e.g. a bit.ly link). Feel free to attach an attachment at the end of this application that gives an indication of your startup idea, model, progress, team, etc. (Max file size 30MB.)
  </p>
</label>
<input type="text"  name="n29" required>
<br>
<label for="n30">How did you hear about Predulive? *

</label>
<input type="text"  name="n30" required>
<br>
<label for="n31">Upload any relevant files here. 

</label>
<input type="file"  name="n31" required>
<br>
<label for="n32">Would you like to add anything else? 

</label>
<input type="text"  name="n32" required>

<br>
<!-- <label for="product">What industry best describes your market? * </label>
  <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault"> 
  
  <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked>
   -->

</fieldset>
<!-- <fieldset>
<legend><i class="fa fa-lock"></i> Account Login</legend>
<label for="email">Email</label>
<input type="email" id="email" name="email" required>
<label for="cr_password">Create Password</label>
<input type="password" id="cr_password" name="cr_password" required>
<label for="conf_password">Confirm Password</label>
<input type="password" id="conf_password" name="conf_password" required>
</fieldset> -->
<!-- <fieldset class="sub-opts">
<legend><i class="fa fa-tags"></i> Subscription Options</legend>
<input type="radio" name="subscription" value="free" id="free">
<div class="sub-opt">
<label class="sub-label" for="free"><i class="fa fa-check"></i> Free <span class="price">$0/mo.</span></label>
</div>
<input type="radio" name="subscription" value="deluxe" id="deluxe" checked required>
<div class="sub-opt">
<label class="sub-label" for="deluxe"><i class="fa fa-check"></i> Deluxe <span class="price">$5/mo.</span></label>
</div>
<input type="radio" name="subscription" value="premium" id="premium">
<div class="sub-opt">
<label class="sub-label" for="premium"><i class="fa fa-check"></i> Premium <span class="price">$10/mo.</span></label>
</div>
</fieldset> -->
</div>
<div class="form-footer">
<input type="submit" value="Submit" name="submit">
</div>
</form>
</div>
<!-- partial -->
</body>
</html>
