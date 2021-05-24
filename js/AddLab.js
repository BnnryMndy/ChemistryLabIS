var taskCounter = 0;

function addTask() {
    if (!taskCounter) {
        $("#none-del").attr("disabled", false);
        $("btn-submit").attr("disabled", false);
    }
    taskCounter += 1;

    $(".btn-group").before("<div class='card  m-2 p-3' id=" + taskCounter + "></div>");
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
        $("btn-submit").attr("disabled", true);
    }
}

function sendAllTasks(labId) {

}

function sendTask(labId) {

}

function sendLab() {
    $.ajax({
        type: "post",
        url: "php/addLab.php",
        data: {
            labNumber: labNumber,
            labName: labName,
            labClass: labClass,
            releaseDate: releaseDate,
            deadline: deadline,
            Login: Login
        },
        success: function(data) {
            sendAllTasks(data);
        }
    });
}