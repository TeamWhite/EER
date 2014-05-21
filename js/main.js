function redirect(url,time) {
	if (time === 0) {
		window.location.href = url;
	} else {
		setInterval(function(){
			window.location.href = url;
		},time * 1000);
	}
}
