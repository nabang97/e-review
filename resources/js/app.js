require('./bootstrap');
require('./kuisioner');


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

let getNamaDiklat = async (jenisDiklat) =>{
    const response = await fetch(`/api/nama-diklat?jenisDiklat=${jenisDiklat}`);
    return response.json();
}


$('select[name="diklat_id"]').change((e)=>{
    const elementTarget= $('select[name="nama_diklat"]'); 
    const jenisDiklat = $(e.target).val();    

    getNamaDiklat(jenisDiklat).then(response => {
        $(elementTarget).html('<option>Pilih Nama Diklat</option>');
        response.forEach(data => {
            $(elementTarget).append(`
                <option value="${data.id}">${data.nama_diklats}</option>
            `);
        });
    });    
})


