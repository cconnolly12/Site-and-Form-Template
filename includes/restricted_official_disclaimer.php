<?php 

// VERSION 2.1 - July 11, 2011



if ($bc_status_required){

$bc_status_html = <<<BCSTATUSHTML


          <table class="field_table" id="bc_status_table" border="0" cellpadding="0" cellspacing="0" summary="" style="width:100%;margin-bottom:5px" >
            <tr>
          	  <td class="label" style="text-align:center; width:100%">
                   Please register your attendance by selecting one of the following options:
          		</td>
					</tr>
					<tr>
          	  <td class="input"  style="text-align:center;  width:100%;">
                  <input type="radio" name="bc_status_popup" class="" id="bc_status_client"  value="Client" onclick="bypass_disclaimer(this,false); adjust_tb_minus('300');adjust_reg_form(this.value);$('#bc_status_box').show('slow');"  />
                  <label id="bc_status" id="bc_status_label_client" for="bc_status_client" class="radio_label">Client</label>


                  <input type="radio" name="bc_status_popup" class="" id="bc_status_employee"  value="Employee"   onclick="bypass_disclaimer(this,true); adjust_tb_minus('90');adjust_reg_form(this.value);$('#bc_status_box').hide('slow');"  />
                  <label id="bc_status" id="bc_status_label_employee" for="bc_status_employee" class="radio_label">Employee</label>

       
          		</td>
            </tr>
        </table>	

 
<div id="bc_status_box" style="display:none;">

BCSTATUSHTML;

}else{

$bc_status_html = <<<BCSTATUSHTML

<br />
<br />

<div id="bc_status_box" style="display:block;">


BCSTATUSHTML;

}//end bc_status_required

?>

<div id="restricted_official_popup" style="display:none;" >
<!-- DISCLAIMER ON TOP OF ANY REGISTRATION PAGE -->


 

 <?php echo $bc_status_html ;?>
 

<p>

Barclays Bank PLC, and its subsidiaries and affiliates, seek to comply with laws concerning the business entertainment
of clients including
<a href="javascript:void(0)"  onclick="window.open('http://www.barclayscommunications.com/csny_admin/restricted_persons_definition.html','','width=800,height=650')">public officials, employees of government owned/controlled entities, and other restricted persons
(click this link for definition of restricted persons)</a>.
In accepting this invitation, I confirm that to the best of my knowledge, I am allowed to attend the&nbsp;<?php echo EVENT_NAME ; ?>&nbsp;and
 have sought prior approval from my employer, if such approval is required. I agree to follow any restrictions imposed
on me by my jurisdiction of employment and/or employer, including but not limited to any restriction or
prohibition on the receipt of or reimbursement for entertainment, the filing of any required disclosures, 
or the reimbursement of Barclays for any applicable costs associated with this event if required. 


</p>





          <table class="field_table" id="restricted_official_table" border="0" cellpadding="0" cellspacing="0" summary="">
            <tr>
          	  <td>
                 
                  <table border="0" cellpadding="0" cellspacing="0" >
                  <tr>
                  <td style="vertical-align:top; padding-right:5px">
    								  <input type="radio" name="restricted_official_popup" class="" id="restricted_official_yes"  value="Yes" onclick="adjust_tb_plus('500'); $('#restricted_official_box').show('slow');"  />
                  </td>
                  <td style="vertical-align:top">
                      <label  id="restricted_official_label_yes" for="restricted_official_yes" class="radio_label">
    								<b>I AM</b> a public employee or official or other restricted person and I certify that I have read and understand this disclaimer.
    									</label>
                  </td>
                  </tr>
                  <tr>
                  <td style="vertical-align:top; padding-right:5px">
                      <input type="radio" name="restricted_official_popup" class="" id="restricted_official_no"  value="No" onclick="adjust_tb_minus('300'); $('#restricted_official_box').hide('slow'); "  />
                  </td>
                  <td style="vertical-align:top">
                      <label id="restricted_official_label_no" for="restricted_official_no" class="radio_label">
    								 <b>I AM NOT</b> a public employee or official or other restricted person and I certify that I have read and understand this disclaimer.  
    									</label>
                  </td>
                  </tr>
                  </table>
          		</td>
            </tr>
            <tr><td colspan="2" id="restricted_official_msg" class="msg_div"></td></tr>
        </table>	
			


 <div id="restricted_official_box" style="display:none;">


<!-- RESTRICTED OFFICIAL ACKNOWLEDGEMENT -->
<p>
<b>For Public Employees, Public Officials or Other Restricted Persons only:</b>
<br />
<br />
I acknowledge that Barclays Bank PLC, and its subsidiaries and affiliates, will provide entertainment, including food and beverages, in association with this event and if I accept such entertainment it is my obligation to identify the relevant costs and ensure that I am in compliance with all policies, executive orders, regulations or laws that apply to me.
I further acknowledge that if I receive the entertainment, I may be required by policy, executive order, regulation, or law to reimburse Barclays Bank PLC, or its subsidiaries, for the applicable costs.  


