$(function () {
    $('form[name="form_schedule"]').submit(function (event) {
        event.preventDefault()
        console.log($(this).serialize())
        
        $.ajax({
            url: "/save_schedule",
            type: "POST",
            data: $(this).serialize(),
            success: function (response) {
                $(".msg").html('<div class="alert alert-success">Agendamento efetuado com sucesso!</div>')
                $("#form_schedule").hide()
                $(".link_return").html('<a href="/" class="btn btn-info btn-lg">Fazer nova marcação</a>')
            },
            error: function (response) {
                console.log(response)
            },
        });
    })
})
