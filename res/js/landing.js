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

    alert("Turn on your screen reader (like voiceOver on MacOS), click on the closed eye and test this website.");
});