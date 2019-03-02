function view(base,id)
{
	ruta='index.php/producto/view';
	$.ajax({
		type:'POST',
		url:base+ruta,
		data:{'id':id},
		datatype:'json',
		success:function(request)
		{
			$("#page_modal").html(request);
		}
	})
}