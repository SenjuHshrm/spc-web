@extends('layouts.app')

@section('content')
  <h1 class="mb-5" align="center">Please Fill Out the Form</h1>
  <div>
    <p><b>INSTRUCTION </b></p>
    <p class="mb-4"><font color="red">1.	Provide accurate information and print legibly to avoid delays. Incomplete form will be returned to the applicant.<br>
    2. Ensure that all documents attached to this form (if any) are complete and properly filled out.
    </p></font>
  </div>

  {{-- APPLICATION
        SECTION
          1  --}}
  <div class="mt-5">
    <p align="center"><b>1.	BASIC INFORMATION </b></p>
  </div>
  {!! Form::open(['action' => 'Register@store', 'method' => 'POST']) !!}

  {{-- first row --}}
    <div class="form-check-inline mb-4">
      <label class="form-check-label">
         <input type="radio" class="form-check-input"  value="new" name="basicnew">New
      </label>
    </div>
    <div class="form-check-inline">
     <label class="form-check-label">
       <input type="radio" class="form-check-input" value="renewal" name="basicnew">Renewal
     </label>
    </div>
    <div>
      <div class="form-check-inline mb-4">
        <label class="form-check-label">Mode of Payment:
           <input type="radio" class="form-check-input" value="annual" name="modepayment">Annually
        </label>
      </div>
      <div class="form-check-inline">
       <label class="form-check-label">
         <input type="radio" class="form-check-input" value="semi_annual" name="modepayment">Semi-Annually
       </label>
      </div>
      <div class="form-check-inline disabled">
       <label class="form-check-label">
         <input type="radio" class="form-check-input" value="quarter" name="modepayment">Quarterly
       </label>
      </div>
    </div>

    {{-- second row --}}
    <div class="form-row">
      <div class="form-group col-md-6">
        <label for="dateapp">Date Application</label>
        <input class="form-control" type="date" value="2019-01-01" id="date_application">
      </div>
      <div class="form-group col-md-6">
        <label for='tin'>TIN no.
        </label>
        <input type="text" class="form-control" name="tin">
      </div>
    </div>
    <div class="form-row">
      <div class="form-group col-md-6">
        <label for='dti1'>DTI/SEC/CDA Registration
        </label>
        <input type="text" class="form-control" name="dti3">
      </div>
      <div class="form-group col-md-6">
        <label for="dti2">DTI/SEC/CDA Registration
        </label>
        <input type="text" class="form-control" name="dti2">
      </div>
    </div>

    {{-- thrid row --}}
    <div>
      <div class="form-check-inline mb-4">
        <label class="form-check-label">Type of Business:
           <input type="radio" class="form-check-input" value="single" name="typeofbusiness">Single
        </label>
      </div>
      <div class="form-check-inline">
       <label class="form-check-label">
         <input type="radio" class="form-check-input" value="partner"name="typeofbusiness">Partnership
       </label>
      </div>
      <div class="form-check-inline">
       <label class="form-check-label">
         <input type="radio" class="form-check-input" value="corp" name="typeofbusiness">Corporation
       </label>
      </div>
      <div class="form-check-inline">
       <label class="form-check-label">
         <input type="radio" class="form-check-input" value="cooperative" name="typeofbusiness">Cooperative
       </label>
      </div>
    </div>
    <div>
      <div class="form-check-inline mb-4">Amendment: &nbsp;
        <label class="form-check-label">From:
           <input type="radio" class="form-check-input" value="from_single" name="amendfrom">Single
        </label>
      </div>
      <div class="form-check-inline">
       <label class="form-check-label">
         <input type="radio" class="form-check-input" value="from_partner" name="amendfrom">Partnership
       </label>
      </div>
      <div class="form-check-inline">
       <label class="form-check-label">
         <input type="radio" class="form-check-input" value="from_corp"name="amendfrom">Corporation
       </label>
      </div>
    </div>
    <div>
      <div class="form-check-inline mb-4">Amendment: &nbsp;
        <label class="form-check-label">To:
           <input type="radio" class="form-check-input" value="to_single" name="amendto">Single
        </label>
      </div>
      <div class="form-check-inline">
       <label class="form-check-label">
         <input type="radio" class="form-check-input" value="to_partner" name="amendto">Partnership
       </label>
      </div>
      <div class="form-check-inline">
       <label class="form-check-label">
         <input type="radio" class="form-check-input" value="to_corp" name="amendto">Corporation
       </label>
      </div>
    </div>

    <div class="form-check-inline mb-4">Are you enjoying tax incentive from any Government Entity? &nbsp;
      <label class="form-check-label">
         <input type="radio" class="form-check-input" value="entity_yes" name="entity">Yes
      </label>
    </div>
    <div class="form-check-inline">
     <label class="form-check-label">
       <input type="radio" class="form-check-input" value="entity_no" name="entity">No
     </label>
    </div>

    <p align="center">Name of Taxpayer / Registrant </p>

  <div class="form-row">
    <div class="form-group col-md-4">
      <label for='fname'>Last Name</label>
      <input type="text" class="form-control" name="registrant_lname" placeholder="Last Name">
    </div>
    <div class="form-group col-md-4">
      <label for="lname">First Name</label>
      <input type="text" class="form-control" name="registrant_fname" placeholder="First Name">
    </div>
    <div class="form-group col-md-4">
      <label for="lname">Middle Name</label>
      <input type="text" class="form-control" name="registrant_mname" placeholder="Middle Name">
    </div>
  </div>
  <div class="form-group">
    <label for="email">Business Name</label>
    <input type="text" class="form-control" name="business_name" placeholder="Business Name">
  </div>
  <div class="form-group">
    <label for="address">Trade Name/Franchise</label>
    <input type="text" class="form-control" name="franchise" placeholder="Trade Name/Franchise">
  </div>

  {{-- APPLICATION
        SECTION
          2  --}}

  <div class="mt-5">
    <p align="center"><b>2.	OTHER INFORMATION </b></p>
  </div>
  <div>
    <p class="mb-4"><font color="red">Note:<b> For renewal applications,</b> do not fill up this section unless certain information have changed.
    </p></font>
  </div>

  {{-- BUSINESS INFORMATION --}}
  <div class="form-row">
    <div class="form-group col-md-12">
      <label>Business Address</label>
      <textarea type="text" class="form-control" name="business_address" placeholder="Bdlg#/Street/Brgy/City" rows="2"></textarea>
    </div>
    <div class="form-group col-md-6">
      <label>Postal Code</label>
      <input type="number" class="form-control" name="business_postal">
    </div>
    <div class="form-group col-md-6">
      <label>Email Adress</label>
      <input type="email" class="form-control" name="business_email" placeholder="example@email.com">
    </div>
  </div>
  <div class="form-row">
    <div class="form-group col-md-6">
      <label>Telephone</label>
        <input class="form-control" type="tel" name="owner_tel" placeholder="539-966">
    </div>
    <div class="form-group col-md-6">
      <label>Mobile No.</label>
        <input class="form-control" type="tel" name="business_mobile" placeholder="09XX XXX XXXX">
    </div>
  </div>

