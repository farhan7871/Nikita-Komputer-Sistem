<!-- Bootstrap core JavaScript-->
<script src={{url("backend/vendor/jquery/jquery.min.js")}}></script>
<script src={{url("backend/vendor/bootstrap/js/bootstrap.bundle.min.js")}}></script>

<!-- Core plugin JavaScript-->
<script src={{url("backend/vendor/jquery-easing/jquery.easing.min.js")}}></script>

<!-- Custom scripts for all pages-->
<script src={{url("backend/js/sb-admin-2.min.js")}}></script>

<!-- Page level plugins -->
<script src={{url("backend/vendor/datatables/jquery.dataTables.min.js")}}></script>
<script src={{url("backend/vendor/datatables/dataTables.bootstrap4.min.js")}}></script>

<!-- Page level custom scripts -->
<script src={{url("backend/js/demo/datatables-demo.js")}}></script>
{{-- 
<script>
    function calculate(){
        var number1 = document.getElementsByName('harga').value;
        var number2 = document.getElementsByName('banyak').value;
        var result = document.getElementsByName('total').value;
        var myResult = number1 + number2;
        document.getElementsByName('total').value=myResult;
    }
</script> --}}

<script type="text/javascript">
		
    var rupiah = document.getElementById('rupiah');
    rupiah.addEventListener('keyup', function(e){
        // tambahkan 'Rp.' pada saat form di ketik
        // gunakan fungsi formatRupiah() untuk mengubah angka yang di ketik menjadi format angka
        rupiah.value = formatRupiah(this.value, );
    });

    /* Fungsi formatRupiah */
    function formatRupiah(angka, prefix){
        var number_string = angka.replace(/[^,\d]/g, '').toString(),
        split   		= number_string.split(','),
        sisa     		= split[0].length % 3,
        rupiah     		= split[0].substr(0, sisa),
        ribuan     		= split[0].substr(sisa).match(/\d{3}/gi);

        // tambahkan titik jika yang di input sudah menjadi angka ribuan
        if(ribuan){
            separator = sisa ? '.' : '';
            rupiah += separator + ribuan.join('.');
        }

        rupiah = split[1] != undefined ? rupiah + ',' + split[1] : rupiah;
        return prefix == undefined ? rupiah : (rupiah ? 'Rp. ' + rupiah : '');
    }
    
</script>