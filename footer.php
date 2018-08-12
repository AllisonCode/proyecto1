</div>
            <!-- END MAIN CONTENT-->
            <!-- END PAGE CONTAINER-->
        </div>

    </div>

    <!-- Jquery JS-->
    <script src="vendor/jquery-3.2.1.min.js"></script>
    <!-- Bootstrap JS-->
    <script src="vendor/bootstrap-4.1/popper.min.js"></script>
    <script src="vendor/bootstrap-4.1/bootstrap.min.js"></script>
    <!-- Vendor JS       -->
    <script src="vendor/slick/slick.min.js">
    </script>
    <script src="vendor/wow/wow.min.js"></script>
    <script src="vendor/animsition/animsition.min.js"></script>
    <script src="vendor/bootstrap-progressbar/bootstrap-progressbar.min.js">
    </script>
    <script src="vendor/counter-up/jquery.waypoints.min.js"></script>
    <script src="vendor/counter-up/jquery.counterup.min.js">
    </script>
    <script src="vendor/circle-progress/circle-progress.min.js"></script>
    <script src="vendor/perfect-scrollbar/perfect-scrollbar.js"></script>
    <script src="vendor/chartjs/Chart.bundle.min.js"></script>
    <script src="vendor/select2/select2.min.js">
    </script>

<script>
	TweenMax.set('#circlePath', {
  attr: {
    r: document.querySelector('#mainCircle').getAttribute('r')
  }
})
MorphSVGPlugin.convertToPath('#circlePath');

var xmlns = "http://www.w3.org/2000/svg",
  xlinkns = "http://www.w3.org/1999/xlink",
  select = function(s) {
    return document.querySelector(s);
  },
  selectAll = function(s) {
    return document.querySelectorAll(s);
  },
  mainCircle = select('#mainCircle'),
  mainContainer = select('#mainContainer'),
  car = select('#car'),
  mainSVG = select('.mainSVG'),
  mainCircleRadius = Number(mainCircle.getAttribute('r')),
  //radius = mainCircleRadius,
  numDots = mainCircleRadius / 2,
  step = 360 / numDots,
  dotMin = 0,
  circlePath = select('#circlePath')

//
//mainSVG.appendChild(circlePath);
TweenMax.set('svg', {
  visibility: 'visible'
})
TweenMax.set([car], {
  transformOrigin: '50% 50%'
})
TweenMax.set('#carRot', {
  transformOrigin: '0% 0%',
  rotation:30
})

var circleBezier = MorphSVGPlugin.pathDataToBezier(circlePath.getAttribute('d'), {
  offsetX: -20,
  offsetY: -5
})



//console.log(circlePath)
var mainTl = new TimelineMax();

function makeDots() {
  var d, angle, tl;
  for (var i = 0; i < numDots; i++) {

    d = select('#puff').cloneNode(true);
    mainContainer.appendChild(d);
    angle = step * i;
    TweenMax.set(d, {
      //attr: {
      x: (Math.cos(angle * Math.PI / 180) * mainCircleRadius) + 400,
      y: (Math.sin(angle * Math.PI / 180) * mainCircleRadius) + 300,
      rotation: Math.random() * 360,
      transformOrigin: '50% 50%'
        //}
    })

    tl = new TimelineMax({
      repeat: -1
    });
    tl
      .from(d, 0.2, {
        scale: 0,
        ease: Power4.easeIn
      })
      .to(d, 1.8, {
        scale: Math.random() + 2,
        alpha: 0,
        ease: Power4.easeOut
      })

    mainTl.add(tl, i / (numDots / tl.duration()))
  }
  var carTl = new TimelineMax({
    repeat: -1
  });
  carTl.to(car, tl.duration(), {
    bezier: {
      type: "cubic",
      values: circleBezier,
      autoRotate: true
    },
    ease: Linear.easeNone
  })
  mainTl.add(carTl, 0.05)
}

makeDots();
mainTl.time(120);
TweenMax.to(mainContainer, 20, {
  rotation: -360,
  svgOrigin: '400 300',
  repeat: -1,
  ease: Linear.easeNone
});
mainTl.timeScale(1.1)
</script>
    <!-- Main JS-->
    <script src="js/main.js"></script>
	<script src="js/usuarios.js"></script>
</body>


</html>
<!-- end document-->