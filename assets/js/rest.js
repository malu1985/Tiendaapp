$(document).ready(function(){
$.ajax({
url:"https://maryluz.herokuapp.com/public/index.php/api/customers"
}).then(function(data){
$(".greeting-id").append(data.id);
$(".greeting-first_name").append(data.first_name);
});
});
