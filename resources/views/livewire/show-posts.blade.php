
        <div id="id01" class="w3-modal">
            <div class="w3-modal-content w3-animate-zoom w3-card-4">
              <header class="w3-container w3-teal  w3-padding-16">
                <span onclick="document.getElementById('id01').style.display='none'"
                class="w3-button w3-display-topright">&times;</span>
                <h2>Modal Header</h2>
              </header>
              <div class="w3-container w3-padding-24">
                <div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Enter Name</label>
                        <input type="text" wire:model.defer="name" class="form-control input-sm"  placeholder="Name">
                        <input type="text" wire:model.defer="fee" class="form-control input-sm"  placeholder="fee">
                    </div>
                    <div class="form-group">
                        <label>Enter Email</label>
                        <input type="text" class="form-control input-sm" placeholder="Enter email" wire:model.defer="duration">
                    </div>
                    <button wire:click="store()" class="btn btn-primary">Submit</button>
                </div>
              </div>
              <footer class="w3-container w3-teal w3-padding-24">
                {{-- <p>{{ $fname}}</p> --}}
              </footer>
            </div>
          </div>
