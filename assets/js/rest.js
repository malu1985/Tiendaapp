$(document).ready(function(){
$.ajax({
url:"https://maryluz.herokuapp.com/public/index.php/api/customers"
}).then(function(data){
$('.greeting-id').appen(data.id);
});
});
