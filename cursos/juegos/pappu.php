  <div class="container">

    <!-- Start Screen -->
    <div id="start_screen">
      <h1 id="title">pappu pakia</h1>
      <h3 id="credits">
        by
        <a href="#">Kushagra</a>
        and
        <a href="#">Rishabh</a>
      </h3>
      <h3 id="last_score"></h3>
      <h3 id="high_score"></h3>

      <div class="controls"></div>

      <div class="options">
        <ul>
          <li><a href="javascript:void(0);" id="start_game">start</a></li>
          <li><a href="javascript:void(0);" target="_blank" id="tweet">T</a></li>
          <li><a href="javascript:void(0);" target="_blank" id="fb">F</a></li>
        </ul>
      </div>
    </div>
    <!-- /Start Screen -->
  
    <!-- Loading sounds -->
    <audio id="start" loop>
      <source src="https://dl.dropbox.com/u/26141789/pappu-pakia/pappu-pakia2.3.ogg"  type="audio/ogg">
      <source src="https://dl.dropbox.com/u/26141789/pappu-pakia/pappu-pakia2.3.mp3"  type="audio/mp3">
    </audio>
    
    <audio id="angry_jump">
      <source src="https://dl.dropbox.com/u/26141789/pappu-pakia/jump1.ogg" type="audio/ogg">
      <source src="https://dl.dropbox.com/u/26141789/pappu-pakia/jump1.mp3">
    </audio>
    
    <audio id="sad_jump">
      <source src="https://dl.dropbox.com/u/26141789/pappu-pakia/jump2.ogg" type="audio/ogg">
      <source src="https://dl.dropbox.com/u/26141789/pappu-pakia/jump2.mp3" type="audio/mp3">
    </audio>
    
    <audio id="happy_jump">
      <source src="https://dl.dropbox.com/u/26141789/pappu-pakia/jump3.ogg" type="audio/ogg">
      <source src="https://dl.dropbox.com/u/26141789/pappu-pakia/jump3.mp3" type="audio/mp3">
    </audio>
    
    <audio id="flap">
      <source src="https://dl.dropbox.com/u/26141789/pappu-pakia/flap.ogg">
      <source src="https://dl.dropbox.com/u/26141789/pappu-pakia/flap.mp3" type="audio/mp3">
    </audio>
    
    <audio id="ting">
      <source src="https://dl.dropbox.com/u/26141789/pappu-pakia/ting.ogg" type="audio/ogg">
      <source src="https://dl.dropbox.com/u/26141789/pappu-pakia/ting.mp3" type="audio/mp3">
    </audio>

    <canvas id="game_bg"></canvas>
    <canvas id="game_main"></canvas>

    <div id="score_board">0</div>

    <div id="invincible_timer">
      <div id="invincible_loader"></div>
    </div>

    <a href="javascript:void(0)" id="mute"></a>
    
    <!-- Loading Screen -->
    <div id="loading">
      <p id="loadText">Loading...</p>
      <div id="barCont">
        <div id="bar"></div>
      </div>
    </div>

  </div>

  <div id="fps_count"></div>

  <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
  <script>window.mit = window.mit || {};</script>


  <style type="text/css">
@import url(http://fonts.googleapis.com/css?family=Open+Sans);

* {
  margin: 0; padding: 0;
  -moz-box-sizing: border-box;
  box-sizing: border-box;
}

/* Loading */
#loading {
  width: 100%;
  height: 100%;
  position: absolute;
  top: 0;
  left: 0;
  background: #FF6767;
  z-index: 10;
}

#loading #barCont {
  width: 400px;
  height: 20px;
  position: absolute;
  top: 50%;
  left: 50%;
  margin: -10px 0 0 -200px;
  background: black;
}

#loading #bar {
  width: 0;
  height: 20px;
  position: absolute;
  left: 0;
  background: #F3FF67;
}

html, body {
  width: 100%; height: 100%;
  min-width: 1050px;
  min-height: 600px;
}

body {
  background: #000 url(http://i.imgur.com/XgUk6.jpg) top center no-repeat fixed;
  font-family: 'Open Sans', Verdana;
}

h1, #loadText {
  text-align: center;
  color: #fff;
  margin-top: 20px;
  font-family: 'Happy Sans', cursive;
}

#loadText {
  line-height: 380px;
  font-size: 30px;
}

#fps_count {
  position: absolute;
  top: 10px;
  right: 10px;
  font-size: 20px;
  color: white;
  font-family: 'Happy Sans', cursive;
}

.gads {
  text-align: center;
  max-width: 1000px;
  margin: 20px auto;
}

#mute {
  width: 49px;
  height: 40px;
  background: url(http://i.imgur.com/uO2ST.png) no-repeat;
  display: block;
  text-decoration: none;
  outline: none;
  position: absolute;
  top: 15px;
  right: 15px;
  z-index: 15;
  background-position: 0 0;
}

.container {
  position: relative;
  margin: 20px auto 50px;
  width: auto;
  max-width: 1000px;
  height: 500px;
}

footer {
  margin: 20px auto;
  padding: 0 0 20px;
  max-width: 1000px;
}
footer h3 {
  color: #E7E7E7;
  margin-top: 30px;
  font-size: 18px;
  margin-bottom: 10px;
}
footer p {
  margin-bottom: 10px;
  font-size: 13px;
  font-weight: normal;
  color: #D1D1D1;
}
footer a {
  text-decoration: none;
  color: #FF6767;
}
footer a:visited {
  color: #7FFF67;
}
footer a:hover {
  color: #67DBFF;
}
footer a:active {
  color: #F3FF67;
}
footer a:focus {
  color: #FF67ED;
}


canvas#game_main {
  display: block;
  margin: 0 auto;
  position: absolute;
}
canvas#game_bg {
  display: block;
  margin: 0 auto;
  position: absolute;
}


/* Score Board */
#score_board {
  position: absolute;
  top: 0; left: 0; right: 0;
  padding: 10px;
  height: 10%;
  text-align: left;
  font-size: 30px;
  font-weight: normal;
  font-family: 'Happy Sans', cursive;

  -webkit-user-select: none;
  -moz-user-select: none;
  -o-user-select: none;
  user-select: none;
}

#invincible_timer {
  width: 150px;
  height: 10px;
  position: absolute;
  top: 20px;
  left: 50%;
  border: 1px solid #fff;
  margin-left: -75px;
  display: none;
}
#invincible_loader {
  width: 100%; height: 100%;
  background: #FDCF7D;
}


/* Start Screen */
#start_screen {
  position: absolute;
  top: 0;
  left: 0;
  height: 100%;
  z-index: 1;
  width: 100%;

  -webkit-user-select: none;
  -moz-user-select: none;
  -o-user-select: none;
  user-select: none;
}

#title {
  font-size: 67px;
  line-height: 100px;
  font-weight: normal;
  color: #945430;
  text-align: center;
  margin: 0;
  padding: 0;
  text-shadow: 3px 3px 0px white;
}

#credits, #high_score, #last_score {
  font: 36px 'Happy Sans', cursive;
  color: white;
  padding: 0;
  text-align: center;
  margin: -10px 0 10px;
}

#credits a {
  color: #FFEEAA;
  text-decoration: none;
}

