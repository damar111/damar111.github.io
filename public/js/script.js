$('#tipe').change(function(){
    var tipe = $('#tipe').val();

    if (tipe == ""){
        $('#harga').val("")
    }else{
        $.ajax({
            url:'app/api/get_tipe_kamar.php',
            type: 'POST',
            dataType: 'json',
            data:{
                tipe:tipe
            },
            success:function (resp){
                var harga = resp.replace(/,/g,'')
                var hargaFormat = numberWithCommas(harga)
                $('#harga').val(hargaFormat)
            }
        })
    }
});

$('#submit').click(function(){
    var nik = parseInt($('#nik').val())
    var nikType = Number.isInteger(nik)

    if(!nikType){
        $('#nikError').text('Input nik harus berupa Angka!')
        $('#total_bayar').val('')
    }else {
        $('#nikError').text('')
    }
})

$('#hitung_total').click(function(){
    // validasi
    var durasi = parseInt($('#durasi').val())
    var durasiType = Number.isInteger(durasi)
    var nik = parseInt($('#nik').val())
    var nikType = Number.isInteger(nik)
    let discount = 0;
    var harga = parseInt($('#harga').val().replaceAll('.',''))
    var include_breakfast = $('#breakfast').is(':checked')
    var breakfast_price = 80000

    console.log('breakfast',include_breakfast)
    if(!nikType){
        $('#nikError').text('Input nik harus berupa Angka!')
        $('#total_bayar').val('')
    }else if(!durasiType){
        $('#durasiError').text('Input durasi harus berupa Angka!')
        $('#total_bayar').val('')
    }else{
        $('#nikError').text('')
        $('#durasiError').text('')
        harga*=durasi

        if(durasi > 3){
            discount = 0.1
            harga -= (harga*discount)
        }

        if(include_breakfast){
            harga+=breakfast_price
        }else{
            harga = harga
        }
        
        var hargaFormat = numberWithCommas(harga.toString().replace(/,/g,''))
        $('#total_bayar').val(hargaFormat)
    }
})

$('#cancel').click(function(){
    $('#nama_pemesan').val('')
    $('#nik').val('')
    $('#datepicker').val('')
    $('#durasi').val('')
})

AOS.init();


$(document).ready(function() {

    $(window).scroll(function() {

        var height = $('.mapouter').height();
        var scrollTop = $(window).scrollTop();

        if (scrollTop >= height - 40) {
            $('.nav').addClass('solid-nav');
        } else {
            $('.nav').removeClass('solid-nav');
        }

    });
});


function numberWithCommas(x){
    var parts = x.toString().split(".");
    parts[0] = parts[0].replace(/\B(?=(\d{3})+(?!\d))/g,".");
    return parts.join(".");
}