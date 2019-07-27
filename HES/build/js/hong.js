$(document).ready(function() {
	$('.btn_delete_h').on('click', function() {
        var result = confirm('delete it?');
		if (result) {
			$.ajax({
				type: 'POST',
				url: 'delete_program.php',
				data: {id:$(this).data('id')},
				dataType: 'json',
				success: function(data, status, xhr) {
					console.log(data);
					alert('success');
					location.reload();
				},
				error: function(jqXHR, textStatus, errorThrown) {
					console.log(jqXHR.responseText);
					alert('fail');
				}
			});
		}
		return false;
    });
	
	$('.btn_display_h').on('click', function() {
	    var thiz = $(this);
		$.ajax({
				type: 'POST',
				url: 'change_display_program.php',
				data: {id:$(this).data('id'), display: $(this).hasClass('btn-success') ? 0 : 1},
				dataType: 'json',
				success: function(data, status, xhr) {
					if (data.display == 1) {
						thiz.addClass('btn-success');
						thiz.removeClass('btn-danger');
						thiz.html('Show');
					} else {
						thiz.addClass('btn-danger');
						thiz.removeClass('btn-success');
						thiz.html('Hide');
					}
				},
				error: function(jqXHR, textStatus, errorThrown) {
					console.log(jqXHR.responseText);
					alert('fail');
				}
		});
	
		return false;
    });
});
