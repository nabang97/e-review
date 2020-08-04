require('./bootstrap');

$('.accordion').hide();
$('#accordionExample').show();
$('#accordionQuestionOne').show();
$('#prev-to').hide();
$('#submit-to').hide();

const acc = $('#question-container').find('.accordion');
let positionQuestion= 0;
$('#next-to').click((e)=>{
    $(acc[positionQuestion]).hide();
    positionQuestion = positionQuestion + 1;
    $(acc[positionQuestion]).show();
    
    if(positionQuestion > 0 ){
        $('#prev-to').show();
    }else{
        $('#prev-to').hide();
    }
    if(positionQuestion == acc.length-1){
        $('#submit-to').show();
        $('#next-to').hide();
    }else{
        $('#submit-to').hide();
        $('#next-to').show();
    }
    $("html, body").animate({ scrollTop: $("#question-container").offset().top }, "slow");
    console.log(positionQuestion);
});

$('#prev-to').click((e)=>{
    
    $(acc[positionQuestion]).hide();
    positionQuestion = positionQuestion - 1;
    $(acc[positionQuestion]).show();    
    if(positionQuestion > 0 ){
        $('#prev-to').show();
    }else{
        $('#prev-to').hide();
    }
    if(positionQuestion == acc.length-1){
        $('#submit-to').show();
        $('#next-to').hide();
    }else{
        $('#submit-to').hide();
        $('#next-to').show();
    }
    $("html, body").animate({ scrollTop: $("#question-container").offset().top }, "slow");
    console.log(positionQuestion);
});
console.log(positionQuestion);