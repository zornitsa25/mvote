$(document).ready(function() {
	// Check user vote
	checkPoll();
});

// Check user vote
function checkPoll() {
	$.ajax({
		url: 'includes/poll.php',
		type: 'post',
		data: {request: 1},
		success: function(response) {
			$('#poll').html(response);
		}
	});
}

// Save user poll
function saveVote() {
	var checkedPoll = $("#poll input[name='poll']:checked").val();

	if(checkedPoll != undefined) {
		$.ajax({
			url: 'includes/poll.php',
			type: 'post',
			data: { request: 2,poll: checkedPoll },
			success: function(response) {
				
				if(response == 1) {
						checkPoll();
				}
			}
		});
	}
}