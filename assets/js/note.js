$(document).ready(function () {
    // Get Task
    function loadTasks() {
        $.ajax({
            url: "/todo",
            success: function (data) {
                $('#note').html(data);
            }
        });
    }
    loadTasks();

    // Add Task
    $("#addBtn").on("click", function (e) {
        e.preventDefault();

        let note = $("#Catatan").val();
        let Idn = $("#Idn").val();

        $.ajax({
            url: "/todo",
            type: "POST",
            data: {
                'catatan': note,
                'id_user': Idn,
            },
            success: function (data) {
                loadTasks();
                $("#Catatan").val('');
                if (data == 0) {
                    alert("Wrong input! Please try again.");
                }
            }
        });
    });

    // Remove Task
    $(document).on("click", "#removeBtn", function (e) {
        e.preventDefault();
        let id = $(this).data('id');
        $.ajax({
            url: "/todo",
            type: "DELETE",
            data: {
                id: id
            },
            success: function (data) {
                loadTasks();
                if (data == 0) {
                    alert("Something wrong. Please try again.");
                }
            }
        });
    });

    //Update Task
    $(document).on("click", "#updateBtn", function (e) {
        e.preventDefault();

        let id = $(this).data('id');
        $.ajax({
            url: "/todo",
            type: "PUT",
            data: {
                'id': id,
                'status': 'yes'
            },
            success: function (data) {
                loadTasks();
                $("#Catatan")
                if (data == 0) {
                    alert("Something wrong. Please try again.");
                }
            }
        });
    });
});