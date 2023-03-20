<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="theme-color" content="#000000"/>
<center><h1><a href="./"><img src="../img/logo.png" width="25" height="25"></img></a> THREAT GRID</h1></center>
<link rel="icon" href="../img/logo.png	" type="image/icon type">
<title>
Threat Grid : Delete API Call
</title>
<style>

@import url("https://fonts.googleapis.com/css2?family=Asap&family=Roboto:ital,wght@0,500;0,900;1,500&display=swap");

header {
  width: 100%;
  height: 40vh;
  display: inline-block;
  flex-direction: column;
  align-items: center;
}
header h1 {
  position: relative;
  left: 10%;
  width: 80%;
  font-size: 60px;
  font-weight: 600;
  color: transparent;
  -webkit-background-clip: text;
  background-clip: text;
}

.preloader {
  background-image: url('../img/pikrepo.jpg');
  background-repeat: no-repeat;
  /*background-position: center;*/
  background-attachment: fixed;
  background-size: 100% 100%;
    width: 100%;
    height: 100%;
    position: fixed;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    z-index: 999999;
    -webkit-transition: 0.6s;
    -o-transition: 0.6s;
    transition: 0.6s;
    margin: 0 auto;
}
.preloader .preloader-circle {
    width: 100px;
    height: 100px;
    position: absolute;
    top: 50%;
    left:50%;
    margin: -76px 0 0 -76px;
    border-style: solid;
    border-width: 3px;
    border-top-color: #ff656a;
    border-bottom-color: transparent;
    border-left-color: transparent;
    border-right-color: transparent;
    z-index: 10;
    border-radius: 50%;
    -webkit-box-shadow: 0 1px 5px 0 rgba(35, 181, 185, 0.15);
    box-shadow: 0 1px 5px 0 rgba(35, 181, 185, 0.15);
    background-color: #ffffff;
    -webkit-animation: zoom 2000ms infinite ease;
    animation: zoom 2000ms infinite ease;
    -webkit-transition: 0.6s;
    -o-transition: 0.6s;
    transition: 0.6s;
}
.preloader .preloader-circle2 {
    border-top-color: #0078ff;
}
.preloader .preloader-img {
    position: absolute;
    top: 50%;
    z-index: 200;
    left: 0;
    right: 0;
    margin: 0 auto;
    text-align: center;
    display: inline-block;
    -webkit-transform: translateY(-50%);
    -ms-transform: translateY(-50%);
    transform: translateY(-50%);
    padding-top: 6px;
    -webkit-transition: 0.6s;
    -o-transition: 0.6s;
    transition: 0.6s;
}
.preloader .preloader-img img {
    max-width: 55px;
}
.preloader .pere-text strong {
    font-weight: 800;
    color: #dca73a;
    text-transform: uppercase;
}

@-webkit-keyframes zoom {
    0% {
        -webkit-transform: rotate(0deg);
        transform: rotate(0deg);
        -webkit-transition: 0.6s;
        -o-transition: 0.6s;
        transition: 0.6s;
    }
    100% {
        -webkit-transform: rotate(360deg);
        transform: rotate(360deg);
        -webkit-transition: 0.6s;
        -o-transition: 0.6s;
        transition: 0.6s;
    }
}
@keyframes zoom {
    0% {
        -webkit-transform: rotate(0deg);
        transform: rotate(0deg);
        -webkit-transition: 0.6s;
        -o-transition: 0.6s;
        transition: 0.6s;
    }
    100% {
        -webkit-transform: rotate(360deg);
        transform: rotate(360deg);
        -webkit-transition: 0.6s;
        -o-transition: 0.6s;
        transition: 0.6s;
    }
}

#loader {
  position: absolute;
  left: 50%;
  top: 50%;
  z-index: 1;
  width: 120px;
  height: 120px;
  margin: -76px 0 0 -76px;
  border: 16px solid #ff0000;
  border-radius: 50%;
  border-top: 16px solid #00ff00;
  -webkit-animation: spin 2s linear infinite;
  animation: spin 2s linear infinite;
}

@-webkit-keyframes spin {
  0% { -webkit-transform: rotate(0deg); }
  100% { -webkit-transform: rotate(360deg); }
}

@keyframes spin {
  0% { transform: rotate(0deg); }
  100% { transform: rotate(360deg); }
}

/* Add animation to "page content" */
.animate-bottom {
  position: relative;
  -webkit-animation-name: animatebottom;
  -webkit-animation-duration: 1s;
  animation-name: animatebottom;
  animation-duration: 1s
}

@-webkit-keyframes animatebottom {
  from { bottom:-100px; opacity:0 }
  to { bottom:0px; opacity:1 }
  0%   {filter: blur(8px);}
  25%  {filter: blur(6px);}
  50% {filter: blur(4px);}
  75%  {filter: blur(2px);}
  100% {filter: blur(0px);}

}

