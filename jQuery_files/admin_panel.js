$(document).ready(function(){
var delete_btn=$(".delete_btn");

delete_btn.click(function(){
var delete_btn_id=$(this).val();
$.ajax({
    url:"../admin_modify.php",
    type:"POST",
    data:{
        delete_btn_id:delete_btn_id
    },
    success:function(data){

    if(data){
        alert("Item Deleted Sucessfully");
        location.reload();
    }
    else{
        alert("Oops!!! Something Wrong Happened");
    }

    }
})
});
});