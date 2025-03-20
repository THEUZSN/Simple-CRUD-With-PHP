$(document).ready(function(){
    $('.edit-button').on('click', function(){
        const $task = $(this).closest('.task')
        $task.find('.progress').addClass('hidden');
        $task.find('.task-description').addClass('hidden');
        $task.find('.task-action').addClass('hidden');
        $task.find('.edit-task').removeClass('hidden');
    });

    $('.progress').on('click', function(){
        if ($(this).is(':checked')){
            $(this).addClass('done');
        }else {
            $(this).removeClass('done');
        }
    })
    //Ajax 
    $('.progress').on('change', function(){

        const id = $(this).data('task-id');
        const description = $(this).is(':checked') ? 'true' : 'false';

        $.ajax({
            url: 'php/update-progress.php',
            method: 'POST',
            data: {id :id, description :description},
            dataType: 'json',
            success: function(response){
                if(response.success){

                }else{
                    alert('Erro ao editar tarefa');
                }
            },
            error: function(){
                alert('Um erro ocorreu :(')
            }
        });
    })
});
