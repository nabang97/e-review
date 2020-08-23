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

$("#simpandiklat").click(function(){
    $(this).attr('disabled','disabled');
    $("#form_diklat").submit();
})

$("#simpanjadwal").click(function(){
    $(this).attr('disabled','disabled');
    $("#form_jadwal").submit();
});

$(document).on("click","#editdiklat",function(){
    var id_diklat = $(this).data("id_diklat");
    var jenis_diklat = $(this).data("jenis_diklat");
    var nama_diklat = $(this).data("nama_diklat");

    console.log(id_diklat);
    console.log(jenis_diklat);
    console.log(nama_diklat);
    $("#id_diklat").val(id_diklat);
    $("#edit_nama_diklat").val(nama_diklat);
    $("#updatediklat").click(function(){
        $(this).attr('disabled','disabled');
        $("#form_edit_diklat").submit();
    });
});

$(document).on("click","#editjadwal",function(){
    var jenis_diklat = $(this).data("jenis_diklat");
    var nama_diklat = $(this).data("nama_diklat");
    var tahun = $(this).data("tahun");
    var tempat_diklat = $(this).data("tempat_diklat");
    var tanggal_diklat = $(this).data("tanggal");
    var id_nama_diklat = $(this).data("nama_diklat_id");

    console.log(tahun);
    console.log(jenis_diklat);
    console.log(nama_diklat);
    console.log(tempat_diklat);
    console.log(tanggal_diklat);

    $("#nama_diklat_id").val(id_nama_diklat);
    $("#nama_diklat").val(nama_diklat);
    $("#jenis_diklat").val(jenis_diklat);
    $("#tanggal_diklat").val(tanggal_diklat);
    $("#tempat_diklat").val(tempat_diklat);
    $("#updatejadwal").click(function(){
        $(this).attr('disabled','disabled');
        $("#form_update_jadwal").submit();
    });
});

$("#deletediklat").click(function(){
    var url = $(this).data('url');
    iziToast.question({
        timeout: 20000,
        close: false,
        overlay: true,
        displayMode: 'once',
        id: 'question',
        zindex: 999,
        title: 'Konfirmasi',
        message: 'Apakah yakin ingin menghapus data ?',
        position: 'center',
        buttons: [
            ['<button><b>YES</b></button>', function (instance, toast) {

                instance.hide({ transitionOut: 'fadeOut' }, toast, 'button');
                $("#form_hapus_diklat").attr('action',url).submit();

            }, true],
            ['<button>NO</button>', function (instance, toast) {

                instance.hide({ transitionOut: 'fadeOut' }, toast, 'button');

            }],
        ],
        onClosing: function(instance, toast, closedBy){
            console.info('Closing | closedBy: ' + closedBy);
        },
        onClosed: function(instance, toast, closedBy){
            console.info('Closed | closedBy: ' + closedBy);
        }
    });
})

$(document).on("click", "#deletejadwal" ,function(){
    var url = $(this).data('url');
    iziToast.question({
        timeout: 20000,
        close: false,
        overlay: true,
        displayMode: 'once',
        id: 'question',
        zindex: 999,
        title: 'Konfirmasi',
        message: 'Apakah yakin ingin menghapus data ?',
        position: 'center',
        buttons: [
            ['<button><b>YES</b></button>', function (instance, toast) {

                instance.hide({ transitionOut: 'fadeOut' }, toast, 'button');
                $("#form_hapus_jadwal").attr('action',url).submit();

            }, true],
            ['<button>NO</button>', function (instance, toast) {

                instance.hide({ transitionOut: 'fadeOut' }, toast, 'button');

            }],
        ],
        onClosing: function(instance, toast, closedBy){
            console.info('Closing | closedBy: ' + closedBy);
        },
        onClosed: function(instance, toast, closedBy){
            console.info('Closed | closedBy: ' + closedBy);
        }
    });
})


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





