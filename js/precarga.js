function preCarga(tiempo,op){

		switch(op){
			case 1 :
				img="sprites.png";
				break;
			case 2 :
				img="sprites1.png";
				break;
			case 3 :
				img="sprites2.png";
				break;
			case 4 :
				img="sprites3.png";
				break;
		}

        $.preloader.start({
        modal: true,
        src : img
    });

    setTimeout(function(){
        $.preloader.stop();
    }, tiempo);
}