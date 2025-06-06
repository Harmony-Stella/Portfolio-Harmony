<div class="pswp" tabindex="-1" role="dialog" aria-hidden="true">

<!-- Background of PhotoSwipe.
It's a separate element, as animating opacity is faster than rgba(). -->
<div class="pswp__bg"></div>

<!-- Slides wrapper with overflow:hidden. -->
<div class="pswp__scroll-wrap">

  <!-- Container that holds slides. PhotoSwipe keeps only 3 slides in DOM to save memory. -->
  <!-- don't modify these 3 pswp__item elements, data is added later on. -->
  <div class="pswp__container">
    <div class="pswp__item"></div>
    <div class="pswp__item"></div>
    <div class="pswp__item"></div>
  </div>

  <!-- Default (PhotoSwipeUI_Default) interface on top of sliding area. Can be changed. -->
  <div class="pswp__ui pswp__ui--hidden">

    <div class="pswp__top-bar">

      <!--  Controls are self-explanatory. Order can be changed. -->

      <div class="pswp__counter"></div>

      <button class="pswp__button pswp__button--close link-s" title="Close (Esc)"></button>

      <button class="pswp__button pswp__button--share link-s" title="Share"></button>

      <button class="pswp__button pswp__button--fs link-s" title="Toggle fullscreen"></button>

      <button class="pswp__button pswp__button--zoom link-s" title="Zoom in/out"></button>

      <!-- element will get class pswp__preloader-active when preloader is running -->
      <div class="pswp__preloader">
        <div class="pswp__preloader__icn">
          <div class="pswp__preloader__cut">
            <div class="pswp__preloader__donut"></div>
          </div>
        </div>
      </div>
    </div>

      <div class="pswp__share-modal pswp__share-modal--hidden pswp__single-tap">
        <div class="pswp__share-tooltip"></div>
      </div>

      <button class="pswp__button pswp__button--arrow--left link-s" title="Previous (arrow left)"></button>

      <button class="pswp__button pswp__button--arrow--right link-s" title="Next (arrow right)"></button>

      <div class="pswp__caption">
        <div class="pswp__caption__center"></div>
      </div>

  </div>

</div>

</div>