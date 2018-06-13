var domain;
(for (var i = document.getElementsByClassName('domain').length - 1; i >= 0; i--) {
	domain =document.getElementsByClassName('domain')[i]+"|"+domain
})()