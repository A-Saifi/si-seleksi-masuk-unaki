<script type="text/javascript">
var started_at = new Date().getTime();
var server_time = <?= time() ?>;

function az(i) {if (i<10) {i = "0" + i};return i;}

var clockInterval = setInterval(function(){
var current_time = new Date().getTime();
var excecution_time = parseInt((current_time - started_at) / 1000);

var s = new Date((server_time + excecution_time) * 1000);

document.getElementById('server-time').innerHTML = az(s.getHours())+':'+az(s.getMinutes())+':'+az(s.getSeconds());
}, 1000)
</script>
