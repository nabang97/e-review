import ('./admin-chart.js');


$(document).ready( function () {
    $('#tableDiklatName').DataTable();
    $('#tableJadwalDiklat').DataTable();
    jenisDiklatSelectOption();
    $('.year-picker').datepicker({
        format: " yyyy", // Notice the Extra space at the beginning
    viewMode: "years", 
    minViewMode: "years"
    });
    // id, name element
    getNamaDiklatByJenis(1,'nama_diklat_pka');
    getNamaDiklatByJenis(2,'nama_diklat_prajabatan');
} );


let getJenisDiklat = async() => {
    const response = await fetch(`/api/jenis-diklat`);
    return response.json();
}

let getNamaDiklat = async (jenisDiklat) =>{
    const response = await fetch(`/api/nama-diklat?jenisDiklat=${jenisDiklat}`);
    return response.json();
}

let jenisDiklatSelectOption = () =>{
    getJenisDiklat().then(responses =>{
        $('select[name="jenis_diklat"]').html(`<option value="">Pilih Jenis Diklat</option>`);
        responses.forEach(data=>{
            $('select[name="jenis_diklat"]').append(`
                <option value="${data.id}">${data.nama_jenis_diklats}</option>
            `)
        })
        
    });
}

let getNamaDiklatByJenis = (id,nameElement) => {
    getNamaDiklat(id).then(responses => {
        $(`select[name="${nameElement}"]`).html(`<option value="">Pilih Nama Diklat</option>`);
        responses.forEach(data=>{
            $(`select[name="${nameElement}"]`).append(`
                <option value="${data.id}">${data.nama_diklats}</option>
            `)
        })
    });
}

$('select[name="jenis_diklat"]').change((e)=>{
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





