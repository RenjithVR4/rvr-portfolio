<?php
/*
@Page : skills.php
@Author : Renjith VR
@Author URL: https://renjithvr.in
@Date : Dec 18 2016
@Descrption: skills page of renjithvr.in.
*/

require_once("common/header.php");

?>

<div id="container" class="skills-body"></div>
<div id="menu">
        <button id="grid">GRID</button>
        <button title="Don't forget to Zoom In and Zoom out" id="disperse">DISPERSE</button>
        <button id="rating-button">My ratings out of 5(⚫ ⚫ ⚫ ⚫ ⚫)</button>
</div>
<script type="text/javascript">

$("#fakeLoader").fakeLoader();
$("#fakeloader").fakeLoader({
        timeToHide:4500,
        });
</script>
<!---Skills JS -->
<script src="js/plugins/three.min.js"></script>
<script src="js/plugins/tween.min.js"></script>
<script src="js/plugins/TrackballControls.js"></script>
<script type="text/javascript">

var w = window,
    d = document,
    e = d.documentElement,
    g = d.getElementsByTagName('body')[0],
    x = w.innerWidth || e.clientWidth || g.clientWidth,
    y = w.innerHeight|| e.clientHeight|| g.clientHeight;

  console.log(x +' × '+ y);

  if(x > 767)
  {
          THREE.CSS3DObject = function ( element ) {

          	THREE.Object3D.call( this );

          	this.element = element;
          	this.element.style.position = 'absolute';

          	this.addEventListener( 'removed', function ( event ) {

          		if ( this.element.parentNode !== null ) {

          			this.element.parentNode.removeChild( this.element );

          		}

          	} );

          };

          THREE.CSS3DObject.prototype = Object.create( THREE.Object3D.prototype );
          THREE.CSS3DObject.prototype.constructor = THREE.CSS3DObject;

          THREE.CSS3DSprite = function ( element ) {

          	THREE.CSS3DObject.call( this, element );

          };

          THREE.CSS3DSprite.prototype = Object.create( THREE.CSS3DObject.prototype );
          THREE.CSS3DSprite.prototype.constructor = THREE.CSS3DSprite;

          //

          THREE.CSS3DRenderer = function () {

          	console.log( 'THREE.CSS3DRenderer', THREE.REVISION );

          	var _width, _height;
          	var _widthHalf, _heightHalf;

          	var matrix = new THREE.Matrix4();

          	var cache = {
          		camera: { fov: 0, style: '' },
          		objects: {}
          	};

          	var domElement = document.createElement( 'div' );
          	domElement.className += '3Dcontent';

          	domElement.style.overflow = 'hidden';
          	domElement.style.WebkitBackfaceVisibility = "hidden"
          	domElement.style.WebkitTransformStyle = 'preserve-3d';
          	domElement.style.MozTransformStyle = 'preserve-3d';
          	domElement.style.oTransformStyle = 'preserve-3d';
          	domElement.style.transformStyle = 'preserve-3d';

          	this.domElement = domElement;

          	var cameraElement = document.createElement( 'div' );

          	cameraElement.style.WebkitTransformStyle = 'preserve-3d';
          	cameraElement.style.MozTransformStyle = 'preserve-3d';
          	cameraElement.style.oTransformStyle = 'preserve-3d';
          	cameraElement.style.transformStyle = 'preserve-3d';

          	domElement.appendChild( cameraElement );

          	this.setClearColor = function () {};

          	this.getSize = function() {

          		return {
          			width: _width,
          			height: _height
          		};

          	};

          	this.setSize = function ( width, height ) {

          		_width = width;
          		_height = height;

          		_widthHalf = _width / 2;
          		_heightHalf = _height / 2;

          		domElement.style.width = width + 'px';
          		domElement.style.height = height + 'px';

          		cameraElement.style.width = width + 'px';
          		cameraElement.style.height = height + 'px';

          	};

          	var epsilon = function ( value ) {

          		return Math.abs( value ) < Number.EPSILON ? 0 : value;

          	};

          	var getCameraCSSMatrix = function ( matrix ) {

          		var elements = matrix.elements;

          		return 'matrix3d(' +
          			epsilon( elements[ 0 ] ) + ',' +
          			epsilon( - elements[ 1 ] ) + ',' +
          			epsilon( elements[ 2 ] ) + ',' +
          			epsilon( elements[ 3 ] ) + ',' +
          			epsilon( elements[ 4 ] ) + ',' +
          			epsilon( - elements[ 5 ] ) + ',' +
          			epsilon( elements[ 6 ] ) + ',' +
          			epsilon( elements[ 7 ] ) + ',' +
          			epsilon( elements[ 8 ] ) + ',' +
          			epsilon( - elements[ 9 ] ) + ',' +
          			epsilon( elements[ 10 ] ) + ',' +
          			epsilon( elements[ 11 ] ) + ',' +
          			epsilon( elements[ 12 ] ) + ',' +
          			epsilon( - elements[ 13 ] ) + ',' +
          			epsilon( elements[ 14 ] ) + ',' +
          			epsilon( elements[ 15 ] ) +
          		')';

          	};

          	var getObjectCSSMatrix = function ( matrix ) {

          		var elements = matrix.elements;

          		return 'translate3d(-50%,-50%,0) matrix3d(' +
          			epsilon( elements[ 0 ] ) + ',' +
          			epsilon( elements[ 1 ] ) + ',' +
          			epsilon( elements[ 2 ] ) + ',' +
          			epsilon( elements[ 3 ] ) + ',' +
          			epsilon( - elements[ 4 ] ) + ',' +
          			epsilon( - elements[ 5 ] ) + ',' +
          			epsilon( - elements[ 6 ] ) + ',' +
          			epsilon( - elements[ 7 ] ) + ',' +
          			epsilon( elements[ 8 ] ) + ',' +
          			epsilon( elements[ 9 ] ) + ',' +
          			epsilon( elements[ 10 ] ) + ',' +
          			epsilon( elements[ 11 ] ) + ',' +
          			epsilon( elements[ 12 ] ) + ',' +
          			epsilon( elements[ 13 ] ) + ',' +
          			epsilon( elements[ 14 ] ) + ',' +
          			epsilon( elements[ 15 ] ) +
          		')';

          	};

          	var renderObject = function ( object, camera ) {

          		if ( object instanceof THREE.CSS3DObject ) {

          			var style;

          			if ( object instanceof THREE.CSS3DSprite ) {

          				// http://swiftcoder.wordpress.com/2008/11/25/constructing-a-billboard-matrix/

          				matrix.copy( camera.matrixWorldInverse );
          				matrix.transpose();
          				matrix.copyPosition( object.matrixWorld );
          				matrix.scale( object.scale );

          				matrix.elements[ 3 ] = 0;
          				matrix.elements[ 7 ] = 0;
          				matrix.elements[ 11 ] = 0;
          				matrix.elements[ 15 ] = 1;

          				style = getObjectCSSMatrix( matrix );

          			} else {

          				style = getObjectCSSMatrix( object.matrixWorld );

          			}

          			var element = object.element;
          			var cachedStyle = cache.objects[ object.id ];

          			if ( cachedStyle === undefined || cachedStyle !== style ) {

          				element.style.WebkitTransform = style;
          				element.style.MozTransform = style;
          				element.style.oTransform = style;
          				element.style.transform = style;

          				cache.objects[ object.id ] = style;

          			}

          			if ( element.parentNode !== cameraElement ) {

          				cameraElement.appendChild( element );

          			}

          		}

          		for ( var i = 0, l = object.children.length; i < l; i ++ ) {

          			renderObject( object.children[ i ], camera );

          		}

          	};

          	this.render = function ( scene, camera ) {

          		var fov = 0.5 / Math.tan( THREE.Math.degToRad( camera.getEffectiveFOV() * 0.5 ) ) * _height;

          		if ( cache.camera.fov !== fov ) {

          			domElement.style.WebkitPerspective = fov + "px";
          			domElement.style.MozPerspective = fov + "px";
          			domElement.style.oPerspective = fov + "px";
          			domElement.style.perspective = fov + "px";

          			cache.camera.fov = fov;

          		}

          		scene.updateMatrixWorld();

          		if ( camera.parent === null ) camera.updateMatrixWorld();

          		camera.matrixWorldInverse.getInverse( camera.matrixWorld );

          		var style = "translate3d(0,0," + fov + "px)" + getCameraCSSMatrix( camera.matrixWorldInverse ) +
          			" translate3d(" + _widthHalf + "px," + _heightHalf + "px, 0)";

          		if ( cache.camera.style !== style ) {

          			cameraElement.style.WebkitTransform = style;
          			cameraElement.style.MozTransform = style;
          			cameraElement.style.oTransform = style;
          			cameraElement.style.transform = style;

          			cache.camera.style = style;

          		}

          		renderObject( scene, camera );

          	};

          };
  }

</script>



<script src="js/skills.js"></script>
<script src="js/plugins/notifit.js"></script>
<script>

if($(window).width() > 767)
{
        $("#disperse").click(function(){
                notif({
                  type:"info",
                  msg: "<b style='color:black'>Scroll or simply drag by using mouse. It's 3D!</b>",
                  position: "center"
                });
        });
}
</script>

<!--- \\Skills JS -->

<?php
require_once("common/footer.php");
?>
