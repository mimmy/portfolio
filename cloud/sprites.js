// Declare global variables
var imageWidth 	=	1206, 	// sprite sheet dimensions
	imageHeight =	1407, 	// sprite sheet dimensions
	xpos 		=	0, 		// current position (x)
	ypos 		=	0, 		// current position (y)
	frame 		=	0, 		// current frame (1-16)
	numFrames 	= 	42, 	// max number of frames
	frameSize 	= 	201, 	// frame dimensions (128 x 128 pixels) (ninja(200)) the size of the smurf
	character, 				// the container for the animation
	speed 		= 	0; 		// the number of pixels the character moves each frame
   
function pageIsReady(){
	character = document.getElementById("cloud"); // get the character
	// start animation
	setInterval(animate, 1000 / 15); 
}	
		
function animate() {
	//multiplying by -1 because we want to move the image to the left and up to reveal the area we want to see.
	character.style.backgroundPosition = (-xpos)+"px "+(-ypos)+"px";
	//each time around we add the frame size to our xpos, moving along the sprite sheet.
	xpos += frameSize;

	//increase the current frame so we know which frame of our animation we are currently on.
	frame += 1;
	
	//if our frame is higher than our total number of frames, we're at the end and better start over.
	if (frame >= numFrames) {
		xpos =0;
		ypos =0;
		frame=0;	
	//if we've gotten to the limit of our sprite sheet's width, we need to move down one row of frames.							
	} else if (xpos + frameSize > imageWidth){
		xpos =0;
		ypos += frameSize;
	}
	
	// if the character is heading for the right border of the screen, put him just outside the left side.
	if(character.offsetLeft > window.innerWidth){
		character.style.left = frameSize *-1 + "px";		
	}
	else{ // otherwise - move the character
		character.style.left = character.offsetLeft + speed + "px";
	}
}
