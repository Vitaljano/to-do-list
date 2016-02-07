<!doctype html>
	<html lang="en">
		<head>
			<meta charset="utf-8" />
			<title>To-do-list</title>
			<link rel="stylesheet" href="src/styles/reset.css" />
			<link rel="stylesheet" href="src/styles/style.css" />

		</head>
		<body onload="check()">

			<div class ="wrapper">
				<header>
					
				</header>
				<table>
					<tr>
						<td colspan="3">
							<form action="index.php" method="get" name="addTaskForm">
								<input class="add" type="text" name="addTask" placeholder="add new task..."/>
								<input id="add-button" type="submit"  />
							</form>
						</td>
					</tr>

				<?php foreach(array_reverse($data) as $key => $value): ?>

					<tr class ="task">

						<td>
							<input onclick="checker(this),updateStatus(this)" class="check" type="checkbox" value="<?php echo $value['id']?>" <?php if($value['status']==1) {echo 'checked';} ?> />
						</td>
						
						<td class="description">
							<?php echo $value['task_description']?>
						</td>
						
						<td>
							<form method='get' action="index.php">

								<input id="del-button" type="submit" src="src/img/icon_delete.png" name="delete" value="<?php echo $value['id']?>" />
							</form>
						</td>
					
					</tr>
				<?php endforeach;?>

					
					
				</table>
			</div>
		<script>

		//function check or compleate task when page load 
		function check(){

			var elm = document.getElementsByClassName('check');
			
				for(var i=0; i <= elm.length-1; i++){
				
					if(elm.item(i).checked == true){
						var element = elm.item(i).parentNode.nextElementSibling;
						element.style.textDecoration = "line-through";
					}
				}
			




		}

		//function check or compleat task when click on the task
		function checker(elm){
			
			//function check chekbox and line-though text
			
			var element = elm.parentNode.nextElementSibling;
			
			if(elm.checked){
				element.style.textDecoration = "line-through";
			} else {
				element.style.textDecoration = "none";
			}
		//function updateStatus();
		}

		function updateStatus(elm){

							
					var req 			= 	new XMLHttpRequest();
					var elementStatus 	=	elm.checked;
					var id              =	elm.value;
					var url				= 	"index.php?status="+elementStatus+"&id="+id;
					
					req.open('GET',url, true);
					req.send();
			
  					if (req.status != 200) {
    					
  					} else {
    					
  					}  							
				}
		
		</script>
		</body>
	</html>