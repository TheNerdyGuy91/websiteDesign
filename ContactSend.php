<!DOCTYPE html>
<html>
<style>
body
{
background-color: gray;
}
ul
{
 
 position: absolute;
 top: 70%;
 right: 20%;
 transform: translate(50%, 50%);
 margin 0;
 padding: 0;
 display: flex;
}
ul li
{
 list-style: none;
 color: white;
 font-family: arial;
 font-size: 5em;
 letter spacing 15px;
 animation: animate 4s infinite;
}
@keyframes animate
{
0% 
{
	color: white;
    text-shadow: 0 0 7px white;
}
50% 
{
	color: white;
    text-shadow: 0 0 7px, blue;
}
100% 
{
	color: blue;
    text-shadow: 0 0 7px cyan;
}


} 
ul li:nth-child(1)
{
	animation-delay: .2s
}
ul li:nth-child(2)
{
	animation-delay: .4s
}
ul li:nth-child(3)
{
	animation-delay: .6s
}
ul li:nth-child(4)
{
	animation-delay: .8s
}
ul li:nth-child(5)
{
	animation-delay: 1s
}
ul li:nth-child(6)
{
	animation-delay: 1.2s
}
ul li:nth-child(7)
{
	animation-delay: 1.4s
}
ul li:nth-child(8)
{
	animation-delay: 1.6s
}
ul li:nth-child(9)
{
	animation-delay: 1.8s
}
ul li:nth-child(10)
{
	animation-delay: 2s
}
</style>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<body>
<ul>
<li>T</li>
<li>H</li>
<li>A</li>
<li>N</li>
<li>K</li>
<li>-</li>
<li>Y</li>
<li>O</li>
<li>U</li>
</ul>
<button onclick="GoToHomePage()">Go To HomePage</button>

<script>
function GoToHomePage() {
    location.replace("http://csc412sfsu.com/~bfletes1/")
}
</script>

</body>


</html>