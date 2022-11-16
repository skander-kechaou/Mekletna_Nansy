document.getElementById("Form").addEventListener("submit", (e) => {
    e.preventDefault();
    let Lname = document.querySelector("#lnameClient").value;
    checklname();
    checkfname();
    check_number();
}
)
// /\d/ the expression contains only numbers 

function containsNumbers(str) {
    return /\d/.test(str);
}

function checklname() {
    const lname = document.getElementById("lnameClient").value;
    if (containsNumbers(lname) || lname.length < 3) {
        document.getElementById("Errorlname").innerHTML = "Check your input please";
        document.getElementById("Errorlname").style.color = "red";
        return false;
    } else {
        console.log("Jawek behi2.0");
        return true;
    }
}

function checkfname() {
    const Fname = document.getElementById("fnameClient").value;

    if (Fname.length < 4) {
        document.getElementById("Errorfname").innerHTML = "First name must be at least four characters";
        document.getElementById("Errorfname").style.color = "red";
    }
    else {
        console.log("No problem");
    }
}
function check_number() {
    const num = document.getElementById("pnbClient").value;

    if (!isNaN(num) && num.length > 0) {
        console.log("jawek behi3.0");
    } else {
        document.getElementById("ErrorPhone").innerHTML = "Phone number must not contain letters.";
        document.getElementById("ErrorPhone").style.color = "red";
    }
}

function nameValidation() {
    checklname();
    if (checklname() == true) {
        console.log("No problem");
        document.getElementById("Errorlname").style.color = "green";
    }
    else {
        document.getElementById("Errorlname").innerHTML = "the name contains only letters and numbers ";
    }

}