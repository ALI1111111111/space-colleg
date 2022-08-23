
<!-- Trigger/Open the Modal -->
<button onclick="document.getElementById('id02').style.display='block'"
class="w3-button">Add-fee</button>

<div id="id02" class="w3-modal">
    <div class="w3-modal-content w3-animate-zoom">

      <header class="w3-container w3-teal w3-white">
        <span onclick="document.getElementById('id02').style.display='none'"
        class="w3-button w3-display-topright">&times;</span>
        <h2>Add-Fee</h2>
      </header>
      <div class="clearfix " style="visibility: hidden" >.</div>
      <div class="clearfix " style="visibility: hidden" >.</div>

      <div class="w3-container">
      @livewire('addfee')

    </div>
  </div>
