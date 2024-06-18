
$("#button-contact").click(function() {
	gtag_report_conversion('http://definerkingdom.com/index.asp');
	$(".fa-spinner").show();
	$(".result").show();
	
	if ($("#username").val()==''){
		alert('Name is empty');
		$("#username").focus();
		return false;
	}
	if ($("#userphone").val()==''){
		alert('Phone is empty');
		$("#userphone").focus();
		return false;
	}	
	if ($("#useremail").val()==''){
		alert('Email is empty');
		$("#useremail").focus();
		return false;
	}	
			
    var data = $("#contact-form").serialize()+"&from=contact";
    $.ajax({
         data: data,
         type: "post",
		 cache: false,
			xhrFields: {
			  withCredentials: true
		   },			 
         url: "email_res.asp?",
         success: function(data){
			$(".fa-spinner").hide();
            $("#result-contact").html("Thank you! Email received!");
         }
	});
	return false;
});

$("#button-interested").click(function() {
	$(".fa-spinner").show();
	$(".result").show();
	gtag_report_conversion('http://definerkingdom.com/index.asp');
	
	if ($("#username-int").val()==''){
		alert('Name is empty');
		$("#username-int").focus();
		return false;
	}
	if ($("#userphone-int").val()==''){
		alert('Phone is empty');
		$("#userphone-int").focus();
		return false;
	}	
	if ($("#useremail-int").val()==''){
		alert('Email is empty');
		$("#useremail-int").focus();
		return false;
	}	
			
	var username = document.getElementById("username-int").value;
	var userphone = document.getElementById("userphone-int").value;
	var useremail = document.getElementById("useremail-int").value;
		
    var dataString = "username="+encodeURIComponent(username)+"&userphone="+userphone+"&useremail="+useremail+"&from=interested";
    $.ajax({
         data: dataString,
         type: "post",
         url: "email_res.asp?",
         success: function(data){
			$(".fa-spinner").hide();
            $("#result-int").html("Thank you! Email received!");
         }
	});
	return false;
});

$("#button-sitevisit").click(function() {
	$(".fa-spinner").show();
	$(".result").show();
	gtag_report_conversion('http://definerkingdom.com/index.asp');
	
	if ($("#username-sitevisit").val()==''){
		alert('Name is empty');
		$("#username-sitevisit").focus();
		return false;
	}
	if ($("#userphone-sitevisit").val()==''){
		alert('Phone is empty');
		$("#userphone-sitevisit").focus();
		return false;
	}	
	if ($("#useremail-sitevisit").val()==''){
		alert('Email is empty');
		$("#useremail-sitevisit").focus();
		return false;
	}	
			
	var username = document.getElementById("username-sitevisit").value;
	var userphone = document.getElementById("userphone-sitevisit").value;
	var useremail = document.getElementById("useremail-sitevisit").value;
		
    var dataString = "username="+encodeURIComponent(username)+"&userphone="+userphone+"&useremail="+useremail+"&from=sitevisit";
    $.ajax({
         data: dataString,
         type: "post",
         url: "email_res.asp?",
         success: function(data){
			$(".fa-spinner").hide();
            $("#result-sitevisit").html("Thank you! Email received!");
         }
	});
	return false;
});

$("#button-price").click(function() {
	$(".fa-spinner").show();
	$(".result").show();
	gtag_report_conversion('http://definerkingdom.com/index.asp');
	
	if ($("#username-price").val()==''){
		alert('Name is empty');
		$("#username-price").focus();
		return false;
	}
	if ($("#userphone-price").val()==''){
		alert('Phone is empty');
		$("#userphone-price").focus();
		return false;
	}	
	if ($("#useremail-price").val()==''){
		alert('Email is empty');
		$("#useremail-price").focus();
		return false;
	}	
			
	var username = document.getElementById("username-price").value;
	var userphone = document.getElementById("userphone-price").value;
	var useremail = document.getElementById("useremail-price").value;
		
    var dataString = "username="+encodeURIComponent(username)+"&userphone="+userphone+"&useremail="+useremail+"&from=price";
    $.ajax({
         data: dataString,
         type: "post",
         url: "email_res.asp?",
         success: function(data){
			$(".fa-spinner").hide();
            $("#result-price").html("Thank you! Email received!");
         }
	});
	return false;
});
