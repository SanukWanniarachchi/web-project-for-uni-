window.onload = function() {
    alert("Welcome to Rivers of Sri Lanka");
};

function calculateSpeed() {
    var distance = document.getElementById("distance").value;
    var time = document.getElementById("time").value;

    if (distance == "" || time == "") {
        alert("Please enter distance and time.");
    } else if (distance <= 0 || time <= 0) {
        alert("Values must be greater than zero.");
    } else {
        var speed = (distance / time) * 3.6;
        alert("River flow speed is " + speed.toFixed(2) + " km/h");
    }
}
