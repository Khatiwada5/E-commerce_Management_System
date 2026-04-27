	

	function searchFunction(){

 			var Http= new XMLHttpRequest();
 			Http.open('POST','../ajax_files/searchItem.php', true);
 			
 			var data= new FormData();
 			data.append('search', this.value);
 			Http.send(data);

 			Http.onreadystatechange= function(){
 				if(Http.readyState==4){

 				document.getElementById('furniture').innerHTML=Http.responseText;
 					
 				}
 			}
		}
		function myLoad(){
			
			var btn= document.getElementById('search');
			btn.addEventListener('keyup', searchFunction);
		}

		document.addEventListener('DOMContentLoaded', myLoad);