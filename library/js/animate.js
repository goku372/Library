// JavaScript Document
var i=1;var a;
window.onload=function()
{  
setInterval(function(){opacityChange();},3000);
};
function opacityChange()
{$("#image"+i).animate({opacity: 0}, 1000);
					a=document.getElementById("image" + (i+1));
if(a==null)
{
	i=0;
	}

$("#image"+(i+1)).animate({opacity: 1}, 1000);
i++;
	}
			