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
	if(($("#job-title").val().replace(/ /g,"")=="") || ($("#job-desc").val().replace(/ /g,"")==""))
	{
		$("#post-fail").modal();
	}
	else
	{
		$("#modal-post-title").html($("#job-title").val());
		$("#modal-post-desc").html($("#job-desc").val());
		$("#post-success").modal();
	}
});

$("#submitmyname").on("click", function()
{
	$.post("/index.php/addmyname", 
	{
		name: $("#name").val()
	}, 
	function(response)
	{
		$("#post-success").modal("hide");

		$("#nameslist").html("");

		for(var i=0; i<response.names.length; i++)
		{
			$("#nameslist").append('<h4>'+response.names[i].name+'</h4>');
		}

		$("#myname-success").modal();

	}, 'json');
});