</p>

          <table class="field_table" id="accept_entertainment_table" border="0" cellpadding="0" cellspacing="0" summary="">
            <tr>
          	  <td>

							
                  <table border="0" cellpadding="0" cellspacing="0" >
                  <tr>
                  <td style="vertical-align:top; padding-right:5px">
									    <input type="radio" name="accept_entertainment_popup" class="" id="accept_entertainment_yes"  value="Yes" />
                  </td>
                  <td style="vertical-align:top">
                      <label id="accept_entertainment_label_yes" for="accept_entertainment_yes" class="radio_label">
    									I will attend and accept entertainment (and reimburse for applicable costs, if required)
    									</label>
                  </td>
                  </tr>
                  <tr>
                  <td style="vertical-align:top; padding-right:5px">
                  <input type="radio" name="accept_entertainment_popup" class="" id="accept_entertainment_no"  value="No" />
                  </td>
                  <td style="vertical-align:top">
                  <label id="accept_entertainment_label_no" for="accept_entertainment_no" class="radio_label">
									I will attend but will not accept entertainment
									</label>
                  </td>
                  </tr>
                  </table>
							
          		</td>
            </tr>
            <tr><td colspan="2" id="accept_entertainment_msg" class="msg_div">&nbsp;</td></tr>
        </table>	
				
				





</div><!-- restricted_official_box -->

</div><!-- bc_status_box -->


          <table class="field_table" id="restricted_submit_table" border="0" cellpadding="0" cellspacing="0" summary="" style="width:100%">
            <tr>
          	  <td class="label"> </td>
          	  <td class="input">
                <input type="button" class="button_generic_blue" class="button_generic_blue" style="color:#FFFFFF;"  onmouseout="this.style.backgroundColor='#00AEEF'; this.style.color='#FFFFFF';" onmouseover="this.style.backgroundColor='#FFFFFF'; this.style.color='#00AEEF';"  name="submit"  id="gotoreg_button"  value="Go to Registration" onclick="validate_restricted_officer();" />
                <input type="button" class="button_generic_blue" class="button_generic_blue" style="color:#FFFFFF;"  onmouseout="this.style.backgroundColor='#00AEEF'; this.style.color='#FFFFFF';" onmouseover="this.style.backgroundColor='#FFFFFF'; this.style.color='#00AEEF';"  name="reset" id="cxlreg_button"  value="Cancel" onclick="history.go(-1)" />
       		  </td>
            </tr>
						<tr><td> </td><td id="submit_msg" class="msg_div" style="padding:0" >&nbsp;</td></tr>
          </table>


				




</div><!-- <div id="restricted_official_popup" style="display:none;" class="msgbox_blue"> -->





<input type="button" style="display:none;"  value="" id="linktoreg" onclick="tb_show(null, '#TB_inline?height=200&width=800&inlineId=restricted_official_popup&modal=true', null);" class="thickbox" />


<script type="text/javascript">
<!--

 $(document).ready(function(){

 
<?php

if(!$_POST){
    echo "gebi('linktoreg').click();";
    if ($bc_status_required){
    echo "gebi('TB_ajaxContent').style.height= '95px';";//height when start without bc_status
    }else{
    echo "gebi('TB_ajaxContent').style.height= '300px';";//height when start with bc_status
    }//end if ($bc_status_required)

}//end if(!$_POST)
?>

 });


// -->
</script>


<script type="text/javascript">
<!--


function  adjust_tb_plus(the_height){
    gebi('TB_ajaxContent').style.height= the_height+'px'
    gebi('TB_window').style.marginTop= '-300px'

}//end function adjust_tb() 

function  adjust_tb_minus(the_height){
    gebi('TB_ajaxContent').style.height= the_height+'px'
}//end function adjust_tb() 

function  adjust_reg_form(the_status){
    var boxes_to_show = ".bc_"+the_status+"_box"
    $('.bc_status_box').hide('slow');
    $(boxes_to_show).show('slow');
}//end function adjust_reg_form 



function bypass_disclaimer(the_input,yes){
    gebi('bc_status').value=the_input.value;
		gebi('restricted_official_no').checked=false;
		gebi('accept_entertainment_no').checked=false;
		gebi('accept_entertainment_yes').checked=false;

    if(yes){
      gebi('restricted_official').value='No';
      gebi('accept_entertainment').value='';
			gebi('restricted_official_no').checked=true;
			$('#restricted_official_box').hide('slow');			
    }//end if(is_on)

}// end function bypass_disclaimer(is_on)


function validate_restricted_officer(){

var cps = gebn('bc_status_popup');
var cpm = "";
var s=0;
var sm = "Please register your attendance by selecting one of the following options \n";


for (x=0;x<cps.length;x++){
    cpm += "\n" + cps[x].value;
var the_input_id = cps[x].id

		
    if (is_checked(the_input_id))s++;
}// end for

sm += cpm

if (s==0 && cps.length>0){

	 alert(sm);

}else{

      var ro_y = 'restricted_official_yes'
      var ro_n = 'restricted_official_no'
      var ae_y = 'accept_entertainment_yes'
      var ae_n = 'accept_entertainment_no'

			//hidden fields on the registration form
      var ro_hidden = gebi('restricted_official');
      var ae_hidden = gebi('accept_entertainment');
      
      if(is_checked(ro_y)){
          if(is_checked(ae_y)||is_checked(ae_n)){
					    ro_hidden.value = gebi(ro_y).value;
					    ae_hidden.value = (is_checked(ae_y))? gebi(ae_y).value : gebi(ae_n).value ;
							tb_remove();
          }else{
              alert("Please indicate whether you will accept entertainment")
          }//end if (is_checked(ae_y)||is_checked(ae_n))
      }else{
          if(is_checked(ro_n)){
					    ro_hidden.value = gebi(ro_n).value;
							tb_remove();
          }else{
					   alert("Please indicate whether or not you are a public employee/restricted official");
					 }// end if(is_checked(ro_n))
      }//end if(is_checked(ro_y))

}//end if (s==0)


}//end function validate_restricted_officer()


// -->
</script>



