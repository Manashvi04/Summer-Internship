$(document).ready(function(){

    $("#loadForm").click(function(){

        $.ajax({
            url: "form.html",
            success:function(data){
                $("#container").html(data);
            }
        });

    });

    $(document).on("submit", "#regForm", function(e){

        e.preventDefault(); // Prevent page reload

        $("#msg").html(
            "<h3 style='color:green'>Form Submitted Successfully!</h3>"
        );

    });

});