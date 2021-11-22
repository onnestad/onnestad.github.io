
<footer>
  <h1 class="gridHead"> The Circuit </h1>
  <nav class="friendLink">
    <span><a href="https://aentity66.github.io">   Aentity66   </a> </span>
    <span><a href="https://tobiaswijk.github.io/"> Tobias      </a> </span>
    <span><a href="https://onnell.github.io">      Lanelle     </a> </span>
    <span><a href="https://mattejo.github.io">     Jonas       </a> </span>
    <span><a href="https://peghmo.github.io">      Alexander   </a> </span>
    <span><a href="https://onnestad.github.io">    Onnestad IT </a> </span>
  </nav>
</footer>

<script>
  /* ****************************************** */
  // https://www.w3schools.com/js/js_htmldom_elements.asp
  /* ****************************************** */
  var loc = '' + document.location;
  loc = loc.substring( loc.lastIndexOf('/')+1, loc.lastIndexOf('.') );
  var os = document.getElementsByClassName( 's_' + loc );
  for ( var i in os ) {
      var o = os[i];
      o.classList.add('active');
   }
</script>

