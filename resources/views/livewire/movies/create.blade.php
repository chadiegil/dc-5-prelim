<div>
    <div class="card">
     <div class="card-header bg-info">
         <h3>Add Movies</h3>
     </div>
     <div class="card-body">
         <div class="form-floating mb-3">
             <input type="text" class="form-control" wire:model.defer='name'>
             <label for="name">Movie Name</label>
             @error('name')
             <div class="text-danger">{{$message}}</div>
             @enderror
         </div>

         <div class="form-floating mb-3">
             <input type="text" class="form-control" wire:model.defer='company'>
             <label for="company">Company</label>
             @error('company')
             <div class="text-danger">{{$message}}</div>
             @enderror
         </div>


         <div class="form-floating mb-3">
            <select name="genra" class="form-select" wire:model.defer='genra'>
             <option hidden="true">Select Genra</option>
             <option selected disabled>Select Genra</option>
             <option value="Love">Love</option>
             <option value="Death">Death</option>
             <option value="Action">Action</option>
             <option value="Horror">Horror</option>
             <option value="Drama">Drama</option>
             <option value="Science fiction">Science Fiction</option>
            </select>
         </div>

          <div class="form-group mb-3 d-grid gap-2 d-md-flex justify-content-end">
             <button class="btn btn-primary" type="submit" wire:click='addMovies()'>
                 Add Movies
             </button>
          </div>
     </div>
    </div>
 </div>
