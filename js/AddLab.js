var taskCounter = 0;

function addTask() {
    taskCounter += 1;
    alert("#" + this.id);
    $("#" + this.id).after("<div id=" + taskCounter + "></div>");
    $("#" + taskCounter).load("templates/taskForm.html");
    $(".addTask").last().attr("id", "button-" + taskCounter);
}