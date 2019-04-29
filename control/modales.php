  <!-- VISUONEUSE D'IMAGES -->
  <!-- <img id="myImg" src="fichiers/bobmarley.png" alt="Formation" style="width: 50%;"> -->

  <!-- THE MODAL -->
  <div id="myView" class="view">
    <!-- THE CLOSE BTN -->
    <span class="fermer" onclick="this.parentElement.style.display='none'">&times;</span>
    <!-- CONTENU IMAGES -->
    <img class="view-content" id="img01">
    <!-- MODAL CAPTION TEXT IMG -->
    <div id="caption"></div>
  </div>
  <style type="text/css">
    #myImg {
      border-radius: 5px;
      cursor: pointer;
      transition: 0.3s;
    }
    #myImg:hover { opacity: 0.8; }

    .view {
      display: none;
      position: fixed;
      z-index: 1;
      padding-top: 100px;
      left: 0;
      top: 0;
      width: 100%;
      height: 100%;
      overflow: auto;
      background-color: rgb(0,0,0);
      background-color: rgba(0,0,0,0.5);
    }

    .view-content {
      margin: auto;
      display: block;
      width: 50%;
    }

    #caption {
      margin: auto;
      display: block;
      width: 60%;
      text-align: center;
      color: #ccc;
      padding: 10px;
      height: 150px;
    }

    .view-content, #caption {
      animation-name: zoom;
      animation-duration: 0.6s;
    }
    @keyframes zoom {
      from { transform: scale(0); }
      to { transform: scale(1); }
    }

    .fermer {
      position: absolute;
      top: 10%;
      right: 25px;
      color: #f1f1f1;
      font-size: 40px;
      transition: 0.3s;
    }
    .fermer:hover, .fermer:focus {
      color: #bbb;
      text-decoration: none;
      cursor: pointer;
    }

    @media only screen and (max-width: 700px) {
      .view-content {
        width: 20%;
      }
    }
  </style>

<script type="text/javascript">
  function myModal(imgs) {
    var view = document.getElementById('myView');
    var img = document.getElementById('myImg');
    var modalImg = document.getElementById('img01');
    var captiontxt = document.getElementById('caption');

    // img.onclick = function() {
      view.style.display = "block";
      modalImg.src = imgs.src;
      captiontxt.innerHTML = imgs.alt;
    }

    var span = document.getElementByClassName('fermer')[0];
    span.onclick = function() {
      view.style.display = "none";
    }
  </script>