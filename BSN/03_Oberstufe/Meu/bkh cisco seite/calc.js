var enabled = false;
var calcu;
var app;
var calcStr = "";
var output;
function calc()
{
	if(enabled == false)
	{
		calcu.style.visibility = "visible";
		calcu.style.position = "unset";
		calcu.style.left = "unset";
		actP.style.visibility = "hidden";
		actP.style.position = "fixed";
		actP.style.left = "-100";
		enabled = true;
	}
	else
	{
		calcu.style.visibility = "hidden";
		calcu.style.position = "fixed";
		calcu.style.left = "-100";
		actP.style.visibility = "visible";
		actP.style.position = "unset";
		actP.style.left = "unset";
		enabled = false;
	}
	
}
function one()
{
	calcStr += '1';
	output.value = calcStr;
}
function two()
{
	calcStr += '2';
	output.value = calcStr;
}
function three()
{
	calcStr += '3';
	output.value = calcStr;
}
function four()
{
	calcStr += '4';
	output.value = calcStr;
}
function five()
{
	calcStr += '5';
	output.value = calcStr;
}
function six()
{
	calcStr += '6';
	output.value = calcStr;
}
function seven()
{
	calcStr += '7';
	output.value = calcStr;
}
function eight()
{
	calcStr += '8';
	output.value = calcStr;
}
function nine()
{
	calcStr += '9';
	output.value = calcStr;
}
function zero()
{
	calcStr += '0';
	output.value = calcStr;
}
function comma()
{
	calcStr += '.';
	output.value = calcStr;
}

function equals()
{
	calcStr = eval(calcStr);
	calcStr = calcStr.toString();
	output.value = calcStr;
}
function plus()
{
	calcStr += '+';
	output.value = calcStr;
}
function minus()
{
	calcStr += '-';
	output.value = calcStr;	
}
function multiply()
{
	calcStr += '*';
	output.value = calcStr;
}
function divide()
{
	calcStr += '/';
	output.value = calcStr;
}
function del()
{
	var calcStr2 = calcStr.substr(0, calcStr.length-1);
	calcStr = calcStr2;
	output.value = calcStr;
}
function AC()
{
	var calcStr2 = '';
	calcStr = calcStr2;
	output.value = calcStr;
}

function init()
{
calcu = document.getElementById("calculator");
actP = document.getElementById("actP");
output = document.getElementById("output");
}
onload=init;