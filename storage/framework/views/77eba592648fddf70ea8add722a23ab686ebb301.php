<!DOCTYPE html>
<html lang="en" class="scroll-smooth">

<style>

body{
        overflow-x: hidden;
    }

    canvas {
    height: 100vh;
    width: 100vw;
    background-color: transparent; /* Set the background color to transparent */
  }

</style>
<head>
    <meta charSet="utf-8" />
    <meta name="viewport" content="width=device-width" />
     <title>Muhammad Asjad</title>
    
    <meta name="description" content="Muhammad Asjad is a software engineer who builds accessible, inclusive products and digital experiences for the web." />
    
    <meta property="og:locale" content="en_US" />
    <meta property="og:site_name" content="Muhammad Asjad" />
    <meta property="og:type" content="website" />
    <meta property="twitter:card" content="summary_large_image" />

    <meta property="og:title" content="Muhammad Asjad" />
    <meta property="og:description"
        content="Muhammad Asjad is a software engineer who builds accessible, inclusive products and digital experiences for the web." />

    <meta property="twitter:title" content="Muhammad Asjad" />
    <meta property="twitter:description"
        content="Muhammad Asjad is a software engineer who builds accessible, inclusive products and digital experiences for the web." />

    <link rel="icon" href="<?php echo e(asset('public/admin/assets/images/page')); ?>/<?php echo e($home_page_data['header_favicon']); ?>"
        type="image/png" sizes="16x16">
   
    <meta name="msapplication-TileColor" content="#0f172a" />
    <meta name="theme-color" content="#0f172a" />
    <meta name="next-head-count" content="28" />

    <link rel="preload" href="<?php echo e(asset('public/assets/website/_next/static/css/ddee093839f4ecb2.css')); ?>"
        as="style" />
    <link rel="stylesheet" href="<?php echo e(asset('public/assets/website/_next/static/css/ddee093839f4ecb2.css')); ?>"
        data-n-g="" />
    <noscript data-n-css=""></noscript>
    <script defer="" nomodule="" src="<?php echo e(asset('public/assets/website/_next/static/chunks/polyfills-c67a75d1b6f99dc8.js')); ?>"></script>
    
    <script src="<?php echo e(asset('public/assets/website/_next/static/chunks/framework-2c79e2a64abdb08b.js')); ?>" defer=""></script>
    <script src="<?php echo e(asset('public/assets/website/_next/static/chunks/main-17a9a24315ee9390.js')); ?>" defer=""></script>
    <script src="<?php echo e(asset('public/assets/website/_next/static/chunks/pages/_app-4bc465e7665e4ac0.js')); ?>" defer=""></script>
    <script src="<?php echo e(asset('public/assets/website/_next/static/chunks/664-09cd891ecc3af1d0.js')); ?>" defer=""></script>
    <script src="<?php echo e(asset('public/assets/website/_next/static/chunks/506-95c309a4d817bb8b.js')); ?>" defer=""></script>
    <script src="<?php echo e(asset('public/assets/website/_next/static/chunks/pages/index-54d4346dea697749.js')); ?>" defer=""></script>
    <script src="<?php echo e(asset('public/assets/website/_next/static/Zir8Nbaki0-5PHTn_Z7Ql/_buildManifest.js')); ?>" defer=""></script>
    <script src="<?php echo e(asset('public/assets/website/_next/static/Zir8Nbaki0-5PHTn_Z7Ql/_ssgManifest.js')); ?>" defer=""></script>
</head>

