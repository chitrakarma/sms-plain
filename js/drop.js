function drop(){
    var drop = document.getElementById("drop");
    var button = document.getElementById("button");
    var table = document.getElementById("myTable");
    var heading = document.getElementById("heading");
    heading.style.display = "none";
    table.style.display = "none";
    drop.style.marginTop = '5%';
    button.style.display = "none";
    document.body.style.backgroundColor = "#e0e0e0";
}
function back(){
    var drop = document.getElementById("drop");
    var button = document.getElementById("button");
    var table = document.getElementById("myTable");
    var heading = document.getElementById("heading");
    document.body.style.backgroundColor = "white";
    heading.style.display = "";
    table.style.display = "";
    drop.style.marginTop = '-40%';
    button.style.display = "block";
}