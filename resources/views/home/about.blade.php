<style>
    @import url(https://fonts.googleapis.com/css?family=Roboto:100,100italic,300,300italic,regular,italic,500,500italic,700,700italic,900,900italic);

*,
*::after,
*::before {
  box-sizing: inherit;
}

.marquee {
  text-transform: uppercase;
  margin-top: 100px;
  margin-bottom: 70px;
  margin-right: 15px;
  font-style: normal;
  font-weight: 700;
  font-size: 70px;
  line-height: 26px;
  color: #000;
  word-spacing: 15px;
  white-space: nowrap;
  width: 100%;
  position: relative;
}
.marquee::before, .marquee::after {
  content: "";
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 60px;
}
.marquee::before {
  transform: rotate(-1deg);
  z-index: -1;
}
.marquee::after {
  transform: rotate(-2deg);
  z-index: -2;
}
.marquee .inner {
  display: flex;
  align-items: center;
  width: 100%;
  height: 60px;
  position: relative;
  z-index: 0;
  overflow: hidden;
}
.marquee .text {
  width: 200%;
  -webkit-animation: animate 40s linear infinite;
          animation: animate 40s linear infinite;
  -webkit-animation-delay: -40s;
          animation-delay: -40s;
  padding-right: 20px;
}
.marquee .text:nth-child(2) {
  width: 200%;
  -webkit-animation: animate2 40s linear infinite;
          animation: animate2 40s linear infinite;
  -webkit-animation-delay: -20s;
          animation-delay: -20s;
}
.marquee .text:nth-child(1) span:nth-child(even) {
  color: #2563EB;
  text-shadow: 1px 0 1px rgba(255, 255, 255, 0.9), 0 1px 1px rgba(255, 255, 255, 0.9), -1px 0 1px rgba(255, 255, 255, 0.9), 0 -1px 1px rgba(255, 255, 255, 0.9);
}
.marquee .text:nth-child(2) span:nth-child(odd) {
  color: #2563EB;
  text-shadow: 1px 0 1px rgba(255, 255, 255, 0.9), 0 1px 1px rgba(255, 255, 255, 0.9), -1px 0 1px rgba(255, 255, 255, 0.9), 0 -1px 1px rgba(255, 255, 255, 0.9);
}
.marquee:hover .text {
  -webkit-animation-play-state: paused;
          animation-play-state: paused;
}
@-webkit-keyframes animate {
  0% {
    transform: translateX(100%);
  }
  100% {
    transform: translateX(-100%);
  }
}
@keyframes animate {
  0% {
    transform: translateX(100%);
  }
  100% {
    transform: translateX(-100%);
  }
}
@-webkit-keyframes animate2 {
  0% {
    transform: translateX(0);
  }
  100% {
    transform: translateX(-200%);
  }
}
@keyframes animate2 {
  0% {
    transform: translateX(0);
  }
  100% {
    transform: translateX(-200%);
  }
}
</style>

<!-- Start block -->
    <section class="bg-gray-50">
        <div class="max-w-screen-xl px-4 py-8 mx-auto space-y-12 lg:space-y-20 lg:pt-24 lg:pb-16 lg:px-6">
            <!-- Row -->
            <div class="items-center gap-8 lg:grid lg:grid-cols-2 xl:gap-16">
                <div class="text-gray-500 sm:text-lg">
                    <i class="bi bi-code-square animate-pulse text-3xl block text-blue-600"></i>
                    <p class="text-blue-500 font-medium">Komunitas Teknologi</p>
                    <h2 class="mb-4 text-3xl font-extrabold tracking-tight text-gray-900">Tentang Kami</h2>
                    <p class="mb-8 lg:text-lg">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Perspiciatis vero illum ipsum id laudantium sunt omnis sequi inventore laboriosam, officia, fuga nam tenetur? Porro, quos.</p>
                    <!-- List -->
                    <ul role="list" class="pt-8 space-y-5 border-t border-gray-200 my-7">
                            <li class="flex space-x-3">
                                <!-- Icon -->
                                <span class="text-base font-medium leading-tight text-gray-900 transition ease-in-out delay-150 hover:-translate-y-1 hover:scale-110 hover:text-blue-600 duration-300"><i class="bi bi-check-circle-fill pr-2"></i> Continuous integration and deployment</span>
                            </li>
                            <li class="flex space-x-3">
                                <!-- Icon -->
                                <span class="text-base font-medium leading-tight text-gray-900 transition ease-in-out delay-150 hover:-translate-y-1 hover:scale-110 hover:text-blue-600 duration-300"><i class="bi bi-check-circle-fill pr-2"></i> Development workflow</span>
                            </li>
                            <li class="flex space-x-3">
                                <!-- Icon -->
                                <span class="text-base font-medium leading-tight text-gray-900 transition ease-in-out delay-150 hover:-translate-y-1 hover:scale-110 hover:text-blue-600 duration-300"><i class="bi bi-check-circle-fill pr-2"></i> Knowledge management</span>
                            </li>
                    </ul>
                    <p class="mb-8 lg:text-lg">Deliver great service experiences fast - without the complexity of traditional ITSM solutions.</p>
                </div>
                <img class="hidden mx-auto mb-4 rounded-lg lg:mb-0 lg:flex" src="{{asset('img/about.png')}}" alt="dashboard feature image">
            </div>

            {{-- marquee text --}}
            <div class="marquee hidden lg:inline-block">
                <div class="inner">
                    <p class="text">
                    <span>HIMATIKA •</span>
                    <span>TRILOGI •</span>
                    <span>HIMATIKA •</span>
                    <span>TRILOGI •</span>
                    </p>
                    <p class="text">
                    <span>HIMATIKA •</span>
                    <span>TRILOGI •</span>
                    <span>HIMATIKA •</span>
                    <span>TRILOGI •</span>
                    </p>
                </div>
            </div>


            <!-- visi & misi -->
            <div class="items-center gap-8 lg:grid lg:grid-cols-2 xl:gap-16">
                <img class="hidden w-full mb-4 rounded-lg lg:mb-0 lg:flex" src="{{asset('img/visi.jpg')}}" alt="feature image 2">
                <div class="text-gray-500 sm:text-lg">
                    <i class="bi bi-bullseye animate-bounce text-2xl block text-blue-600"></i>
                    <p class="text-blue-500 font-medium">Tujuan komunitas</p>
                    <h2 class="mb-4 text-3xl font-extrabold tracking-tight text-gray-900">Gagasan</h2>
                    <p class="mb-5 lg:text-lg">Deliver great service experiences fast - without the complexity of traditional ITSM solutions. Accelerate critical development work, eliminate toil, and deploy changes with ease.</p>
                    <!-- List -->
                    <div role="list" class="pt-8 space-y-5 border-t border-gray-200 my-7">
                        <h2 class="mb-4 text-3xl font-extrabold tracking-tight text-gray-900">Tugas</h2>
                         <ul role="list" class=" space-y-5 border-gray-200 my-7">
                            <li class="flex space-x-3">
                                <!-- Icon -->
                                <span class="text-base font-medium leading-tight text-gray-900 transition ease-in-out delay-150 hover:-translate-y-1 hover:scale-110 hover:text-blue-600 duration-300"><i class="bi bi-check-circle-fill pr-2"></i> Continuous integration and deployment</span>
                            </li>
                            <li class="flex space-x-3">
                                <!-- Icon -->
                                <span class="text-base font-medium leading-tight text-gray-900 transition ease-in-out delay-150 hover:-translate-y-1 hover:scale-110 hover:text-blue-600 duration-300"><i class="bi bi-check-circle-fill pr-2"></i> Development workflow</span>
                            </li>
                            <li class="flex space-x-3">
                                <!-- Icon -->
                                <span class="text-base font-medium leading-tight text-gray-900 transition ease-in-out delay-150 hover:-translate-y-1 hover:scale-110 hover:text-blue-600 duration-300"><i class="bi bi-check-circle-fill pr-2"></i> Knowledge management</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
      </section>
    <!-- End block -->