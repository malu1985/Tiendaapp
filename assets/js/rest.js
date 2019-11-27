$(document).ready(function(){
$.ajax({
url:"https://maryluz.herokuapp.com/public/index.php/api/customers"
}).then(function(data){

       $(".greeting-fisrt_name").append(data.first_name);
});
});
