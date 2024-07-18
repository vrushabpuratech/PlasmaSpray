@extends('layouts.app')
@section('content')
    <!--Inner Heading start here-->
    <div class="innerheading">
        <div class="container">
            <h1>Enquiry</h1>
        </div>
    </div>
    <!--Inner Heading end here-->
    


    <!-- Middle Container Start Here -->
    <div class="whitecontarea">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <h4>Fill in Your Coating Detail</h4>
                    <form method="POST" action="{{ route('enquiryform') }}">
                        @csrf
                        <div class="row">
                            <div class="col-md-4 col-sm-6">
                                <div class="form-group">
                                    <input type="text" placeholder="Partname" class="form-control" name="partname" required>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-6">
                                <div class="form-group">
                                    <select class="form-control" name="function_of_coating" required>
                                        <option>Select Function of Coating</option>
                                        <option>1. Wear Resitance</option>
                                        <option>2. Corrosion Resistance</option>
                                        <option>3. Low Temp Wear + Corrosion</option>
                                        <option>4. High temp Wear + Corrosion</option>
                                        <option>5. Traction</option>
                                        <option>6. Electric Insulation</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-6">
                                <div class="form-group">
                                    <select class="form-control" name="type_of_coating" required>
                                        <option>Type of Coating Required</option>
                                        <option>1. Tungsten (Carbide HVOF Coating)</option>
                                        <option>2. Chrome (Carbide HVOF Coating)</option>
                                        <option>3. Chrome Oxide (Ceramic Plasma Coating)</option>
                                        <option>4. Aluminium Oxide (Ceramic Coating)</option>
                                        <option>5. Stellite 6 Coating (Stellite HVOF Coating)</option>
                                        <option>6. SS Coating (304 / 420 / 316)</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-6">
                                <div class="form-group">
                                    <select class="form-control" name="coating_thickness" required>
                                        <option>Select Coating Thickness</option>
                                        <option>0.08 - 0.125 MM Thick</option>
                                        <option>0.125 - 0.200 MM Thick</option>
                                        <option>0.200 - 0.250 MM Thick</option>
                                        <option>0.250 - 0.300 MM Thick</option>
                                        <option>>0.300 MM Thick </option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-6">
                                <div class="form-group">
                                    <select class="form-control" name="surface_finish" required>
                                        <option>Surface Finish</option>
                                        <option>4 - 6 Ra (More Rough)</option>
                                        <option>8 - 10 Ra (Very Rough)</option>
                                        <option>10 - 12 Ra (Roughest)</option>
                                        <option>1.6 - 3.2 Ra (Less Rough)</option>
                                        <option>0.8 - 1.6 Ra (Smooth)</option>
                                        <option>0.8 Ra (Grinding finish)</option>
                                        <option>0.4 - 0.6 Ra ( Polished)</option>
                                        <option>0.1 - 0.4 Ra (Mirror Finish)</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-6">
                                <div class="form-group">
                                    <select class="form-control" name="new_or_old_job" required>
                                        <option>New Job or Old Job</option>
                                        <option>New</option>
                                        <option>Old</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <div class="form-group">
                                    <input type="text" placeholder="Dia of Job" class="form-control" name="diaofjob" required>
                                    <span class="text12grey">units in mm/inch</span>
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <div class="form-group">
                                    <input type="text" placeholder="Coating Length of Job" class="form-control" name="coating_length_of_job" required>
                                    <span class="text12grey">units in mm/inch</span>
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <div class="form-group">
                                    <input type="text" placeholder="Total Length of Job" class="form-control" name="total_length_of_job" required>
                                    <span class="text12grey">units in mm/inch</span>
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <div class="form-group">
                                    <input type="text" placeholder="Weight of Job" class="form-control" name="weight_of_job" required>
                                    <span class="text12grey">optional units in kgs</span>
                                </div>
                            </div>
                            
                            
                            <script>
                            $(document).ready(function() {
                                // Restrict input to only numbers and decimal points for specified fields
                                $('input[name="diaofjob"], input[name="coating_length_of_job"], input[name="total_length_of_job"], input[name="weight_of_job"], input[name="contact_no"]').keypress(function(event) {
                                    var charCode = (event.which) ? event.which : event.keyCode;
                                    var inputValue = event.target.value + String.fromCharCode(charCode);
                            
                                    // Allow only digits (0-9), decimal point (.), and backspace (8)
                                    if (!/^\d*\.?\d*$/.test(inputValue) && charCode !== 8) {
                                        event.preventDefault();
                                    }
                                });
                            });
                            </script>
                            <div class="col-sm-6">
                                <div class="form-group" id="drawing">
                                    Drawing or Sketch of Component Available &nbsp; <span class="check_radio">
                                        <input id="yes" type="radio" name="drawing" value="yes">
                                        <label for="yes"><span
                                                style="vertical-align:middle !important;"><span></span></span> Yes</label>
                                    </span> &nbsp; <span class="check_radio">
                                        <input id="No" type="radio" name="drawing" value="no">
                                        <label for="No"><span
                                                style="vertical-align:middle !important;"><span></span></span> No</label>
                                    </span>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group" id="photo">
                                    Photo Available &nbsp; <span class="check_radio">
                                        <input id="pyes1" type="radio" name="photo" value="yes">
                                        <label for="pyes1"><span
                                                style="vertical-align:middle !important;"><span></span></span> Yes</label>
                                    </span> &nbsp; <span class="check_radio">
                                        <input id="pNo1" type="radio" name="photo" value="no">
                                        <label for="pNo1"><span
                                                style="vertical-align:middle !important;"><span></span></span> No</label>
                                    </span>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <textarea class="form-control" name="require_customization" placeholder="Require Customization?" required></textarea>
                                </div>
                            </div>
                        </div>
                        <hr style="margin-top: 0px;" />
                        <h4>Personal Info</h4>
                        <div class="row">
                            <div class="col-sm-3">
                                <div class="form-group">
                                    <input type="text" placeholder="Company Name" class="form-control"
                                        name="company_name" required>
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <div class="form-group">
                                    <input type="text" placeholder="Contact Person Name" class="form-control"
                                        name="contact_person_name" required>
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <div class="form-group">
                                    <input type="text" placeholder="Contact No." class="form-control"
                                        name="contact_no" required>
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <div class="form-group">
                                    <input type="text" placeholder="Email Id" class="form-control" name="email" required>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <textarea class="form-control" placeholder="Address" name="address" required></textarea>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <textarea class="form-control" placeholder="Remarks" name="remarks" required></textarea>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="form-group">
                                    <button type="submit" class="submitbtn">Submit</button> <button type="reset"
                                        class="resetbtn">Reset</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>


    <!-- Middle Container End Here -->
@endsection
