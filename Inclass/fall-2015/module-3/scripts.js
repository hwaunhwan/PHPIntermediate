/**
 * Created by KSH on 9/24/15.
 */
function myClickFunction() {

    var person_name = document.getElementById('pname').value; //go to the document get me the Element called pname and show me the value
    console.log(person_name); //name as print_r
    // If they didn't enter a name, show an error message
    if (person_name == "") {
        alert('Please enter a person name');
    } else {
        alert('You entered ' + person_name);
    }
}