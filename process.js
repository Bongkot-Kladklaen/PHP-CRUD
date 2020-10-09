$(document).ready(function(){
    $('.view_data').click(function(){
        var uid = $(this).attr('id');
        $.ajax({
            url:"controller/select.php",
            method:"post",
            data:{id:uid},
            success:function(data){
                $('#detail').html(data);
                $('#view_modal').modal('show');
            }
        });
    });

    $("#insert-form").on("submit",function(event){
        event.preventDefault();
        $.ajax({
            url:"controller/insert.php",
            method:"post",
            data:$('#insert-form').serialize(),
            beforeSend:function(){
                $("#insert").val("Insert...")
            },
            success:function(data){
                $('#insert-form')[0].reset();
                $('#insert_modal').modal('hide');
                location.reload();
            }
        });
    });

    $(".delete_data").click(function(){
        var uid = $(this).attr('id');
        $.confirm({
            title: 'Confirm!',
            content: 'Are you sure delete!',
            buttons: {
                confirm: function () {
                    $.ajax({
                        url:"controller/delete.php",
                        method:"post",
                        data:{id:uid},
                        success:function(data){
                            location.reload();
                        }
                    });
                },
                cancel: function () {
                },
            }
        });
    });

    $(".edit_data").click(function(){
        var uid = $(this).attr('id');
        $.ajax({
            url:"controller/fetch.php",
            method:"post",
            data:{id:uid},
            dataType:"json",
            success:function(data){
                $("#id").val(data.id);
                $("#fname").val(data.fname);
                $("#lname").val(data.lname);
                $("#email").val(data.email);
                $("#web").val(data.web);
                $('#insert_modal').modal('show');
            }
        });
        $(".reset-data").click(function(){
            location.reload();
        });
    });
    
});