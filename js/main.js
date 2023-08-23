$('#createProject').submit(function(){
    event.preventDefault();
    console.log("Dodaj je pokrenuto");
    const $form = $(this);
    const $inputs = $form.find('input, select, button, textarea');
    const $serijalizacija = $form.serialize();
    console.log($serijalizacija);

    request = $.ajax({
        url:'handler/project/create.php',
        type:'post',
        data:$serijalizacija
    });
    location.reload(true);
});

$('#updateProject').submit(function(){
        event.preventDefault();
        console.log("Update je pokrenuto");
        const $form = $(this);
        const $inputs = $form.find('input, select, button, textarea');
        const $serijalizacija = $form.serialize();
        console.log($serijalizacija);

        request = $.ajax({
        url:'handler/project/update.php',
        type:'post',
        data:$serijalizacija
    });
        location.reload(true);
});

$('#createTask').submit(function(){
    event.preventDefault();
    console.log("Dodaj je pokrenuto");
    const $form = $(this);
    const $inputs = $form.find('input, select, button, textarea');
    const $serijalizacija = $form.serialize();
    console.log($serijalizacija);

    request = $.ajax({
        url:'handler/task/create.php',
        type:'post',
        data:$serijalizacija
    });
    location.reload(true);
    });

$('#updateTask').submit(function(){
    event.preventDefault();
    console.log("Update je pokrenuto");
    const $form = $(this);
    const $inputs = $form.find('input, select, button, textarea');
    const $serijalizacija = $form.serialize();
    console.log($serijalizacija);

    request = $.ajax({
        url:'handler/task/update.php',
        type:'post',
        data:$serijalizacija
    });
    location.reload(true);
    });

    $('#deleteProject').submit(function(){
        event.preventDefault();
        console.log("Delete je pokrenuto");
        const $form = $(this);
        const $inputs = $form.find('input, select, button, textarea');
        const $serijalizacija = $form.serialize();
        console.log($serijalizacija);

        request = $.ajax({
            url:'handler/project/delete.php',
            type:'post',
            data:$serijalizacija
        });
        location.reload(true);
        });