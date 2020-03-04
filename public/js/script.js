$(document).ready(function()
{

    $("#like").click(function (e) {
        e.preventDefault();

        $.ajax({
            type: 'GET',
                url: '/like/'+$(this).attr("value")
                  });

        $("#spanLikes").text("Likes:" +(parseInt($("#spanLikes").attr("value"))+1)) ;

    });
    $("#destacar").click(function (e) {
        e.preventDefault();

        $.ajax({
            type: 'GET',
            url: '/destacar/'+$(this).attr("value")
        });

        $("#card" + $(this).attr("value")).css("background-color", "#CCFFE5");

    });

});


