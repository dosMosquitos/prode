var pop;		
window.addEvent('domready', function(){
	pop = new Fx.Tween(('splash'), {duration: 500,link: 'chain'});		

	$('close').addEvent('click', function(){
		pop.start('opacity', '0');
		pop.start('display', 'none');	
		});	
	$('btn').addEvent('click', function(){
		pop.start('opacity', '0');
		pop.start('display', 'none');	
		});	
	
	
});

