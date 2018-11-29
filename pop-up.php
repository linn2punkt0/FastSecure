<h4><?= trans('thankYou', 'title');?></h4>
<p><?= trans('thankYou', 'content');?></p>
<button><?= trans('thankYou', 'button');?></button>
<style>

.pop-up {
    width: 100%;
    height: 0;
    top: 56px;
    background-color: black;
    position: fixed;
    z-index: 500;
    pointer-events: none;
    transition: 0.5s;
    opacity:0;
  }


  .pop-up .display {
    width: 100%;
    height: 50vh;
    pointer-events: all;
  }

</style>