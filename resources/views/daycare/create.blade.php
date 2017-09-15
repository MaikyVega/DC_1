@extends('ldb.dashboard')

@section('section')

<div class="mx-auto">

  <h1> Daycare Information </h1>

  <hr>

  <form method="POST" action="/daycare">

    {{ csrf_field() }}

  	<!-- DayCare Name -->
  		<div class="form-group">
  	    <input type="text" class="form-control" id="name" name="name" placeholder="Daycare Name" required>
  	  </div>

  	  <br />


    <!-- Address Fields -->
    	<label for="Daycare_Address" class="col-form-label text-primary">Address</label>

  	  <div class="form-group">
  	    <input type="text" class="form-control" id="address1" name="address1" placeholder="Address" required>
  	  </div>

   		<div class="form-group">
  	    <input type="text" class="form-control" id="address2" name="address2" placeholder="Address (continued)">
  	  </div>

    	<div class="form-row">
      	<div class="col">
        	<input type="text" class="form-control" id="city" name="city" placeholder="City" required>
      	</div>

      	<div class="col">
        	<select class="form-control" id="state" name="state" required><option>State</option></select>
      	</div>

      	<div class="col">
        	<input type="text" class="form-control" id="zipcode" name="zipcode" placeholder="Zip Code" required>
      	</div>
   		</div>

    	<br />


    <!-- Phone Numbers -->
    	<label for="Daycare_PhoneNumbers" class="col-form-label text-primary">Phone Numbers</label>

    	<div class="row">
      	<div class="col">
        	<input type="text" class="form-control" id="phone1" name ="phone1" placeholder="Phone Number 1" required>
      	</div>

      	<div class="col">
        	<input type="text" class="form-control" id="phone2" name="phone2" placeholder="Phone Number 2 (Optional)">
      	</div>
    	</div>

    	<br />


    <!-- E-Mail -->
    	<label for="Daycare_Email" class="col-form-label text-primary">E-Mail</label>

    	<div class="form-group">
  	    <input type="email" class="form-control" id="email" name="email" placeholder="E-Mail">
  	  </div>

  	  <br />


  	<!-- Admin Details -->
  		<label for="Daycare_AdminDetails" class="col-form-label text-primary">Administrator Details</label>

    	<div class="row">
      	<div class="col">
        	<input type="text" class="form-control" id="admin_firstname" name="admin_firstname" placeholder="First Name" required>
      	</div>

      	<div class="col">
        	<input type="text" class="form-control" id="admin_lastname" name="admin_lastname" placeholder="Last Name" required>
      	</div>
    	</div>

    	<br />

    	<div class="row">
      	<div class="col">
        	<input type="email" class="form-control" id="admin_email" name="admin_email" placeholder="E-Mail" required>
      	</div>

      	<div class="col">
        	<input type="text" class="form-control" id="admin_phone" name="admin_phone" placeholder="Phone Number" required>
      	</div>
    	</div>

    	<br />

    <!-- Submit button -->
      <div class="form-group">
        <button type="submit" class="btn btn-primary">Save</button>
      </div>

    <!-- Display of validation errors (if any) upon form submission -->
      <div class = "form-group">
        @include('master.errors')
      </div>

  </form>

</div>

@endsection