.options {
  height: 400px;
  background-image: url(http://i.imgur.com/UpZJE.png);
  background-position: bottom center;
  width: 225px;
  background-repeat: no-repeat;
  position: absolute;
  bottom: 0;
  right: 50px;
}

.options:before {
  content: '';
  background-image: url(http://i.imgur.com/vcF0r.png);
  background-repeat: no-repeat;
  position: absolute;
  width: 47px;
  height: 49px;
  bottom: -1px;
  left: 50%;
  margin-left: -27px;
  z-index: -1;
}

.options ul {
  margin: 0;
  padding: 50px 0 0;
  list-style: none;
}

.options ul li {
  display: block;
  font: 40px 'Happy Sans', cursive;
  text-align: center;
  margin: 0 0 20px;
}

.options ul li a {
  color: #FFEEAA;
  text-decoration: none;
}

.options ul li:first-child {
  background: url(http://i.imgur.com/ou5JQ.png) no-repeat top center;
  height: 70px;
  line-height: 70px;
}

.options ul li:nth-child(2) {
  background: url(http://i.imgur.com/uq5EF.png) no-repeat top center;
  height: 63px;
  line-height: 63px;
}

.options ul li:last-child {
  background: url(http://i.imgur.com/hRoDZ.png) no-repeat top center;
  height: 75px;
  line-height: 75px;
}

.controls {
  width: 200px;
  height: 48px;
  background: url(http://i.imgur.com/Vmq49.png) no-repeat top center;
  margin: 10px auto;
  position: absolute;
  top: 60%; left: 50%;
  margin-top: -24px; margin-left: -100px;
}

/* Share Buttons */
#share_btns {
  max-width: 440px;
  overflow: hidden;
  margin: 0 auto;
}

.share-button {
  float: left;
  margin-right: 10px;
}

#disqus_thread {
  max-width: 1000px;
  margin: 0 auto;
}

#disqus_thread a {
  color: red;
}

div.comments-button a, div.chrome-button  a{
  background-color: #52a8e8;
  background-image: -webkit-linear-gradient(top, #52a8e8, #377ad0);
  background-image: -moz-linear-gradient(top, #52a8e8, #377ad0);
  background-image: -ms-linear-gradient(top, #52a8e8, #377ad0);
  background-image: -o-linear-gradient(top, #52a8e8, #377ad0);
  background-image: linear-gradient(top, #52a8e8, #377ad0);
  color: #fff;
  font: normal 11px "open sans", sans-serif;
  line-height: 1;
  padding: 3px 5px;
  text-align: center;
  text-decoration: none;
  width: 112px;
  border-radius: 3px;
}

div.comments-button a:hover {
    background-color: #3e9ee5;
    background-image: -webkit-gradient(linear, left top, left bottom, color-stop(0%, #3e9ee5), color-stop(100%, #206bcb));
    background-image: -webkit-linear-gradient(top, #3e9ee5 0%, #206bcb 100%);
    background-image: -moz-linear-gradient(top, #3e9ee5 0%, #206bcb 100%);
    background-image: -ms-linear-gradient(top, #3e9ee5 0%, #206bcb 100%);
    background-image: -o-linear-gradient(top, #3e9ee5 0%, #206bcb 100%);
    background-image: linear-gradient(top, #3e9ee5 0%, #206bcb 100%);
}

div.chrome-button {
  float: none;
  display: block;
  margin: 0 auto;
  width: 200px;
}

div.chrome-button a {
  width: 200px;
  display: block;
  margin: 20px auto;
  font-size: 13px;
  padding: 10px;
  background-image: -webkit-linear-gradient(top, #5587da, #4d7cd6);
  background-image: -moz-linear-gradient(top, #5587da, #4d7cd6);
  background-image: -ms-linear-gradient(top, #5587da, #4d7cd6);
  background-image: -o-linear-gradient(top, #5587da, #4d7cd6);
  background-image: linear-gradient(top, #5587da, #4d7cd6);
  box-shadow: inset 0px 2px 0px rgba(255, 255, 255, 0.4);
}
  </style>

  <script type="text/javascript">
(function() {

  window.utils = window.utils || {};

  /*
  Random Number Generator.
  
  Pretty awesome explanation here:
  http://stackoverflow.com/a/1527820
  */
  utils.randomNumber = function(min, max) {
    return Math.floor(Math.random() * (max - min + 1)) + min;
  };

  utils.isInt = function(number) {
    return parseFloat(number) === parseInt(number);
  };

  utils.toRadian = function(degree) {
    return (degree * Math.PI/180);
  };

  utils.toDegree = function(radian) {
    return (radian * 180/Math.PI);
  };

  utils.intersect = function(bounds1, bounds2) {

    return !(
      bounds1.end_x < bounds2.start_x ||
      bounds2.end_x < bounds1.start_x ||
      bounds1.end_y < bounds2.start_y ||
      bounds2.end_y < bounds1.start_y
    );
    
  };

}());(function() {

  mit.Backgrounds = {

    // Speeds and Velocities of Backgrounds
    common_bg_speed: 1,

    cloud_bg_move_speed: 0,
    cloud_bg_vx: 0,

    backtree_bg_move_speed: 0,
    backtree_bg_vx: 0,

    fronttree_bg_move_speed: 0,
    fronttree_bg_vx: 0,

    ground_bg_move_speed: 0,
    ground_bg_vx: 0,

    combined_bg_move_speed: 0,
    combined_bg_vx: 0,

    log_x: 40,
    log_y: 0,

    sky_gradient: {},

    first_speed_inc: 0,
    second_speed_inc: 0,
    third_speed_inc: 0,

    init: function(ctx) {
      // Sky Gradient
      this.sky_gradient = ctx.createLinearGradient(0, 0, 0, mit.H);  
      this.sky_gradient.addColorStop(0, '#06c4f4');
      this.sky_gradient.addColorStop(1, '#7bd4f6');


      // Clouds
      // this.cloud_img = new Image();
      // this.cloud_img.src = 'img/clouds.png';
      this.cloud_img = mit.image.clouds;

      this.cloud_img.width = mit.W;
      this.cloud_img.height = mit.H;


      // Back Trees
      // this.backtree_img = new Image();
      // this.backtree_img.src = 'img/back_trees.png';
      this.backtree_img = mit.image.backtrees;

      this.backtree_img.width = mit.W;
      this.backtree_img.height = mit.H;


      // Front Trees
      // this.fronttree_img = new Image();
      // this.fronttree_img.src = 'img/front_trees.png';
      this.fronttree_img = mit.image.fronttrees;

      this.fronttree_img.width = mit.W;
      this.fronttree_img.height = mit.H;


      // Ground
      // this.ground_img = new Image();
      // this.ground_img.src = 'img/ground.png';
      this.ground_img = mit.image.ground;

      this.ground_img.width = mit.W;
      this.ground_img.height = mit.H;


      // Grass
      // this.grass_img = new Image();
      // this.grass_img.src = 'img/grass.png';
      this.grass_img = mit.image.grass;

      this.grass_img.width = mit.W;
      this.grass_img.height = mit.H;


      // Log on which pappu sits
      // this.log_img = new Image();
      // this.log_img.src = 'img/log.png';
      this.log_img = mit.image.log;


      // Combined BG Image
      // this.combined_bg_img = new Image();
      // this.combined_bg_img.src = 'img/bg_combined.png';
      this.combined_bg_img = mit.image.bg_combined;

      // Reset all speed
      this.resetAllSpeed();
    },

    resetAllSpeed: function() {
        this.cloud_bg_move_speed = 2;
        this.backtree_bg_move_speed = 3;
        this.fronttree_bg_move_speed = 5;
        this.ground_bg_move_speed = 7;
        
        this.combined_bg_move_speed = 3;
    },

    drawClouds: function(ctx) {
      var cloud_bg_vx_abs = Math.abs(this.cloud_bg_vx);

      // fixing weird indexSizeError bugs for the most nonsensical browsers - opera and IE
      try {
        ctx.drawImage(
          this.cloud_img,

          cloud_bg_vx_abs,
          0,
          mit.W + this.cloud_bg_vx,
          mit.H,

          0, 0,
          mit.W + this.cloud_bg_vx,
          mit.H
        );

        ctx.drawImage(
          this.cloud_img,

          0, 0,
          cloud_bg_vx_abs,
          mit.H,

          mit.W + this.cloud_bg_vx,
          0,
          cloud_bg_vx_abs,
          mit.H
        );
      }
      catch(e) {}
      this.cloud_bg_vx -= this.cloud_bg_move_speed;

      if (-this.cloud_bg_vx >= mit.W) {
        this.cloud_bg_vx = 0;
      }

      return;
    },

    drawBackTrees: function(ctx) {
      var backtree_bg_vx_abs = Math.abs(this.backtree_bg_vx);

      // fixing weird indexSizeError bugs for the most nonsensical browsers - opera and IE
      try {
        ctx.drawImage(
          this.backtree_img,

          backtree_bg_vx_abs,
          0,
          mit.W + this.backtree_bg_vx,
          mit.H,

          0, 0,
          mit.W + this.backtree_bg_vx,
          mit.H
        );

        ctx.drawImage(
          this.backtree_img,

          0, 0,
          backtree_bg_vx_abs,
          mit.H,

          mit.W + this.backtree_bg_vx,
          0,
          backtree_bg_vx_abs,
          mit.H
        );
      }
      catch(e) {}

      if (mit.game_started)
        this.backtree_bg_vx -= this.backtree_bg_move_speed * this.common_bg_speed;

      if (-this.backtree_bg_vx >= mit.W) {
        this.backtree_bg_vx = 0;
      }

      return;
    },

    drawFrontTrees: function(ctx) {
      var fronttree_bg_vx_abs = Math.abs(this.fronttree_bg_vx);
 
      // fixing weird indexSizeError bugs for the most nonsensical browsers - opera and IE
      try {
        ctx.drawImage(
          this.fronttree_img,

          fronttree_bg_vx_abs,
          0,
          mit.W + this.fronttree_bg_vx,
          mit.H,

          0, 0,
          mit.W + this.fronttree_bg_vx,
          mit.H
        );

        ctx.drawImage(
          this.fronttree_img,

          0, 0,
          fronttree_bg_vx_abs,
          mit.H,

          mit.W + this.fronttree_bg_vx,
          0,
          fronttree_bg_vx_abs,
          mit.H
        );
      }
      catch(e) {}
      if (mit.game_started)
        this.fronttree_bg_vx -= this.fronttree_bg_move_speed * this.common_bg_speed;

      if (-this.fronttree_bg_vx >= mit.W) {
        this.fronttree_bg_vx = 0;
      }

      return;
    },

    drawGround: function(ctx) {
      var ground_bg_vx_abs = Math.abs(this.ground_bg_vx);
      // fixing weird indexSizeError bugs for the most nonsensical browsers - opera and IE
      try {
        ctx.drawImage(
          this.ground_img,

          ground_bg_vx_abs,
          0,
          mit.W + this.ground_bg_vx,
          mit.H,

          0, 0,
          mit.W + this.ground_bg_vx,
          mit.H
        );

        ctx.drawImage(
          this.ground_img,

          0, 0,
          ground_bg_vx_abs,
          mit.H,

          mit.W + this.ground_bg_vx,
          0,
          ground_bg_vx_abs,
          mit.H
        );
      }
      catch(e) {}

      if (mit.game_started)
        this.ground_bg_vx -= this.ground_bg_move_speed * this.common_bg_speed;

      if (-this.ground_bg_vx >= mit.W) {
        this.ground_bg_vx = 0;
      }

      // console.log(-this.ground_bg_vx);

      return;
    },

    drawGrass: function(ctx) {
      var grass_bg_vx_abs = Math.abs(this.grass_bg_vx);
      // fixing weird indexSizeError bugs for the most nonsensical browsers - opera and IE
      try {
        ctx.drawImage(
          this.grass_img,

          grass_bg_vx_abs,
          0,
          mit.W + this.grass_bg_vx,
          mit.H,

          0, 0,
          mit.W + this.grass_bg_vx,
          mit.H
        );

        ctx.drawImage(
          this.grass_img,

          0, 0,
          grass_bg_vx_abs,
          mit.H,

          mit.W + this.grass_bg_vx,
          0,
          grass_bg_vx_abs,
          mit.H
        );
      }
      catch(e) {}

      if (mit.game_started)
        this.grass_bg_vx -= this.grass_bg_move_speed * this.common_bg_speed;

      if (-this.grass_bg_vx >= mit.W) {
        this.grass_bg_vx = 0;
      }

      return;
    },

    drawInitLog: function(ctx) {

      this.log_y = mit.H-(this.log_img.height+45);

      ctx.drawImage(this.log_img, this.log_x, this.log_y);

      if (mit.game_started) {
        this.log_x -= this.ground_bg_move_speed * this.common_bg_speed;
      }
    },

    drawCombinedBG: function(ctx) {
      var combined_bg_vx_abs = Math.abs(this.combined_bg_vx);
      // fixing weird indexSizeError bugs for the most nonsensical browsers - opera and IE
      try {
        ctx.drawImage(
          this.combined_bg_img,

          combined_bg_vx_abs,
          0,
          mit.W + this.combined_bg_vx,
          mit.H,

          0, 0,
          mit.W + this.combined_bg_vx,
          mit.H
        );

        ctx.drawImage(
          this.combined_bg_img,

          0, 0,
          combined_bg_vx_abs,
          mit.H,

          mit.W + this.combined_bg_vx,
          0,
          combined_bg_vx_abs,
          mit.H
        );
      }
      catch(e) {}

      if (mit.game_started)
        this.combined_bg_vx -= this.combined_bg_move_speed * this.common_bg_speed;

      if (-this.combined_bg_vx >= mit.W) {
        this.combined_bg_vx = 0;
      }
    },

    // Draw Awesome Backgrounds
    // Backgrounds have been made for 1000x500 dimensions
    draw: function(ctx) {

      if (mit.start_btn_clicked) {
        if (!this.fps || this.fps === 5000)
          this.fps = mit.fps;
      }
      else {
        this.fps = 5000;
      }


      if (this.fps > 56) {

        // Draw Linear Gradient for real/pure BG (sky/water)
        ctx.save();
        ctx.fillStyle = this.sky_gradient;
        ctx.fillRect(0, 0, mit.W, mit.H);
        ctx.restore();

        // Clouds
        this.drawClouds(ctx);
        
        // Back Small Trees
        this.drawBackTrees(ctx);

        // Front Big Trees
        this.drawFrontTrees(ctx);
      }
      else {
        this.drawCombinedBG(ctx);
      }

      // Drawing the initial wood log on which
      // Pappu gonna sit and bask in the cool and cozy
      // environment.
      if (this.log_x+100 > 0) {
        this.drawInitLog(ctx);
      }
      else if (!mit.game_started) {
        this.log_x = 40;
      }

      // Draw Ground now!
      this.drawGround(ctx);


      // Increasing speed based on points
      if (mit.score > 200 && !this.first_speed_inc) {
        this.cloud_bg_move_speed++;
        this.backtree_bg_move_speed++;
        this.fronttree_bg_move_speed++;
        this.ground_bg_move_speed++;
        this.combined_bg_move_speed++;

        this.first_speed_inc = 1;
      }

      if (mit.score > 1000 && !this.second_speed_inc) {
        this.cloud_bg_move_speed++;
        this.backtree_bg_move_speed++;
        this.fronttree_bg_move_speed++;
        this.ground_bg_move_speed++;
        this.combined_bg_move_speed++;

        this.second_speed_inc = 1;
      }

      if (mit.score > 3000 && !this.third_speed_inc) {
        this.cloud_bg_move_speed++;
        this.backtree_bg_move_speed++;
        this.fronttree_bg_move_speed++;
        this.ground_bg_move_speed++;
        this.combined_bg_move_speed++;

        this.third_speed_inc = 1;
      }

    }

  };

}());(function() {

  // The Fork Class
  // We'll have lots of forks.
  // Each fork will be on object of this
  // constructor.

  mit.Fork = function() {
    // Handle x/y
    this.x = 0;
    this.y = 0;

    // W/H
    this.w = 0;
    this.h = 0;


    // Head x/y
    this.head_x = 0;
    this.head_y = 0;

    // Head W/H
    this.head_w = 0;
    this.head_h = 0;

    // Edge on which the fork will stand on
    this.edge = 'btm';

    // Get Handle Bounds
    this.getHandleBounds =  function() {
      var b = {};

      b.start_x = this.x;
      b.start_y = this.y;
      b.end_x   = this.x + this.w;
      b.end_y   = this.y + this.h;

      //console.log(bounds);
      return b;
    };

    // Get Head Bounds
    this.getHeadBounds = function() {
      var b = {};

      b.start_x = this.head_x;
      b.start_y = this.head_y;
      b.end_x   = this.head_x + this.head_w;
      b.end_y   = this.head_y + this.head_h;

      return b;
    };
  };

  
  // A ForkUtils class to help save the world

  mit.ForkUtils = {

    // Master array of all existing forks in memory
    forks: [],
    // Forks can be placed on top/bottom edges
    edges: ['top', 'btm'],

    // Images for fork handle, fork head and the digged part
    fork_img: {},
    fork_head_img: {},
    dig_img: {},

    // How many forks to have in memory ?
    count: 6,

    init: function() {
      // Loading Images

      // Fork handle
      // this.fork_img = new Image();
      // this.fork_img.src = 'img/fork_handle.png';
      this.fork_img = mit.image.fork_handle;

      // Fork Head
      // this.fork_head_img = new Image();
      // this.fork_head_img.src = 'img/fork_head.png';
      this.fork_head_img = mit.image.fork_head;

      // Dig Image
      // this.dig_img = new Image();
      // this.dig_img.src = 'img/dig.png';
    },

    /*
      How do we go about positioning forks exactly ?

      - Forks can appear on top or bottom edge.
      - Forks should vary in sizes, but should be
        mostly long to produce a harder gameplay.
      - Forks should appear at random distance.
        But there needs to be a range (or capping).
      - Every fork object should know what edge it
        is put on. This will help us calculate the
        exact height based on entire canvas
        height/width.
        This means, we only need the x/y position
        along with the edge, to put on the fork.
    */

    /*
      This method will generate a random x/y
      position for the forks to start at.

      Based on the `fork.edge` we can draw
      the fork easily on the canvas edges.
    */

    getRandomForkPos: function() {
      // We have access to `forks` here
      var pos = {};

      if (this.forks[this.forks.length-1]) {
        pos.x = this.forks[this.forks.length-1].x;

        if (mit.score > 2500)
          pos.x += utils.randomNumber(300,600);
        else
          pos.x += utils.randomNumber(500,800);
      }
      else {
        pos.x = mit.W/1000 * 1050;
      }

      var branches = mit.BranchUtils.branches;
      /*var last_branch = [branches.length-1];

      if (last_branch) {
        if (Math.abs(pos.x - last_branch.x) < 300)
          pos.x = last_branch.x + 300;
      }*/

      if (branches.length) {
        branches.forEach(function(branch) {
          if (Math.abs(pos.x - branch.x) < 500)
            pos.x = branch.x + 500;
        });
      }

      return pos;
    },

    create: function() {
      var fork_img = this.fork_img,
          dig_img = this.dig_img,
          fork_head_img = this.fork_head_img,
          forks = this.forks,
          count = this.count;

      if (forks.length < count) {
        
        for (var i = 0; i < count - forks.length; i++) {
          var fork = new mit.Fork();

          // Setting a Random Edge
          fork.edge = this.edges[utils.randomNumber(0,1)];

          // Setting the Dig Position
          if (fork.edge === 'btm') {
            var dig_rand = utils.randomNumber(3,5);

            fork.dig_x = dig_img.width / dig_rand;
            fork.dig_y = mit.H - dig_img.height;
            // console.log(this.dig_img.width);

            fork.y = 200 + utils.randomNumber(0,100);
            fork.y += fork_head_img.height;
          }

          if (fork.edge === 'top') {
            fork.y = 0 - utils.randomNumber(0,100);
            fork.y -= fork_head_img.height;
          }

          var pos = this.getRandomForkPos();
          fork.x = pos.x;

          // Height and Width
          fork.w = fork_img.width;
          fork.h = fork_img.height;

          forks.push(fork);
        }
        
      }
    },

    draw: function(ctx) {
      var fork_img = this.fork_img,
          dig_img = this.dig_img,
          fork_head_img = this.fork_head_img,
          forks = this.forks,
          dead_forks = 0;

      this.create();
      
      // Loop over forks and draw each of them
      forks.forEach(function(fork, index) {

        fork.x -= mit.Backgrounds.ground_bg_move_speed;

        if (fork.x + fork.w < 0) {
          ++dead_forks;
          return;
        }

        // Out of view port, no need to draw
        if (fork.x > mit.W) {
          // console.log('out of view port');
          return;
        }

        if (fork.edge === 'top') {
          // ctx.lineTo(fork.x, 0);

          // Top forks need flippin
          ctx.save();
          ctx.translate(fork.x, fork.y);
          ctx.translate(~~(fork_img.width/2), ~~(fork_img.height/2));
          ctx.rotate( utils.toRadian(180) );
          ctx.drawImage(fork_img, -~~(fork_img.width/2), -~~(fork_img.height/2));
          ctx.restore();


          fork.head_x = fork.x-~~(fork_head_img.width/8);
          fork.head_y = fork.y+fork_img.height;

          fork.head_w = fork_head_img.width;
          fork.head_h = fork_head_img.height;

          // Draw Fork Head
          ctx.save();
          ctx.translate(fork.head_x, fork.head_y);
          ctx.translate(~~(fork_head_img.width/2), ~~(fork_head_img.height/2));
          ctx.rotate( utils.toRadian(180) );
          ctx.drawImage(fork_head_img, -~~(fork_head_img.width/2), -~~(fork_head_img.height/2));
          ctx.restore();
        }
        else if (fork.edge === 'btm') {

          ctx.drawImage(fork_img, fork.x, fork.y);

          fork.head_x = fork.x-~~(fork_head_img.width/5);
          fork.head_y = fork.y-fork_head_img.height;

          fork.head_w = fork_head_img.width;
          fork.head_h = fork_head_img.height;

          // Draw Fork Head
          ctx.save();
          ctx.translate(fork.head_x, fork.head_y);
          ctx.translate(1* ~~(fork_head_img.width/2), 1* ~~(fork_head_img.height/2));
          ctx.scale(-1,1);
          ctx.drawImage(
            fork_head_img,
            1* -~~(fork_head_img.width/2),
            1* -~~(fork_head_img.height/2)
          );
          ctx.restore();
        }

      });

      if (dead_forks) {
        forks.splice(0, dead_forks);
      }

      return;
    },

    // Forks have black digs in grounds
    // This function will draw those
    drawDigs: function(ctx) {
      // Loop over forks and draw digs for each of them
      var dig_img = this.dig_img;

      this.forks.forEach(function(fork, index) {

        if (fork.edge === 'btm') {
          ctx.drawImage(dig_img, fork.x - fork.dig_x, fork.dig_y);
        }

      });
    },

    // Check Fork Collision
    checkCollision: function() {
      var first_fork = this.forks[0];

      // Useless optimization
      if (first_fork.x > mit.W/2)
        return;

      // Get Pappu Bounds
      var pappu_bounds = mit.Pappu.getBounds(),
          // Get Nearest Fork's Handle's Bounds
          fork_bounds = first_fork.getHandleBounds();
      
      // Check whether pappu collided with the
      // fork handle or not.
      if (utils.intersect(pappu_bounds, fork_bounds)) {
        // console.log(pappu_bounds, fork_bounds);
        mit.gameOver();
      }

      // We'll have to check for collision with fork heads.
      // If there's a collision pappu will be pushed!
      var fork_head_bounds = first_fork.getHeadBounds();

      // Check whether pappu collided with the
      // fork head or not. With fork heads
      // collision detection checks would be
      // a little casual than super stern.

      // if (utils.intersect(pappu_bounds, fork_head_bounds)) {

      if (
        pappu_bounds.end_x      >  fork_head_bounds.start_x+20 &&
        fork_head_bounds.end_x-20  >  pappu_bounds.start_x &&
        pappu_bounds.end_y      >  fork_head_bounds.start_y+20 &&
        fork_head_bounds.end_y-20  >  pappu_bounds.start_y
      ) {
        mit.gameOver();
      }
    }

  };

}());(function() {

  // We're having lots of forks to
  // make gameplay a little harder
  // and incorporate ggo's required concepts.

  // But we'll also try to incorporate
  // 'branching' by adding some branches
  // at random spots. So let the forks
  // come, but sometimes there wont be forks,
  // but a single branch (from top to bottom).
  // 
  // The branches are gonna have a little hole
  // in between or some other random position
  // through which pappu will need to pass.
  // 
  // If it collides at some part other than
  // the hole, he'll decease.

  mit.Branch = function() {
    this.x = 0;
    this.y = 0;

    // Width
    this.w;
    // Height
    this.h;

    this.escape_x;
    this.escape_y;
    this.escape_w;
    this.escape_h;

    this.getBounds = function() {
      var b = {};

      b.start_x = this.x;
      b.start_y = this.y;
      b.end_x   = this.x + this.w;
      b.end_y   = this.y + this.h;

      return b;
    };

    this.getEscapeBounds = function() {
      var b = {};

      b.start_x = this.escape_x;
      b.start_y = this.escape_y;
      b.end_x   = this.escape_x + this.escape_w;
      b.end_y   = this.escape_y + this.escape_h;

      return b;
    };
  };


  mit.BranchUtils = {

    branch_img: {},

    branches: [],
    count: 4,

    init: function() {
      // Load Images
      // this.branch_img = new Image();
      // this.branch_img.src = 'img/branch.png';

      this.branch_img = mit.image.branch;
    },

    /*
      This method will generate a random x/y
      position for the forks to start at.

      Based on the `fork.edge` we can draw
      the fork easily on the canvas edges.
    */
    getRandomBranchPos: function() {
      // We have access to `branches` here
      var pos = {};

      if (this.branches[this.branches.length-1]) {
        pos.x = this.branches[this.branches.length-1].x;
        pos.x += utils.randomNumber(500, 2000);
      }
      else {
        // First
        pos.x = utils.randomNumber(2000, 2500);
      }

      var forks = mit.ForkUtils.forks;
      /*var last_fork = forks[forks.length-1];
      
      if (last_fork) {

        if (Math.abs(pos.x - last_fork.x) < 300) {
          pos.x = last_fork.x + 300;
        }
      }*/

      if (forks.length) {
        forks.forEach(function(fork) {
          if (Math.abs(pos.x - fork.x) < 500)
            pos.x = fork.x + 500;
        });
      }

      return pos;
    },

    create: function() {
      var branches = this.branches,
          count = this.count;

      if (branches.length < count) {
      
        for (var i = 0; i < count - branches.length; i++) {
          var branch = new mit.Branch();

          var pos = this.getRandomBranchPos();
          branch.x = pos.x;
          branch.y = 0;

          branch.w = this.branch_img.width;
          branch.h = this.branch_img.height;

          // Escape Positions
          branch.escape_x = branch.x;
          branch.escape_y = branch.y + utils.randomNumber(0, branch.h-150);

          // Escape Area's Width/Height
          branch.escape_w = this.branch_img.width;
          branch.escape_h = 150;

          branches.push(branch);
        }
    }
    },

    draw: function(ctx) {
      var branches = this.branches,
          branch_img = this.branch_img,
          dead_branch = 0;

      this.create();

      // console.log(branches);

      // Loop over branches and draw each of them
      branches.forEach(function(branch, index) {

        branch.x -= mit.Backgrounds.ground_bg_move_speed;

        if (branch.x + branch.w < 0) {
          dead_branch++;
          return;
        }

        // Out of view port, no need to draw
        if (branch.x > mit.W)
          return;

        // Escape Positions
        branch.escape_x = branch.x;

        ctx.drawImage(branch_img, branch.x, branch.y);

        // Draw Escapes
        ctx.save();
        ctx.globalCompositeOperation = 'destination-out';
        ctx.fillStyle = 'white';
        ctx.fillRect(
          branch.escape_x,
          branch.escape_y,
          branch.escape_w,
          branch.escape_h
        );
        ctx.restore();
      });

      if (dead_branch) {
        branches.splice(0, dead_branch);
      }

      return;
    },

    // Check collisions with branches
    checkCollision: function() {
      var first_branch = this.branches[0];

      // Useless optimization
      if (first_branch.x > mit.W/2)
        return;

      // Get Pappu Bounds
      var pappu_bounds = mit.Pappu.getBounds(),
          // Get Nearest Branch's Top Part's Bounds
          branch_bounds = first_branch.getBounds();

      if (utils.intersect(pappu_bounds, branch_bounds)) {
        // console.log(pappu_bounds, branch_bounds);

        // If the Escape Area intersects then pappu
        // can escape, else game over matey!
        var escape_bounds = first_branch.getEscapeBounds();

        if (!utils.intersect(pappu_bounds, escape_bounds)) {
          mit.gameOver();
        }

      }

      return;
    }

  };

}());(function() {

  /*
  We'll have some collectibles:

  - Ones that give 50, 100, 500, 1000 points.

  - One to clone pappu that'll kill all
    forks, branches, pakias.

  - One for pappu's invincibility
  */
  
  mit.Collectible = function() {

    // x/y pos
    this.x;
    this.y;

    // width/height
    this.w;
    this.h;

    // Collectible Type - read above
    this.type;

    // Sound
    this.sound = document.getElementById("ting");
    this.sound.volume = 0.35;

    // Some collectible types may have subtypes
    // like coins of 50, 100, 500, 1000 and so on ...
    this.sub_type;

    this.getBounds = function() {
      var b = {};

      b.start_x = this.x;
      b.start_y = this.y;
      b.end_x   = this.x + this.w;
      b.end_y   = this.y + this.h;

      return b;
    };


    this.draw = function(ctx) {
      switch (this.type) {

        case 'coin':
          this.drawCoin(ctx);
          break;

        case 'clone':
          this.drawClone(ctx);
          break;

        case 'invincible':
          this.drawInvincible(ctx);
          break;

      }

      return;
    };

    this.drawCoin = function(ctx) {
      // Get coin color based on sub type
      var pos = mit.CollectibleUtils.getCoinSpritePos(this.sub_type);

      ctx.drawImage(
        mit.CollectibleUtils.coin_img,
        pos.x, pos.y,
        30, 30,
        this.x, this.y,
        30, 30
      );
    };

    this.drawClone = function(ctx) {
      ctx.drawImage(
        mit.CollectibleUtils.clone_img,
        this.x,
        this.y
      );
    };

    this.drawInvincible = function(ctx) {
      ctx.drawImage(
        mit.CollectibleUtils.invincible_img,
        this.x,
        this.y
      );
    };
  };


  mit.CollectibleUtils = {

    collecs: [],

    count: 2,

    types: ['coin', 'clone', 'invincible'],
    //types: ['invincible'],

    sub_types: {
      coin: [50, 100, 500]
    },

    init: function() {
      // this.coin_img = new Image();
      // this.coin_img.src = 'img/coins.png';
      this.coin_img = mit.image.coins;

      // this.clone_img = new Image();
      // this.clone_img.src = 'img/berries.png';
      this.clone_img = mit.image.berries;

      // this.invincible_img = new Image();
      // this.invincible_img.src = 'img/star.png';
      this.invincible_img = mit.image.star;
    },

    getCoinSpritePos: function(sub_type) {

      switch (sub_type) {
        case 50:
          // Yellow (first)
          return {x: 0, y: 0};

        case 100:
          // Pink (second)
          return {x: 30, y: 0};

        case 500:
          // Red (third)
          // Pink (second)
          return {x: 60, y: 0};

        case 1000:
          // Blue (last)
          return {x: 90, y: 0};
      }

    },

    getRandomPos: function() {
      var pos = {};

      var last = this.collecs[this.collecs.length - 1];

      if (last) {
        pos.x = last.x + utils.randomNumber(1000, 1500);
      }
      else {
        pos.x = utils.randomNumber(2000, 3000);
        pos.x = utils.randomNumber(500, 1000);
      }

      pos.y = utils.randomNumber(100, mit.H-100);

      // Check Positioning with forks
      var forks = mit.ForkUtils.forks;

      if (forks.length) {
        forks.forEach(function(fork) {
          if (Math.abs(pos.x - fork.x) < 300)
            pos.x = fork.x + 300;
        });
      }

      // Check Positioning with branches
      var branches = mit.BranchUtils.branches;

      if (branches.length) {
        branches.forEach(function(branch) {
          if (Math.abs(pos.x - branch.x) < 300)
            pos.x = branch.x + 300;
        });
      }

      return pos;
    },

    create: function() {
      var count = this.count - this.collecs.length;
      var collec,
          sub_types,
          pos;

      for (var i = 0; i < count; i++) {
        collec = new mit.Collectible();

        pos = this.getRandomPos();

        collec.x = pos.x;
        collec.y = pos.y;

        collec.w = 30;
        collec.h = 30;

        // Type
        collec.type = this.types[utils.randomNumber(0, this.types.length-1)];

        // Choosing Sub types if any
        sub_types = this.sub_types[collec.type];
        if (sub_types)
          collec.sub_type = sub_types[utils.randomNumber(0, sub_types.length-1)];

        this.collecs.push(collec);
      }
    },

    draw: function(ctx) {

      var self = this;

      self.create();

      self.collecs.forEach(function(collec, i) {
        if (collec.x < 0) {
          // Moved off the left edge
          /*var pos = self.getRandomPos();

          collec.x = pos.x;
          collec.y = pos.y;*/
          self.collecs.splice(i,1);
        }

        collec.x -= mit.Backgrounds.ground_bg_move_speed;

        collec.draw(ctx);
      });

      return;
    },

    checkCollision: function() {
      // First collec
      var collec = this.collecs[0],
          // Get Pappu Bounds
          pappu_bounds = mit.Pappu.getBounds(),
          // Get Nearest Collectible Bounds
          collec_bounds = collec.getBounds();

      if (utils.intersect(pappu_bounds, collec_bounds)) {
        // Pappu haz collected!
        collec.sound.play();
        // Determine type and perform action accordingly
        switch (collec.type) {

          case 'coin':
            mit.score += collec.sub_type;
            break;

          case 'clone':
            mit.Pappu.createClones(3);
            break;

          case 'invincible':
            mit.Pappu.invincible = 1;

            // Kush says we shouldnt add up
            /*if (!mit.Pappu.invincibility_start) {
              mit.Pappu.invincibility_time = 5000;
            }
            else {
              var cur_time = new Date().getTime();
              var prev_remaining_time = cur_time - mit.Pappu.invincibility_start;

              mit.Pappu.invincibility_time = 5000 + prev_remaining_time;
            }*/

            mit.Pappu.invincibility_start = new Date().getTime();
            mit.Pappu.invincibility_time = 5000;

            // Show timer
            mit.ui.invincible_timer.show();

            break;
        }

        // Nuke the collectible
        this.collecs.shift();
      }

      return;
    }

  };

}());(function() {

  // There will be only 1 Pappu

  mit.Pappu = {
    x: 50,
    y: 10,
    w: 50,
    h: 50,

    invincible: 0,
    invincibility_start: 0,
    invincibility_time: 0,
    clones: [],

    rotate_angle: 0,

    sprite: {},
    sound: '',

    // Rate of sprite frame change
    // per animation frame.
    change_per_frame: 10,

    fly_frame_count: 0,
    max_fly_frame_count: 10,

    init: function() {
      this.sound = document.getElementById("flap");

      // Initializing Pappu Sprite, lolzzz..!
      // this.sprite = new Image();
      // this.sprite.src = 'img/pappu.png';
      this.sprite = mit.image.pappu;

      //pappu.w = pappu.sprite.width;
      mit.Pappu.w = mit.Pappu.sprite.width;
      mit.Pappu.h = 60;

      // Sprite Frame Count
      mit.Pappu.max_fly_frame_count = 8;
      mit.Pappu.max_fly_frame_count--;

      // Sprite Frame Change Speed.
      // This will affect the flap speed.
      // 1.6 is the perfect value!
      mit.Pappu.change_per_frame = 1.6;

      // X Pos
      mit.Pappu.x = 33;
    },

    undoInvincible: function() {
      this.invincible = 0;
      this.invincibility_start = 0;
      this.invincible_timer = 0;

      mit.ui.invincible_timer.hide();
    },

    draw: function(ctx) {
      var cur_sprite_frame = this.fly_frame_count / this.change_per_frame;
      
      if (utils.isInt(cur_sprite_frame)) {
        var source_y = cur_sprite_frame * 60;
      }

      else {
        //var old_sprite_frame = parseInt(this.fly_frame_count/this.change_per_frame)%this.change_per_frame;

        // Ultra smooth animations
        var old_sprite_frame = parseInt(this.fly_frame_count/this.change_per_frame)
        var source_y = old_sprite_frame * 60;
      }
      
      // console.log(cur_sprite_frame, source_x);

      // Rotation on Flying
      if (mit.flying_up) {
        this.sound.play();

        if (this.rotate_angle > -15) {
          this.rotate_angle -= 2;
        }
      }
      else if (mit.game_over) {
        // draw() is called as long as
        // pappu hasnt hit boundaries and over'ed the game :P

        // Game Over Gugglu!
        this.rotate_angle += 4;
      }
      else {
        if (this.rotate_angle < 30) {
          this.rotate_angle += 2;
        }
      }

      ctx.save();

      ctx.translate(this.x, this.y);
      ctx.translate(this.w/2, this.h/2);
      ctx.rotate(utils.toRadian(this.rotate_angle));

      if (this.invincible) {
        ctx.globalAlpha = 0.4;

        // Current time
        var cur_time = new Date().getTime();
        var time_diff = cur_time - this.invincibility_start;

        var timer_progress = (time_diff/this.invincibility_time) * 100;

        if (timer_progress > 100)
          this.undoInvincible();
        else
          mit.ui.invincible_loader.css('width', timer_progress + '%');

        // console.log(timer_progress)
      }

      ctx.drawImage(
          this.sprite,
          0,
          source_y,
          this.w,
          60,
          -this.w/2,
          -this.h/2,
          this.w,
          60
        );

      ctx.restore();
    },

    drawStatic: function(ctx) {
      var cur_sprite_frame = this.fly_frame_count / this.change_per_frame;
      
      if (utils.isInt(cur_sprite_frame)) {
        var source_y = cur_sprite_frame * 60;
      }

      else {
        //var old_sprite_frame = parseInt(this.fly_frame_count/this.change_per_frame)%this.change_per_frame;

        // Ultra smooth animations
        var old_sprite_frame = parseInt(this.fly_frame_count/this.change_per_frame)
        var source_y = old_sprite_frame * 60;
      }


      this.y = mit.Backgrounds.log_y-42;

      /*ctx.drawImage(
        this.sprite,
        0,
        0,
        this.w,
        60,
        this.x,
        this.y,
        this.w,
        60
      );*/
      
      ctx.drawImage(
        this.sprite,
        0,
        source_y,
        this.w,
        60,
        this.x,
        this.y,
        this.w,
        60
      );
    },

    updateFlyFrameCount: function(count) {
      if (typeof count !== 'number') {
        this.fly_frame_count++;

        if (parseInt(this.fly_frame_count/this.change_per_frame) > this.max_fly_frame_count) {
          this.fly_frame_count = 0;
        }

        return;
      }

      this.fly_frame_count = count;
    },

    hasReachedBoundary: function(canvas_width, canvas_height) {
      // Crossed Sides ?
      // `c` stands for crossed

      var ctop = (this.y < 0 - this.h);
      var cbtm = (this.y > mit.H);
      var cleft = (this.x < 0);
      var crgt = (this.x > mit.W);

      // return true if crossed any sides
      if (ctop || cbtm || cleft || crgt) {
        return true;
      }

      return false;
    },

    getBounds: function() {
      var b = {};

      b.start_x = this.x;
      b.start_y = this.y;
      b.end_x   = this.x + this.w;
      b.end_y   = this.y + this.h;

      return b;
    },

    createClones: function(count) {
      // This method will be usually called
      // when pappu gathers a 'clone' collectible.

      var pappu_clone;

      for (var i = 0; i < count; i++) {
        pappu_clone = Object.create(mit.Pappu);

        pappu_clone.invincible = 0;

        this.clones.push(pappu_clone);
      }

      return;
    },

    drawClones: function(ctx) {

      var self = this;

      self.clones.forEach(function(clone, index) {
        if (clone.x > mit.W || clone.y < 0 || clone.y > mit.H)
          self.clones.splice(index, 1);

        clone.x += utils.randomNumber(5, 10);
        clone.y += utils.randomNumber(-20, 20);

        clone.draw(ctx);
      });

      return;
    },

    checkCloneCollision: function() {

      var self = this;

      // super optimization :P
      if (!self.clones.length)
        return;
      
      var branches = mit.BranchUtils.branches;
      var forks = mit.ForkUtils.forks;
      var pakias = mit.PakiaUtils.pakias;

      // Check collisions with branches
      branches.forEach(function(branch, branch_index) {
        var branch_bound = branch.getBounds();

        var branch_broke = 0;

        self.clones.forEach(function(clone) {

          if (branch_broke)
            return;

          var clone_bound = clone.getBounds();

          if (utils.intersect(branch_bound, clone_bound)) {
            branches.splice(branch_index, 1);

            branch_broke = 1;
          }
        });

        return;
      });

      // Check collisions with forks
      forks.forEach(function(fork, fork_index) {
        var fork_head_bound = fork.getHeadBounds();
        var fork_handle_bound = fork.getHandleBounds();

        var fork_broke = 0;

        self.clones.forEach(function(clone) {

          if (fork_broke)
            return;

          var clone_bound = clone.getBounds();

          if (
            utils.intersect(fork_head_bound, clone_bound) ||
            utils.intersect(fork_handle_bound, clone_bound)
          ) {

            // 2 pakias could kill same fork
            // hence just check whether it exists or not
            forks.splice(fork_index, 1);

            fork_broke = 1;
          }

          return;
        });

        return;
      });

      // Check collisions with pakias
      pakias.forEach(function(pakia, pakia_index) {
        var pakia_bound = pakia.getBounds();

        var pakia_dead = 0;

        self.clones.forEach(function(clone) {

          if (pakia_dead)
            return;

          var clone_bound = clone.getBounds();

          if (utils.intersect(pakia_bound, clone_bound)) {
            mit.PakiaUtils.cur_pakia = false;

            pakia_dead = 1;
          }

          return;
        });

        return;
      });

      return;
    }
  };

}());(function() {

  mit.Pakia = function() {

    // Default type will be angry
    this.type = 'angry';
    this.sound = document.getElementById("jump1");

    // Cheating on a bit with the physics
    // cant have same gravity for pappu and pakias :(
    this.gravity = 0.3;

    this.x;
    this.y;
    this.w;
    this.h;

    this.draw = function(ctx) {
      ctx.drawImage(mit.PakiaUtils.pakia_img[this.type], this.x, this.y);
    };

    this.generateRandomPos = function() {
      this.x = mit.config.canvas_width/2 + 200;
      this.y = mit.config.canvas_height;
    };

    this.generateRandomVelocity = function() {
      this.vx = -12;
      this.vy = utils.randomNumber(-18,-10);
    };

    this.getBounds = function() {
      var bounds = {};

      bounds.start_x = this.x;
      bounds.start_y = this.y;
      bounds.end_x = this.x + this.w;
      bounds.end_y = this.y + this.h;

      return bounds;
    };
  };


  mit.PakiaUtils = {

    pakias: [],

    // Only 1 pakia at once, to make sure
    // gameplay is not terribly hard
    // as forks and branches have already
    // made it quite hard.
    cur_pakia: false,

    types: [
      'sad', // pulls
      'happy', // pushes
      'angry' // kills
    ],

    // Sounds
    sounds: [
      document.getElementById("angry_jump"),
      document.getElementById("sad_jump"),
      document.getElementById("happy_jump")
    ],      

    pakia_img: {
      sad: {},
      happy: {},
      angry: {}
    },

    init: function() {

      // Loading All Pakia Images

      // this.pakia_img.sad = new Image();
      // this.pakia_img.sad.src = 'img/sad_pakia.png';
      this.pakia_img.sad = mit.image.sad_pakia;

      // this.pakia_img.happy = new Image();
      // this.pakia_img.happy.src = 'img/happy_pakia.png';
      this.pakia_img.happy = mit.image.happy_pakia;

      // this.pakia_img.angry = new Image();
      // this.pakia_img.angry.src = 'img/angry_pakia.png';
      this.pakia_img.angry = mit.image.angry_pakia;
    },

    createPakias: function() {

      for (var i = 0; i < 3; i++) {
        var pakia = new mit.Pakia();
        pakia.w = this.pakia_img.sad.width;
        pakia.h = this.pakia_img.sad.height;

        pakia.generateRandomPos();

        pakia.generateRandomVelocity();

        pakia.type = this.types[i];
        // pakia.type = this.types[0];

        if (pakia.type == 'angry')
          pakia.sound = this.sounds[0];
        else if (pakia.type == 'sad')
          pakia.sound = this.sounds[1];
        else if (pakia.type == 'happy')
          pakia.sound = this.sounds[2];

        this.pakias.push(pakia);
      }

      //console.log(this.pakias);
    },

    reflow: function(ctx) {

      if (!this.cur_pakia) {
        // cur_pakia is one thats currently visible
        // that is, in the air!

        // Object by Reference!
        this.cur_pakia = this.pakias[utils.randomNumber(0,2)];

        this.cur_pakia.generateRandomPos();
        this.cur_pakia.generateRandomVelocity();
      }

      this.cur_pakia.vy += this.cur_pakia.gravity;

      this.cur_pakia.x += this.cur_pakia.vx;
      this.cur_pakia.y += this.cur_pakia.vy;
      // console.log(this.cur_pakia.x)

      // Reset positions
      if (
        this.cur_pakia.x + this.cur_pakia.w < 0 ||
        this.cur_pakia.y > mit.H
        ) {
        this.cur_pakia.generateRandomPos();

        this.cur_pakia.generateRandomVelocity();

        // Important! since JS's game's all about
        // objects by reference.
        if (this.cur_pakia.has_stuck)
          delete this.cur_pakia.has_stuck;

        // wont set the referenced pointer to
        // false, so we're safe :D
        this.cur_pakia = false;
      }
    },

    repaint: function(ctx) {
      if (this.cur_pakia)
        this.cur_pakia.draw(ctx);
    },

    render: function(ctx) {
      if (!this.pakias.length) {
        this.createPakias();
      }

      if (mit.score.toFixed(2) % 20 === 0 || this.cur_pakia) {
        this.reflow(ctx);
        this.repaint(ctx);
      }

      if (mit.score.toFixed(2) % 20 === 0 && this.cur_pakia) {
        this.cur_pakia.sound.play();
      }
    },

    checkCollision: function() {
      if (!this.cur_pakia)
        return;

      var pappu_bounds = mit.Pappu.getBounds();
      var pakia_bounds = this.cur_pakia.getBounds();

      if (
        pappu_bounds.end_x     >  pakia_bounds.start_x+20 &&
        pakia_bounds.end_x-20  >  pappu_bounds.start_x    &&
        pappu_bounds.end_y     >  pakia_bounds.start_y+20 &&
        pakia_bounds.end_y-20  >  pappu_bounds.start_y
      ) {

        // Depending upon the type of the pakia
        switch (this.cur_pakia.type) {
          case 'angry':
            mit.gameOver();
            break;

          case 'sad':
            // Pull

            if (!this.cur_pakia.has_stuck) {
              mit.vy += 20;
              this.cur_pakia.y += 20;
              this.cur_pakia.vx = 0;
            }

            this.cur_pakia.has_stuck = 1;

            break;

          case 'happy':
            // Push

            if (this.cur_pakia.vy < 0)
              mit.vy -= 10;
            else
              mit.vy += 10;

            break;
        }

      }

      return;
    }

  };

}());
mit.main = function() {

  // rAF
  window.requestAnimationFrame = function() {
    return window.requestAnimationFrame ||
      window.webkitRequestAnimationFrame ||
      window.mozRequestAnimationFrame ||
      window.msRequestAnimationFrame ||
      window.oRequestAnimationFrame ||
      function(f) {
        window.setTimeout(f,1e3/60);
      }
  }();

  // cAF
  window.cancelAnimationFrame = function() {
    return window.cancelAnimationFrame ||
      window.webkitCancelAnimationFrame ||
      window.mozCancelAnimationFrame ||
      window.msCancelAnimationFrame ||
      window.oCancelAnimationFrame ||
      function(f) {
        window.setTimeout(f,1e3/60);
      }
  }();

  var config = mit.config = {

  };

  var ui = mit.ui = {
    body: $('body'),
    score_board: $('#score_board'),
    last_score: $('#last_score'),
    high_score: $('#high_score'),
    start_screen: $('#start_screen'),
    start_game: $('#start_game'),
    tweet: $('#tweet'),
    fb: $('#fb'),
    fps_count: $('#fps_count'),
    invincible_timer: $('#invincible_timer'),
    invincible_loader: $('#invincible_loader')
  };

  /*
  Basic Canvas Inits
  */

  // Main Canvas

  var canvas = document.querySelector('#game_main');
  var ctx = canvas.getContext('2d');

  var W = canvas.width = ui.body.width();
  var H = canvas.height = ui.body.height();

  // Width x Height capped to 1000 x 500
  if (canvas.width > 1000) {
    W = canvas.width = 1000;
  }
  if (canvas.height > 500) {
    H = canvas.height = 500;
  }

  // Resizing Width/Height
  if (canvas.height < 500) {
    canvas.width = canvas.height * 1000/500;
  }
  if (canvas.width < 1000) {
    canvas.height = canvas.width * 500/1000;
  }

  // BG Canvas
  var bg_canvas = document.querySelector('#game_bg');
  var bg_ctx = bg_canvas.getContext('2d');

  bg_canvas.width = canvas.width;
  bg_canvas.height = canvas.height;

  var music = document.getElementById("start");
  music.volume = 0.2;
  
  var isMute = false;

  // Mute the game if button is clicked
  $("#mute").click(function() {
    if(isMute == false) {
      $(this).css("backgroundPosition", "0px -40px");
      music.volume = 0;
      isMute = true;
    }

    else {
      $(this).css("backgroundPosition", "0px 0px");
      music.volume = 0.2;
      isMute = false;
    }

    return false;
  });

  /*
    Game Start Screen and Lolz
  */
  mit.game_started = 0;
  mit.game_over = 0;
  mit.start_btn_clicked = 0;

  ui.start_screen.css('width', canvas.width + 'px');
  ui.start_screen.css('height', canvas.height + 'px');

  // Start Button
  var startGame = function() {
    // Play the awesome music! Really awesome
    music.play();
    flap.pause();

    // Hide the Start Screen
    ui.start_screen.fadeOut();

    // Start btn has been clicked
    // Game hasnt started. Game will
    // start on flight.
    mit.start_btn_clicked = 1;
    mit.game_started = 0;

    mit.Backgrounds.common_bg_speed = 1;
    mit.Backgrounds.resetAllSpeed();

    // Reset all accelerations and make
    // pappu stationary
    mit.Pappu.drawStatic(ctx);
    mit.ax = 0; mit.ay = 0;
    mit.vx = 0; mit.vy = 0;

    // if game over due to hitting someone
    // he'll rotate a lot. so need ta reset
    // on restart
    mit.Pappu.rotate_angle = 0;

    // reset score
    mit.score = 0;

    // Nuke all forks
    mit.ForkUtils.forks = [];
    // Nuke all branches
    mit.BranchUtils.branches = [];
    // Nuke all collectibles
    mit.CollectibleUtils.collecs = [];
    // Nuke all pakias and cur_pakia
    mit.PakiaUtils.pakias = [];
    mit.PakiaUtils.cur_pakia = false;
  };

  ui.start_game.on('mousedown', function() {
    startGame();

    return false;
  });



  // startGame();

  // Share links
  var tweet = document.getElementById("tweet");
  tweet.href='http://twitter.com/share?url=http://khele.in/pappu-pakia/&text=I am playing Pappu Pakia, a cute HTML5 game on khele.in!&count=horiztonal&via=_rishabhp&related=solitarydesigns';

  var facebook = document.getElementById("fb");
  facebook.href='http://facebook.com/sharer.php?s=100&p[url]=http://khele.in/pappu-pakia/&p[title]=I am playing Pappu Pakia, a cute HTML5 game on khele.in!';


  // Score Board
  mit.score = 0;
  try {

    mit.highScore = JSON.parse(localStorage.getItem("highScore"));
    if (mit.highScore)
      ui.high_score.text("High Score: "+ mit.highScore);

  } catch (e) {}

  ui.score_board.css('width', canvas.width + 'px');
  ui.score_board.css('height', canvas.height + 'px');


  // Set Canvas Width/Height in Config
  mit.config.canvas_width = mit.W = W;
  mit.config.canvas_height = mit.H = H;

  // Gravity
  mit.gravity = 0.7;

  // Velocity x,y
  mit.vx = 0;
  mit.vy = 0;

  // Velocity cap on either sides of the
  // number system.
  // 
  // You can console.log velocities in drawing methods
  // and from there decide what to set as the cap.
  mit.v_cap = 6.5;

  // Accelaration x,y
  mit.ax = 0;
  mit.ay = 0;

  // Flying up ?
  mit.flying_up = 0;

  mit.ascend = function() {
    if (!mit.start_btn_clicked)
      return;

    if (!mit.game_started) {
      mit.game_started = 1;
      mit.game_over = 0;
    }

    mit.ay = -1.5;
    mit.flying_up = 1;
  };

  mit.descend = function() {
    if (!mit.start_btn_clicked)
      return;

    mit.ay = 0;
    mit.flying_up = 0;
  };

  // Game play on mouse clicks too!
  window.addEventListener('mousedown', function(e) {
    mit.ascend();
  }, false);

  window.addEventListener('mouseup', function(e) {
    mit.descend();
  }, false);


  // Game play on touch too!
  window.addEventListener('touchstart', function(e) {
    mit.ascend();
  }, false);

  window.addEventListener('touchend', function(e) {
    mit.descend();
  }, false);


  // ... and keyzz...
  window.addEventListener('keydown', function(e) {

    if (e.keyCode === 38) {
      mit.ascend();

      e.preventDefault();
    }

    if (e.keyCode === 32 || e.keyCode === 13) {
      startGame();
      
      e.preventDefault();
    }

  }, false);

  window.addEventListener('keyup', function(e) {

    if (e.keyCode === 38) {
      mit.descend();

      e.preventDefault();
    }
  }, false);


  /*
    Performing some game over tasks
  */
  mit.gameOver = function() {
    ui.start_screen.fadeIn();

    // High Score
    if (mit.score > mit.highScore) {
      mit.highScore = parseInt(mit.score);
      localStorage.setItem("highScore", JSON.stringify(parseInt(mit.score)));

      ui.high_score.text("High Score: "+ mit.highScore);
    }

    // Show last_score
    ui.last_score.text("Last Score: " + parseInt(mit.score));


    ui.start_game.html('re-start');
    ui.tweet.html('tweet score');
    ui.fb.html('post on fb');

    mit.descend();

    // Stop background
    mit.Backgrounds.common_bg_speed = 0;
    mit.Backgrounds.ground_bg_move_speed = 0;
    mit.Backgrounds.fps = 0;

    mit.game_over = 1;
    mit.start_btn_clicked = 0;

    // Pappu if invincible will be no morez
    mit.Pappu.undoInvincible();

    // Nuke all clones
    mit.Pappu.clones.length = 0;

    // Share
    var tweet = document.getElementById("tweet");
    tweet.href='# ' +Math.floor(mit.score)+ ' points in Pappu Pakia!&count=horiztonal&via=_rishabhp&related=solitarydesigns';
  
    var facebook = document.getElementById("fb");
    facebook.href='#' +Math.floor(mit.score)+ ' points in the Pappu Pakia!';

  };

  mit.last_time = new Date();
  setInterval(function() {
    mit.ui.fps_count.html(mit.fps.toFixed(0) + ' FPS');
  }, 1000);


  // Initializations
  mit.Backgrounds.init(ctx);
  mit.ForkUtils.init();
  mit.BranchUtils.init();
  mit.CollectibleUtils.init();
  mit.Pappu.init();
  mit.PakiaUtils.init();


  (function renderGame() {
    window.requestAnimationFrame(renderGame);

    // Draw Backgrounds on BG Canvas
    mit.Backgrounds.draw(bg_ctx);

    ctx.clearRect(0, 0, W, H);

    // Draw Digs (holds forks)
    // I am fine without Digs, but Kushagra
    // just WANTS me to do this extra work :/
    // mit.ForkUtils.drawDigs(ctx);

    // Draw Grass on Main Canvas
    // mit.Backgrounds.drawGrass(ctx);

    if (mit.flying_up || !mit.game_started)
      mit.Pappu.updateFlyFrameCount();
    else
      mit.Pappu.updateFlyFrameCount(0);


    // Game over on reaching any boundary
    if (mit.Pappu.hasReachedBoundary(W, H)) {
      if (mit.game_over)
        return;

      // Performing some game over tasks
      mit.gameOver();
      return;
    }

    //mit.ForkUtils.draw(ctx);
    //mit.BranchUtils.draw(ctx);

    //mit.ForkUtils.checkCollision();

    // Send over Pakias (Enemies)
    // mit.PakiaUtils.render(ctx);

    // Collectibles
    // mit.CollectibleUtils.draw(ctx);

    // mit.Pappu.createClones(3);

    if (mit.game_started) {

      // Drawin stuff
      mit.ForkUtils.draw(ctx);
      mit.BranchUtils.draw(ctx);
      mit.CollectibleUtils.draw(ctx);
      mit.Pappu.drawClones(ctx);

      // Check Collisions with pappu
      if (!mit.Pappu.invincible) {
        mit.ForkUtils.checkCollision();
        mit.BranchUtils.checkCollision();
        mit.PakiaUtils.checkCollision();
      }
      mit.CollectibleUtils.checkCollision();
      mit.Pappu.checkCloneCollision();

      // Send over Pakias (Enemies)
      if (mit.score > 199)
        mit.PakiaUtils.render(ctx);

      // Update score
      if (!mit.game_over) {
        mit.score = mit.score += 0.1;
        ui.score_board.text(parseInt(mit.score));
      }

      // Acceleration + Gravity
      // mit.ay = mit.ay + mit.gravity;
      
      // Velocity
      if (!mit.game_over) {
        if (
          (mit.vy < mit.v_cap && mit.ay+mit.gravity > 0) ||
          (mit.vy > -mit.v_cap && mit.ay+mit.gravity < 0)
          ) {

          // console.log(mit.ay);
          mit.vy += mit.ay;
          mit.vy += mit.gravity;
        }

        // console.log(vy, ay)

        mit.Pappu.x += mit.vx;
        mit.Pappu.y += mit.vy;

        if (mit.vy > mit.v_cap) {
          mit.vy = mit.v_cap;
        }
      }
      else {
        // on game over, he's gravity is unstoppable
        mit.vy += mit.gravity;
        mit.Pappu.y += mit.vy;
      }
    
      mit.Pappu.draw(ctx);
    }
    else {
      mit.Pappu.drawStatic(ctx);
    }

    // Calculate FPS
    mit.cur_time = new Date;
    mit.fps = 1e3 / (mit.cur_time - mit.last_time);
    mit.last_time = mit.cur_time;

    return;
  }());

};(function () {

  var Obj = {};
  Obj.size = function(obj) {
      var size = 0, key;
      for (key in obj) {
          if (obj.hasOwnProperty(key)) size++;
      }
      return size;
  };

  // Preloading audio stuff
  var loadMusic = document.getElementById("start"),
      loadAngry = document.getElementById("angry_jump"), 
      loadSad = document.getElementById("sad_jump"),
      loadHappy = document.getElementById("happy_jump"),
      loadFlap = document.getElementById("flap"),
      loadTing = document.getElementById("ting");

  // Preloading image stuff

  mit.audio = [
    loadMusic, 
    loadAngry, 
    loadSad, 
    loadHappy,
    loadFlap, 
    loadTing,
  ];

  var images = {
    angry_pakia : "http://i.imgur.com/2IJWS.png",
    backtrees : "http://i.imgur.com/HQ99N.png",
    berries : "http://i.imgur.com/2Clro.png",
    bg_combined: "http://i.imgur.com/jRLJT.png",
    branch : "http://i.imgur.com/tG1ew.png",
    clouds : "http://i.imgur.com/h4ZxP.png",
    coins : "http://i.imgur.com/EpvRf.png",
    controls : "http://i.imgur.com/Vmq49.png",
    //dig : "img/dig.png",
    fork_handle : "http://i.imgur.com/MsGPd.png",
    fork_head : "http://i.imgur.com/EdNlh.png",
    fronttrees : "http://i.imgur.com/gDtzS.png",
    grass : "http://i.imgur.com/o6Zvm.png",
    ground : "http://i.imgur.com/IJX6w.png",
    happy_pakia : "http://i.imgur.com/cTzlN.png",
    log : "http://i.imgur.com/3NhvB.png",
    pappu : "http://i.imgur.com/Vcenh.png",
    plank_bot : "http://i.imgur.com/hRoDZ.png",
    plank_mid : "http://i.imgur.com/uq5EF.png",
    plank_top : "http://i.imgur.com/ou5JQ.png",
    sad_pakia : "http://i.imgur.com/FUms1.png",
    stand : "http://i.imgur.com/UpZJE.png",
    star : "http://i.imgur.com/bOQ8T.png"
  };

  mit.image = {};

  // Get the size of an Obj
  var size = Obj.size(images);
  size += mit.audio.length;

  var counter = 0,
      percent = 0;

  var loading = document.getElementById("bar");
  var loader = document.getElementById("loading");
  var loadText = document.getElementById("loadText");

  if(!($.browser.webkit && !$.browser.chrome)) {
    for(var i = 0; i < mit.audio.length; i++) {
      var file = mit.audio[i];

      if (isNaN(file.duration)) { 
        file.addEventListener("loadeddata", function() {
          counter++;
          percent = Math.floor((counter/size*100));
          loading.style.width = percent + "%";
          loadText.innerHTML = "Loading... " + percent + "%";

          if(percent >= 100) {
            $("#loading").fadeOut();
            mit.main();
          }
        });
      }

      else {
        counter++;
        percent = Math.floor((counter/size*100));
        loading.style.width = percent + "%";
        loadText.innerHTML = "Loading... " + percent + "%";

        if(percent >= 100) {
          $("#loading").fadeOut();
          mit.main();
        }

      }
    }
  }

  else {counter += mit.audio.length}

  for(var src in images) {
    mit.image[src] = new Image();
    mit.image[src].onload = function() {
      counter++;

      percent = Math.floor(((counter)/size*100));
      loading.style.width = percent + "%";
      loadText.innerHTML = "Loading... " + percent + "%";
      
      if(percent >= 100) {
        $("#loading").fadeOut();
        mit.main();
      }

    };

    mit.image[src].src = images[src];
  }

}());
  </script>