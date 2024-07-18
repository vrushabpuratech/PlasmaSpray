@extends('layouts.app')
@section('content')
 <!--Inner Heading start here-->
<div class="innerheading">
<div class="container"><h1>Contact us</h1></div>    
</div>  
<!--Inner Heading end here-->
    
<!--Middle content start here-->    
<div class="whitecontarea">
<div class="container">

<div class="row">
<div class="col-md-6">
<div class="row">
<div class="col-sm-6">
<div class="textred14px"><span class="textblack14cont">Contact Person :- </span>Dhimant N Doshi </div>
<div class="topmargin20 textblack14cont">
<table width="100%" cellspacing="0" cellpadding="0" border="0">
<tbody>
<tr>
<td width="20" valign="top"><i class="fa fa-map-marker textred14px"></i></td>
<td>C-20/4 , M.I.D.C. Taloja, Raigad District, Maharashtra - 410208</td>
</tr>
<tr>
<td height="15"></td>
<td height="15"></td>
</tr>
<tr>
<td width="20" valign="top"><i class="fa fa-phone textred14px"></i></td>
<td><strong>General contact:</strong> +919136642688<br>
<strong>For enquires:</strong> +918928108572
</td>
</tr>
<tr>
<td height="15"></td>
<td height="15"></td>
</tr>
<tr>
<td width="20" valign="top"><i class="fa fa-mobile textred14px"></i></td>
<td>+91 9820718722 / 9820231088</td>
</tr>      
<tr>
<td height="15"></td>
<td height="15"></td>
</tr>
<tr>
<td width="20" valign="top"><i class="fa fa-envelope textred14px"></i></td>
<td><a href="mailto:psp@plasmaspray.co.in">psp@plasmaspray.co.in</a></td>
</tr>
<tr>
<td height="15"></td>
<td height="15"></td>
</tr>
<tr>
<td width="20" valign="top"><i class="fa fa-globe textred14px"></i></td>
<td><a href="http://www.plasmaspray.co.in/" target="_blank">www.plasmaspray.co.in</a></td>
</tr>
</tbody>
</table>    
</div>        
    
</div>
<div class="col-sm-6 rowmargin">
<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15084.077685272427!2d73.1147145!3d19.0628837!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x56ce5115b511770b!2sPlasma%20Spray%20Processors!5e0!3m2!1sen!2sin!4v1623323311117!5m2!1sen!2sin" width="100%" height="350" style="border:0;" allowfullscreen="" loading="lazy"></iframe>    
</div>    
</div>    
</div>
{{-- form --}}
<div class="col-md-6 rowmargin1">
<form method="POST" action="{{ route('save.form') }}">
@csrf
<div class="row">
<div class="col-sm-6">
<div class="form-group">
  <input type="text" class="form-control" placeholder="Name" name="name" required>
</div>    
</div>
<div class="col-sm-6">
<div class="form-group"><input type="email" class="form-control" placeholder="Email" name="email" required></div>    
</div>
<div class="col-sm-6">
<div class="form-group"><input type="text" class="form-control" placeholder="Mobile" name="mobile" class="numeric" required></div>    
</div> 
<div class="col-sm-6">
<div class="form-group"><input type="text" class="form-control" placeholder="City" name="city" ></div>    
</div>
<div class="col-sm-6">
<div class="form-group"><input type="text" class="form-control" placeholder="State" name="state"></div>    
</div>
<div class="col-sm-6">
<div class="form-group"><input type="text" class="form-control" placeholder="Country" name="country"></div>    
</div>   
</div>   
<div class="form-group">
<textarea name="message" class="form-control" rows="5" placeholder="Message"></textarea>	
</div>    
<div class="text-right">
<button type="submit" class="submitbtn">Send</button>
</div> 
</form>   
</div>   

</div>

</div>    
</div>
<!--Middle content end here-->
<script>
    $(document).ready(function() {
                                // Restrict input to only numbers and decimal points for specified fields
        $('input[name="mobile"]').keypress(function(event) {
        var charCode = (event.which) ? event.which : event.keyCode;
        var inputValue = event.target.value + String.fromCharCode(charCode);
                            
        // Allow only digits (0-9), decimal point (.), and backspace (8)
        if (!/^\d*\.?\d*$/.test(inputValue) && charCode !== 8) {
            event.preventDefault();
        }
    });
});
</script>
@endsection  


