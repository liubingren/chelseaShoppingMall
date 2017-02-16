$(function(){
		$(".back").click(function(){
			window.location.href="details.html";
		});
		var count;
		var totalprice=$(".totalPrice");
		$("body").click(function(evt){
			console.log("ok");
			console.log($(evt.target));	
			if($(evt.target).is('.fa-circle-o.choice_all')||$(evt.target).is('.fa-check-circle.choice_all')){
	       	   console.log("ok");
	       	   $(evt.target).toggleClass("fa-circle-o choice_all");
               $(evt.target).toggleClass("fa-check-circle choice_all");
	            if($(evt.target).is('.fa-check-circle.choice_all')){
	            	totalprice.text(0);
	            	$(evt.target).parent().parent().parent().parent().prev().prev().find(".fa-circle-o.choice_one").removeClass("fa-circle-o choice_one").addClass("fa-check-circle choice_one");
	                var singlePrice=$(".product-price");
	                console.log(singlePrice[0].innerHTML);
	                var aCount=$(".product-price").next().next().find(".count");
	                console.log(aCount[0]);
	                for(var i=0;i<singlePrice.length;i++){
	                	 totalprice.text(parseInt(singlePrice[i].innerHTML)*parseInt(aCount[i].innerHTML)+parseInt(totalprice.text()));
	                }
	                
	            }
	            if($(evt.target).is('.fa-circle-o.choice_all')){
	            	$(evt.target).parent().parent().parent().parent().prev().prev().find(".fa-check-circle.choice_one").removeClass("fa-check-circle choice_one").addClass("fa-circle-o choice_one");
	                totalprice.text(0);
	            }
	            
	       }
			if($(evt.target).is('.fa-circle-o.choice_one')||$(evt.target).is('.fa-check-circle.choice_one')){
               console.log($(evt.target));
               $(evt.target).toggleClass("fa-circle-o choice_one");
               $(evt.target).toggleClass("fa-check-circle choice_one");
               if($(evt.target).is('.fa-check-circle.choice_one')){
               	  var singlePrice=parseInt($(evt.target).parent().next().next().find(".product-price").text());
               	  console.log(singlePrice);
               	 var aCount=parseInt($(evt.target).parent().next().next().find(".count").text());;
               	  console.log(aCount);
               	  totalprice.text(singlePrice*aCount+parseInt(totalprice.text()));
		             if($(evt.target).is('.fa-minus')){
		              console.log("mius");
					 count=parseInt($(evt.target).parent().next().text());
					 count=count > 1 ? count - 1 : 1;
					 $(evt.target).parent().next().text(count);
					 console.log(count);
		           }
					if($(evt.target).is('.fa-plus')){
		              console.log("plus");
					  count=parseInt($(evt.target).parent().prev().text());
					  count=count+1;
					   $(evt.target).parent().prev().text(count);
					  console.log(count);
		           }
               }
               if($(evt.target).is('.fa-circle-o.choice_one')){
               	  var singlePrice=parseInt($(evt.target).parent().next().next().find(".product-price").text());
               	  console.log(singlePrice);
               	 var aCount=parseInt($(evt.target).parent().next().next().find(".count").text());;
               	  console.log(aCount);
               	  totalprice.text(parseInt(totalprice.text())-singlePrice*aCount);
		             if($(evt.target).is('.fa-minus')){
		              console.log("mius");
					 count=parseInt($(evt.target).parent().next().text());
					 count=count > 1 ? count - 1 : 1;
					 $(evt.target).parent().next().text(count);
					 console.log(count);
		           }
					if($(evt.target).is('.fa-plus')){
		              console.log("plus");
					  count=parseInt($(evt.target).parent().prev().text());
					  count=count+1;
					   $(evt.target).parent().prev().text(count);
					  console.log(count);
		           }
               }
			}
			if($(evt.target).is('.fa-trash-o')){
                  console.log("del");
                  var singlePrice=parseInt($(evt.target).parent().prev().text());
               	  console.log(singlePrice);
               	  var aCount=parseInt($(evt.target).parent().next().find(".count").text());;
               	  console.log(aCount);
               	  totalprice.text(parseInt(totalprice.text())-singlePrice*aCount);
			  $(evt.target).parent().parent().parent().parent().remove();
            }
			if($(evt.target).is('.fa-minus')){
              console.log("mius");
			 count=parseInt($(evt.target).parent().next().text());
			 count=count > 1 ? count - 1 : 1;
			 $(evt.target).parent().next().text(count);
			 console.log(count);
           }
			if($(evt.target).is('.fa-plus')){
              console.log("plus");
			  count=parseInt($(evt.target).parent().prev().text());
			  count=count+1;
			   $(evt.target).parent().prev().text(count);
			  console.log(count);
          }
		
		})
})
