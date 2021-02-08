@extends('layouts.header_dashboard')

@section('content')

<div id="page-wrapper">
<form id="regForm" action="/instructor" method="POST" enctype="multipart/form-data">
     @csrf
<h1>Register:</h1>

<!-- One "tab" for each step in the form: -->
<div class="tab">

        
  <p>
  <label for="name">Name</label>
  <input class="form-control" name="instructor_name" required min="5" max="90"  type="text" placeholder="Carl James" id="example-text-input">
  </p>

  <p>
  <label for="Proffesion">Proffesion</label>
  <input class="form-control" name="proffesion" type="text" placeholder="Content Writer" id="example-search-input">
  </p>

  <p>
  <label for="email">Email</label>
  <input class="form-control" name="email" type="email" placeholder="leo@test.io" id="example-url-input">
  </p>

  <p>
  <label for="phone">Phone</label>
  <input class="form-control" name="phone_number" type="number" placeholder="+234 865 768" id="example-url-input">
  </p>

  

  <p>
  <label for="bio">Bio</label>
  <textarea class="form-control" name="instructor_bio" id="example-url-input"> </textarea>
  </p>

  <p>
  <label for="photo">Photo</label>
  <input class="form-control" accept=".jpg, .jpeg, .png" name="instructor_photo" type="file" id="example-url-input">
  </p>

</div>

<div class="tab">Social Accounts:

  <p>
  <label for="facebook">Facebook</label>
  <input name="intructor_facebook_link" placeholder="https://fb.com/jaman57" oninput="this.className = ''"></p>
  <p>
  <label for="twitter">Twitter</label>
  <input name="instructor_twitter_link" placeholder="https://twitter.com/jaman57" oninput="this.className = ''">
  </p>
  <p>
  <label for="linkdin">linkdin</label>
  <input name="instructor_linkdin_link" placeholder="https://linkdin.com/jama" oninput="this.className = ''">
  </p>

</div>

<div class="tab">Education:
 
<p>
  <label for="start year">start year</label>
  <input name="education_start_year" type="date" placeholder="3/3/2013" oninput="this.className = ''">
  </p>

  <p>
  <label for="start year">end year</label>
  <input name="education_end_year" type="date" placeholder="3/3/2023" oninput="this.className = ''">
  </p>

  <p>
  <label for="start year">Decipline</label>
  <input name="decipline" type="text" placeholder="Forensic Science" oninput="this.className = ''">
  </p>

  <p>
  <label for="start year">School</label>
  <input name="school_of_study" type="text" placeholder="National University Abuja" oninput="this.className = ''">
  </p>

  <p>
  <label for="Study description">Study Description</label>
  <textarea  class="form-control" name="study_description" id="example-url-input"> </textarea>
  </p>
 

</div>

<div class="tab">Work Experience:

<p>
 <label for="start year">start year</label>
 <input name="work_start_year" type="date" placeholder="3/3/2013" oninput="this.className = ''">
 </p>

 <p>
 <label for="end year">end year</label>
 <input name="work_end_year" type="date" placeholder="3/3/2023" oninput="this.className = ''">
 </p>

 <p>
 <label for="Position">Position</label>
 <input name="work_position" type="text" placeholder="Data Analyst" oninput="this.className = ''">
 </p>

 <p>
 <label for="company">Company Name</label>
 <input name="company_name" type="text" placeholder="Danisoft Innovative Solution" oninput="this.className = ''">
 </p>

 <p>
 <label for="job description">job description</label>
 <textarea  class="form-control" name="job_description" id="example-url-input"> </textarea>
 </p>



</div>


<div style="overflow:auto;">
  <div style="float:right;">
    <button type="button" id="prevBtn" onclick="nextPrev(-1)">Previous</button>
    <button type="button" id="nextBtn" onclick="nextPrev(1)">Next</button>
  </div>
</div>

<!-- Circles which indicates the steps of the form: -->
<div style="text-align:center;margin-top:40px;">
  <span class="step"></span>
  <span class="step"></span>
  <span class="step"></span>
  <span class="step"></span>
</div>

</form>
    </div>
     <!--Main  Close-->


				


    @endsection            