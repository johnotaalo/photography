$(document).ready(function(){
	//drawfloatchart();
	getuploaddata('flot-dashboard-chart');
	getcategorizedupoads('doughnutChart');
	getuplodpercategory('categories_uploads');
	getuploadperevent('events_uploads');
	//drawdoughnut();

	$('#line-expand').click(function(){
		// alert('clicked');
		$('#graphModal').modal('show');
		$('#graph-content').html('');
		getuploaddata('graph-content');
	});
	$('#doughnut-expand').click(function(){
		// alert('clicked');
		$('#graphModal').modal('show');
		$('#graph-content').html('');
		getcategorizedupoads('graph-content');
	});

	$('.button-image').each(function() {
		animationHover(this, 'pulse');
	});

	$("#upload_button").click(function(){
		$("form#quickuploadform").submit(function(){
			var formData = new FormData($(this)[0]);

			$.ajax({
				url: $("form#quickuploadform").attr('action'),
				type: 'POST',
				data: formData,
				async: false,
				success: function (data) {
					obj = jQuery.parseJSON(data);
				    setTimeout(function() {
					$.gritter.add({
							title: obj.type,
							text: obj.message,
							time: 4000
						});
					}, 4000);
				},
				cache: false,
				contentType: false,
				processData: false
			});
			$('html, body').animate({scrollTop: 0}, 800);
			getuploaddata('flot-dashboard-chart');
			getcategorizedupoads('doughnutChart');
			getuplodpercategory('categories_uploads');
			return false;
		});
	});
});

function getuploaddata(container)
{
	$.get(base_url+'analytics/monthlyuploadstatistics', function(data){
		obj = jQuery.parseJSON(data);
		drawfloatchart(obj, container);
	});
}

function getcategorizedupoads(container)
{
	$.get(base_url+'analytics/categorizeuploads', function(data){
		obj = jQuery.parseJSON(data);
		drawdoughnut(obj, container);
	});
}

function getuplodpercategory(container)
{
	$.get(base_url+'analytics/uploadspercategory', function(data){
		obj = jQuery.parseJSON(data);
		drawdoughnut(obj, container);
	});
}

function getuploadperevent(container)
{
	$.get(base_url+'analytics/uploadsperevent', function(data){
		obj = jQuery.parseJSON(data);
		drawdoughnut(obj, container);
	});
}