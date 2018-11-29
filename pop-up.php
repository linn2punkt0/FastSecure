<h4><?= trans('thankYou', 'title');?></h4>
<p><?= trans('thankYou', 'content');?></p>
<button><?= trans('thankYou', 'button');?></button>
<style>

.pop-up {
    width: 50%;
    height: 0;
    top: 56px;
    background-color: black;
    position: fixed;
    z-index: 500;
    pointer-events: none;
    transition: 0.5s;
    opacity: 0;
    border: solid, 1px, white;
  }


  .pop-up .display {
    pointer-events: all;
    opacity: 1;
  }

</style>