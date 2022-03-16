const nav=document.getElementsByTagName("nav")[0];
const topoNav=nav.offsetTop;

window.onscroll=function(){
	fixarMenuNoTopo();
}

function fixarMenuNoTopo(){
	if (window.pageYOffset >= topoNav) {
		nav.classList.add("art-nav1");
	}else{
		nav.classList.remove("art-nav1");
	}
}