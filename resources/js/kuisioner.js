$("#submit-to").click((e)=>{
    // $("#form_kuisioner").submit();
    // console.log($('.respon-angka')[0]);
    let responKuisioner = [];
    const nip = $('input[name="nip"]').val();
    const status = $('input[name="status_peserta"]').val();
    $('.respon-angka').each((index) => {
        const kuisioner_id = $($('.respon-angka')[index]).attr('kuisioner-id');
        const kuisioner_kategori = $($('.respon-angka')[index]).attr('kategori-kuisioner');
        const value = $($('.respon-angka')[index]).attr('value');
        const nama_diklat = $($('.respon-angka')[index]).attr('nama-diklat');
        const tahun_diklat = $($('.respon-angka')[index]).attr('tahun-diklat');
        const data = {
            nip : nip,
            isi :`{"nilai" : ${parseInt(value)}}`,
            kuisioner_id:parseInt(kuisioner_id),
            diklat_id: parseInt(nama_diklat),
            tahun:parseInt(tahun_diklat),
            
        }
        responKuisioner.push(data);
        
    });

    $('.respon-text').each((index) => {
      const kuisioner_id = $($('.respon-text')[index]).attr('kuisioner-id')
      const value = $($('.respon-text')[index]).attr('value');
      const nama_diklat = $($('.respon-text')[index]).attr('nama-diklat');
      const tahun_diklat = $($('.respon-text')[index]).attr('tahun-diklat');
      const data = {
          nip : nip,
          isi :`{"nilai" : "${value}" }`,
          kuisioner_id:parseInt(kuisioner_id),
          diklat_id: parseInt(nama_diklat),
          tahun:parseInt(tahun_diklat),
          
      }
      responKuisioner.push(data);
      
    });

    console.log(JSON.stringify({kuisioner : responKuisioner}) );
    getData('/pka/store',{kuisioner : responKuisioner})
    .then(data => console.log(data)).catch(function(e) {
      console.log(e);
  });;
    
});

async function getData(url = '', data = {}) {
    // Default options are marked with *
    const response = await fetch(url, {
      method: 'POST', // *GET, POST, PUT, DELETE, etc.
      mode: 'cors', // no-cors, *cors, same-origin
      cache: 'no-cache', // *default, no-cache, reload, force-cache, only-if-cached
      credentials: 'same-origin', // include, *same-origin, omit
      headers: {
        'Content-Type': 'application/json',
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
      },
      redirect: 'follow', // manual, *follow, error
      referrerPolicy: 'no-referrer', // no-referrer, *no-referrer-when-downgrade, origin, origin-when-cross-origin, same-origin, strict-origin, strict-origin-when-cross-origin, unsafe-url
      body: JSON.stringify(data) // body data type must match "Content-Type" header
    });
    return response.json(); // parses JSON response into native JavaScript objects
}
