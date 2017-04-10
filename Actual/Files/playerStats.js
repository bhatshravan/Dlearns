//////////////////////////////////////////////////////////
//			MOSTRAR MODAL			//
//////////////////////////////////////////////////////////
	$('#modal').on('show.bs.modal', function (event) {
	var button = $(event.relatedTarget);
	var name = button.data('name');
	var modal = $(this);
	modal.find('.modal-body').html('<div id="hc" data-name="'+name+'" style="min-width: 100%; height: 100%; margin: 0 auto"></div>');
	var xhr = $.ajax();
		xhr.abort();
		xhr = $.ajax({
		dataType: 'json',
		url: 'php/stats.php?name='+name+'&type=1',
		success: function(datos) {
			hcdata(datos);	
		}
	});
	modal.find('.modal-title').text('Statistics for ' + name);
	});
	
//////////////////////////////////////////////////////////////////////////
//			CAMBIAR DATA DE HIGHCHARTS			//
//////////////////////////////////////////////////////////////////////////
	$( ".dataswitcher" ).click(function() {
  	var type = $(this).data("typefetch"),
				name = $("#hc").data("name");
		var xhr = $.ajax();
				xhr.abort();
				xhr = $.ajax({
					dataType: 'json',
					url: 'php/stats.php?name='+name+'&type='+type,
					success: function(datos) {
						hcdata(datos);	
					}
				});
});
	
//////////////////////////////////////////////////////////
//		FUNCIÓN PARA INICIAR HIGHCHARTS		//
//////////////////////////////////////////////////////////
function hcdata (data) {

	console.log(data);

	var lol = data.xAxis,
		cat = data.series,
		type = data.type,
		acm = data.acm,
		nyan = [],
		neko = [],
		gato = [];
		lol = lol.split(",");
			
	for(var i in lol)
		nyan.push([lol[i]]);
		
	cat = cat.split(",");
		
	for(var j in cat)
		neko.push([parseFloat(cat [j])]);
		
	acm = acm.split(",");
		
	for(var k in acm)
		gato.push([parseFloat(acm [k])]);
		
	var options = '';
		
	if (data.acm)
    	options = {
			chart: {
				type: 'area'
			},
			title: {
                text: type 
			},
			xAxis: {
				categories: nyan
			},
			series: [{
				name: 'Total',
				data: neko
			}, { 
				name: 'Daily',
				data: gato
			}],

			yAxis: {
				title: {
					text: type
				},
				plotLines: [{
						value: 0,
						width: 1,
						color: '#000000'
				}]
			},
			legend: {
				layout: 'vertical',
				align: 'right',
				verticalAlign: 'middle',
				borderWidth: 0
			}
        };
	else
		options = {chart: {type: 'area'},title: { text: type }, xAxis: { categories: nyan }, series: [{ name: 'Total', data: neko }], yAxis: { title: { text: type }, plotLines: [{ value: 0, width: 1, color: '#000000' }] }, legend: { layout: 'vertical', align: 'right', verticalAlign: 'middle', borderWidth: 1 }};
   
   $('#hc').highcharts(options);
}

