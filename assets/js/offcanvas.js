import $ from 'jquery'
window.$ = $;

 // Set Variables
const offCanvas = document.querySelector(".off-canvas");
const offCanvasContent = document.querySelector(".off-canvas-content")
const offCanvasToggle = document.querySelector(".canvas-toggle")
const closeOffCanvasToggle = document.querySelector(".close-canvas")

export const offCanvasFunction = (offCanvasContent) => {
    
     // Define Functions

          function OnTransitionEnd() {
               offCanvas.classList.remove("canvas--animatable")
          }

          function toggleOpenCanvas(offCanvasContent) {
               offCanvas.classList.add("canvas--animatable")
               console.log("toggle open canvas")	
               offCanvas.classList.add("canvas--visible")
               // Add close canvas listeners
                    closeOffCanvasToggle.addEventListener("click", toggleCloseCanvas, false)
                    offCanvas.addEventListener('click', checkParentClick)
                    document.querySelector(".close-canvas").addEventListener("focusout", toggleCloseCanvas)
          }
          
          function toggleCloseCanvas() {
               offCanvas.classList.add("canvas--animatable")
               console.log("toggle close canvas")
               offCanvas.classList.remove('canvas--visible')
               removeOffCanvasListeners()	
          }

          function checkParentClick(e) {
               if (e.target !== this)
                    return;
             toggleCloseCanvas()
          }

          function removeOffCanvasListeners() {
               closeOffCanvasToggle.removeEventListener('click', toggleOpenCanvas)
               offCanvas.removeEventListener('click', checkParentClick)
               console.log("remove listeners")
          }

          document.onkeydown = function(e) {
               e = e || window.event;
               if (e.keyCode == 27 && offCanvas.classList.contains("canvas--visible")) {
               //     alert('Esc key pressed.');
               toggleCloseCanvas()
               }
           };
     
     // Set Triggers
          offCanvas.addEventListener("transitionend", OnTransitionEnd, false)
          // Open Canvas
          offCanvasToggle.addEventListener("click", toggleOpenCanvas, false)
          offCanvas.addEventListener("focusin", toggleOpenCanvas, false)
          
}

