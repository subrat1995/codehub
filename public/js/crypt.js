var passwords = ['The Lost Symbol'];
var indexOld;
var index = Math.floor((Math.random() * passwords.length));
var password = passwords[index];
var characters = [];
var counter = 0;
	
var interval = setInterval(function(){

			for(i = 0; i < counter; i++) {
				characters[i] = password.charAt(i);
			}
			for(i = counter; i < password.length; i++) {
				characters[i] = Math.random().toString(36).charAt(2);
			}
			$('#crypt').text(characters.join(''));
	}, 200);
var interval2;
	

function hack() {
	counter++;
	if(counter == password.length){
		clearInterval(interval2);
	}
}

$(window).on('load', function(){
	interval2 = setInterval(hack,200);
});



