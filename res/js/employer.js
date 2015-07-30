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
