
$(document).ready(function(){

    //display modal form for product EDIT ***************************
    $(document).on('click','.open_modal',function(){
	console.log('ini');
	exit();
	
        var product_id = $(this).val();
       
        // Populate Data in Edit Modal Form
        $.ajax({
            type: "GET",
            url: url + '/' + product_id,
            success: function (data) {
                console.log(data);
                $('#product_id').val(data.id);
                $('#name').val(data.name);
                $('#price').val(data.price);
                $('#btn-save').val("update");
                $('#myModal').modal('show');
            },
            error: function (data) {
                console.log('Error:', data);
            }
        });
    });

}