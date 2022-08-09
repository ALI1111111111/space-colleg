
<div id="id01" class="w3-modal">
    <div class="w3-modal-content w3-animate-zoom">

      <header class="w3-container w3-teal w3-white">
        <span onclick="document.getElementById('id01').style.display='none'"
        class="w3-button w3-display-topright">&times;</span>
        <h2>Edit Course Detail</h2>
      </header>
      <div class="clearfix " style="visibility: hidden" >.</div>
      <div class="clearfix " style="visibility: hidden" >.</div>

      <div class="w3-container">
        <form wire:submit.prevent="update">
<input hidden type="text" wire.model="post_id"  value="{{$post_id}}">
            <div class="row">
                <div class="col">
                    <label for="" class="form-label"> Course NAme</label>
                    <input required wire:model.defer="course_name" value="{{$course_name}}" type="text"  class="form-control" name="course_name" placeholder="Enter course Name*" required >
                    {{-- {{$course_name}} --}}

                </div>
                <div class="col">
                    <label for="" class="form-label"> Course Fees</label>

                    <input required wire:model.defer="course_fee" type="text"  class="form-control" value="{{$course_name}}"  name="course_fee" placeholder="Enter Course fee*" required>
                    {{-- {{$course_fee}} --}}

                </div>

            </div>
  <div class="clearfix " style="visibility: hidden" >.</div>
            <div class="row">
                <div class="col">
                    <label for="" class="form-label"> Select Duration</label>

                    <select required wire:model.defer="course_duration" name="course_duration" class="form-select" aria-label="Default select example">
  <option > {{$course_duration}}</option>
                        <option value="3-Month">3-Month</option>
                        <option value="6-Month">6-Month</option>
                        {{-- <option value="8-Month">8-Month</option> --}}
                      </select>
                </div>
                <div class="col">
                    <label for="" class="form-label"> More_info</label>

                    <input wire:model.defer="more_info" type="text" name="more_info" Placeholder="More_info" class="form-control">
                </div>
            </div>

            <div class="clearfix " style="visibility: hidden" >.</div>
        </div>
        <div class="clearfix " style="visibility: hidden" >.</div>

        <footer  class="w3-container w3-teal w3-padding-16 w3-white">

            <button type="button" class="btn btn-secondary fl-right " onclick="document.getElementById('id01').style.display='none'" style="padding: 1%">Close</button>
            <button type="submit" class="btn btn-primary fl-right" style="padding: 1%;margin-right:2%"  >submit</button>
        </footer>


    </form>

    </div>
  </div>

