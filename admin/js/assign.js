function getBranch(sel) {
    var year_id = sel.options[sel.selectedIndex].value;  
    $("#branchdiv").html( "" );
    $("#sectiondiv").html( "" );
    if (year_id.length > 0 ) {
 
     $.ajax({
            type: "POST",
            url: "ajax/get.php",
            data: "year_id="+year_id,
            cache: false,
            beforeSend: function () {
                $('#branchdiv').html('<img src="img/loader.gif" alt="" width="24" height="24">');
            },
            success: function(html) {    
                $("#branchdiv").html( html );
            }
        });
    }
}

function getSection(sel) {
	var branch_id = sel.options[sel.selectedIndex].value;  
	if (branch_id.length > 0 ) { 
	 $.ajax({
			type: "POST",
			url: "ajax/get.php",
			data: "branches_id="+branch_id,
			cache: false,
			beforeSend: function () { 
				$('#sectiondiv').html('<img src="img/loader.gif" alt="" width="24" height="24">');
			},
			success: function(html) {    
				$("#sectiondiv").html( html );
			}
		});
	} else {
		$("#sectiondiv").html( "" );
	}
}

function getLecturer(sel) {
	var lecturer_id = sel.options[sel.selectedIndex].value;  
	if (lecturer_id.length > 0 ) { 
	 $.ajax({
			type: "POST",
			url: "ajax/get.php",
			data: "lecturer_id="+lecturer_id,
			cache: false,
			beforeSend: function () { 
				$('#lecturerdiv').html('<img src="img/loader.gif" alt="" width="24" height="24">');
			},
			success: function(html) {    
				$("#lecturerdiv").html( html );
			}
		});
	} else {
		$("#lecturerdiv").html( "" );
	}
}