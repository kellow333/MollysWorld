function radioactive() {   
  var canvas = document.getElementById("canvasRadioactive");
    if (!canvas || !canvas.getContext) return;
    
  stage = new createjs.Stage(canvas);  
    stage.enableMouseOver(true);
    stage.mouseMoveOutside = true; 
    createjs.Touch.enable(stage);
    
    var imgList = ["assets/images/radioactive/radioactive (1).jpg",                   
                   "assets/images/radioactive/radioactive (2).jpg",                   
                   "assets/images/radioactive/radioactive (3).jpg",                  
                   "assets/images/radioactive/radioactive (4).jpg",                 
                   "assets/images/radioactive/radioactive (5).jpg",               
                   "assets/images/radioactive/radioactive (6).jpg",             
                   "assets/images/radioactive/radioactive (7).jpg",               
                   "assets/images/radioactive/radioactive (8).jpg",                  
                   "assets/images/radioactive/radioactive (9).jpg",               
                   "assets/images/radioactive/radioactive (10).jpg",           
                   "assets/images/radioactive/radioactive (11).jpg",         
                   "assets/images/radioactive/radioactive (12).jpg",          
                   "assets/images/radioactive/radioactive (13).jpg",            
                   "assets/images/radioactive/radioactive (14).jpg",               
                   "assets/images/radioactive/radioactive (15).jpg",             
                   "assets/images/radioactive/radioactive (16).jpg",               
                   "assets/images/radioactive/radioactive (17).jpg",             
                   "assets/images/radioactive/radioactive (18).jpg",                
                   "assets/images/radioactive/radioactive (19).jpg",               
                   "assets/images/radioactive/radioactive (20).jpg",                
                   "assets/images/radioactive/radioactive (21).jpg",                
                   "assets/images/radioactive/radioactive (22).jpg",               
                   "assets/images/radioactive/radioactive (23).jpg",                  
                   "assets/images/radioactive/radioactive (24).jpg",                 
                 ];

    var images = [], loaded = 0, currentFrame = 0, totalFrames = imgList.length; 
    var rotate360Interval, start_x;
    
    var bg = new createjs.Shape();
    stage.addChild(bg);  
    
    var bmp = new createjs.Bitmap();    
    stage.addChild(bmp);
    
    function load360Image() {
        var img = new Image();
        img.src = imgList[loaded];
        img.onload = img360Loaded;
        images[loaded] = img;   
    }
    
    function img360Loaded(event) {
        loaded++;        
        bg.graphics.clear()
        bg.graphics.beginFill("#222").drawRect(0,0,stage.canvas.width * loaded/totalFrames, stage.canvas.height);
        bg.graphics.endFill();
        
        if(loaded==totalFrames) start360();
        else load360Image();
    }

    
    function start360() {
        document.body.style.cursor='none';      
        // update-draw
        update360(0);
        
        // first rotation
        rotate360Interval = setInterval(function(){ if(currentFrame===totalFrames-1) { clearInterval(rotate360Interval); addNavigation(); } update360(1); }, 100);
    }
    

    
    function update360(dir) {
        currentFrame+=dir;
        if(currentFrame<0) currentFrame = totalFrames-1;
        else if(currentFrame>totalFrames-1) currentFrame = 0;
        bmp.image = images[currentFrame];
    }


    //------------------------------- 
     function addNavigation() { 
        stage.onMouseOver = mouseOver;
        stage.onMouseDown = mousePressed;        
        document.body.style.cursor='auto';
    }
    
    function mouseOver(event) {
        document.body.style.cursor='pointer';
    }
    
    function mousePressed(event) {
        start_x = event.rawX;
        stage.onMouseMove = mouseMoved;
        stage.onMouseUp = mouseUp;
        
        document.body.style.cursor='w-resize';        
    }
    
  function mouseMoved(event) {
        var dx = event.rawX - start_x;
        var abs_dx = Math.abs(dx);
        
        if(abs_dx>5) {
            update360(dx/abs_dx);
            start_x = event.rawX;
        }
  }
    
    function mouseUp(event) {
        stage.onMouseMove = null;
        stage.onMouseUp = null;         
        document.body.style.cursor='pointer';
  }    
    
    function handleTick() { 
         stage.update();
    }    
    
    document.body.style.cursor='progress';
    load360Image();
    
    
     // TICKER
    createjs.Ticker.addEventListener("tick", handleTick);
    createjs.Ticker.setFPS(60);
    createjs.Ticker.useRAF = true;
}