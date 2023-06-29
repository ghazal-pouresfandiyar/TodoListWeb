<?php
    include('navbar.php');
    session_start();
	$conn = mysqli_connect('localhost', 'root', '', 'todo_db');

    $id=0;
	$task_name = "";
    $deadline = "";
	$priority = "";
	$task_status = "";
	$info = "";
    if(isset($_GET['edit'])){
	    $id = $_GET['edit'];
    }

?>
<html>
<head>
    <link rel="stylesheet" href="style.css">
        <title>Edit Task</title>
    <!-- <script>
         window.onload = function () {
            const $select = document.querySelector('#genre');
            $select.value = "<echo $genre; ?>";
         }
    </script> -->
</head>

<body>
    <h2 style="text-align: center; margin-top: 100px;">Edit Task</h2>

    <form method="post" action="handle_tasks.php" enctype="multipart/form-data">
        <input type="hidden" name="id" value="<?php echo $id; ?>">
		<div class="input-group">
			<label style="margin-right: 50px;">Task name</label>
            <br/>
			<input type="text" name="task_name" value="<?php echo $task_name; ?>" required>
		</div>
        <div class="input-group">
			<label>deadline</label>
            <br>
			<input type="datetime-local" id="deadline" name="deadline">
		</div>
		<div class="input-group">
			<label style="margin-right:50px">Priority</label>
            <select name="priority" id="priority" style="border-radius: 5px;">
            <!-- <option value="" selected disabled> -->
            <option value="Low">Low</option>
            <option value="Medium">Medium</option>
            <option value="High">High</option>
            </select>
		</div>
        <div class="input-group">
			<label style="margin-right: 50px;">Task Status</label>
			<select name="task_status" id="task_status" style="border-radius: 5px;">
            <!-- <option value="" selected disabled> -->
            <option value="Undone">Undone</option>
            <option value="Done">Done</option>
            </select>
		</div>
        <div class="input-group">
			<label>More information about task</label>
            <br>
			<textarea type="text" style="width:93%; height: 150px; border-radius: 5px;" name="info" ><?php echo $info; ?></textarea>
		</div>
		<div class="input-group">
	        <button class="btn" type="submit" name="update">Update</button>
        </div>
	</form>
</body>

</html>