<body class="bg-slate-900 leading-relaxed text-slate-400 antialiased selection:bg-teal-300 selection:text-teal-900">
    <canvas></canvas>
        <div id="__next">
        <div class="__variable_20b187 group/spotlight relative">
            <div class="pointer-events-none fixed -inset-px z-30 transition duration-300 lg:absolute"
            style="background:radial-gradient(
                600px circle at 0px 0px,
                rgba(36, 146, 219, 0.397),
                transparent 80%
                )">
            </div>

            <div class="mx-auto min-h-screen max-w-screen-xl px-6 py-12 font-sans md:px-12 md:py-20 lg:px-24 lg:py-0">

                <div class="lg:flex lg:justify-between lg:gap-4">
                    <!-- Header -->
                    <?php echo $__env->make('layouts.website.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                    <!-- Header End -->

                    <?php echo $__env->yieldContent('content'); ?>

                    <!-- Footer -->
                    <?php echo $__env->make('layouts.website.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                    <!-- Footer End -->
                </div>
            </div>
        </div>
    </div>


    <!-- ALL JS -->
    <?php echo $__env->yieldPushContent('js'); ?>

    <!-- bootstrap cdnjs -->
   
    <!-- bootstrap cdnjs -->
    <!-- home_banner js cdn-->
  
    <!-- home_banner js cdn-->
   

    <script>
       "use strict";
function getMousePos(canvas, evt) {
  var rect = canvas.getBoundingClientRect();
  return {
    x: evt.clientX - rect.left,
    y: evt.clientY - rect.top
  };
}
var canvas = document.getElementsByTagName("canvas")[0];
canvas.addEventListener("mousemove", function(evt) {
  var mousePos = getMousePos(canvas, evt);/*
  var message = "Mouse position: " + mousePos.x + "," + mousePos.y; */
  document.getElementsByTagName("body")/* [0].innerText = message; */
});

canvas.width = canvas.clientWidth;
canvas.height = canvas.clientHeight;

var config = {
  TEXTURE_DOWNSAMPLE: 1,
  DENSITY_DISSIPATION: 0.98,
  VELOCITY_DISSIPATION: 0.99,
  PRESSURE_DISSIPATION: 0.8,
  PRESSURE_ITERATIONS: 25,
  CURL: 30,
  SPLAT_RADIUS: 0.005
};

var pointers = [];
var splatStack = [];

var _getWebGLContext = getWebGLContext(canvas);
var gl = _getWebGLContext.gl;
var ext = _getWebGLContext.ext;
var support_linear_float = _getWebGLContext.support_linear_float;

function getWebGLContext(canvas) {
  var params = {
    alpha: false,
    depth: false,
    stencil: false,
    antialias: false
  };

  var gl = canvas.getContext("webgl2", params);

  var isWebGL2 = !!gl;

  if (!isWebGL2)
    gl =
      canvas.getContext("webgl", params) ||
      canvas.getContext("experimental-webgl", params);

  var halfFloat = gl.getExtension("OES_texture_half_float");
  var support_linear_float = gl.getExtension("OES_texture_half_float_linear");

  if (isWebGL2) {
    gl.getExtension("EXT_color_buffer_float");
    support_linear_float = gl.getExtension("OES_texture_float_linear");
  }

  gl.clearColor(0.5, 0.5, 0.5, 1.5);

  var internalFormat = isWebGL2 ? gl.RGBA16F : gl.RGBA;
  var internalFormatRG = isWebGL2 ? gl.RG16F : gl.RGBA;
  var formatRG = isWebGL2 ? gl.RG : gl.RGBA;
  var texType = isWebGL2 ? gl.HALF_FLOAT : halfFloat.HALF_FLOAT_OES;

  return {
    gl: gl,
    ext: {
      internalFormat: internalFormat,
      internalFormatRG: internalFormatRG,
      formatRG: formatRG,
      texType: texType
    },
    support_linear_float: support_linear_float
  };
}

function pointerPrototype() {
  this.id = -1;
  this.x = 0;
  this.y = 0;
  this.dx = 0;
  this.dy = 0;
  this.down = false;
  this.moved = false;
  this.color = [10, 600, 10, 40,  100];
}

pointers.push(new pointerPrototype());

var GLProgram = (function() {
  function GLProgram(vertexShader, fragmentShader) {
    if (!(this instanceof GLProgram))
      throw new TypeError("Cannot call a class as a function");

    this.uniforms = {};
    this.program = gl.createProgram();

    gl.attachShader(this.program, vertexShader);
    gl.attachShader(this.program, fragmentShader);
    gl.linkProgram(this.program);

    if (!gl.getProgramParameter(this.program, gl.LINK_STATUS))
      throw gl.getProgramInfoLog(this.program);

    var uniformCount = gl.getProgramParameter(this.program, gl.ACTIVE_UNIFORMS);

    for (var i = 0; i < uniformCount; i++) {
      var uniformName = gl.getActiveUniform(this.program, i).name;

      this.uniforms[uniformName] = gl.getUniformLocation(
        this.program,
        uniformName
      );
    }
  }

  GLProgram.prototype.bind = function bind() {
    gl.useProgram(this.program);
  };

  return GLProgram;
})();

function compileShader(type, source) {
  var shader = gl.createShader(type);

  gl.shaderSource(shader, source);
  gl.compileShader(shader);

  if (!gl.getShaderParameter(shader, gl.COMPILE_STATUS))
    throw gl.getShaderInfoLog(shader);

  return shader;
}

var baseVertexShader = compileShader(
  gl.VERTEX_SHADER,
  "precision highp float; precision mediump sampler2D; attribute vec2 aPosition; varying vec2 vUv; varying vec2 vL; varying vec2 vR; varying vec2 vT; varying vec2 vB; uniform vec2 texelSize; void main () {     vUv = aPosition * 0.5 + 0.5;     vL = vUv - vec2(texelSize.x, 0.0);     vR = vUv + vec2(texelSize.x, 0.0);     vT = vUv + vec2(0.0, texelSize.y);     vB = vUv - vec2(0.0, texelSize.y);     gl_Position = vec4(aPosition, 0.0, 1.0); }"
);
var clearShader = compileShader(
  gl.FRAGMENT_SHADER,
  "precision highp float; precision mediump sampler2D; varying vec2 vUv; uniform sampler2D uTexture; uniform float value; void main () {     gl_FragColor = value * texture2D(uTexture, vUv); }"
);
var displayShader = compileShader(
  gl.FRAGMENT_SHADER,
  "precision highp float; precision mediump sampler2D; varying vec2 vUv; uniform sampler2D uTexture; void main () {     gl_FragColor = texture2D(uTexture, vUv); }"
);
var splatShader = compileShader(
  gl.FRAGMENT_SHADER,
  "precision highp float; precision mediump sampler2D; varying vec2 vUv; uniform sampler2D uTarget; uniform float aspectRatio; uniform vec3 color; uniform vec2 point; uniform float radius; void main () {     vec2 p = vUv - point.xy;     p.x *= aspectRatio;     vec3 splat = exp(-dot(p, p) / radius) * color;     vec3 base = texture2D(uTarget, vUv).xyz;     gl_FragColor = vec4(base + splat, 1.0); }"
);
var advectionManualFilteringShader = compileShader(
  gl.FRAGMENT_SHADER,
  "precision highp float; precision mediump sampler2D; varying vec2 vUv; uniform sampler2D uVelocity; uniform sampler2D uSource; uniform vec2 texelSize; uniform float dt; uniform float dissipation; vec4 bilerp (in sampler2D sam, in vec2 p) {     vec4 st;     st.xy = floor(p - 0.5) + 0.5;     st.zw = st.xy + 1.0;     vec4 uv = st * texelSize.xyxy;     vec4 a = texture2D(sam, uv.xy);     vec4 b = texture2D(sam, uv.zy);     vec4 c = texture2D(sam, uv.xw);     vec4 d = texture2D(sam, uv.zw);     vec2 f = p - st.xy;     return mix(mix(a, b, f.x), mix(c, d, f.x), f.y); } void main () {     vec2 coord = gl_FragCoord.xy - dt * texture2D(uVelocity, vUv).xy;     gl_FragColor = dissipation * bilerp(uSource, coord);     gl_FragColor.a = 1.0; }"
);
var advectionShader = compileShader(
  gl.FRAGMENT_SHADER,
  "precision highp float; precision mediump sampler2D; varying vec2 vUv; uniform sampler2D uVelocity; uniform sampler2D uSource; uniform vec2 texelSize; uniform float dt; uniform float dissipation; void main () {     vec2 coord = vUv - dt * texture2D(uVelocity, vUv).xy * texelSize;     gl_FragColor = dissipation * texture2D(uSource, coord); }"
);
var divergenceShader = compileShader(
  gl.FRAGMENT_SHADER,
  "precision highp float; precision mediump sampler2D; varying vec2 vUv; varying vec2 vL; varying vec2 vR; varying vec2 vT; varying vec2 vB; uniform sampler2D uVelocity; vec2 sampleVelocity (in vec2 uv) {     vec2 multiplier = vec2(1.0, 1.0);     if (uv.x < 0.0) { uv.x = 0.0; multiplier.x = -1.0; }     if (uv.x > 1.0) { uv.x = 1.0; multiplier.x = -1.0; }     if (uv.y < 0.0) { uv.y = 0.0; multiplier.y = -1.0; }     if (uv.y > 1.0) { uv.y = 1.0; multiplier.y = -1.0; }     return multiplier * texture2D(uVelocity, uv).xy; } void main () {     float L = sampleVelocity(vL).x;     float R = sampleVelocity(vR).x;     float T = sampleVelocity(vT).y;     float B = sampleVelocity(vB).y;     float div = 0.5 * (R - L + T - B);     gl_FragColor = vec4(div, 0.0, 0.0, 1.0); }"
);
var curlShader = compileShader(
  gl.FRAGMENT_SHADER,
  "precision highp float; precision mediump sampler2D; varying vec2 vUv; varying vec2 vL; varying vec2 vR; varying vec2 vT; varying vec2 vB; uniform sampler2D uVelocity; void main () {     float L = texture2D(uVelocity, vL).y;     float R = texture2D(uVelocity, vR).y;     float T = texture2D(uVelocity, vT).x;     float B = texture2D(uVelocity, vB).x;     float vorticity = R - L - T + B;     gl_FragColor = vec4(vorticity, 0.0, 0.0, 1.0); }"
);
var vorticityShader = compileShader(
  gl.FRAGMENT_SHADER,
  "precision highp float; precision mediump sampler2D; varying vec2 vUv; varying vec2 vL; varying vec2 vR; varying vec2 vT; varying vec2 vB; uniform sampler2D uVelocity; uniform sampler2D uCurl; uniform float curl; uniform float dt; void main () {     float L = texture2D(uCurl, vL).y;     float R = texture2D(uCurl, vR).y;     float T = texture2D(uCurl, vT).x;     float B = texture2D(uCurl, vB).x;     float C = texture2D(uCurl, vUv).x;     vec2 force = vec2(abs(T) - abs(B), abs(R) - abs(L));     force *= 1.0 / length(force + 0.00001) * curl * C;     vec2 vel = texture2D(uVelocity, vUv).xy;     gl_FragColor = vec4(vel + force * dt, 0.0, 1.0); }"
);
var pressureShader = compileShader(
  gl.FRAGMENT_SHADER,
  "precision highp float; precision mediump sampler2D; varying vec2 vUv; varying vec2 vL; varying vec2 vR; varying vec2 vT; varying vec2 vB; uniform sampler2D uPressure; uniform sampler2D uDivergence; vec2 boundary (in vec2 uv) {     uv = min(max(uv, 0.0), 1.0);     return uv; } void main () {     float L = texture2D(uPressure, boundary(vL)).x;     float R = texture2D(uPressure, boundary(vR)).x;     float T = texture2D(uPressure, boundary(vT)).x;     float B = texture2D(uPressure, boundary(vB)).x;     float C = texture2D(uPressure, vUv).x;     float divergence = texture2D(uDivergence, vUv).x;     float pressure = (L + R + B + T - divergence) * 0.25;     gl_FragColor = vec4(pressure, 0.0, 0.0, 1.0); }"
);
var gradientSubtractShader = compileShader(
  gl.FRAGMENT_SHADER,
  "precision highp float; precision mediump sampler2D; varying vec2 vUv; varying vec2 vL; varying vec2 vR; varying vec2 vT; varying vec2 vB; uniform sampler2D uPressure; uniform sampler2D uVelocity; vec2 boundary (in vec2 uv) {     uv = min(max(uv, 0.0), 1.0);     return uv; } void main () {     float L = texture2D(uPressure, boundary(vL)).x;     float R = texture2D(uPressure, boundary(vR)).x;     float T = texture2D(uPressure, boundary(vT)).x;     float B = texture2D(uPressure, boundary(vB)).x;     vec2 velocity = texture2D(uVelocity, vUv).xy;     velocity.xy -= vec2(R - L, T - B);     gl_FragColor = vec4(velocity, 0.0, 1.0); }"
);

var textureWidth = void 10;
var textureHeight = void 20;
var density = void 10;
var velocity = void 20;
var divergence = void 20;
var curl = void 10;
var pressure = void 10;

initFramebuffers();

var clearProgram = new GLProgram(baseVertexShader, clearShader);
var displayProgram = new GLProgram(baseVertexShader, displayShader);
var splatProgram = new GLProgram(baseVertexShader, splatShader);
var advectionProgram = new GLProgram(
  baseVertexShader,
  support_linear_float ? advectionShader : advectionManualFilteringShader
);
var divergenceProgram = new GLProgram(baseVertexShader, divergenceShader);
var curlProgram = new GLProgram(baseVertexShader, curlShader);
var vorticityProgram = new GLProgram(baseVertexShader, vorticityShader);
var pressureProgram = new GLProgram(baseVertexShader, pressureShader);
var gradienSubtractProgram = new GLProgram(
  baseVertexShader,
  gradientSubtractShader
);

function initFramebuffers() {
  textureWidth = gl.drawingBufferWidth >> config.TEXTURE_DOWNSAMPLE;
  textureHeight = gl.drawingBufferHeight >> config.TEXTURE_DOWNSAMPLE;

  var iFormat = ext.internalFormat;
  var iFormatRG = ext.internalFormatRG;
  var formatRG = ext.formatRG;
  var texType = ext.texType;

  density = createDoubleFBO(
    0,
    textureWidth,
    textureHeight,
    iFormat,
    gl.RGBA,
    texType,
    support_linear_float ? gl.LINEAR : gl.NEAREST
  );
  velocity = createDoubleFBO(
    2,
    textureWidth,
    textureHeight,
    iFormatRG,
    formatRG,
    texType,
    support_linear_float ? gl.LINEAR : gl.NEAREST
  );
  divergence = createFBO(
    4,
    textureWidth,
    textureHeight,
    iFormatRG,
    formatRG,
    texType,
    gl.NEAREST
  );
  curl = createFBO(
    5,
    textureWidth,
    textureHeight,
    iFormatRG,
    formatRG,
    texType,
    gl.NEAREST
  );
  pressure = createDoubleFBO(
    6,
    textureWidth,
    textureHeight,
    iFormatRG,
    formatRG,
    texType,
    gl.NEAREST
  );
}

function createFBO(texId, w, h, internalFormat, format, type, param) {
  gl.activeTexture(gl.TEXTURE0 + texId);

  var texture = gl.createTexture();

  gl.bindTexture(gl.TEXTURE_2D, texture);
  gl.texParameteri(gl.TEXTURE_2D, gl.TEXTURE_MIN_FILTER, param);
  gl.texParameteri(gl.TEXTURE_2D, gl.TEXTURE_MAG_FILTER, param);
  gl.texParameteri(gl.TEXTURE_2D, gl.TEXTURE_WRAP_S, gl.CLAMP_TO_EDGE);
  gl.texParameteri(gl.TEXTURE_2D, gl.TEXTURE_WRAP_T, gl.CLAMP_TO_EDGE);
  gl.texImage2D(gl.TEXTURE_2D, 0, internalFormat, w, h, 0, format, type, null);

  var fbo = gl.createFramebuffer();

  gl.bindFramebuffer(gl.FRAMEBUFFER, fbo);
  gl.framebufferTexture2D(
    gl.FRAMEBUFFER,
    gl.COLOR_ATTACHMENT0,
    gl.TEXTURE_2D,
    texture,
    0
  );
  gl.viewport(0, 0, w, h);
  gl.clear(gl.COLOR_BUFFER_BIT);

  return [texture, fbo, texId];
}

function createDoubleFBO(texId, w, h, internalFormat, format, type, param) {
  var fbo1 = createFBO(texId, w, h, internalFormat, format, type, param);
  var fbo2 = createFBO(texId + 1, w, h, internalFormat, format, type, param);

  return {
    get first() {
      return fbo1;
    },
    get second() {
      return fbo2;
    },
    swap: function swap() {
      var temp = fbo1;

      fbo1 = fbo2;
      fbo2 = temp;
    }
  };
}

    var blit = (function() {
    gl.bindBuffer(gl.ARRAY_BUFFER, gl.createBuffer());
    gl.bufferData(
        gl.ARRAY_BUFFER,
        new Float32Array([-1, -1, -1, 1, 1, 1, 1, -1]),
        gl.STATIC_DRAW
    );
    gl.bindBuffer(gl.ELEMENT_ARRAY_BUFFER, gl.createBuffer());
    gl.bufferData(
        gl.ELEMENT_ARRAY_BUFFER,
        new Uint16Array([0, 1, 2, 0, 2, 3]),
        gl.STATIC_DRAW
    );
    gl.vertexAttribPointer(0, 2, gl.FLOAT, false, 0, 0);
    gl.enableVertexAttribArray(0);

    return function(destination) {
        gl.bindFramebuffer(gl.FRAMEBUFFER, destination);
        gl.drawElements(gl.TRIANGLES, 6, gl.UNSIGNED_SHORT, 0);
    };
    })();

    var lastTime = Date.now();

    update();

    function update() {
    resizeCanvas();

    var dt = Math.min((Date.now() - lastTime) / 1000, 0.016);
    lastTime = Date.now();

    gl.viewport(0, 0, textureWidth, textureHeight);

    if (splatStack.length > 0) {
        for (var m = 0; m < splatStack.pop(); m++) {
        var color = [Math.random() * 10, Math.random() * 10, Math.random() * 10];
        var x = canvas.width * Math.random();
        var y = canvas.height * Math.random();
        var dx = 1000 * (Math.random() - 0.5);
        var dy = 1000 * (Math.random() - 0.5);

        splat(x, y, dx, dy, color);
        }
    }

    advectionProgram.bind();
    gl.uniform2f(
        advectionProgram.uniforms.texelSize,
        1.0 / textureWidth,
        1.0 / textureHeight
    );
    gl.uniform1i(advectionProgram.uniforms.uVelocity, velocity.first[2]);
    gl.uniform1i(advectionProgram.uniforms.uSource, velocity.first[2]);
    gl.uniform1f(advectionProgram.uniforms.dt, dt);
    gl.uniform1f(
        advectionProgram.uniforms.dissipation,
        config.VELOCITY_DISSIPATION
    );
    blit(velocity.second[1]);
    velocity.swap();

    gl.uniform1i(advectionProgram.uniforms.uVelocity, velocity.first[2]);
    gl.uniform1i(advectionProgram.uniforms.uSource, density.first[2]);
    gl.uniform1f(
        advectionProgram.uniforms.dissipation,
        config.DENSITY_DISSIPATION
    );
    blit(density.second[1]);
    density.swap();

    for (var i = 0, len = pointers.length; i < len; i++) {
        var pointer = pointers[i];

        if (pointer.moved) {
        splat(pointer.x, pointer.y, pointer.dx, pointer.dy, pointer.color);
        pointer.moved = false;
        }
    }

    curlProgram.bind();
    gl.uniform2f(
        curlProgram.uniforms.texelSize,
        1.0 / textureWidth,
        1.0 / textureHeight
    );
    gl.uniform1i(curlProgram.uniforms.uVelocity, velocity.first[2]);
    blit(curl[1]);

    vorticityProgram.bind();
    gl.uniform2f(
        vorticityProgram.uniforms.texelSize,
        1.0 / textureWidth,
        1.0 / textureHeight
    );
    gl.uniform1i(vorticityProgram.uniforms.uVelocity, velocity.first[2]);
    gl.uniform1i(vorticityProgram.uniforms.uCurl, curl[2]);
    gl.uniform1f(vorticityProgram.uniforms.curl, config.CURL);
    gl.uniform1f(vorticityProgram.uniforms.dt, dt);
    blit(velocity.second[1]);
    velocity.swap();

    divergenceProgram.bind();
    gl.uniform2f(
        divergenceProgram.uniforms.texelSize,
        1.0 / textureWidth,
        1.0 / textureHeight
    );
    gl.uniform1i(divergenceProgram.uniforms.uVelocity, velocity.first[2]);
    blit(divergence[1]);

    clearProgram.bind();

    var pressureTexId = pressure.first[2];

    gl.activeTexture(gl.TEXTURE0 + pressureTexId);
    gl.bindTexture(gl.TEXTURE_2D, pressure.first[0]);
    gl.uniform1i(clearProgram.uniforms.uTexture, pressureTexId);
    gl.uniform1f(clearProgram.uniforms.value, config.PRESSURE_DISSIPATION);
    blit(pressure.second[1]);
    pressure.swap();

    pressureProgram.bind();
    gl.uniform2f(
        pressureProgram.uniforms.texelSize,
        1.0 / textureWidth,
        1.0 / textureHeight
    );
    gl.uniform1i(pressureProgram.uniforms.uDivergence, divergence[2]);
    pressureTexId = pressure.first[2];
    gl.activeTexture(gl.TEXTURE0 + pressureTexId);

    for (var _i = 0; _i < config.PRESSURE_ITERATIONS; _i++) {
        gl.bindTexture(gl.TEXTURE_2D, pressure.first[0]);
        gl.uniform1i(pressureProgram.uniforms.uPressure, pressureTexId);
        blit(pressure.second[1]);
        pressure.swap();
    }

    gradienSubtractProgram.bind();
    gl.uniform2f(
        gradienSubtractProgram.uniforms.texelSize,
        1.0 / textureWidth,
        1.0 / textureHeight
    );
    gl.uniform1i(gradienSubtractProgram.uniforms.uPressure, pressure.first[2]);
    gl.uniform1i(gradienSubtractProgram.uniforms.uVelocity, velocity.first[2]);
    blit(velocity.second[1]);
    velocity.swap();

    gl.viewport(0, 0, gl.drawingBufferWidth, gl.drawingBufferHeight);
    displayProgram.bind();
    gl.uniform1i(displayProgram.uniforms.uTexture, density.first[2]);
    blit(null);

    requestAnimationFrame(update);
    }

    function splat(x, y, dx, dy, color) {
    splatProgram.bind();
    gl.uniform1i(splatProgram.uniforms.uTarget, velocity.first[2]);
    gl.uniform1f(splatProgram.uniforms.aspectRatio, canvas.width / canvas.height);
    gl.uniform2f(
        splatProgram.uniforms.point,
        x / canvas.width,
        1.0 - y / canvas.height
    );
    gl.uniform3f(splatProgram.uniforms.color, dx, -dy, 1.0);
    gl.uniform1f(splatProgram.uniforms.radius, config.SPLAT_RADIUS);
    blit(velocity.second[1]);
    velocity.swap();

    gl.uniform1i(splatProgram.uniforms.uTarget, density.first[2]);
    gl.uniform3f(
        splatProgram.uniforms.color,
        color[0] * 0.1,
        color[1] * 0.3,
        color[2] * 0.3
    );
    blit(density.second[1]);
    density.swap();
    }

    function resizeCanvas() {
    (canvas.width !== canvas.clientWidth ||
        canvas.height !== canvas.clientHeight) &&
        ((canvas.width = canvas.clientWidth),
        (canvas.height = canvas.clientHeight),
        initFramebuffers());
    }

    var count = 0;
    var colorArr = [Math.random() + 0.2, Math.random() + 0.2, Math.random() + 0.2];

    canvas.addEventListener("mousemove", function(e) {
    count++;

    count > 25 &&
        ((colorArr = [
        Math.random() + 0.2,
        Math.random() + 0.2,
        Math.random() + 0.2
        ]),
        (count = 0));

    pointers[0].down = true;
    pointers[0].color = colorArr;
    pointers[0].moved = pointers[0].down;
    pointers[0].dx = (e.offsetX - pointers[0].x) * 10.0;
    pointers[0].dy = (e.offsetY - pointers[0].y) * 10.0;
    pointers[0].x = e.offsetX;
    pointers[0].y = e.offsetY;
    });

    canvas.addEventListener(
    "touchmove",
    function(e) {
        e.preventDefault();

        var touches = e.targetTouches;

        count++;

        count > 25 &&
        ((colorArr = [
            Math.random() + 0.2,
            Math.random() + 0.2,
            Math.random() + 0.2
        ]),
        (count = 0));

        for (var i = 0, len = touches.length; i < len; i++) {
        if (i >= pointers.length) pointers.push(new pointerPrototype());

        pointers[i].id = touches[i].identifier;
        pointers[i].down = true;
        pointers[i].x = touches[i].pageX;
        pointers[i].y = touches[i].pageY;
        pointers[i].color = colorArr;

        var pointer = pointers[i];

        pointer.moved = pointer.down;
        pointer.dx = (touches[i].pageX - pointer.x) * 10.0;
        pointer.dy = (touches[i].pageY - pointer.y) * 10.0;
        pointer.x = touches[i].pageX;
        pointer.y = touches[i].pageY;
        }
    },
    false
    );

  function m(t) {
    for (
      var e,
        n = document.getElementById(t),
        i = n.innerHTML.replace("&amp;", "&").split(""),
        a = "",
        o = 0,
        s = i.length;
      s > o;
      o++
    ) {
      e = i[o].replace("&", "&amp");
      a += e.trim()
        ? '<span class="letter-' + o + '">' + e + "</span>"
        : "&nbsp;";
    }

    n.innerHTML = a;

    setTimeout(function() {
      n.className = "transition-in";
    }, 500 * Math.random() + 500);
  }

  window.onload = function() {
    m("h1");
  };

</script>

</body>
</html>
<?php /**PATH C:\xampp\htdocs\Asjad\resources\views/layouts/website/master.blade.php ENDPATH**/ ?>