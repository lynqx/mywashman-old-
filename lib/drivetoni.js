$(window).ready(function(){
		var loc = location.hash;
		interpreta.call(this,loc)
});


$(window).on("hashchange", function(){
		var loc = location.hash;
		interpreta.call(this,loc);
		//alert('hash change');
});

var actionid ;
var mapo = {
			page:[
					{
					pagename:"home",
					pagging: "#homepage",
					action: "allien",
					},

					{
					pagename:"about",
					pagging: "#aboutpage",
					action: "allien",
					},

					{
					pagename:"features",
					pagging: "#featurespage",
					action: "allien",
					},

					{
					pagename:"product",
					pagging: "#productpage",
					action: "allien",
					},

					{
					pagename:"feedback",
					pagging: "#feedbackpage",
					action: "allien",
					},

					{
					pagename:"team",
					pagging: "#teampage",
					action: "allien",
					},

					{
					pagename:"guarantee",
					pagging: "#guaranteepage",
					action: "allien",
					},
			]
}

//var link ="#!page=login&mode=extended";
function interpreta(link){
		var phase = link.split('/')
	//	alert(phase[0])
		if((!(phase[0]==undefined))||(!(phase[0]==null))){
		var action = phase[0].replace('#!','');
		}else{
			// this redirects on page load to default homepage
			location.href="#!home"
		}
		
		if(!((phase[1]==undefined)||(phase[1]==null))){
		var subpage = phase[1]
	//	alert('yay')
		}else{
		var subpage = "none"
	//	alert('none')
		}
		if(!((phase[2]==undefined)||(phase[2]==null))){
		 actionid = phase[2]
		}else{
		 actionid = 0
		}

		engine.call(this,action,subpage,actionid)
}



function engine(page,subpage,actionid){
			function pageloader(page){
				for(var i = 0; i<mapo.page.length; i++){
					var curpage = mapo.page[i]
					var feedpage = mapo.page[i].pagging
					var xchecker = (mapo.page[i].pagename.indexOf(page)>=0?true:false)
					//alert(xchecker)
					switch(xchecker){
							case true:
						//	alert(feedpage)
							$('.drivepage').hide()
							$('#mask').hide();
							$(feedpage).show();
							return false;
							break;

							case false:
							break;
					}
				}
			};pageloader(page)

}


