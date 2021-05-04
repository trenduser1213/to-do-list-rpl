function dateClickListener(){
    
    document.getElementById("date-container").style.borderColor = "#4D9FFF";
    document.getElementById("date-text").style.color = "#4D9FFF";
    document.getElementById("date-icon").style.color = "#4D9FFF";

    document.getElementById("description-container").style.borderColor = "#ced4da";
    document.getElementById("description-text").style.color = "black";
    document.getElementById("description-icon").style.color = "black";
    document.getElementById("description-input").style.display="none";

    document.getElementById("priority-container").style.borderColor = "#ced4da";
    document.getElementById("priority-text").style.color = "black";
    document.getElementById("priority-icon").style.color = "black";
    document.getElementById("priority-input").style.display="none";
}
function descriptionClickListener(){
    document.getElementById("description-container").style.borderColor = "#4D9FFF";
    document.getElementById("description-text").style.color = "#4D9FFF";
    document.getElementById("description-icon").style.color = "#4D9FFF";
    document.getElementById("description-input").style.display="block";

    document.getElementById("date-container").style.borderColor = "#ced4da";
    document.getElementById("date-text").style.color = "black";
    document.getElementById("date-icon").style.color = "black";

    document.getElementById("priority-container").style.borderColor = "#ced4da";
    document.getElementById("priority-text").style.color = "black";
    document.getElementById("priority-icon").style.color = "black";
    document.getElementById("priority-input").style.display="none";
}
function priorityClickListener(){
    document.getElementById("priority-container").style.borderColor = "#4D9FFF";
    document.getElementById("priority-text").style.color = "#4D9FFF";
    document.getElementById("priority-icon").style.color = "#4D9FFF";

    document.getElementById("description-container").style.borderColor = "#ced4da";
    document.getElementById("description-text").style.color = "black";
    document.getElementById("description-icon").style.color = "black";
    document.getElementById("description-input").style.display="none";

    document.getElementById("date-container").style.borderColor = "#ced4da";
    document.getElementById("date-text").style.color = "black";
    document.getElementById("date-icon").style.color = "black";
    document.getElementById("priority-input").style.display="block";
}

function hasClass(element, cls) {
    return (' ' + element.className + ' ').indexOf(' ' + cls + ' ') > -1;
}

function priorityTask(){
    var el = document.getElementById("accourdion-btn-one");
    if(hasClass(el,'collapsed')){
        document.getElementById('accourdion-action-one').style.display = 'none';
    }else{
        document.getElementById('accourdion-action-one').style.display = 'flex';
    }
}
function lateTask(){
    var el = document.getElementById("accourdion-btn-two");
    if(hasClass(el,'collapsed')){
        document.getElementById('accourdion-action-two').style.display = 'none';
    }else{
        document.getElementById('accourdion-action-two').style.display = 'flex';
    }
}