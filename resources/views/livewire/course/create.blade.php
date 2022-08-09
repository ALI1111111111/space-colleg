<div>
    {{-- A good traveler has no fixed plans and is not intent upon arriving. --}}
    <!-- Button trigger modal -->

    <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add New course</h5>
        <button wire:click="resetInput()" type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
<form wire:submit.prevent="store">

          <div class="row">
              <div class="col">
                  <input required wire:model.defer="course_name" type="text"  class="form-control" name="course_name" placeholder="Enter course Name*" required >
                  {{$course_name}}

              </div>
              <div class="col">
                  <input required wire:model.defer="course_fee" type="text"  class="form-control" name="course_fee" placeholder="Enter Course fee*" required>
                  {{$course_fee}}

              </div>

          </div>
<div class="clearfix " style="visibility: hidden" >.</div>
          <div class="row">
              <div class="col">
                  <select required wire:model.defer="course_duration" name="course_duration" class="form-select" aria-label="Default select example">
<option >  Select Duration</option>
                      <option value="3-Month">3-Month</option>
                      <option value="6-Month">6-Month</option>
                      {{-- <option value="8-Month">8-Month</option> --}}
                    </select>
              </div>
              <div class="col">
                  <input wire:model.defer="more_info" type="text" name="more_info" Placeholder="More_info" class="form-control">
              </div>
          </div>

          <div class="clearfix " style="visibility: hidden" >.</div>
      </div>
      <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary" >submit</button>
          {{-- <input  type="submit"  class="btn btn-primary"  value="submit data"> --}}
      </form>
<input type="text" wire:model.defer="dat" style="border: none">
{{-- {{$dat}} --}}
      </div>
  <!-- Modal -->

</div>
