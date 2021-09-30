<!DOCTYPE html>
<html>
<head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script> 
function newElement() { 
      $("#listTodo").append('<li>'+$("#newTodo").val()+'<button class="close">x</button></li>');
      $("#newTodo").val("");
} 
$(document).on('click','.close', function(){
   $(this).closest('li').remove();
}); 
</script> 
<title>js training in development</title>
</head>
<body>  
<div>
  <h2>JQ To Do List</h2>
  <input type="text" id="newTodo">
  <button onclick="newElement()" class="addBtn">Add</button>
</div> 
<ul id="listTodo"> 
</ul> 
</body> 
</html>