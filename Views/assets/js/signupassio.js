document.getElementById("assio").addEventListener("submit", (e) => {
    e.preventDefault();
    let name = document.querySelector("#cid").value;
    checkcid();
    checknassio();
    checkpassio();
}
)
// /\d/ the expression contains only numbers 

function containsNumbers(str) {
    return /\d/.test(str);
}

function checknassio() {
    const name = document.getElementById("nassio").value;
    if (containsNumbers(name) || name.length < 3) {
        document.getElementById("Errorname").innerHTML = "Check your input please";
        document.getElementById("Errorname").style.color = "red";
        return false;
    } else {
        console.log("good");
        return true;
    }
}

function checkcid() {
    const num = document.getElementById("cid").value;

    if (!isNaN(num) && num.length > 0) {
        console.log("good");
    } else {
        document.getElementById("Errorcid").innerHTML = "cid number must not contain letters.";
        document.getElementById("Errorcid").style.color = "red";
    }
}
function checkpassio() {
    const num = document.getElementById("passio").value;

    if (!isNaN(num) && num.length > 0) {
        console.log("good");
    } else {
        document.getElementById("Errorcid").innerHTML = "Phone number must not contain letters.";
        document.getElementById("Errorcid").style.color = "red";
    }
}
