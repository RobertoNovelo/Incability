$("#openeye").on("click",function()
{
	$(".visibility-layer").fadeOut();
});

$("#closedeye").on("click",function()
{
	$(".visibility-layer").fadeIn();
});

$(".btn-post-job").on("click",function()
{
	
});

$("#enteryournameok").on("click",function()
{
	$("#gridSystemModal").modal();
});

$("#submitmyname").on("click", function()
{
	if($("#name").val().replace(/ /g,"")!=="")
	{
		$.post("/index.php/addmyname", 
		{
			name: $("#name").val()
		}, 
		function(response)
		{
			$("#gridSystemModal").modal("hide");

			$("#nameslist").html("");

			for(var i=0; i<response.names.length; i++)
			{
				$("#nameslist").append('<h4>'+response.names[i].name+'</h4>');
			}

			$("#myname-success").modal();

		}, 'json');
	}
	else
	{

		$("#gridSystemModal").modal("hide");
		$("#myname-fail").modal();
	}
});

$(function()
{
	var lin=document.createElement('link');
    lin.setAttribute('rel','stylesheet');
    lin.setAttribute('type','text/css');
    lin.setAttribute('href', '/res/css/bootstrap-accessibility.css');
    document.getElementsByTagName('head')[0].appendChild(lin);
    var script = document.createElement('script');
    script.src = '/res/js/bootstrap-accessibility.js';
    document.getElementsByTagName('head')[0].appendChild(script);


	$("#gridSystemModal").on("show.bs.modal", function(e) 
	{
        $("#gridSystemModal a.btn").on("click", function(e) 
        {
            $("#gridSystemModal").modal('hide');     
        });

        if(($("#job-title").val().replace(/ /g,"")=="") || ($("#job-desc").val().replace(/ /g,"")==""))
		{
			e.preventDefault();
		    e.stopImmediatePropagation();
			$("#post-fail").modal();
		    return false; 
		}
		else
		{
			$("#modal-post-title").html($("#job-title").val());
			$("#modal-post-desc").html($("#job-desc").val());
		}

    });

	$("#post-success").on("shown.bs.modal", function() 
	{
        $(".btn-post-job").focusout().blur();
        $("#Success").focusin();
    });

});








