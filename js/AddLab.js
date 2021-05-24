var taskCounter = 0;

function addTask() {
    if (!taskCounter) {
        $("#none-del").attr("disabled", false);
        $("btn-submit").attr("disabled", false);
    }
    taskCounter += 1;

    $(".btn-group").before("<div class='card taskCard m-2 p-3' id=" + taskCounter + "></div>");
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
    $('.taskCard').each({
        function() {

            var taskDescription = $(this).children();
            var answerType = $('#labClass').val;
            var rightAnswer = $('#releaseDate').val;


            $.ajax({
                type: "post",
                url: "php/addTask.php",
                data: {
                    labId: labId,
                    taskDescription: taskDescription,
                    rightAnswer: rightAnswer
                },
                success: function(data) {
                    // sendAllTasks(data);
                }
            });
        }
    });
}

function sendTask(labId, cardId) {

}

function sendLab() {
    var labNumber = $('#labNumber').val();
    var labName = $('#labName').val();
    var labClass = $('#labClass').val();
    var releaseDate = $('#releaseDate').val();
    var deadline = $('#deadline').val();
    var Login = $('#Login').val();

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

function testChild() {
    $('.taskCard').each({
        function() {
            $(this).children('#floatingTextarea').val();
        }
    });
}