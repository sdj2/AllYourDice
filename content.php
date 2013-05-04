<!DOCTYPE html>
<!-- The hangout API JavaScript. Always include this first -->
<script src="//hangoutsapi.talkgadget.google.com/hangouts/api/hangout.js?v=1.0"></script>

<!-- Jquery, yo -->
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>

<?php $contentPath = "//allyourdice.appspot.com/static" ?>

<!-- The JavaScript for this app. This must always be a full URL not a
     relative path.
     Tip: You can load it from a local web server such as
     http://localhost/app.js for faster single user development -->
<script src="<?php echo $contentPath ?>/app.js"></script>

<style>
  body {
    font-family: Arial, Helvetica, sans-serif;
  }

  section {
    padding-left: 10px;
  }

  label {
    display: inline-block;
    margin-bottom: 8px;
    margin-right: 12px;
  }

  label > * {
    display: inline-block;
    vertical-align: middle;
  }
</style>

<h1>Your Dice: Roll Them</h1>
<section>
  <form>
    <label><img class="DieLabel" src="<?php echo $contentPath ?>/icons/32x32-d20.png" title="d20" /> <input type="number" id="d20" max="99" min="0" size="2"/></label>
    <label><img class="DieLabel" src="<?php echo $contentPath ?>/icons/32x32-d12.png" title="d12" /> <input type="number" id="d12" max="99" min="0" size="2"/></label>
    <label><img class="DieLabel" src="<?php echo $contentPath ?>/icons/32x32-d10.png" title="d10" /> <input type="number" id="d10" max="99" min="0" size="2"/></label>
    <br />
    <label><img class="DieLabel" src="<?php echo $contentPath ?>/icons/32x32-d8.png" title="d8" /> <input type="number" id="d8" max="99" min="0" size="2"/></label>
    <label><img class="DieLabel" src="<?php echo $contentPath ?>/icons/32x32-d6.png" title="d6" /> <input type="number" id="d6" max="99" min="0" size="2"/></label>
    <label><img class="DieLabel" src="<?php echo $contentPath ?>/icons/32x32-d4.png" title="d4" /> <input type="number" id="d4" max="99" min="0" size="2"/></label>
    <br />
    <label>Modifier: <input id="mod" type="number" max="999" min="-999" size="3" /></label>
    <label>Memo: <input id="memo" type="text" /></label>
    <br />
    <input type="button" id="rollButton" value="Roll"
      onClick="rollDice()" />
  </form>
  <br />
  <p>Rolls:</p>
  <div id="rolls"></div>
  <button id="clearButton" onClick="$('#rolls').html('')">Clear</button>
</section>
<div style="clear: both;"></div>