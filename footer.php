
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
  var pos0 = loc.lastIndexOf('/')+1;
  var pos1 = loc.lastIndexOf('.');
  loc = pos1 > pos0 ?  loc.substring( pos0, pos1 ) : 'index';
  var os = document.getElementsByClassName( 's_' + loc );
  for ( var i = 0; i < os.length; i++ ) {
      var o = os[i];
      o.classList.add('active');
   }
</script>

