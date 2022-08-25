$(document).ready(function () {
    $('#textselect').change(function () {
        var text_name = $(this).val();
        $('#textContent').html('<option>загрузка...</option>'); 
        var text_url = '/texts/' + text_name;
		
		xhr = new XMLHttpRequest();
		xhr.open("GET", text_url);
		xhr.responseType = 'text';
		
		xhr.onload = function() {
			if (xhr.status != 200) {
				alert( xhr.status + ': ' + xhr.statusText );
			} 
			else {
				let result = xhr.response;
				$('#textcontent').html(result);
			}
		};
		
		xhr.send();
	});
});