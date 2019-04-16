function my$(id){
	return document.getElementById(id);
}
//设置任意的标签中间的任意文本内容
function setInnerText(element,text){
	//判断浏览器是否支持这个属性
	if(typeof element.textContent=="undefined"){
		element.innerText=text;
	}
	else{
		element.textContent=text;
	}
}
//获取任意标签中间的文本内容
function getInnerText(element){
	if (typeof element.textContent=="undefined") {
		return element.innerText;
	}else{
		return element.textContent;
	}
}