<div>
    {{-- A good traveler has no fixed plans and is not intent upon arriving. --}}
    <!-- Button trigger modal -->

    <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Register New Student</h5>
        <button wire:click="resetInput()" type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        {{-- Name --}}
        <form wire:submit.prevent="store()">
                    <div class="row">
                        <div class="col">
                            <input wire:model="f_name" type="text"  class="form-control" name="f-name" placeholder="Enter full Name" required >
        {{-- {{$f_name}} --}}
                        </div>
                        <div class="col">
                            <input type="text" wire:model.defer="father"  class="form-control" name="father" placeholder="Enter Father Name" required>

                        </div>

                    </div>
                    <div class="clearfix" style="visibility: hidden" >.</div>
                    <div class="row">
                        <div class="col">
                            <select  required wire:model.defer="course_id" class="form-select" aria-label="Default select example">
                                <option value="">Select course</option>
                                @foreach ($data as $d)
                                <option required value="{{$d->id}}"> {{$d->course_name}} {{$d->course_fee}}

                                @endforeach
                              </option>

                            </select>


                        </div>
                        <div class="col">
                            <input required wire:model.defer="deposit_fee" type="number" name="fee" class="form-control" placeholder="Deposit-Fee">
                        </div>

                    </div>
                    <div class="clearfix" style="visibility: hidden" >.</div>

        <div class="row">
            <div class="col">
                <label  style="visibility: hidden"  for="adm">cnic</label>

        <input wire:model.defer="cnic" type="number" name="cnic" placeholder="Enter cnic" class="form-control">
            </div>
            <div class="col">
                <label  for="adm">Admmission_date</label>
                <input required wire:model.defer="adm_date" type="date" id="adm" name="adm_date" class="form-control">
            </div>
        </div>
        <div class="clearfix" style="visibility: hidden" >.</div>

        <div class="row">
            <div class="col">
                <select required wire:model.defer="timing" class="form-select" aria-label="Default select example">
                    <option value="">Select Timming</option>
                    <option value="1 - 2">1 - 2 </option>
                    <option value="2 - 3">2 - 3</option>
                    <option value="3 - 4">3 - 4</option>
                    <option value="4 - 5">4 - 5</option>
                    <option value="5 - 6">5 - 6</option>
                    <option value="6 - 7">6 - 7</option>
                    <option value="7 - 8">7 - 8</option>
                    <option value="8 - 9">8 - 9</option>
                    <option value="9 - 10">9 - 10 </option>
                    <option value="10 - 11">10 - 11</option>
                    <option value="11 - 12">11 - 12</option>
                    <option value="12 - 1">12 - 1</option>
                  </select>
            </div>
            <div class="col">
                <select required wire:model.defer="session" class="form-select" aria-label="Default select example">
                    <option value="">Select Session</option>
                    <option value="AM">AM</option>
                    <option value="PM">PM</option>
                </select>
            </div>
        </div>
        <div class="clearfix" style="visibility: hidden" >.</div>

        <div class="row">
            <div class="col">
                <label for="birth">Enter Date of Birth</label>
                <input required wire:model.defer="birth" id="birth" type="date" name="birth" class="form-control">
            </div>
            <div class="col">
                <label  style="visibility: hidden"  for="adm">Select gender</label>

                <select required wire:model.defer="gender" class="form-select" aria-label="Default select example">
                    <option value="">Gender</option>
                    <option  value="male">Male</option>
                    <option value="female">Female</option>
                </select>

            </div>
        </div>
        <div class="clearfix" style="visibility: hidden" >.</div>

        <div class="row">
            <div class="col">
                <input required wire:model.defer="address" placeholder="Enter Address" type="text" name="address" class="form-control" >
            </div>
            <div class="col">
                <input wire:model.defer="more_info" type="text" name="more_info" placeholder="More_info" class="form-control">
            </div>
        </div>

                </div>
      <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary" >submit</button>
          {{-- <input  type="submit"  class="btn btn-primary"  value="submit data"> --}}
      </form>
<input type="text" wire:model="dat" style="border: none">
{{-- {{$dat}} --}}
      </div>
  <!-- Modal -->

</div>
