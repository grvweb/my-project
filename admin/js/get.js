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
