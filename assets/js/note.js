$(document).ready(function () {
    // Show Tasks // insert
    // function loadTasks() {
    // 	$.ajax({
    // 		url: "/todo",
    // 		type: "POST",
    // 		dataType: "json",
    // 		data: {
    // 			judul: "COK",
    // 			catatan: "NGEN",
    // 			status: 0
    // 		},
    // 		success: function(data) {
    // 			$("#tasks").html(data);
    // 		}
    // 	});
    // }
    // loadTasks();

    function loadTasks() {
        $.ajax({
            url: "/todo",
            success: function (data) {
                $('#title').html(data);
            }
        });
    }
    loadTasks();

    // Add Task
    $("#addBtn").on("click", function (e) {
        e.preventDefault();

        let taskJ = $("#taskValueJud").val();
        let taskC = $("#taskValueCat").val();
        let Idn = $("#Idn").val();

        $.ajax({
            url: "/todo",
            type: "POST",
            data: {
                'id': Idn,
                'judul': taskJ,
                'catatan': taskC,
                'status': 0
            },
            success: function (data) {
                loadTasks();
                $("#taskValueJud").val('');
                $("#taskValueCat").val('');
                if (data == 0) {
                    alert("Something wrong went. Please try again.");
                }
            }
        });
    });

    // Remove Task
    $(document).on("click", "#removeBtn", function (e) {
        e.preventDefault();
        var id = $(this).data('id');

        $.ajax({
            url: "/todo",
            type: "POST",
            data: {
                id: id
            },
            success: function (data) {
                loadTasks();
                if (data == 0) {
                    alert("Something wrong went. Please try again.");
                }
            }
        });
    });
});