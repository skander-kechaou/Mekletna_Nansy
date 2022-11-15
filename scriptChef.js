document.getElementById("become-a-chef").addEventListener("submit", (e) => {
    e.preventDefault();
    let Name = document.querySelector("#Name_chef").value;
    checkname();
    check_phonenumber();
}
)


function containsNumbers(str) {
    return /\d/.test(str);
}

function checkname() {
    const name = document.getElementById("Name_chef").value;
    if (containsNumbers(name) || name.length < 3) {
        document.getElementById("Errorname").innerHTML = "Check your input please";
        document.getElementById("Errorname").style.color = "red";
        return false;
    } else {
        console.log("Good");
        return true;
    }
}
function check_phonenumber() {
    const num = document.getElementById("Phone").value;

    if ((!isNaN(num)) && (num.length > 0)) {
        console.log( "GOOD");
    } else {
        document.getElementById("ErrorPhone").innerHTML = "Phone number must not contain letters.";
        document.getElementById("ErrorPhone").style.color = "red";
    }
}

function nameValidation() {
    checkname();
    if (checkname() == true) {
        console.log("No problem");
        document.getElementById("Errornname").style.color = "green";
    }
    else {
        document.getElementById("Errorname").innerHTML = "the name contains only letters and numbers ";
    }

}