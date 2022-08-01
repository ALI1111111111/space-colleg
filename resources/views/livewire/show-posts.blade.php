<div>


    <div class="input-group mb-3">
        <div class="input-group-prepend">
          <label class="input-group-text" for="course">Course</label>
        </div>
        <select wire:model="course" style="margin-left: 1%; width:70%;text-align:center;" class="custom-select" id="course">
          <option selected>Time</option>
          <option value="1">One</option>
          <option value="2">Two</option>
          <option value="3">Three</option>
        </select>


      </div>
      <div> {{$course}} </div>
      <div> Course: @json($course) </div>

</div>
