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
        -webkit-text-fill-color: transparent;
        /* Will override color (regardless of order) */
        -webkit-text-stroke-width: 1px;
        -webkit-text-stroke-color: black;
        letter-spacing: .2em;
        display: none;
    }

    .marquee h1 span {
        color: #2F6AEC;
        -webkit-text-fill-color: #2F6AEC;
        /* Will override color (regardless of order) */
        -webkit-text-stroke-width: 0px;
        -webkit-text-stroke-color: #2F6AEC;
    }

    @media (min-width: 768px) {
        .marquee h1 {
            display: block;
        }
    }
</style>
<div class="marquee my-28 hidden md:inline-block">
    <h1 class="font-bold text-9xl">AKADEMI • <span>HIMATIKA</span> • AKADEMI • <span>HIMATIKA</span> • </h1>
</div>

<script>
    function Marquee(selector, speed) {
        const parentSelector = document.querySelector(selector);
        const clone = parentSelector.innerHTML;
        const firstElement = parentSelector.children[0];
        let i = 0;

        parentSelector.insertAdjacentHTML('beforeend', clone);
        parentSelector.insertAdjacentHTML('beforeend', clone);

        setInterval(function() {
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
