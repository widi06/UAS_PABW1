<!--bagian pertama : jquery_source-->
<script src="../style/jquery-3.3.1.min.js"></script>
<!--akhir bagian pertama-->

<!--bagian kedua:controller-->
<script>
setInterval(
   function(){
   $.get("realtime.php", function(Jam){
            var xJam = Jam;
            var x = document.getElementById('tempat_jam');
                  x.innerHTML = xJam;
      });
   },1000);
</script>
<!--akhir bagian kedua-->

<!--bagian ketiga:tempat untuk jam-->
<div id="tempat_jam"></div>
<!--akhir bagian tiga-->