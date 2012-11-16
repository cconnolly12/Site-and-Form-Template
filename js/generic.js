

//GENERIC FUNCTIONS

function gebi(el){	return document.getElementById(el);}
function gebn(el){	return document.getElementsByName(el);}
function gebtn(el){	return document.getElementsByTagName(el);}

//--------------------------------------------------------------------------------------------------------------------------------
//--------------------------------------------------------------------------------------------------------------------------------

//getElementsByClassName
function gebcn(classname, node){
      if(!node) node = document.getElementsByTagName("body")[0];
      var a = [];
			var re = new RegExp('\\b' + classname + '\\b');    
      var els = node.getElementsByTagName("*");    
      for(var i=0,j=els.length; i<j; i++)        
      if(re.test(els[i].className))a.push(els[i]);
      return a;
}//end function
//--------------------------------------------------------------------------------------------------------------------------------
//--------------------------------------------------------------------------------------------------------------------------------
      

function is_checked(el){
	if(gebi(el)==null) return false;
	return gebi(el).checked;
}//end function
//--------------------------------------------------------------------------------------------------------------------------------
//--------------------------------------------------------------------------------------------------------------------------------

function format_currency(the_number){
    var n= new Number(the_number);
    n = "$"+n.toFixed(2);
    return n;
}//end function
//--------------------------------------------------------------------------------------------------------------------------------
//--------------------------------------------------------------------------------------------------------------------------------


function validate_field(the_value,the_element_id,the_pattern,if_required){
/* * note: any validation changes must be reflected in the validate_field() function in the regex.php file * */

    switch(the_pattern)
    {
    case 'numeric':
  		var re_text = numeric_pattern;
  		var validation_hint= numeric_validation_hint;
      break;
    case 'opentext':
  		var re_text = opentext_pattern;
  		var validation_hint= opentext_validation_hint;
      break;
    case 'limitedtext':
  		var re_text = limitedtext_pattern;
  		var validation_hint= limitedtext_validation_hint;
      break;
    case 'password':
  		var re_text = password_pattern;
  		var validation_hint= password_validation_hint;
      break;
    case 'zipcode':
			var re_text = zipcode_pattern;
  		var validation_hint= zipcode_validation_hint;
      break;
    case 'phonenumber':
			var re_text = phonenumber_pattern;
  		var validation_hint= phonenumber_validation_hint;
      break;
    case 'email':
			var re_text = email_pattern;
  		var validation_hint= email_validation_hint;
      break;
    }

		var html_element = gebi(the_element_id);
		var req_message = (if_required==1)? 'Required' : '';
		
		if (re_text.test(the_value)==true)
			 {
			 var has_error = false;
			 html_element.style.color = '#009900';
			 html_element.innerHTML = 'Entry is Valid';
			 }
			 else
			 {
			 var has_error = true;
			 html_element.style.color = '#cc0000';
			 		 if (the_value !='')
			  	 {
					 	 html_element.innerHTML = req_message + ' - ' + validation_hint;
					 }
					 else
			  	 {
					 	 html_element.innerHTML = req_message;
					 }
			 }
		 return has_error;
}// end function
// -------------------------------------------------------------------------------------------
// -------------------------------------------------------------------------------------------



function isNumeric(strString) //  check for valid numeric strings	
{
	if(!/\D/.test(strString)) return true;//IF NUMBER
	else if(/^\d+\.\d+$/.test(strString)) return true;//IF A DECIMAL NUMBER HAVING AN INTEGER ON EITHER SIDE OF THE DOT(.)
	else return false;
	}// end function
// -------------------------------------------------------------------------------------------
// -------------------------------------------------------------------------------------------
				
				


function isInDocument(el) // check if an element exist in the document
{
    var html = document.body.parentNode;
    while (el) {
        if (el === html) {
            return true;
        }
        el = el.parentNode;
    }
    return false;
	}// end function
// -------------------------------------------------------------------------------------------
// -------------------------------------------------------------------------------------------


				
function dropdown_show_selection(the_select,boxcount) //  show/hide elements accordingly to selected index of dropdown	
{

      var the_index = the_select.selectedIndex;
      var the_name  = the_select.name;
      
      for (x=0;x<the_select.length;x++){
          for(b=1;b<=boxcount;b++){
        			var the_box_to_hide  = the_name + "_box" +x + "_" +b;
              if (isInDocument(gebi(the_box_to_hide)))$('#'+ the_box_to_hide).hide('slow');
    			}//end for(b=1;b<=boxcount;b++)	
      }// end for
      
      for(b=1;b<=boxcount;b++){
    			var the_box_to_show  = the_name + "_box" +the_index + "_" +b;
          if (isInDocument(gebi(the_box_to_show)))$('#'+ the_box_to_show).show('slow');
			}//end for(b=1;b<=boxcount;b++)	

	}// end function
// -------------------------------------------------------------------------------------------
// -------------------------------------------------------------------------------------------
				
				
function dropdown_hide_selection(the_select,boxcount) //  show/hide elements accordingly to selected index of dropdown	
{
      var the_index = the_select.selectedIndex;
      var the_name  = the_select.name;
      
      for (x=0;x<the_select.length;x++){
          for(b=1;b<=boxcount;b++){
        			var the_box_to_show  = the_name + "_box" +x + "_" +b;
              if (isInDocument(gebi(the_box_to_show)))$('#'+ the_box_to_show).show('slow');
    			}//end for(b=1;b<=boxcount;b++)	
      }// end for
      
      for(b=1;b<=boxcount;b++){
    			var the_box_to_hide  = the_name + "_box" +the_index + "_" +b;
          if (isInDocument(gebi(the_box_to_hide)))$('#'+ the_box_to_hide).hide('slow');
			}//end for(b=1;b<=boxcount;b++)	

	}// end function
// -------------------------------------------------------------------------------------------
// -------------------------------------------------------------------------------------------
				
				
				

function text_counter(the_input,m){
  var e = gebi(the_input.id);
	var n = e.value.length;
	var h = gebi(the_input.id+ "_msg");
    if(n==0){
    h.innerHTML = "";
    }else if(n>m){
    h.innerHTML ='Entry is too long - ' +  m + ' characters maximum';
    } else{
    h.innerHTML = m - n + ' characters left';
    }//end if
    
}//end function

// -------------------------------------------------------------------------------------------
// -------------------------------------------------------------------------------------------
				