{{-- OWNER INFORMATIONS --}}
  <div class="form-row mt-5">
    <div class="form-group col-md-12">
      <label>Owner's Adress</label>
      <textarea type="text" class="form-control" name="owner_address" placeholder="Bdlg#/Street/Brgy/City" rows="2"></textarea>
    </div>
    <div class="form-group col-md-6">
      <label>Postal Code</label>
      <input type="number" class="form-control" name="owner_postal">
    </div>
    <div class="form-group col-md-6">
      <label>Email Adress</label>
      <input type="email" class="form-control" name="owner_email" placeholder="example@email.com">
    </div>
  </div>
  <div class="form-row">
    <div class="form-group col-md-6">
      <label>Telephone</label>
        <input class="form-control" type="tel" name="owner_tel" placeholder="539-966">
    </div>
    <div class="form-group col-md-6">
      <label>Mobile No.</label>
        <input class="form-control" type="tel" name="owner_mobile" placeholder="09XX XXX XXXX">
    </div>
  </div>


{{-- IN CASE OF EMERGENCY INFORMATIONS --}}
  <div class="form-row">
    <div class="form-group col-md-6">
      <label>In Case of emergency, provide name of contact person: </label>
      <input type="text" class="form-control" name="emergency_fname" placeholder="First Name">
    </div>
    <div class="form-group col-md-6">
      <label>&nbsp;</label>
      <input type="text" class="form-control" name="emergency_fname" placeholder="First Name">
    </div>
  </div>

  <div class="form-row">
    <div class="form-group col-md-6">
      <label>Telephone/Mobile No.</label>
        <input class="form-control" type="tel" name="emergency_tel" placeholder="539-966">
    </div>
    <div class="form-group col-md-6">
      <label>Email Address</label>
        <input class="form-control" type="email" name="emergency_email" placeholder="Email Address">
    </div>
  </div>

  <div class="form-row">
    <div class="form-group col-md-2">
      <label>Business Area</label>
        <input class="form-control" type="number" name="emergency_tel" placeholder="In sq m">
    </div>
    <div class="form-group col-md-4">
      <label>Total No. of Employees in Establishment</label>
        <input class="form-control" type="number" name="totalno_employees" placeholder="Total Number of Employees">
    </div>

    <div class="form-group col-md-2 mb-2" >
      <label style="white-space: nowrap">No. of Employees Residing within</label>
        <input class="form-control" type="number" name="no_lgu" placeholder="LGU">
    </div>
    <div class="form-group col-md-2 mt-2">
      <label></label>
        <input class="form-control" type="number" name="no_male" placeholder="Male">
    </div>
    <div class="form-group col-md-2 mt-2">
      <label></label>
        <input class="form-control" type="number" name="no_female" placeholder="Female">
    </div>
  </div>

  <div class="mt-5">
    <p align="center"><b>3.	BUSINESS ACTIVITY </b></p>
  </div>
  <div>
    <p class="mb-4"><font color="red">Note:<b> For renewal applications,</b> do not fill up this section unless certain information have changed.
    </p></font>
  </div>


  <button type="submit" class="btn btn-primary mt-4">Print</button>
</form>
</div>
  {!! Form::close() !!}
@endsection