@keyframes animatebottom {
  from{ bottom:-100px; opacity:0 }
  to{ bottom:0; opacity:1 }
  0%   {filter: blur(8px);}
  25%  {filter: blur(6px);}
  50% {filter: blur(4px);}
  75%  {filter: blur(2px);}
  100% {filter: blur(0px);}
}

#myDiv {
  display: none;
  text-align: center;
}
th, td {
  text-align: center;
  padding-top: 5px;
  padding-bottom: 5px;
  padding-right: 15px;
  padding-left: 15px;
}

@keyframes colorchange {
  0%   {background: red;filter: blur(8px);}
  25%  {background: green;filter: blur(6px);}
  50% {background: linear-gradient(to left, #800000 0%, #003300 100%);filter: blur(4px);}
  75%  {background: linear-gradient(to right, #800000 0%, #003300 100%);filter: blur(2px);}
  100% {background: linear-gradient(to left, #800000 0%, #003300 100%);filter: blur(0px);}
}

th {
  position: sticky;
  top: 0;
  border: 1px solid cyan;
  background: linear-gradient(to right, #00ffff 0%, #808080 2%, #5A5A5A 10%, #000000 30%, #000000 70%, #5A5A5A 90%, #808080 98%, #00ffff 100%);
  color: white;
  }

.tableContainer {
    height: 45%;
    width: 60%;
    overflow-y: scroll;
}
.table {
    position: sticky;
}

::-webkit-scrollbar {
    display: none;
}

.tableContainer {
    -ms-overflow-style: none;  /* Internet Explorer 10+ */
    scrollbar-width: none;  /* Firefox */
}
.tableContainer::-webkit-scrollbar {
    display: none;  /* Safari and Chrome */
}

body {
font-family: "Asap", sans-serif;
color: white;
 /*background: radial-gradient(#e0ffff, #000000);*/
  background-image: url('../img/image.jpg');
  background-repeat: no-repeat;
  /*background-position: center;*/
  background-attachment: fixed;
  background-size: 100% 100%;
  /*height: 100%;
  filter: blur(8px);
    -webkit-filter: blur(8px);
  animation-name: colorchang;
  animation-duration: 4s;*/
}

tr {
color: black;
}

.panel { display: none; }
.show { display: block; }

/*
button { text-transform: uppercase; }
button:hover { cursor: pointer; background-color: #fffff0; }
*/


button{
  font-family: "Asap", sans-serif;
  color: cyan;
  background-color: inherit;
  border: 0;
  cursor: pointer;

}

.button1 {
        border: 0;
        border-color: #18bccc;
        border-radius: 100%;
        cursor: pointer;
        ///padding-top: 10;
        ///padding-left: 10;
        ///height: 30;
        width: 40;
        ///z-index: 1;
        appearance: none;
        background-color: inherit;
        color: cyan;
        font-size: 30px;
        transition: transform .7s ease-in-out;
        margin-left:10px;
}

.button1:hover {
        transform: rotate(360deg);
}

.button2{

  font-family: "Asap", sans-serif;
  color: cyan;
  background-color: inherit;
  border: 0;
  cursor: pointer;

}

.button2:hover {
        color: white;
}

#q {
  border: none;
  background: transparent;
  margin: 0;
  padding: 7px 8px;
  font-size: 14px;
  color: inherit;
  border: 1px solid transparent;
  border-radius: inherit;
   margin-left: 5%;
   /*padding: 5px;
   font-size: 1em;
   line-height: 20px;
   background-color: inherit;
   color: white;
   border-color: #18bccc;
   border-radius: 12px;*/
}

#q::placeholder {
color: #bbb;
}

#b {
   /* image replacement */
   /*text-indent: -99999px;*/
  text-indent: -999px;
  overflow: hidden;
  width: 40px;
  padding: 0;
  margin: 0;
  border: 1px solid transparent;
  border-radius: inherit;
  background: transparent url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' fill='cyan' width='16' height='16' class='bi bi-search' viewBox='0 0 16 16'%3E%3Cpath d='M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z'%3E%3C/path%3E%3C/svg%3E") no-repeat center;
  cursor: pointer;
  opacity: 0.7;
  font-size: 20px;

   /* placing next to input using float or absolute positioning omitted ... */
}

#b::hover {
  opacity: 1;
}

#b1 {
   /* image replacement */
   /*text-indent: -99999px;*/
  text-indent: -999px;
  overflow: hidden;
  width: 40px;
  padding: 0;
  margin: 0;
  border: 1px solid transparent;
  border-radius: inherit;
  background: transparent url("data:image/svg+xml;charset=UTF-8,%3csvg style='color: rgb(0, 255, 255);' xmlns='http://www.w3.org/2000/svg' width='24' height='24' fill='currentColor' class='bi bi-activity' viewBox='0 0 16 16'%3e%3cpath fill-rule='evenodd' d='M6 2a.5.5 0 0 1 .47.33L10 12.036l1.53-4.208A.5.5 0 0 1 12 7.5h3.5a.5.5 0 0 1 0 1h-3.15l-1.88 5.17a.5.5 0 0 1-.94 0L6 3.964 4.47 8.171A.5.5 0 0 1 4 8.5H.5a.5.5 0 0 1 0-1h3.15l1.88-5.17A.5.5 0 0 1 6 2Z' fill='%2300ffff'%3e%3c/path%3e%3c/svg%3e") no-repeat center;
  cursor: pointer;
  opacity: 0.7;
  font-size: 20px;

   /* placing next to input using float or absolute positioning omitted ... */
}

#b1::hover {
  opacity: 1;
}

#q:focus {
  box-shadow: 0 0 3px 0 cyan;
  border-color: cyan;
  outline: none;
}

