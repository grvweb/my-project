$(document).ready(function(){
    setInterval(function(){
        jQuery.ajax({
            type: "GET",
            url: "ajax/sessioncheck_stop.php",
            //dataType:"json",
            success:function(response){
                if (response) {
                    window.location.href = 'wait.php';
                }
                else {
                    // Process the expected results...
                }
            }
        });
    }, 3000);
});