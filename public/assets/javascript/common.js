current_audio = document.getElementById('soundtrack');

current_audio.onended = function() {
	switch_audio();
};

function switch_audio() {
	current_audio.pause();
	current_audio.currentTime = 0;
	if (current_audio.id == 'soundtrack') {
		current_audio = document.getElementById('soundtrack2');
	} else { current_audio = document.getElementById('soundtrack'); }
	$('.fa-play').removeClass('fa-play').addClass('fa-pause');
	current_audio.play();
}

$(document).ready(function() {
  $( "#search-autocomplete" ).autocomplete({
    source: Router.route('internal.autocomplete')
  });

  $('.controls').on('click', '.fa-play', function() {
  	current_audio.play();
  	$(this).removeClass('fa-play').addClass('fa-pause');
  });

  $('.controls').on('click', '.fa-pause', function() {
  	current_audio.pause();
  	$(this).removeClass('fa-pause').addClass('fa-play');
  });

  $('.fa-fast-forward').click(function() {
  	switch_audio();
  });

  $('#search').click(function() {
  	console.log('eina');
  	$("#data").load(Router.route('internal.getplayer', {player: $('#search-autocomplete').val()}));
  })
});

