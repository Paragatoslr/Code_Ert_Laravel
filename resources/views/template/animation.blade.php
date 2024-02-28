<style>
    .animation {
    margin: 0;
    background-image: url("{{ asset('animation/1.png') }}");
    background-size: 100%;
    background-position: center;
    font-family: "Barlow Condensed", sans-serif;
    -webkit-animation: tighten-vinette ease-out 1800ms forwards;
            animation: tighten-vinette ease-out 1800ms forwards;
  }

  @media (max-width: 769px) {
    .animation {
      background-color: #222;
      background-image: none;
    }
  }

  .images {
    pointer-events: none;
    height: 100vh;
    top: 100px;
    bottom: 0;
    right: 0;
    left: 0;
    position: absolute;
    opacity: 0.6;
    z-index: 20;
    background-size: cover;
    background-position: center;
    background-repeat: none;
    background-image: url("https://static.comicvine.com/uploads/original/11124/111240517/4986890-4700382785-29908.jpg");
  }

  @media (max-width: 769px) {
    .images {
      top:60px;
    }
  }
  .wrapper {
    height: 100vh;
    display: flex;
    align-items: center;
    justify-content: center;
  }

  .title {
    cursor: pointer;
    text-align: center;
  }
  .title:hover .restart {
    opacity: 0.8;
  }

  .restart {
    color: #fff;
    margin-top: 20px;
    font-size: 1.5rem;
    text-transform: uppercase;
    letter-spacing: -0.08rem;
    transition: opacity 150ms linear;
  }

  .code, .ert {
    position: relative;
    color: #fff;
    text-transform: uppercase;
    letter-spacing: -0.2rem;
    font-size: 5rem;
    margin: 0.05rem 0.05rem 0.5rem;
    padding: 0 0.4rem;
    display: inline-block;
  }

  .ert {
    font-weight: 500;
    letter-spacing: -0.3rem;
    transform: translateX(-95px);
  }

  .code {
    z-index: 10;
    font-weight: 800;
    transform: translateX(95px);
  }
  .code:before {
    z-index: -10;
    content: "";
    display: block;

    height: 100%;
    width: 100%;
    position: absolute;
    top: 0;
    left: 0;
  }

  .ert:after, .ert:before {
    content: "";
    display: block;
    position: absolute;
    display: block;
    left: 0.4rem;
    right: 0.4rem;
  }

  .ert:before {
    top: 0;
  }
  .ert:after {
    bottom: 0;
  }

  .wrapper.run-animation {
    -webkit-animation: shrink ease-out 4800ms forwards 600ms;
            animation: shrink ease-out 4800ms forwards 600ms;
  }
  .wrapper.run-animation .code {
    transform: translateX(95px);
    -webkit-animation: slide-out-X 750ms ease forwards;
            animation: slide-out-X 750ms ease forwards;
  }
  .wrapper.run-animation .ert {
    transform: translateX(-95px);
    color: transparent;
    -webkit-animation: slide-out-X 750ms ease forwards, show-text 300ms linear forwards 1500ms;
            animation: slide-out-X 750ms ease forwards, show-text 300ms linear forwards 1500ms;
  }
  .wrapper.run-animation .ert:before {
    transform: translateY(2.9rem);
    -webkit-animation: slide-out-Y 300ms ease forwards 750ms;
            animation: slide-out-Y 300ms ease forwards 750ms;
  }
  .wrapper.run-animation .ert:after {
    transform: translateY(-2.9rem);
    -webkit-animation: slide-out-Y 300ms ease forwards 750ms;
            animation: slide-out-Y 300ms ease forwards 750ms;
  }
  .wrapper.run-animation .restart {
    opacity: 0;
    -webkit-animation: fade-down 1200ms ease 3600ms forwards;
            animation: fade-down 1200ms ease 3600ms forwards;
  }
  .wrapper.run-animation ~ .images {
    -webkit-animation: flicker-images 1500ms 2 steps(1, end), fade-out 4500ms forwards;
            animation: flicker-images 1500ms 2 steps(1, end), fade-out 4500ms forwards;
  }

  @-webkit-keyframes slide-out-X {
    100% {
      transform: translateX(0);
    }
  }

  @keyframes slide-out-X {
    100% {
      transform: translateX(0);
    }
  }
  @-webkit-keyframes slide-out-Y {
    100% {
      transform: translateY(0);
    }
  }
  @keyframes slide-out-Y {
    100% {
      transform: translateY(0);
    }
  }
  @-webkit-keyframes show-text {
    100% {
      color: #fff;
    }
  }
  @keyframes show-text {
    100% {
      color: #fff;
    }
  }
  @-webkit-keyframes shrink {
    100% {
      transform: scale(0.8);
    }
  }
  @keyframes shrink {
    100% {
      transform: scale(0.8);
    }
  }
  @-webkit-keyframes tighten-vinette {
    100% {
      background-size: 100%;
    }
  }
  @keyframes tighten-vinette {
    100% {
      background-size: 100%;
    }
  }
  @-webkit-keyframes fade-down {
    0% {
      transform: translateY(-2rem);
      opacity: 0;
    }
    100% {
      transform: translateY(0);
      opacity: 0.5;
    }
  }
  @keyframes fade-down {
    0% {
      transform: translateY(-2rem);
      opacity: 0;
    }
    100% {
      transform: translateY(0);
      opacity: 0.5;
    }
  }
  @-webkit-keyframes fade-out {
    100% {
      opacity: 0;
    }
  }
  @keyframes fade-out {
    100% {
      opacity: 0;
    }
  }
  @-webkit-keyframes flicker-images {
    0% {
      background-image: url("{{ asset('animation/1.png') }}");
    }
    10% {
      background-image: url("{{ asset('animation/2.png') }}");
    }
    20% {
      background-image: url("{{ asset('animation/3.png') }}");
    }
    30% {
      background-image: url("{{ asset('animation/4.png') }}");
    }
    40% {
      background-image: url("{{ asset('animation/5.png') }}");
    }
    50% {
      background-image: url("{{ asset('animation/6.png') }}");
    }
    60% {
      background-image: url("{{ asset('animation/7.png') }}");
    }
    70% {
      background-image: url("{{ asset('animation/8.png') }}");
    }
    80% {
      background-image: url("{{ asset('animation/9.png') }}");
    }
    90% {
      background-image: url("{{ asset('animation/10.png') }}");
    }
    100% {
      background-image: url("{{ asset('animation/11.png') }}");
    }
  }
  @keyframes flicker-images {
    0% {
      background-image: url("{{ asset('animation/1.png') }}");
    }
    10% {
      background-image: url("{{ asset('animation/2.png') }}");
    }
    20% {
      background-image: url("{{ asset('animation/3.png') }}");
    }
    30% {
      background-image: url("{{ asset('animation/4.png') }}");
    }
    40% {
      background-image: url("{{ asset('animation/5.png') }}");
    }
    50% {
      background-image: url("{{ asset('animation/6.png') }}");
    }
    60% {
      background-image: url("{{ asset('animation/7.png') }}");
    }
    70% {
      background-image: url("{{ asset('animation/8.png') }}");
    }
    80% {
      background-image: url("{{ asset('animation/9.png') }}");
    }
    90% {
      background-image: url("{{ asset('animation/10.png') }}");
    }
    100% {
      background-image: url("{{ asset('animation/11.png') }}");
  }
}

</style>
