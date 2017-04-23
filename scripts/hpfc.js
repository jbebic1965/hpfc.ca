// JavaScript Document
<!--
// Visit: 
// http://www.w3schools.com/js/js_datetime.asp
// for more examples
function jbDate() { 
	var d=new Date(document.lastModified);
	var weekday=new Array("Sun","Mon","Tue","Wed","Thu","Fri","Sat")
	var monthname=new Array("Jan","Feb","Mar","Apr","May","Jun","Jul","Aug","Sep","Oct","Nov","Dec")
	document.write(weekday[d.getDay()] + ", ")
	document.write(monthname[d.getMonth()] + " ")
	document.write(d.getDate() + "/")
	document.write(d.getFullYear())}
//-->