#ib {
  border: none;
  background: transparent;
  margin: 0;
  padding: 7px 8px;
  font-size: 14px;
  color: inherit;
  border: 1px solid transparent;
  border-radius: inherit;
}

#ib::placeholder {
color: #bbb;
}

#ib:focus {
  box-shadow: 0 0 3px 0 cyan;
  border-color: cyan;
  outline: none;
}

#ibdid {
  border: none;
  background: transparent;
  margin: 0;
  padding: 7px 8px;
  font-size: 14px;
  color: inherit;
  border: 1px solid transparent;
  border-radius: inherit;
}

#ibdid::placeholder {
color: #bbb;
}

#ibdid:focus {
  box-shadow: 0 0 3px 0 cyan;
  border-color: cyan;
  outline: none;
}

#ibdoid {
  border: none;
  background: transparent;
  margin: 0;
  padding: 7px 8px;
  font-size: 14px;
  color: inherit;
  border: 1px solid transparent;
  border-radius: inherit;
}

#ibdoid::placeholder {
color: #bbb;
}

#ibdoid:focus {
  box-shadow: 0 0 3px 0 cyan;
  border-color: cyan;
  outline: none;
}

.loginbox {
   background: rgba(256, 256, 256, 0.1);
   margin-top: 10%;
   margin-bottom: 10%;
   margin-left: 35%;
   margin-right: 35%;
   overflow: hidden;
}

.logintxt{
   color: white;
}

.searchform{ margin-left: -100%; }

</style>

<center>

<body onload="myFunction()">
<!-- Preloader Start -->
<div id="preloader-active">
<div class="preloader d-flex align-items-center justify-content-center">
<div class="preloader-inner position-relative">
<div class="preloader-circle">
<div class="preloader-img pere-text"><img src="../img/loaderimg.png" /></div></div>
</div>
</div>
</div>
<!-- Preloader Ends -->

<div style="display:none;" id="myDiv" class="animate-bottom">
<div class="container">
<div class="loginbox">
<br>
<div class="logintxt">
<h2><b>API CALL FOR DELETING</b></h2>

<div class="buttons">
<button data-id="del" class="button2">DEL-USR</button>
&nbsp&nbsp&nbsp&nbsp
<button data-id="delo" class="button2">DEL-ORG</button>
&nbsp&nbsp&nbsp&nbsp
<button data-id="clear" class="button2" onclick="clearAllResults()">CLEAR</button>
</div>

<div class="panel" id="del">
<h4>DELETE USER:</h4>
<input type="text" id="ibdid" name="delid" placeholder="Login ID." size="15" autocomplete="off">
<button class="button2" type="submit" name="formdel" id="delentry" value="submit">Delete</button>
<p id="delentop"></p>
</div>

<div class="panel" id="delo">
<h4>DELETE ORGANIZATION:</h4>
<input type="text" id="ibdoid" name="deloid" placeholder="Organization ID." size="15" autocomplete="off">
<button class="button2" type="submit" name="formdelo" id="deloentry" value="submit">Delete</button>
<p id="deloentop"></p>
</div>

<div class="panel" id="clear">
</div>

<br>
<div><br></div>
</div>

<script>
var inputdel = document.getElementById("ibdid");
//ENTER WILL WORK AS PING IN INPUT BOX OF PORT
// Execute a function when the user presses a key on the keyboard
inputdel.addEventListener("keypress", function(event) {
  // If the user presses the "Enter" key on the keyboard
  if (event.key === "Enter") {
    // Cancel the default action, if needed
    event.preventDefault();
    // Trigger the button element with a click
    document.getElementById("delentry").click();
  }
});
</script>

