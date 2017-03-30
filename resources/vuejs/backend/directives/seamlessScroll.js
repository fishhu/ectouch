import Vue from 'vue'

// var __sto = setInterval;     
// window.setInterval = function(callback,timeout,param){     
//     var args = Array.prototype.slice.call(arguments,2);     
//     var _cb = function(){     
//         callback.apply(null,args);     
//     }     
//     __sto(_cb,timeout);     
// }

var speed = 50
function cloneInnerHtml(el, binding) {
    let parentElWidth = el.parentNode.offsetWidth;
    let elWidth = el.offsetWidth;
    if (parentElWidth < elWidth) {
        el.innerHTML += el.innerHTML
        clearInterval(window[binding.value.winObj])
        window[binding.value.winObj] = setInterval(marquee, speed, el)
    } else {
        el.style.left = 0;
        clearInterval(window[binding.value.winObj])
    }
}

function marquee(el) {
    el.style.left = (el.offsetLeft - 1) + "px"
    if (el.offsetLeft < -parseInt(el.offsetWidth / 2)) {
        el.style.left = 0
    }
}


export default {
    bind(el, binding) {
        window[binding.value.winObj] = null
        Vue.nextTick(() => {
            cloneInnerHtml(el, binding);
        })
    },
    update(el, binding) {
        Vue.nextTick(() => {
            cloneInnerHtml(el, binding);
        })

    }
}