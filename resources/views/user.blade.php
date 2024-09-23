<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.3/dist/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <script src="
    https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.min.js
    "></script>
</head>
    <div id="containerUser"></div>

    <a class="btn btn-success" href="/adduser">add dong</a>
</body>
<script>
    $(document).on('click', '.deleteButton', function (e) {
        e.preventDefault();

        const iduser = $(this).data('iduser');

        $.ajax({
            type: "GET",
            url: "/deleteuser",
            data: {
                id: iduser,
            },
            dataType: "JSON",
            success: function (RES) {
                if (RES == 'SUCCESS') {
                    showProject()
                }
            }
        });
    })

    const pageBody = $('body');
    const loadSpin = `<div class="d-flex justify-content-center align-items-center mt-5"><div class="spinner-border d-flex justify-content-center align-items-center text-danger" role="status"><span class="visually-hidden">Loading...</span></div></div>`;

    const showProject = () => {
        $.ajax({
            url: `/showUser`,
            method: 'GET',
            beforeSend:function(){
                $('#containerUser').html(loadSpin)
            }
        }).done(res => {
            $('#containerUser').html(res)
        })
    }

    showProject();
</script>
</html>
