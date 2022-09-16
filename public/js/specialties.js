$(function () {
    $(".card").hide()

    $("#specialties").click(function (event) {
        event.preventDefault();
        specialties = $(this).val();
        $validate = '';

        $.ajax({
            url: "/professional",
            data: {
                'especialidade_id': specialties
            },
            dataType: "json",
            success: function (data) {
                profissional = data.content
                var event_data = '';

                $(".card").hide()
                $.each(profissional, function (i, val) {

                    console.log(profissional[i])

                    var cards = $(".card:first").clone()
                    var profissional_id = profissional[i].profissional_id;
                    var especialidade_id = specialties;
                    var name = profissional[i].nome;
                    var medical_advice = profissional[i].conselho + ' ' +
                        profissional[i].documento_conselho;
                    var image = profissional[i].foto;

                    $(".card-img").attr("src", image);
                    $(cards).find(".card-title").html(name);
                    $(cards).find(".card-text").html(medical_advice);

                    $(cards).find(".especialidadeID").html(
                        '<a href="/create_schedule/' + profissional_id +
                        '/' + especialidade_id +
                        '" id="link_form" class="btn btn-success">Agendar</a>'
                    );

                    $(cards).show()

                    $(cards).appendTo($(".list-card"))

                });
            },
            error: function () {
                console.log('erro');
            }
        });
    });

});
