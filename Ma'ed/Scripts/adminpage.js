$('#addfood').click(function() {
    $('#addFoodPage').show();
    $('#addfood').css('background-color', 'white');
    $('#addIngredientsPage').hide();
    $('#usersPage').hide();
    $('#adding').css('background-color', 'orange');
    $('#adding').css('color', 'black');
    
    $('#users').css('background-color', 'orange');
    $('#users').css('color', 'black');
});

$('#adding').click(function() {
    $('#addIngredientsPage').show();
    $('#adding').css('background-color', 'white');
    $('#addFoodPage').hide();
    $('#usersPage').hide();
    $('#addfood').css('background-color', 'orange');
    $('#addfood').css('color', 'black');
    $('#users').css('background-color', 'orange');
    $('#users').css('color', 'black');
});

$('#users').click(function() {
    $('#usersPage').show();
    $('#users').css('background-color', 'white');
    $('#addFoodPage').hide();
    $('#addIngredientsPage').hide();
    $('#addfood').css('background-color', 'orange');
    $('#addfood').css('color', 'black');
    $('#adding').css('background-color', 'orange');
    $('#adding').css('color', 'black');
});
