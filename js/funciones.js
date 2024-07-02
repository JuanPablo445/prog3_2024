function askDeleteStudent (id){
    alertify.confirm("Eliminar dato", "Estas seguro que desear eliminar este ",
        function(){ askDeleteStudent(id); },
        function(){alertify.error('cancelado');});
}

function deleteStudent(id){
        $.ajax({
            type:"POST",
            url:"../controller/student.controller.php",
            date:"id="+id+"&operation=delete",
            success:function(result){
                if(result==1){
                alertify.success("el proceso se ejecuto correctamente");
                location.reload();
            }else{
                alertify.error('el proceso no se pudo realizar');
            }
        }      
});
}