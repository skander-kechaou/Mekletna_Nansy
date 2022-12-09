document.getElementById("donation").addEventListener("submit", (e) => {
    e.preventDefault();
    let Name = document.querySelector("#Name_donation").value;
    checklocation();
    check_menu();
}
)


function containsNumbers(str) {
    return /\d/.test(str);
}

function checkloation() {
    const name = document.getElementById("location").value;
    if (containsNumbers(name) || name.length < 10) {
        document.getElementById("Errorname").innerHTML = "Check your input please";
        document.getElementById("Errorname").style.color = "red";
        return false;
    } else {
        console.log("Good");
        return true;
    }
}
function checkreason() {
    const name = document.getElementById("reason").value;
    if (containsNumbers(name) || name.length < 10) {
        document.getElementById("Errorname").innerHTML = "Check your input please";
        document.getElementById("Errorname").style.color = "red";
        return false;
    } else {
        console.log("Good");
        return true;
    }
}
function check_menu() {
    const num = document.getElementById("id_menu").value;

    if ((!isNaN(num)) && (num.length > 0)) {
        console.log( "GOOD");
    } else {
        document.getElementById("ErrorPhone").innerHTML = "Phone number must not contain letters.";
        document.getElementById("ErrorPhone").style.color = "red";
        return false;
    }
}