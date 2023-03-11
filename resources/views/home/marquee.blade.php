<style>
.marquee {
  display: flex;
  overflow: hidden;
}
.marquee h1 {
  white-space: nowrap;
  text-transform: uppercase;
  align-self: center;
   color: transparent;
  -webkit-text-fill-color: transparent; /* Will override color (regardless of order) */
  -webkit-text-stroke-width: 1px;
  -webkit-text-stroke-color: black;
}
</style>

<div class="marquee my-28">
  <h1 class="font-bold text-9xl">HIMATIKA • HIMATIKA • HIMATIKA • HIMATIKA • </h1>
</div>

<script>
        function Marquee(selector, speed) {
    const parentSelector = document.querySelector(selector);
    const clone = parentSelector.innerHTML;
    const firstElement = parentSelector.children[0];
    let i = 0;
    
    parentSelector.insertAdjacentHTML('beforeend', clone);
    parentSelector.insertAdjacentHTML('beforeend', clone);

    setInterval(function () {
        firstElement.style.marginLeft = `-${i}px`;
        if (i > firstElement.clientWidth) {
            i = 0;
        }
            i = i + speed;
    }, 0);
    }

    //after window is completed load
    //1 class selector for marquee
    //2 marquee speed 0.2
    window.addEventListener('load', Marquee('.marquee', 1.5))
</script>