$("#openeye").on("click",function()
{
	$(".visibility-layer").fadeOut();
});

$("#closedeye").on("click",function()
{
	$(".visibility-layer").fadeIn();
});

$(".btn-apply").on("click",function()
{
	$("#modal-job-title").html($(this).data("jobtitle"));
	$("#apply-success").modal();
});
