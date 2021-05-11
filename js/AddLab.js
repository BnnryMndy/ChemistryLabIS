var taskCounter = 0;

function addTask() {
    if (!taskCounter) {
        $("#none-del").attr("disabled", false);
    }
    taskCounter += 1;

    $("#button-0").before("<div id=" + taskCounter + "></div>");
    $("#" + taskCounter).load("templates/taskForm.html");
    console.log(taskCounter);
    // $(".addTask").last().attr("id", "button-" + taskCounter);

}

function delTask() {
    if (taskCounter > 1) {
        $("#" + taskCounter--).remove();
    } else {
        $("#" + taskCounter--).remove();
        $("#none-del").attr("disabled", true);
    }
}