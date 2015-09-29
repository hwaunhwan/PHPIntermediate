<head>
<!--JS Goes Here-->
    <script type="text/javascript" language="javascript">

        function myClick() {
    console.log('It works!'); //it will show on page source
    var person_name = document.getElementById('pname').value; //go to the document get me the Element called pname and show me the valueif (person_name == "") {
    console.log('pname=' + pname);
    var radiovalue = document.getElementsByName('answer'); //check it by doing console.warn or .log to see the problem
    var checkedValue= null;
            for(var i = 0; i < radiovalue.length; i++){
                var piece = radiovalue[i];

                if (piece.checked)
            {
                checkedValue = piece.value;
            }
        }
            alert(checkedValue + ', we can hang out ' + person_name);
    }

    </script>
        </head>

<body>

<h3>Make a webpage that has three radio buttons: yes, no, maybe
Have a textbox right under it with a "name" label
And then have a button when clicked, displays a message that says

Yes we can hang out {name}</h3>
<input type="radio" name="answer" value="yes"/>Yes<br>
<input type="radio" name="answer" value="no"/>No<br>
<input type="radio" name="answer" value="maybe"/>Maybe<br>

<input type="text" name="name" id="pname" size="20" class="inputbox" value="Name"/>
<button type="button" onclick="myClick();">submit</button>

</body>