<script>
document.getElementById("delentry").addEventListener("click", function() {
//STATUS WILL BE CHECKED BY PASSING/SENDING HOST AND PORT AS PARAMETERS OF A POST REQUEST AND RESPONSE IS RECIEVED DYNAMICALLY
//USING XMLHTTPREQUESTS
// Get the input field
  var delid = document.getElementById("ibdid").value;

  var xhr = new XMLHttpRequest();
  xhr.open("POST", "api/delusr.php", true);
  xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
  xhr.onreadystatechange = function() {
    if (this.readyState === XMLHttpRequest.DONE && this.status === 200) {
            document.getElementById("delentop").innerHTML = this.responseText;
                // update the status in the table with the returned data
    }
  };
  xhr.send("delid=" + delid);
});
</script>

<script>
var inputdelo = document.getElementById("ibdoid");
//ENTER WILL WORK AS PING IN INPUT BOX OF PORT
// Execute a function when the user presses a key on the keyboard
inputdelo.addEventListener("keypress", function(event) {
  // If the user presses the "Enter" key on the keyboard
  if (event.key === "Enter") {
    // Cancel the default action, if needed
    event.preventDefault();
    // Trigger the button element with a click
    document.getElementById("deloentry").click();
  }
});
</script>

<script>
document.getElementById("deloentry").addEventListener("click", function() {
//STATUS WILL BE CHECKED BY PASSING/SENDING HOST AND PORT AS PARAMETERS OF A POST REQUEST AND RESPONSE IS RECIEVED DYNAMICALLY
//USING XMLHTTPREQUESTS
// Get the input field
  var deloid = document.getElementById("ibdoid").value;

  var xhr = new XMLHttpRequest();
  xhr.open("POST", "api/delorg.php", true);
  xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
  xhr.onreadystatechange = function() {
    if (this.readyState === XMLHttpRequest.DONE && this.status === 200) {
            document.getElementById("deloentop").innerHTML = this.responseText;
                // update the status in the table with the returned data
    }
  };
  xhr.send("deloid=" + deloid);
});
</script>

<script>
function clearAllResults()
{
document.getElementById("delentop").innerHTML = '';
document.getElementById("deloentop").innerHTML = '';
var valu= document.getElementById("ibdid");
var valo= document.getElementById("ibdoid");

if (valu.value !="" || valo.value !="")
{
  valu.value = "";
  valo.value = "";
}

}

</script>

<script>

// Cache out buttons container, and all of the panels
const buttons = document.querySelector('.buttons');
const panels = document.querySelectorAll('.panel');

// Add an event listener to the buttons container
buttons.addEventListener('click', handleClick);

// When a child element of `buttons` is clicked
function handleClick(e) {

  // Check to see if its a button
  if (e.target.matches('button')) {

    // For every element in the `panels` node list use `classList`
    // to remove the show class
    panels.forEach(panel => panel.classList.remove('show'));

    // "Destructure" the `id` from the button's data set
    const { id } = e.target.dataset;

    // Create a selector that will match the corresponding
    // panel with that id. We're using a template string to
    // help form the selector. Basically it says find me an element
    // with a "panel" class which also has an id that matches the id of
    // the button's data attribute which we just retrieved.
    const selector = `.panel[id="${id}"]`;

    // Select the `div` and, using classList, again add the
    // show class
    document.querySelector(selector).classList.add('show');
  }
}

</script>

    <script>
        (function(document) {
            'use strict';

            var TableFilter = (function(myArray) {
                var search_input;

                function _onInputSearch(e) {
                    search_input = e.target;
                    var tables = document.getElementsByClassName(search_input.getAttribute('data-table'));
                    myArray.forEach.call(tables, function(table) {
                        myArray.forEach.call(table.tBodies, function(tbody) {
                            myArray.forEach.call(tbody.rows, function(row) {
                                var text_content = row.textContent.toLowerCase();
                                var search_val = search_input.value.toLowerCase();
                                row.style.display = text_content.indexOf(search_val) > -1 ? '' : 'none';
                            });
                        });
                    });
                }

                return {
                    init: function() {
                        var inputs = document.getElementsByClassName('search-input');
                        myArray.forEach.call(inputs, function(input) {
                            input.oninput = _onInputSearch;
                        });
                    }
                };
            })(Array.prototype);

            document.addEventListener('readystatechange', function() {
                if (document.readyState === 'complete') {
                    TableFilter.init();
                }
            });

        })(document);
    </script>

<script>

var myVar;

function myFunction() {
  myVar = setTimeout(showPage, 3000);
}

function showPage() {
  document.getElementById("preloader-active").style.display = "none";
  document.getElementById("myDiv").style.display = "block";
}
</script>
</body>
</center>
</html>
