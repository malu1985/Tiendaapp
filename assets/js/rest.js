$(document).ready(function(){
$.ajax({
url:"https://maryluz.herokuapp.com/public/index.php/api/customers"
}).then(function(data){
$(".greeting-id").append(data.id);
       $(".greeting-fisrt_name").append(data.first_name);
});
});
