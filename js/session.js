$(document).ready(function(){
    setInterval(function(){
        jQuery.ajax({
            type: "GET",
            url: "ajax/sessioncheck.php",
            //dataType:"json",
            success:function(response){
                if (response) {
                    window.location.href = 'index.php';
                }
                else {
                    // Process the expected results...
                }
            }
        });
    }, 3000);
});