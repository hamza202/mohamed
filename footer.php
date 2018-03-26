<footer>
    <div class="inside">
        <div class="footer_logo"><img src="img/footer_logo.png" /></div>
        <h5>Published by</h5>
        <p>Osoul Global Center in cooperation with the Australian Science and Research Academy.</p>
        <p>Copyright © Osoul Global Center, <span id="year">2017</span> All rights reserved.</p>
    </div>
</footer>
</div>

<script type="text/javascript" src="js/jquery-3.2.1.min.js"></script>
<script type="text/javascript" src='js/loading.js'></script>
<script type="text/javascript" src="js/anime.min.js"></script>
<script type="text/javascript" src="js/revealer.js"></script>
<script type="text/javascript" src="js/vivus.min.js"></script>
<script type="text/javascript" src="js/masonry.pkgd.min.js"></script>
<script type="text/javascript" src='js/three.min.js'></script>
<script type="text/javascript" src='js/Detector.js'></script>
<script type="text/javascript" src='js/TrackballControls.js'></script>
<!-- ---------------- Custom Shader Code ------------------------ -->
<script id="vertexShader" type="x-shader/x-vertex"> uniform vec3 viewVector; uniform float c; uniform float p; varying float intensity; void main() { vec3 vNormal = normalize( normalMatrix * normal ); vec3 vNormel = normalize( normalMatrix * viewVector ); intensity = pow( c - dot(vNormal, vNormel), p ); gl_Position = projectionMatrix * modelViewMatrix * vec4( position, 1.0 ); } </script>
<!-- fragment shader a.k.a. pixel shader-->
<script id="fragmentShader" type="x-shader/x-vertex"> uniform vec3 glowColor; varying float intensity; void main() { vec3 glow = glowColor * intensity; gl_FragColor = vec4( glow, 1.0 ) * intensity; } </script>
<script type="text/javascript" src='js/owl.carousel.js'></script>