

/************************** MIN STYLE ******************************************/

console.log('Det virker tester nu'); 

jQuery(".card-body").click(function() {
		if($(this).find("a").attr("href")!=null){
			window.location = $(this).find("a").attr("href"); 
		}
		return false;
	});
	 




function switchStyle() {
  if (document.getElementById('styleSwitch').checked) {
    document.getElementById('gallery').classList.add("custom");
    document.getElementById('exampleModal').classList.add("custom");
  } else {
    document.getElementById('gallery').classList.remove("custom");
    document.getElementById('exampleModal').classList.remove("custom");
  }
}


